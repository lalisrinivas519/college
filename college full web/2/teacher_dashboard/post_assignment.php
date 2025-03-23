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
                                            <h5 class="text-primary">Upload Assignment</h5>
                                        </div>

                                        <div class="mt-4">
                                            <?php
                        $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                        $row= mysqli_fetch_array($query);
                        ?>
                     <form action="post_assignment.php" method="post" class="new-added-form" enctype="multipart/form-data">
                        <div class="row">
                           <input type="hidden" name="userid" value="<?php echo $userid ?>">
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Staff Name" required class="form-control" name="name" style="background-color:#FBE47B;">
                           </div>
						   <div class="col-6 col-12 form-group">
                              <select id="branch" name="branch" required class="form-control" style="background-color:#FBE47B;">
                                 <option value="">---- Select Branch---- </option>
                                 <option value="BBA">BBA</option>
                                 <option value="BCA">BCA</option>
                                 <option value="BSC">BSC</option>
								 </select>
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Subject" required class="form-control" name="subject" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-lg-12 col-12 form-group mg-t-30">
                              <label class="text-dark-medium">Upload Assignment</label>
                              <input type="file" class="form-control" required name="file" style="background-color:#FBE47B;"><br>
                           </div>
                           <div class="col-lg-12 col-12 form-group mg-t-30" align="center">
                              <center><button type="submit" name="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Upload</button></center>
                           </div>
                        </div>
                     </form>
                     <?php
                        include("php_include/connect.php");
                        
                        if(isset($_POST['submit'])){
                            $userid = mysqli_real_escape_string($con, $_POST['userid']);
                            $name = mysqli_real_escape_string($con, $_POST['name']);
                            $branch = mysqli_real_escape_string($con, $_POST['branch']);
							$subject = mysqli_real_escape_string($con, $_POST['subject']);
                            $file = $_FILES["file"]["name"];
                            $file_tmp = $_FILES["file"]["tmp_name"];
                            
                            // Check if file type is valid
                            $allowed_extensions = array('pdf', 'docx');
                            $file_extension = pathinfo($file, PATHINFO_EXTENSION);
                            
                            if(in_array($file_extension, $allowed_extensions)){
                                // Move the uploaded file to a target directory
                                $target = 'kyc/' . $file;
                                
                                if(move_uploaded_file($file_tmp, $target)){
                                    // Update the database
                                    $query = mysqli_query($con, "INSERT INTO `assignment`(`userid`, `name`, `branch`, `subject`, `assignment`) 
									VALUES ('$userid','$name','$branch','$subject','$file')");
                                    
                                    if($query){
                                        echo '<script>alert("Inserted Successfully");window.location.assign("post_assignment.php");</script>';
                                    } else{
                                        $error_message = mysqli_error($con);
                                        echo '<script>alert("Inserted Unsuccessfully: ' . $error_message . '");window.location.assign("post_assignment.php");</script>'; 
                                    }
                                } else {
                                    echo '<script>alert("Error uploading file.");window.location.assign("post_assignment.php");</script>';
                                }
                            } else {
                                echo '<script>alert("Invalid file type. Please upload a PDF or DOCX file.");window.location.assign("post_assignment.php");</script>';
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
	<script>
         function subjects() {
               var container = document.getElementById("subjects");
               var newInput = document.createElement("div");
               newInput.classList.add("subjects");
               newInput.innerHTML = '<input type="text" name="subjects[]" class="form-control" style="background-color:#white;" required>' +
                   '<button type="button" class="btn btn-danger" onclick="removesubjects(this)">-</button>';
               container.appendChild(newInput);
           }
         
           function removesubjects(element) {
               var container = document.getElementById("subjects");
               container.removeChild(element.parentNode);
           }
         function sub_teachers() {
               var container = document.getElementById("sub_teachers");
               var newInput = document.createElement("div");
               newInput.classList.add("sub_teachers");
               newInput.innerHTML = '<input type="text" name="sub_teachers[]" class="form-control" style="background-color:#white;" required>' +
                   '<button type="button" class="btn btn-danger" onclick="removesub_teachers(this)">-</button>';
               container.appendChild(newInput);
           }
         
           function removesub_teachers(element) {
               var container = document.getElementById("sub_teachers");
               container.removeChild(element.parentNode);
           }
      </script>
</body>


</html>