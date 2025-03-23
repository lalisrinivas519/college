<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>UPDATE PAN</title>
      <?php include('php_include/head.php')?>
   </head>
   <body>
      <?php include("php_include/preloader.php")?>
      <div id="wrapper" class="wrapper bg-ash">
         <?php include('php_include/header.php')?>
         <div class="dashboard-page-one">
            <?php include("php_include/sidebar.php"); ?>
            <div class="dashboard-content-one">
               <div class="breadcrumbs-area">
                  <h3>Student Dashboard</h3>
                  <ul>
                     <li>
                        <a href="index.html">Home</a>
                     </li>
                     <li>Update Pan</li>
                  </ul>
               </div>
               <div class="card height-auto">
                  <div class="card-body" style="width:470px; ">
                     <br>
                     <div class="heading-layout1">
                        <div class="item-title">
                           <h3>UPDATE  PAN</h3>
                        </div>
                     </div>
                     <hr>
                     <br>
                     <?php
                        $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                        $row= mysqli_fetch_array($query);
                        ?>
                     <form action="update_pan.php" method="post" class="new-added-form" enctype="multipart/form-data">
                        <div class="row">
                           <input type="hidden" name="userid" value="<?php echo $userid?>">
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Pan Number" class="form-control" name="pan_no" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-lg-12 col-12 form-group mg-t-30">
                              <?php 
                                 if($row['pan_image']==NULL){
                                   
                                   ?>  
                              <center>    <img src="../images/pan.jpg" style="border-radius:10px; width:200px;"/></center>
                              <?php
                                 }else{
                                     
                                     ?>
                              <center> <img src="kyc/<?php echo $row['pan_image'];?>" style="border-radius:10px; width:200px;height:200px;"></center>
                              <?php
                                 }
                                 ?>
                              <label class="text-dark-medium">Upload Pan Image (150px X 150px)</label>
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
                        $pan_no      =      mysqli_real_escape_string($con,$_POST['pan_no']);
                            $image=$_FILES["image"]["name"];
                         $extensions=array('image/jpg','image/jpeg','image/png');
                            	    $query=mysqli_query($con,"UPDATE `user` SET `pan_no`='$pan_no',`pan_image`='$image' WHERE `userid`='$userid'");
                            	    $newname = $image;  
                                   $target = 'kyc/'.$newname;
                                   move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                            	     if($query){
                            	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_pan.php");</script>';
                            	     }else{
                            	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_pan.php");</script>'; 
                            	     }
                        }
                        ?> 
                  </div>
               </div>
               <?php include('php_include/footer.php')?>
               <br><br><br><br>
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
