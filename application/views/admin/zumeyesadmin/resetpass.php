<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Zumeyes Admin</title>
  <!-- plugins:css -->
   <link rel="shortcut icon" href="../../images/favicon.png" />
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/css/style.css" />
   <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/zumeyes/images/favicon.png" />

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-dark text-left p-5">
                <h2>Zumeyes</h2>
                <h4 class="font-weight-light"></h4>
              <p>Please enter New Password</p>
                <?php
echo form_open_multipart('auth/resetpass');
?>

                  <div class="form-group">
                    <label for="exampleInputEmail1">New Password</label>
                    <input type="password" class="form-control" style="color:black" autocomplete="off" name="pass" id="exampleInputEmail1" value="" placeholder="New Password">


                    <?php echo form_error('pass'); ?>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Reenter New Password</label>
                    <input type="password" class="form-control" style="color:black" autocomplete="off" name="cpass" id="exampleInputEmail1" value="" placeholder="Re-Enter New Password">


                    <?php echo form_error('cpass'); ?>
                  </div>

                  <div class="mt-5">
                    <input type="submit" name="resetpass" class="btn btn-block btn-warning btn-lg font-weight-medium" value="Submit" />
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->

  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/misc.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/todolist.js"></script>
  <!-- endinject -->
   <!-- End custom js for this page-->

</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Dec 2018 15:33:00 GMT -->
</html>
