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
                      Chat
                    </li>
                  </ol>
                  <!-- Breadcrumb end -->
                  <h2 class="mb-2">Chat</h2>
                  <h6 class="mb-4 fw-light">
                   
                  </h6>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-6">
                  <!-- Card start -->
                  <div class="card mb-4">
                    <div class="card-header">
                      
                     <br>
                   <form action="chat.php" method="post" class="new-added-form">
                        <div class="row">
                           <input type="hidden" name="userid" value="<?php echo $userid?>">
                           <div class="col-sm-6 form-group">
                              <label>Name</label>
                              <input type="text" placeholder="Name" required class="form-control" name="name" style="background-color:#FBE47B;">
                           </div><br>
                           <div class="col-sm-6 form-group">
                              <label>Date</label>
                              <input type="date" placeholder="Date" required class="form-control" name="date" style="background-color:#FBE47B;">
                           </div><br>
                           <div class="col-sm-6 form-group">
                              <label>Subject</label>
                              <input type="text" placeholder="Subject" required class="form-control" name="subject" style="background-color:#FBE47B;">
							 
                           </div><br><br>
                           <div class="col-sm-6 form-group">
                              <label>Enter Your Message</label>
                              <textarea class="textarea form-control" required name="message" id="form-message" cols="10"
                                 rows="1" style="background-color:#FBE47B;"></textarea>
                           </div>
                           <br><br><br>                 
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
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];
                        
                            $query_contact = mysqli_query($con, "INSERT INTO `admin_chat`(`userid`, `name`, `date`, `subject`, `message`) 
                                                                  VALUES ('$userid', '$name', '$date', '$subject', '$message')");
                        
                            if($query_contact) {
                                echo "<script>alert('Message Sent successfully'); window.location.assign('chat.php');</script>";
                            } else {
                                echo "<script>alert('Message Not Sent'); window.location.assign('chat.php');</script>";
                            }
                        }
                        ?>
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


