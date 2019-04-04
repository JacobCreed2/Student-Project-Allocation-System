/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import static studentprojectallocationsystem.StudentSql.RandomstudentsList;
import static studentprojectallocationsystem.StudentSql.StudentsList;
import static studentprojectallocationsystem.Studentkeywords.PrefscoresList;

/**
 *
 * @author jakec
 */
public class SupervisorSql {

    public static ArrayList<Supervisor> SupervisorsList = new ArrayList<Supervisor>();

    static void selectUnallocatedSupervisors() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM supervisors WHERE currentAllocation < maxAllocation");
            while (rs.next()) {
                String supervisorId = rs.getString("Id");
                String supervisorFirstname = rs.getString("firstname");
                String supervisorLastname = rs.getString("lastname");
                String projectInterests = rs.getString("projectinterests");
                String currentAllocation = rs.getString("currentAllocation");
                String maxAllocation = rs.getString("maxAllocation");

                SupervisorsList.add(new Supervisor(supervisorId, supervisorFirstname, supervisorLastname, projectInterests, currentAllocation, maxAllocation));
            }

            SupervisorsList.forEach(supervisor -> {
                System.out.println("Supervisor ID " + supervisor.getSupervisorId() + " Project interests: " + supervisor.getProjectInterests() + " Current Allocation " + supervisor.getCurrentAllocation());
            });

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    static void insertAllocStudent(String studentId, String supervisorId) {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");

            for (int j = 0; j < StudentsList.size(); j++) {
                String Id_StudentList = StudentsList.get(j).getStudentId();
                if (Id_StudentList.equals(studentId)) {
                    String Allocated = "1";

                    PreparedStatement pstmt = con.prepareStatement("UPDATE projects SET SupervisorId = ?, Allocated = ? WHERE StudentId = ?");
                    pstmt.setString(1, supervisorId);
                    pstmt.setString(2, Allocated);
                    pstmt.setString(3, studentId);
                    pstmt.executeUpdate();
                    PreparedStatement pstmt1 = con.prepareStatement("UPDATE supervisors SET CurrentAllocation = CurrentAllocation + 1 WHERE Id = ?");
                    pstmt1.setString(1, supervisorId);
                    pstmt1.executeUpdate();

                }
            }

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }

    }

    static void allocateStudents(String studentId, String supervisorId, int prefi) {

        for (int i = 0; i < SupervisorsList.size(); i++) {
            String Id_SupervisorList = SupervisorsList.get(i).getSupervisorId();
            if (Id_SupervisorList.equals(supervisorId)) {
                int max = Integer.parseInt(SupervisorsList.get(i).getMaxAllocation());
                int current = Integer.parseInt(SupervisorsList.get(i).getCurrentAllocation());
                int updated = current + 1;
                if (current < max) {
                    SupervisorsList.get(i).setCurrentAllocation(Integer.toString(updated));
                    insertAllocStudent(studentId, supervisorId);
                    Prefscore.removeStudent(PrefscoresList, PrefscoresList.get(prefi));
                } else if (current == max) {
                    SupervisorsList.remove(i);
                    Prefscore.removeSupervisor(PrefscoresList, PrefscoresList.get(prefi));
                    System.out.println("Removed: " + PrefscoresList);
                }

            }
        }

    }

    static void allocateRandomStudents(String studentId, int prefi) {

        for (int i = 0; i < SupervisorsList.size(); i++) {
            String Id_SupervisorList = SupervisorsList.get(i).getSupervisorId();
            int max = Integer.parseInt(SupervisorsList.get(i).getMaxAllocation());
            int current = Integer.parseInt(SupervisorsList.get(i).getCurrentAllocation());
            int updated = current + 1;
            if (current < max) {
                studentId = RandomstudentsList.get(prefi).getStudentId();
                SupervisorsList.get(i).setCurrentAllocation(Integer.toString(updated));
                insertAllocStudent(studentId, Id_SupervisorList);
                RandomStudent.removeStudent(RandomstudentsList, RandomstudentsList.get(prefi));
            } else if (current == max) {
                SupervisorsList.remove(i);
                System.out.println("Removed random: " + RandomstudentsList);
            }
        }
    }
}
