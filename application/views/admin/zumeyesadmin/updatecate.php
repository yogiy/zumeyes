<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Zumeyes Admin</title>
  <!-- plugins:css -->
  <link href="<?php echo base_url();?>/assets/zumeyes/node_modules/mdi/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/icheck/skins/all.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/select2/dist/css/select2.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/zumeyes/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include('header.php');?>
    <!-- partial -->
   <?php include('sidebar.php');?>
        <!-- partial -->
         <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Category Name
                      <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg');?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/update_cat', $attributes);
  ?>

 <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <?php   if($cat_data)
                         {
               foreach ($cat_data as $key => $cat_dat) {
                   $id= $cat_dat->id;
                         ?>
                          <input type="Hidden" name="id" value="<?php echo $id?>">
                         
                          <input type="text" class="form-control" placeholder="Category" value="<?php echo $cat_dat->cat_name?>" aria-label="Category" name="cat_name" aria-describedby="colored-addon1">
                        <?php }}?></div>
                        <?php echo form_error('cat_name');?>
                      </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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
  <script src="<?php echo base_url();?>assets/zumeyes/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url();?>assets/zumeyes/node_modules/icheck/icheck.min.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/node_modules/typeahead.js/dist/typeahead.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/node_modules/select2/dist/js/select2.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>assets/zumeyes/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/js/misc.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/js/settings.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url();?>assets/zumeyes/js/file-upload.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/js/iCheck.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/js/typeahead.js"></script>
  <script src="<?php echo base_url();?>assets/zumeyes/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
