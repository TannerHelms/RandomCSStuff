import java.util.Date;

class Student extends Person{
    private String ClassStatus;
    Student(String name, String address, String phone, String email, String classStatus) {
        super(name, address, phone, email);
        this.ClassStatus = classStatus;
    }
    @Override
    public String toString(){
        return "Name: " + getName() + "\nAddress: " + getAddress() + "\nPhone: " + getPhone() + "\nEmail: " + getEmail()
                + "\nClass Status: " + ClassStatus;
    }

}