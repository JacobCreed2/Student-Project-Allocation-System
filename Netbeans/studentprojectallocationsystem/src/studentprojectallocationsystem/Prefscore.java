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

    @Override
    public String toString() {
        return "Unallocated{" + "studentId=" + studentId + ", supervisorId=" + supervisorId + ", prefScore=" + prefScore + '}';
    }
    
    
}
