

<?php 
session_start();
include('connection.php');


?> 

<section class="get-in-touch">
   <h1 class="title">Update User</h1>
   <form class="contact-form row" accept-charset="UTF-8" action="uup.php" method="POST" >

      <div class="form-field col x-100">
         <input id="name" name="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Username</label>
      </div>
      <div class="form-field col x-100">
         <input id="text" name="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">Email</label>
      </div>
      <div class="form-field col x-100">
         <input id="text" name="pswd" s class="input-text js-input" type="password" required>
         <label class="label" for="email">Password</label>
      </div>
 
      
      <div class="form-field col x-100 align-center">
         <input class="submit-btn" type="submit" value="Update">
      </div>
   </form>
</section>
<style>

@import url(https://fonts.googleapis.com/css?family=Raleway:300);
@import url(https://fonts.googleapis.com/css?family=Lusitana:400,700);



.align-center {
   text-align: center;
}



body {
  margin-top:-600px;
   position: center;
   margin-left: 5%;
}

.row {

   margin: -20px 0;}
   .col {
      padding: 0 20px;
      float: left;
      box-sizing: border-box;}
      .col .x-50 {
         width: 50%;
      }
      .col .x-100 {
         width: 100%;
      }
   


.content-wrapper {
   min-height: 100%;
   position: center;
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
     margin-left: -22%;
  }



.contact-form .form-field {
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
   .contact-form :focus {
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
      width:130px;
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