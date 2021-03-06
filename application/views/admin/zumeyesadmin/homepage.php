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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/lightgallery/dist/css/lightgallery.min.css">
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

                      <?php echo form_upload(['name' => 'sliderimage[]', 'class' => 'file-upload-default', 'id' => 'userfile1']) ?>
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
                  <h4 class="card-title">Add Offer Images For Home Page
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg2'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/homepage_offer_image', $attributes);
?>
 <div class="form-group">



                        <div class="form-group" style="margin-top: 1rem;">

                      <?php echo form_upload(['multiple' => '', 'name' => 'offerimage[]', 'class' => 'file-upload-default', 'id' => 'userfile2']) ?>
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
                    <button type="reset" class="btn btn-light">Cancel</button>
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

                      <?php echo form_upload(['multiple' => '', 'name' => 'bannerimage[]', 'class' => 'file-upload-default', 'id' => 'userfile3']) ?>
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
                     <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>

          </div>

    </div>
 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Home Page Slider Image List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Slider Image</th>

                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($sliderimage_data) {
    foreach ($sliderimage_data as $key => $sliderimage_dat) {
        $id = $sliderimage_dat->id;
        $sliderimage = explode('|', $sliderimage_dat->sliderimage);
        foreach ($sliderimage as $key => $sliderimage) {
            ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><div id="lightgallery" class="row lightGallery">
                    <img src="<?php echo base_url('assets/upload/') ?><?php echo $sliderimage ?>" alt="image small"></div></td>
                            <td>
                              <form method="post" action="status_slider" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $sliderimage_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $sliderimage_dat->status ?>" <?php if ($sliderimage_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_slider?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}}?>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Home Page offer Image List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Offer Image</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($offerimage_data) {
    foreach ($offerimage_data as $key => $offerimage_dat) {
        $id = $offerimage_dat->id;
        $offerimage = explode('|', $offerimage_dat->offerimage);
        foreach ($offerimage as $key => $offerimage) {

            ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><div id="lightgallery" class="row lightGallery">
                    <img src="<?php echo base_url('assets/upload/') ?><?php echo $offerimage ?>" alt="image small"></div></td>

                            <td>
                             <form method="post" action="status_offer" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $offerimage_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $offerimage_dat->status ?>" <?php if ($offerimage_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_Offerimage?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}}?>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Home Page Bottom banner Image</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Offer Image</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($bannerimage_data) {
    foreach ($bannerimage_data as $key => $bannerimage_dat) {
        $id = $bannerimage_dat->id;
        $bannerimage = explode('|', $bannerimage_dat->bannerimage);
        foreach ($bannerimage as $key => $bannerimage) {
            ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><div id="lightgallery" class="row lightGallery">
                    <img src="<?php echo base_url('assets/upload/') ?><?php echo $bannerimage ?>" alt="image small"></div></td>

                            <td>
                              <form method="post" action="status_banner" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $bannerimage_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $bannerimage_dat->status ?>" <?php if ($bannerimage_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_bannerimage?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
                            </td>
                        </tr><?php $sr_no++;}}}?>
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
        <script type="text/javascript">
  $(document).ready(function(){

  document.getElementById("userfile1").required = true;
   document.getElementById("userfile2").required = true;
    document.getElementById("userfile3").required = true;
});
</script>
</html>
