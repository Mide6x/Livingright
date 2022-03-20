<?php
  require('db.php');
  session_start();
  // When form submitted, check and create user session.
  if (isset($_POST['username'])) {
      $username = stripslashes($_REQUEST['username']);    // removes backslashes
      $username = mysqli_real_escape_string($con, $username);
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($con, $password);
      // Check user is exist in the database
      $query    = "SELECT * FROM `users` WHERE username='$username'
                   AND password='" . md5($password) . "'";
      $result = mysqli_query($con, $query) or die(mysql_error());
      $rows = mysqli_num_rows($result);
      if ($rows == 1) {
          $_SESSION['username'] = $username;
          // Redirect to user dashboard page
          header("Location: dashboard.php");
      } else {
          echo "<div class='form'>
                <h3>Incorrect Username/password or Account doesn't exist.</h3><br/>
                <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                </div>";
      }
  } else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - LivingRight</title>
  <!-- base:css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style2.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>        
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
                <img src="images/2.png" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>  
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="form" method="post" name="login">
              &nbsp;
                <input type="text" class="login-input form-control form-control-lg" id="username" name="username" placeholder="Username" autofocus="true" required/>
                <input type="password" class="login-input form-control form-control-lg" id="password" name="password" placeholder="Password" required/>
                <input  type="submit" id="loginb" value="Login" name="submit" class="login-button"/>
                &nbsp;
                <p class="link">New here &nbsp <a style="text-decoration:none;" href="registration.php">register Now</a>
              		<br> <a  href="enter_email.php" style="text-decoration:none;" class="ForgetPwd">Forgot Password?</a></p>
                  &nbsp;
                  <p class="link"><a style="text-decoration:none;" href="admin/login.php">Login as Admin</a>
                <div class="form-group">
          </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>

  <!-- endinject -->
 <?php
    }
?>
</body>

</html>
