<?php
	$hostname = "srv1675.hstgr.io";
	$username = "u199225180_avatarrental";
	$database = "u199225180_avatarrental";
	$password = "ExbEE5L4TePG5ixT";
	$conn = new mysqli($hostname, $username, $password, $database);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully";
?>