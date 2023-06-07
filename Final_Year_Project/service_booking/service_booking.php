<?php
session_start();
require_once("../db.php");
$service_id=$_SESSION['service_id'];
$user_id=$_SESSION['user_id'];

$row1=mysqli_query($con,"select *from service where service_id='$service_id' ");
$row2=mysqli_fetch_assoc($row1);
$row3=mysqli_query($con,"select *from user where user_id='$user_id'");
$row4=mysqli_fetch_assoc($row3);




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

         <div class="col-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Booking Form Elements</h5>

              <!-- General Form Elements -->
              <form action="booking.php" method="post">
                <div class="row mb-4">
                  <label for="inputText" class="col-sm-2 ">Service_Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="floatingInput"  name="service_name" value="<?php echo $row2['name'];?>"> 
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="inputText" class="col-sm-2 ">User_Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="floatingInput"  name="user_name" value="<?php echo $row4['name'];?>"> 
                  </div>
                </div>
                
                    <input type="hidden" class="form-control" id="floatingInput"  name="service_id" value="<?php echo $row2['service_id'];?>">  
                  
               
                    <input type="hidden" class="form-control" id="floatingInput"  name="user_id" value="<?php echo $row4['user_id'];?>">  
                  
                <div class="row mb-4">
                  <label for="inputText" class="col-sm-2 ">Speciality</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="floatingInput"  name="speciality" value="<?php echo $row2['speciality'];?>">  
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="inputText" class="col-sm-2 ">Service_phno</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="floatingInput"  name="service_phno" value="<?php echo $row2['phone_no'];?>">  
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="inputText" class="col-sm-2 ">User_phno</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="floatingInput"  name="user_phno" value="<?php echo $row2['phone_no'];?>">  
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="inputText" class="col-sm-2 ">Fees</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="floatingInput"  name="fees" value="<?php echo $_GET['fees'];?>">  
                  </div>
                </div>

              <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                  </div>
                </div>

              </form>

            </div>
          </div>

        </div>

        

            
      

  
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>