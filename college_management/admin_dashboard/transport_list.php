<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>VIEW TRANSPORTATION DETAILS</title>
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
                  <li>View Transportation Details</li>
               </ul>
            </div>
            <div class="card height-auto">
               <div class="card-body" >
                  <br>
                  <div class="heading-layout1">
                     <div class="item-title">
                        <h3>VIEW TRANSPORT DETAILS</h3>
                     </div>
                  </div>
                  <hr>
                  <br>
                  <div class="table-responsive">
                     <table class="table display data-table text-nowrap">
                        <thead>
                           <tr style="background-color:#fd7e14; text-color:white;">
                              <th style="border: 1px solid ;"><font color="white"> Sl No</font></th>
                              <th style="border: 1px solid black;"><font color="white">Bus Number </font></th>
                              <th style="border: 1px solid black;"><font color="white"> Driver Name</font></th>
                              <th style="border: 1px solid black;"><font color="white"> Driver Contact Number</font></th>
                              <th style="border: 1px solid black;"><font color="white"> Bus Route</font></th>
                              <th style="border: 1px solid black;"><font color="white"> Student Name</font></th>
                              <th style="border: 1px solid black;"><font color="white"> Student Contact Number</font></th>
                           </tr>
                        </thead>
                        <?php
                           include("php_include/connect.php");
                           $query = mysqli_query($con, "SELECT * FROM `transport`");
                           $counter = 1; // Initialize counter variable
                           while ($row = mysqli_fetch_array($query)) {
                               $id = $row["id"];
                               $bus_no = $row["bus_no"];
                               $driver_name = $row["driver_name"];
                               $driver_number = $row["driver_number"];
                               $route = $row["route"];
                               $name = $row["name"];
                               $student_number = $row["student_number"];
                           ?>
                        <tr>
                           <td style='border:1px solid black;'><?php echo $counter; ?></td>
                           <!-- Serial number -->
                           <td style='border:1px solid black;'><?php echo $bus_no; ?></td>
                           <td style='border:1px solid black;'><?php echo $driver_name; ?></td>
                           <td style='border:1px solid black;'><?php echo $driver_number; ?></td>
                           <td style='border:1px solid black;'><?php echo $route; ?></td>
                           <td style='border:1px solid black;'><?php echo $name; ?></td>
                           <td style='border:1px solid black;'><?php echo $student_number; ?></td>
                        </tr>
                        <?php
                           $counter++; // Increment counter for the next row
                           }
                           ?>
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
