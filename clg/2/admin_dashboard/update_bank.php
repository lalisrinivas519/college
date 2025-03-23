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
            <a href="home.php">
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
                      <a href="home.php"><b>Home</b></a>
                    </li><br>
                    <li>
                      Update Aadhar
                    </li>
                  </ol>
                  <!-- Breadcrumb end -->
                  <h2 class="mb-2">Update Aadhar</h2>
                  <h6 class="mb-4 fw-light">
                   
                  </h6>
                </div>
              </div>
              <!-- Row end -->
 </div>
              <!-- Row start -->
              <div class="row">
                <div class="col-4">
                  <!-- Card start -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <hr>
                     <br>
                     <form action="update_bank_details.php" method="post" class="new-added-form" enctype="multipart/form-data">
                        <div class="row">
                           <input type="hidden" name="userid" value="">
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Account Number" class="form-control" name="acc_no" style="background-color:#FBE47B;">
                           </div><br>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Account Holder Name" class="form-control" name="account_holder_name" style="background-color:#FBE47B;">
                           </div><br>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Bank Name" class="form-control" name="bank_name" style="background-color:#FBE47B;">
                           </div><br>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="IFSC Code" class="form-control" name="ifsc_code" style="background-color:#FBE47B;">
                           </div><br>
                           <div class="col-6 col-12 form-group">
                              <input type="text" placeholder="Branch Name" class="form-control" name="branch" style="background-color:#FBE47B;">
                           </div><br>
                           <div class="col-lg-12 col-12 form-group mg-t-30">
						    <center><img src="../images/passbook.jpg" style="border: 1px solid #ddd;  border-radius: 4px;  padding: 7px;  width: 200px;"></center>
                              <center> <img src="kyc/" style="border-radius:10px; width:200px;height:200px;"></center>
                              <label class="text-dark-medium"> Upload PassBook Image (150px X 150px)</label>
                              <input type="file" class="form-control" name="image" style="background-color:#FBE47B;"><br>
                           </div>
                           <div class="col-lg-12 col-12 form-group mg-t-30">
                              <center><button type="submit" name="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Upload</button></center>
                           </div>
                        </div>
                     </form>
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
	
      
  </body>


</html>


