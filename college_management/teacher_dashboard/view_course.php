<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>VIEW COURSE DETAILS</title>
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
               <h3>Teacher Dashboard </h3>
               <ul>
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>View Course Details</li>
               </ul>
            </div>
            <div class="card height-auto">
               <div class="card-body" >
                  <br>
                  <div class="heading-layout1">
                     <div class="item-title">
                        <h3>VIEW COURSE DETAILS</h3>
                     </div>
                  </div>
                  <hr>
                  <br>
                  <div class="table-responsive">
                     <table class="table display data-table text-nowrap">
                        <thead>
                           <tr style="background-color:#fd7e14; text-color:white;">
                              <th style="border: 1px solid ;"><font color="white">Sl No</font></th>
                              <th style="border: 1px solid black;"><font color="white">Course Code</font></th>
                              <th style="border: 1px solid black;"><font color="white">Course Name</font></th>
                              <th style="border: 1px solid black;"><font color="white">Course Details</font></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              include("php_include/connect.php");
                              $query = mysqli_query($con, "SELECT * FROM `courses`");
                              $slno = 1; // Initialize serial number variable
                              while ($row = mysqli_fetch_array($query)) {
                                  $id = $row["id"];
                                  $course_code = $row["course_code"];
                                  $course_name = $row["course_name"];
                                  $course_details = $row["course_details"];
                              ?>
                           <tr>
                              <td style='border:1px solid black;'><?php echo $slno++; ?></td>
                              <td style='border:1px solid black;'><?php echo $course_code; ?></td>
                              <td style='border:1px solid black;'><?php echo $course_name; ?></td>
                              <td style='border:1px solid black;'>
                                 <a href="kyc/<?php echo $course_details; ?>"> <img src="kyc/<?php echo $course_details; ?>"></a>
                              </td>
                           </tr>
                           <?php
                              }
                              ?>
                        </tbody>
                     </table>
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
