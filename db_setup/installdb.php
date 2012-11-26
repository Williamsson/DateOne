<?php

//The location of your database
$databaseHost = "localhost";
//The user to your database
$user = "root";
//The password to your database
//$password = "xerxes";
$password = "root";
//The desired name of your database
$database = "pahlm";


$connection = mysql_connect($databaseHost, $user, $password);
if (!$connection){
	die("Database connection failed" . mysql_error());
}else{
	echo "Database connection established!<br/>";
}

	
mysql_select_db($database, $connection);
	

$query = "INSERT INTO eye_color (value, eye_color) VALUES ()";














?>