public class Triangle extends GeometricObject{
    private double side1 = 1.0;
    private double side2 = 1.0;
    private double side3 = 1.0;
    private String Color = "black";
    private boolean Filled = false;
    Triangle(){

    }
    Triangle(double side1, double side2, double side3, String color, boolean filled){
        this.side1 = side1;
        this.side2 = side2;
        this.side3 = side3;
        this.Color = color;
        this.Filled = filled;
    }
    @Override
    public double getArea(){
       double sides = (side1 + side2 + side3) /  2;
       double area = Math.pow((sides * (sides - side1) * (sides - side2) * (sides - side3)),1/2);
       return area;
    }
    @Override
    public double getPerimeter(){
        return (side1 + side2 + side3);
    }
    @Override
    public String toString(){
        return "Triangle:\nSide1 = " + side1 + "\nSide2 = " + side2 + "\nSide3 = " + side3;
     }
     @Override
    public String getColor(){
        return Color;
     }
     @Override
    public boolean isFilled(){
        return Filled;
     }



}
