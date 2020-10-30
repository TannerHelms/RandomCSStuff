import java.util.Date;

class Faculty extends Employee {
    private String OfficeHours;
    private String Rank;
    Faculty(String name, String address, String phone, String email, String office, double salary, java.util.Date date, String officeHours, String rank) {
        super(name, address, phone, email, office, salary, date);
        this.OfficeHours = officeHours;
        this.Rank = rank;
    }
    @Override
    public String toString(){
        return "Name: " + getName() + "\nAddress: " + getAddress() + "\nPhone: " + getPhone() + "\nEmail: " + getEmail()
                + "\nOffice: " + getOffice() + "\nSalary: " + getSalary() + "\nDate: " + getDate() + "\nOffice Hours: " + OfficeHours
                + "\nRank: " + Rank;
    }
}
