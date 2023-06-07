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
    height:75px;
    width: 226px;
   } 

  </style>
  <body>
    <section class="colored-section" id="title">
      <div class="container-fluid">
        <!-- Nav Bar -->
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
         
          <img src="images/logo-img.png" alt="logo-img.png" class="logo">
          <!--<a href="" class="navbar-brand">logo</a>-->
       
           
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
                <a href="" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="Service.php" class="nav-link">Service</a>
              </li>
              <li class="nav-item">
                <a href="Disclaimer.php" class="nav-link">Disclaimer</a>
              </li>
              <li class="nav-item">
                <a href="About_Us.html" class="nav-link">About Us</a>
              </li>
              <li class="nav-item">
                <a href="Testimonial.html" class="nav-link">Testimonial</a>
              </li>
              <li class="nav-item">
                <a href="Contact_us.html" class="nav-link">Contact Us</a>
              </li>
               <li class="nav-item">
                <a href="admin" class="nav-link">Admin</a>
              </li>
              <div class="nav-item">
                <div class="nav-link">
                  <a type="button" class="btn btn-success" href="service/service_register.php">Service Login</a>
                  <a type="button" class="btn btn-success" href="user/user_register.php" >User Login</a>
                </div>
              </div>
            </ul>
          </div>
        </nav>

        <!-- Title -->
        <div class="row landing-page">
          <div class="col-lg-6">
            <h1>Dail Wish</h1>
            <h1>Simplifying Local Search in India</h1>
            <div class="main-button">
              <button type="button" class="btn btn-dark btn-lg download-button">
                <div class="download-button-img">
                  <img
                  src="images/android-logo.png"
                  alt=""
                  srcset=""
                  class="btn-img"
                />
                </div>
                <div class="btn-words-1">Get it on</div>
                <div class="btn-words-2">Google Play</div>
              </button>
              <button type="button" class="btn btn-dark btn-lg download-button">
                <div class="download-button-img">
                  <img
                  src="images/apple-logo.png"
                  alt=""
                  srcset=""
                  class="btn-img"
                />
                </div>
               
                <div class="btn-words-1">Get it on</div>
                <div class="btn-words-2">App store</div> 
              </button>
            </div>
            </div>
            
          <div class="col-lg-6">
            <img
              class="title-img"
              src="images/landing-page-image.png"
              alt="iphone-mockup"
            />
          </div>
        </div>
      </div>
    </section>
    <section id="division">
      <div class="row">
        <div class="col-lg-4 division-element">
          <img src="images/best-teacher.png" alt="photographer.png">
          <div class="division-button"><a href="teacher/best_teacher.php">Best Teacher</a> </div>
        
      </div>
        <div class="col-lg-4 division-element">
          <img src="images/lawyer.png" alt="photographer.png">
          <div class="division-button"><a href="lawyer/lawyer.php"> Lawyer</a></div>
        </div>
        <div class="col-lg-4 division-element">
          <img src="images/photographer.png" alt="photographer.png">
          <div class="division-button"><a href="photographer/photographer.php">Photographer</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 division-element">
          <img src="images/video-editor.png" alt="photographer.png">
          <div class="division-button"><a href="video_editor/video_editor.php">Video Editor</a></div>
        </div>
        <div class="col-lg-4 division-element">
          <img src="images/service.png" alt="photographer.png">
          <div class="division-button"> <a href="servicing/service.php">Service</a></div>

        </div>
        <div class="col-lg-4 division-element">
          <img src="images/makeup-artist.png" alt="photographer.png">
          <div class="division-button"><a href="makeup_artist/makeup_artist.php">Makeup Artist</a></div>
        </div>
        <div class="division-text">
          <span>More Information : </span>We value your feedback and inquiries. To get in touch with us, please visit our website or reach out to our customer support team. We look forward to hearing from you and serving you better.
        </div>
      </div>
    </section>
    <section id="something">
      <div class="row">
        <div class="col-lg-6">
          <h1>Our Vision</h1>
          <h2>Dail Wish</h2>
          <div class="division-text">
          <h3>At Dail Wish, our vision is to be the go-to destination for local search in India, offering a seamless and convenient experience for users seeking services in their vicinity. We strive to empower individuals and businesses by bridging the gap between service providers and customers, ultimately fostering economic growth and enhancing the lives of people across the country.</h3></div>
        </div>
        <div class="col-lg-6 something-img-section">
          <img src="images/something-img.png" alt="something.png" class="something-img" >
        </div>
      </div>
      <h3 class="something-second-heading">Your section goes here</h3>
      <div class="row something-second-section">
        <div class="col-lg-4 second-section-div">
          <img src="images/boys-1.png" alt="boys.png" class="something-second-img">
          <p>"Dail Wish is a game-changer! Their website made it incredibly easy to find top-notch professionals in various fields. Highly recommended for a seamless and reliable service experience."!</p>
        </div>
        <div class="col-lg-4 second-section-div">
          <img src="images/boys-2.png" alt="boys-2" class="something-second-img">
          <p>"I love using Dail Wish! The platform connected me with a fantastic makeup artist who made me feel like a superstar. Their website is a go-to resource for finding trusted professionals."!</p>
        </div>
        <div class="col-lg-4 second-section-div">
          <img src="images/boys-3.png" alt="boys-3" class="something-second-img">
          <p>"Dail Wish exceeded my expectations. Their website helped me find a skilled lawyer who provided excellent legal advice. A reliable and user-friendly platform for all your service needs."!</p>
        </div>
      </div>
      <div class="Call-to-Action">
        <a type="button" class="btn btn-secondary" href="add_to_call/add_to_call.php">Add a Call-to-Action</a>
      </div>
      
    </section>
    <footer id="footer">
      <div class="row">
        <div class="col-lg-6">
          <h2>Contact Us</h2>
          <div class="details">
            <div class="details-1">
              <img src="images/location.png" alt="">
              123 Anywhere St.
              Any City, ST 12345
            </div>
            <div class="details-2">
              <img src="images/phone.png" alt="">
              1234567890
            </div>
            <div class="details-3">
              <img src="images/email.png" alt="">
              hello@reallygreatsite.com
            </div>
          </div>
          <div class="timing">
            <h2>Office Hours</h2>
            <div class="timing-1">
              <p class="timing-day">Monday to Friday</p>
              <p>9:00 am to 6:00 pm</p>
            </div>
            <div class="timing-2">
              <p class="timing-day">Saturday</p>
              <p>9:00 am to 12 noon</p>
            </div>
            <div class="timing-3">
              <p class="timing-day">Closed on Sundays</p>
            </div>
          </div>
          <div class="follow-us">
            <span>Follow Us -</span>
            <img src="images/facebook.png" alt="" class="follow-us-img">
            <img src="images/instagram.png" alt="" class="follow-us-img">
            <img src="images/twitter.png" alt="" class="follow-us-img">
            <img src="images/youtoube.png" alt="" class="follow-us-img">
            <img src="images/linkdin.png" alt="" class="follow-us-img">
            <img src="images/quora.png" alt="" class="follow-us-img">
          </div>
        </div>

        <div class="col-lg-6 footer-right">
          <img src="images/footer-bg.png" alt="footer-bg" class="footer-bg-img">
        </div>
      </div>
    </footer>
    <div class="black-footer">
      Team & Support
    </div>
  </body>
</html>
