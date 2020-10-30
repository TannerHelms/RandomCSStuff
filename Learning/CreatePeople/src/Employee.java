import java.util.Date;

class Employee extends Person {
    private String Office;
    private double Salary;
    private Date Date;

    Employee(String name, String address, String phone, String email, String office, double salary, Date date) {
        super(name, address, phone, email);
        this.Office = office;
        this.Salary = salary;
        this.Date = date;

    }
    public String getOffice(){
        return Office;
    }
    public double getSalary(){
        return Salary;
    }
    public Date getDate(){
        return Date;
    }

    @Override
    public String toString(){
        return "Name: " + getName() + "\nAddress: " + getAddress() + "\nPhone: " + getPhone() + "\nEmail: " + getEmail()
                + "\nOffice: " + Office + "\nSalary: " + Salary + "\nDate: " + Date;
    }


}