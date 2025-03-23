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
        <center><h3 class="column-title">Login Here</h3></center>
        <form id="contact-form" action="login_process.php" method="post" role="form" style>
          <div class="error-container"></div>
          <center><div>
            <div>
              <div class="form-group">
                
                <input class="form-control form-control-name" name="userid" id="name" placeholder="User ID" type="text" required style="width:400px; height:50px;box-shadow: 10px 10px 5px lightblue;">
              </div>
            </div>
            <div>
              <div class="form-group">
                <input class="form-control form-control-password" name="password" id="password" placeholder="Password" type="password" required style="width:400px;height:50px;box-shadow: 10px 10px 5px lightblue;">
              </div>
            </div>
          </div></center>
          <div class="text-center"><br>
            <button class="btn btn-primary solid blank" name="submit" type="submit" style="width:120px;border-radius:20px;">Login</button>
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
