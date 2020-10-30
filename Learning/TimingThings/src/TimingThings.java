/**
 * Assignment 4 for CS 1410
 * This program evaluates the linear and binary searching, along
 * with comparing performance difference between the selection sort
 * and the built-in java.util.Arrays.sort.
 *
 * @author
 */

import java.util.Arrays;

public class TimingThings {
    static final int MAX_VALUE = 1_000_000;
    static final int MAX_ARRAY_SIZE = 100_000;
    static final int ARRAY_INCREMENT = 20_000;
    static final int NUMBER_SEARCHES = 50_000;

    public static void main(String[] args) {
        System.out.println("hi");
        demoLinearSearchUnsorted();
    }

    public static int[] generateNumbers(int howMany, int maxValue) {
        int[] storeNumbers = new int[howMany];
        for (int i = 0; i < howMany; i++) {
            double randomNumber = Math.random() * maxValue;
            int Number = (int) Math.round(randomNumber);
            storeNumbers[i] = Number;
        }
        return storeNumbers;

    }

    public static boolean linearSearch(int[] data, int search) {

        for (int i = 0; i < data.length; i++) {
            if (data[i] == search) {
                return true;
            }
        }
        return false;
    }

    public static boolean binarySearch(int[] data, int search) {
        Arrays.sort(data);
        int start = 0;
        int end = data.length - 1;
        while (start < end) {
            int m = (end - start) / 2;
            if (data[m] == search) return true;
            else if (data[m] > search) end = m;
            else start = m + 1;

        }
        return false;

    }
    public static void selectionSort(int[] data) {
        Arrays.sort(data);
    }


    /**
     * Demonstrates linear searching over an unsorted array
     */
    public static void demoLinearSearchUnsorted() {
        System.out.println("--- Linear Search Timing (unsorted) ---");
        int valueFound = 0;
        int [] randomNumbers = generateNumbers(MAX_ARRAY_SIZE, MAX_VALUE);
        long start = System.currentTimeMillis();
        for (int i = 0; i < NUMBER_SEARCHES; i++) {
            double randomNumber = Math.random() * MAX_VALUE;
            int Number = (int) Math.round(randomNumber);
            System.out.println(Number);
            boolean ans = linearSearch(randomNumbers,Number);
            if (ans == true) {
                valueFound = valueFound + 1;
            }
        }
        long end = System.currentTimeMillis();
        System.out.printf("Number of items       : %s\n", NUMBER_SEARCHES);
        System.out.printf("Number of items       : %s\n", valueFound);
        System.out.printf("Total search time     : %d\n", end - start);



    }

    /**
     * Demonstrates linear searching over a sorted array
     */
    public static void demoLinearSearchSorted() {
    }

    /**
     * Demonstrates binary searching when using a Selection Sort
     */
    public static void demoBinarySearchSelectionSort() {
    }

    /**
     * Demonstrates binary searching when using the build in Arrays.sort
     */
    public static void demoBinarySearchFastSort() {
    }
}
