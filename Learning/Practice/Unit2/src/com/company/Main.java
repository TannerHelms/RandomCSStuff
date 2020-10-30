package com.company;
import java.util.Scanner;
public class Main {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter a Degree in Celsius:");
        double Celsius = input.nextDouble();
        double fahrenheit =  (9.0/5) * Celsius  + 32;
        System.out.println(Celsius + " Celsius is " + fahrenheit + " Fahrenheit");
        System.out.println();
        System.out.println("Enter the radius and length of a cylinder:");
        double radius = input.nextDouble();
        double length = input.nextDouble();
        double area = radius * radius * Math.PI;
        double volume = area * length;
        System.out.println("The Area is: " + area);
        System.out.println("The Volume is: " + volume);
        System.out.println();
        System.out.println("Enter a value for feet:");
        double feet = input.nextDouble();
        double meter = feet * 0.305;
        System.out.printf("%s feet is %s meters", feet, meter);



    }
}
