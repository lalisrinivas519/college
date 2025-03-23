<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>EDIT PASSWORD</title>
      <?php include("php_include/head.php")?> 
   </head>
   <body>
      <!-- Preloader Start Here -->
      <?php include("php_include/preloader.php")?>
      <!-- Preloader End Here -->
      <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
         <?php include("php_include/header.php")?>
         <!-- Header Menu Area End Here -->
         <!-- Page Area Start Here -->
         <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include("php_include/sidebar.php")?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
               <!-- Breadcubs Area Start Here -->
               <div class="breadcrumbs-area">
                  <h3>Teacher Dashboard</h3>
                  <ul>
                     <li>
                        <a href="index.php">Home</a>
                     </li>
                     <li>Edit Password</li>
                  </ul>
               </div>
               <div class="card height-auto">
                  <div class="card-body" style="width:425px;">
                     <br>
                     <div class="heading-layout1">
                        <div class="item-title">
                           <h3>EDIT PASSWORD</h3>
                        </div>
                     </div>
                     <hr>
                     <br>
                     <form action="edit_password.php" method="POST" class="new-added-form">
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
                        	$uid=$_POST['userid'];
                        	$old=$_POST['old_password'];
                        	$new=$_POST['new_password'];
                        	$conform=$_POST['confirm_password'];
                        	
                        	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$uid'");
                        	$row=mysqli_fetch_array($query);
                        	$old_password=$row['password'];
                        	if($conform!=$old){
                        	if($old==$old_password){
                        		if($new==$conform){
                        		
                        		$query=mysqli_query($con,"UPDATE `user` SET `password`='$conform' WHERE `userid`='$uid'");
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
               <!-- Dashboard Content End Here -->
               <!-- Social Media Start Here -->
               <!-- Social Media End Here -->
               <!-- Footer Area Start Here -->
               <?php include("php_include/footer.php")?>
               <!-- Footer Area End Here -->
            </div>
         </div>
         <!-- Page Area End Here -->
      </div>
      <!-- jquery-->
      <script src="js/jquery-3.3.1.min.js"></script>
      <!-- Plugins js -->
      <script src="js/plugins.js"></script>
      <!-- Popper js -->
      <script src="js/popper.min.js"></script>
      <!-- Bootstrap js -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Counterup Js -->
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Moment Js -->
      <script src="js/moment.min.js"></script>
      <!-- Waypoints Js -->
      <script src="js/jquery.waypoints.min.js"></script>
      <!-- Scroll Up Js -->
      <script src="js/jquery.scrollUp.min.js"></script>
      <!-- Full Calender Js -->
      <script src="js/fullcalendar.min.js"></script>
      <!-- Chart Js -->
      <script src="js/Chart.min.js"></script>
      <!-- Custom Js -->
      <script src="js/main.js"></script>
   </body>
</html>
