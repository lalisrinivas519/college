<!doctype html>
<html class="no-js" lang="">
   <head>
      <title>ADD BOOK DETAILS</title>
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
                     <li>Add Books Details</li>
                  </ul>
               </div>
               <div class="card height-auto">
                  <div class="card-body" style="width:470px; ">
                     <br>
                     <div class="heading-layout1">
                        <div class="item-title">
                           <h3>ADD BOOK DETAILS</h3>
                        </div>
                     </div>
                     <hr>
                     <br>
                     <form action="add_books.php" method="post" class="new-added-form">
                        <div class="row">
                           <input type="hidden" name="userid" value="<?php echo $userid?>">
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Book Number" class="form-control" name="book_no" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Book Name" class="form-control" name="book_name" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Author Name" class="form-control" name="author_name" style="background-color:#FBE47B;">
                           </div>
                           <div class="col-6 col-12 form-group">
                              <input type="date" placeholder="Date" class="form-control" name="date" style="background-color:#FBE47B;">
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
                            $book_no = $_POST['book_no'];
                            $book_name = $_POST['book_name'];
                            $author_name = $_POST['author_name'];
                        $date = $_POST['date'];
                            
                            $query_contact = mysqli_query($con, "INSERT INTO `library`(`userid`, `book_no`, `book_name`, `author_name`, `date`) 
                        VALUES ('$userid','$book_no','$book_name','$author_name','$date')");
                        
                            if($query_contact) {
                                echo "<script>alert('Inserted successfully'); window.location.assign('add_books.php');</script>";
                            } else {
                                echo "<script>alert('Inserted Unsuccessfully'); window.location.assign('add_books.php');</script>";
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
