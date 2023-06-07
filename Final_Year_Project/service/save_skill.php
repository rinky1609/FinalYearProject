<?php

session_start();
require_once("../db.php");
$service_id=$_SESSION['service_id'];

if (isset($_POST['submit'])){


   
$sql=$con->prepare("UPDATE service set skill1=?,skill2=?,skill3=?,skill4=?,skill5=? WHERE service_id='$service_id'");
$skill1=$_POST['skill1'];
$skill2=$_POST['skill2'];
$skill3=$_POST['skill3'];
$skill4=$_POST['skill4'];
$skill5=$_POST['skill5'];

    


  $sql->bind_param("sssss",$skill1,$skill2,$skill3,$skill4,$skill5);

  if($sql->execute()){
    echo '<script>alert("Saved Successfully")</script>';
    echo "<script>window.location.href='service_profile.php'</script>"; 
     }
  else  {
      echo '<script>alert("Problem in Adding New Record")</script>';
      echo "<script>window.location.href='service_profile.php'</script>"; 
     
    }


    
}
  ?>