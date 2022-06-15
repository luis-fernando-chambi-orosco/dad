package com.example.project;

import java.util.Scanner;

public class Exercise2 {
    public static void main(String[] args) {
        Exercise2 obj = new Exercise2();
        Scanner sc = new Scanner(System.in);
        while (true) {
            String s = sc.nextLine();
            System.out.println(obj.existenDuplicados(s));
        }
    }

    public boolean existenDuplicados(String str) {
        MyStack<Character> stack = new LinkedListStack<>();
        // Colocar codigo aqui
        for (int i = 0; i < str.length(); i++) {
            if (str.charAt(i) !=')'){
                stack.push(str.charAt(i));
            }else{
                if (stack.top()=='(' ) {
                    return true;
                }
                while (stack.top()!='(' ){
                    stack.pop();
                }
                stack.pop();
            }
            
        }
        return false;
    }
}
