/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package studentprojectallocationsystem;

import java.util.Arrays;
import java.util.Scanner;

/**
 *
 * @author jakec
 */
public class Studentkeywords {
    
    static void runNLP(){
    String apiKey = "apiKey.txt";
    
    Scanner sc = new Scanner(Studentprojectallocationsystem.class.getResourceAsStream(apiKey));
         
    String key = sc.nextLine();
    
    //App pd = new App(key);
        
// for single sentences
    //String keywords = pd.keywords(select);
    //System.out.println(keywords);
    
    }
    
    static void cleanString(){
    String keywordsString = "{\"code\": 200, \"keywords\": [{\"keyword\": \"idea\", \"confidence_score\": 0.952243}, {\"keyword\": \"system\", \"confidence_score\": 0.849038}, {\"keyword\": \"incorporate three\", \"confidence_score\": 0.689001}, {\"keyword\": \"types Students Tutors\", \"confidence_score\": 0.649859}, {\"keyword\": \"mixture\", \"confidence_score\": 0.989712}, {\"keyword\": \"PHP\", \"confidence_score\": 0.772405}, {\"keyword\": \"java\", \"confidence_score\": 0.612589}, {\"keyword\": \"solution\", \"confidence_score\": 0.875254}, {\"keyword\": \"tutors\", \"confidence_score\": 0.823471}, {\"keyword\": \"first\", \"confidence_score\": 0.630185}, {\"keyword\": \"student\", \"confidence_score\": 0.993156}, {\"keyword\": \"three tutors\", \"confidence_score\": 0.830887}, {\"keyword\": \"able\", \"confidence_score\": 0.897496}, {\"keyword\": \"time\", \"confidence_score\": 0.817016}, {\"keyword\": \"new proposal\", \"confidence_score\": 0.837166}, {\"keyword\": \"improvement\", \"confidence_score\": 0.819911}, {\"keyword\": \"deadline\", \"confidence_score\": 0.935177}, {\"keyword\": \"example\", \"confidence_score\": 0.895341}, {\"keyword\": \"AI\", \"confidence_score\": 0.567709}, {\"keyword\": \"reject proposal ideas\", \"confidence_score\": 0.901301}, {\"keyword\": \"account\", \"confidence_score\": 0.879999}, {\"keyword\": \"tutor unavailable\", \"confidence_score\": 0.693699}, {\"keyword\": \"allocation\", \"confidence_score\": 0.776746}, {\"keyword\": \"tutor\", \"confidence_score\": 0.875092}, {\"keyword\": \"proposal\", \"confidence_score\": 0.853633}, {\"keyword\": \"number\", \"confidence_score\": 0.970043}, {\"keyword\": \"allocations\", \"confidence_score\": 0.884386}, {\"keyword\": \"three user types Admin\", \"confidence_score\": 0.853248}, {\"keyword\": \"students\", \"confidence_score\": 0.852177}, {\"keyword\": \"graph\", \"confidence_score\": 0.699831}, {\"keyword\": \"shown\", \"confidence_score\": 0.690613}]}";
    //System.out.println(keywords);
    
    String[] parts = keywordsString.split("\\["); //Takes this off the string:"{\"code\": 200, \"keywords\": 
    String part1 = parts[0];
    String part2 = parts[1];// Then you are left with the next part of the string
    System.out.println("part 1 " + part1);
    System.out.println("part 2 " + part2);
    String[] partsnext = part2.split(",");
    
    int x = partsnext.length/2;
    String part3[] = new String [x];
    for (int i = 0; i < partsnext.length; i+=2) { // If they switch the keywords arround again change i = 1
            part3[i/2] = partsnext[i];
        }
    
    System.out.println("part 3 " + Arrays.toString(part3));
        
    String part4 = Arrays.toString(part3);
        
    String part5 = part4.replace("{\"keyword\":", "");
        
    System.out.println("part5 " + part5);
    
    String part6 = part5.replace("\"", "");
    
    System.out.println("part6" + part6);
    
    String part7 = part6.replace("[", "");
    
    System.out.println("part7" + part7);
        
    String part8 = part7.replace("]", "");
    
    System.out.println("part8" + part8);
        
        
    }
            
}
