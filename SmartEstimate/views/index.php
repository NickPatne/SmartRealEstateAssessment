<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Buy, Sale & Rent</span>
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

<?php include'footer.php';?>



<style>

.properties:hover{

  transform:scale(1.11);
  transition:transform .4s ease-in;

}

</style>