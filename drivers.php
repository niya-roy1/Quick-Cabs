<?php
	session_start();
	
	$_SESSION['vNav'] =	'drivers';
	if(!isset($_SESSION['userId']) || (isset($_SESSION['userType']) && $_SESSION['userType']!='Superadmin'))
	{
		echo "<script>window.location='../admin/login.php'</script>";
	}
	if(isset($_GET['page']) & !empty($_GET['page'])){
		$curpage = $_GET['page'];
	}else{
		$curpage = 1;
	}	
	include("../helper/driversList/index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />	
		<title>KUICKCAB Admin</title>
		<meta charset="UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		 
			<meta name="description" content="KUICKCAB" />	
			<!-- Favicon -->
			<link rel="shortcut icon" href="favicon.ico">
			<link rel="icon" href="favicon.ico" type="image/x-icon">
			
			<!-- Toggles CSS -->
			<link href="../vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
			<link href="../vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
			
			<!-- Custom CSS -->
			<link href="../dist/css/custom-style.css" rel="stylesheet" type="text/css">
			<link href="../dist/css/nice-select.css" rel="stylesheet" type="text/css">
			<link href="../dist/css/style.css" rel="stylesheet" type="text/css">
		 
			<link rel="stylesheet" type="text/css" href="../css/jquery.timepicker.css" />  
	</head> 
<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
    
	<!-- Full Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">
	
		<!--Top Nav -->
		<?php include("topnav.php"); ?>
		<!--End top Nav -->
		
		<!--Vertical Nav -->
		<?php include("verticalnav.php"); ?>
		<!--End Vertical Nav -->
		
		<!-- Main Content -->
        <div class="hk-pg-wrapper ">           
            <!-- Container -->
            <div class="container">
                <div class="hk-pg-header ">
					<h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>Drivers</h4>
                </div>
                <!-- Row -->
				 <div style='text-align:right;color:#6f7a7f;;font-style: italic;font-size:13px;'>Change status by clicking on the status icon of the driver</div>
                 <div class="col-xl-12 pa-0">
				
					<div class="form-row justify-content-end mt-3 "></div>
                        <section class="hk-sec-wrapper">    
						      <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="table-responsive">	
											<?php if(sizeof($driverArray)>0){?>
												<table class="table  mb-0 detail-listing">
													<thead>
														<tr>
															<th>First Name</th>  
															<th>Last Name</th>  
															<th>Email</th>
															<th>Phone</th>
															<th>Zipcode</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php for($j=0;$j<sizeof($driverArray);$j++){?>
														<tr>
															<td><?php echo $driverArray[$j]['Driver_FName'];?></td>                                                       
															<td><?php echo $driverArray[$j]['Driver_LName'];?></td>  
															<td><?php echo $driverArray[$j]['Driver_Email'];?></td>
															<td><?php echo $driverArray[$j]['Driver_Phone'];?></td>
															<td><?php echo $driverArray[$j]['Driver_Zip'];?></td>
															<td style='text-align:center;'><?php if($driverArray[$j]['userStatus']==1){?>
																<img src='img/tick.png' width='16px' style='cursor:pointer;' onclick='javascript:changeDrivStatus(2,<?php echo $driverArray[$j]['cust_logID'];?>,"<?php echo $driverArray[$j]['Driver_Email'];?>");'>
															<?php }else{?> 
																<img src='img/cross.png' width='40px' style='cursor:pointer;' onclick='javascript:changeDrivStatus(1,<?php echo $driverArray[$j]['cust_logID'];?>,"<?php echo $driverArray[$j]['Driver_Email'];?>");'>
															<?php }?></td>
															<td>
																<a href="viewDriver.php?i=<?php echo base64_encode($driverArray[$j]['cust_logID'])?>&p=<?php echo $curpage;?>" class="mr-10" data-toggle="tooltip" data-original-title="View"> <i class="ti-layout-media-overlay"></i></a>
																<a href="javascript:deletedriver(<?php echo $driverArray[$j]['cust_logID'];?>);" class="mr-10" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-trash"></i></a>
															</td>
														</tr>
														<?php }?>
													</tbody>
												</table>
												<?php if($totaldriver >= ($perpage+1)){?>
												<nav class="pagination-wrap d-inline-block px-15 mt-30 mb-10 col text-center" aria-label="Page navigation example">
													  <ul class="pagination custom-pagination pagination-filled justify-content-center">
														 <?php if($curpage != $startpage){?>
															<li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage; ?>"><i class="ion ion-ios-arrow-round-back"></i></a></li>
														 <?php }
															for($i=$curpage;$i<=$showingpages;$i++){
																if($i==$curpage){$link='javascript:void(0);';$act='active';}
																else{$link="?page=$i";$act='';}
																?>														 
																<li class="page-item <?php echo $act;?>"><a class="page-link" href="<?php echo $link;?>"><?php echo $i;?></a></li>
														<?php }?>
														 <?php if($curpage != $endpage){?>
														<li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage; ?>">
														<i class="ion ion-ios-arrow-round-forward"></i></a></li>
														 <?php }?>
													</ul>
												</nav>
												<?php }?>
											<?php } else{?>
											<table class="table  mb-0 detail-listing">
													<thead>
														<tr>
															<th>First Name</th>  
															<th>Last Name</th>  
															<th>Email</th>
															<th>Phone</th>
															<th>Zipcode</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
													<tr><td colspan="4" style='text-align:center;'>
														No driver Added
													</td></tr>
													</tbody>
											</table>
											<?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                <!-- End Row -->

            </div>
            <!-- End Container -->
        </div>
        <!-- End Main Content -->
		
	 </div>
    <!-- End Full Wrapper -->
  
	<?php include("includes.php");?>
	
	<!-- JavaScript -->
	
	<script type="text/javascript" src="../js/user.js"></script>

</body>
</html>
