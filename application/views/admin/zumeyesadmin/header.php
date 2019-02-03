<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo site_url('admin/profile'); ?>"><img src="<?php echo base_url(); ?>assets/upload/logo.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo site_url('admin/profile'); ?>"><img src="<?php echo base_url(); ?>" alt="Zumeyes"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle nav-btn" href="<?php echo base_url('auth/logout') ?>" >
              <span class="btn">Logout</span>
            </a>

          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item" href="<?php echo base_url('admin/profile'); ?>">

                <span class="badge badge-pill badge-warning float-right">View Profile</span>
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>