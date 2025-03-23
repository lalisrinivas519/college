<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>VIEW BOOKS DETAILS</title>
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
                  </div>
                  <hr>
                  <br>
                  <div class="table-responsive">
                     <table class="table display data-table text-nowrap">
                        <thead>
                           <tr style="background-color:#fd7e14; text-color:white;">
                              <th style="border: 1px solid ;"><font color="white"> Sl No</font></th>
                              <th style="border: 1px solid ;"><font color="white"> Admin ID</font></th>
                              <th style="border: 1px solid black;"><font color="white">Book Number </font></th>
                              <th style="border: 1px solid black;"><font color="white"> Book Name</font></th>
                              <th style="border: 1px solid black;"><font color="white"> Author Name</font></th>
                              <th style="border: 1px solid black;"><font color="white"> Date</font></th>
                           </tr>
                        </thead>
                        <?php
                           include("php_include/connect.php");
                           $query = mysqli_query($con, "SELECT * FROM `library`");
                           $counter = 1; // Initialize counter variable
                           while ($row = mysqli_fetch_array($query)) {
                               $id = $row["id"];
                               $userid = $row["userid"];
                               $book_no = $row["book_no"];
                               $book_name = $row["book_name"];
                               $author_name = $row["author_name"];
                               $date = $row["date"];
                           ?>
                        <tr>
                           <td style='border:1px solid black;'><?php echo $counter; ?></td>
                           <!-- Serial number -->
                           <td style='border:1px solid black;'><?php echo $userid; ?></td>
                           <td style='border:1px solid black;'><?php echo $book_no; ?></td>
                           <td style='border:1px solid black;'><?php echo $book_name; ?></td>
                           <td style='border:1px solid black;'><?php echo $author_name; ?></td>
                           <td style='border:1px solid black;'><?php echo $date; ?></td>
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
