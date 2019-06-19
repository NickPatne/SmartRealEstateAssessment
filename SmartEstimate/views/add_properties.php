<?php 
session_start();
include'header.php';
include 'dbconnect.php';

?>



<html>
    <head>
        <title>Add Property</title>
            <link rel="stylesheet" href="css/add_property.css"/>
    
     </head><br><br>
   
         <!-- <h2>New Applicant Registration:</h2> -->
            <div class="main">
            <div class="loginBox">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <form name="frm" action="add_properties.php" method="POST" enctype="multipart/form-data">
            <br>
            
          
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Property Title</p>
            <!-- Input Field For first name -->
            <input type="text" name="title"  id="firstname"  required  />

            <!-- Input Field For Uploading Image -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Upload images</p>
            <input type="file" name="images[]" multiple  style="background:transparent; height:30px;width:300px" ><p>
            
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Project Name</p>
            <input type="text" name="project_name" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Survey Number</p>
            <input type="text" name="srno" />
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Address Line 1</p>
            <input type="text" name="addr1" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Address Line 2</p>
            <input type="text" name="addr2" />
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Near-By</p>
            <input type="text" name="near" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;City</p>
            <input type="text" name="city" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;State</p>
            <input type="text" name="state" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Country</p>
            <input type="text" name="country" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;ZIP</p>
            <input type="text" name="zip" />
            <br>

            &nbsp;&nbsp;&nbsp;&nbsp;<select name="house_type" id="">
              <option value="">House Type*</option>
              <?php
                $q = pg_query($db, "SELECT id, description FROM house_types");
                while($row = pg_fetch_assoc($q)) {
                  echo "<option value=".$row['id'].">".$row['description']."</option>";
                } 
              ?>
            </select>

            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<select name="construction_status" id="">
              <option value="">Construction Status</option>
              <?php
                $q = pg_query($db, "SELECT id, description FROM construction_status_types");
                while($row = pg_fetch_assoc($q)) {
                  echo "<option value=".$row['id'].">".$row['description']."</option>";
                } 
              ?>
            </select>
            <br>

            &nbsp;&nbsp;&nbsp;&nbsp;<select name="furnishing" id="">
              <option value="">Furnishing</option>
              <?php
                $q = pg_query($db, "SELECT id, name FROM furnishing_status_types");
                while($row = pg_fetch_assoc($q)) {
                  echo "<option value=".$row['id'].">".$row['name']."</option>";
                } 
              ?>
            </select>
            <br>
              <!-- Input Field For Country -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Number of Bathrooms</p>
            <input type="number" name="bathrooms" />

            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<select name="facing" id="">
              <option value="">Facing</option >
              <?php
                $q = pg_query($db, "SELECT id, name FROM facing_types");
                while($row = pg_fetch_assoc($q)) {
                  echo "<option value=".$row['id'].">".$row['name']."</option>";
                } 
              ?>
            </select>
            <br>

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Total Floors of a individual Property</p>
            <input type="number" name="total_floors" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Floor Number (in case of Apartment buildings)</p>
            <input type="number" name="floor_no" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Car Parkings</p>
            <input type="number" name="parkings" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Super Built-up Area (ft²)</p>
            <input type="number" name="builtup" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Carpet Area (ft²)</p>
            <input type="number" name="carpet" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Maintenance (Monthly)</p>
            <input type="number" name="maintenance" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Purchased Date</p>
            <input type="date" name="date" />

            <p>&nbsp;&nbsp;&nbsp;&nbsp;Description</p>
            <input type="text" name="description" />
            
            
            <input type="submit" name="submit" value="Add Property"><br>
           

            </div>
            </form>
            </div>
            
            </body>
            </html>


    

    
            

<?php


if(isset($_POST['submit'])){

  $title = $_POST['title'];
  $description = $_POST['description'];
  $project_name = $_POST['project_name'];
  $srno = $_POST['srno'];
  $addr1 = $_POST['addr1'];
  $addr2 = $_POST['addr2'];
  $near = $_POST['near'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $zip = $_POST['zip'];
  $house_type = $_POST['house_type'];
  $construction_status = $_POST['construction_status'];
  $furnishing = $_POST['furnishing'];
  $bathrooms = $_POST['bathrooms'];
  $floor_no = $_POST['floor_no'];
  $facing = $_POST['facing'];
  $parkings = $_POST['parkings'];
  $builtup = $_POST['builtup'];
  $carpet = $_POST['carpet'];
  $maintenance = $_POST['maintenance'];
  $date = $_POST['date'];
  $total_floors = $_POST['total_floors'];
  $userid = $_SESSION['user_id'];
  $images = implode(',', $_FILES['images']['name']);

// Loop through each file
for( $i=0; $i < count($_FILES['images']['name']); $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['images']['tmp_name'][$i];

  $newFilePath = "../resources/images/properties/" . $_FILES['images']['name'][$i];

  move_uploaded_file($tmpFilePath, $newFilePath);
}



$query = "INSERT INTO properties (title, description, images, project_name, survey_number, address_line_1, address_line_2, near_by, city, state, country, zip, house_type, construction_status, furnishing, bathrooms, total_floors, floor_no, facing, car_parking, super_builtup_area, carpet_area, monthly_maintenance, purchased_date, advertisement_status_type_id, product_status_id, updated_by, created_by) VALUES ('$title','$description','$images','$project_name','$srno','$addr1','$addr2','$near','$city','$state','$country',$zip,$house_type,$construction_status,$furnishing,$bathrooms,$total_floors,$floor_no,$facing,$parkings,$builtup,$carpet,$maintenance,'$date',0,0,$userid,$userid)";
$result2 = pg_query($db, $query);




if($result2)  {
?>
<script>
alert("Property added successfully");
 </script>
 <?php

}else  {

?>
<script>
alert("Ooops...Something went wrong!!!");
    </script>
<?php
}


}

?>