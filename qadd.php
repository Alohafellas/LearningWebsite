<?php 
session_start();
include('connection.php');
?> 
        <div class="body">
        <form accept-charset="UTF-8" action="conn.php" method="POST"  >
     <table>
       <!--  <tr>
         <td>ID</td>
         <td>  <select name="title">
         <option value ="" disabled selected> Select ID </option>
         <?php
        $query="SELECT *  from lesson";
         $res=mysqli_query($conn,$query);
         while($row=mysqli_fetch_assoc($res)){
         echo"<option value='".$row['LessonID']."' selected>" .$row['LessonID']."</option>";
          //echo"<option value='".$row['LessonTitle']."'>" .$row['LessonTitle']."</option>";
        }
        ?>
         </select></td>
       
         </tr>-->
     <tr>
     <td>Chapter</td>
    <td> <select name="chap">
    <option disabled selected> Select Chapter </option>
    <?php
    $query="SELECT LessonTitle from lesson";
      //  $query="SELECT *  from lesson where LessonID='".$row['LessonID']."'";
         $res=mysqli_query($conn,$query);
         while($rows=mysqli_fetch_assoc($res)){
           echo"<option  value='".$rows['LessonTitle']."'>" .$rows['LessonTitle']."</option>"; 
        }
        ?>
    </select></td>

     </tr>
 
     <tr>
     <td>Question</td>
     <td><textarea  type="text" name="question" class="form-control"  cols="23" rows="10"  placeholder="Question"></textarea></td>
     </tr>
     <tr>
     <td>A</td>
     <td><input type="text" name="op1" class="form-control"  ></td></td>
     </tr>
     <tr>
     <td>B</td>
     <td><input type="text" name="op2" class="form-control"   ></td></td>
     </tr>
     <tr>
     <td>C</td>
     <td><input type="text" name="op3" class="form-control"  ></td></td>
     </tr>
     <tr>
     <td>D</td>
     <td><input type="text" name="op4" class="form-control"  ></td></td>
     </tr>
     <tr>
     <td>Answer</td>
     <td><input type="text" name="ans" class="form-control"    ></td></td>
     </tr>

       <td><button type="submit" class="btn btn-primary">Upload</button></td>
</div>

    <style>
 .body{
   text-align: left;
   padding-top:13px;
   padding-bottom: 15px;
   font-style: verdana;
   font-size: 1.2rem;
   padding-left: 50px;
   
 }
 .form-control{
   height:25px;
   margin-left: 5px;
   margin-top:15px;

 }
 .btn{
    border-radius: 2px;
    height:30px;
    width:90px;
    align-items: center;
 }
 select{
   width:187px;
 }

</style>


