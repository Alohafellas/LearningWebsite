<?php 
session_start();
include('connection.php');


?> 


<section class="get-in-touch">
   <h1 class="title">Add Exercise</h1>
   <form class="contact-form row" accept-charset="UTF-8" action="conn.php" method="POST">
      <div class="form-field col x-50">
      <select name="chap">
    <option disabled selected> Select Chapter </option>
    <?php
    $query="SELECT * from lesson";
      //  $query="SELECT *  from lesson where LessonID='".$row['LessonID']."'";
         $res=mysqli_query($conn,$query);
         while($rows=mysqli_fetch_assoc($res)){
           echo"<option  value='".$rows['LessonTitle']."'>" .$rows['LessonTitle']."</option>"; 
        }
        ?>
    </select>

         <label class="label" for="name">Chapter</label>
      </div>
      <div class="form-field col x-100">
         <input id="message" name="ques" class="input-text js-input" type="text" required>
         <label class="label"   for="message">Question</label>
      </div>
    
      <div class="form-field col x-50">
         <input id="name" name="op1" class="input-text js-input" type="text" required>
         <label class="label" for="name">A</label>
      </div>
      <div class="form-field col x-50">
         <input id="name" name="op2"  class="input-text js-input" type="text" required>
         <label class="label" for="name">B</label>
      </div>
      <div class="form-field col x-50">
         <input id="name"  name="op3"  class="input-text js-input" type="text" required>
         <label class="label" for="name">C</label>
      </div>
      <div class="form-field col x-50">
         <input id="name"  name="op4"  class="input-text js-input" type="text" required>
         <label class="label" for="name">D</label>
      </div>
   
      <div class="form-field col x-100">
         <input id="message" name="ans"  class="input-text js-input" type="text" required>
         <label class="label" for="message">Answer</label>
       
      </div>
      <div class="form-field col x-100 align-center">
         <input class="submit-btn" type="submit" value="Add">
      </div>
   </form>
</section>
<style>

@import url(https://fonts.googleapis.com/css?family=Raleway:300);
@import url(https://fonts.googleapis.com/css?family=Lusitana:400,700);


:after {
      content: "";
      display: table;
      clear: both;
  
}

.align-center {
   text-align: center;
}



html {
   height: 100%;
}
body {
   height: 100%;
   position: relative;
}

.row {
   
   margin: -20px 0;}
   .row .col {
      padding: 0 20px;
      float: left;
      box-sizing: border-box;}
     .col .x-50 {
         width: 50%;
      }
       .col.x-100 {
         width: 100%;
      }
   


.content-wrapper {
   min-height: 100%;
   position: relative;
}

.get-in-touch {
   max-width: 650px;
   margin: 0 auto;
   position: relative;
   top: 50%;
   transform: translateY(-50%);
}
.get-in-touch .title {
     text-align: center;
     font-family: Raleway, sans-serif;
     text-transform: uppercase;
     letter-spacing: 3px;
     font-size: 36px;
     line-height: 48px;
     padding-bottom: 48px;
  }


.contact-form  .form-field {
      position: relative;
      margin: 32px 0;
   }
   .contact-form  .input-text {
      display: block;
      width: 100%;
      height: 36px;
      border-width: 0 0 2px 0;
      border-color: #000;
      font-family: Lusitana, serif;
      font-size: 18px;
      line-height: 26px;
      font-weight: 400;
   }
      .contact-form  :focus {
         outline: none;

      }
      .contact-form .label {
            transform: translateY(-24px);
          }
  
   
   .label {
      position: absolute;
      left: 20px;
      bottom: 11px;
      font-family: Lusitana, serif;
      font-size: 18px;
      line-height: 26px;
      font-weight: 400;
      color: #888;
      cursor: text;
      transition: transform .2s ease-in-out;
   }
   
   .submit-btn {
      display: inline-block;
      background-color: #000;
      color: #fff;
      font-family: Raleway, sans-serif;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 16px;
      line-height: 24px;
      padding: 8px 16px;
      border: none;
      cursor: pointer;
   }


.note {
   position: absolute;
   left: 0;
   bottom: 10px;
   width: 100%;
   text-align: center;
   font-family: Lusitana, serif;
   font-size: 16px;
   line-height: 21px;
}
   .note .link {
      color: #888;
      text-decoration: none;}
      .note :hover {
         text-decoration: underline;
      }
   

</style>
<script>
$( '.js-input' ).keyup(function() {
  if( $(this).val() ) {
     $(this).addClass('not-empty');
  } else {
     $(this).removeClass('not-empty');
  }
});
</script>