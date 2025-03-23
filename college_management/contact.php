<!DOCTYPE html>
<html lang="en">
   <head>
      <title>CONTACT US</title>
   </head>
   <?php include("php_include/head.php");
      ?>
   <body>
      <?php include("php_include/header.php");
         ?>
      <main>
         <!-- Page banner area start here -->
         <section class="page-banner bg-image section-padding" style="background-image: url('images/banner.jpg'); background-size: cover; background-position: center;">
            <div class="gaps-right d-none d-sm-block float-bob-x">
               <img src="images/gaps-primary.png" alt="">
            </div>
            <div class="gaps-left d-none d-sm-block float-bob-x">
               <img src="images/gaps-primary.png" alt="">
            </div>
            <div class="container">
               <h2 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">CONTACT US</h2>
               <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                  <a href="index.php">Home :</a>
                  <span>Contact Us</span>
               </div>
            </div>
         </section>
         <!-- Page banner area end here -->
         <!-- Contact form area start here -->
         <section class="contact section-padding">
            <div class="container">
               <div class="row g-4">
                  <div class="col-lg-6">
                     <div class="content bg-image" style="background-image: url('images/ass.jpeg');">
                        <div class="arry"><img src="assets/images/icon/arry.png" alt=""></div>
                        <ul>
                           <li><a target="_blank"><i class="fa-solid fa-location-dot"></i>
                              AM College Yelahanka New Town Yelahanka Bangalore city Bangalore - 560064</a>
                           </li>
                           <li><a><i class="fa-solid fa-phone-volume"></i>+91 9876543210</a>
                           </li>
                           <li><a><i class="fa-solid fa-envelope"></i>amcollegeinfo@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-area">
                        <form action="contact_process.php" method="POST">
                           <input type="text" placeholder="User ID" name="userid">
                           <input type="text" placeholder="Name" name="name">
                           <input type="email" placeholder="Email" name="email">
                           <input type="number" placeholder="Phone Number" name="mobile">
                           <textarea id="massage" placeholder="Message..." name="message" ></textarea>
                           <div class="radio-btn mt-3">
                              <span></span>
                              <p>I accept your terms & conditions</p>
                           </div>
                           <button class="mt-40 rounded shadow">Submit Now <i class="fa-solid fa-arrow-right-long"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Contact form area end here -->
      </main>
      <!-- Footer area start here -->
      <?php include("php_include/footer.php");
         ?>
      <!-- Footer area end here -->
      <!-- Back to top area start here -->
      <div class="scroll-up">
         <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- Back to top area end here -->
      <!-- Jquery 3 6 0 Min Js -->
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <!-- Bootstrap min Js -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- Swiper bundle min Js -->
      <script src="assets/js/swiper-bundle.min.js"></script>
      <!-- Counterup min Js -->
      <script src="assets/js/jquery.counterup.min.js"></script>
      <!-- Wow min Js -->
      <script src="assets/js/wow.min.js"></script>
      <!-- Magnific popup min Js -->
      <script src="assets/js/magnific-popup.min.js"></script>
      <!-- Nice select min Js -->
      <script src="assets/js/nice-select.min.js"></script>
      <!-- Isotope pkgd min Js -->
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <!-- Waypoints Js -->
      <script src="assets/js/jquery.waypoints.js"></script>
      <!-- Script Js -->
      <script src="assets/js/script.js"></script>
   </body>
</html>
