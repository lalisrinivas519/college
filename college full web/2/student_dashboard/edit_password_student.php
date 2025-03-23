<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
   <?php include("php_include/head.php")?>
</head>
<body class="body-padding body-p-top light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <?php include("php_include/header.php")?>
    <!-- header end -->

    <!-- profile right sidebar start -->
    <?php include("php_include/sidebar.php")?>
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Edit Password</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>Edit Password</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row g-3">
                            <form action="edit_password_student.php" method="POST" class="new-added-form">
                        <div class="row">
						<input type="hidden" name="userid" value="<?php echo $userid;?>">
                           <div class="col-6 col-12 form-group">
                              <input type="password" placeholder="Old_Password" class="form-control" name="old_password" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="password" placeholder="New_Password" class="form-control" name="new_password" minlength="5" maxlength="12" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="password" placeholder="Confirm_Password" class="form-control" name="confirm_password" style="background-color:#FBE47B;">
                           </div>
                           &nbsp;
                           <div class="col-12 form-group mg-t-8">
                              <button type="submit"  name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                              <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                           </div>
                        </div>
                     </form>
					 <?php 
						if(isset($_POST['submit'])){
							$userid=$_POST['userid'];
							$old=$_POST['old_password'];
							$new=$_POST['new_password'];
							$conform=$_POST['confirm_password'];
							
							$query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
							$row=mysqli_fetch_array($query);
							$old_password=$row['password'];
							if($conform!=$old){
							if($old==$old_password){
								if($new==$conform){
								
								$query=mysqli_query($con,"UPDATE `user` SET `password`='$conform' WHERE `userid`='$userid'");
								if($query){
									echo'<script>alert("Password Change Successful");window.location.assign("edit_password_student.php");</script>';
								}
								}else{
									echo'<script>alert("New Password And Confirm New Password Defferent");window.location.assign("edit_password_student.php");</script>';
								}
							}else{
								echo'<script>alert("Old pasword  Do Not Match");window.location.assign("edit_password_student.php");</script>';
							}
							}else{
								echo'<script>alert("Old pasword and New Password As above Same please add change words Thanku");window.location.assign("edit_password_student.php");</script>';
							}
						}
				   ?>
                        </div>
                    </div>
                </div>
               
            </div>
           
            
            
        </div>

        <!-- footer start -->
        <?php include("php_include/footer.php")?>
        <!-- footer end -->
    </div>
    <!-- main content end -->
    
    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/jquery.uploader.min.js"></script>
    <script src="assets/vendor/js/dropzone.min.js"></script>
    <script src="assets/vendor/js/ckeditor.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dropzone-init.js"></script>
    <!-- for demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }
    </script>
    <!-- for demo purpose -->
</body>

</html>