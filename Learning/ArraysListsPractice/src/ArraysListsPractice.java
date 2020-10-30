import java.util.ArrayList;
import java.util.Comparator;
import java.util.Scanner;

class ArrayListsPractice {
    private static String cookies = createString();
    private static ArrayList<Cookie> a1 = new ArrayList<Cookie>();
    private static Scanner scanner = new Scanner(cookies);
    public static void main(String[] args) {
        System.out.println(cookies);
        insertCookiesIntoArray();
        sortCookies();
        System.out.println("The smallest cookie is: " + getSmallestCookie());
        System.out.println("The biggest cookie is: " + getBiggestCookie());

    }



    static String createString() {
        return (randomNumber() + " Vanilla\n" + randomNumber() + " Chocolate\n" + randomNumber() +
                " Strawberry\n" + randomNumber() + " Peanut Butter\n" + randomNumber() + " Banana");
    }

    static String randomNumber() {
        int ran = (int) (Math.random() * 500);
        String random = Integer.toString(ran);
        return random;
    }
    static void insertCookiesIntoArray() {
        while (scanner.hasNextInt() && scanner.hasNext()) {
            Cookie cookie = new Cookie(scanner.nextInt(), scanner.nextLine());
            a1.add(cookie);
        }
    }
    static void sortCookies(){
        a1.sort(Comparator.comparing(Cookie::getSize));
    }
    static String getSmallestCookie(){
        return (a1.get(0).name);
    }
    static String getBiggestCookie(){
        int length = a1.size();
        return (a1.get(length-1).name);
    }



}

class Cookie {
    int size;
    String name;

    Cookie(int size, String name) {
        this.size = size;
        this.name = name;
    }

    int getSize() {
        return size;
    }

    String getName() {
        return name;
    }

}









