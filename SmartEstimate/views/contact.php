<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Contact Us</span>
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">


              <form method="POST" action="contact.php">


                <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                <input type="text" name="email" class="form-control" placeholder="Email Address">
                <input type="phone" name="contact" class="form-control" placeholder="Contact Number">
                <textarea rows="6" name="message" class="form-control" placeholder="Message"></textarea>
      <button type="submit" class="btn btn-success" name="submit">Send Message</button>
          
</form>

                
        </div>
  <div class="col-lg-6 col-sm-6 ">
  <!-- <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
   src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;
   sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;
   hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;
   ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div> -->





   <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
   src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=wai,+Satara,+Maharashtra,+India&amp;aq=0&amp;oq=pulch&amp;
   sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;
   hq=&amp;hnear=wai,+satara,+maharashtra,+india,&amp;
   ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>


    
<!-- 
   <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
   src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=unchithane,+Satara,+Maharashtra,+India&amp;aq=0&amp;oq=pulch&amp;
   sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;
   hq=&amp;hnear=wai,+satara,+maharashtra,+india,&amp;
   ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div> -->



  </div>
</div>
</div>
</div>




<!-- ==================================Footer =======================-->






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
          <button type="submit" class="btn btn-info"  onclick="window.location.href='signup.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>
</html>
















<!-- ======================================================================================= -->







<?php

 
include 'dbconnect.php';

  if(isset($_POST['submit'])){

  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $message = $_POST['message'];
  

  


  if($fullname!="" && $email!="" && $contact!="" && $message!="") {
		
		$query = "INSERT INTO contact_us (name,email,contact,message) values('$fullname','$email',$contact,'$message')";
		$result = pg_query($query);
		
      echo "<script>
      alert('Thank You...!! We will contact you soon');
      </script>";
			//  header('Location: contact.php');
    }
    else{
      echo "<script>
      alert('Please filled All the feilds');
      </script>";
    }


}

?>