<!DOCTYPE html>
<html lang="en">
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
    <?php include 'header.php';?>
    <!-- partial -->
   <?php include 'sidebar.php';?>
        <!-- partial -->
         <div class="content-wrapper" style="min-height:145px;">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Brand Names
                      <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg1'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/filter', $attributes);
?>

 <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required placeholder="Brand Name" aria-label="Category" name="brand" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('brand'); ?>
                      </div>

                      <button type="submit" name="brandd" value="brandd" class="btn btn-success mr-2">Submit</button>
                     <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Color Name
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg2'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/filter', $attributes);
?>
 <div class="form-group">


                        <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control"  placeholder="Color Name" aria-label="Category" required name="color_name" id="color_name" aria-describedby="colored-addon1">
                        </div>
                       <?php echo form_error('color_name'); ?>
                      </div>
                      <button type="submit" name="color" value="color" class="btn btn-success mr-2">Submit</button>
                     <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>

          </div>

      <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Shape Names
                      <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg3'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/filter', $attributes);
?>

 <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required placeholder="Shape Name" aria-label="Category" name="shape" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('shape'); ?>
                      </div>

                      <button type="submit" name="shapee" value="shapee" class="btn btn-success mr-2">Submit</button>
                     <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Material Name
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg4'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/filter', $attributes);
?>
 <div class="form-group">


                        <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required placeholder="material Name" aria-label="Category" name="material_name" id="color_name" aria-describedby="colored-addon1">
                        </div>
                       <?php echo form_error('material_name'); ?>
                      </div>
                      <button type="submit" name="material" value="material" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>

          </div>

      <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Purpose Names
                      <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg5'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/filter', $attributes);
?>

 <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required placeholder="FBrandilter Name" aria-label="Category" name="purpose" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('purpose'); ?>
                      </div>

                      <button type="submit" name="purposes" value="purpse" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Fit Type
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg6'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/filter', $attributes);
?>
 <div class="form-group">


                        <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required placeholder="Fit Name" aria-label="Category" name="fit_name" id="fit_name" aria-describedby="colored-addon1">
                        </div>
                       <?php echo form_error('fit_name'); ?>
                      </div>
                      <button type="submit" name="fit" value="fit" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Contact Lense Uses
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg7'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/filter', $attributes);
?>
 <div class="form-group">


                        <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control"  placeholder="Example Like Daily Uses" required aria-label="Category" name="lense_uses" id="lense_uses" aria-describedby="colored-addon1">
                        </div>
                       <?php echo form_error('lense_uses'); ?>
                      </div>
                      <button type="submit" name="style" value="style" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
    </div>

<div class="card">
            <div class="card-body">
              <h4 class="card-title">Color Name List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Color Name</th>

                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($color_data) {
    foreach ($color_data as $key => $color_dat) {
        $id = $color_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $color_dat->color_name ?></td>
                            <td>
                              <form method="post" action="status_color" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $color_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $color_dat->status ?>" <?php if ($color_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_color?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}?>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Brand Name List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Brand Name</th>

                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($brand_data) {
    foreach ($brand_data as $key => $brand_dat) {
        $id = $brand_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $brand_dat->brand_name ?></td>
                            <td>
                             <form method="post" action="status_brand" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $brand_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $brand_dat->status ?>" <?php if ($brand_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_brand?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}?>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Shape Type List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Shape NamTypee</th>

                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($shape_data) {
    foreach ($shape_data as $key => $shape_dat) {
        $id = $shape_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $shape_dat->shape_type ?></td>
                            <td>
                             <form method="post" action="status_shape" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $shape_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $shape_dat->status ?>" <?php if ($shape_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_shape?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}?>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Material Name List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Material Name</th>

                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($material_data) {
    foreach ($material_data as $key => $material_dat) {
        $id = $material_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $material_dat->material_name ?></td>
                            <td>
                             <form method="post" action="status_material" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $material_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $material_dat->status ?>" <?php if ($material_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_material?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}?>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Purpose Name List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Purpose Name</th>

                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($purpose_data) {
    foreach ($purpose_data as $key => $purpose_dat) {
        $id = $purpose_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $purpose_dat->purpose_name ?></td>
                            <td>
                             <form method="post" action="status_purpose" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $purpose_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $purpose_dat->status ?>" <?php if ($purpose_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_purpose?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}?>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Contact Lense Uses </h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Useing Time</th>

                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($lense_uses) {
    foreach ($lense_uses as $key => $lense_data) {
        $id = $lense_data->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $lense_data->uses ?></td>
                            <td>
                              <form method="post" action="status_lense_type" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $lense_data->status ?>">
                <input type="checkbox" name="status" value="<?php echo $lense_data->status ?>" <?php if ($lense_data->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_lenseuses?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}?>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Fit Type List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Fit Name</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($fit_data) {
    foreach ($fit_data as $key => $fit_dat) {
        $id = $fit_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $fit_dat->fit_name ?></td>
                            <td>
                              <form method="post" action="status_fit" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $fit_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $fit_dat->status ?>" <?php if ($fit_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>

                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_fit?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
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
       <?php include 'footer.php';?></body>
</html>
