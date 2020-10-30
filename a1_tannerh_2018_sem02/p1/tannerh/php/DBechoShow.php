<?php
include 'php/DBconnect_4parm.php';
$sql="SELECT * FROM MyGuests";
$result=$conn->query($sql);
if($result->num_rows>0) {
echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Registered</th><th>Website</th><th>Comments</th></tr>";
// output data of each row
while($row=$result->fetch_assoc()) {
echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["reg_date"]."</td><td>".$row["website"]."</td><td>".$row["comments"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
$conn->close();
?>