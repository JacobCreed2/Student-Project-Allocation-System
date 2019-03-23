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
import static studentprojectallocationsystem.Studentkeywords.canAllocate;
import static studentprojectallocationsystem.StudentSql.StudentsList;

/**
 *
 * @author jakec
 */
public class SupervisorSql {

    public static ArrayList<Supervisor> SupervisorsList = new ArrayList<Supervisor>();

    static void selectSupervisors() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
//here sonoo is database name, root is username and password  
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
                //System.out.println(students);
            }

            SupervisorsList.forEach(supervisor -> {
                System.out.println("Supervisor ID " + supervisor.getSupervisorId() + " Project interests: " + supervisor.getProjectInterests() + " Current Allocation " + supervisor.getCurrentAllocation());
            });

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    static void insertRandomTables() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");

            String studentId = canAllocate.get(0).getStudentId();
            String supervisorId = canAllocate.get(0).getSupervisorId();
            for (int j = 0; j < StudentsList.size(); j++) {
                String studentStudentId = StudentsList.get(j).getStudentId();
                if (studentStudentId.equals(studentId)) {
                    String studentFirstname = StudentsList.get(j).getStudentFirstname();
                    String studentLastname = StudentsList.get(j).getStudentLastname();
                    String projectId = StudentsList.get(j).getProjectId();
                    String projectTitle = StudentsList.get(j).getProjectTitle();
                    String projectDetails = StudentsList.get(j).getProjectDetails();

                    PreparedStatement pstmt = con.prepareStatement("INSERT INTO randomallocation (StudentId,SupervisorId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    pstmt.setString(1, studentId);
                    pstmt.setString(2, supervisorId);
                    pstmt.setString(3, studentFirstname);
                    pstmt.setString(4, studentLastname);
                    pstmt.setString(5, projectId);
                    pstmt.setString(6, projectTitle);
                    pstmt.setString(7, projectDetails);
                    pstmt.executeUpdate();
                }
            }

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
                    String supId = supervisorId;
                    String Allocated = "1";

                    PreparedStatement pstmt = con.prepareStatement("UPDATE projects SET SupervisorId = ?, Allocated = ? WHERE StudentId = ?");
                    pstmt.setString(1, supId);
                    pstmt.setString(2, Allocated);
                    pstmt.setString(3, studentId);
                    pstmt.executeUpdate();
                    PreparedStatement pstmt1 = con.prepareStatement("UPDATE supervisors SET CurrentAllocation = CurrentAllocation + 1 WHERE Id = ?");
                    pstmt1.setString(1, supId);
                    pstmt1.executeUpdate();
                    
                }
            }

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    static void createSupervisorpref() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            stmt.execute("DROP TABLE supervisorpref");
            stmt.execute("CREATE TABLE supervisorpref(Id int NOT NULL AUTO_INCREMENT, StudentId int, SupervisorId int, PrefScore float, PRIMARY KEY(Id))");
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

}
