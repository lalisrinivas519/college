<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>UPLOAD ASSIGNMENT</title>
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
                  <h3>Teacher Dashboard </h3>
                  <ul>
                     <li>
                        <a href="index.php">Home</a>
                     </li>
                     <li>UPLOAD ASSIGNMENT</li>
                  </ul>
               </div>
               <div class="card height-auto">
                  <div class="card-body" style="width:470px; ">
                     <br>
                     <div class="heading-layout1">
                        <div class="item-title">
                           <h3>UPLOAD ASSIGNMENT</h3>
                        </div>
                     </div>
                     <hr>
                     <br>
                     <?php
                        $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                        $row= mysqli_fetch_array($query);
                        ?>
                     <form action="post_assignment.php" method="post" class="new-added-form" enctype="multipart/form-data">
                        <div class="row">
                           <input type="hidden" name="userid" value="<?php echo $userid ?>">
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Staff Name" class="form-control" name="name" style="background-color:#FBE47B;">
                           </div>
						   <div class="col-6 col-12 form-group">
                              <select id="branch" name="branch" class="form-control" style="background-color:#FBE47B;">
                                 <option value="">---- Select Branch---- </option>
                                 <option value="BBA">BBA</option>
                                 <option value="BCA">BCA</option>
                                 <option value="BSC">BSC</option>
								 </select>
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Subject" class="form-control" name="subject" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-lg-12 col-12 form-group mg-t-30">
                              <label class="text-dark-medium">Upload Assignment</label>
                              <input type="file" class="form-control" name="file" style="background-color:#FBE47B;"><br>
                           </div>
                           <div class="col-lg-12 col-12 form-group mg-t-30">
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
