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
         <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Category Name
                      <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>
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
                          <?php if ($cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        $id = $cat_dat->id;
        ?>
                          <input type="Hidden" name="id" value="<?php echo $id ?>">

                          <input type="text" class="form-control" placeholder="Category" value="<?php echo $cat_dat->cat_name ?>" aria-label="Category" name="cat_name" aria-describedby="colored-addon1">
                        <?php }}?></div>
                        <?php echo form_error('cat_name'); ?>
                      </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                     <a href=<?php echo base_url('admin/category'); ?>>Back</a>
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
        <?php include 'footer.php';?><!-- End custom js for this page-->
</body>
</html>
