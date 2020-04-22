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
			if(!isset($_SESSION['driverId']))
			{
				header("location:driverlogin.php");
			}		 
			$driverId	=	$_SESSION['driverId'];
			include("helper/getDriverDet/index.php");	
			include("helper/getDriverLoc/index.php");			
			include("helper/getCityLists/index.php");
			if(isset($_SESSION['driverId']))
			{
				if(empty($driverlocArray))
				{
					?>
					<script type="text/javascript">
						 alert("Please Set DriverLocation");
					</script>
				<?php 
				}
			}
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
					<h2>Driver Profile</h2>
					<div class="form-group">
							<?php if(!empty($driverlocArray)){$cityID=$driverlocArray['cityID'];}else{$cityID='';}?>
							<select id='setloc' name='setloc' class="chosen form-control" style='width:60%;' onchange='javascript:changeCity("setloc");'>	
							 <option value="">Select Location</option>
							 <?php 
								for($i=0;$i<sizeof($citylistArray);$i++)
								{
									?>
									<option <?php if($cityID==$citylistArray[$i]['cityID']){?>selected<?php }?> value='<?php echo $citylistArray[$i]['cityID'];?>'><?php echo $citylistArray[$i]['cityName'];
									if($citylistArray[$i]['districtName']){echo " - ".$citylistArray[$i]['districtName'];}?></option><?php
								}
							 ?>
						</select>
						<input type='button' value='Set Location' class='btn' style='margin-top:-9px;width:30%;float:right;' onclick='javascript:setLocationDri();'></h2>
					</div>
							<input type='text' id="setlocother" <?php if($cityID=='158'){?> value="<?php echo $driverlocArray['cityOtherVal'];?>"<?php }?>name="setlocother" class="form-control" style='width:60%;height:30px !important;font-size:12px !important;<?php if($cityID=='158'){?>display:block;<?php }else { ?>display:none;<?php }?>' >
					<form class="request-form ftco-animate bg-primary login_wrapper" style='padding: 21px !important;margin-top: 15px;'>	
						<div class=" text-right">
							<input type='button' value='Vehicle Details' class='btn' style='margin-top:0px;width:30%;' onclick='javascript:window.location="changevehdet.php";'>						
							<input type='button' value='Change Password' class='btn' style='margin-top:0px;width:30%;' onclick='javascript:window.location="changedrivPwd.php";'>						
							<input type='button' value='Edit Profile' class='btn' style='margin-top:0px;width:30%;' onclick='javascript:drivEditProfile();'>
						</div>	
								
						<div class="form-group" style='margin-top:10px;'>
							<table width='100%'>
								<tr>
									<td colspan='3'><?php if($driverArray['Driver_Img']){?><img src='driverimage/<?php echo $driverArray['Driver_Img'];?>' width='100px' height='100px'><?php }else{?>
									<img src='driverimage/user.jpg' width='100px' height='100px'><?php }?></td>
								</tr>
								<tr><td>&nbsp;</td></tr>
								<tr>
									<td><label for="" class="label">First Name</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_FName'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Last Name</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_LName'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Gender</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_Gender'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Email</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_Email'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">DOB</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo date("Y-m-d",strtotime($driverArray['Driver_Dob']));;?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Age</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_Age'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Phone</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_Phone'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">House</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_House'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Street</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_Street'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">City</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_City'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Zipcode</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_Zip'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Licence No.</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_Licno'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Licence Type</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_Lictype'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Licence Expiry</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo date("Y-m-d",strtotime($driverArray['Driver_LicExpiry']));?></label>	</td>
								</tr>
								
								<tr>
									<td><label for="" class="label">Badge No.</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php echo $driverArray['Driver_BadgeNo'];?></label>	</td>
								</tr>
								<tr>
									<td><label for="" class="label">Badge Expiry</label></td>
									<td><label style='color:#000;font-size:14px;font-weight:bold;'>&nbsp; : &nbsp;</label></td>
									<td><label style='color:#000;font-size:14px;'><?php if($driverArray['Driver_BadgeExpiry']!='0000-00-00'){echo date("Y-m-d",strtotime($driverArray['Driver_BadgeExpiry']));}?></label>	</td>
								</tr>
							</table>
						</div>
						<input type='hidden' id='loginID' name='loginID' value='<?php echo $driverArray['cust_logID'];?>'>
					</form>
				</div>
				<div class="col-md-5 featured-top">
				<h2>&nbsp;</h2>
					<div class="services services-2 w-100 text-center">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
						<div class="text w-100">
						<h3 class="heading mb-2" style='cursor:pointer;' onclick='javascript:window.location.href="viewbooking.php"'>View Bookings</h3>
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
  <script src="admin/js/sweetalert/js/sweetalert.js"></script>
  <script src="admin/js/sweetalert/js/sweetalert-data.js"></script>
  <script src="js/common.js"></script> 
  <script>
	 $(document).ready(function () {
		 jQuery(".chosen").data("placeholder","Select").chosen();
	  });  
	</script>
  </body>
</html>