public class Methods {
    public static void main(String[] args) {
        System.out.printf("%d\n", Methods.sum(1,10));
        int a = 1;
        int b = 2;
        System.out.printf("%d - %d\n", a, b);
        swap(a, b);
        System.out.printf("%d - %d\n", a, b);
        b = swap2(a, a=b);
        System.out.printf("%d - %d\n", a, b);
        System.out.printf("%.4f\n", sum(0.2, 10.6));

    }
    public static void swap(int x, int y) {
        int temp = x;
        x = y;
        y = temp;
    }
    public static int swap2(int x, int y) {
        return x;

    }
    public static int sum(int start, int end) {
        int total = 0;
        for (int value = start; value <= end; value++) {
            total += value;
        }


        return total;
    }
    public static double sum(double start, double end) {
        double total = 0;
        for (double value = start; value <= end; value+= 1.1) {
            total += value;
        }


        return total;
    }
}
