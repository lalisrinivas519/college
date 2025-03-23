<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>TRANSPORTATION DETAILS</title>
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
                     <a href="subject.php">Home</a>
                  </li>
                  <li>Transport</li>
               </ul>
            </div>
            <div class="card height-auto">
               <div class="card-body" >
                  <br>
                  <div class="heading-layout1">
                     <div class="item-title">
                        <h3>TRANSPORT DETAILS</h3>
                     </div>
                     <div class="search">
                     </div>
                  </div>
                  <hr>
                  <br>
                  <div class="table-responsive">
                     <input type="hidden" class="form-control" placeholder="">
                     <table class="table display data-table text-nowrap">
                        <thead>
                           <tr style="background-color:#fd7e14; text-color:white;">
                              <th style="border: 1px solid ;"><font color="white">Sl No</font></th>
                              <th style="border: 1px solid black;"><font color="white">Bus Number</font></th>
                              <th style="border: 1px solid black;"><font color="white">Driver Name</font></th>
                              <th style="border: 1px solid black;"><font color="white">Driver Contact Number</font></th>
                              <th style="border: 1px solid black;"><font color="white">Bus Route</font></th>
                              <th style="border: 1px solid black;"><font color="white">Student Name</font></th>
                              <th style="border: 1px solid black;"><font color="white">Student Contact Number</font></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              include("php_include/connect.php");
                              $query = mysqli_query($con, "SELECT * FROM `transport` WHERE `userid`='$userid'");
                              $slno = 1; // Initialize serial number variable
                              while ($row = mysqli_fetch_array($query)) {
                                  $id = $row["id"];
                                  $bus_no = $row["bus_no"];
                                  $driver_name = $row["driver_name"];
                                  $driver_number = $row["driver_number"];
                                  $route = $row["route"];
                                  $name = $row["name"];
                                  $student_number = $row["student_number"];
                                  echo "<tr>
                                            <td style='border:1px solid black;'>$slno</td>
                                            <td style='border:1px solid black;'>$bus_no</td>	
                                            <td style='border:1px solid black;'>$driver_name</td>
                                            <td style='border:1px solid black;'>$driver_number</td>
                                            <td style='border:1px solid black;'>$route</td>				  
                                            <td style='border:1px solid black;'>$name</td>	
                                            <td style='border:1px solid black;'>$student_number</td>	
                                        </tr>";
                                  $slno++; // Increment serial number
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
