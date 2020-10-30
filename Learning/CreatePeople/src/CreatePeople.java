import java.util.Date;
public class CreatePeople {
    public static void main(String[] args) {

        GeneratePerson student1 = new Student("Tanner", "1782 W Janet Ct", "2087031753",
                "tanenrhelms01@gmail.com", "Freshman");
        GeneratePerson employee1 = new Employee("John Berry", "333 McMillan Road", "3089756555",
                "johnberry@gmail.com", "406", 100_000, new Date());
        GeneratePerson faculty1 = new Faculty("Terry Downs", "333 tommy drive", "7779875432", "terrydowns@gmail.com",
        "304", 666666, new Date(), "9am - 6pm", "Elite");
        System.out.println(faculty1.toString());
        GeneratePerson p1 = new Person("johnny", "777 wow st", "9765433333", "johnny@gmail.com");
        System.out.println(p1.toString());
    }

}
