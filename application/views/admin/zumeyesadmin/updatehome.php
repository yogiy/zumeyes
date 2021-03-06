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
                      <h4 class="card-title">Add Slider Images For Home page
                      <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/slider_insert', $attributes);
?>

 <div class="form-group">
                       <div class="form-group" style="margin-top: 1rem;">

                      <?php echo form_upload(['multiple' => '', 'name' => 'sliderimage[]', 'class' => 'file-upload-default']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <div class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </div>
                      </div>
                    </div>
                        <?php
if (isset($upload_error)) {
    echo $upload_error;

}?>

                      </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
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
                  <h4 class="card-title">Add Offer Images For Home Page
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg2'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/homepage_offer_image', $attributes);
?>
 <div class="form-group">



                        <div class="form-group" style="margin-top: 1rem;">

                      <?php echo form_upload(['multiple' => '', 'name' => 'offerimage[]', 'class' => 'file-upload-default']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <div class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </div>

                      </div>
                    </div>
                     <?php
if (isset($upload_error)) {
    echo $upload_error;

}?>
                      </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>

          </div>
         <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Bottom Banner Images For Home Page
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg3'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/homepage_bottombanner', $attributes);
?>
 <div class="form-group">



                        <div class="form-group" style="margin-top: 1rem;">

                      <?php echo form_upload(['multiple' => '', 'name' => 'bannerimage[]', 'class' => 'file-upload-default']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <div class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </div>

                      </div>
                    </div>
                     <?php
if (isset($upload_error)) {
    echo $upload_error;

}?>
                      </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>

          </div>

    </div>
 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Category Name List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Category Name</th>

                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        $id = $cat_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $cat_dat->cat_name ?></td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/delete_category?id=<?php echo $id ?>" class="btn btn-outline-primary">Delete</a>

                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_category?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
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
              <h4 class="card-title">Sub Category Name List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Category Name</th>
                            <th>Sub Category Name</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($subcat_data) {
    foreach ($subcat_data as $key => $subcat_dat) {
        $id = $subcat_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $subcat_dat->cat_name ?></td>
                            <td><?php echo $subcat_dat->sub_cat_name ?></td>
                            <td>
                              <label class="badge badge-info"><a href="">Delete</a></label>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>update_subcategory?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
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
