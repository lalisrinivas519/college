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
                      Update Aadhaar
                    </li>
                  </ol>
                  <!-- Breadcrumb end -->
                  <h2 class="mb-2">Update Aadhaar</h2>
                  <h6 class="mb-4 fw-light">
                   
                  </h6>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-4">
                  <!-- Card start -->
                  <div class="card mb-4">
                    <div class="card-header">
                      
                     <br>
					 <?php
                  $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                  $row= mysqli_fetch_array($query);
                  ?>
               <form action="update_aadhaar.php" method="post" class="new-added-form" enctype="multipart/form-data">
                  <div class="row">
                     <input type="hidden" name="userid" value="<?php echo $userid?>">
                     <div class="col-6 col-12 form-group">
                        <input type="number" placeholder="Aadhaar Number"  required class="form-control" name="adhar_no" style="background-color:#FBE47B;">
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
                        <input type="file" class="form-control" name="image" required style="background-color:#FBE47B;"><br>
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
                      	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_aadhaar.php");</script>';
                      	     }else{
                      	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_aadhaar.php");</script>'; 
                      	     }
                      	     
                      	     }else{
                      	         echo '<script>alert("Please Field All The Field.");window.location.assign("update_aadhaar.php");</script>';
                      	     }   
                  }
                  ?>
               <?php
                  $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                  $row= mysqli_fetch_array($query);
                  ?>
               <form action="update_aadhaar.php" method="post" class="new-added-form" enctype="multipart/form-data">
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
                      	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_aadhaar.php");</script>';
                      	     }else{
                      	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_aadhaar.php");</script>'; 
                      	     }
                      	     
                      	     }else{
                      	         echo '<script>alert("Please Field All The Field.");window.location.assign("update_aadhaar.php");</script>';
                      	     }   
                  }
                  ?>
					 </div>
                       </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include("php_include/footer.php"); ?>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor Js Files -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/buttons/jszip.min.js"></script>
    <script src="assets/vendor/datatables/buttons/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables/buttons/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables/buttons/buttons.colVis.min.js"></script>

    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>

</html>