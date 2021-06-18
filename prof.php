
<?php
    include('connection.php');
   include('log.php');
 
   
 ?><head>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="prof.css">
</head>
<body>
<div class="wrapper">
    <div class="profile">
        <div class="profile_img_info">         
             <div class="img">
               <img src="images/User-512.png">
             </div>
             <div class="info">
             <span class="title"><?php echo $_SESSION['UName'];?></span>
             </div>
        </div>
        <div class="profile_skills">
            <div class="skills">
                <p>MY Profile </p>
                <ul>
                    <li><span class="icon"><i class="fab fa-user"></i></span>
                       <span class="title">Name : <?php  echo $_SESSION["UName"];?></span>
                  </li>
               <!--   <li><span class="icon"><i class="fab fa-envelope"></i></span>
                       <span class="title">Email : <?php echo $_SESSION['Gender'];?></span></li>  -->
                    <li><span class="icon"><i class="fab fa-envelope"></i></span>
                       <span class="title">Email : <?php echo $_SESSION['Email'];?></span></li>  
                       <li><button>Edit Profile</button></li>

                </ul>
            </div>
            
        </div>
    </div>

</div>
</body>