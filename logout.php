<?php 

session_start();
unset($_SESSION['login']);
unset($_SESSION['login_time']);
echo "<script>window.location.replace('index.php')</script>";

?>