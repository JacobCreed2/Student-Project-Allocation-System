/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import static studentprojectallocationsystem.StudentSql.students;

/**
 *
 * @author jakec
 */
public class SupervisorSql {
    public static ArrayList<Supervisor> supervisors = new ArrayList<Supervisor>();
    
    static void selectSupervisors(){
                try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
//here sonoo is database name, root is username and password  
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM supervisors WHERE currentAllocation < maxAllocation");
            while (rs.next()) {
                String supervisorId = rs.getString("SupervisorId");
                String supervisorFirstname = rs.getString("firstname");
                String supervisorLastname = rs.getString("lastname");
                String projectInterests = rs.getString("projectinterests");
                String currentAllocation = rs.getString("currentAllocation");
                String maxAllocation = rs.getString("maxAllocation");
                
                supervisors.add(new Supervisor(supervisorId,supervisorFirstname,supervisorLastname,projectInterests,currentAllocation, maxAllocation));
                //System.out.println(students);
            }

            supervisors.forEach(supervisor -> {
                System.out.println("Supervisor ID " + supervisor.getSupervisorId() + " Project interests: " + supervisor.getProjectInterests() + " Current Allocation " + supervisor.getCurrentAllocation());
            });

            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }
    
    static void createSupervisorpref(){
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/spa-db", "root", "");
            Statement stmt = con.createStatement();
            stmt.execute("DROP TABLE supervisorpref");
            stmt.execute("CREATE TABLE supervisorpref(Id int NOT NULL AUTO_INCREMENT, StudentId int, SupervisorId int, Preference float, PRIMARY KEY(Id))");  
            con.close();
        } catch (Exception e) {
            System.out.println(e);
        }
    }
    
}
