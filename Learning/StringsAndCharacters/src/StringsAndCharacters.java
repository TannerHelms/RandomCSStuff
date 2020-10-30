import java.util.Scanner;

public class StringsAndCharacters {
    public static void main(String[] args) {
        /*
        System.out.println("They said, \n\r\"Java is fun!\"");
        char ch = 'A';
        System.out.println(ch);
        System.out.println((int)ch); // The actual charater number
        if(Character.isDigit(ch)) {
            System.out.println("it is a digit");
        }
        else {
            System.out.println("It is NOT a digit");
        }
        if (Character.isAlphabetic(ch)) {

        }
        if (Character.isLowerCase(ch)) {

        }
        char upper = Character.toUpperCase(ch);
        System.out.println(upper);

        Scanner input = new Scanner(System.in);

        System.out.println();
        System.out.println("---- Reading strings From The Console ---");
        System.out.print("Enter three words: ");
        String s1 = input.next();
        String s2 = input.next();
        String s3 = input.next();

        System.out.println("The three words are: " + s1+ ", " + s2 + ", " + s3);


        if (input.hasNextLine()) {
            input.nextLine();
        }

        System.out.println("Enter your full name" );
        String name = input.next();
        System.out.println("Your name is:"  + name);
        if (input.hasNextLine()) {
            input.nextLine();
        }


        System.out.println("Enter a String:");
        String s4 = input.nextLine();
        System.out.println("Enter another string: ");
        String s5 = input.nextLine();

        if (s4.equalsIgnoreCase(s5)) {
            System.out.println("The strings are equivalent");

        }
        else {
            System.out.println("The strings are different");
        }

        System.out.print("Enter a number: ");
        String stringNumber = input.next();
        double number = Double.parseDouble(stringNumber);
        System.out.println("The number form the string is: " + number);
        int anotherNumber = input.nextInt();
        */

        Scanner input = new Scanner(System.in);
        System.out.println("Enter the field width: ");
        var fieldWidth = input.nextInt();
        double interest = 123.45670;
        double amount = 100000.00;

        System.out.println("The interest rate on your loan is: " + interest);
        System.out.printf("The interest rate on your loan of $%.2f is %6.2f%%\n", amount,interest);
        String format = "The interest rate on your load of $%," + fieldWidth + ".2f is %6.2f%%\n";
        System.out.printf(format,amount,interest);

    }
}
