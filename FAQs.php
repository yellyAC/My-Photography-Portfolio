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
  <title>FAQs</title>
</head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@100&display=swap" rel="stylesheet">

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

<?php
include_once("C:/xampp/htdocs/portfolioWEBDEV/FAQs.php");
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


<!--Section: FAQ-->
<section class="p-4">
  <h1 class="text-center mb-4 pb-2 text-warning fw-bold">Frequently Asked Questions</h1>
  <p class="text-center mb-5 text-white"> Find the answers for the most frequently asked questions below </p>
  
  <br>
  <br>

  <div class="row text-white">
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary text-warning fw-bold"> <i class="fas fa-rocket text-primary">
      </i>How do you take photos of strangers without them feeling awkward?</h6>
      <p>Just don't be too obvious when taking pictures of them. But sometimes, you need to ask their permission to take photos of them.</p>
    </div>
  
  
    <div class="col-md-6 col-lg-4 mb-4 ">
      <h6 class="mb-3 text-primary text-warning fw-bold"><i class="far fa-paper-plane text-primary"></i>Do I edit videos?</h6>
      <p>Absolutely! I accepts video editing commissions like, vlogs, informative video and short films.</p>
    </div>

    
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary text-warning fw-bold"><i class="fas fa-pen-alt text-primary"></i>When did you start photography?</h6>
      <p> I started my photography carrer on year 2019. So it's been 3 years now.</p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary text-warning fw-bold"><i class="fas fa-user text-primary"></i> What camera do you use?</h6>
      <p>I'm using Canon Rebel T6 with 50mm lens.</p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary text-warning fw-bold"><i class="fas fa-home text-primary"></i> Does camera/gear matters?</h6>
      <p>No. Whether you're taking a photo with your phone, in the end, it's all about how you apply the fundamentals of photography.</p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary text-warning fw-bold"><i class="fas fa-book-open text-primary"></i>Are you single?</h6>
      <p>I'm already taken guys!</p>
    </div>
  </div>

 
</section>

  

</body>
</html>
<!--Section: FAQ-->