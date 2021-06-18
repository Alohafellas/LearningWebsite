<?php
include('connection.php');
session_start();
$old=$_POST['old'];
$new=$_POST['new'];
$cnf=$_POST['cnf'];
if($new==$cnf){
    $query="UPDATE registration set UPassword='$new' where UName='".$_SESSION["UName"]."' and Email='".$_SESSION["Email"]."'";
    $result=mysqli_query($conn,$query);
    if($result){
        header('location:d.php');
    }
}
else{
    echo 'New paassowrd doesnt match';
}