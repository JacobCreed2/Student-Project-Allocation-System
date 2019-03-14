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
public class Supervisor {
    String supervisorId;
    String firstName;
    String lastName;
    String projectInterests;
    String currentAllocation;
    String maxAllocation;

    public String getSupervisorId() {
        return supervisorId;
    }

    public void setSupervisorId(String supervisorId) {
        this.supervisorId = supervisorId;
    }

    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public String getProjectInterests() {
        return projectInterests;
    }

    public void setProjectInterests(String projectInterests) {
        this.projectInterests = projectInterests;
    }

    public String getCurrentAllocation() {
        return currentAllocation;
    }

    public void setCurrentAllocation(String currentAllocation) {
        this.currentAllocation = currentAllocation;
    }

    public String getMaxAllocation() {
        return maxAllocation;
    }

    public void setMaxAllocation(String maxAllocation) {
        this.maxAllocation = maxAllocation;
    }
    
    public Supervisor(String Id, String firstName, String lastName, String projectInterests, String currentAllocation, String maxAllocation ){
        this.supervisorId = Id;
        this.firstName = firstName;
        this.lastName = lastName;
        this.projectInterests = projectInterests;
        this.currentAllocation = currentAllocation;
        this.maxAllocation = maxAllocation;
    }

    @Override
    public String toString() {
        return "Supervisor{" + "supervisorId=" + supervisorId + ", firstName=" + firstName + ", lastName=" + lastName + ", projectInterests=" + projectInterests + ", currentAllocation=" + currentAllocation + ", maxAllocation=" + maxAllocation + '}';
    }
    
    
}
