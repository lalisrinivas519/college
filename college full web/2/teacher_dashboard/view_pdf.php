<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <?php include("php_include/head.php")?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

       <?php include("php_include/header.php")?>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
       <?php include("php_include/sidebar.php")?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
 <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">View PDF</h5>
                                        </div>

                                        <div class="mt-4">
                                           <div class="table-responsive">
                        <input type="hidden" name="userid" value="<?php echo $userid?>">
                        <table class="table display data-table text-nowrap">
                           <thead>
                              <tr style="background-color:#fd7e14; text-color:white;">
                                 <th style="border: 1px solid ;"><font color="white">SL NO</font></th>
                                 <th style="border: 1px solid ;"><font color="white">Staff ID</font></th>
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
                                    <a href="kyc/<?php echo $pdf; ?>"> <img src="kyc/<?php echo $pdf; ?>"></a>
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
                    

                    
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div><!-- End Page-content -->

<?php include("php_include/footer.php")?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- profile-setting init js -->
    <script src="assets/js/pages/profile-setting.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


</html>