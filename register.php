<?php

include("connections.php");

$register_success = false;

if (isset($_POST["register-submit"])) {
  if (empty($_POST["complete_name"])) {
    $error["complete_name"] = "Username Required";
  } else {
    $input["complete_name"] = $_POST["complete_name"];
  }

  if (empty($_POST["email"])) {
    $error["email"] = "Email Required";
  } else {
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) === false) {
      $error["email"] = "Invalid Email";
    }
    $input["email"] = $_POST["email"];
  }


  if (empty($_POST["password"])) {
    $error["password"] = "Password Required";
  } else {
    $input["password"] = $_POST["password"];
  }

  if (empty($error["complete_name"]) and empty($error["email"]) and empty($error["password"])) {
    $complete_name = $input["complete_name"];
    $email = $input["email"];
    $password = $input["password"];
    $register_query = $pdo->exec("INSERT INTO portfolio(complete_name, password, email) VALUES('$complete_name', '$password', '$email')");
    $register_success = true;
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
  <title>Register</title>
</head>


<?php
include_once("./register.php");
?>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            
          <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Create an account</h2>
              <p class="text-white-50 mb-5">to access all my photos</p>
                <form class="container h-100" method="post"
                  novalidate>

              <form>
                <div class="form-outline mb-4">
                <label for="form3Example1cg" class="form-label">Username</label>
                <input type="form3Example1cg" name="complete_name"
                class="form-control form-control-lg <?php if (isset($error["complete_name"])) echo "is-invalid";
                                    else if (isset($input["complete_name"])) echo "is-valid"; ?>" id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    value=<?php if (isset($input["complete_name"])) echo htmlentities($input["complete_name"]) ?>>
                    <div class="invalid-feedback"><?php if (isset($error["complete_name"])) echo htmlentities($error["complete_name"]); ?>
                  </div>
                </div>



                <div class="form-outline mb-4">
                  <label for="form3Example3cg" class="form-label">Email Address</label>
                  <input type="email" name="email" class="form-control form-control-lg <?php if (isset($error["email"])) echo "is-invalid";
                                                                          else if (isset($input["email"])) echo "is-valid"; ?>"
                  aria-describedby="emailHelp" value=<?php if (isset($input["email"])) echo htmlentities($input["email"]) ?>>
                    <div class="invalid-feedback"><?php if (isset($error["email"])) echo htmlentities($error["email"]); ?>
                  </div>
                </div>




                <div class="form-outline mb-4">
                  <label for="form3Example4cg" class="form-label">Create a Password</label>
                  <input type="password" name="password"
                    class="form-control form-control-lg <?php if (isset($error["password"])) echo "is-invalid";
                                                        else if (isset($input["password"])) echo "is-valid"; ?>" aria-describedby="passwordHelp"
                    value=<?php if (isset($input["password"])) echo htmlentities($input["password"]) ?>>
                  <div class="invalid-feedback"><?php if (isset($error["password"])) echo htmlentities($error["password"]); ?>
                  </div>
                </div>


                <div class="alert alert-danger <?php if (empty($error["login"])) echo "d-none" ?>" role="alert">
                    <?php if (isset($error["login"])) echo $error["login"] ?>
                </div>




                <div class="d-flex justify-content-center">
                <button type="submit" name="register-submit" class="btn btn-outline-light btn-lg px-5" href="success.php">Register</button>
                </div>

                <br>
                <div>
                  <p class="mb-0">Already have an account? <a href="login.php" class="text-white-50 fw-bold">Login</a>
                  <br>
                  <p class="mb-0">Go back to <a href="index.php" class="text-white-50 fw-bold">Home</a>
                  </p>
                </div>
              </form>

              <div class="alert alert-success <?php echo ($register_success) ? "d-block" : "d-none" ?>" role="alert">
                Registration Success! You can now Login and access my Portfolio.
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


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

</section>

