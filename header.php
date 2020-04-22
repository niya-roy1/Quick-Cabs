<?php 
	session_start();
	include("helper/categoryAllList/index.php");
	$actual_link = "http://".$_SERVER["HTTP_HOST"]."/kuickcab/";
	if(isset($_SESSION['customerId']))
	{
		include("helper/getIsBooking/index.php");	
		if($isbooking==1 && !isset($_SESSION['isbooking']))
		{
			$_SESSION['isbooking']=1;
			?>
			<script type="text/javascript">
				 alert("Cab Booked Successfully.");
			</script>
		<?php 
		}
	}
	
?>
<div class="collapse navbar-collapse" id="ftco-nav">
	<ul class="navbar-nav ml-auto">
	  <li class="nav-item <?php if($lnk=='home'){?>active<?php }?>"><a href="<?php echo $actual_link;?>index.php" class="nav-link">Home</a></li>
	  <li class="nav-item"><a href="<?php echo $actual_link;?>index.php#ftco-about" class="nav-link">About</a></li>
	  <li class="nav-item"><a href="<?php echo $actual_link;?>index.php#ftco-section" class="nav-link">Services</a></li>
	  <?php if(isset($_SESSION['customerId']) && $_SESSION['customerId']!=''){?>
	    <li class="nav-item <?php if($lnk=='cusProfile'){?>active<?php }?>"><a href="<?php echo $actual_link;?>cusProfile.php" class="nav-link"><?php echo $_SESSION['customerFname'];?></a></li>
		<li class="nav-item <?php if($lnk=='logout'){?>active<?php }?>"><a href="<?php echo $actual_link;?>helper/cuslogout/index.php" class="nav-link">Logout</a></li>
	  <?php }elseif(isset($_SESSION['driverId']) && $_SESSION['driverId']!=''){?>
	    <li class="nav-item <?php if($lnk=='driverProfile'){?>active<?php }?>"><a href="<?php echo $actual_link;?>driverProfile.php" class="nav-link"><?php echo $_SESSION['driverFname'];?></a></li>
		<li class="nav-item <?php if($lnk=='logout'){?>active<?php }?>"><a href="<?php echo $actual_link;?>helper/driverlogout/index.php" class="nav-link">Logout</a></li>
	  <?php }else{?>
	  <li class="nav-item <?php if($lnk=='signup'){?>active<?php }?>"><a href="<?php echo $actual_link;?>signup.php" class="nav-link">Signup</a></li>
	  <li class="nav-item <?php if($lnk=='login'){?>active<?php }?>"><a href="<?php echo $actual_link;?>login.php" class="nav-link">Login</a></li>
	  <?php }?>
	</ul>
</div>