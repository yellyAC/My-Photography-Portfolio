<?php

session_start();

unset($_SESSION['user_id']);
session_unset();
session_destroy();
echo "Logging out";
header('Refresh: 3;url=index.php');
exit();

?>
