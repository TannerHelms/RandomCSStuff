<?php
$sql = "INSERT INTO alien_abduction
		VALUES(null,
			'$fname',
			'$lname',
			'$when_it_happened',
			'$how_long',
			'$how_many',
			'$alien_description',
			'$what_they_did',
			'$abductees_description',
			'$other_abductees',
			'$other',
			'$email',
			null)
			";

if ($conn -> query($sql) === TRUE) {
	echo "<br>New record created successfully<br>";
} else {
	echo "<br>Error: " . $sql . "<br>" . $conn -> error . "<br>";
}
?>
