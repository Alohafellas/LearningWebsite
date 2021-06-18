<?php
include('connection.php');
session_start();
     $fetchVideos = mysqli_query($conn, "SELECT * FROM lesson ");
     while($row = mysqli_fetch_array($fetchVideos)){
       $name=$row['FileLocation'];
       $title=$row['LessonTitle'];
     
     ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="container" onload=" disableAutoplay()">

  <div class="row">
    <div class="col-md-4 ">
      <div class="card">
        <div class="card-image">
          <div class="embed-responsive embed-responsive-16by9">
            <video id="vid" width="200" height="130" src="<?php echo $name;?>" frameborder="0" controls></video>

        </div>


        <div class="card-content">
          <span class="card-title"><?php echo $title;?></span>
        
        </div>


      </div>
    </div>



</div>
<?php
     }
?>
<style>



.card{
  margin-top: 25%;
justify-content: center;
-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0  rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card .card-content {
    padding: 10px;
  
}

.card .card-content .card-title, .card-reveal .card-title{
    font-size: 20px;
    font-weight: 100;
  margin-bottom:10px;
}

.container .content {
    position: center;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); 
    color: #f1f1f1;
    
    padding: 2px;
    text-align: right;
    margin-left:90px;
    padding-right:15px;
    
}

</style>
<script>
  var x = document.getElementById("vid");
function disableAutoplay() { 
  x.autoplay = false;
  x.load();
} 

const video = document.querySelector("video");
const videoId = video.src;
let intervalHandle = null;


video.addEventListener("play", (event) => {
  intervalHandle = setInterval(() => {
    savePosition(videoId, video.currentTime);
  }, 5000)
})

video.addEventListener("pause", (event) => {
  clearInterval(intervalHandle);
})

const getPosition = (videoId) => {
  // fetch(url) ...
  const defaultPosition = {
    videoId,
    position: 0
  }

  try {
    return localStorage.getItem("position") || defaultPosition;
  } catch (error) {

  }

  return defaultPosition;
}

const savePosition = (videoId, position) => {
  // fetch(url, {method: 'POST', body: {videoId, position}}) ...
  try {
    localStorage.setItem("position", JSON.stringify({
      videoId,
      position
    }));
  } catch (error) {}
}

const result = getPosition(videoId);

video.currentTime = result.position;
    </script>
