<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>ADD TRANSPORTATION DETAILS</title>
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
                  <h3>Admin Dashboard </h3>
                  <ul>
                     <li>
                        <a href="index.php">Home</a>
                     </li>
                     <li>Add Transportation Details</li>
                  </ul>
               </div>
               <div class="card height-auto">
                  <div class="card-body" style="width:470px; ">
                     <br>
                     <div class="heading-layout1">
                        <div class="item-title">
                           <h3>ADD NEW TRANSPORT ROUTE</h3>
                        </div>
                     </div>
                     <hr>
                     <br>
                     <form action="add_transport.php" method="post" class="new-added-form">
                        <div class="row">
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Student ID/Staff ID" class="form-control" name="userid" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Bus Number" class="form-control" name="bus_no" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Driver Name" class="form-control" name="driver_name" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Driver Contact Number" class="form-control" name="driver_number" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Route" class="form-control" name="route" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Student Name" class="form-control" name="name" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Student Contact Number" class="form-control" name="student_number" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-sm-12 form-group">
                              <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                              <button type="reset"  name="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
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
                            $name = $_POST['name'];
                            $student_number = $_POST['student_number'];
                        
                            $query_contact = mysqli_query($con, "INSERT INTO `transport`(`userid`, `bus_no`, `driver_name`, `driver_number`,`route`, `name`, `student_number`) 
                        VALUES ('$userid','$bus_no','$driver_name','$driver_number',`$route`,'$name','$student_number')");
                        
                            if($query_contact) {
                                echo "<script>alert('Inserted successfully'); window.location.assign('add_transport.php');</script>";
                            } else {
                                echo "<script>alert('Inserted Unsuccessfully'); window.location.assign('add_transport.php');</script>";
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
