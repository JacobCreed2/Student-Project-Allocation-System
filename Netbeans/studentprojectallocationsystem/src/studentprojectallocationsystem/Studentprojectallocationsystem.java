/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import static studentprojectallocationsystem.StudentSql.countStudents;
import static studentprojectallocationsystem.StudentSql.totalAllocationSupervisors;

/**
 *
 * @author jakec
 */
public class Studentprojectallocationsystem {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws Exception {

        StudentSql.checkNumberofStudents();

        StudentSql.checkTotalAllocation();

        if (countStudents <= totalAllocationSupervisors) {
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
            
            System.out.println("Success! all students allocated.");
        }else{
            System.out.println("Not enough supervisors allocation cannot satify the students. Please check the  total allocation. Cancelling Allocation...");
        }

    }

}
