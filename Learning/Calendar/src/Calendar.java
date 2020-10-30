


public class Calendar {
    public static void main(String[] args) {
       printMonth(year:2019, month:9);

    }

    public static void printMonth(int year, int month) {

    }
    public static void printMonthTitle(int year, int month) {
        System.out.printf("       %s %d\n", getMonthName(month), year);
        System.out.println("--------------------------");
        System.out.println("Sun Mon Tue Wed Thu Fri Sat");
    }
    public static boolean isLeapYear(int year) {
        return (year % 400 == 0 || (year % 4 == 0 && year % 100 !=0));
    }
    public static int getDayInMonth(int year, int month) {
        switch (month){
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
                return 31;
            case 2:
                if (isLeapYear(year)) {

                }
        }
    }
    public static String getMonthName(int month) {
        switch (month) {
            case 1: return "January";
            case 2: return "February";
            case 3: return "March";
            case 4: return "April";
            case 5: return "May";
            case 6: return "June";
            case 7: return "July";
            case 8: return "August";
            case 9: return "September";
            case 10: return "October";
            case 11: return "November";
            case 12: return "December";
            default:
                return "error";
        }
    }

}
