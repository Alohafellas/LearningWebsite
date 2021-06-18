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
//$id=$_REQUEST['id'];
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['msg'];
$pattern = "^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$^";  
$sql = "INSERT INTO contactus VALUES ('$first_name','$last_name','$email','$msg')";

if(mysqli_query($conn, $sql)){
   echo '<script>
  alert "Your  request has sent successfully.
		 Soon we will contact you
		 Thank You ! "<script>';
       header('loaction:home.html');
} 
else if (!preg_match ($pattern, $email) )

{  
   echo '<script type ="text/JavaScript">';  
   echo 'alert("Email in not valid")';  
   echo '</script>';
   echo '';  
        
} else{
   echo '<script>
   alert "Some error occurred"<script>' ;
   header('location:home.html');
	    mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
