<?php

	$servername = "localhost";
	$username = "root1";
	$password = "";
	$dbname = "db_onlineinv";

	date_default_timezone_set("Asia/Manila");
	$info = getdate();
	$date = $info['mday'];
	$month = $info['mon'];
	$year = $info['year'];
	$hour = $info['hours'];
	$min = $info['minutes'];
	$sec = $info['seconds'];
	$current_date = "$month/$date/$year : $hour:$min";
	$current_date2 = "$month/$date/$year";
	$current_time = "$hour:$min";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	//error_reporting(0);
