<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>EDIT PASSWORD</title>
      <?php include("php_include/head.php");?>
   </head>
   <body>
      <?php include("php_include/preloader.php");?>
      <div id="wrapper" class="wrapper bg-ash">
         <?php include("php_include/header.php");?>
         <div class="dashboard-page-one">
            <?php include("php_include/sidebar.php");?>
            <div class="dashboard-content-one">
               <div class="breadcrumbs-area">
                  <h3>Admin Dashboard </h3>
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
                           <h3>EDIT LOGIN PASSWORD</h3>
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
               <?php include("php_include/footer.php")?>
            </div>
         </div>
      </div>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/moment.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/fullcalendar.min.js"></script>
      <script src="js/Chart.min.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>
