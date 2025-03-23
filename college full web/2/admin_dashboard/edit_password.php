<!DOCTYPE html>
<html lang="en">

  
<head>
    <?php include("php_include/head.php")?>
  </head>

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand px-3 py-2 d-flex align-items-center">
            <a href="index.php">
              <img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
            </a>
          </div>
          <!-- App brand ends -->

          <!-- Sidebar menu starts -->
           <?php include("php_include/sidebar.php")?>
          <!-- Sidebar menu ends -->

        </nav>
        <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container">

        <?php include("php_include/header.php")?>
          <!-- App header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Container starts -->
            <div class="container-fluid">

              <!-- Row start -->
              <div class="row">
                <div class="col-12 col-xl-12">
                  <!-- Breadcrumb start -->
                  <ol class="breadcrumb mb-1">
                    <li>
                      <a href="index.php"><b>Home</b></a>
                    </li><br>
                    <li>
                      Update Password
                    </li>
                  </ol>
                  <!-- Breadcrumb end -->
                  <h2 class="mb-2">Update Password</h2>
                  <h6 class="mb-4 fw-light">
                   
                  </h6>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-6">
                  <!-- Card start -->
                  <div class="card mb-4">
                    <div class="card-header">
                     
                     <br>
					 <center>
                     <form action="edit_password.php" method="POST" style="width:350px;" class="new-added-form">
                        <div class="row">
                           <input type="hidden" name="userid" value="<?php echo $userid;?>">
                           <div class="col-6 col-12 form-group">
                              <input type="password" placeholder="Old_Password" class="form-control" required name="old_password" style="background-color:#FBE47B;">
                           </div><br><br>
                           <div class="col-6 col-12 form-group">
                              <input type="password" placeholder="New_Password" class="form-control"  required name="new_password" minlength="5" maxlength="12" style="background-color:#FBE47B;">
                           </div><br><br>
                           <div class="col-6 col-12 form-group">
                              <input type="password" placeholder="Confirm_Password" class="form-control"  required name="confirm_password" style="background-color:#FBE47B;">
                           </div><br>
                           &nbsp;
                           <div class="col-12 form-group mg-t-8" align="center">
                              <button type="submit"  name="submit" class="" style="background-color:#FBE47B;">Save</button>
                              
                           </div>
                        </div>
                     </form>
					 </center>
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
                        			echo'<script>alert("Password Change Successful");window.location.assign("edit_password.php");</script>';
                        		}
                        		}else{
                        			echo'<script>alert("New Password And Confirm New Password Defferent");window.location.assign("edit_password.php");</script>';
                        		}
                        	}else{
                        		echo'<script>alert("Old pasword  Do Not Match");window.location.assign("edit_password.php");</script>';
                        	}
                        	}else{
                        		echo'<script>alert("Old pasword and New Password As above Same please add change words Thanku");window.location.assign("edit_password.php");</script>';
                        	}
                        }
                         ?>
                    </div>
                   
                  </div>
                  <!-- Card end -->

                  <!-- Card start -->
                  
                  <!-- Card end -->
                </div>
              </div>
              <!-- Row end -->

            </div>
            <!-- Container ends -->

          </div>
          <!-- App body ends -->

          <!-- App footer start -->
         <?php include("php_include/footer.php")?>
          <!-- App footer end -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Data Tables -->
    <script src="assets/vendor/datatables/dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables/custom/custom-datatables.js"></script>
    <!-- DataTable Buttons -->
    <script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/buttons/jszip.min.js"></script>
    <script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/buttons/pdfmake.min.js"></script>
    <script src="assets/vendor/datatables/buttons/vfs_fonts.js"></script>
    <script src="assets/vendor/datatables/buttons/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables/buttons/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables/buttons/buttons.colVis.min.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
	
      
  </body>


</html>


