<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>earthi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		<?php if(isset($_SESSION['session_secret'])): ?>
	      <a class="navbar-brand" href="member.php"><img src="https://www.dl.dropboxusercontent.com/s/chaogr72sdus4g8/earthi-logo.svg?dl=0"></a>
        <?php else: ?>
        <a class="navbar-brand" href="index.php"><img src="https://www.dl.dropboxusercontent.com/s/chaogr72sdus4g8/earthi-logo.svg?dl=0"></a>
        <?php endif; ?>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<?php if(isset($_SESSION['session_secret'])): ?>
	          <li class="nav-item active"><a href="member.php" class="nav-link">Home</a></li>
			  <?php else: ?>
				<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
				<?php endif; ?>
	          <li class="nav-item">
              <a class="nav-link" href="shop.php" aria-haspopup="true" aria-expanded="false">Shop</a>
            </li>
			<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <?php if(isset($_SESSION['session_secret'])): ?>
          <li class="nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
          <?php else: ?>
          <li class="nav-item"><a href="login.php" class="nav-link">Log In</a></li>
          <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>
          <?php endif; ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
		<div class="overlay"></div>
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category" id="myBtnContainer">
						<button class="btn currFilter" onclick="filterSelection('all')">All</button>
						<button class="btn" onclick="filterSelection('vegetables')">Vegetables</button>
    					<button class="btn" onclick="filterSelection('fruits')">Fruits</button>
    					<button class="btn" onclick="filterSelection('juice')">Juice</button>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate filterDiv vegetables">
    				<div class="product">
    					<a class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">50%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3> Bell Pepper Basket (5)</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$12.00</span><span class="price-sale">$6.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
									<?php if(isset($_SESSION['session_secret'])): ?>
										<form action="https://test.bitpay.com/checkout" method="post">
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="KtqWOh5dTqAVRdlzErq6Vzcteaptt6/ncWpc0/TknAYXKXOiQYYELoaJWW0IVMNPGTq6/grnjPmDw+AL2EUmSXsPlqPCYQXTdrWICQfJdxWHEHxH6hMkPAVKPOkqHLT2SzB8WNUM2UZbBu6LW0vYnr0Q84vNMbnELHvHBaI4wqA=" />
											<input type="submit" class="sphere" value="+">										
										</form>
									<?php else: ?>
										<form action="login.php" method="post">
											<input type="submit" class="sphere" value="+">
										</form>
									<?php endif; ?>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate filterDiv fruits">
    				<div class="product">
    					<a class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3>Strawberry Basket (1 lb)</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$8.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
									<?php if(isset($_SESSION['session_secret'])): ?>
										<form action="https://test.bitpay.com/checkout" method="post">
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="KtqWOh5dTqAVRdlzErq6Vzcteaptt6/ncWpc0/TknAbPBvd1esGtfsPmRB2clnxzIxa0aOhUIZvjOZsuOvvcIBbS4faDTULOUe3mjBduk/HQp8xKN9r/SqDIzlRIEG/1iiLVPZojMn2vezV2pseZsYnTdUt4YmNtgpbc4xdibJk=" />											
											<input type="submit" class="sphere" value="+">
										</form>
									<?php else: ?>
										<form action="login.php" method="post">
											<input type="submit" class="sphere" value="+">
										</form>
									<?php endif; ?>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate filterDiv vegetables">
    				<div class="product">
    					<a class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3>Green Beans Bunch (1 lb)</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$6.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
									<?php if(isset($_SESSION['session_secret'])): ?>
										<form action="https://test.bitpay.com/checkout" method="post">
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="KtqWOh5dTqAVRdlzErq6Vzcteaptt6/ncWpc0/TknAYXKXOiQYYELoaJWW0IVMNPGTq6/grnjPmDw+AL2EUmSXsPlqPCYQXTdrWICQfJdxWHEHxH6hMkPAVKPOkqHLT2SzB8WNUM2UZbBu6LW0vYnr0Q84vNMbnELHvHBaI4wqA=" />											
											<input type="submit" class="sphere" value="+">
										</form>
									<?php else: ?>
										<form action="login.php" method="post">
											<input type="submit" class="sphere" value="+">
										</form>
									<?php endif; ?>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate filterDiv vegetables">
    				<div class="product">
    					<a class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3>Cabbage Basket (5)</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$25.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
									<?php if(isset($_SESSION['session_secret'])): ?>
										<form action="https://test.bitpay.com/checkout" method="post">
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="KtqWOh5dTqAVRdlzErq6Vzcteaptt6/ncWpc0/TknAauT9+4CH4iBlh/tF4FBwLz48fWbkLTINQQj9GI48BuB7pwt9KiRBpF8q3glKaHJU52kXio00Vz8hA4iUq1cfGQQ7zSWPkB+gAmoA36MSM+Yssx1kKWpzp/l4A+UM4qWA8=" />											
											<input type="submit" class="sphere" value="+">
										</form>	
									<?php else: ?>
										<form action="login.php" method="post">
											<input type="submit" class="sphere" value="+">
										</form>
									<?php endif; ?>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>


    			<div class="col-md-6 col-lg-3 ftco-animate filterDiv fruits">
    				<div class="product">
    					<a class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3>Tomato Basket (1 lb)</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$5.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
									<?php if(isset($_SESSION['session_secret'])): ?>
										<form action="https://test.bitpay.com/checkout" method="post">
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="KtqWOh5dTqAVRdlzErq6Vzcteaptt6/ncWpc0/TknAaRV3/x+cnecXiAatrro1Yn1WU82c3Ipn5RZp9d+WEO7be6QBt1n/FLWjA/oWdjiNwOhUbPUISziZ6OUdpN4hSsLC5PBJ0Vpc8kjCMi2vEaHhBWg/7j5jkoxfNmKNW8lD0=" />											
											<input type="submit" class="sphere" value="+">
										</form>
									<?php else: ?>
										<form action="login.php" method="post">
											<input type="submit" class="sphere" value="+">
										</form>
									<?php endif; ?>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate filterDiv vegetables">
    				<div class="product">
    					<a class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3>Broccoli Basket (5)</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$20.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
									<?php if(isset($_SESSION['session_secret'])): ?>
										<form action="https://test.bitpay.com/checkout" method="post">
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="KtqWOh5dTqAVRdlzErq6Vzcteaptt6/ncWpc0/TknAauT9+4CH4iBlh/tF4FBwLzm1VCH1yqGV2ecs/5f3exzQUJk354nfTpeGbvN8k3yQa4YOKaUZrT1/ASSpOIuIy9WiHeK77f8SH9msGbFKxwi7BGvdMOjTchOQKEtjFHh7A=" />											
											<input type="submit" class="sphere" value="+">
										</form>	
									  <?php else: ?>
										<form action="login.php" method="post">
											<input type="submit" class="sphere" value="+">
										</form>
									<?php endif; ?>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate filterDiv vegetables">
    				<div class="product">
    					<a class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3>Carrot Bunch (2 lb)</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$6.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
									<?php if(isset($_SESSION['session_secret'])): ?>
										<form action="https://test.bitpay.com/checkout" method="post">
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="KtqWOh5dTqAVRdlzErq6Vzcteaptt6/ncWpc0/TknAYXKXOiQYYELoaJWW0IVMNPGTq6/grnjPmDw+AL2EUmSXsPlqPCYQXTdrWICQfJdxWHEHxH6hMkPAVKPOkqHLT2SzB8WNUM2UZbBu6LW0vYnr0Q84vNMbnELHvHBaI4wqA=" />											
											<input type="submit" class="sphere" value="+">
										</form>
									<?php else: ?>
										<form action="login.php" method="post">
											<input type="submit" class="sphere" value="+">
										</form>
									<?php endif; ?>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate filterDiv juice">
    				<div class="product">
    					<a class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3>Fruit Juice Pack (3)</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$30.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
									<?php if(isset($_SESSION['session_secret'])): ?>
										<form action="https://test.bitpay.com/checkout" method="post">
											<input type="hidden" name="action" value="checkout" />
											<input type="hidden" name="posData" value="" />
											<input type="hidden" name="data" value="KtqWOh5dTqAVRdlzErq6Vzcteaptt6/ncWpc0/TknAZ1FeOqQc8+IfDoP1sSVQ5cMajVDoz/g82IQQktCsO8NOPgEio5qPJ1UECQVtGU1WgxUptKifQtPBPqvft0HNX1N3f+afPJV3T2cdAZLsrZWgGNr2aZKPv/lzReCiB8avE=" />											
											<input type="submit" class="sphere" value="+">
										</form>	
									<?php else: ?>
										<form action="login.php" method="post">
											<input type="submit" class="sphere" value="+">
										</form>
									<?php endif; ?>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
	</section>
	
	<footer class="ftco-footer ftco-section">
		<div class="container">
  
		  <div class="row mb-5">
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">earthi</h2>
				<p>Look deep into nature, and then you will understand everything better. 
					<br>— <i>Albert Einstein</i></p>
			  </div>
			</div>
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4 ml-md-5">
				<h2 class="ftco-heading-2">Menu</h2>
				<ul class="list-unstyled">
					<li><a href="shop.php" class="py-2 d-block">Shop</a></li>
					<li><a href="about.php" class="py-2 d-block">About</a></li>
					<li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">Have Any Questions?</h2>
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon icon-map-marker"></span><span class="text">85 Engineer's Way Charlottesville, VA 22904</span></li>
					  <p>
						<p></p>
						<li><a href="mailto:earthi.ecomm@gmail.com"><span class="icon icon-envelope"></span><span class="text">earthi.ecomm@gmail.com</span></a></li>
					  </ul>
				  </div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-12 text-center">
  
			  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  </p>
			</div>
		  </div>
		</div>
	  </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
 <script>
 filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    removeFilterClass(x[i], "showFilter");
    if (x[i].className.indexOf(c) > -1) {
		addFilterClass(x[i], "showFilter");
	}
  }
}

// Show filtered elements
function addFilterClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function removeFilterClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("currFilter");
    current[0].className = current[0].className.replace(" currFilter", "");
    this.className += " currFilter";
  });
}
 </script>

  </body>
</html>