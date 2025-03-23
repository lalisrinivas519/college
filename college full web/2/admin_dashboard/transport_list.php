<!DOCTYPE html>
<html lang="en">

  
<head>
    <?php include("php_include/head.php")?>
  </head>

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand px-3 py-2 d-flex align-items-center">
            <a href="index.php">
              <img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
            </a>
          </div>
          <!-- App brand ends -->

          <!-- Sidebar menu starts -->
           <?php include("php_include/sidebar.php")?>
          <!-- Sidebar menu ends -->

        </nav>
        <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container">

        <?php include("php_include/header.php")?>
          <!-- App header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Container starts -->
            <div class="container-fluid">

              <!-- Row start -->
              <div class="row">
                <div class="col-12 col-xl-12">
                  <!-- Breadcrumb start -->
                  <ol class="breadcrumb mb-1">
                    <li>
                      <a href="index.php"><b>Home</b></a>
                    </li><br>
                    <li>
                       Transport List
                    </li>
                  </ol>
                  <!-- Breadcrumb end -->
                  <h2 class="mb-2"> Transport List</h2>
                  <h6 class="mb-4 fw-light">
                   
                  </h6>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-12">
                  <!-- Card start -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <hr>
                     <br>
                     <br>
                     <div class="table-responsive">
                     <table class="table display data-table text-nowrap">
                        <thead>
                           <tr style="background-color:#fd7e14; text-color:black;">
                              <th style="border: 1px solid ;"><font color="black"> Sl No</font></th>
                              <th style="border: 1px solid black;"><font color="black">Bus Number </font></th>
                              <th style="border: 1px solid black;"><font color="black"> Driver Name</font></th>
                              <th style="border: 1px solid black;"><font color="black"> Driver Contact Number</font></th>
                              <th style="border: 1px solid black;"><font color="black"> Bus Route</font></th>
                              <th style="border: 1px solid black;"><font color="black"> Student Name</font></th>
                              <th style="border: 1px solid black;"><font color="black"> Student Contact Number</font></th>
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
                   
                  </div>
                  <!-- Card end -->

                  <!-- Card start -->
                  
                  <!-- Card end -->
                </div>
              </div>
              <!-- Row end -->

            </div>
            <!-- Container ends -->

          </div>
          <!-- App body ends -->

          <!-- App footer start -->
         <?php include("php_include/footer.php")?>
          <!-- App footer end -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Data Tables -->
    <script src="assets/vendor/datatables/dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables/custom/custom-datatables.js"></script>
    <!-- DataTable Buttons -->
    <script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/buttons/jszip.min.js"></script>
    <script src="assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/buttons/pdfmake.min.js"></script>
    <script src="assets/vendor/datatables/buttons/vfs_fonts.js"></script>
    <script src="assets/vendor/datatables/buttons/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables/buttons/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables/buttons/buttons.colVis.min.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
	
      
  </body>


</html>


