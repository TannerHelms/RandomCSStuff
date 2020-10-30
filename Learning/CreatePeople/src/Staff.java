import java.util.Date;

class Staff  extends Employee{
    private String Title;
    Staff(String name, String address, String phone, String email, String office, double salary, java.util.Date date, String title) {
        super(name, address, phone, email, office, salary, date);
        this.Title = title;
    }
    @Override
    public String toString(){
        return "Name: " + getName() + "\nAddress: " + getAddress() + "\nPhone: " + getPhone() + "\nEmail: " + getEmail()
                + "\nOffice: " + getOffice() + "\nSalary: " + getSalary() + "\nDate: " + getDate() + "\nTitle: " + Title;
    }
}
