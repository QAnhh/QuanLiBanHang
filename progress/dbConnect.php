<?php
	$servername = "localhost";
	$database = "quan_li_ban_hang";
	$username = "root";
	$password = "";
	$charset = "utf8";

	try {
	  $conn = new PDO("mysql:host=$servername;dbname=$database;charset=$charset", $username, $password);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	} catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
	}
	
?>