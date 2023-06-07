<?php 
session_start();
unset($_SESSION['sess_user']);
unset($_SESSION['user_id']);
session_destroy();
header("location:../index.php");
?>
