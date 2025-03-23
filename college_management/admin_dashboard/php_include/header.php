<div class="navbar navbar-expand-md header-menu-one bg-light">
   <div class="nav-bar-header-one">
      <div class="header-logo">
         <a href="index.php">
         <img src="../logo/logo.jpeg" alt="logo" style="width:70px;">
         </a>
      </div>
      <div class="toggle-button sidebar-toggle">
         <button type="button" class="item-link">
         <span class="btn-icon-wrap">
         <span></span>
         <span></span>
         <span></span>
         </span>
         </button>
      </div>
   </div>
   <div class="d-md-none mobile-nav-bar">
      <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
      <i class="far fa-arrow-alt-circle-down"></i>
      </button>
      <button type="button" class="navbar-toggler sidebar-toggle-mobile">
      <i class="fas fa-bars"></i>
      </button>
   </div>
   <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
      <ul class="navbar-nav">
         <li class="navbar-item header-search-bar">
            <div class="input-group stylish-input-group">
               <input type="text" class="form-control" placeholder="">
               <h4 style="align:left;">Admin Id : <?php echo $userid?></h4>
            </div>
         </li>
      </ul>
   </div>
</div>
