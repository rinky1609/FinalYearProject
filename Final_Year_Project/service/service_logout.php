<?php 
session_start();
unset($_SESSION['sess_user']);
unset($_SESSION['service_id']);

session_destroy();
header("location:../index.php");
?>
