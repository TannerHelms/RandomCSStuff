public class Chaining {
    public static void main(String[] args) {
        Person p1 = new Person();
        Employee e1 = new Employee();

    }
}

class Person {
    Person () {
        System.out.println("(1) Performs Person things");
    }
}
class Employee extends Person {
    Employee(){
        System.out.println("(2) Performs Employee things");
    }
    Employee(String msg) {
        System.out.println("(2) Performs Employee things with a message: " + msg);
    }
}
class Faculty extends Employee {
    Faculty() {
        System.out.println("(3) Performs Faculty things");
    }
    Faculty(String msg) {
        System.out.println("(3) Performs Faculty things with a message: " + msg);
    }

}