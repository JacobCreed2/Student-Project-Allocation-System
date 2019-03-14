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
    public static ArrayList<Student> unallocatedstudents = new ArrayList<Student>();
    public static ArrayList<Student> students = new ArrayList<Student>();
    
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
    
    static void selectAllStudents() {

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
                String projectAllocated = rs.getString("Allocated");
                
                students.add(new Student(studentId,supervisorId,studentFirstname,studentLastname,projectId,projectTitle, projectDetails,projectAllocated));
                //System.out.println(students);
            }

            students.forEach(student -> {
                System.out.println("Student Project ID " + student.getProjectId() + " ProjectTitle " + student.getProjectTitle() + " SupervisorId " + student.getSupervisorId());
            });

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
//here sonoo is database name, root is username and password  
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
                
                unallocatedstudents.add(new Student(studentId,supervisorId,studentFirstname,studentLastname,projectId,projectTitle, projectDetails,projectAllocated));
                //System.out.println(students);
            }

            unallocatedstudents.forEach(student -> {
                System.out.println("Student Project ID " + student.getProjectId() + " ProjectTitle " + student.getProjectTitle() + " SupervisorId " + student.getSupervisorId());
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
            stmt.execute("DROP TABLE randomallocation");
            stmt.execute("CREATE TABLE randomallocation(Id int NOT NULL AUTO_INCREMENT, StudentId int, SupervisorId int, FirstName varchar(20), LastName varchar(20), ProjectId int, ProjectTitle text, ProjectDetails text, PRIMARY KEY(Id))");  
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
            stmt.execute("CREATE TABLE needsallocating(Id int NOT NULL AUTO_INCREMENT, StudentId int, SupervisorId int, FirstName varchar(20), LastName varchar(20), ProjectId int, ProjectTitle text, ProjectDetails text, Allocated int, PRIMARY KEY(Id))");  
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
            stmt.execute("DROP TABLE allocated");
            stmt.execute("CREATE TABLE allocated(Id int NOT NULL AUTO_INCREMENT, StudentId int, SupervisorId int, FirstName varchar(20), LastName varchar(20), ProjectId int, ProjectTitle text, ProjectDetails text, PRIMARY KEY(Id))");  
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }
    
    static void insertAllocTables (){
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            String one = "1";
            String zero = "0";
            
            for (int i = 0; i < students.size(); i++) {
                if (students.get(i).getProjectTitle() == null && students.get(i).getSupervisorId() == null) { //Students don't have any information so need to be randomly alloacted
                    String studentId = students.get(i).getStudentId();
                    String supervisorId = students.get(i).getSupervisorId();
                    String studentFirstname = students.get(i).getStudentFirstname();
                    String studentLastname = students.get(i).getStudentLastname();
                    String projectId = students.get(i).getProjectId();
                    String projectTitle = students.get(i).getProjectTitle();
                    String projectDetails = students.get(i).getProjectDetails();
                    //String sql = "INSERT INTO 'notallocated' (StudentId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES ('" + studentId + "','" + studentFirstname + "','" + studentLastname + "','" + projectId + "','" + projectTitle + "','" + projectDetails + "')"; 
                    PreparedStatement pstmt = con.prepareStatement("INSERT INTO randomallocation (StudentId,SupervisorId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    pstmt.setString(1, studentId);
                    pstmt.setString(2, supervisorId);
                    pstmt.setString(3, studentFirstname);
                    pstmt.setString(4, studentLastname);
                    pstmt.setString(5, projectId);
                    pstmt.setString(6, projectTitle);
                    pstmt.setString(7, projectDetails);
                    pstmt.executeUpdate();
                    System.out.println("Needs random allocation " + studentId);
                    System.out.println("Needs random allocation " + studentFirstname);
                }else if (students.get(i).getProjectTitle() != null && students.get(i).getSupervisorId() != null && students.get(i).getProjectAllocated().equals(zero)) { //Students haven't been allocated.
                    String studentId = students.get(i).getStudentId();
                    String supervisorId = students.get(i).getSupervisorId();
                    String studentFirstname = students.get(i).getStudentFirstname();
                    String studentLastname = students.get(i).getStudentLastname();
                    String projectId = students.get(i).getProjectId();
                    String projectTitle = students.get(i).getProjectTitle();
                    String projectDetails = students.get(i).getProjectDetails();
                    String allocated = students.get(i).getProjectAllocated();
                    //String sql = "INSERT INTO 'notallocated' (StudentId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES ('" + studentId + "','" + studentFirstname + "','" + studentLastname + "','" + projectId + "','" + projectTitle + "','" + projectDetails + "')"; 
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
                    System.out.println("Needs allocating " + studentId);
                    System.out.println("Needs allocating " + studentFirstname);
                }else if (students.get(i).getProjectTitle() != null && students.get(i).getSupervisorId() != null && students.get(i).getProjectAllocated().equals(one)) { //Students have been allocated
                    String studentId = students.get(i).getStudentId();
                    String supervisorId = students.get(i).getSupervisorId();
                    String studentFirstname = students.get(i).getStudentFirstname();
                    String studentLastname = students.get(i).getStudentLastname();
                    String projectId = students.get(i).getProjectId();
                    String projectTitle = students.get(i).getProjectTitle();
                    String projectDetails = students.get(i).getProjectDetails();
                    //String sql = "INSERT INTO 'notallocated' (StudentId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES ('" + studentId + "','" + studentFirstname + "','" + studentLastname + "','" + projectId + "','" + projectTitle + "','" + projectDetails + "')"; 
                    PreparedStatement pstmt = con.prepareStatement("INSERT INTO allocated (StudentId,SupervisorId,FirstName,LastName,ProjectId,ProjectTitle,ProjectDetails) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    pstmt.setString(1, studentId);
                    pstmt.setString(2, supervisorId);
                    pstmt.setString(3, studentFirstname);
                    pstmt.setString(4, studentLastname);
                    pstmt.setString(5, projectId);
                    pstmt.setString(6, projectTitle);
                    pstmt.setString(7, projectDetails);
                    pstmt.executeUpdate();
                    System.out.println("Allocated " + studentId);
                    System.out.println("Allocated " + studentFirstname);
                }else{
                    System.out.println("Can't be catergorised");
                }
            }
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }

}
