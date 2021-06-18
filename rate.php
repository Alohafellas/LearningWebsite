<?php
include('connection.php');
session_start();

if(isset($_POST['submit'])) {

$name=$_SESSION['UName'];
$email=$_SESSION['Email'];
$rmsg=$_POST['rate'];
$cmnt=$_POST['msg'];
$query = "INSERT INTO feedback VALUES (NULL,'$name','$email','$rmsg','$cmnt',Null)";   
$result=mysqli_query($conn,$query);
if($result){
  echo "Feedback Given";
  header('location:d.php');
}}
?>