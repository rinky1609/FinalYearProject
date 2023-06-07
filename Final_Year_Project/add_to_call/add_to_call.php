<?php
session_start();
require_once("../db.php");
$sql="select * from service";
$result=$con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Add To Call </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!-- fancy box js -->
      <link rel="stylesheet" href="css/jquery.fancybox.css" /><br>
       <!--<a type="button" class="btn btn-primary"href="../index.php">Go to home</a><br><br>-->
   </head>

     <!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sacramento&family=Ubuntu&display=swap"
      rel="stylesheet"
    />



    <title>Find Your Teacher!</title>
  </head>
  <style>
   .logo{
    height:60px;
    width: 200px;
   } 

  </style>
  <body>      <div class="container-fluid">
        <!-- Nav Bar -->
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
        <a href="../index.php" class="navbar-brand"><img src="images/logo-img.png" alt="logo-img.png" class="logo"></a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="../index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="../Service.php" class="nav-link">Service</a>
              </li>
              <li class="nav-item">
                <a href="../Disclaimer.php" class="nav-link">Disclaimer</a>
              </li>
              <li class="nav-item">
                <a href="../About_Us.html" class="nav-link">About Us</a>
              </li>
              <li class="nav-item">
                <a href="../Testimonial.html" class="nav-link">Testimonial</a>
              </li>
              <li class="nav-item">
                <a href="../Contact_us.html" class="nav-link">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
   <body class="inner_page tables_page">
     
         <br><br>
         <br><br>

                     
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>All Details</h2>
                                 </div>
                              </div>

                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th style="color:blue; font-weight: bolder;">Image</th>
                                             <th style="color:blue; font-weight: bolder;">Name</th>
                                             <th style="color:blue; font-weight: bolder;">Specility</th>
                                             <th style="color:blue; font-weight: bolder;">City</th>
                                             <th style="color:blue; font-weight: bolder;">About</th>
                                             
                                          </tr>
                                       </thead>
                                       <?php 
                        if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){?>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <?php if(!$row['photo_upload'])
                      echo "<img src='../service/service_photo/".'no_profile.png'."' class='rounded-circle' width='50'  >";
                      else   echo "<img src='../service/service_photo/".$row["photo_upload"]."' class='rounded-circle' width='50'  >"; ?>
                                             </td>
                                             <td><?php echo $row['name'];?></td>
                                             <td><?php echo $row['speciality'];?></td>
                                             <td><?php echo $row['city'];?></td>
                                             <td><?php echo $row['about'];?></td>
                                          </tr>
                                          <?php }
}
?>
                                       
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
   
   </body>
</html>