/* Hacker rank challenge
input is to provide the no of string along with the strings
output is the strings with even indexed characters placed first followed by space and then odd index characters
*/

import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class StringArrays {

    public static void main(String[] args) {
        /* Enter your code here. Read input from STDIN. Print output to STDOUT. Your class should be named Solution. */
        int T;
        String[] testCases;
        Scanner scan=new Scanner(System.in);
        
        T=scan.nextInt();
        testCases=new String[T];
        for(int i=0;i<T;i++){
            testCases[i]=scan.next();
        }
        
        int j;
        for(int i=0;i<T;i++){
            j=0;
            while(j<testCases[i].length()){
                System.out.print(testCases[i].charAt(j));
                j+=2;
            }
            System.out.print(" ");
            
            j=1;
            while(j<testCases[i].length()){
                System.out.print(testCases[i].charAt(j));
                j+=2;
            }
            System.out.println();
        }
    }
}