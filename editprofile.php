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
session_start();
if(isset($_SESSION['UName'], $_SESSION['UPassword'])) {


 $query = "SELECT * FROM registration WHERE UName = '".$_SESSION['UName']."' AND UPassword = '".$_SESSION['UPassword']."'";

 ;

 if($result = mysqli_query($conn, $query)) {

   $row = mysqli_fetch_assoc($result);

   echo "<div class='info'><strong>Name:</strong> <span>".$row['UName']."</span></div>";
   echo "<div class='info'><strong>DOB:</strong> <span>".$row['Dob']."</span></div>";
   echo "<div class='info'><strong>Gender:</strong> <span>".$row['Gender']."</span></div>";
   echo "<div class='info'><strong>Grade:</strong> <span>".$row['Grade']."</span></div>";
   echo "<div class='info'><strong>Email:</strong> <span>".$row['Email']."</span></div>";
   //echo "<div class='info'><strong>Year Level:</strong> <span>".$row['yrlevel']."</span></div>";

   $result = mysqli_query($conn, $query_date);

   $row = mysqli_fetch_row($result);


 } else {

   die("Error with the query in the database");

 }}
// Close connection
mysqli_close($conn);
unset($_SESSION['prompt']);
?>