<?php 
	require_once("../db.php");
	$id= $_GET["id"];
	

	$sql = "DELETE  FROM user WHERE user_id='$id'";
    $result=$con->query($sql);
    if($result)
	header('location:user.php');		
?>