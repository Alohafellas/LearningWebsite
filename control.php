
<?php
session_start();
include('connection.php');

     
        $chapter = $_POST['chap'];
        $title  = $_POST['title'];
        $category = $_POST['category'];
        $vidName = $_FILES['file']['name'];
        $vidTmp = $_FILES['file']['tmp_name'];
       $vidSize = $_FILES['file']['size'];
       $maxFileSize = 2000000;
       $filePath = "videos/".$vidName;
       move_uploaded_file($vidTmp, $filePath);
       $query = sprintf("INSERT INTO lesson  VALUES ('%s','%s', '%s', '%s', '%s')",NULL, $chapter, $title,  $filePath,$category);
       $result=mysqli_query($conn,$query);
        if($result){
   
           echo "";
       }
        else if (!$result) {
       echo "Error: " . mysqli_error($conn);
       }
else{
       echo "failed";
}
  
?>
