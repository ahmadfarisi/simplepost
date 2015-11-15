<?php
	$hostname = "br-cdbr-azure-south-a.cloudapp.net";
	$username = "b2e09bd992e5c6";
	$password = "1624023a";
	$dbname   = "dbworkshopazure";
	
	$conn = mysql_connect($hostname, $username, $password) or die("MYSQL not Connected");
	$db   = mysql_select_db($dbname) or die("Database is not found");
?>