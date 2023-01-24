<?php
include("connections.php");
$url = 'C:\xampp\htdocs\portfolioWEBDEV\background.jpg';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <title>Tutorials and Videos</title>
</head>

<?php
include_once("C:/xampp/htdocs/portfolioWEBDEV/videos.php");
?>


<body>
<style>
body {
  background-image: url("background.jpg");
  background-size: 100% 100%;
  background-repeat: no-repeat;
  font-family: "Saira";
}
</style>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@100&display=swap" rel="stylesheet">


<div class="header">
  <a href="index.php" class="logo">Street Style</a>
  <div class="header-right">
      <a href="index.php">Home</a>
      <a href="contact.php">Contact</a>
      <a href="aboutme.php">About Me</a>
      <a href="FAQs.php">FAQs</a>
      <a href="login.php">Login</a>
    </div>
</div>


//tutorials
<section class="p-4">
<div class="row">
 
    <h1 class="text-center mb-1 pb-2 text-warning fw-bold">Tutorials</h1>
    <p class="text-center mb-5 text-white">My recommended videos of Tips and Tricks in my photography journey</p>

    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Photography Basics</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/V7z7BAZdt2M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
        </div>
    </div>

    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Street Photography Basics</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Dyf2WDPttko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
            <br>
        </div>
    </div>

    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Beginner Cameras</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/aoAiIJZ6s-Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
            <br>
        </div>
    </div>
</section>


//videos
<section class="p-4">
<div class="row">   
    <h1 class="text-center mb-1 pb-2 text-warning fw-bold">Other videos</h1>
    <p class="text-center mb-5 text-white">Guitar covers, gameplays and short films</p>
    
    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Ka-chat (Shortfilm)</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/1cB_wjBU-kw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
        </div>
    </div>

    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Giving away Free Tablatures</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8l4rP63Jx8Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
        </div>
    </div>

    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">CSGO montage</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/B3oTsj5QvUU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
        </div>
    </div>


    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Pacify Gameplay</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6DIMGxKVjv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
                <br>
        </div>
    </div>


    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Bella Ciao</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jTGrHckNNxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
                <br>
        </div>
    </div>


    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">BAAM BAAM</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uoZyjGXeYn8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
        </div>
    </div>


    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Despacito</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/N1lqAnaHXpY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
        </div>
    </div>


    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Pansamantala</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tt3LokOUNXg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
        </div>
    </div>


    <div class="col-sm-4">
      <!-- 16:9 -->
      <h4 class="mb-3 text-primary text-white">Love of my Life</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dt4KCYU-oGE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
        </div>
    </div>


    
</div>

</section>
</body>
</html>