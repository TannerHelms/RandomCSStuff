
	<?php
	include '../php/DBconnect_4parm.php';
	$sql="SELECT id, first_name, last_name FROM alien_abduction";
	$result=$conn->query($sql);

	// get the records from the database
	if ($result = $conn -> query("SELECT * FROM alien_abduction ORDER BY first_name")) {
		// display records if there are records to display
		if ($result -> num_rows > 0) {
			// display records in a table
			echo "<table border='1' cellpadding='7'>";

			// set table headers
			echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";

			while ($row = $result -> fetch_object()) {
				// set up a row for each record
				echo "<tr>";
				echo "<td>" . $row -> id . "</td>";
				echo "<td>" . $row -> first_name . "</td>";
				echo "<td>" . $row -> last_name . "</td>";
				echo "</tr>";
			}

			echo "</table>";
		}
		// if there are no records in the database, display an alert message
		else {
			echo "No results to display!";
		}
	}
	?>
