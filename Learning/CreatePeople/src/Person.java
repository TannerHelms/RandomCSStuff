import java.util.Date;
class Person extends GeneratePerson{
    public String Name;
    public String Address;
    public String Phone;
    public String Email;
    Person(String name, String address, String phone, String email){
        this.Name = name;
        this.Address = address;
        this.Phone = phone;
        this.Email = email;
    }
    /*
    public abstract String getClassStatus();
    public abstract String getOffice();
    public abstract double getSalary();
    public abstract Date getDate();

     */


    public String getName() {
        return Name;
    }
    public String getAddress(){
        return Address;
    }
    public String getPhone(){
        return Phone;
    }
    public String getEmail() {
        return Email;
    }


    @Override
    public String ToString() {
        return "Name: " + Name + "\nAddress: " + Address + "\nPhone: " + Phone + "\nEmail: " + Email;
    }
}
