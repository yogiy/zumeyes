<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Zumeyes Admin</title>
  <!-- plugins:css -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/summernote/dist/summernote-bs4.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/simplemde/dist/simplemde.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/zumeyes/node_modules/quill/dist/quill.snow.css" />
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
   <?php include('sidebar.php')?>
        <!-- partial -->
         <div class="content-wrapper" style="min-height:145px;">
          
         <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">About Description
                     <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg');?></span></h4>
                   
                  <?php
echo form_open_multipart('admin/updateabout');
foreach ($about_data as $key => $about_dat) {
  $about=$about_dat->description;
  $id=$about_dat->id;
}
  ?>                
                  <textarea id="summernoteExample" name="content"><?php echo $about;?></textarea>
                  <input type="hidden" name="id" value="<?php echo $id?>">
                  <input type="submit" name="update_about" class="btn btn-primary btn-rounded btn-fw" value="Submit"/>
                </form>
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
  <script src="<?php echo base_url();?>assets/zumeyes/node_modules/summernote/dist/summernote-bs4.min.js"></script>
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
  <script src="<?php echo base_url();?>assets/zumeyes/js/editorDemo.js"></script>
  <!-- End custom js for this page-->
 
</body>
</html>
