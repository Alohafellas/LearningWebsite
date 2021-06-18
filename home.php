<?php
include('connection.php');
include('feed.php')
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="home.js"></script>
  <link rel="stylesheet" type="text/css" href="h.css">
  <link rel="stylesheet"  href="st.css">
  <link rel="stylesheet" type="text/css" href="crds.css">
  <title>Smart Learning Website</title>
</head>
<body>

<header class="header">

    <a href="#" class="logo"><i class="fab fa-studiovinari"></i>Smart Learning</a>                
    <div class="fas fa-bars"></div>
<nav class="navbar">
  <ul>
    <li><a href="#home" >Home</a></li>
    <li><a href="#about" >About</a></li>
    <li><a href="#course" >Courses</a></li>
    <li><a href="#review" >Reviews</a></li>
    <li><a href="signup.php" >Sign Up</a></li>
    <li><a href="signin.php" >Sign In</a></li>
    <li><a href="#contact" >Contact Us</a></li>
  </ul>
</nav>


</header>
<section id="home" class="home">

    <h1 class="banner">Welcome to Smart Learning</h1>
    <h3 class="slogan"> Maths Online Learning Class </h3>
    <button class="btn"><a href="signin.html">Get Started</a></button></div>


<div class="wave wave1"></div>
<div class="wave wave2"></div>
<div class="wave wave3"></div>

<div class="fas fa-plus "></div>
<div class="fas fa-divide "></div>

</section>

<section id="about" class="about">

<h1 class="heading">About Us</h1>

<div class="row">

    <div class="content">
        <h3>We build concepts </h3>
        <p>We provide maths lessons for the primary level students by which they can easily understand the basic concepts in fun and easy way</p>
      </div>       
      <div class="image">
        <img src="images/studying.svg" alt="">
      </div>

</div>
</section>
<section id="about" class="about">
  <h1 class="heading">Our Services</h1>
  <div class="row">
    <div class="image">
      <img src="images/Login.svg" alt="">
    </div>
    <div class="content">
      <h3>Easy to Access</h3>
      <p>One can easily access all the resources hassle free</p>
    </div>

  </div>
  <div class="row">
    <div class="image">
      <img src="images/money.svg" alt="">
    </div>
    <div class="content">
      <h3>Free of cost</h3>
      <p>We provide free class so anyone can enroll for the respective class</p>
    </div>


  </div>
  <div class="row">
    <div class="image">
      <img src="images/secure.svg" alt="">
    </div>
    <div class="content">
      <h3>Secure</h3>
      <p>We promise that all your personal data is secure and safe </p>
    </div>

  </div> 
  </div>
</section>
<section id="course" class="course">
    <h1 class="heading">Our Courses</h1>
    <div class="container">
  <div class="card">
    <div class="box">
      <div class="content">
        <h2></h2>
        <h3>Kindergarten</h3>
        <a href="#">Join</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">

        <h3>Grade 1</h3>
        <a href="#">Join</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">

        <h3>Grade 2</h3>
        <a href="#">Join</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="box">
      <div class="content">

        <h3>Grade 3</h3>
        <a href="#">Join</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="box">
      <div class="content">

        <h3>Grade 4</h3>
        <a href="#">Join</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="box">
      <div class="content">

        <h3>Grade 5</h3>
        <a href="#">Join</a>
      </div>
    </div>
  </div>
</div>
</section>
   <section id="review"  class="rev">

   

     <div class="main-container ">
     <div class="heading-container">
     <h1 class="heading">Reviews</h1>
     <?php
        include('connection.php');

        $query="SELECT UName , RateMsg, Comment,Timestamp from feedback LIMIT 0, 6";
          $result=mysqli_query($conn,$query);
          if (mysqli_num_rows($result) > 0)
          {
               while($rows=mysqli_fetch_array($result))
              {
                ?>
                 <div class="card-container">
                 <div class="card card-3">
                 <h2 class="card__title"><?php  echo $rows['UName']; ?></h2>
                 <h2 class="card__text"><?php  echo $rows['RateMsg']; ?></h2>
                 <h2 class="card__text"><?php  echo $rows['Comment']; ?></h2>
                 <h2 class="card__text"><?php  echo $rows['Timestamp']; ?></h2>
                 </div>
              
                <?php 
              } 
           }
       ?>
</div> 
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.heading-container {
  text-align: center;
}

.heading {
  font-weight: 600;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.card {

  margin: 20px;
  padding: 40px;
  width: 250px;
  min-height: 200px;
  display: grid;
  grid-template-rows: 20px 20px 2fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.5s;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}

.card__title {
  grid-row: 1/4;
  color:black;
  font-weight: 500;
  font-size: 3rem;
 
}
.card__text {

  display:block;
  font-weight: 300;
  color: black;
  font-size: 2rem;
}

.card-3 {
  background: radial-gradient(#76b2fe, #b69efe);
}


@media (max-width: 1600px) {
  .card-container {
    justify-content: center;
  }
}

  </style>
   </section>
    <section id="contact" class="contact">

        <h1 class="heading">Contact Us</h1>
        
        
        <div class="row">
            <div class="image">
                <img src="images/Contactus.svg" alt="">
              </div>
        
          <div class="form-container">
            <form action="contact.php" method="POST">
        
              <div class="inputBox">
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="last_name"  placeholder="Last Name">
              </div>
              <input type="email" name="email" placeholder="Email">
              <textarea  id="" cols="30" rows="10" name="msg" placeholder="Message"></textarea>
              <input type="submit" name="submit" value="send">
        
            </form>
          </div>
        
      
        </div>
        
        </section>
        <section class="footer">

          <h1>Created by Shreya Tiwari & Vibha Yadav  ||  All rights reserved.</h1>

          </section>

  
</body>
</html>
<script>


</script>