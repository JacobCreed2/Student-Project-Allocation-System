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
    String studentFirstname;
    String studentLastname;
    String projectId;
    String projectTitle;
    String projectDetails;
    String projectNLP;

    public String getStudentId() {
        return studentId;
    }
    
    public void setStudentId(String studentId) {
        this.studentId = studentId;
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
    
    
    
//    public Student(String id, String firstName, String lastName, String 
//            projectId, String projectTitle, String projectDetails){
//        this.studentId = id;
//        this.studentFirstname = firstName;
//        this.studentLastname = lastName;
//        this.projectId = projectId;
//        this.projectTitle = projectTitle;
//        this.projectDetails = projectDetails;
//    }
    
       @Override
   public String toString() {
        return (studentId + " " + studentFirstname + " " + studentLastname + 
                " " + projectId + " " + projectTitle + " " + projectDetails);
   }
}