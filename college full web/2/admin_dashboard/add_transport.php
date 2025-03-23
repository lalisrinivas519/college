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
                      Transport Details
                    </li>
                  </ol>
                  <!-- Breadcrumb end -->
                  <h2 class="mb-2"> Transport Details</h2>
                  <h6 class="mb-4 fw-light">
                   
                  </h6>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-4">
                  <!-- Card start -->
                  <div class="card mb-4">
                    <div class="card-header">
                      
                     <br>
                     <form action="add_transport.php" method="post" class="new-added-form">
                        <div class="row">
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Student ID/Staff ID" class="form-control" required name="userid" style="background-color:#FBE47B;">
                           </div><br><br>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Bus Number" class="form-control" name="bus_no" required style="background-color:#FBE47B;">
                           </div><br><br>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Driver Name" class="form-control" name="driver_name" required style="background-color:#FBE47B;">
                           </div><br><br>
                           <div class="col-6 col-12 form-group">
                              <input type="number" placeholder="Driver Contact Number" class="form-control" name="driver_number" required style="background-color:#FBE47B;">
                           </div><br><br>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Route" class="form-control" name="route" required style="background-color:#FBE47B;">
                           </div><br><br>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Student Name" class="form-control" name="name" required style="background-color:#FBE47B;">
                           </div><br><br>
                           <div class="col-6 col-12 form-group">
                              <input type="number" placeholder="Student Contact Number" class="form-control" required name="student_number" style="background-color:#FBE47B;">
                           </div><br><br><br>
                           <div class="col-sm-12 form-group" align="center">
                              <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                           </div>
                        </div>
                     </form>
                     <?php
                        include("php_include/connect.php");
                        
                        if(isset($_POST['submit'])) {
                            $userid = $_POST['userid'];
                            $bus_no = $_POST['bus_no'];
                            $driver_name = $_POST['driver_name'];
                        $driver_number = $_POST['driver_number'];
						 $route = $_POST['route'];
                            $name = $_POST['name'];
                            $student_number = $_POST['student_number'];
                        
                            $query_contact = mysqli_query($con, "INSERT INTO `transport`(`userid`, `bus_no`, `driver_name`, `driver_number`, `route`, `name`, `student_number`) 
							VALUES ('$userid','$bus_no','$driver_name','$driver_number','$route','$name','$student_number')");
                        
                            if($query_contact) {
                                echo "<script>alert('Inserted successfully'); window.location.assign('add_transport.php');</script>";
                            } else {
                                echo "<script>alert('Inserted Unsuccessfully'); window.location.assign('add_transport.php');</script>";
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


