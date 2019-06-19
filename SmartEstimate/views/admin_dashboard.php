<?php
include 'header.php';
?>

<style>


/* .update-price-btn {
    position:absolute;
    left:50%;
    width:250px;
    height:60px;
    border-radius:10px;
    background:#E53A15;
    color:white;
    font-size:22px;
    outline:none;
    border:none;
} */

input[type=submit]
{
    position:absolute;
    border: none;
    width: 290px;
    /* background-image: linear-gradient(to right,rgb(124, 118, 118),rgb(241, 238, 238)); */
    color: #000;
    font-size: 16px;
    line-height: 35px;
    padding: 10px 0;
    border-radius: 15px;
    cursor: pointer;
   
    background: linear-gradient(90deg,#11AB06,#36DE2B,#7DFE74,#11AB06);
    background-size: 400%;
    
    animation: nick-animation 8s linear infinite;
    left:50%;

   
    
}
input[type=button]:hover
{
    /* color: #fff;
    background-color: black; */
    /* background-image: linear-gradient(to left,rgb(255, 155, 155),rgb(255, 255, 145)) */

    /* transform: translateY(-4px); */





}

@keyframes nick-animation{
    0%{
        background-position: 0%;
    }
    100%{
        background-position: 400%;
    }
}

    





</style>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
</head>
<body>
<form action="../src/Classes/RealEstate/readcsv.php" method="post">

<input type="submit" value="Update Price" name="submit" class="update-price-btn">

</a>



</form>
    
</body>
</html>