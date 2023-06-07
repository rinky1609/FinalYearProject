<?php
session_start();

if(isset($_POST["submit"])){ 


if(!empty($_POST['service_name']) && !empty($_POST['user_name'])&& !empty($_POST['service_id'])&& !empty($_POST['user_id'])&& !empty($_POST['speciality'])&& !empty($_POST['service_phno'])&& !empty($_POST['user_phno'])&& !empty($_POST['fees'])){
   
    
    //$photo_upload=$_FILES['photo_upload'];
    //$actualFileName=$photo_upload['name'];
    //$targetLocation="photo_upload/$actualFileName";
    $service_name=$_POST['service_name'];
    $user_name=$_POST['user_name'];
    $service_id=$_POST['service_id'];
    $user_id=$_POST['user_id'];
    $speciality=$_POST['speciality'];
    $service_phno=$_POST['service_phno'];
    $user_phno=$_POST['user_phno'];
   
    $fees=$_POST['fees'];


    //$con=mysql_connect('localhost','root','') or die(mysql_error());
    //mysql_select_db('name_registration') or die("cannot select DB");
    $con= mysqli_connect("localhost","root","","final_year_project","3306");

     //move_uploaded_file($_FILES["photo_upload"]["tmp_name"],"photo_upload/".$actualFileName);

    $sql="INSERT INTO service_booking(service_id,user_id,fees,user_name,service_name,speciality,service_phno,user_phno) VALUES('$service_id','$user_id','$fees','$user_name','$service_name','$speciality','$service_phno','$user_phno')";

    $result=$con->query($sql);


    if($result){
    
    echo "<script>alert('Booking Successful');window.location.href='../user/user_profile.php';</script>";
    
    } else {
    echo '<script>alert("Failure!");</script>';
    }

    

} else {
    echo '<script>alert("All fields are required!");</script>';
}
}