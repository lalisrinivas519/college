<!DOCTYPE html>
<html lang="en">

  
<head>
<?php include("php_include/connect.php")?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Gallery - Adminify Bootstrap Dashboard Template</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Admin Dashboard Templates" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.min.css" />
  </head>

  <body class="bg-dark">
    <!-- Container start -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
          <form action="login_process.php" method="POST" class="my-5">
            <div class="bg-white rounded-3 p-4">
              <div class="login-form">
                <a href="index.php" class="mb-4 d-flex">
                  <img src="assets/images/logo-dark.svg" class="img-fluid login-logo" alt="AdminPro Admin Dashboard" />
                </a>
                <h4 class="my-4">Login</h4>
                <div class="mb-3">
                  <label class="form-label" for="name">Your Email <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="UserID" name="userid" id="userid">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="pwd">Your Password <span class="text-danger">*</span></label>
                  <input type="password" class="form-control"  placeholder="Password" name="password" id="password" >
                </div>
               
                <div class="d-grid py-3 mt-3">
                  <button type="submit" class="btn btn-lg btn-primary" name="submit" value="login">
                    LOGIN
                  </button>
                </div>
                
               
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Container end -->
  </body>


</html>