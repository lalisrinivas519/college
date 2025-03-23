<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>UPDATE AADHAAR</title>
      <?php include("php_include/head.php")?> 
   </head>
   <body>
      <!-- Preloader Start Here -->
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
         <div class="breadcrumbs-area">
            <h3>Teacher Dashboard</h3>
            <ul>
               <li>
                  <a href="index.php">Home</a>
               </li>
               <li>Update Aadhaar</li>
            </ul>
         </div>
         <div class="card height-auto">
            <div class="card-body" style="width:470px; ">
               <br>
               <div class="heading-layout1">
                  <div class="item-title"
                  <h3>UPDATE AADHAAR</h3>
               </div>
            </div>
            <hr>
            <br>
            <?php
               $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
               $row= mysqli_fetch_array($query);
               ?>
            <form action="update_aadhar.php" method="post" class="new-added-form" enctype="multipart/form-data">
               <div class="row">
                  <input type="hidden" name="userid" value="<?php echo $userid?>">
                  <div class="col-6 col-12 form-group">
                     <input type="text" placeholder="Aadhaar Number" class="form-control" name="adhar_no" style="background-color:#FBE47B;">
                  </div>
                  <div class="col-lg-12 col-12 form-group mg-t-30">
                     <?php 
                        if($row['adhar_front']==NULL){
                          
                          ?>  
                     <center><img src="../images/aadhar_fron.png" style="border-radius:10px; width:200px;"/></center>
                     <?php
                        }else{
                            
                            ?>
                     <center> <img src="kyc/<?php echo $row['adhar_front'];?>" style="border-radius:10px; width:200px;height:200px;"></center>
                     <?php
                        }
                        ?>
                     <label class="text-dark-medium">Upload Aaadhar Front Image (150px X 150px)</label>
                     <input type="file" class="form-control" name="image" style="background-color:#FBE47B;"><br>
                  </div>
                  <div class="col-lg-12 col-12 form-group mg-t-30">
                     <center><button type="submit" name="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Upload</button></center>
                  </div>
            </form>
            <?php
               if(isset($_POST['submit'])){
                   $adhar_no =      mysqli_real_escape_string($con,$_POST['adhar_no']);
                   $userid      =      mysqli_real_escape_string($con,$_POST['userid']);
               
                   $image=$_FILES["image"]["name"];
               $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'"); 
               $row=mysqli_fetch_array($query);
               
               $extensions=array('image/jpg','image/jpeg','image/png');
               
                   	     if($userid!=''){
               
               
               $status='on';
                   	         $query=mysqli_query($con,"UPDATE `user` SET `adhar_no`='$adhar_no',`adhar_front`='$image' WHERE `userid`='$userid'");
                   	    $newname = $image;  
                          $target = 'kyc/'.$newname;
                          move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                   	     if($query){
                   	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_aadhar.php");</script>';
                   	     }else{
                   	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_aadhar.php");</script>'; 
                   	     }
                   	     
                   	     }else{
                   	         echo '<script>alert("Please Field All The Field.");window.location.assign("update_aadhar.php");</script>';
                   	     }   
               }
               ?>
            <?php
               $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
               $row= mysqli_fetch_array($query);
               ?>
            <form action="update_aadhar.php" method="post" class="new-added-form" enctype="multipart/form-data">
            <div class="row">
            <input type="hidden" name="userid" value="<?php echo $userid?>">
            <div class="col-lg-12 col-12 form-group mg-t-30">
            <?php 
               if($row['adhar_back']==NULL){
                 
                 ?>  
            <center><img src="../images/aadhar_back.png" style="border: 1px solid #ddd;  border-radius: 4px;  padding: 8px;  width: 200px;"></center>
            <?php
               }else{
                   
                   ?>
            <center> <img src="kyc/<?php echo $row['adhar_back'];?>" style="border-radius:10px; width:200px;height:200px;"></center>
            <?php
               }
               ?>
            <label class="text-dark-medium">Upload Aaadhar Back Image (150px X 150px)</label>
            <input type="file" class="form-control" name="image" style="background-color:#FBE47B;"><br>
            </div>
            <div class="col-lg-12 col-12 form-group mg-t-30">
            <center><button type="submit" name="submit2" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Upload</button></center>
            </div>
            </form>
            <?php
               if(isset($_POST['submit2'])){
                   
                   $userid      =      mysqli_real_escape_string($con,$_POST['userid']);
               
                   $image=$_FILES["image"]["name"];
               $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'"); 
               $row=mysqli_fetch_array($query);
               
               $extensions=array('image/jpg','image/jpeg','image/png');
               
                   	     if($userid!=''){
               
               
               $status='on';
                   	         $query=mysqli_query($con,"UPDATE `user` SET `adhar_back`='$image' WHERE `userid`='$userid'");
                   	    $newname = $image;  
                          $target = 'kyc/'.$newname;
                          move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                   	     if($query){
                   	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_aadhar.php");</script>';
                   	     }else{
                   	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_aadhar.php");</script>'; 
                   	     }
                   	     
                   	     }else{
                   	         echo '<script>alert("Please Field All The Field.");window.location.assign("update_aadhar.php");</script>';
                   	     }   
               }
               ?>
            </div>
            <br><br><br><br><br><br><br>
            </div>
         </div>
         <!-- Page Area End Here -->
         <br> <br> <br> <br>
         <?php include("php_include/footer.php")?>
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
