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
    <?php include "header.php";?>
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
                      <h4 class="card-title">Update Prescription Type
                      <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg1'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/update_prescription_package', $attributes);
?>
<?php foreach ($pres_package as $key => $value) {
    $prescription_type = $value->prescription_type;
    $lense_name = $value->lense_name;
    $price = $value->price;
    $description = $value->description;
    $id = $value->id;

}?>
  <div class="form-group" style="margin-top: 1rem;">
                          <select class="js-example-basic-single"  name="pres_name" id="pres_name" style="width:100%">
                            <option value="<?php echo $prescription_type; ?>"><?php echo $prescription_type; ?></option>
                         <?php if (@$pres_data) {
    foreach ($pres_data as $key => $pres_dat) {
        if ($pres_dat->prescription_type != $prescription_type) {
            ?>
                          <option value="<?php echo $pres_dat->prescription_type ?>"><?php echo $pres_dat->prescription_type ?></option>
                         <?php }}
}?>
                        </select>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" value="<?php echo $lense_name ?>" placeholder="Lense Name" aria-label="Category" name="lense_name" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('lense_name'); ?>
                      </div>

                           <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" value="<?php echo $price ?>"  placeholder="Package Price" aria-label="Category" name="package_price" id="package_price" aria-describedby="colored-addon1">
                           <input type="hidden" value="<?php echo $id ?>"  name="id">
                        </div>


                    <div class="form-group" style="margin-top: 1rem;">

                      <div class="form-group" style="margin-top: 1rem;">
                         <h4 class="card-title">Product Description</h4>
                       <textarea id="summernoteExample" name="content" placeholder="Product Description..."><?php echo $description ?></textarea>

                    </div>
                  </div>



                      <button type="submit" name="updateprescription_package" value="updateprescription_package" class="btn btn-success mr-2">Submit</button>
                     <a href=<?php echo base_url('admin/addprescription'); ?>>Back</a>
                </form>
              </div>
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
