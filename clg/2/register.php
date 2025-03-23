<!DOCTYPE html>
<html lang="en">	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
 <?php include("php_include/head.php")?>
	
</head>

<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->
		<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">

		


			<div id="wrapper">

				<!-- HEADER -->
				            <?php include("php_include/header.php")?>
<br><br><br>
	<div class="row">
      <div class="col-md-12">
        <center><h3 class="column-title">Sign Up Here</h3></center>
       <form action="register_process.php" method="post" role="form">
    <div class="error-container"></div>
    <div class="text-center">
        <div style="width: 400px; margin: 0 auto;"> <!-- Centered container with fixed width -->
            <div class="form-group">
                <input class="form-control form-control-name" name="userid" id="userid" placeholder="User ID" type="text" required style="width: 100%; height: 50px; box-shadow: 10px 10px 5px lightblue;">
            </div>
            <div class="form-group">
                <input class="form-control form-control-name" name="name" id="name" placeholder="Name" type="text" required style="width: 100%; height: 50px; box-shadow: 10px 10px 5px lightblue;">
            </div>
            <div class="form-group">
                <input class="form-control form-control-email" name="email" id="email" placeholder="Email" type="email" required style="width: 100%; height: 50px; box-shadow: 10px 10px 5px lightblue;">
            </div>
            <div class="form-group">
                <input class="form-control form-control-number_format" name="mobile" id="mobile" placeholder="Mobile Number" type="tel" required style="width: 100%; height: 50px; box-shadow: 10px 10px 5px lightblue;">
            </div>
            <div class="form-group">
                <input class="form-control form-control-password" name="password" id="password" placeholder="Password" type="password" required style="width: 100%; height: 50px; box-shadow: 10px 10px 5px lightblue;">
            </div>
            <div class="form-group">
                <input class="form-control form-control-password" name="confirm_password" id="confirm_password" placeholder="Re-enter Password" type="password" required style="width: 100%; height: 50px; box-shadow: 10px 10px 5px lightblue;">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary solid blank" type="submit" name="submit" style="width: 120px; border-radius: 20px;">Register</button>
            </div>
        </div>
    </div>
</form>


      </div>
    </div>
	<br><br><br>
	
				            <?php include("php_include/footer.php")?>


			</div><!-- end wrapper -->
		</div><!-- end layout-theme -->


	<!-- SCRIPTS --> 
<script src="assets/js/jquery-migrate-1.2.1.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/js/modernizr.custom.js"></script> 
<script src="assets/js/waypoints.min.js"></script> 
<script src="../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 

<!--THEME--> 
<script  src="assets/plugins/sliderpro/js/jquery.sliderPro.min.js"></script> 
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script> 
<script src="assets/plugins/isotope/jquery.isotope.min.js"></script> 
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
<script src="assets/plugins/datetimepicker/jquery.datetimepicker.js"></script> 
<script src="assets/plugins/jelect/jquery.jelect.js"></script> 
<script src="assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script> 
<script src="assets/js/cssua.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/custom.min.js"></script>


</body>

</html>
