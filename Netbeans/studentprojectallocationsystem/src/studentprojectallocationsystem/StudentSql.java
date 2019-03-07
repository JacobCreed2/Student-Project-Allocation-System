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
//    public static String studentId;
//    public static String firstName;
//    public static String lastName;
//    public static String projectId;
//    public static String projectTitle;
//    public static String projectDetails;
    public static ArrayList<Student> students = new ArrayList<Student>( );
    
//    static void methodname(){
//        try {
//            Class.forName("com.mysql.jdbc.Driver");
//            Connection con = DriverManager.getConnection(
//                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
//            Statement stmt = con.createStatement();
//            ResultSet rs = stmt.executeQuery("");
//            while (rs.next()) {
//                
//            }
//            con.close();
//        } catch (Exception e) {
//            System.out.println(e);
//        }
//    }
    
    static void runSelect() {

        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
//here sonoo is database name, root is username and password  
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
                
                students.add(new Student(studentId,supervisorId,studentFirstname,studentLastname,projectId,projectTitle, projectDetails));
                //System.out.println(students);
            }

            students.forEach(student -> {
                System.out.println("Student Project ID " + student.getProjectId() + " ProjectTitle " + student.getProjectTitle());
            });

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
        
    }
    
    static void createRandAllocTable (){
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            stmt.execute("DROP TABLE notallocated");
            stmt.execute("CREATE TABLE randomallocation(Id int NOT NULL AUTO_INCREMENT, StudentId int, FirstName varchar(20), LastName varchar(20), ProjectId int, ProjectTitle text, ProjectDetails text, PRIMARY KEY(Id))");  
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }
    
    static void createNeedsAllocTable (){
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            stmt.execute("DROP TABLE needsallocating");
            stmt.execute("CREATE TABLE needsallocating(Id int NOT NULL AUTO_INCREMENT, StudentId int, FirstName varchar(20), LastName varchar(20), ProjectId int, ProjectTitle text, ProjectDetails text, PRIMARY KEY(Id))");  
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }
    
        static void createAllocTable (){
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            //stmt.execute("DROP TABLE Allocted");
            stmt.execute("CREATE TABLE Allocated(Id int NOT NULL AUTO_INCREMENT, StudentId int, FirstName varchar(20), LastName varchar(20), ProjectId int, ProjectTitle text, ProjectDetails text, PRIMARY KEY(Id))");  
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }
    
    static void insertRandAllocTable (){
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            
            for (int i = 0; i < students.size(); i++) {
                if (students.get(i).getProjectTitle() == null) {
                    String studentId = students.get(i).getStudentId();
                    String studentFirstname = students.get(i).getStudentFirstname();
                    String studentLastname = students.get(i).getStudentLastname();
                    String projectId = students.get(i).getProjectId();
                    String projectTitle = students.get(i).getProjectTitle();
                    String projectDetails = students.get(i).getProjectDetails();
                    //String sql = "INSERT INTO 'notallocated' (StudentId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES ('" + studentId + "','" + studentFirstname + "','" + studentLastname + "','" + projectId + "','" + projectTitle + "','" + projectDetails + "')"; 
                    PreparedStatement pstmt = con.prepareStatement("INSERT INTO randomallocation (StudentId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES (?, ?, ?, ?, ?, ?)");
                    pstmt.setString(1, studentId);
                    pstmt.setString(2, studentFirstname);
                    pstmt.setString(3, studentLastname);
                    pstmt.setString(4, projectId);
                    pstmt.setString(5, projectTitle);
                    pstmt.setString(6, projectDetails);
                    pstmt.executeUpdate();
                    System.out.println("doesn't have project " + studentId);
                    System.out.println("doesn't have project " + studentFirstname);
                }else if (students.get(i).getProjectTitle() == null) {
                    
                }else   {
                    String studentId = students.get(i).getStudentId();
                    String studentFirstname = students.get(i).getStudentFirstname();
                    String studentLastname = students.get(i).getStudentLastname();
                    String projectId = students.get(i).getProjectId();
                    String projectTitle = students.get(i).getProjectTitle();
                    String projectDetails = students.get(i).getProjectDetails();
                    //String sql = "INSERT INTO 'notallocated' (StudentId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES ('" + studentId + "','" + studentFirstname + "','" + studentLastname + "','" + projectId + "','" + projectTitle + "','" + projectDetails + "')"; 
                    PreparedStatement pstmt = con.prepareStatement("INSERT INTO needsallocating (StudentId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES (?, ?, ?, ?, ?, ?)");
                    pstmt.setString(1, studentId);
                    pstmt.setString(2, studentFirstname);
                    pstmt.setString(3, studentLastname);
                    pstmt.setString(4, projectId);
                    pstmt.setString(5, projectTitle);
                    pstmt.setString(6, projectDetails);
                    pstmt.executeUpdate();
                    System.out.println(studentId);
                    System.out.println(studentFirstname);
                }
            }
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

}
