<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Find Your Dream Home</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">


<div class="col-lg-10 col-sm-8 ">

<!-- Php code block 1 of 2 starts -->
<?php
require_once ('../vendor/autoload.php');
use App\Classes\RealEstate\RealEstate;
$real_estate = new RealEstate();
$singleData = $real_estate->viewSingleData($_GET['id']);
?>
<!-- Php code block 1 of 2 ends -->
<h2><?php echo $singleData->title ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <!-- Php code block 2 of 2 starts -->
        <?php
            $image = explode(",",$singleData->images);
            $image_count = count($image);
            $image_index = 0;
            while ($image_index<$image_count) {
                if ($image_index == 0) {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $image_index; ?>" class="active"></li>
                    <?php
                } else {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $image_index; ?>" class=""></li>
                    <?php
                }
                $image_index++;
            }
            ?>
      </ol>
      <div class="carousel-inner">

        <?php
            $image = explode(",",$singleData->images);
            $image_count = count($image);
            $i = 0;
            while ($i<$image_count){
                if($i == 0){
        ?>
        <!-- Item 1 -->
        <div class="item active">
          <img src="../resources/images/properties/<?php echo $image[$i]; ?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->
        <?php } else{ ?>
        <!-- Item 2 -->
         <div class="item">
           <img src="../resources/images/properties/<?php echo $image[$i]; ?>" class="properties" alt="properties" />
         </div>
         <?php
            }
            $i++;
            }
         ?>
         <!-- Php code block 2 of 2 ends -->
         <!-- #Item 2 -->

      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p><?php echo $singleData->description ?></p>

  </div>


  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">$ <?php echo $singleData->price ?></p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span>Address :  <?php echo $singleData->address_line_1 ?></p>
  <p class="area"><span class="glyphicon glyphicon-th-list"></span>Floor Space :  <?php echo $singleData->address_line_2 ?> square feet</p>
  <p class="area"><span class="glyphicon glyphicon-th-list"></span>Access :  <?php echo $singleData->city ?></p>
  <p class="area"><span class="glyphicon glyphicon-th-list"></span>Utility :  <?php echo $singleData->country ?></p>

  <div class="map">
              
    <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
   src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo "$singleData->address_line_1 $singleData->city" ?>&amp;aq=0&amp;oq=pulch&amp;
   sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;
   hq=&amp;hnear=wai,+satara,+maharashtra,+india,&amp;
   ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>



              



  </div>
</div>


<div class="col-lg-12 col-sm-6 ">
        
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Footer Start -->










<div class="footer">

<div class="container-fluid">



<div class="row">
            <div class="col-lg-4 col-sm-4">
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
<p class="copyright">Copyright 2019. NikhilPatne	</p>


</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
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
















<!-- Footer Ends -->



<style>

.map{
  position:relative;
  width:530px;
  height:220px;
  /* border-style:groove; */
  margin-top:29px;
}
</style>