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
            <h2>View Assignments</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>View Assignmentst</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row g-3">
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