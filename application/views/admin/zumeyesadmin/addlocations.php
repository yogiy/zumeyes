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
                  <h4 class="card-title">Shop Name
                     <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>

                  <?php
echo form_open_multipart('locations/insert_location');
?>                <div class="form-group" style="margin-top: 1rem;">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required placeholder="Shop name" aria-label="Category" name="shop_name" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('shop_name'); ?>
                      </div>
                     <div class="form-group" style="margin-top: 1rem;">
                      <h4 class="card-title">Retail Shop Address</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <textarea class="form-control" required placeholder="Full Shop Address" aria-label="Category" name="address" aria-describedby="colored-addon1"></textarea>
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
                          <textarea class="form-control" required placeholder="Description about shop..." aria-label="Category" name="shop_about" aria-describedby="colored-addon1"></textarea>
                        </div>
                        <?php echo form_error('shop_about'); ?>
                      </div>
                      <!-- Additional information about perticular Shop location-->
                   <!--   <div class="form-group" style="margin-top: 1rem;">
                        <h4 class="card-title">Additional Info About Shop</h4>
                        <div class="input-group">

                          <textarea class="form-control" placeholder="Description about shop..." aria-label="Category" name="shop_info" id="summernoteExample" aria-describedby="colored-addon1"></textarea>
                        </div>
                        <?php echo form_error('shop_info'); ?>
                      </div>-->

                  <input type="submit" name="Submit" class="btn btn-primary btn-rounded btn-fw" value="Submit"/>
                   <button type="reset" class="btn btn-light">Cancel</button>
                </form>
                </div>
              </div>
            </div>
          </div>



 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Retail Shop List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Shop Name</th>
                             <th>Address</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if (@$location_data) {
    foreach ($location_data as $key => $location_dat) {
        $id = $location_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $location_dat->shop_name ?></td>
                            <td><?php echo $location_dat->address ?>
                   </td>
                            <td>
                              <form method="post" action="status_location" >
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $location_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $location_dat->status ?>" <?php if ($location_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>locations/update_location?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}?>
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
       <?php include 'footer.php'?>
</body>
</html>
