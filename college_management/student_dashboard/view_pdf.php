<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>VIEW NOTES DETAILS</title>
      <?php include('php_include/head.php')?>
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
            <?php include("php_include/sidebar.php"); ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
               <!-- Breadcubs Area Start Here -->
               <div class="breadcrumbs-area">
                  <h3>Student Dashboard</h3>
                  <ul>
                     <li>
                        <a href="index.php">Home</a>
                     </li>
                     <li>View Upload Pdf</li>
                  </ul>
               </div>
               <!-- Breadcubs Area End Here -->
               <div class="card height-auto">
                  <div class="card-body" >
                     <div class="heading-layout1">
                        <div class="item-title">
                           <h3>VIEW UPLOAD PDF</h3>
                        </div>
                     </div>
                     <hr>
                     <div class="table-responsive">
                        <input type="hidden" name="userid" value="<?php echo $userid?>">
                        <table class="table display data-table text-nowrap">
                           <thead>
                              <tr style="background-color:#fd7e14; text-color:white;">
                                 <th style="border: 1px solid;"><font color="white">SL NO</font></th>
                                 <th style="border: 1px solid;"><font color="white">Staff ID</font></th>
                                 <th style="border: 1px solid black;"><font color="white">Name</font></th>
                                 <th style="border: 1px solid black;"><font color="white">Branch</font></th>
                                 <th style="border: 1px solid black;"><font color="white">Subject</font></th>
                                 <th style="border: 1px solid black;"><font color="white">Notes</font></th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 include("php_include/connect.php");
                                 $query = mysqli_query($con, "SELECT * FROM `pdf`");
                                 $slno = 1; // Initialize serial number variable
                                 while ($row = mysqli_fetch_array($query)) {
                                     $id = $row["id"];
                                     $userid = $row["userid"];
                                     $name = $row["name"];
                                     $branch = $row["branch"];
                                     $subject = $row["subject"];
                                     $pdf = $row["pdf"];
                                 ?>
                              <tr>
                                 <td style='border:1px solid black;'><?php echo $slno++; ?></td>
                                 <td style='border:1px solid black;'><?php echo $userid; ?></td>
                                 <td style='border:1px solid black;'><?php echo $name; ?></td>
                                 <td style='border:1px solid black;'><?php echo $branch; ?></td>
                                 <td style='border:1px solid black;'><?php echo $subject; ?></td>
                                 <td style='border:1px solid black;'>
                                    <a href="kyc/<?php echo $pdf; ?>"> <img src="teacher_dashboard/kyc/<?php echo $pdf; ?>"></a>
                                 </td>
                              </tr>
                              <?php
                                 }
                                 ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
               <!-- Footer Area Start Here -->
               <footer>
                  <?php include('php_include/footer.php')?>
               </footer>
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
