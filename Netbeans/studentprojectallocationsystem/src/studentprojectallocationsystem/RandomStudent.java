/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import java.util.ArrayList;
import java.util.Objects;

/**
 *
 * @author jakec
 */
public class RandomStudent {
    String studentId;
    String supervisorId;
    String studentFirstname;
    String studentLastname;
    String projectId;
    String projectTitle;
    String projectDetails;
    String projectNLP;
    String projectAllocated;

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
    
    public String getStudentFirstname() {
        return studentFirstname;
    }

    public void setStudentFirstname(String studentFirstname) {
        this.studentFirstname = studentFirstname;
    }
    
    public String getStudentLastname() {
        return studentLastname;
    }

    public void setStudentLastname(String studentLastname) {
        this.studentLastname = studentLastname;
    }
    
    public String getProjectId() {
        return projectId;
    }

    public void setProjectId(String projectId) {
        this.projectId = projectId;
    }
    
    public String getProjectTitle() {
        return projectTitle;
    }

    public void setProjectTitle(String projectTitle) {
        this.projectTitle = projectTitle;
    }
    
    public String getProjectDetails() {
        return projectDetails;
    }

    public void setProjectDetails(String projectDetails) {
        this.projectDetails = projectDetails;
    }
        
    public RandomStudent(String id, String supervisor,String firstName, String lastName, String 
            projectId, String projectTitle, String projectDetails){
        this.studentId = id;
        this.supervisorId = supervisor;
        this.studentFirstname = firstName;
        this.studentLastname = lastName;
        this.projectId = projectId;
        this.projectTitle = projectTitle;
        this.projectDetails = projectDetails;
    }
    
    static void removeStudent(ArrayList<RandomStudent> list, RandomStudent student) {
        for (int j = 0; j < list.size(); j++) {
            String student1 = student.getStudentId();
            String student2 = list.get(j).getStudentId();
            if (Objects.equals(student1, student2)) {
                list.remove(j);
                j--;
            }
        }
    }
    
       @Override
   public String toString() {
        return (studentId + " " + supervisorId + " " + studentFirstname + " " + studentLastname + 
                " " + projectId + " " + projectTitle + " " + projectDetails + " " + projectAllocated);
   }
}
