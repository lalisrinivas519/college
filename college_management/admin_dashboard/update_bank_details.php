<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>UPDATE BANK DETAILS</title>
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
                     <li>Update Bank Details</li>
                  </ul>
               </div>
               <div class="card height-auto">
                  <div class="card-body" style="width:470px; ">
                     <br>
                     <div class="heading-layout1">
                        <div class="item-title">
                           <h3>UPDATE  BANK DETAILS</h3>
                        </div>
                     </div>
                     <hr>
                     <br>
                     <?php
                        $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                        $row= mysqli_fetch_array($query);
                        ?>
                     <form action="update_bank_details.php" method="post" class="new-added-form" enctype="multipart/form-data">
                        <div class="row">
                           <input type="hidden" name="userid" value="<?php echo $userid?>">
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Account Number" class="form-control" name="acc_no" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Account Holder Name" class="form-control" name="account_holder_name" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Bank Name" class="form-control" name="bank_name" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="IFSC Code" class="form-control" name="ifsc_code" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Branch Name" class="form-control" name="branch" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-lg-12 col-12 form-group mg-t-30">
                              <?php 
                                 if($row['passbook_image']==NULL){
                                   
                                   ?>  
                              <center><img src="../images/passbook.jpg" style="border: 1px solid #ddd;  border-radius: 4px;  padding: 7px;  width: 200px;"></center>
                              <?php
                                 }else{
                                     
                                     ?>
                              <center> <img src="kyc/<?php echo $row['passbook_image'];?>" style="border-radius:10px; width:200px;height:200px;"></center>
                              <?php
                                 }
                                 ?>
                              <label class="text-dark-medium"> Upload PassBook Image (150px X 150px)</label>
                              <input type="file" class="form-control" name="image" style="background-color:#FBE47B;"><br>
                           </div>
                           <div class="col-lg-12 col-12 form-group mg-t-30">
                              <center><button type="submit" name="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Upload</button></center>
                           </div>
                        </div>
                     </form>
                     <?php
                        if(isset($_POST['submit'])){
                            
                            $userid      =      mysqli_real_escape_string($con,$_POST['userid']);
                        $acc_no      =      mysqli_real_escape_string($con,$_POST['acc_no']);
                        $bank_name      =      mysqli_real_escape_string($con,$_POST['bank_name']);
                        $ifsc_code      =      mysqli_real_escape_string($con,$_POST['ifsc_code']);
                        $branch      =      mysqli_real_escape_string($con,$_POST['branch']);
                        
                        
                            $image=$_FILES["image"]["name"];
                        $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'"); 
                        $row=mysqli_fetch_array($query);
                        
                        $extensions=array('image/jpg','image/jpeg','image/png');
                        
                            	     if($userid!=''){
                        
                        
                        $status='on';
                            	         $query=mysqli_query($con,"UPDATE `user` SET `acc_no`='$acc_no',`bank_name`='$bank_name ',`ifsc_code`='$ifsc_code',`branch`='$branch ',`passbook_image`='$image' WHERE `userid`='$userid '");
                            	    $newname = $image;  
                                   $target = 'kyc/'.$newname;
                                   move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                            	     if($query){
                            	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_bank_details.php");</script>';
                            	     }else{
                            	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_bank_details.php");</script>'; 
                            	     }
                            	     
                            	     }else{
                            	         echo '<script>alert("Please Field All The Field.");window.location.assign("update_bank_details.php");</script>';
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
