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
	     <?php $lnk='driverProfile';include_once("header.php");	
			if(!isset($_SESSION['driverId']))
			{
				header("location:login.php");
			}		 
			
			$driversId	=	$_SESSION['driverId'];
			include("helper/getCategoryDet/index.php");
			
			include("helper/vehicleDet/index.php");
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
					<h2>Vehicle Details</h2>
					<form action="helper/savedriverVehicle/index.php" name='drivsign' class="request-form ftco-animate bg-primary login_wrapper" method='POST' onsubmit='javascript:return savedriverVehicle();'>
						<div class="form-group" style='font-size:14px;text-align:center;'>
						<?php if(isset($_GET['p']) && $_GET['p']==1){echo "<label style='color:#1089ff;'>Password Changed Successfully.</label>";}
						else if(isset($_GET['p']) && $_GET['p']==2){echo "<label style='color:red;'>Failed Updating Driver Password.</label>";}?>
						</span>
						</div>				
						<div class="form-group text-right">
							<i style='color:#000;text-align:right;font-size:12px;'>Fields with <span style='color:red;'>*</span> are mandatory</i>
						</div>						
						<div class="form-group">
							<label for="" class="label">Vehicle Category&nbsp;<span style='color:red;'>*</span></label>
							<select id='category' name='category' class="form-control" onchange='javascript:changeCategory();' >
								<option value=''>Select</option>
								<?php if(isset($categoryAllArray))
								{
									$selval='';
									for($i=0;$i<sizeof($categoryAllArray);$i++)
									{
										if(isset($vehicleArray['Cat_ID'])){$selval=$vehicleArray['Cat_ID'];}
								?>
								<option value="<?php echo $categoryAllArray[$i]['Cat_ID'];?>" <?php if($selval==$categoryAllArray[$i]['Cat_ID']){?>selected<?php }?>>
								<?php echo $categoryAllArray[$i]['Cat_Name'];?>
								</option>
								<?php
									}									
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="label">Vehicle Subcategory</label>
							<select id='subcategory' name='subcategory' class="form-control" >
							<?php 
								
								$selvalue='';if(isset($vehicleArray['SubCat_ID'])){
									$categoryId=$vehicleArray['Cat_ID'];
									include("helper/getSubCategoryDet/index.php");
									for($i=0;$i<sizeof($subcategoryAllArray);$i++)
										{
											if(isset($vehicleArray['SubCat_ID'])){$selvalue=$vehicleArray['SubCat_ID'];}
									?>
									<option value="<?php echo $subcategoryAllArray[$i]['SubCat_ID'];?>" <?php if($selval==$subcategoryAllArray[$i]['SubCat_ID']){?>selectd<?php }?>>
									<?php echo $subcategoryAllArray[$i]['Sub_Name'];?>
									</option>
									<?php
									}	
								}?>
							</select>
						</div>
						<div class="form-group" style="float:left;margin-top:10px;">
							<label for="" class="label">Vehicle Plate&nbsp;<span style='color:red;'>*</span></label>
							<input type="text" class="form-control" id='vehicleplate' name='vehicleplate' autocomplete='off' value='<?php if(isset($vehicleArray['Veh_Plate'])){echo $vehicleArray['Veh_Plate'];}?>'>
						</div>
						<p class="font-13 mx-auto " style='color:#000;font-size:12px;'>* To change current password enter values in this fields.</p>
						<div class=" text-right">
							<input  type="hidden" name="driverId" value="<?php echo $driverId;?>">
							<input type='button' value='Back' class='btn' style='margin-top:0px;width:20%;' onclick='javascript:window.location="driverProfile.php";'>
							<input type='submit' value='Save'  style='margin-top:0px;width:20%;' class='btn' >
						</div>
					</form>
				</div>
				<div class="col-md-5 featured-top">
				<h2>&nbsp;</h2>
					<div class="services services-2 w-100 text-center">
						<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
						<div class="text w-100">
						<h3 class="heading mb-2" onclick="window.location.href='signup.php'" style='cursor:pointer;'>Book Cabs</h3>
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