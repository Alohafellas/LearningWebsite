<?php
include('connection.php');
include('users.php');


$q="DELETE from users where ID='".$_SESSION['ID']."'";
$res=mysqli_query($conn,$q);
if($res)
{
    echo "";
}