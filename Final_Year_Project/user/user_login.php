<?php
if(isset($_POST["submit"])){

if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    //$con=mysql_connect('localhost','root','') or die(mysql_error());
    //mysql_select_db('user_registration') or die("cannot select DB");
    $con= mysqli_connect("localhost","root","","final_year_project","3306");

    $query=$con->query("SELECT * FROM user WHERE email='".$email."' AND password='".$password."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbemail=$row['email'];
    $dbpassword=$row['password'];
    $id=$row['user_id'];
    }

    if($email == $dbemail && $password == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$email;
    $_SESSION['user_id']=$id;

    /* Redirect browser */
    header("Location:user_home.php");
    }
    } else {
    echo '<script>alert("Invalid email or password!");</script>';
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
<body>
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2"> Sign Up </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
      
            <div class="modal-body p-5 pt-0">
              <form  class="form-floating mb-3" action="" method="post">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com"name="email">
                  <label for="floatingInput">Email</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="password">
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Sign In</button>
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
              <a href="user_register.php">Don't Have An Account??</a><br>
              <a href="../index.php">Go to home</a>
            </div>
          </div>
        </div>
</body>
</html>