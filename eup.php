<?php
session_start();
include('connection.php');
include('ques.php');

$chap=$_POST['chap'];
$title=$_POST['ques'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$op4=$_POST['op4'];
$ans=$_POST['ans'];
$query="UPDATE exercise set LessonChapter='$chap' , Question='$title' , OA='$op1' ,OB='$op2', OC='$op3', OD='$op4', Answer='$ans' where ExerciseID='".$_SESSION['ExerciseID']."'";
$result=mysqli_query($conn,$query);
    if($result){
        echo "";

    }
?>
