<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KUICKCAB - Fast & Quick Cabs.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/jquery-ui.css">

	<link rel="stylesheet" href="css/chosen.css">
  </head>
  <body>    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">KUICK<span>CAB</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	     <?php $lnk='driverProfile';include_once("header.php");
			if(!isset($_SESSION['customerId']))
			{
				header("location:login.php");
			}		 
			$custId	=	$_SESSION['customerId'];
			include("helper/getCityList/index.php");
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
					<h2 style='font-size: 20px !important;'>Book Cab</h2>
					<div class="form-group" style='font-size:14px;text-align:center;'>
						<?php 
							if(isset($_GET['r']) && $_GET['r']==1){echo "<label style='color:#1089ff;'>Cab Booking Waiting.</label>";}
							else if(isset($_GET['r']) && $_GET['r']==2){echo "<label style='color:red;'>Busy Time Please Wait.</label>";}
							if(isset($_GET['r']) && $_GET['r']==3){echo "<label style='color:#1089ff;'>Cab Booking Waiting.</label>";}
						?>
						</span>
					</div>					
					<form  action="helper/bookCab/index.php"  method='POST' onsubmit='javascript:return bookCab();' class="request-form ftco-animate bg-primary login_wrapper" style='padding: 21px !important;margin-top: 15px;'>	
						<div class="form-group">
							<label for="" class="label">Start Location<span style='color:red;'>*</span></label>
							<br/><span style='color:#000;font-size:10px;'>&nbsp;Please select <b>Other</b> if not in the list</span>
							<select id='startloccity' name='startloccity' class="chosen form-control"  onchange='javascript:changeCity("startloccity"); getAmount();'>	
							 <option value="">Select Start Location</option>
							 <?php 
								for($i=0;$i<sizeof($citylistArray);$i++)
								{
									?>
									<option value='<?php echo $citylistArray[$i]['cityID'];?>'><?php echo $citylistArray[$i]['cityName']; 
									if($citylistArray[$i]['districtName']){echo " - ".$citylistArray[$i]['districtName'];}?></option>
									<?php
								}
							 ?>
							</select>
							<input type='text' id="startloccityother" name="startloccityother" style='display:none;' class="form-control" >
						</div>
						<div class="form-group">
							<label for="" class="label">End Location<span style='color:red;'>*</span></label>
							<select id='endloccity' name='endloccity' class="chosen form-control" onchange='javascript:changeCity("endloccity");getAmount();'>	
							 <option value="">Select End Location</option>
							 <?php 
								for($i=0;$i<sizeof($citylistArray);$i++)
								{
									?>
									<option value='<?php echo $citylistArray[$i]['cityID'];?>'><?php echo $citylistArray[$i]['cityName'];
									if($citylistArray[$i]['districtName']){echo " - ".$citylistArray[$i]['districtName'];}?></option>
									<?php
								}
							 ?>
							</select>
							<input type='text' id="endloccityother" name="endloccityother" style='display:none;' class="form-control" >
						</div>
						<div class="form-group">
							<label for="" class="label">Category<span style='color:red;'>*</span></label>
							<select id='cabcategory' name='cabcategory' class="chosen form-control" onchange='javascript:getAmount();'>	
							 <option value="">Select Category</option>
							 <?php 
								for($i=0;$i<sizeof($categoryArray);$i++)
								{
									?>
									<option value='<?php echo $categoryArray[$i]['Cat_ID'];?>'><?php echo $categoryArray[$i]['Cat_Name'];?></option>
									<?php
								}
							 ?>
							</select>
							<input type='text' id="endloccityother" name="endloccityother" style='display:none;' class="form-control" >
						</div>
						<label for="" class="label">Distance<span style='color:red;'>*</span></label>				
						<input type='text' id='distance' name='distance' value='0' readonly class="form-control">								
						<label for="" class="label">Amount<span style='color:red;'>*</span></label>				
						<input type='text' id='amount' name='amount' value='0' readonly class="form-control">						
						<label for="" class="label">Trip Date & Time<span style='color:red;'>*</span></label>						
						<input type='text' name='starttime' id='starttime' class="form-control" readonly >
						
						<div class=" text-right" style='margin-top:10px;'>
							<input type='button' value='Cancel' class='btn' style='margin-top:0px;width:20%;' onclick='javascript:window.location="cusProfile.php";'>
							<input type='submit' value='Book Cab' class='btn' style='margin-top:0px;width:20%;' onclick='javascript:bookCab();'>
						</div>
						<input type='hidden' id='custId' name='custId' value='<?php echo $custId;?>'>	

												
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
  <script src="js/chosen.jquery.js"></script>
  <script src="js/bootstrap-datetimepicker.js"></script>
  <script src="admin/js/sweetalert/js/sweetalert.js"></script>
  <script src="admin/js/sweetalert/js/sweetalert-data.js"></script>
  <script src="js/common.js"></script> 
  
  
  <script>
	 $(document).ready(function () {
		 var date = new Date();
			date.setDate(date.getDate());
		 jQuery(".chosen").data("placeholder","Select").chosen();
		  $("#starttime").datetimepicker({
				 startDate: date
			});
	  });  
	</script>
	
	</body>