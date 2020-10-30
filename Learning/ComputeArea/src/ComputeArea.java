import java.util.Scanner;

public class ComputeArea {
    public static void main(String[] args) {

        java.util.Scanner input = new Scanner(System.in);

        System.out.println("Enter a circle radius:");
        var radius = input.nextDouble();


        var area = radius * radius * 3.14159;

        System.out.println("The area for the circle of radius " + radius + " is " + area);
    }
}