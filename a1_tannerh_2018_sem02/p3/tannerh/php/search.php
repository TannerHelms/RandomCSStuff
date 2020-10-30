<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Record</title>
  <link rel="stylesheet" type="text/css" href="../master.css">
</head>
<body>
  <div>
<br><br>
  <?php
    require '../php/DBconnect_4parm.php';
    $getID = $_POST['ID_input'];

    $sql = "SELECT * FROM alien_abduction where id = $getID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      echo "<table id='DBTable'>";
      echo "<th>ID</th><th>Name</th><th>Email</th><th>Happened on</th><th>Gone for</th><th># of aliens</th><th>Alien description</th><th>What they did</th><th>Other abductees</th><th>Abductee description</th><th>Other information</th><th>Report date</th>";
      while($row = $result->fetch_assoc()) {

          echo "<tr><td>".$row["id"]. "</td>
                <td>".$row["first_name"]. " ". $row["last_name"]. "</td>
                <td>".$row["email"] ."</td>
                <td>".$row["when_it_happened"]."</td>
                <td>".$row["how_long"]."</td>
                <td>".$row["how_many"]."</td>
                <td>".$row["alien_description"]."</td>
                <td>".$row["what_they_did"]."</td>
                <td>".$row["other_abductees"]."</td>
                <td>".$row["abductee_description"]."</td>
                <td>".$row["other_info"]."</td>
                <td>".$row["report_date"]."</td></tr>";

      }
      echo "</table>";
    } else {
      echo "0 results";
    }

    require '../php/DBclose.php';
   ?>
   <a href="../pages/searchDB.php"><p>Back</p></a>
 </div>
</body>
</html>
