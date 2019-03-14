/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

/**
 *
 * @author jakec
 */
public class Studentkeywords {

    public static ArrayList<Prefscore> prefScores = new ArrayList<Prefscore>();

    static void matchkeywords() {

        for (int i = 0; i < StudentSql.unallocatedstudents.size(); i++) {
            String studentId = StudentSql.unallocatedstudents.get(i).getStudentId();
            float prefScore = 0;

            for (int j = 0; j < SupervisorSql.supervisors.size(); j++) {
                String supervisorId = SupervisorSql.supervisors.get(j).getSupervisorId();
                String projectInterests = SupervisorSql.supervisors.get(j).getProjectInterests();
                float totalInterests = 0;
                float countInterests = 0;
                System.out.println("Searching Id:" + studentId + " Details against Supervisor:" + supervisorId);
                for (String Interest : projectInterests.split(",")) {
                    totalInterests++;
                    System.out.println("TotalInterests: " + totalInterests);
                    System.out.println(Interest);

                    if (StudentSql.unallocatedstudents.get(i).getProjectDetails().contains(Interest)) {
                        //System.out.println("StudentId: " + StudentSql.unallocatedstudents.get(i).getStudentId());
                        countInterests++;
                        System.out.println("Interests found: " + countInterests);
                    }
                }
                prefScore = countInterests / totalInterests;
                System.out.println(prefScore);
                String prefScoreStr = Float.toString(prefScore);
                //System.out.println(StudentSql.students.get(i).getProjectDetails());

                prefScores.add(new Prefscore(studentId, supervisorId, prefScoreStr));
            }
                    prefScores.forEach(Prefscore -> {
                System.out.println("StudentId:" + Prefscore.getStudentId() + " SupervisorId:" + Prefscore.getSupervisorId() + " PrefScore:" + Prefscore.getPrefScore());
            });
        }
    }

}
