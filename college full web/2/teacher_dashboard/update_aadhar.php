<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <?php include("php_include/head.php")?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

       <?php include("php_include/header.php")?>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
       <?php include("php_include/sidebar.php")?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                            <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Update Aadhaar</h5>
                                        </div>

                                        <div class="mt-4">
                                             <?php
                  $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                  $row= mysqli_fetch_array($query);
                  ?>
               <form action="update_aadhar.php" method="post" class="new-added-form" enctype="multipart/form-data">
                  <div class="row">
                     <input type="hidden" name="userid" value="<?php echo $userid?>">
                     <div class="col-6 col-12 form-group">
                        <input type="number" placeholder="Aadhaar Number" required class="form-control" name="adhar_no" style="background-color:#FBE47B;">
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
                        <input type="file" required class="form-control" name="image" style="background-color:#FBE47B;"><br>
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

                                        
                                    </div>
                                </div>
                    

                    
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div><!-- End Page-content -->

<?php include("php_include/footer.php")?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- profile-setting init js -->
    <script src="assets/js/pages/profile-setting.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


</html>