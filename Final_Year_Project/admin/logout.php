<?php 
session_start();
unset($_SESSION['sess_user']);
unset($_SESSION['admin_id']);

session_destroy();
header("location:../index.php");
?>
