
<?php

session_start();
include 'connection.php';

$uname=$_POST['name'];
$pswd=$_POST['pswd'];
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
$query="SELECT * from users where UName='$uname' and UPassword='$pswd'";
$result=mysqli_query($conn,$query);


 if (strlen ($pswd) != 6) {  

echo '<script type ="text/JavaScript">';  
echo 'alert("Password must be of 6 digits.")';  
echo '</script>';
}

else if(!$result || mysqli_num_rows($result)==0)
{
 
  
    $_SESSION['UName'] = $uname; 
  header('Location:admin.php');  
  
    
}   
else{
header('location:admin.php');

}

?>
