<?php

Route::add('logout', function () {
    session_destroy();
    header("Location: portfolio.php");
  });


?>