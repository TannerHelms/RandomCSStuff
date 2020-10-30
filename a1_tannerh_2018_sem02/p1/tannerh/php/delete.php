<?php
// connect to the database
include 'DBconnect_4parm.php';
//echo "working";
// confirm that the 'id' variable has been set
if(isset($_GET['id'])&&is_numeric($_GET['id'])) {
// get the 'id' variable from the URL
$id=$_GET['id'];
// delete record from database
if($stmt=$conn->prepare("DELETE FROM MyGuests WHERE id = ? LIMIT 1")) {
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->close();
} else {
echo "ERROR: could not prepare SQL statement.";
}
$conn->close();
// redirect user after delete is successful
header("Location: http://www.westada.net/a1/tannerh/index.php");
} else
// if the 'id' variable isn't set, redirect the user
{
header("Location: http://www.westada.net/a1/tannerh/index.php");
}
?>