<?php

	$servername = "cssql.seattleu.edu";
	$username = "***";
	$password = "***";
	$dbname = "***";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO Courses
	VALUES ('CS550', 'Algorithm', 'G1', 6);";
	$sql .= "INSERT INTO Courses
	VALUES ('CS530', 'Distributed Systems', 'G2', 6);";

	if (mysqli_multi_query($conn, $sql)) {
		echo "New records created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?> 