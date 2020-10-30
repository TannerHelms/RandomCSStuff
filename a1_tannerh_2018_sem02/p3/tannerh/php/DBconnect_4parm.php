<?php




$servername = "gator4268.hostgator.com";
$username = "mmcclend_root";
$password = "aliens";
$dbname = "mmcclend_DB_alien";






$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
  die("<br>Connection failed (4 parm): " .$conn -> connect_error. "<br>");
}
?>
