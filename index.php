<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KUICKCAB - Fast & Quick Cabs.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

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
  <body>    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">KUICK<span>CAB</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
		 <?php 
		 $lnk='home';
		 include_once("header.php");?>	 
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp;Quick Cabs</h1>
	            <p style="font-size: 18px;">Skillful ideas have driven for you. Enjoy Safe & Secure Journey.</p>	           
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-no-pt bg-light" id='ftco-section'>
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Book Cabs of Category</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
				<?php	?>
    				<div class="carousel-car owl-carousel">
					 <?php for($i=0;$i<sizeof($categoryAllArray);$i++){?>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(categoryImg/<?php echo $categoryAllArray[$i]['catImg']?>);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#"><?php echo $categoryAllArray[$i]['Cat_Name']?></a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">&nbsp;</span>
			    						<p class="price ml-auto">&nbsp; <span>&nbsp;</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block" style='width:100% !important;'>
										<a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
									</p>
		    					</div>
		    				</div>
    					</div>
					<?php }?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-about" id='ftco-about'>
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
				</div>
				<div class="col-md-6 wrap-about ftco-animate">
		  <div class="heading-section heading-section-white pl-md-5">
			<span class="subheading">About us</span>
			<h2 class="mb-4">Welcome to KUICKCAB</h2>
			<p>Always there when you need. Always there when you need a taxi. Always there for you. Single time, all the time.</p>
			<p>KUICKCAB is a web application to book the cab online. Customer can choose the category of car they need and can book on a date. You can cancel the trip any time needed. We will return the amount. It is launched in 2020. Feel free to book the cab and enjoy the trip.</p>
			<p><a href="#" class="btn btn-primary py-3 px-4">Customer Login</a></p>
		  </div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id='ftco-section'>
		<div class="container">
			<div class="row justify-content-center mb-5">
			  <div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Services</span>
				<h2 class="mb-3">Our Latest Services</h2>
			  </div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="services services-2 w-100 text-center">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
						<div class="text w-100">
						<h3 class="heading mb-2" onclick="window.location.href='signup.php'" style='cursor:pointer;'>Customer Login</h3>
						<p>Book Cabs for the journey & Enjoy the trip.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="services services-2 w-100 text-center">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
						<div class="text w-100">
						<h3 class="heading mb-2" onclick="window.location.href='login.php'" style='cursor:pointer;'>Book Cabs</h3>
						<p>Book Cabs for the journey & Enjoy the trip.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="services services-2 w-100 text-center">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></span></div>
						<div class="text w-100"  onclick="window.location.href='driversignup.php'" style='cursor:pointer;'>
						<h3 class="heading mb-2">Become A Driver</h3>
						<p>Do You Want To Earn With Us? So Don't Be Late.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="services services-2 w-100 text-center">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
						<div class="text w-100">
						<h3 class="heading mb-2"  onclick="window.location.href='driverlogin.php'" style='cursor:pointer;'>Driver Login</h3>
						<p>Do You Want To Earn With Us? So Don't Be Late.</p>
					  </div>
					</div>
				</div>				
			</div>
		</div>
	</section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
     <?php include_once("footer.php");?>
    </footer>

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
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/common.js"></script>
  </body>
</html>