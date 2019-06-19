<?php include'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="sty.css">
    <style>
    
     :root{ --main-color: #e74c3c; }
.product-grid{
    font-family: 'Roboto', sans-serif;
    position: relative;
}
.product-grid .product-image{
    overflow: hidden;
    position: relative;
}
.product-grid .product-image:before{
    content: "";
    background: rgba(0,0,0,0.3);
    width: 100%;
    height: 100%;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    transition: all 0.4s ease-out 0s;
}
.product-grid:hover .product-image:before{ opacity: 1; }
.product-grid .product-image a{ display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-image .pic-1{
    opacity: 1;
    backface-visibility: hidden;
    transition: all 0.4s ease-out 0s;
}
.product-grid:hover .product-image .pic-1{ opacity: 0; }
.product-image .pic-2{
    width: 100%;
    height: 100%;
    opacity: 0;
    backface-visibility: hidden;
    transform: scale(3);
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.4s ease-out 0s;
}
.product-grid:hover .product-image .pic-2 {
    opacity: 1;
    transform: scale(1);
}
.product-image .product-trend-label,
.product-image .product-discount-label{
    content: "";
    color: #fff;
    background-color: #2ecc71;
    font-size: 12px;
    line-height: 28px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    padding: 0 7px;
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 3;
}
.product-image .product-discount-label{
    background-color: var(--main-color);
    left: auto;
    right: 12px;
}
.product-grid .social {
    padding: 0;
    margin: 0;
    list-style: none;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 10px;
    z-index: 4;
}
.product-grid .social li {
    margin: 0 0 12px;
    opacity: 0;
    transform: translateX(-60px);
    transition: transform .3s ease-out 0s;
}
.product-grid:hover .social li {
    opacity: 1;
    transform: translateX(0);
}
.product-grid:hover .social li:nth-child(2){ transition-delay: 0.1s; }
.product-grid:hover .social li:nth-child(3){ transition-delay: 0.2s; }
.product-grid:hover .social li:nth-child(4){ transition-delay: 0.3s; }
.product-grid .social li a {
    color: #fff;
    font-size: 22px;
    transition: all 0.3s;
}
.product-grid .social li a:hover { color: var(--main-color); }
.product-grid .social li a:before,
 .product-grid .social li a:after{
    content: attr(data-tip);
    color: #000;
    background: #fff;
    font-size: 14px;
    padding: 5px 10px;
    white-space: nowrap;
    display: none;
    transform: translateY(-50%);
    position: absolute;
    left: 33px;
    top: 50%;
    transition: all 0.3s;
}
.product-grid .social li a:after{
    content: '';
    background: linear-gradient(-45deg, #fff 49%, transparent 50%);
    width: 10px;
    height: 10px;
    top: 40%;
    left: 20px;
}
.product-grid .social li a:hover:before,
.product-grid .social li a:hover:after{
      display: block;
}
.product-grid .product-content{ padding: 12px 0; }
.product-grid .title{
    font-size: 15px;
    font-weight: 400;
    text-transform: capitalize;
    margin: 0 0 5px;
}
.product-grid .title a{ color: #959595; }
.product-grid .title a:hover{ color: var(--main-color); }
.product-grid .price{
    color: #333;
    font-size: 14px;
    font-weight: 400;
}
.product-grid .price span{
    color: #333;
    text-decoration: line-through;
    margin-right: 3px;
}
.product-grid .price.discount{ color: var(--main-color); }
@media only screen and (max-width:990px){
    .product-grid{ margin-bottom: 30px; }
}

h1{
  position:absolute;
  left:45%;
}
.row{
  position:relative;
  left:150px;
}
    
    </style>
</head>
<body>
<h1>About Us</h1>
   <br><br><br><br><br>
    <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="../resources/images/Nick5.jpg">
                        <img class="pic-2" src="../resources/images/Nick5.jpg">
                    </a>
                    <span class="product-trend-label">Nick</span>
                    <ul class="social">
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Nikhil Patne</a></h3>
                    <div class="price">Developer</div>
                </div>
            </div>
        </div>





        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="../resources/images/Abhi5.jpg">
                        <img class="pic-2" src="../resources/images/Abhi5.jpg">
                    </a>
                    <span class="product-trend-label">Abhie</span>
                    <span class="product-discount-label"></span>
                    <ul class="social">
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Abhishek Shinde</a></h3>
                    <div class="price"><span></span> Developer</div>
                </div>
            </div>
        </div>
           
           
           
           <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="../resources/images/satya.jpg">
                        <img class="pic-2" src="../resources/images/satya.jpg">
                    </a>
                    <span class="product-trend-label">Satywan</span>
                    <span class="product-discount-label"></span>
                    <ul class="social">
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Satywan Gholap</a></h3>
                    <div class="price"><span></span>Maintener</div>
                </div>
            </div>
        </div> 
           
            
              <!-- <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="../resources/images/Abhi5.jpg">
                        <img class="pic-2" src="img-8.jpg">
                    </a>
                    <span class="product-trend-label">Trend</span>
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Satywan Gholap</a></h3>
                    <div class="price discount"><span></span></div>
                </div>
            </div>
        </div> -->







    </div>
</div>
</body>
</html>






























<?php include'footer.php';?>