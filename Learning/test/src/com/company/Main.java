package com.company;

public class Main {
    public static void main(String[] args) {
        try {
            int valueOne = 123;  // 1
            int valueTwo = 0;    // 2
            int result = divideNumbers(valueOne, valueTwo);  // 3
            System.out.println("Result: " + result);         // 4
        }
        catch (ArithmeticException e) {
            System.out.println("Attempted divide by 0 - shame!");  // 5
        }

        System.out.println("Leaving main...");  // 6
    }

    public static int divideNumbers(int first, int second) {
        return first / second;
    }
}