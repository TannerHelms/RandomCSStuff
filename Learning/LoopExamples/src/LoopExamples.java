
public class LoopExamples {
    public static void main(String[] args){
        int a = 0;
        System.out.println(a++);
        System.out.println("++a");

        for (int count = 1; count <= 10; count++){
            System.out.printf("Hello from Java (%d)!\n", count);

        }

        int b = 6;

        for (; a <= 6;) {
            System.out.printf("a = %d\n", a++);
        }
    }
}

