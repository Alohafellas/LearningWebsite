
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login</div>
      <form action="log.php" method="POST">
        <div class="input-field">
          <i class="fas fa-user"></i>
        <input type="text" name="name" required placeholder="Username">
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
       
      </form>
    </div>

  </body>
</html>
