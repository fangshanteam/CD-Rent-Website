<?php
   session_start();
   require_once("koneksi.php");
   ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>i-CD电影</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
                <div class="col-md-5">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
							<li><a href="cart.html"><i class="glyphicon glyphicon-shopping-cart"></i> Cart - <span class="cart-amunt">$100</span>  </a></li>
							<li><a href="profile.php"><i class="glyphicon glyphicon-user"></i> My Account</a></li>
							<li><i class="glyphicon glyphicon-log-in"></i></li>
							<?php if(!isset($_SESSION['username'])) {
								   echo "<a href='login.php'>Login</a>"; 
								} else { 
								   echo "<a href='logout.php'>Logout</a>";

								} ?>
								</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

   <div class="site-branding-area">
        <div class="container">
            <div class="row">			
				<div class="col-md-7">	
				<div class="shopping-item">
				<div class="navbar-header">
				<h1><a href="index.php"><img src="img/brand3.png"></a></h1>
				</div>
				<div class="navbar-header">
				<a class="navbar-brand" href="#"></a>				
				</div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="shop.php">New Realese</a></li>
                        <li><a href="shop.php">Top Rated Film</a></li>
                    </ul>
                
				</div>
				</div>
                <div class="col-sm-5">
                    <div class="shopping-item">
					<form action="#">
									<input type="text" placeholder="Search products...">
									<input type="submit" value="Search">
					</form>                    
				</div>
                </div>
            </div>
        </div>
    </div>

   
<div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/h4-slide.png" alt="Slide">
					</li>
					<li><img src="img/h4-slide2.png" alt="Slide">
					</li>
					<li><img src="img/h4-slide3.png" alt="Slide">
					</li>
					<li><img src="img/h4-slide4.png" alt="Slide">
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
   
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                				
            </div>
        </div>
    </div> <!-- End mainmenu area -->
	
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-gift"></i>
                        <p>Discount</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div >
						<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Pick Your CD</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
						
						
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-1.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2><a href="single-product.html">Star Trek Future Begins</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>Rp120.000</ins> <del>Rp.180.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-2.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2>Marvel - The Avengers</h2>
                                <div class="product-carousel-price">
                                    <ins>Rp.250.000</ins> <del>Rp.400.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-3.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2>Negeri 5 Menara</h2>

                                <div class="product-carousel-price">
                                    <ins>Rp.99.000</ins> <del>Rp.140.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-4.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2><a href="single-product.html">Satvnic</a></h2>

                                <div class="product-carousel-price">
                                    <ins>Rp.140.000</ins> <del>$180.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-5.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2>Amateur Night</h2>

                                <div class="product-carousel-price">
                                    <ins>Rp.120.000</ins> <del>Rp.155.000</del>
                                </div> 
								</center>
                            </div>
                        </div>
						<div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-6.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2><a href="single-product.html">Ninja Turtles</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>Rp.70.000</ins> <del>Rp.180.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-7.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2>The Legend of Tarzan</h2>
                                <div class="product-carousel-price">
                                    <ins>Rp.289.000</ins> <del>Rp.499.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-8.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2>Shutter Island</h2>

                                <div class="product-carousel-price">
                                    <ins>Rp.94.000</ins> <del>Rp.125.000</del>
                                </div>     
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-9.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2><a href="single-product.html">The Raid Redemption</a></h2>

                                <div class="product-carousel-price">
                                    <ins>Rp.120.000</ins> <del>Rp.225.000</del>
                                </div>  
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-10.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2>The Fault in Our Stars</h2>

                                <div class="product-carousel-price">
                                    <ins>$220.000</ins> <del>RP.355.000</del>
                                </div>
								</center>
                            </div>
                        </div>
						<div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-11.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2><a href="single-product.html">Big Mommas</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>Rp.170.000</ins> <del>Rp.190.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-12.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2>The Angry Birds Movie</h2>
                                <div class="product-carousel-price">
                                    <ins>RP.99.000</ins> <del>Rp.199.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-13.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2>The Mechanic</h2>

                                <div class="product-carousel-price">
                                    <ins>Rp.200.000</ins> <del>Rp.325.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-14.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2><a href="single-product.html">Alvin and The Chipmunks</a></h2>

                                <div class="product-carousel-price">
                                    <ins>Rp.69.000</ins> <del>Rp.125.000</del>
                                </div> 
								</center>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-15.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <center>
                                <h2>The Eagle</h2>

                                <div class="product-carousel-price">
                                    <ins>Rp.120.000</ins> <del>Rp.179.000</del>
                                </div>
								</center>
                            </div>
                        </div>
                    </div>
					<br><br>
					<ul class="pager">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
</ul>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><a href="index.php"><img src="img/brand2.png"></a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="profile.php">My account</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Check Out</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="shop.php">New Realese</a></li>
                            <li><a href="shop.php">Top Rated Film</a></li>
                            <li><a href="shop.php">Search</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
				<br/><br/>
                2016 - 2018 © PT i-CD Dianying Indonesia    
                </div>
                
                <div class="col-md-8">
                    <div class="footer-card-icon">
						<img src="img/payment.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>