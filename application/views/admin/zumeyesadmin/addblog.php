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
    <?php include('sidebar.php');?>
        <!-- partial -->
         <div class="content-wrapper" style="min-height:145px;">
          

         <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Write Blog
                     <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg');?></span></h4>
                   
                  <?php
echo form_open_multipart('admin/blog_insertData');
  ?>                <div class="form-group" style="margin-top: 1rem;">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Blog title" aria-label="Category" name="title" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('title');?>
                      </div>
                      <div class="form-group">
                       <div class="form-group" style="margin-top: 1rem;">
                    
                      <?php echo form_upload(['name'=> 'blogimage','class'=>'file-upload-default'])?>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <div class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>                          
                        </div>                     
                      </div>
                    </div>
                        <?php
        if(isset($upload_error)){
            echo $upload_error;

            }?>

                      </div>
                  <textarea id="summernoteExample" name="content"></textarea>
                
                  <input type="submit" name="blog_Submit" class="btn btn-primary btn-rounded btn-fw" value="Submit"/>
                </form>
                </div>
              </div>
            </div>
          </div> 
               
          
        
 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Blog List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Blog Title</th>
                             <th>Blog Image</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php   
                        $sr_no=1;
                        if(@$blog_data)
                         {
               foreach ($blog_data as $key => $blog_dat) {
                $id=$blog_dat->id;
                         ?>
                        <tr>
                            <td><?php echo $sr_no;?></td>
                            <td><?php echo $blog_dat->title?></td>
                            <td><?php if($blog_dat->image){?><div id="lightgallery" class="row lightGallery">
                    <img src="<?php echo base_url('assets/upload/blog/')?><?php echo $blog_dat->image?>" alt="image small"></div><?php }?></td>
                            <td>
                              <a href="<?php echo site_url()?>admin/delete_blog?id=<?php echo $id?>" class="btn btn-outline-primary">Delete</a>
                           
                            </td>
                            <td>
                              <a href="<?php echo site_url()?>admin/blog_update?id=<?php echo $id?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++; }}?>
                              </tbody>
                    </table>                    
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
