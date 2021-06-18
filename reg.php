<?php

$servername ="localhost" ;
$username="root";
$password="12345";
$dbname="website";
$conn = mysqli_connect("localhost", "root", "12345", "website");

// Check connection
if($conn === false){
   die("ERROR: Could not connect. "
	   . mysqli_connect_error());
}
$id=$_REQUEST['id'];
$name = $_REQUEST['name'];
$gender=$_REQUEST['gender'];
$email = $_REQUEST['email'];
$pswd = $_REQUEST['pswd'];
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
$sql = "INSERT INTO registration VALUES ('$myvar','$name','$gender','$email','$pswd')";   
$sql1="SELECT * from registration where (UName='$name' and Email='$email');";
$res=mysqli_query($conn, $sql1);

 if (strlen ($pswd) != 6) {  
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Password must be of 6 digits.")';  
    echo '</script>';
    }
 else if (mysqli_num_rows($res) > 0) 
    {
        
        $row = mysqli_fetch_assoc($res);
         if ($name==$row['UName'] && $email==$row['Email'])
        {
        
          echo '<script type ="text/JavaScript">';  
    echo 'alert("User already exists")';  
    echo '</script>';
    echo '';  
    header('loaction:signup.html');
        }
    }
 else if (!preg_match ($pattern, $email) )

 {  
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Email in not valid")';  
    echo '</script>';
    echo '';  
         
}


else if(mysqli_query($conn, $sql)){
   echo "Registered succesfully";
   header('location:signin.html');
}  


else{
   echo "ERROR: Hush! Sorry $sql. "
	   . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
