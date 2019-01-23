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
         <div class="content-wrapper" style="min-height:145px;">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Cylinder Of Eyes OS
                      <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg1');?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/lenseinfo', $attributes);
  ?>

 <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Cylinder(CYL)" aria-label="Category" name="cylinder" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('cylinder');?>
                      </div>
                      
                      <button type="submit" name="cylinderinfo" value="cylinder" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
              </div> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Sphere Of Eyes OS
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg2');?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/lenseinfo', $attributes);
  ?>
 <div class="form-group">                         
                          
                      
                        <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control"  placeholder="sphere(SPH)" aria-label="Category" name="sphere" id="sphere" aria-describedby="colored-addon1">
                        </div>
                       <?php echo form_error('sphere');?>
                      </div>
                      <button type="submit" name="sphereinfo" value="sphereinfo" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>

          </div>

      <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Axis Of Eyes OS
                      <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg3');?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/lenseinfo', $attributes);
  ?>

 <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Axis" aria-label="Category" name="axis" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('axis');?>
                      </div>
                      
                      <button type="submit" name="axisinfo" value="axis" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
              </div> 
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Nearaddition Of Eyes OS
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg4');?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/lenseinfo', $attributes);
  ?>
 <div class="form-group">                         
                          
                      
                        <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control"  placeholder="nearaddition" aria-label="Category" name="nearaddition" id="nearaddition" aria-describedby="colored-addon1">
                        </div>
                       <?php echo form_error('nearaddition');?>
                      </div>
                      <button type="submit" name="nearadditioninfo" value="nearaddition" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>

          </div>

    </div>

<div class="card">
            <div class="card-body">
              <h4 class="card-title">OS Sphere(SPH) List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Sphere</th>
                            
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php   
                        $sr_no=1;
                        if(@$sphere_data)
                         {
               foreach ($sphere_data as $key => $sphere_dat) {
                $id=$sphere_dat->id;
                         ?>
                        <tr>
                            <td><?php echo $sr_no;?></td>
                            <td><?php echo $sphere_dat->sphere?></td>
                            <td>
                             
                              <a href="<?php echo site_url()?>admin/delete_color?id=<?php echo $id?>" class="btn btn-outline-primary">Delete</a>
                           
                            </td>
                            <td>
                              <a href="<?php echo site_url()?>admin/update_sphere?id=<?php echo $id?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++; }}?>
                              </tbody>
                    </table>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">OS Cylinder List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>OS Cylinder</th>
                            
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php   
                        $sr_no=1;
                        if($cylinder_data)
                         {
               foreach ($cylinder_data as $key => $cylinder_dat) {
                $id=$cylinder_dat->id;
                         ?>
                        <tr>
                            <td><?php echo $sr_no;?></td>
                            <td><?php echo $cylinder_dat->cylinder?></td>
                            <td>
                              <a href="<?php echo site_url()?>admin/delete_brand?id=<?php echo $id?>" class="btn btn-outline-primary">Delete</a>
                           
                            </td>
                            <td>
                              <a href="<?php echo site_url()?>admin/update_cylinder?id=<?php echo $id?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++; }}?>
                              </tbody>
                    </table>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">OS Axis List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>OS Axis</th>
                            
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php   
                        $sr_no=1;
                        if($axis_data)
                         {
               foreach ($axis_data as $key => $axis_dat) {
                $id=$axis_dat->id;
                         ?>
                        <tr>
                            <td><?php echo $sr_no;?></td>
                            <td><?php echo $axis_dat->axis?></td>
                            <td>
                              <a href="<?php echo site_url()?>admin/delete_shape?id=<?php echo $id?>" class="btn btn-outline-primary">Delete</a>
                           
                            </td>
                            <td>
                              <a href="<?php echo site_url()?>admin/update_axis?id=<?php echo $id?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++; }}?>
                              </tbody>
                    </table>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="card">
            <div class="card-body">
              <h4 class="card-title">OS Nearaddition List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>OS Nearaddition</th>
                            
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php   
                        $sr_no=1;
                        if($nearaddition_data)
                         {
               foreach ($nearaddition_data as $key => $nearaddition_dat) {
                $id=$nearaddition_dat->id;
                         ?>
                        <tr>
                            <td><?php echo $sr_no;?></td>
                            <td><?php echo $nearaddition_dat->nearaddition?></td>
                            <td>
                              <a href="<?php echo site_url()?>admin/delete_shape?id=<?php echo $id?>" class="btn btn-outline-primary">Delete</a>
                           
                            </td>
                            <td>
                              <a href="<?php echo site_url()?>admin/update_nearaddition?id=<?php echo $id?>" class="btn btn-outline-primary">Update</a>
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
