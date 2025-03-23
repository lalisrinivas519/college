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
            <h2>Chat With Teacher</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>Chat With Teacher</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row g-3">
                            <form action="chat_with_teacher.php" method="post" class="new-added-form">
                        <div class="row">
                           <input type="hidden" name="userid" value="<?php echo $userid?>">
                           <div class="col-sm-6 form-group">
                              <label>Name</label>
                              <input type="text" placeholder="" class="form-control" name="name" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-sm-6 form-group">
                              <label>Date</label>
                              <input type="date" placeholder="" class="form-control" name="date" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-sm-6 form-group">
                              <label>Subject</label>
                              <input type="text" placeholder="" class="form-control" name="subject" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-sm-6 form-group">
                              <label>Enter Your Message</label>
                              <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                 rows="9" style="background-color:#FBE47B;"></textarea>
                           </div>
                           <br><br>                  
                           <div class="col-12 form-group mg-t-8">
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
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];
                        
                            $query_contact = mysqli_query($con, "INSERT INTO `student_chat`(`userid`, `name`, `date`, `subject`, `message`) 
                                                                  VALUES ('$userid', '$name', '$date', '$subject', '$message')");
                        
                            if($query_contact) {
                                echo "<script>alert('Message Sent successfully'); window.location.assign('chat_with_teacher.php');</script>";
                            } else {
                                echo "<script>alert('Message Not Sent'); window.location.assign('chat_with_teacher.php');</script>";
                            }
                        }
                        ?>
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
    <!-- for demo purpose -->
</body>

</html>