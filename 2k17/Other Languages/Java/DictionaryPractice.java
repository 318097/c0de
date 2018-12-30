//Hacker Rank - 30 Hours of code - Day 8
//Dictionary Practice
import java.util.*;
import java.io.*;

class DictionaryPractice{
    public static void main(String []args){
        Scanner in = new Scanner(System.in);
		System.out.println("Enter the no of contacts:");
        int n = in.nextInt();
        Map<String,String> contacts = new HashMap<String,String>();
        for(int i = 0; i < n; i++){
			System.out.println("Enter contact "+(i+1)+":");
            String name = in.next();
            String phone = in.next();
			
            contacts.put(name,phone);
        }
        while(in.hasNext()){
            String s = in.next();
			if(contacts.containsKey(s)){
				System.out.println(contacts.get(s));
			}
            else{
				System.out.println("Contact not found");
			}
        }
        in.close();
    }
}
