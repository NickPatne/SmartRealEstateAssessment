<?php 
 session_start();

 


?>

<!-- Header -->


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
          <div class="container">
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
               <li><a href="index.php">Home</a></li>
                <!-- <li><a href="about.php">About</a></li> -->
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="add_properties.php">Add Properties</a></li>
                <!-- <li><a href="comments.php">Add Coments</a></li> -->
                <li><a href="logout.php">Logout</a></li>
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
<!-- #Header closed -->
</div>







<!-- Index -->





 
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a></span>
    <h2>Find Your Dream Home</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form">
    <h4><span class="glyphicon glyphicon-search"></span> Search of Properties</h4>
		<form action="search-result.php" method="get" class="form form-group">
            <input type="text" class="form-control" name="search" placeholder="Search by Name/Address">
            <button class="btn btn-primary">Find Now</button>
		</form>
  </div>



<div class="hot-properties hidden-xs"></div>

</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: 10 of 10 </div>

</div>
<div class="row">

    <!-- Php code block 1 of 1 starts -->
    <?php
    require_once ('../vendor/autoload.php');
    use App\Classes\RealEstate\RealEstate;
    $real_estate = new RealEstate();
    $allData = $real_estate->index();

        while ($data = pg_fetch_object($allData)) {

          $image = explode(",",$data->images);

        
    ?>

     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="../resources/images/properties/<?php echo $image[0];?>" class="img-responsive" alt="properties">
        </div>
        <h4><a href="property-detail.php?id=<?php echo $data->id;?>"><?php echo $data->title;?></a></h4>
        <p class="price">Price: $<?php echo $data->price;?></p>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $data->id;?>">View Details</a>
      </div>
      </div>
      <!-- properties -->
    <?php } ?>
   <!-- Php code block 1 of 1 ends -->

</div>
</div>
</div>
</div>
</div>





<style>

.properties:hover{

  transform:scale(1.14);
  transition:transform .4s ease-in;

}

</style>









<!-- Index -->


<div class="user_variable">
<?php



if(!isset($_SESSION['login_user_name'])){
  // header('location:login.php');
  echo"<script>
  document.location.href='login.php';
  </script>";
}
else{

// error_reporting(0);
$user = $_SESSION['login_user_name'];
echo "Welcome ".$user;
}
?>
</div>




<?php include'footer.php';?>

<style>
.user_variable{
    position:absolute;
    top:20%;
    right:10%;
    font-size:20px;
    color:red;

}

</style>