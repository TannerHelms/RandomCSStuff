public class CreateObjects {
    public static void main(String[] args) {
        GeometricObject triangle = new Triangle(3,6,99,"blue",true);
        System.out.println(triangle.toString());
        System.out.println(triangle.getPerimeter());
        GeometricObject circle = new Circle(5,"red",true);
        System.out.println(circle.toString());
        System.out.println(circle.getArea());
        System.out.println(circle.getColor());
        System.out.println(circle.isFilled());
    }
}
