/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import java.io.File;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Scanner;
import com.paralleldots.paralleldots.App;
import java.util.Arrays;

/**
 *
 * @author jakec
 */
public class Studentprojectallocationsystem {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws Exception {
    
    StudentSql.runSelect();
    
    //Studentkeywords.runNLP();
    
    Studentkeywords.cleanString();
       
    }
    
}
