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
public class Student {
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
    
    public String getProjectNLP() {
        return projectNLP;
    }

    public void setProjectNLP(String projectNLP) {
        this.projectNLP = projectNLP;
    }

    public String getProjectAllocated() {
        return projectAllocated;
    }

    public void setProjectAllocated(String projectAllocated) {
        this.projectAllocated = projectAllocated;
    }
    
    
    
    public Student(String id, String supervisor,String firstName, String lastName, String 
            projectId, String projectTitle, String projectDetails, String projectAllocated){
        this.studentId = id;
        this.supervisorId = supervisor;
        this.studentFirstname = firstName;
        this.studentLastname = lastName;
        this.projectId = projectId;
        this.projectTitle = projectTitle;
        this.projectDetails = projectDetails;
        this.projectAllocated = projectAllocated;
    }
    
       @Override
   public String toString() {
        return (studentId + " " + supervisorId + " " + studentFirstname + " " + studentLastname + 
                " " + projectId + " " + projectTitle + " " + projectDetails + " " + projectAllocated);
   }
}
