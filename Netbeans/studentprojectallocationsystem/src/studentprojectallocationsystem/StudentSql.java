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
    
    
    static void runSelect() {
        Student student = new Student();
        
        ArrayList<Student> students = new ArrayList<Student>( );
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
//here sonoo is database name, root is username and password  
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM students INNER JOIN projects ON students.Id = projects.Id");
            while (rs.next()) {
                String studentId = rs.getString("id");
                String studentFirstname = rs.getString("firstname");
                String studentLastname = rs.getString("lastname");
                String projectId = rs.getString("id");
                String projectTitle = rs.getString("projecttitle");
                String projectDetails = rs.getString("projectdetails");
                
                student.setStudentId(studentId);
                student.setStudentFirstname(studentFirstname);
                student.setStudentLastname(studentLastname);
                student.setProjectId(projectId);
                student.setProjectTitle(projectTitle);
                student.setProjectDetails(projectDetails);
                
                students.add(student);
                //students.add(new Student(studentId,firstName,lastName,projectId,projectTitle, projectDetails));
            }
            
            System.out.println(students);
            String select = students.get(0).getProjectDetails();
            System.out.println(select);
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
        
    }

}
