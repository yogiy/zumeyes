<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Zumeyes Admin</title>
  <!-- plugins:css -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/summernote/dist/summernote-bs4.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/simplemde/dist/simplemde.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/quill/dist/quill.snow.css" />
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
   <?php include 'header.php';?>
    <!-- partial -->
    <?php include 'sidebar.php';?>
        <!-- partial -->
         <div class="content-wrapper" style="min-height:145px;">
         <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Shop Address
                     <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>

                  <?php
echo form_open_multipart('locations/update_location');
foreach ($location_data as $key => $location_dat) {
    $id = $location_dat->id;
}
?>                <div class="form-group" style="margin-top: 1rem;">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Blog title" aria-label="Category" value="<?php echo $location_dat->shop_name ?>" name="shop_name" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('shop_name'); ?>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                        <h4 class="card-title">Shop Address</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <textarea class="form-control" required placeholder="Full Shop Address" aria-label="Category" name="address" aria-describedby="colored-addon1"><?php echo $location_dat->address; ?></textarea>
                        </div>
                        <?php echo form_error('address'); ?>
                      </div>
                       <div class="form-group" style="margin-top: 1rem;">
                        <h4 class="card-title">Shop About</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <textarea class="form-control" required placeholder="Full Shop Address" aria-label="Category" name="shop_about" aria-describedby="colored-addon1"><?php echo $location_dat->shop_about; ?></textarea>
                        </div>
                        <?php echo form_error('shop_about'); ?>
                      </div>
                       <!-- Additional information about perticular Shop location-->

                      <!-- <div class="form-group" style="margin-top: 1rem;">
                        <h4 class="card-title">Additional Shop Information</h4>
                        <div class="input-group">

                          <textarea id="summernoteExample" name="shop_info"><?php echo $location_dat->shop_info; ?></textarea>
                        </div>
                        <?php echo form_error('shop_info'); ?>
                      </div>-->
                      <input type="hidden" name="id" value="<?php echo $location_dat->id ?>">



                  <input type="submit" name="location_update" class="btn btn-primary btn-rounded btn-fw" value="Submit"/>
                    <a href=<?php echo base_url('locations/addlocation'); ?>>Back</a>
                </form>

                </div>
              </div>
            </div>

          </div>

            </div>

  </div>

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include 'footer.php';?>
          <script type="text/javascript">
  $(document).ready(function(){

  document.getElementById("bg_image").required = true;

});
</script>
</body>
</html>