

public class SingleArrays {

    public static void main(String[] args){
        int [] primes = {2,3,5,7,11,13,19};
        int [] alias = primes;

        int [] duplicate = makeCopy(primes);

        int[] third = new int[primes.length];
        System.arraycopy(primes, srcPos:0, third, destPos:0, primes.length);


        reportArray(primes);
        doubleArray(alias);
        doubleArray(duplicate);
        reportArray(primes);



        }

        public static int[] makeCopy(int[] source) {
        int[] copy = new int[source.length];
        for (int i =0; i < source.length; i++) {
            copy [i] = source[i];
        }
        return copy;
        }

       public static void doubleArray(int[] source){
        for (int i=0; i < source.length; i++) {
            source[i] *= 2;
        }

    }
    public static void reportArray(int[] source) {
        for (int value : source) {
            System.out.printf("%d ", value);

        }
        System.out.println();
    }
}
