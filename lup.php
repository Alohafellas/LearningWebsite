<?php
session_start();
include('connection.php');
include('lessons.php');

$chap=$_POST['chap'];
$title=$_POST['title'];

$vidName = $_FILES['file']['name'];
$vidTmp = $_FILES['file']['tmp_name'];
$vidSize = $_FILES['file']['size'];
$maxFileSize = 2000000;
$filePath = "videos/".$vidName;
$category=$_POST['category'];
move_uploaded_file($vidTmp, $filePath);
$query="UPDATE lesson set LessonChapter='$chap' , LessonTitle='$title' , FileLocation='$filePath'  where LessonID='".$_SESSION['LessonID']."'";
$result=mysqli_query($conn,$query);
    if($result){
        echo "";

    }
?>
 