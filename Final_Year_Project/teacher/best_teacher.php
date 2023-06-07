<?php
session_start();
require_once("../db.php");

$sql="select * from service where speciality='teacher'";
$result=$con->query($sql);
$con->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="profile-style.css"/>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <title>profile</title>
</head>
<style>
   .logo{
    height:85px;
    width: 226px;
   } 

  </style>
<body>
    <section class="colored-section" id="title">
        <div class="container-fluid">
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
               <!-- <div class="nav-item">
                  <div class="nav-link">
                    <a type="button" class="btn btn-danger" href="../service/service_logout.php">Logout</a>
                  </div>
                </div>-->
                 <!--<div class="nav-item">
                <div class="nav-link">
                  <a type="button" class="btn btn-success" href="../service/service_register.php">Service Login</a>
                  <a type="button" class="btn btn-success" href="../user/user_register.php" >User Login</a>
                </div>
              </div>-->
              </ul>
            </div>
          </nav>
        </div>
    </section>

    <section id="profiles">
        <h1>Teachers site!</h1>

        <div class="row profile-row">
            <?php 
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){?>
            
            <div class="col-lg-4 profile">
                <!--<img src="profiles-img/profile-3.jpg" alt="profile-img-girl" >-->
                <?php 

                     if(!$row['photo_upload'])
                      echo "<img src='../service/service_photo/".'no_profile.png'."' class='profile-img'    >";
                      else   echo "<img src='../service/service_photo/".$row["photo_upload"]."' class='profile-img'  width='100px' height='300px' >"; ?>
                        
                <h2 class="profile-name"><?php echo $row['name'];?></h2>
                <span class="profile-city"><?php echo $row['city'];?></span>
                <p class="profile-summary"><?php echo $row['about'];?></p>

                <p class="review-star">
                    <span class="material-symbols-rounded">
                        star
                    </span>4.9 &#40;25 reviews&#41;
               </p>
                <a type="button" class="btn btn-info"href="teacher_profile.php?service_id=<?php echo $row['service_id'] ?>">View More</a><br><br>
            </div>
            <?php }
}
?>
          <!--  <div class="col-lg-4 profile">
                <img src="profiles-img/profile-2.jpg" alt="profile-img-girl" class="profile-img">
                <h2 class="profile-name">Lorem ipsum</h2>
                <p class="profile-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, recusandae.</p>
                <p class="review-star"><span class="material-symbols-rounded">
                        star
                    </span>4.9 &#40;25 reviews&#41;</p>
                <button type="button" class="btn btn-info">From 500/-</button>
            </div>-->
         <!--   <div class="col-lg-4 profile">
                <img src="profiles-img/profile-4.jpg" alt="profile-img-girl" class="profile-img">
                <h2 class="profile-name">Lorem ipsum</h2>
                <p class="profile-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, recusandae.</p>
                <p class="review-star"><span class="material-symbols-rounded">
                        star
                    </span>4.9 &#40;25 reviews&#41;</p>
                <button type="button" class="btn btn-info">From 500/-</button>
            </div>-->
        </div>
    
     <!--   <div class="row profile-row">
            <div class="col-lg-4 profile">
                <img src="profiles-img/profile-3.jpg" alt="profile-img-girl" class="profile-img">
                <h2 class="profile-name">Lorem ipsum</h2>
                <p class="profile-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, recusandae.</p>
                <p class="review-star"><span class="material-symbols-rounded">
                        star
                    </span>4.9 &#40;25 reviews&#41;</p>
                <button type="button" class="btn btn-info">From 500/-</button>
            </div>
            <div class="col-lg-4 profile">
                <img src="profiles-img/profile-2.jpg" alt="profile-img-girl" class="profile-img">
                <h2 class="profile-name">Lorem ipsum</h2>
                <p class="profile-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, recusandae.</p>
                <p class="review-star"><span class="material-symbols-rounded">
                        star
                    </span>4.9 &#40;25 reviews&#41;</p>
                <button type="button" class="btn btn-info">From 500/-</button>
            </div>
            <div class="col-lg-4 profile">
                <img src="profiles-img/profile-4.jpg" alt="profile-img-girl" class="profile-img">
                <h2 class="profile-name">Lorem ipsum</h2>
                <p class="profile-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, recusandae.</p>
                <p class="review-star"><span class="material-symbols-rounded">
                        star
                    </span>4.9 &#40;25 reviews&#41;</p>
                <button type="button" class="btn btn-info">From 500/-</button>
            </div>
        </div>-->
      <!--  <div class="row profile-row">
            <div class="col-lg-4 profile">
                <img src="profiles-img/profile-3.jpg" alt="profile-img-girl" class="profile-img">
                <h2 class="profile-name">Lorem ipsum</h2>
                <p class="profile-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, recusandae.</p>
                <p class="review-star"><span class="material-symbols-rounded">
                    star
                </span>4.9 &#40;25 reviews&#41;</p>
                <button type="button" class="btn btn-info">From 500/-</button>
            </div>
            <div class="col-lg-4 profile">
                <img src="profiles-img/profile-2.jpg" alt="profile-img-girl" class="profile-img">
                <h2 class="profile-name">Lorem ipsum</h2>
                <p class="profile-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, recusandae.</p>
                <p class="review-star"><span class="material-symbols-rounded">
                        star
                    </span>4.9 &#40;25 reviews&#41;</p>
                <button type="button" class="btn btn-info">From 500/-</button>
            </div>
            <div class="col-lg-4 profile">
                <img src="profiles-img/profile-4.jpg" alt="profile-img-girl" class="profile-img">
                <h2 class="profile-name">Lorem ipsum</h2>
                <p class="profile-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, recusandae.</p>
                <p class="review-star"><span class="material-symbols-rounded">
                        star
                    </span>4.9 &#40;25 reviews&#41;</p>
                <button type="button" class="btn btn-info">From 500/-</button>
            </div>
        </div>-->
    </section>
</body>
</html>