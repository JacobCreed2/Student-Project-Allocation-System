/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import java.util.ArrayList;
import java.util.Comparator;
import java.util.Objects;

/**
 *
 * @author jakec
 */
public class Prefscore {
    String studentId;
    String supervisorId;
    String prefScore;

    public String getStudentId() {
        return studentId;
    }

    public void setStudentId(String studentId) {
        this.studentId = studentId;
    }

    public String getSupervisorId() {
        return supervisorId;
    }

    public void setSupervisorId(String supervisorId) {
        this.supervisorId = supervisorId;
    }

    public String getPrefScore() {
        return prefScore;
    }

    public void setPrefScore(String prefScore) {
        this.prefScore = prefScore;
    }
    
    public Prefscore(String studentId, String supervisorId, String prefScore){
        this.studentId = studentId;
        this.supervisorId = supervisorId;
        this.prefScore = prefScore;
    }
    
    public static Comparator<Prefscore> sortPrefscore = new Comparator<Prefscore>(){
            
        @Override
        public int compare(Prefscore a, Prefscore b){
        
            int prefScore1 = Integer.parseInt(a.getPrefScore());
            int prefScore2 = Integer.parseInt(b.getPrefScore());
            
            return prefScore2 - prefScore1;
        }
            
    };
    
        public static Comparator<Prefscore> sortSupId = new Comparator<Prefscore>(){
            
        @Override
        public int compare(Prefscore a, Prefscore b){
        
            int supId1 = Integer.parseInt(a.getSupervisorId());
            int supId2 = Integer.parseInt(b.getSupervisorId());
            
            return supId1 - supId2;
        }
            
    };
        
    static void removeStudent(ArrayList<Prefscore> list, Prefscore student) {
        for (int j = 0; j < list.size(); j++) {
            String student1 = student.getStudentId();
            String student2 = list.get(j).getStudentId();
            if (Objects.equals(student1, student2)) {
                list.remove(j);
                j--;
            }
        }
    }
    
        static void removeSupervisor(ArrayList<Prefscore> list, Prefscore supervisor) {
        for (int j = 0; j < list.size(); j++) {
            String supervisor1 = supervisor.getSupervisorId();
            String supervisor2 = list.get(j).getSupervisorId();
            if (Objects.equals(supervisor1, supervisor2)) {
                list.remove(j);
                j--;
            }
        }
    }
        
    @Override
    public String toString() {
        return "Unallocated{" + "studentId=" + studentId + ", supervisorId=" + supervisorId + ", prefScore=" + prefScore + '}';
    }
}
