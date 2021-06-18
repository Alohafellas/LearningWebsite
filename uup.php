<?php
session_start();
include('connection.php');
include('users.php');

$name=$_POST['name'];
$email=$_POST['email'];
$pswd=$_POST['pswd'];

$query="UPDATE users set UName='$name' , Email='$email' , UPassword='$pswd'  where ID='".$_SESSION['ID']."'";
$result=mysqli_query($conn,$query);
    if($result){
        echo "";

    }
?>
