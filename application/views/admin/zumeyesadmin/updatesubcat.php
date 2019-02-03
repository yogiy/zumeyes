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
         <div class="content-wrapper">
          <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Sub Category Name
                <span style="color:blue;padding-left:70px">
              <?php

foreach ($subcat_data as $key => $subcat_dat) {
    $cat_name = $subcat_dat->cat_name;

}
foreach ($subcatall_data as $key => $subcatall_dat) {

    $sub_cat = $subcatall_dat->sub_cat_name;
    $bg_image = $subcatall_dat->bg_image;
    $cat_id = $subcatall_dat->cat_name;
    $id = $subcatall_dat->id;
}

echo $this->session->flashdata('form_succ_msg2');?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/update_subcat', $attributes);
?>
 <div class="form-group">
                          <select class="js-example-basic-single" onclick="document.getElementById('sub_cat_name').disabled = true;" name="cat_name" style="width:100%">
                            <option value="<?php echo $cat_id ?>"><?php echo $cat_name ?></option>
                         <?php if ($cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        if ($cat_dat->cat_name != $cat_name) {
            ?>

                          <option value="<?php echo $cat_dat->id ?>"><?php echo $cat_dat->cat_name ?></option>
                         <?php }}}
?>
                        </select>

                        <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" value="<?php echo $sub_cat ?>"  placeholder="Sub Category" aria-label="Category" name="sub_cat_name" id="sub_cat_name" aria-describedby="colored-addon1">
                          <input type="Hidden" name="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="form-group" style="margin-top: 1rem;">

                      <?php echo form_upload(['name' => 'userfile', 'class' => 'file-upload-default', 'value' => '' . $bg_image . '']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" value="<?php echo $bg_image ?>" disabled placeholder="Upload Image">
                        <div class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </div>
                        <?php
if (isset($upload_error)) {
    echo $upload_error;

}?>
                      </div>
                    </div>
                      </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                     <a href=<?php echo base_url('admin/category'); ?>>Back</a>
                </form>
              </div>
            </div>

          </div>

    </div>

  </div>
  <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
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
                        <?php if ($cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        $id = $cat_dat->id;
        ?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $cat_dat->cat_name ?></td>
                            <td>
                              <label class="badge badge-info"><a href="">Delete</a></label>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>update_category?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php }}?>
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
