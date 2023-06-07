<?php

session_start();
require_once("../db.php");
$user_id=$_SESSION['user_id'];

if ($_POST['submit']){
$user_name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];

  $phone_no=$_POST['phone_no'];

  //$password=$_POST['password'];
  
   
  $sql=mysqli_query($con,"UPDATE user set name='$user_name',email='$email',address='$address',city='$city',phone_no='$phone_no' WHERE user_id='$user_id' ");
  



  //$sql->bind_param("ssss",$name,$phone_no,$unit,$category_name);
  if($sql){
    echo '<script>alert("Saved Successfully")</script>';
    echo "<script>window.location.href='user_profile.php'</script>"; 
     }
  else  {
      echo '<script>alert("Problem in Adding New Record")</script>';
     echo "<script>window.location.href='user_profile.php'</script>"; 
     
    }


    
}
  ?>