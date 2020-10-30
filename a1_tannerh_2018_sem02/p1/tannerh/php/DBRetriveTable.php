<?php
include 'php/DBconnect_4parm.php';
$sql="SELECT * FROM MyGuests";
$result=$conn->query($sql);
if($result->num_rows>0) {
echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Registered</th><th>Website</th><th>Comments</th></tr>";
// output data of each row
while($row=$result->fetch_assoc()) {
echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["reg_date"]."</td><td>".$row["website"]."</td><td>".$row["comments"]."</td><td>"."<a href='php/records.php?id=".$row["id"]."'>Edit</a>"."</td><td>"."<a href='php/delete.php?id=".$row["id"]."'>Delete</a>"."</td></tr>";
}
echo "</table><a href='php/records.php'>Add New Record</a>";
} else {
echo "0 results";
}
$conn->close();
?>