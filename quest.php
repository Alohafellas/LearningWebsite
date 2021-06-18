<?php 
session_start();
include('connection.php');
$query="SELECT LessonTitle from lesson";
$result=mysqli_query($conn,$query);
$sql=mysqli_fetch_array($result);
while($sql){
    
$row=$sql['LessonTitle'];
}
?> 
