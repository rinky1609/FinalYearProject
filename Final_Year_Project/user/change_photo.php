<?php
session_start();  
  // Create database connection
 require_once("../db.php");
$user_id=$_SESSION['user_id'];
  // Initialize message variable
 

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
  	// Get image name
  	$image = $_FILES['photo_upload']['name'];// predefined image is image and name is the image format(jpg or png)
  	// Get text
  	

  	// image file directory
  	$target = "photo_upload/".basename($image);//

  	$sql = "UPDATE user SET photo_upload='$image'  WHERE user_id='$user_id' ";
  	// execute query
  	//mysqli_query($sql);
  	$result=$con->query($sql);
  	if($result)
  	{
      if (move_uploaded_file($_FILES['photo_upload']['tmp_name'], $target))
     { // tmp_name:stores the name of the temporary file, move_uploaded_file() function which moves an uploaded file from its temporary to permanent location
       //echo '<script>alert(" Profile Picture Saved Successfully")</script>';
       header("Location:user_profile.php");



    }else{
      echo '<script>alert("Problem in Adding Profile Picture")</script>';
    }
  }
  }


?>