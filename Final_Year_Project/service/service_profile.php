<?php
session_start();
require_once("../db.php");

$service_id=$_SESSION['service_id'];

$row1=mysqli_query($con,"select * from service where service_id='$service_id' ");
$row2=mysqli_fetch_assoc($row1);

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
    <link rel="stylesheet" href="profile-details.css"/>
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
<style>
  .change-photo-btn
  {
    background-color: blue;
    border-radius:10px;
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 13px;
    font-weight: 600;
    margin: 0 auto;
    padding: 10px 15px;
    position: relative;
    transition: .3s;
    text-align: center;
    width: 120px;
  }
  change-photo-btn input.upload{  bottom: 0;
    cursor: pointer;
    filter: alpha(opacity=0);
  left: 0;
    margin: 0;
    opacity: 0;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    
  width: 220px;
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
                <div class="nav-item">
                  <div class="nav-link">
                    <a type="button" class="btn btn-danger" href="service_logout.php">Logout</a>
                  </div>
                </div>
              </ul>
            </div>
          </nav>
        </div>
    </section>
    <div class="container">
        <div class="main-body">
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <!--<img src="profiles-img/profile-1.jpg" alt="Admin" >-->
                        <?php 

                     if(!$row2['photo_upload'])
                      echo "<img src='service_photo/".'no_profile.png'."' class='rounded-circle' width='150'  >";
                      else   echo "<img src='service_photo/".$row2["photo_upload"]."' class='rounded-circle' width='150'  >"; ?>
                        <div class="mt-3">
                          <h4><?php echo $row2['name'];?></h4>
                          <p class="text-secondary mb-1">Speciality:<?php echo $row2['speciality'];?></p>
                          <p class="text-muted font-size-sm"><?php echo $row2['address'];?>&nbsp;<?php  echo $row2['city'];?></p>
                          <form action="change_photo.php" method="post" enctype="multipart/form-data">
                            <div >
                            
                          <input type="file" class="upload" name="photo_upload"  >
                        </div>
                        
                          <button class="btn btn-outline-primary" style="margin-top:5px;" name="submit">Submit</button>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                        <span class="text-secondary"><?php echo $row2['website'];?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                        <span class="text-secondary"><?php echo $row2['github'];?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                        <span class="text-secondary"><?php echo $row2['twitter'];?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                        <span class="text-secondary"><?php echo $row2['instagram'];?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                        <span class="text-secondary"><?php echo $row2['fb_id'];?></span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <form action="update_profile.php" method="post" >
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" style="border-color:transparent;" name="name" value="<?php echo $row2['name'];?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" style="border-color:transparent;" name="email" value="<?php echo $row2['email'];?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         <input type="text" style="border-color:transparent;" name="phone_no" value="<?php echo $row2['phone_no'];?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Speciality</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         <input type="text" style="border-color:transparent;" name="course" value="<?php echo $row2['speciality'];?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <input type="text" style="border-color:transparent;" name="address" value="<?php echo $row2['address'];?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">City</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <input type="text" style="border-color:transparent;" name="city" value="<?php echo $row2['city'];?>">
                        </div>
                      </div>
                      
                      <!--<div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <input type="text" style="border-color:transparent;" name="password" value="<//?php echo $row2['password'];?>">
                        </div>
                      </div>-->
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">About</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <input type="text" style="border-color:transparent;" name="about" value="<?php echo $row2['about'];?>">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <input class="btn btn-info " name="submit" type="submit" value="Save Changes">
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
    
                  <div class="row gutters-sm">
                    <div class="col-sm-12 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <a href="add_skill.php?service_id=<?php echo $row2['service_id'];?>" class="btn btn-primary" style="position:relative; margin-left:720px;">Add Skill</a>
                          <h4 class="d-flex align-items-center mb-3" style="position:relative; top:-45px;">My Skills</h4> 
                          <p ><?php echo $row2['skill1'];?></p>
                          <p ><?php echo $row2['skill2'];?></p>
                          <p ><?php echo $row2['skill3'];?></p>
                          <p ><?php echo $row2['skill4'];?></p>
                          <p ><?php echo $row2['skill5'];?></p>
                          <!--<div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Videos</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Spreadsheet</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>3d</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Animation</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>-->
                  <!--  <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                          <small>Web Design</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Website Markup</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>One Page</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Mobile Template</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Backend API</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>-->
                      </div>
                    </div>
                  </div>
                </div>
            </div>

        
       <div class="row">
            <div class="pricing-col col-lg-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3>Basic</h3>
                </div>
                <div class="card-body">
                    <p>5 Matches Per Day</p>
                    <p>10 Messages Per Day</p>
                    <p>Unlimited App Usage</p>
                    <button type="button" class="btn btn-success pricing-btn">500/-</button>
                </div>
              </div>
            </div>
            <div class="pricing-col col-lg-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3>Standard</h3>
                </div>
                <div class="card-body">
                  <p>Unlimited Matches</p>
                  <p>Unlimited Messages</p>
                  <p>Unlimited App Usage</p>
                  <button type="button" class="btn btn-success pricing-btn">1000/-</button>
                </div>
              </div>
            </div>
            
            <div class="pricing-col col-lg-4 col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3>Premium</h3>
                </div>
                <div class="card-body">
                  <p>Pirority Listing</p>
                  <p>Unlimited Matches</p>
                  <p>Unlimited Messages</p>
                  <button type="button" class="btn btn-success pricing-btn">2000/-</button>
                </div>
              </div>
            </div>
        
    </div>
</body>