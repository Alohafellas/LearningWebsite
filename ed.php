<?php
include('connection.php');
include('ques.php');


$q="DELETE from exercise where ExerciseID='".$_SESSION['ExerciseID']."'";
$res=mysqli_query($conn,$q);
if($res)
{
    echo "";
}