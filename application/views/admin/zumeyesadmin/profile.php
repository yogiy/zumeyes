<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Dec 2018 15:33:41 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Zumeyes Admin</title>
  <!-- plugins:css -->
  <link href="<?php echo base_url(); ?>/assets/zumeyes/node_modules/mdi/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/icheck/skins/all.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/select2/dist/css/select2.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/zumeyes/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
   <?php include 'header.php'?>
    <!-- partial -->

        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
       <?php include 'sidebar.php';?>
        <!-- partial -->
        <?php foreach ($profile as $key => $profile_data) {
    $email = $profile_data->email;
    $name = $profile_data->name;
    $phone = $profile_data->phone;
    $designation = $profile_data->designation;
    $address = $profile_data->address;
    $img = $profile_data->user_image;
}
?>
        <div class="content-wrapper">
          <div class="row user-profile">
            <div class="col-lg-4 side-left d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body avatar">
                      <h4 class="card-title">Profile Info</h4>
                      <img style="
    display: block;
    width: 190px;
    height: 100px;
    border-radius: 0%;
    margin-left: auto;
    margin-right: auto;
" src="<?php echo base_url('assets/upload/') ?><?php echo $img; ?>" alt="">
                      <p class="name"><?php echo $name; ?></p>
                      <p class="designation">-  <?php echo $designation; ?>  -</p>
                      <a class="d-block text-center text-dark" href="#"><?php echo $email; ?></a>
                      <a class="d-block text-center text-dark" href="#"><?php echo $phone ?></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-8 side-right stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                    <h4 class="card-title mb-0">Details</h4>
                    <ul class="nav nav-tabs tab-solid tab-solid-primary mb-0" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar">Profile Image</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">Security</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wrapper">
                    <hr>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">
                        <form action="profile" method="post">
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Change user name">
                          </div>
                          <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Change designation">
                          </div>
                          <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" name="phone" id="mobile" placeholder="Change mobile number">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Change email address">
                          </div>
                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" name="address" rows="6" class="form-control" placeholder="Change address"></textarea>
                          </div>

                          <div class="form-group mt-5">
                            <button type="submit" name="profileupdate" value="profile" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger" type="reset">Cancel</button>
                          </div>
                        </form>
                      </div><!-- tab content ends -->
                      <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                        <div class="wrapper mb-5 mt-4">
                          <span class="badge badge-warning text-white">Note : </span>
                          <p class="d-inline ml-3 text-muted">Image size is limited to not greater than 1MB .</p>
                        </div>
                          <?php
echo form_open_multipart('admin/profile');
?>
                            <?php echo form_upload(['name' => 'userfile', 'class' => 'dropify', 'data-max-file-size' => '1mb']) ?>

                          <?php
if (isset($upload_error)) {
    echo $upload_error;

}?>
                          <div class="form-group mt-5">
                            <button type="submit" name="profileimg" value="profileimg" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger" name="reset" value="profileimg" type="reset">Cancel</button>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        <form action="profile" method="post">
                          <div class="form-group">
                            <label for="change-password">Change password</label>
                            <input type="password" name="cpass" class="form-control" id="change-password" placeholder="Enter you current password">
                          </div>
                          <div class="form-group">
                            <input type="password" name="newpass" class="form-control" id="new-password" placeholder="Enter you new password">
                          </div>
                          <div class="form-group mt-5">
                            <button type="submit" name="profilepass" value="profilepass" class="btn btn-success mr-2">Update</button>
                            <button  type="reset" class="btn btn-outline-danger">Cancel</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2017 <a href="#">UrbanUI</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
   <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/icheck/icheck.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/typeahead.js/dist/typeahead.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/select2/dist/js/select2.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/misc.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/file-upload.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/iCheck.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/typeahead.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/select2.js"></script>
  <!-- End custom js for this page-->
<!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Dec 2018 15:33:41 GMT -->
</html>
