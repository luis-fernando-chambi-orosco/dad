package com.example.project;

import java.util.Scanner;

public class Exercise1 {

    public static void main(String[] args) {
        Exercise1 obj = new Exercise1();
        Scanner sc = new Scanner(System.in);
        while (true) {
            String s = sc.nextLine();
            System.out.println(obj.esBalanceado(s));
        }
    }

    public boolean esBalanceado(String s) {
        MyStack<Character> stack = new LinkedListStack<>();
        // Colocar codigo aqui
        for (int i = 0; i < s.length(); i++) {
            if (s.charAt(i) == '(' || s.charAt(i) == '[' || s.charAt(i) == '{') {
                stack.push(s.charAt(i));
            }
            if (stack.top()=='(' && s.charAt(i) == ')' || stack.top()=='[' && s.charAt(i) == ']'|| stack.top()=='{' && s.charAt(i) == '}') {
                    stack.pop();
                }
        }
        return stack.isEmpty();
    }

}
