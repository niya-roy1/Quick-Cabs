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
	     <?php $lnk='cusProfile';include_once("header.php");
			if(!isset($_SESSION['customerId']))
			{
				header("location:login.php");
			}		 
			$custId	=	$_SESSION['customerId'];
			include("helper/getCustomerDet/index.php");
		 ?>
	    </div>
	  </nav>
    <!-- END nav -->
  
    <div  style="padding: 25px 25px;background-image: url('images/car-12.jpg');background-size: cover;height:450px;">
     
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center" style='height: 630px !important;'>
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5" >
	            <h1 class="mb-4">Fast &amp;Quick Cabs</h1>
	            <p style="font-size: 18px;">Skillful ideas have driven for you. Enjoy Safe & Secure Journey.</p>	           
            </div>
          </div>
        </div>
      </div>
    </div>
	 <section class="ftco-section ftco-no-pt bg-light login_wrapper">
    	<div class="container">
    		<div class="row no-gutters">			
    			<div class="col-md-7 featured-top">
					<h2>Customer Profile</h2>					
					<form class="request-form ftco-animate bg-primary login_wrapper" style='padding: 21px !important;margin-top: 15px;'>	
						<div class=" text-right">
							<input type='button' value='Change Password' class='btn' style='margin-top:0px;width:30%;' onclick='javascript:window.location="changePwd.php";'>						
							<input type='button' value='Edit' class='btn' style='margin-top:0px;width:20%;' onclick='javascript:cusEditProfile();'>
						</div>					
						<div class="form-group">
							<label for="" class="label">First Name</label>
							<label style='color:#000;font-size:14px;padding-left:10px;font-weight:bold;'>&nbsp; : &nbsp;</label>
							<span style='color:#000;font-size:14px;'><?php echo $customerArray['Cust_FName'];?></span>							
							<br/>
							<label for="" class="label">Last Name&nbsp;</label>
							<label style='color:#000;font-size:14px;padding-left:10px;font-weight:bold;'>&nbsp; : &nbsp;</label>
							<span style='color:#000;font-size:14px;'><?php echo $customerArray['Cust_LName'];?></span>
							<br/>
							<label for="" class="label">Gender&nbsp;</label>
							<label style='color:#000;font-size:14px;padding-left:29px;font-weight:bold;'>&nbsp; : &nbsp;</label>
							<span style='color:#000;font-size:14px;'><?php echo $customerArray['Cust_Gender'];?></span>
							<br/>
							<label for="" class="label">Phone No.&nbsp;</label>
							<label style='color:#000;font-size:14px;padding-left:13px;font-weight:bold;'>&nbsp; : &nbsp;</label>
							<span style='color:#000;font-size:14px;'><?php echo $customerArray['Cust_Phone'];?></span>
							<br/>
							<label for="" class="label">Email&nbsp;</label>
							<label style='color:#000;font-size:14px;padding-left:42px;font-weight:bold;'>&nbsp; : &nbsp;</label>
							<span style='color:#000;font-size:14px;'><?php echo $customerArray['Cust_Email_ID'];?></span>
							<br/>
							<label for="" class="label">House No.&nbsp;</label>							
							<label style='color:#000;font-size:14px;padding-left:14px;font-weight:bold;'>&nbsp; : &nbsp;</label>
							<span style='color:#000;font-size:14px;'><?php echo $customerArray['Cust_House'];?></span>
							<br/>
							<label for="" class="label">Street&nbsp;</label>
							<label style='color:#000;font-size:14px;padding-left:36px;font-weight:bold;'>&nbsp; : &nbsp;</label>
							<span style='color:#000;font-size:14px;'><?php echo $customerArray['Cust_Street'];?></span>
							<br/>
							<label for="" class="label">City&nbsp;</label>
							<label style='color:#000;font-size:14px;padding-left:49px;font-weight:bold;'>&nbsp; : &nbsp;</label>
							<span style='color:#000;font-size:14px;'><?php echo $customerArray['Cust_City'];?></span>
							<br/>
							<label for="" class="label">Zipcode&nbsp;</label>
							<label style='color:#000;font-size:14px;padding-left:25px;font-weight:bold;'>&nbsp; : &nbsp;</label>
							<span style='color:#000;font-size:14px;'><?php echo $customerArray['Cust_Zip'];?></span>
						</div>
						<input type='hidden' id='loginID' name='loginID' value='<?php echo $customerArray['Login_ID'];?>'>
					</form>
				</div>
				<div class="col-md-5 featured-top">
					<h2>&nbsp;</h2>
					<div class="services services-2 w-100 text-center">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
						<div class="text w-100">
						<h3 class="heading mb-2" onclick="window.location.href='bookcabs.php'" style='cursor:pointer;'>Book Cabs</h3>
						<p>Book Cabs for the journey & Enjoy the trip.</p>
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
  <script src="admin/js/sweetalert/js/sweetalert.js"></script>
  <script src="admin/js/sweetalert/js/sweetalert-data.js"></script>
  <script src="js/common.js"></script> 
  </body>
</html>