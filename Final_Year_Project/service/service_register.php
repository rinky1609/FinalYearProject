<?php
if(isset($_POST["submit"])){

if(!empty($_POST['name']) && !empty($_POST['email'])&& !empty($_POST['speciality'])&& !empty($_POST['address'])&& !empty($_POST['city'])&& !empty($_POST['identity'])&& !empty($_FILES['identity_image'])&& !empty($_FILES['photo_upload'])&& !empty($_POST['phone_no'])&& !empty($_POST['website'])&& !empty($_POST['github'])&& !empty($_POST['twitter'])&& !empty($_POST['instagram'])&& !empty($_POST['fb_id'])&& !empty($_POST['password'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $speciality=$_POST['speciality'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $identity=$_POST['identity'];
    $identity_image=$_FILES['identity_image'];
    $actualFileName1=$identity_image['name'];
    $targetLocation1="service_identity/$actualFileName1";
    $photo_upload=$_FILES['photo_upload'];
    $actualFileName2=$photo_upload['name'];
    $targetLocation2="service_photo/$actualFileName2";
    $website=$_POST['website'];
    $github=$_POST['github'];
    $twitter=$_POST['twitter'];
    $instagram=$_POST['instagram'];
    $fb_id=$_POST['fb_id'];
    $phone_no=$_POST['phone_no'];
    $password=$_POST['password'];


    //$con=mysql_connect('localhost','root','') or die(mysql_error());
    //mysql_select_db('name_registration') or die("cannot select DB");
    $con= mysqli_connect("localhost","root","","final_year_project","3306");

    move_uploaded_file($_FILES["identity_image"]["tmp_name"],"service_identity/".$actualFileName1);
    move_uploaded_file($_FILES["photo_upload"]["tmp_name"],"service_photo/".$actualFileName2);

    $query=$con->query("SELECT * FROM service WHERE email='".$email."'");
    $numrows=mysqli_num_rows($query);
    if($numrows==0)
    {
    $sql="INSERT INTO service (name,email,speciality,address,city,identity,identity_image,photo_upload,website,github,twitter,instagram,fb_id,phone_no,password) VALUES('$name','$email','$speciality','$address','$city','$identity','$actualFileName1','$actualFileName2','$website','$github','$twitter','$instagram','$fb_id','$phone_no','$password')";

    $result=$con->query($sql);


    if($result){
    echo '<script>alert("Account Successfully Created");</script>';
    } else {
    echo '<script>alert("Failure!");</script>';
    }

    } else {
    echo '<script>alert("That username already exists! Please try again with another.");</script>';
    }

} else {
    echo '<script>alert("All fields are required!");</script>';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous"
  />
    <title>Login</title>
</head>

<style type="text/css">
  .imageup{
    display:inline-block;
  }
</style>
<body>
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-3">Register Service Provider</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
      
            <div class="modal-body p-5 pt-0">
              <form class="" action="" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="your name"name="name">
                  <label for="floatingInput"> Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com"name="email">
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                 
                <select class="form-select form-select-lg-3 " aria-label=".form-select-lg example" name="speciality">
                <option selected>Choose Your Speciality:</option>
                 <option value="Teacher">Teacher</option>
                <option value="Lawyer">Lawyer</option>
                <option value="Photographer">Photographer</option>
                <option value="Video Editor">Video Editor</option>
                <option value="Service">Service</option>
                <option value="Makeup Artist">Makeup Artist</option>
                </select>
                </div>
                

                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="your address"name="address">
                  <label for="floatingInput">Address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="city"name="city">
                  <label for="floatingInput">City</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Identity Proof"name="identity">
                  <label for="floatingInput">Identity Proof Number</label>
                </div>
                 
                 <div class="form-floating mb-3">
                  <span > Identity Proof Image</span>
                  
                  <input type="file" class="form-control rounded-3" class="hidden" placeholder="Identity Proof Image"name="identity_image" style="display:inline-block;">
                  </div>
                  <div class="form-floating mb-3">
                  <span >Photo upload</span>
                  
                  <input type="file" class="form-control rounded-3" class="hidden" placeholder="photo upload"name="photo_upload" style="display:inline-block;">
                  </div>
                
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="your Phone Number"name="phone_no">
                  <label for="floatingInput">Phone No</label>
                </div>
                 <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="your website"name="website">
                  <label for="floatingInput">Website Link (If any)</label>
                </div>
                 <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="your github"name="github">
                  <label for="floatingInput">Github Id (If any)</label>
                </div>
                 <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="your twitter "name="twitter">
                  <label for="floatingInput">Twitter Id(If any) </label>
                </div>
                 <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="your instgram "name="instagram">
                  <label for="floatingInput">Instagram Id (If any)</label>
                </div>
                 <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="your fb_id"name="fb_id">
                  <label for="floatingInput">Facebook Id (If any)</label>
                </div>
               

                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password"name="password">
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Sign up</button>
                <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
              <!--  <hr class="my-4">
                <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
                  Sign up with Twitter
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                  <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
                  Sign up with Facebook
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
                  Sign up with GitHub
                </button>-->
              </form>
              <a href="service_login.php">Already Have An Account??</a>
            </div>
          </div>
        </div>
</body>
</html>