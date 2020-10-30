import java.util.Collections;
import java.util.ArrayList;
import java.util.Comparator;
import java.util.Arrays;

public class arraysPractice {
    public static void main(String[] args) {
        ArrayList<Cities> data = new ArrayList<Cities>();


        Cities Chicago = new Cities("Chicago", new int[]{0, 983, 787, 714, 1375, 967, 1087});
        data.add(Chicago);
        Cities Boston = new Cities("Boston", new int[]{983, 0, 214, 1102, 1763, 1723, 1842});
        data.add(Boston);
        Cities NewYork = new Cities("New York", new int[]{787, 214, 0, 888, 1549, 1548, 1627});
        data.add(NewYork);
        Cities Atlanta = new Cities("Atlanta", new int[]{714, 1102, 888, 0, 661, 781, 810});
        data.add(Atlanta);
        Cities Miami = new Cities("Miami", new int[]{1375, 1763, 1549, 661, 0, 1426, 1187});
        data.add(Miami);
        Cities Dallas = new Cities("Dallas", new int[]{967, 1723, 1548, 781, 1426, 0, 239});
        data.add(Dallas);
        Cities Houston = new Cities("Houston", new int[]{1087, 1842, 1627, 810, 1187, 239, 0});
        data.add(Houston);
        printCities(Houston);
        System.out.println(addDistances(Chicago));




    }
    static int addDistances(Cities city) {
        int count = 0;
        for (int i = 0; i < city.getLength();i++) {
            count += city.getDistance(i);
        }
        return count;
    }
      static void printCities(Cities city){
         System.out.print(city.getName() + ": ");
        for (int i =0; i < city.getLength(); i ++) {
            System.out.print(city.getDistance(i) + " ");
        }

     }


}

class Cities {
    private String Name;
    private int[] Distance;
    private int Length;
    Cities(String name, int[] distance){
        this.Name = name;
        this.Distance = distance;
        this.Length = distance.length;
    }
    public String getName(){
        return Name;
    }
    public int[] getDistance(){
        return Distance;
    }
    public int getDistance(int num){
        return Distance[num];
    }
    public int getLength(){
        return Length;
    }


}

