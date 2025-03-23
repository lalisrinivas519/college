<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>VIEW ASSIGNMENT DETAILS</title>
      <?php include('php_include/head.php')?>
   </head>
   <body>
      <!-- Preloader Start Here -->
      <?php include('php_include/preloader.php')?>
      <!-- Preloader End Here -->
      <div id="wrapper" class="wrapper bg-ash">
      <!-- Header Menu Area Start Here -->
      <?php include('php_include/header.php')?>
      <!-- Header Menu Area End Here -->
      <!-- Page Area Start Here -->
      <div class="dashboard-page-one">
         <!-- Sidebar Area Start Here -->
         <?php include("php_include/sidebar.php"); ?>
         <!-- Sidebar Area End Here -->
         <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
               <h3>Student Dashboard</h3>
               <ul>
                  <li>
                     <a href="student.php">Home</a>
                  </li>
                  <li>View Assignment</li>
               </ul>
            </div>
            <div class="card height-auto">
               <div class="card-body" >
                  <br>
                  <div class="heading-layout1">
                     <div class="item-title">
                        <h3>VIEW ASSIGNMENT</h3>
                     </div>
                     <div class="search">
                     </div>
                  </div>
                  <hr>
                  <br>
                  <div class="table-responsive">
                     <input type="hidden" name="userid" value="<?php echo $userid?>">
                     <table class="table bs-table table-striped table-bordered text-nowrap">
                        <thead>
                           <tr style="background-color:#fd7e14;">
                              <th style="border: 1px solid black; color:white;">Sl.No</th>
                              <th style="border: 1px solid black;color:white;">Staff ID</th>
                              <th style="border: 1px solid black;color:white;">Staff Name</th>
                              <th style="border: 1px solid black;color:white;">Branch</th>
                              <th style="border: 1px solid black;color:white;">Subject</th>
                              <th style="border: 1px solid black;color:white;">View Assignment</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              include("php_include/connect.php");
                              $query = mysqli_query($con, "SELECT * FROM `assignment`");
                              $slno = 1; // Initialize serial number variable
                              while ($row = mysqli_fetch_array($query)) {
                                  $id = $row["id"];
                                  $userid = $row["userid"];
                                  $name = $row["name"];
                                  $branch = $row["branch"];
                                  $subject = $row["subject"];
                                  $assignment = $row["assignment"];
                              ?>
                           <tr>
                              <td style='border:1px solid black;'><?php echo $slno++; ?></td>
                              <td style='border:1px solid black;'><?php echo $userid; ?></td>
                              <td style='border:1px solid black;'><?php echo $name; ?></td>
                              <td style='border:1px solid black;'><?php echo $branch; ?></td>
                              <td style='border:1px solid black;'><?php echo $subject; ?></td>
                              <td style='border:1px solid black;'>
                                 <a href="kyc/<?php echo $assignment; ?>"> <img src="teacher_dashboard/kyc/<?php echo $assignment; ?>"></a>
                              </td>
                           </tr>
                           <?php
                              }
                              ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <br><br><br><br><br><br>
               <!-- Footer Area Start Here -->
               <?php include('php_include/footer.php')?>
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
