<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>VIEW EMPLOYEE DETAILS</title>
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
                  <li>View Employee Details</li>
               </ul>
            </div>
            <div class="card height-auto">
               <div class="card-body" >
                  <br>
                  <div class="heading-layout1">
                     <div class="item-title">
                        <h3>VIEW EMPLOYEE DETAILS</h3>
                     </div>
                  </div>
                  <hr>
                  <br>
                  <div class="table-responsive">
                     <table class="table display data-table text-nowrap">
                        <thead>
                           <tr style="background-color:#fd7e14; text-color:white;">
                              <th style="border: 1px solid ;"><font color="white"> Sl No</font></th>
                              <th style="border: 1px solid black;"><font color="white">User ID </font></th>
                              <th style="border: 1px solid black;"><font color="white">Name </font></th>
                              <th style="border: 1px solid black;"><font color="white">Email </font></th>
                              <th style="border: 1px solid black;"><font color="white">Mobile</font></th>
                              <th style="border: 1px solid black;"><font color="white">Gender </font></th>
                              <th style="border: 1px solid ;"><font color="white">DOB </font></th>
                              <th style="border: 1px solid black;"><font color="white">Age </font></th>
                              <th style="border: 1px solid ;"><font color="white">Joining Date </font></th>
                              <th style="border: 1px solid black;"><font color="white">Blood Group </font></th>
                              <th style="border: 1px solid black;"><font color="white"> Religion</font></th>
                              <th style="border: 1px solid black;"><font color="white">Caste </font></th>
                              <th style="border: 1px solid black;"><font color="white">Address</font></th>
                              <th style="border: 1px solid black;"><font color="white"> Country </font></th>
                              <th style="border: 1px solid black;"><font color="white">State </font></th>
                              <th style="border: 1px solid black;"><font color="white">District </font></th>
                              <th style="border: 1px solid black;"><font color="white">Pincode</font></th>
                           </tr>
                        </thead>
                        <?php
                           include("php_include/connect.php");
                           $query = mysqli_query($con, "SELECT * FROM `user` WHERE `position`='teacher'");
                           $counter = 1; // Initialize counter variable
                           while ($row = mysqli_fetch_array($query)) {
                               $id = $row["id"];
                               $userid = $row["userid"];
                               $name = $row["name"];
                               $email = $row["email"];
                               $mobile  = $row["mobile"];
                               $gender  = $row["gender"];
                               $dob  = $row["dob"];
                               $age  = $row["age"];
                               $join_date = $row["join_date"];
                               $bloodgroup  = $row["bloodgroup"];
                               $religion = $row["religion"];
                               $caste = $row["caste"];
                               $address = $row["address"];
                               $country  = $row["country"];
                               $state  = $row["state"];
                               $district  = $row["district"];
                               $pincode = $row["pincode"];
                           ?>
                        <tr>
                           <td style='border:1px solid black;'><?php echo $counter; ?></td>
                           <!-- Serial number -->
                           <td style='border:1px solid black;'><?php echo $userid; ?></td>
                           <td style='border:1px solid black;'><?php echo $name; ?></td>
                           <td style='border:1px solid black;'><?php echo $email; ?></td>
                           <td style='border:1px solid black;'><?php echo $mobile; ?></td>
                           <td style='border:1px solid black;'><?php echo $gender; ?></td>
                           <td style='border:1px solid black;'><?php echo $dob; ?></td>
                           <td style='border:1px solid black;'><?php echo $age; ?></td>
                           <td style='border:1px solid black;'><?php echo $join_date; ?></td>
                           <td style='border:1px solid black;'><?php echo $bloodgroup; ?></td>
                           <td style='border:1px solid black;'><?php echo $religion; ?></td>
                           <td style='border:1px solid black;'><?php echo $caste; ?></td>
                           <td style='border:1px solid black;'><?php echo $address; ?></td>
                           <td style='border:1px solid black;'><?php echo $country; ?></td>
                           <td style='border:1px solid black;'><?php echo $state; ?></td>
                           <td style='border:1px solid black;'><?php echo $district; ?></td>
                           <td style='border:1px solid black;'><?php echo $pincode; ?></td>
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
