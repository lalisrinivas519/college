<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>VIEW BOOKS DETAILS</title>
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
                  <li>View Books Details</li>
               </ul>
            </div>
            <div class="card height-auto">
               <div class="card-body" >
                  <br>
                  <div class="heading-layout1">
                     <div class="item-title">
                        <h3>VIEW BOOKS DETAILS</h3>
                     </div>
                     <div class="search">
                     </div>
                  </div>
                  <hr>
                  <br>
                  <div class="table-responsive">
                     <table class="table display data-table text-nowrap">
                        <thead>
                           <tr style="background-color:#fd7e14; text-color:white;">
                              <th style="border: 1px solid;"><font color="white">Sl No</font></th>
                              <th style="border: 1px solid black;"><font color="white">Book Number</font></th>
                              <th style="border: 1px solid black;"><font color="white">Book Name</font></th>
                              <th style="border: 1px solid black;"><font color="white">Author Name</font></th>
                              <th style="border: 1px solid black;"><font color="white">Date</font></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              include("php_include/connect.php");
                              $query = mysqli_query($con, "SELECT * FROM `library`");
                              $slno = 1; // Initialize serial number variable
                              while ($row = mysqli_fetch_array($query)) {
                                  $id = $row["id"];
                                  $book_no = $row["book_no"];
                                  $book_name = $row["book_name"];
                                  $author_name = $row["author_name"];
                                  $date = $row["date"];
                                  echo "<tr>
                                            <td style='border:1px solid black;'>$slno</td>
                                            <td style='border:1px solid black;'>$book_no</td>
                                            <td style='border:1px solid black;'>$book_name</td>					  
                                            <td style='border:1px solid black;'>$author_name</td>	
                                            <td style='border:1px solid black;'>$date</td>	
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
