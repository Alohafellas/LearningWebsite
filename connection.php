<?php

$servername ="localhost" ;
$username="root";
$password="12345";
$dbname="website";
$conn = mysqli_connect("localhost", "root", "12345", "website");

// Check connection
if($conn === false){
   die("ERROR: Could not connect. "
	   . mysqli_connect_error());
}
?>