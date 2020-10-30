<?php
include '../php/DBconnect_4parm.php';
$sql="SELECT id, first_name, last_name, when_it_happened, how_long, how_many, alien_description, what_they_did, other_abductees, abductee_description, other_info, email, report_date  FROM alien_abduction";
$result=$conn->query($sql);

// get the records from the database
if ($result = $conn -> query("SELECT * FROM alien_abduction ORDER BY id")) {
	// display records if there are records to display
	if ($result -> num_rows > 0) {
		// display records in a table
		echo "<table border='1' cellpadding='7'>";

		// set table headers
		echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>When It Happened</th><th>How long the abductee was gone</th><th>How Many Aliens</th><th>Alien Description</th><th>What The Aliens Did</th><th>Were there other abductees?</th><th>Describe the other abductees</th><th>Other Info</th><th>Email</th><th>Report Date</th></tr>";

		while ($row = $result -> fetch_object()) {
			// set up a row for each record
			echo "<tr>";
			echo "<td>" . $row -> id . "</td>";
			echo "<td>" . $row -> first_name . "</td>";
			echo "<td>" . $row -> last_name . "</td>";
            echo "<td>" . $row -> when_it_happened . "</td>";
            echo "<td>" . $row -> how_long . "</td>";
            echo "<td>" . $row -> how_many . "</td>";
            echo "<td>" . $row -> alien_description . "</td>";
            echo "<td>" . $row -> what_they_did . "</td>";
            echo "<td>" . $row -> other_abductees . "</td>";
            echo "<td>" . $row -> abductee_description . "</td>";
            echo "<td>" . $row -> other_info . "</td>";
			echo "<td>" . $row -> email . "</td>";
			echo "<td>" . $row -> report_date . "</td>";
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
