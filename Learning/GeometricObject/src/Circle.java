
public class Circle extends GeometricObject{
    private double radius;
    private String Color = "black";
    private boolean Filled = false;
    Circle() {

    }
    Circle (double radius, String color, boolean filled) {
        this.radius = radius;
        this.Color = color;
        this.Filled = filled;
    }
    @Override
    public double getArea() {
        return (Math.PI) * (radius * radius);
    }

    @Override
    public double getPerimeter() {
        return (Math.PI) * (radius * 2);
    }

    @Override
    public String toString() {
        return "Circle:\nRadius: " + radius + "\nDiameter: " + (radius * 2);
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
