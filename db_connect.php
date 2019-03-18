<?php
			// Database credentials
			$servername = "127.0.0.1";
			$username = "root";
			$dbname = "internship_project";
			$password = "";
			// Create connection.
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
?>
