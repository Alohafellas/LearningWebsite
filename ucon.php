
<?php
session_start();
require_once("connection.php");


     
        $uname = $_POST['name'];
        $email = $_POST['email'];
        $pswd=$_POST['pswd'];
    
    
       $query = "INSERT INTO users VALUES (NULL,'$uname', '$email', ' $pswd')";
       $result=mysqli_query($conn,$query);
        if($result){
   
          header('location:admin.php');
       }
        else if (!$result) {
       echo "Error: " . mysqli_error($conn);
       }
else{
       echo "failed";
}
  
?>
