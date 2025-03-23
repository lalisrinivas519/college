<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>CHAT WITH ADMIN</title>
      <?php include("php_include/head.php")?> 
   </head>
   <body>
      <!-- Preloader Start Here -->
      <?php include("php_include/preloader.php")?>
      <!-- Preloader End Here -->
      <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
         <?php include("php_include/header.php")?>
         <!-- Header Menu Area End Here -->
         <!-- Page Area Start Here -->
         <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include("php_include/sidebar.php")?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
               <!-- Breadcubs Area Start Here -->
               <div class="breadcrumbs-area">
                  <h3>Teacher Dashboard</h3>
                  <ul>
                     <li>
                        <a href="index.php">Home</a>
                     </li>
                     <li>Chat </li>
                  </ul>
               </div>
               <div class="card height-auto">
                  <div class="card-body" >
                     <br>
                     <div class="heading-layout1">
                        <div class="item-title">
                           <h3>CHAT WITH ADMIN</h3>
                        </div>
                     </div>
                     <hr>
                     <br>
                     <form action="chat_with_admin.php" method="post" class="new-added-form">
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
                              <label>Chat With</label>
                              <select id="country" name="chat_with" class="form-control" style="background-color:#FBE47B;">
                                 <option value="">---- Select Chat With---- </option>
                                 <option value="Admin">Admin</option>
                                 <option value="Student">Student</option>
                              </select>
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
               <!-- Dashboard Content End Here -->
               <!-- Social Media Start Here -->
               <!-- Social Media End Here -->
               <!-- Footer Area Start Here -->
               <?php include("php_include/footer.php")?>
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
