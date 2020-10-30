import java.util.Scanner;


public class Conditionals {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Enter a day (number) of the week: ");
        int dayOfWeek = input.nextInt();
        System.out.println("The day name is:");
        switch (dayOfWeek){
            case 1:
                System.out.print("Monday");
                break;
            case 2:
                System.out.print("Tuesday");
                break;
            case 3:
                System.out.print("Wednesday");
                break;
            case 4:
                System.out.print("Thursday");
                break;
            case 5:
                System.out.print("Friday");
                break;
            case 6:
                System.out.print("Saturday");
                break;
            case 7:
                System.out.print("Sunday");
                break;
            default:
                System.out.print("Please enter a day of the week from 1 through 7");


        }
        switch (dayOfWeek) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                System.out.print("This is a weekday");
                break;
            case 6:
            case 7:
                System.out.print("This is a weekend");
                break;
        }


        System.out.print("This came after the switch statement");
    }
}
