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
	<link href="admin/css/sweetalert.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="css/jquery-ui.css">
  </head>
  <body>    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">KUICK<span>CAB</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	     <?php $lnk='driverProfile';include_once("header.php");
			if(!isset($_SESSION['driverId']))
			{
				header("location:login.php");
			}
			$driverId	=	$_SESSION['driverId'];
			include("helper/getDriverDet/index.php");
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
					<h2>Edit Driver Details</h2>
					<form enctype="multipart/form-data" action="helper/editDriver/index.php" name='drivtsign' class="request-form ftco-animate bg-primary login_wrapper" method='POST' onsubmit='javascript:return checkDriSignup();'>
						<div class="form-group text-right">
							<i style='color:#000;text-align:right;font-size:12px;'>Fields with <span style='color:red;'>*</span> are mandatory</i>
						</div>
						<div class="form-group" style='font-size:14px;text-align:center;'>
						<?php if(isset($_GET['r']) && $_GET['r']==1){echo "<label style='color:#1089ff;'>Driver Details Updated Successfully.</label>";}
						else if(isset($_GET['r']) && $_GET['r']==2){echo "<label style='color:red;'>Failed Updating Driver Details.</label>";}?>
						</span>
						</div>
						<div class="form-group">
							<label for="" class="label">Driver Image&nbsp;<span style='color:red;'>*</span></label>							
							<div><input type="file" class="form-control" id='driverimg' name='driverimg' style='width:50%;float:left;'>
							<label class='imgtxt'><?php if($driverArray['Driver_Img']!=''){?><a target='_blank' href='driverimage/<?php echo $driverArray['Driver_Img'];?>'><?php echo $driverArray['Driver_Img'];?></a><?php }?>
						</div></label></div>
							
						<div class="form-group" style="float:left;margin-top:10px;">
							<label for="" class="label">First Name&nbsp;<span style='color:red;'>*</span></label>
							<input type="text" class="form-control" id='firstname' name='firstname' autocomplete='off' value='<?php echo $driverArray['Driver_FName'];?>'>
						</div>
						<div class="form-group">
							<label for="" class="label">Last Name</label>
							<input type="text" class="form-control" id='lastname' name='lastname' autocomplete='off' value='<?php echo $driverArray['Driver_LName'];?>'>
						</div>
						<div class="form-group">
							<label for="" class="label">Gender&nbsp;<span style='color:red;'>*</span></label>
							<select name='gender' id='gender'  class="form-control">
								<option value='male' <?php if($driverArray['Driver_Gender']=='male'){?>selected<?php }?>>Male</option>
								<option value='female' <?php if($driverArray['Driver_Gender']=='female'){?>selected<?php }?>>Female</option>
							</select>
						</div>						
						<div class="form-group">
							<label for="" class="label">Email&nbsp;<span style='color:red;'>*</span></label>
							<input type="text" class="form-control" id='email' name='email' autocomplete='off' readonly value='<?php echo $driverArray['Driver_Email'];?>'>
						</div>
						<div class="form-group">
							<label for="" class="label">DOB</label>
							<input type="text" class="form-control" id='dob' name='dob' autocomplete='off' readonly value='<?php if($driverArray['Driver_Dob']!='0000-00-00'){echo date("m/d/Y",strtotime($driverArray['Driver_Dob']));}?>'>
						</div>	
						<div class="form-group">
							<label for="" class="label">Phone Number&nbsp;<span style='color:red;'>*</span></label>
							<input type="text" class="form-control" id='phonenumber' name='phonenumber' maxlength="10" autocomplete='off' value='<?php echo $driverArray['Driver_Phone'];?>'>
						</div>
						<div class="form-group">
							<label for="" class="label">House No.</label>
							<input type="text" class="form-control" id='house' name='house' autocomplete='off' value='<?php echo $driverArray['Driver_House'];?>'>
						</div>
						<div class="form-group">
							<label for="" class="label">Street</label>
							<input type="text" class="form-control" id='street' name='street' autocomplete='off' value='<?php echo $driverArray['Driver_Street'];?>'>
						</div>
						<div class="form-group">
							<label for="" class="label">City</label>
							<input type="text" class="form-control" id='city' name='city' autocomplete='off' value='<?php echo $driverArray['Driver_City'];?>'>
						</div>
						<div class="form-group">
							<label for="" class="label">Zipcode&nbsp;<span style='color:red;'>*</span></label>
							<input type="text" class="form-control" id='zipcode' name='zipcode' maxlength="6" autocomplete='off' value='<?php echo $driverArray['Driver_Zip'];?>'>
						</div>		
						<div class="form-group">
							<label for="" class="label">Licence No.&nbsp;<span style='color:red;'>*</span></label>
							<input type="text" class="form-control" id='licenceno' name='licenceno' autocomplete='off' value='<?php echo $driverArray['Driver_Licno'];?>'>
						</div>
						<div class="form-group">
							<label for="" class="label">Licence Type&nbsp;<span style='color:red;'>*</span></label>
							<input type="text" class="form-control" id='licencetype' name='licencetype' value='<?php echo $driverArray['Driver_Lictype'];?>'>
						</div>
						<div class="form-group">
							<label for="" class="label">Licence Expiry&nbsp;<span style='color:red;'>*</span></label>
							<input type="text" class="form-control" id='licenceexpiry' name='licenceexpiry' readonly value='<?php if($driverArray['Driver_LicExpiry']!='0000-00-00'){echo date("m/d/Y",strtotime($driverArray['Driver_LicExpiry']));}?>'>
						</div>	
						<div class="form-group">
							<label for="" class="label">Badge No.&nbsp;</label>
							<input type="text" class="form-control" id='badgeno' name='badgeno' autocomplete='off' value='<?php echo $driverArray['Driver_BadgeNo'];?>'>
						</div>						
						<div class="form-group">
							<label for="" class="label">Badge Expiry&nbsp;</label>
							<input type="text" class="form-control" id='badgeexpiry' name='badgeexpiry' readonly value='<?php if($driverArray['Driver_BadgeExpiry']!='0000-00-00'){echo date("m/d/Y",strtotime($driverArray['Driver_BadgeExpiry']));}?>'>
						</div>
						<div class=" text-right">
							<input type='button' value='Cancel' class='btn' style='margin-top:0px;width:20%;' onclick='javascript:window.location="driverProfile.php";'>
							<input type='submit' value='Save' class='btn' style='margin-top:0px;width:20%;' >
						</div>
					</form>
				</div>
				<div class="col-md-5 featured-top">
				<h2>&nbsp;</h2>
					<div class="services services-2 w-100 text-center">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
						<div class="text w-100">
						<h3 class="heading mb-2" style='cursor:pointer;'>View Bookings</h3>
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
	  <script src="js/jquery-ui.js"></script>
	  <script src="js/main.js"></script>
	  <script src="admin/js/sweetalert/js/sweetalert.js"></script>
	  <script src="admin/js/sweetalert/js/sweetalert-data.js"></script>
	  <script src="js/common.js"></script>
  <script>
	  $(function(){
		  $("#dob").datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "1930:2010"
		});
		$("#licenceexpiry").datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "1990:2040"
		});
		$("#badgeexpiry").datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "1990:2040"
		});
	  });
	  </script>
  </body>
</html>