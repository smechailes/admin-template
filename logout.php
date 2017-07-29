<?php session_destroy();
setcookie('is_logged_in', 1, time()-60);
 header('location: login.php');
?>