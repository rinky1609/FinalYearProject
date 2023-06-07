<?php

session_start();
require_once("../db.php");
$service_id=$_SESSION['service_id'];

if ($_POST['submit']){
$service_name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$speciality=$_POST['course'];
  $phone_no=$_POST['phone_no'];

  //$password=$_POST['password'];
  $about=$_POST['about'];
   
  $sql=mysqli_query($con,"UPDATE service set name='$service_name',email='$email',address='$address',city='$city',speciality='$speciality',phone_no='$phone_no',about='$about' WHERE service_id='$service_id' ");
  



  //$sql->bind_param("ssss",$name,$phone_no,$unit,$category_name);
  if($sql){
    echo '<script>alert("Saved Successfully")</script>';
    echo "<script>window.location.href='service_profile.php'</script>"; 
     }
  else  {
      echo '<script>alert("Problem in Adding New Record")</script>';
      echo "<script>window.location.href='service_profile.php'</script>"; 
     
    }


    
}
  ?>