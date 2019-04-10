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
import static studentprojectallocationsystem.StudentSql.RandomstudentsList;
import static studentprojectallocationsystem.StudentSql.unallocatedstudents;
import static studentprojectallocationsystem.SupervisorSql.SupervisorsList;
import static studentprojectallocationsystem.StudentSql.StudentsList;

/**
 *
 * @author jakec
 */
public class Studentkeywords {

    public static ArrayList<Prefscore> PrefscoresList = new ArrayList<Prefscore>();

    static void shuffleStudents() {

        Collections.shuffle(unallocatedstudents);

        System.out.println("Shuffled Unallocated students");

    }

    static void matchkeywords() {

        for (int i = 0; i < StudentSql.unallocatedstudents.size(); i++) {
            String studentId = StudentSql.unallocatedstudents.get(i).getStudentId();
            int prefScore = 0;

            for (int j = 0; j < SupervisorSql.SupervisorsList.size(); j++) {
                String supervisorId = SupervisorSql.SupervisorsList.get(j).getSupervisorId();
                String projectInterests = SupervisorSql.SupervisorsList.get(j).getProjectInterests();
                double totalInterests = 0;
                double countInterests = 0;
                System.out.println("Finding intestes in Student: " + studentId + " Project proposal to Supervisor: " + supervisorId);
                if (!projectInterests.equals("")) {
                    for (String Interest : projectInterests.split(",")) {
                        totalInterests++;
//                        System.out.println("TotalInterests: " + totalInterests);
//                        System.out.println(Interest);

                        if (StudentSql.unallocatedstudents.get(i).getProjectDetails().toLowerCase().contains(Interest.toLowerCase())) {
                            countInterests++;
//                            System.out.println("Interests found: " + countInterests);
                        }
                    }
                    prefScore = (int) ((countInterests / totalInterests) * 100);
                    System.out.println(prefScore);
                    String prefScoreStr = Integer.toString(prefScore);

                    PrefscoresList.add(new Prefscore(studentId, supervisorId, prefScoreStr));
                } else {
                    j++;
                }

            }

//            PrefscoresList.forEach(Prefscore -> {
//                System.out.println("StudentId:" + Prefscore.getStudentId() + " SupervisorId:" + Prefscore.getSupervisorId() + " PrefScore:" + Prefscore.getPrefScore());
//            });
        }
    }

    static void findBestSupervisor() {
        System.out.println(PrefscoresList);
        Collections.sort(PrefscoresList, Prefscore.sortPrefscore);
        System.out.println(PrefscoresList);

        for (int i = 0; i < PrefscoresList.size(); i++) {
            String studentId = PrefscoresList.get(i).getStudentId();
            String supervisorId = PrefscoresList.get(i).getSupervisorId();
            SupervisorSql.allocateStudents(studentId, supervisorId, i);
            i--;
            System.out.println("PrefList: " + PrefscoresList);
        }
        
        StudentSql.checkForUnAllocatedStudents();
        
        for (int i = 0; i < RandomstudentsList.size(); i++) {
            String studentId = RandomstudentsList.get(i).getStudentId();
            SupervisorSql.allocateRandomStudents(studentId, i);
            i--;
            System.out.println("Random: " + RandomstudentsList);
        }
    }
}
