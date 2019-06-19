<!-- Heder Start -->


<?php 
session_start();
if(isset($_SESSION['login_user'])){
  echo"<script>
  document.location.href='user_dashboard.php';
  </script>";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Real Estate Assessment </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="../resources/assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="../resources/assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="../resources/assets/bootstrap/js/bootstrap.js"></script>
  <script src="../resources/assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="../resources/assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="../resources/assets/owl-carousel/owl.theme.css">
<script src="../resources/assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="../resources/assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../resources/assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="../resources/assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="../resources/assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="../resources/assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
                <!-- <li><a href="about.php">About</a></li> -->
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="../resources/images/logo.jpg" class="logoimg" alt="Realestate"></a>           
</div>
<!-- #Header Starts -->
</div>





<!-- Header close -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../resources/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log in</h2>
                        <form method="POST" class="register-form" id="login-form" action="login.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="E-mail"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


















<!-- Footer Starts -->


<div class="footer">

<div class="container-fluid">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>         
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="../resources/images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="../resources/images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="../resources/images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="../resources/images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Nikhil Patne</b><br>
<span class="glyphicon glyphicon-map-marker"></span> Wai, Maharashtra<br>
<span class="glyphicon glyphicon-envelope"></span> nikhilpatne94@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> +91 8605358076</p>
            </div>
        </div>
<p class="copyright">Copyright 2019 @NikhilPatne	</p>


</div></div>


<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form" method="">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="username">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox">Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success" name="submit">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>
</html>


<!-- Footer End -->


<?php


include 'dbconnect.php';








if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $q = "SELECT id,name,email,password from  users WHERE email='".$email."' AND password='".$password."'";
    $result = pg_query($q);
    while($row = pg_fetch_assoc($result)) {
        $u = $row['email'];
        $p =$row['password'];
        $name =$row['name'];
        $id = $row['id'];
    }

    if($u==$email && $p == $password){

        // session_register("username");
        $_SESSION['user_id'] = $id;
         $_SESSION['login_user'] = $email;
         $_SESSION['login_user_name'] = $name;

        
        //  header("location:user_dashboard.php");
         echo"<script>
         document.location.href='user_dashboard.php';
       </script>";
    }
    else{
        echo"<script>
            alert('Oooooops.....!! Invalid Credentials');
                    </script>";
    }

}


?>




