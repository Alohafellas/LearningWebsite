
<?php

include('connection.php');
    session_start();
    $query="SELECT count(*) from registration";
    $q1="SELECT count(*) from feedback";
    $q2="SELECT count(*) from contactus";
    $q3="SELECT count(*) from lesson";
    $q4="SELECT count(*) from exercise";
    $q5="SELECT count(*) from users";
    $result=mysqli_query($conn,$query);
    $total=mysqli_fetch_array($result);
    $r1=mysqli_query($conn,$q1);
    $t1=mysqli_fetch_array($r1);
    $r2=mysqli_query($conn,$q2);
    $t2=mysqli_fetch_array($r2);
    $r3=mysqli_query($conn,$q3);
    $t3=mysqli_fetch_array($r3);
    $r4=mysqli_query($conn,$q4);
    $t4=mysqli_fetch_array($r4);
    $r5=mysqli_query($conn,$q5);
    $t5=mysqli_fetch_array($r5);
 
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
        <title>Admin Dashboard</title>
    </head>
    <body id="body-pd" onload="initClock()">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                         <a href="#" class="nav__logo">Admin Panel</a>
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
                        <a href="lessons.php" class="nav__link">
                            <i class="bx bx-book-content nav__icon"></i>
                            
                            <span class="nav__name" id="myUL">Courses</span>
                        </a>
                        <a href="ques.php" class="nav__link">
                            <i class="bx bx-book-reader nav__icon"></i>
                            
                            <span class="nav__name">Exercises</span>
                        </a>
                        <a href="students.php" class="nav__link">
                            <i class="bx bx-user-circle nav__icon"></i>
                            
                            <span class="nav__name">Students</span>
                        </a>
                        <a href="users.php" class="nav__link">
                            <i class="bx bx-user nav__icon"></i>
                            
                            <span class="nav__name">Users</span>
                        </a>
                        <a href="vid.php" class="nav__link">
                            <i class="bx bx-photo-album nav__icon"></i>
                            
                            <span class="nav__name">Gallery</span>
                        </a>

                        <a href="contactus.php" class="nav__link">
                        <i class="bx bx-question-mark nav__icon"></i>
                            <span class="nav__name" id="myUL">Queries</span>
                        </a>
                        <a href="query.php" class="nav__link">
                        <i class="far fa-comment-dots nav__icon"></i>
                            <span class="nav__name" id="myUL">Feedback</span>
                        </a>
                       
                    </div>
                </div>

                <a href="logout.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name" id="myUL" >Log Out</span>
                </a>
            </nav>
        </div>
    
        <div class="logo_content" id="home">
            <i class="fab fa-studiovinari"></i><span class="logo_name">Smart Learning</span> 
            <div id="home"><p class="intro">Welcome <?php echo $_SESSION['UName'];?> </p></p></div>
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
                        <span class="count"><?php echo $total[0];?></span>
                      </h3>
                      <p> Students</p>
                  </div>
                  <div class="float-right">
                      <i class="fas fa-user-graduate"></i>
                  </div>
              </div>
              <div class="card-body color2">
                  <div class="float-left">
                      <h3>
                          <span class="count"><?php echo $t3[0];?></span>
                      </h3>
                      <p>  Lessons </p>
                  </div>
                  <div class="float-right">
                      <i class="bx bx-movie-play"></i>
                  </div>
              </div>
              <div class="card-body color3">
                  <div class="float-left">
                      <h3>
                          <span class="count"><?php echo $t4[0];?></span>
                      </h3>
                      <p> Exercises </p>
                  </div>
                  <div class="float-right">
                  <i class="far fa-file-alt"></i>
               
                  </div>
              </div>
              <div class="card-body color2">
                  <div class="float-left">
                      <h3>
                          <span class="count"><?php echo $t1[0];?></span>
                      </h3>
                      <p>Feedbacks </p>
                  </div>
                  <div class="float-right">
                      <i class="far fa-comment-dots"></i>
                  </div>
              </div>
              <div class="card-body color3">
                  <div class="float-left">
                      <h3>
                          <span class="count"><?php echo $t2[0];?></span>
                      </h3>
                      <p> Queries </p>
                  </div>
                  <div class="float-right">
                  <i class='bx bx-message-square-detail'></i>
                
                      
                  </div>
              </div>
              <div class="card-body color1">
                  <div class="float-left">
                      <h3>
                          <span class="count"><?php echo $t5[0];?></span>
                      </h3>
                      <p>Admin Users </p>
                  </div>
                  <div class="float-right">
                      <i class="fas fa-users"></i>
                  </div>
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