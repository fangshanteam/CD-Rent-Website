<?php
   session_start();
   require_once("koneksi.php");
	
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page - i-CD电影</title>
    
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
  <?php 
  if(isset($_GET['keyword'])){
  	$keyword=$_GET['keyword'];
  }
  ?>
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
                        <li><a href="shop.php">New Release</a></li>
                        <li><a href="shop.php">Top Rated Film</a></li>
                    </ul>
                
				</div>
				</div>
                <div class="col-sm-5">
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
    <div id="main-search" class="content-dark hidden-sm hidden-xs">
	<div class="container">
		<div id="main-search" class="content-dark hidden-sm hidden-xs">
		<div class="container">
				
			<form method="get" 
            action="?keyword
			<?php if(isset($_GET['keyword'])){
			echo $keyword;
			} 
			?>"
            accept-charset="UTF-8" id="browse_movies">
				<!--input name="s" id="s" type="hidden" -->
				<div id="main-search-fields">
									<p class="pull-left term">Search Movies :</p>
					<input name="search_query"
                    value="<?php 
					if(isset($_GET['keyword'])){
					echo $keyword;
					}
					?>" 
                    autocomplete="off" type="search">					
						<div class="selects-container">
							<p>Quality:</p>
							<select name="search_quality"><option value="quality" selected="">All</option><option value="1080">1080p</option><option value="720">720p</option><option value="320">320p</option></select>
						</div>
						<div class="selects-container">
							<p>Genre:</p>
							<select name="search_genre"><option value="genre" selected="">All</option><option value="Action">Action</option><option value="Adventure">Adventure</option><option value="Animation">Animation</option><option value="Biography">Biography</option><option value="Comedy">Comedy</option><option value="Crime">Crime</option><option value="Documentary">Documentary</option><option value="Drama">Drama</option><option value="Family">Family</option><option value="Fantasy">Fantasy</option><option value="Film-Noir">Film-Noir</option><option value="History">History</option><option value="Horror">Horror</option><option value="Music">Music</option><option value="Mystery">Mystery</option><option value="News">News</option><option value="Reality-TV">Reality-TV</option><option value="Romance">Romance</option><option value="Sci-Fi">Sci-Fi</option><option value="Short">Short</option><option value="Sport">Sport</option><option value="Thriller">Thriller</option><option value="War">War</option><option value="Western">Western</option></select>						</div>
						<div class="selects-container">
							<p>Rating:</p>
							<select name="search_rating">
							<option value="rating" selected="">All</option><option value="9">+9</option><option value="8">+8</option><option value="7">+7</option><option value="6">+6</option><option value="5">+5</option><option value="4">+4</option><option value="3">+3</option><option value="2">+2</option><option value="1">+1</option>							</select>
							
						</div>
						
						<div class="selects-container selects-container-last">
							<p>Order By:</p>
							<select name="search_order">								
							<option value="latest" selected="">Latest</option><option value="older">Older</option><option value="year">Year</option><option value="rating">Rating</option><option value="likes">Likes</option><option value="downloads">Downloads</option><option value="alphabetical">Alphabetical</option>							</select>
						</div>
						
						
				</div>
				
					<input class="button-green-download-big" type="submit" value="Search">
				
			</form>
			
			<!--<script>

$('form#browse_movies').submit(function(e){

     var emptyinputs = $(this).find('input').filter(function(){
     return !$.trim(this.value).length;  
    }).prop('disabled',true);    
});</script>-->		</div>
	</div>
	</div>
</div>
</center>
	
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
			
			
			<?php
			
			if(isset($_GET['search_genre'])==null || isset($_GET['search_quality'])==null || isset($_GET['search_rating'])==null ){
				
				$sql = "SELECT namefilm, genre, rating, year, price, images from film";
				$result = $db->query($sql);
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) 
					{
					}
				}
				
			}
			else{
				
		$genre = $_GET['search_genre'];
		$rat = $_GET['search_rating'];	
		$qual = $_GET['search_quality'];
		
		
		$sql = "SELECT namefilm, genre, rating, year, price, images from film where quality='$qual' OR rating='$rat' OR genre='$genre'";
		
		
		
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				
				
											
		?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <?php echo '<img src="data:images/jpg;base64,'.base64_encode($row['images']).'">'; ?>
                        </div>
                        <h2><a href="single-product.html"><?php echo  $row["namefilm"]; ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>Rp. <?php echo  $row["price"]; ?></ins> 
                                </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div>
				<!-- ini adalah template-->
		<?php
			}
		} 
		
		else {
			echo "There is no result in database";

		}
			}
		?>
				
            
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                2016 - 2018 c PT i-CD Dianying Indonesia    
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
  </body>
</html>