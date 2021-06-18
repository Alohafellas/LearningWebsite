<?php
    // header.php
    include ('connection.php');
?>

   
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Create Account</div>
      <form action="reg.php" method="POST" >
        <div class="input-field">
          <i class="fas fa-user"></i>
        <input type="text" id="name" name="name"   required placeholder="Name">
        <span id="error"></span>
      </div>
      
    <div class="input-field">
      <i class="bx bxs-user-pin"></i>
      <input type="text" id="gender" name="gender" required placeholder="Gender">
      <span id="error"></span>
  </div><!--
  <div class="input-field">
  <select name="grade">
    <option value="Select Grade">Select Grade</option>
    <option value="Kindergarten" >Kindergarten</option>
    <option value="Grade 1">Grade 1</option>
    <option value="Grade 2" >Grade 2</option>
    <option value="Grade 3 ">Grade 3</option>
    <option value="Grade 4">Grade 4</option>
    <option value="Grade 5">Grade 5</option>
  </select>
</div>-->
        <div class="input-field">
            <i class="fas fa-envelope"></i>
          <input type="text" id="email" name="email" required placeholder="Email">
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
        <input type="password" id="pswd" name="pswd" required placeholder="Password">
      </div>
      <div class="field">
        <input type="submit"  name="submit" value="Sign Up" >
      </div>
        <div class="signup-link">Already a member? <a href="signin.php">Login</a></div>
      </form>
    </div>

  </body>
</html>
