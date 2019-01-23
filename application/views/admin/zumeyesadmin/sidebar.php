         <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-image"><a href="<?php echo site_url('admin/profile');?>">
                  <img src="<?php echo base_url()?>assets/zumeyes/images/faces/face10.jpg" alt="image"/>
                  <span class="online-status online"></span> </a><!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                  <p class="name">
                    Zumeyes
                  </p>
                  <p class="designation">
                     Admin
                  </p>
                </div>
              </div>
            </li>
            
          
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title">Pages</span>
                <span class="badge badge-danger">7</span>
              </a>
              <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?php echo site_url('admin/homepage');?>">Home Page</a></li>
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?php echo site_url('admin/addabout');?>">About Page</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/category');?>">Category Page</a></li>
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?php echo site_url('admin/addblog');?>">Blog Page</a></li>
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?php echo site_url('admin/filter');?>">Product Filter Page</a></li>
                   <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/addproduct');?>">Product Page</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('admin/addprescription');?>">Add Glass Prescription</a></li> 
                
                </ul>
              </div>
            </li>
          
          </ul>
        </nav>
      