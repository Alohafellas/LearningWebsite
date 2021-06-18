<?php
 include('connection.php');
 session_start();
 $query="SELECT  UName, RateMsg , Comment ,Timestamp from feedback";
 $result=mysqli_query($conn,$query);
 if (mysqli_num_rows($result) > 0) {
    // output data of each row
   
    }
?>