<?php 
	require_once("../db.php");
	//$id= $_GET["id"];
	

	$sql =$con->prepare( "DELETE  FROM service WHERE service_id=?");
	$sql->bind_param("i",$_GET["service_id"]);
    $sql->execute();
    $sql->close();
    $con->close();
	header('location:service.php');		
?>