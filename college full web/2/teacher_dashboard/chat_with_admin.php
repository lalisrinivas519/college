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
                                            <h5 class="text-primary">Chat With Admin</h5>
                                        </div>

                                        <div class="mt-4">
                                              <form action="chat_with_admin.php" method="post" class="new-added-form">
                        <div class="row">
                           <input type="hidden" name="userid" value="<?php echo $userid?>">
                           <div class="col-sm-6 form-group">
                              <label>Name</label>
                              <input type="text" placeholder="name" class="form-control" required name="name" style="background-color:#FBE47B;">
                           </div> <br><br> 
                           <div class="col-sm-6 form-group">
                              <label>Date</label>
                              <input type="date" placeholder="date" class="form-control" required name="date" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-sm-6 form-group">
                              <label>Chat With</label>
                              <select id="country" name="chat_with" class="form-control" required style="background-color:#FBE47B;">
                                 <option value="">---- Select Chat With---- </option>
                                 <option value="Admin">Admin</option>
                                 <option value="Student">Student</option>
                              </select>
                           </div>
                           <div class="col-sm-6 form-group">
                              <label>Subject</label>
                              <input type="text" placeholder="subject" class="form-control" required name="subject" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-sm-6 form-group">
                              <label>Enter Your Message</label>
                              <textarea class="textarea form-control" name="message" required id="form-message" cols="10"
                                 rows="1" style="background-color:#FBE47B;"></textarea>
                           </div>
                           <br><br><br><br>                  
                           <div class="col-12 form-group mg-t-8" align="center">
                              <button type="submit" name="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Submit</button>
                           </div>
                        </div>
                     </form>
                     <?php
                        include("php_include/connect.php");
                        
                        if(isset($_POST['submit'])) {
                            $userid = $_POST['userid'];
                            $name = $_POST['name'];
                            $date = $_POST['date'];
							$chat_with = $_POST['chat_with'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];
                        
                            $query_contact = mysqli_query($con, "INSERT INTO `teacher_chat`(`userid`, `name`, `date`, `chat_with`, `subject`, `message`) 
                                                                  VALUES ('$userid', '$name', '$date', '$chat_with', '$subject', '$message')");
                        
                            if($query_contact) {
                                echo "<script>alert('Message Sent successfully'); window.location.assign('chat_with_admin.php');</script>";
                            } else {
                                echo "<script>alert('Message Not Sent'); window.location.assign('chat_with_admin.php');</script>";
                            }
                        }
                        ?>
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
	<style>
         /* Style for the file upload container */
         .file-upload-container {
         border: 5px dashed #ccc;
         padding: 40px;
         width:300px;
         background-color:white;
         text-align: center;
         cursor: pointer;
         }
         /* Style for the hidden file input */
         #fileInput {
         display: none;
         }
         /* Style for the file upload text */
         #fileUploadText {
         color: #888;
         }
         #button{
         width: 65px;
         height: 65px;
         background-color: rgba(255, 106, 89, 0.1);
         border-radius: 50%;
         }
         #button:hover{
         background-color:rgba(76, 188, 154, 0.1);
         }
         /* Style for the selected file name display */
         #selectedFileName {
         font-weight: bold;
         margin-top: 5px;
         }
         #plus{
         width:50px;
         height:50px;
         }
      </style>
</body>


</html>