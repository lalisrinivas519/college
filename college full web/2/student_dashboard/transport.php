<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
   <?php include("php_include/head.php")?>
</head>
<body class="body-padding body-p-top light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <?php include("php_include/header.php")?>
    <!-- header end -->

    <!-- profile right sidebar start -->
    <?php include("php_include/sidebar.php")?>
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Transport Details</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>Transport Details</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row g-3">
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
                    </div>
                </div>
               
            </div>
           
            
            
        </div>

        <!-- footer start -->
        <?php include("php_include/footer.php")?>
        <!-- footer end -->
    </div>
    <!-- main content end -->
    
    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/jquery.uploader.min.js"></script>
    <script src="assets/vendor/js/dropzone.min.js"></script>
    <script src="assets/vendor/js/ckeditor.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dropzone-init.js"></script>
    <!-- for demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }
    </script>
    <!-- for demo purpose -->
</body>

</html>