/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;



/**
 *
 * @author jakec
 */
public class Studentprojectallocationsystem {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws Exception {
        
    StudentSql.selectAllStudents();
    
    SupervisorSql.selectSupervisors();
    
    //Studentkeywords.runNLP();
    
    //Studentkeywords.cleanString();
    
    StudentSql.createRandAllocTable();
    
    StudentSql.createNeedsAllocTable();
    
    StudentSql.createAllocTable();
    
    StudentSql.insertAllocTables();
    
    StudentSql.selectUnallocatedStudents();
    
    SupervisorSql.createSupervisorpref();
    
    Studentkeywords.shuffleStudents();
    
    Studentkeywords.matchkeywords();
    
    Studentkeywords.test();
    
    Studentkeywords.findBestSupervisor();
    
    //SupervisorSql.insertPrefTables();
       
    }
    
}
