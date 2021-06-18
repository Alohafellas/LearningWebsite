<?php 
session_start();
include('connection.php');
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="wrapper">
  <form action="rate.php" method="POST">
      <label class="usrname"><?php echo $_SESSION['UName'];?></label>
      <label class="email"><?php echo $_SESSION['Email'];?></label>
    <input type="radio" name="rate" value="Bad"id="star-1">
    <input type="radio" name="rate" value="Satisfied" id="star-2">
    <input type="radio" name="rate" value="Good" id="star-3">
    <input type="radio" name="rate" value="Very Good"  id="star-4">
    <input type="radio" name="rate" value="Awesome" id="star-5">
    <div class="content">
      
      <div class="stars">
        <label for="star-1" class="star-1 fas fa-star"></label>
        <label for="star-2" class="star-2 fas fa-star"></label>
        <label for="star-3" class="star-3 fas fa-star"></label>
        <label for="star-4" class="star-4 fas fa-star"></label>
        <label for="star-5" class="star-5 fas fa-star"></label>
      </div>
    </div>
    <div class="footer">
      <span class="text"></span>
      <span class="numb"></span>
    </div>
    <textarea  id="" cols="55" rows="10" name="msg" placeholder=" Any Suggestions / Complaints ?"></textarea>
    <div class="field">
        <input type="submit"  name="submit" value="Submit" >
      </div>
  </div>

</body>
</html>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.wrapper{
  margin-left:35%;
  margin-top: 10%;
  background: #f6f6f6;
  max-width: 490px;
  width: 100%;
  border-radius: 10px;
  box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
}
.wrapper .content{
  padding: 20px;
  display: flex;
  align-items: center;
  width: 750px;
  position: absolute;
}
.wrapper .outer{
  height: 135px;
  width: 135px;
  overflow: hidden;
}

#star-2:checked ~ .content .emojis .slideImg{
  margin-top: -135px;
}
#star-3:checked ~ .content .emojis .slideImg{
  margin-top: -270px;
}
#star-4:checked ~ .content .emojis .slideImg{
  margin-top: -405px;
}
#star-5:checked ~ .content .emojis .slideImg{
  margin-top: -540px;
}
.wrapper .stars{
  margin-top: 30px;
}
.stars label{
  font-size: 30px;
  margin: 0 3px;
  color: #ccc;
}
#star-1:hover ~ .content .stars .star-1,
#star-1:checked ~ .content .stars .star-1,

#star-2:hover ~ .content .stars .star-1,
#star-2:hover ~ .content .stars .star-2,
#star-2:checked ~ .content .stars .star-1,
#star-2:checked ~ .content .stars .star-2,

#star-3:hover ~ .content .stars .star-1,
#star-3:hover ~ .content .stars .star-2,
#star-3:hover ~ .content .stars .star-3,
#star-3:checked ~ .content .stars .star-1,
#star-3:checked ~ .content .stars .star-2,
#star-3:checked ~ .content .stars .star-3,

#star-4:hover ~ .content .stars .star-1,
#star-4:hover ~ .content .stars .star-2,
#star-4:hover ~ .content .stars .star-3,
#star-4:hover ~ .content .stars .star-4,
#star-4:checked ~ .content .stars .star-1,
#star-4:checked ~ .content .stars .star-2,
#star-4:checked ~ .content .stars .star-3,
#star-4:checked ~ .content .stars .star-4,

#star-5:hover ~ .content .stars .star-1,
#star-5:hover ~ .content .stars .star-2,
#star-5:hover ~ .content .stars .star-3,
#star-5:hover ~ .content .stars .star-4,
#star-5:hover ~ .content .stars .star-5,
#star-5:checked ~ .content .stars .star-1,
#star-5:checked ~ .content .stars .star-2,
#star-5:checked ~ .content .stars .star-3,
#star-5:checked ~ .content .stars .star-4,
#star-5:checked ~ .content .stars .star-5{
  color: #fd4;
}
.wrapper .footer{
  border-top: 1px solid #ccc;
  background: #f2f2f2;
  width: 100%;
  height: 55px;
  padding: 0 20px;
  border-radius: 0 0 10px 10px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.footer span{
  font-size: 17px;
  font-weight: 400;
}
.footer .text::before{
  content: "Rate your experience";
}
.footer .numb::before{
  content: "0 out of 5";
}
#star-1:checked ~ .footer .text::before{
  content: "Bad";
}
#star-1:checked ~ .footer .numb::before{
  content: "1 out of 5";
}
#star-2:checked ~ .footer .text::before{
  content: "Satisfied";
}
#star-2:checked ~ .footer .numb::before{
  content: "2 out of 5";
}
#star-3:checked ~ .footer .text::before{
  content: "Good";
}
#star-3:checked ~ .footer .numb::before{
  content: "3 out of 5";
}
#star-4:checked ~ .footer .text::before{
  content: "Very Good";
}
#star-4:checked ~ .footer .numb::before{
  content: "4 out of 5";
}
#star-5:checked ~ .footer .text::before{
  content: "Awesome";
}
#star-5:checked ~ .footer .numb::before{
  content: "5 out of 5";
}
input[type="radio"]{
  display: none;
}


  textarea{
   width: 95%;
    margin-left: 2.5%;
    margin-right: 2%;
    margin-top:34px;
    height:10rem;
    padding:1rem; 
    resize: none;
  }
  .usrname{
      margin-left: 33%;
      margin-right: 25%;
      text-align: center;
      font-weight: 500;
      font-style: verdana;
      font-size: 2.5rem;
  }
  .email{
    margin-left: 22%;
    margin-right: 15%;
    text-align: center;
    font-weight: 500;
    font-style: verdana;
    font-size: 1.5rem;
}
form .field input[type="submit"]{
    cursor: pointer;
    transition: all 0.3s ease;
    color: white;
    letter-spacing: 0.1rem;
    border-radius: 1rem;
   width: 150px;
   height: 50px;
   font-weight: 600;
   margin-left:30%;
   margin-right:35%;
   margin-bottom: 3%;
   position: relative;
   background-color: black;
    transition: all 0.3s ease;
  }
  form .field input[type="submit"]:active{
    transform: scale(0.95);
  }
</style>