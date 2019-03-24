/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.Scanner;
import static studentprojectallocationsystem.StudentSql.unallocatedstudents;
import static studentprojectallocationsystem.SupervisorSql.SupervisorsList;
import static studentprojectallocationsystem.StudentSql.StudentsList;

/**
 *
 * @author jakec
 */
public class Studentkeywords {

    public static ArrayList<Prefscore> PrefscoresList = new ArrayList<Prefscore>();
    public static ArrayList<Prefscore> canAllocate = new ArrayList<Prefscore>();

    static void shuffleStudents() {

        Collections.shuffle(unallocatedstudents);

        System.out.println("Shuffled: " + unallocatedstudents);

    }

    static void matchkeywords() {

        for (int i = 0; i < StudentSql.unallocatedstudents.size(); i++) {
            String studentId = StudentSql.unallocatedstudents.get(i).getStudentId();
            int prefScore = 0;

            for (int j = 0; j < SupervisorSql.SupervisorsList.size(); j++) {
                String supervisorId = SupervisorSql.SupervisorsList.get(j).getSupervisorId();
                String projectInterests = SupervisorSql.SupervisorsList.get(j).getProjectInterests();
                float totalInterests = 0;
                float countInterests = 0;
                System.out.println("Searching Id:" + studentId + " Details against Supervisor:" + supervisorId);
                for (String Interest : projectInterests.split(",")) {
                    totalInterests++;
                    System.out.println("TotalInterests: " + totalInterests);
                    System.out.println(Interest);

                    if (StudentSql.unallocatedstudents.get(i).getProjectDetails().toLowerCase().contains(Interest.toLowerCase())) {
                        //System.out.println("StudentId: " + StudentSql.unallocatedstudents.get(i).getStudentId());
                        countInterests++;
                        System.out.println("Interests found: " + countInterests);
                    }
                }
                prefScore = (int) ((countInterests / totalInterests) * 100);
                System.out.println(prefScore);
                String prefScoreStr = Integer.toString(prefScore);
                //System.out.println(StudentSql.students.get(i).getProjectDetails());

                PrefscoresList.add(new Prefscore(studentId, supervisorId, prefScoreStr));
            }

            PrefscoresList.forEach(Prefscore -> {
                System.out.println("StudentId:" + Prefscore.getStudentId() + " SupervisorId:" + Prefscore.getSupervisorId() + " PrefScore:" + Prefscore.getPrefScore());
            });
        }
        //prefScores.add(new Prefscore("1","0","0"));
    }

    static void findBestSupervisor() {

        Collections.sort(PrefscoresList, Prefscore.sortPrefscore);
        System.out.println(PrefscoresList);
        
        for (int i = 0; i < PrefscoresList.size();i++) {
            //System.out.println("0: " + i);
            if (Integer.parseInt(PrefscoresList.get(i).getPrefScore()) >= 60) {
                String studentId = PrefscoresList.get(i).getStudentId();
                String supervisorId = PrefscoresList.get(i).getSupervisorId();
                SupervisorSql.checkSupervisorAllocation(studentId, supervisorId,i);
                i--;
                //System.out.println("current: " + i);
                System.out.println("PrefList: " + PrefscoresList);
                //System.out.println(PrefscoresList.size());
            }
        }
    }

    static void test() {
        float max = Float.parseFloat(PrefscoresList.get(0).getPrefScore());

        int minIndex = 0, maxIndex = 0;

        for (int i = 0; i < PrefscoresList.size(); i++) {
            if (Float.parseFloat(PrefscoresList.get(i).getPrefScore()) > max) {
                max = Float.parseFloat(PrefscoresList.get(i).getPrefScore());
                maxIndex = i;
            }
        }
        System.out.println(max);
    }

}
