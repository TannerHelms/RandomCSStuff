package com.company;
import java.util.Scanner;
public class Main {

    public static void main(String[] args) {
        /*
        System.out.println("Enter a day of the week (1-7):");
        Scanner input = new Scanner(System.in);
        int day = input.nextInt();
        switch (day) {
            case 1:
                System.out.println("monday");
                break;
            case 2:
                System.out.println("Tuesday");
                break;
            case 3:
                System.out.println("Wednesday");
                break;
            case 4:
                System.out.println("Thursday");
                break;
            case 5:
                System.out.println("Friday");
                break;
            case 6:
                System.out.println("Saturday");
                break;
            case 7:
                System.out.println("Sunday");
                break;
            default:
                System.out.println("Invalid");
        }

         */
        Scanner input = new Scanner(System.in);
        System.out.println("Rock(0) Paper (1) Scissors(2):");
        int ans = input.nextInt();
        int ran = (int) (Math.random() * 3);
        switch (ans) {
            case 0:
                if (ran == 0) {
                    System.out.println("The computer is Rock. You are Rock. It is a tie.");
                } else if (ran == 1){
                    System.out.println("The computer is Paper. You are Rock. The computer wins");
            } else {
                    System.out.println("The computer is Scissors. You are Rock. You win!");
                }
                break;
            case 1:
                if (ran == 0) {
                    System.out.println("The computer is Rock. You are Paper. You win!");
                } else if (ran == 1){
                    System.out.println("The computer is Paper. You are Paper. It is a tie.");
                } else {
                    System.out.println("The computer is Scissors. You are Paper. The computer wins.");
                }
                break;
            case 2:
                if (ran == 0) {
                    System.out.println("The computer is Rock. You are Scissors. The computer wins.");
                } else if (ran == 1){
                    System.out.println("The computer is Paper. You are Scissors. You win!");
                } else {
                    System.out.println("The computer is Scissors. You are Scissors. It is a tie");
                }
                break;
            default:
                System.out.println("Invalid Input");
        }

    }
}
