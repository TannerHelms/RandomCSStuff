import java.util.Scanner;

public class ISBN {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter the first 9 digits of an ISBN:");

        int a = input.nextInt();
        int d1 = a % 10;
        int d2 = ((a - d1) / 10) % 10;
        int d3 = ((a - (d1+d2)) / 100) % 10;
        int d4 = ((a - (d2+d3)) / 1000) % 10;
        int d5 = ((a - (d3+d4)) / 10000) % 10;
        int d6 = ((a - (d4+d5)) / 100000) % 10;
        int d7 = ((a - (d5+d6)) / 1000000) % 10;
        int d8 = ((a - (d6+d7)) / 10000000) % 10;
        int d9 = ((a - (d7+d8)) / 100000000) % 10;


        int result = (d9 * 1 + d8 * 2 + d7 * 3 + d6 * 4 + d5 * 5 + d4 * 6 + d3 * 7 + d2 * 8 + d1 * 9) % 11;

        if (result == 10) {
            System.out.print("The ISBN-10 number is: " + a + "X");
        }
        else {
            System.out.print("The ISBN-10 number is: " + a + "1");
        }




    }
}
