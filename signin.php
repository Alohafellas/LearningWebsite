
<?php

session_start();
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login</div>
      <form action="login.php" method="POST">
        <div class="input-field">
          <i class="fas fa-user"></i>
        <input type="text" name="name" required placeholder="Name">
      </div>
        <div class="input-field">
            <i class="fas fa-envelope"></i>
          <input type="text" name="email" required placeholder="Email">
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
          <input type="password" name="pswd" required placeholder="Password">
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
        <div class="signup-link"> <a href="adminlogin.php">Admin Login</a></div>
      </form>
    </div>

  </body>
</html>
