/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import java.sql.*;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashSet;
import java.util.Set;

/**
 *
 * @author jakec
 */
public class StudentSql {

    public static ArrayList<Student> unallocatedstudents = new ArrayList<Student>();
    public static ArrayList<RandomStudent> RandomstudentsList = new ArrayList<RandomStudent>();
    public static ArrayList<Student> StudentsList = new ArrayList<Student>();
    public static int countStudents = 0;
    public static int totalAllocationSupervisors = 0;

    static void checkNumberofStudents() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT COUNT(Id) FROM students");
            while (rs.next()) {
                String countID = rs.getString("COUNT(Id)");
                countStudents = Integer.parseInt(countID);
            }
            
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    static void checkTotalAllocation() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT SUM(MaxAllocation) FROM supervisors");
            while (rs.next()) {
                String totalAllocation = rs.getString("SUM(MaxAllocation)");
                totalAllocationSupervisors = Integer.parseInt(totalAllocation);
            }
            
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    static void selectAllStudents() {

        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM students INNER JOIN projects ON students.Id = projects.studentId");
            while (rs.next()) {
                String studentId = rs.getString("Students.Id");
                String supervisorId = rs.getString("SupervisorId");
                String studentFirstname = rs.getString("firstname");
                String studentLastname = rs.getString("lastname");
                String projectId = rs.getString("projects.Id");
                String projectTitle = rs.getString("projecttitle");
                String projectDetails = rs.getString("projectdetails");
                String projectAllocated = rs.getString("Allocated");

                StudentsList.add(new Student(studentId, supervisorId, studentFirstname, studentLastname, projectId, projectTitle, projectDetails, projectAllocated));
                //System.out.println(students);
            }

//            StudentsList.forEach(student -> {
//                System.out.println("Student Project ID " + student.getProjectId() + " ProjectTitle " + student.getProjectTitle() + " SupervisorId " + student.getSupervisorId());
//            });

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }

    }

    static void selectUnallocatedStudents() {

        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM needsallocating");
            while (rs.next()) {
                String studentId = rs.getString("StudentId");
                String supervisorId = rs.getString("SupervisorId");
                String studentFirstname = rs.getString("firstname");
                String studentLastname = rs.getString("lastname");
                String projectId = rs.getString("projectId");
                String projectTitle = rs.getString("projecttitle");
                String projectDetails = rs.getString("projectdetails");
                String projectAllocated = rs.getString("Allocated");

                unallocatedstudents.add(new Student(studentId, supervisorId, studentFirstname, studentLastname, projectId, projectTitle, projectDetails, projectAllocated));
            }

//            unallocatedstudents.forEach(student -> {
//                System.out.println("Student Project ID " + student.getProjectId() + " ProjectTitle " + student.getProjectTitle() + " SupervisorId " + student.getSupervisorId());
//            });

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }

    }

    static void checkForUnAllocatedStudents() {

        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM needsallocating");
            while (rs.next()) {
                String studentId = rs.getString("StudentId");
                String supervisorId = rs.getString("SupervisorId");
                String studentFirstname = rs.getString("firstname");
                String studentLastname = rs.getString("lastname");
                String projectId = rs.getString("projectId");
                String projectTitle = rs.getString("projecttitle");
                String projectDetails = rs.getString("projectdetails");

                RandomstudentsList.add(new RandomStudent(studentId, supervisorId, studentFirstname, studentLastname, projectId, projectTitle, projectDetails));
            }

//            RandomstudentsList.forEach(student -> {
//                System.out.println("Checking Remaining: Student Project ID " + student.getProjectId() + " ProjectTitle " + student.getProjectTitle() + " SupervisorId " + student.getSupervisorId());
//            });

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }

    }

    static void selectRandomAllocationStudents() {

        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM randomallocation");
            while (rs.next()) {
                String studentId = rs.getString("StudentId");
                String supervisorId = rs.getString("SupervisorId");
                String studentFirstname = rs.getString("firstname");
                String studentLastname = rs.getString("lastname");
                String projectId = rs.getString("projectId");
                String projectTitle = rs.getString("projecttitle");
                String projectDetails = rs.getString("projectdetails");

                RandomstudentsList.add(new RandomStudent(studentId, supervisorId, studentFirstname, studentLastname, projectId, projectTitle, projectDetails));
            }

//            RandomstudentsList.forEach(student -> {
//                System.out.println("Random: " + "Student Project ID " + student.getProjectId() + " ProjectTitle " + student.getProjectTitle() + " SupervisorId " + student.getSupervisorId());
//            });

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }

    }

    static void createRandAllocTable() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            stmt.execute("DROP TABLE randomallocation");
            stmt.execute("CREATE TABLE randomallocation(Id int NOT NULL AUTO_INCREMENT, StudentId int, SupervisorId int, FirstName varchar(20), LastName varchar(20), ProjectId int, ProjectTitle text, ProjectDetails text, PRIMARY KEY(Id))");
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    static void createNeedsAllocTable() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            stmt.execute("DROP TABLE needsallocating");
            stmt.execute("CREATE TABLE needsallocating(Id int NOT NULL AUTO_INCREMENT, StudentId int, SupervisorId int, FirstName varchar(20), LastName varchar(20), ProjectId int, ProjectTitle text, ProjectDetails text, Allocated int, PRIMARY KEY(Id))");
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    static void removeStudentsfromNeedAllocTable(String studentId) {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");

            PreparedStatement pstmt = con.prepareStatement("DELETE FROM needsallocating WHERE StudentId = ?");
            pstmt.setString(1, studentId);
            pstmt.executeUpdate();

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

    static void sortStudentsCurrentAllocation() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            String one = "1";
            String zero = "0";

            for (int i = 0; i < StudentsList.size(); i++) {
                if (StudentsList.get(i).getProjectTitle() == null && StudentsList.get(i).getSupervisorId() == null) { //Students don't have any information so need to be randomly alloacted
                    String studentId = StudentsList.get(i).getStudentId();
                    String supervisorId = StudentsList.get(i).getSupervisorId();
                    String studentFirstname = StudentsList.get(i).getStudentFirstname();
                    String studentLastname = StudentsList.get(i).getStudentLastname();
                    String projectId = StudentsList.get(i).getProjectId();
                    String projectTitle = StudentsList.get(i).getProjectTitle();
                    String projectDetails = StudentsList.get(i).getProjectDetails();

                    PreparedStatement pstmt = con.prepareStatement("INSERT INTO randomallocation (StudentId,SupervisorId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    pstmt.setString(1, studentId);
                    pstmt.setString(2, supervisorId);
                    pstmt.setString(3, studentFirstname);
                    pstmt.setString(4, studentLastname);
                    pstmt.setString(5, projectId);
                    pstmt.setString(6, projectTitle);
                    pstmt.setString(7, projectDetails);
                    pstmt.executeUpdate();
                    System.out.println("Needs random allocation " + studentId + " " + studentFirstname);
                } else if (StudentsList.get(i).getProjectTitle() != null && StudentsList.get(i).getSupervisorId() != null && StudentsList.get(i).getProjectAllocated().equals(zero)) { //Students haven't been allocated.
                    String studentId = StudentsList.get(i).getStudentId();
                    String supervisorId = StudentsList.get(i).getSupervisorId();
                    String studentFirstname = StudentsList.get(i).getStudentFirstname();
                    String studentLastname = StudentsList.get(i).getStudentLastname();
                    String projectId = StudentsList.get(i).getProjectId();
                    String projectTitle = StudentsList.get(i).getProjectTitle();
                    String projectDetails = StudentsList.get(i).getProjectDetails();
                    String allocated = StudentsList.get(i).getProjectAllocated();

                    PreparedStatement pstmt = con.prepareStatement("INSERT INTO needsallocating (StudentId,SupervisorId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails, Allocated) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                    pstmt.setString(1, studentId);
                    pstmt.setString(2, supervisorId);
                    pstmt.setString(3, studentFirstname);
                    pstmt.setString(4, studentLastname);
                    pstmt.setString(5, projectId);
                    pstmt.setString(6, projectTitle);
                    pstmt.setString(7, projectDetails);
                    pstmt.setString(8, allocated);
                    pstmt.executeUpdate();
                    System.out.println("Needs allocating " + studentId + " " + studentFirstname);
                } else if (StudentsList.get(i).getProjectTitle() != null && StudentsList.get(i).getSupervisorId() != null && StudentsList.get(i).getProjectAllocated().equals(one)) { //Students have been allocated
                    System.out.println("This student is already allocated. Ignoring...");
                } else {
                    System.out.println("Can't be catergorised");
                }
            }
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

}
