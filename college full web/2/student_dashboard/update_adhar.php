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
            <h2>Update Aadhar</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>Update Aadhart</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row g-3">
                          <?php
                  $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                  $row= mysqli_fetch_array($query);
                  ?>
               <form action="update_adhar.php" method="post" class="new-added-form" enctype="multipart/form-data">
                  <div class="row">
                     <input type="hidden" name="userid" value="<?php echo $userid?>">
                     <div class="col-6 col-12 form-group">
                        <input type="text" placeholder="Aadhaar Number" required class="form-control" name="adhar_no" style="background-color:#FBE47B;">
                     </div><br><br><br>
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
                        <input type="file" class="form-control" required name="image" style="background-color:#FBE47B;"><br>
                     </div>
                     <div class="col-lg-12 col-12 form-group mg-t-30">
                        <center><button type="submit" name="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Upload</button></center>
                     </div>
               </form><br><br>
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
                      	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_adhar.php");</script>';
                      	     }else{
                      	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_adhar.php");</script>'; 
                      	     }
                      	     
                      	     }else{
                      	         echo '<script>alert("Please Field All The Field.");window.location.assign("update_adhar.php");</script>';
                      	     }   
                  }
                  ?>
               <?php
                  $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                  $row= mysqli_fetch_array($query);
                  ?>
               <form action="update_adhar.php" method="post" class="new-added-form" enctype="multipart/form-data">
               <div class="row">
               <input type="hidden" name="userid" required value="<?php echo $userid?>">required
               <div class="col-lg-12 col-12 form-group mg-t-30">
                
               <?php 
                  if($row['adhar_back']==NULL){
                    
                    ?>  
               <center><img src="../images/aadhar_back.png" style="border: 1px solid #ddd;  border-radius: 4px;  padding: 8px;  width: 200px;"></center>
               <?php
                  }else{
                      
                      ?>
               <center> <img src="kyc/<?php echo $row['adhar_back'];?>" style="border-radius:10px; width:450px;height:200px;"></center>
               <?php
                  }
                  ?>
               
               <label class="text-dark-medium">Upload Aaadhar Back Image (150px X 150px)</label>
               <input type="file" class="form-control" required name="image" style="background-color:#FBE47B;"><br>
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
                      	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_adhar.php");</script>';
                      	     }else{
                      	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_adhar.php");</script>'; 
                      	     }
                      	     
                      	     }else{
                      	         echo '<script>alert("Please Field All The Field.");window.location.assign("update_adhar.php");</script>';
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