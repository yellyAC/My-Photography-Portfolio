<?php

ob_start();

include("connections.php");

$email_valid = $password_valid = NULL;
$input = [];

if (isset($_POST["login-submit"])) {
  if (empty($_POST["email"])) {
    $error["email"] = "Email Required";
    
  } else {
    $input["email"] = $_POST["email"];
  }

  if (empty($_POST["password"])) {
    $error["password"] = "Password Required";
  } else {
    $input["password"] = $_POST["password"];
    
  }

  if (isset($input["email"]) and isset($input["password"])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $login_query = $pdo->query("SELECT * FROM portfolio WHERE email = '$email' LIMIT 1");
    
    // Check if Email Exists
    if ($login_query->rowCount() == 0) {
      $error["login"] = "Email not existing!";
    } else {
      $db_user = $login_query->fetch(PDO::FETCH_ASSOC);
      $db_id = $db_user["user_id"];
      $db_email = $db_user["email"];
      $db_password = $db_user["password"];
      
      // Check if query password is same to the inputted password
      if ($password != $db_password) {
        $error["login"] = "Incorrect Password";
      } else {
        $_SESSION["user_id"] = $db_id;
        header("Location: portfolio.php");
    }
    };
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <title>Login</title>
</head>

<?php
include_once("./login.php");
?>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your Email and Password</p>
              
              
            <form method="post" novalidate>
              <div class="form-outline form-white mb-4">
                <label for="exampleInputEmail1" class="form-label" >Email Address</label>  
                <input type="email" name="email" class="form-control form-control-lg <?php if (isset($error["email"])) echo "is-invalid";
                                                                                      else if (isset($input["email"])) echo "is-valid" ?>"
                  id="exampleInputEmail1" aria-describedby="emailHelp"
                  value=<?php if (isset($input["email"])) echo htmlentities($input["email"]) ?>>
                  <div class="invalid-feedback"><?php if (isset($error["email"])) echo htmlentities($error["email"]); ?></div>
              </div>

              

              <div class="form-outline form-white mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" 
                class="form-control form-control-lg <?php if (isset($error["password"])) echo "is-invalid";
                                                                                          else if (isset($input["password"])) echo "is-valid" ?>" id="exampleInputEmail1" 
                  aria-describedby="passwordHelp"
                  value=<?php if (isset($input["password"])) echo htmlentities($input["password"]) ?>>
                <div class="invalid-feedback"><?php if (isset($error["password"])) echo htmlentities($error["password"]); ?>
                </div>
              </div>

              <div class="alert alert-danger <?php if (empty($error["login"])) echo "d-none" ?>" role="alert">
                <?php if (isset($error["login"])) echo $error["login"] ?>
              </div>

              
              <br>

              <div class="d-flex justify-content-center">
              <button type="submit" name="login-submit" class="btn btn-outline-light btn-lg px-5">Login</button>
              </div>
              
              <br>

              <div>
                <p class="mb-0">Don't have an account yet? <a href="register.php" class="text-white-50 fw-bold">Sign Up</a></p>
                <p class="mb-0">Go back to <a href="index.php" class="text-white-50 fw-bold">Home</a>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>