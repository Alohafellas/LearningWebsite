<?php

$servername ="localhost" ;
$username="root";
$password="12345";
$dbname="website";
$conn = mysqli_connect("localhost", "root", "12345", "website");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
 }
 session_start();
if(isset($_POST['submit'])) {
  
$name = $_POST['name'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];

$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
$query="SELECT * from registration where UName='$name' , Email='$email' and  UPassword='$pswd'";
$result=mysqli_query($conn,$query);
$sql1="SELECT * from registration where (UName='$name' and Email='$email')";
$res=mysqli_query($conn, $sql1);


  if (!preg_match ($pattern, $email) ){  
        //$ErrMsg = "Email is not valid.";  
        echo '<script type="text/javascript">';
       echo 'alert("Email is not valid")' ;
      echo '</script>';
             
    }

  else if (strlen ($pswd) != 6) {  

    echo '<script type ="text/JavaScript">';  
    echo 'alert("Password must be of 6 digits.")';  
    echo '</script>';
    }
 if (mysqli_num_rows($res) == 0) 
    {
        
        $row = mysqli_fetch_assoc($res);
         if ($name!=$row['UName'] && $email!=$row['Email'])
        {
           
            echo '<script type ="text/JavaScript">';  
             echo 'alert("User not exists")';  
            echo '</script>';
            echo '';  
            header('loaction:signup.html');
        }
    }

   else if(!$result || mysqli_num_rows($result)==0)
    {
        
        
          $_SESSION['UName'] = $name; 
        //  $_SESSION['Gender'] = $Gender;
        $_SESSION['Email'] = $email;
        header('Location:d.php');  
        
          
      }   
    else{
      header('location:d.php');
       // echo 'Login Failed !! Username Email or Password doesnt match';
    }}
// Close connection
mysqli_close($conn);
?>


