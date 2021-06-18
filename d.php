
<?php

include('connection.php');
    session_start();
    $q3="SELECT count(*) from lesson";
    $q4="SELECT count(*) from exercise";
    $r3=mysqli_query($conn,$q3);
    $t3=mysqli_fetch_array($r3);
    $r4=mysqli_query($conn,$q4);
    $t4=mysqli_fetch_array($r4);

 
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="d.css">
        <link rel="stylesheet" href="dashboard.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
<script type='text/javascript' src='js/dynamicpage.js'></script>
        <title>User Dashboard</title>
    </head>
    <body id="body-pd" onload="initClock()">
    <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                         <a href="#" class="nav__logo">User Panel</a>
                    </div>
                       <div class="nav__list">
                            <a href="#" class="nav__link">
                                <i class="bx bx-search nav__icon"></i>
                                 <input type="text" id="search" placeholder="Search ..." >
                            </a>
                    <a href="#dashboard" class="nav__link active">
                        <i class="bx bx-grid-alt nav__icon"></i>
                        <span class="nav__name"  id="myUL">Dashboard</span>                      
                    </a>
                        <a href="vid.php" class="nav__link">
                            <i class="bx bx-book-reader nav__icon"></i>
                            
                            <span class="nav__name" id="myUL">Courses</span>
                        </a>
                        <a href="" class="nav__link">
                            <i class="bx bx-pencil nav__icon"></i>
                            
                            <span class="nav__name" id="myUL">Exercises</span>
                        </a>
                  
                        <a href="prof.php"  class="nav__link">
                            <i class="bx bxs-user-account nav__icon"></i>
                            <span class="nav__name" id="myUL">Profile</span>
                        </a>
                        <a href="resetpswd.php" class="nav__link">
                            <i class="bx bx-wrench nav__icon"></i>
                            <span class="nav__name" id="myUL">Change Password</span>
                        </a>
                        <a href="#" class="nav__link">
                            <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name" id="myUL">Analytics</span>
                        </a>
                        <a href="ratings.php" class="nav__link">
                        <i class="far fa-comment-dots nav__icon"></i>
                            <span class="nav__name" id="myUL">Feedback</span>
                        </a>
                       
                    </div>
                </div>

                <a href="logout.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name" >Log Out</span>
                </a>
            </nav>
        </div>
    
        <div class="logo_content" id="home">
            <i class="fab fa-studiovinari"></i><span class="logo_name">Smart Learning</span> 
            <div id="home"><p class="intro">Welcome <?php echo $_SESSION['UName'] ;?></p></p></div>
          <div class="datetime">
            <div class="date">
              <span id="dayname">Day</span>,
              <span id="month">Month</span>
              <span id="daynum">00</span>,
              <span id="year">Year</span>
            </div>
            <div class="time">
              <span id="hour">00</span>:
              <span id="minutes">00</span>:
              <span id="seconds">00</span>
              <span id="period">AM</span>
            </div>
          </div>
      </div>
   
    </div>
</div>
<div id="contents">
<div class="cbdy"  id="dashbaord">
<div class="card-body color1">
                  <div class="float-left">
                      <h3>
                          <span class="count"><?php echo $t3[0];?></span>
                      </h3>
                      <p> Chapters </p>
                  </div>
                  <div class="float-right">
                      <i class="bx bxs-videos"></i>
                  </div>
              </div>
              <div class="card-body color2">
                  <div class="float-left">
                      <h3>
                          <span class="count"><?php echo $t4[0];?></span>
                      </h3>
                      <p>  Exercises </p>
                  </div>
                  <div class="float-right">
                      <i class="bx bx-copy-alt"></i>
                  </div>
              </div>
              <div class="card-body color3">
                  <div class="float-left">
                      <h3>
                          <span class="count">0</span>
                      </h3>
                      <p>  </p>
                  </div>
                  <div class="float-right">
                      <i class="bx bx-"></i>
                  </div>
              </div>

</div>

    </body>
</html>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="dash.js"></script>
       <script>
$(document).ready(function(){
    $('#contents').load('href');
    $('#navbar a').click(function(e){
        e.preventDefault();
        $('#contents').load(e.target.href);
    })
});
$(document).ready(function() {
                $("#search").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myUL ").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });


       </script>