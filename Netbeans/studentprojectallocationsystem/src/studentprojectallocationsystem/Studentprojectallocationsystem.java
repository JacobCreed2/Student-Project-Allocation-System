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
    
    SupervisorSql.selectUnallocatedSupervisors();
    
    StudentSql.createRandAllocTable();
    
    StudentSql.createNeedsAllocTable();
    
    StudentSql.sortStudentsCurrentAllocation();
    
    StudentSql.selectUnallocatedStudents();
    
    StudentSql.selectRandomAllocationStudents();
    
    Studentkeywords.shuffleStudents();
    
    Studentkeywords.matchkeywords();
    
    Studentkeywords.findBestSupervisor();
       
    }
    
}
