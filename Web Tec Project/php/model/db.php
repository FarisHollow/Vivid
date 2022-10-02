<?php

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "vivid_db";
$dbhost = "localhost";
$dbname = "vivid_db";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

function getConnection(){
	global $dbhost;
	global $dbname;
	global $dbpass;
	global $dbuser;
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	// // Check connection
    // if ($conn->connect_error) {
	// die("Connection failed: " . $conn->connect_error);
	// }

	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

	return $conn;

	

}





