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
  <title>Home</title>
</head>

<?php
include_once("C:/xampp/htdocs/portfolioWEBDEV/index.php");
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
  <a href="#default" class="logo">Street Style</a>
    <div class="header-right">
      <a href="index.php">Home</a>
      <a href="contact.php">Contact</a>
      <a href="aboutme.php">About Me</a>
      <a href="FAQs.php">FAQs</a>
      <a href="login.php">Login</a>
    </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="myname">
  <main>IAN ROBIN BREVA</main>
</div>


<div class="streetphotog">
  <h4>STREET PHOTOGRAPHER</h4>
</div>


<div class="introduction">
  <main>
  Freelance/street photographer based in Laguna, Philippines. 
  <br>
  I shoot portraits, landscapes and everyday street life.
  <br>
  <br>
  <a class="btn btn-primary" href="register.php">My Portfolio</a> 
  <a class="btn btn-outline-warning fw-bold" href="videos.php">Videos</a> 
  </main>
</div>





<form method="POST">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
</form>


</body>
</html>