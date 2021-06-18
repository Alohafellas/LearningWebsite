<?php
include('connection.php');
include('lessons.php');


$q="DELETE from lesson where LessonID='".$_SESSION['LessonID']."'";
$res=mysqli_query($conn,$q);
if($res)
{
    echo "";
}