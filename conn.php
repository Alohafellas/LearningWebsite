
<?php
session_start();
require_once("connection.php");


     
        $chapter = $_POST['chap'];
        $ques  = $_POST['ques'];
        $op1=$_POST['op1'];
        $op2=$_POST['op2'];
        $op3=$_POST['op3'];
        $op4=$_POST['op4'];
        $ans = $_POST['ans'];
    
       $query = "INSERT INTO exercise VALUES (NULL,'$chapter', '$ques', ' $op1', '$op2', '$op3',' $op4','$ans')";
       $result=mysqli_query($conn,$query);
        if($result){
   
           echo "";
           header('location.admin.php');
       }
        else if (!$result) {
       echo "Error: " . mysqli_error($conn);
       }
else{
       echo "failed";
}
  
?>
