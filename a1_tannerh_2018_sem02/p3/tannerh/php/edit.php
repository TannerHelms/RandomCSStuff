<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Record</title>
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
    <h3>Update Record:</h3>



    <?php
    include '../php/DBconnect_4parm.php';
    $id = $_POST["ID_input"];
    $sql = "SELECT * FROM alien_abduction WHERE id=$id";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {

echo '



    <form method="post" action="update.php">
      <label for="ID_input3">ID:</label><br>
      <input type="text" name="ID_input" id="ID_input3" value="'.$id.'" readonly><hr />
      <label for="firstname">First name:</label><br>
      <input type="text" id="firstname" name="firstname" value="'.$row["first_name"].'"  /><hr />
      <label for="lastname">Last name:</label><br>
      <input type="text" id="lastname" name="lastname" value="'.$row["last_name"].'"  /><hr />
      <label for="email">Email address:</label><br>
      <input type="text" id="email" name="email" value="'.$row["email"].'"/><hr />
      <label for="whenithappened">When did it happen</label><br>
      <input type ="text" id="whenithappened" name="whenithappened" value="'.$row["when_it_happened"].'"/><hr />
      <label for="howlong">How long were you gone?</label><br>
      <input type ="text" id="howlong" name="howlong" value="'.$row["how_long"].'"/><hr>
      <label for="howmany">How many aliens did you see?</label><br>
      <input type="text" id="howmany" name="howmany" value="'.$row["how_many"].'"/><hr>
      <label for="aliendescription">Describe them:</label><br>
      <input type="text" id="aliendescription" name="aliendescription" value="'.$row["alien_description"].'"/><hr>
      <label for="whattheydid">What did they do to you?</label><br>
      <input type="text" id="whattheydid" name="whattheydid" value="'.$row["what_they_did"].'"/><hr>
      <label for="otherabductees">Did you see any other abductees?</label><br>
      Yes <input id="otherabductees" name="otherabductees" type="radio" value="yes">
      No <input id="otherabductees" name="otherabductees" type="radio" value="no" checked><hr>
      <label for="abducteedescription">If so, who did you see? (Frank is an eagle with a Pug head)</label><br>
      <textarea id="abducteedescription" name="abducteedescription" />'.$row["abductee_description"].'</textarea><hr>
      <label for="other">Anything else you want to add?</label><br>
      <textarea id="other" name="other" />'.$row["other_info"].'</textarea><br>
      <input type="submit" value="Update Abduction Report" name="report">
    </form>';
  }
  require 'DBclose.php';
  ?>
    <a href="../pages/searchDB.php"><p>Back</p></a>
 </div>
</body>
</html>
