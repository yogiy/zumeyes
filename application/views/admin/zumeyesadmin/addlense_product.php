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
    <?php include 'header.php';?>
    <!-- partial -->

        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
     <?php include 'sidebar.php';?>
        <!-- partial -->
         <div class="content-wrapper" style="min-height:145px;">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Contact Lense Or It's Accessories product
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/product_insert', $attributes);
?>
     <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control"  placeholder="Product Name" aria-label="Category" name="product_name" id="product_name" aria-describedby="colored-addon1">
                        </div>
                         <div class="form-group" style="margin-top: 1rem;">
                          <select class="js-example-basic-single"  name="cat_name" id="cat_name" style="width:100%">
                            <option>Select Category Name</option>
                         <?php if (@$cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        ?>
                          <option value="<?php echo $cat_dat->id ?>"><?php echo $cat_dat->cat_name ?></option>
                         <?php }
}?>
                        </select>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                        <select class="js-example-basic-single" name="sub_cat_id" style="width:100%" id="sub_cat_name">
                            <option>Select Category Name First</option>

                        </select>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Brand</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($brand_name as $key => $brand) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="brand_name[]" value="<?php echo $brand->brand_name; ?>">
                               <?php echo $brand->brand_name; ?>
                            </label>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                       <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Color</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($color_name as $key => $color) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="color_name[]" value="<?php echo $color->color_name; ?>">
                               <?php echo $color->color_name; ?>
                            </label>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                       <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Fit</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($fit_name as $key => $fit) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="fit_name[]" value="<?php echo $fit->fit_name; ?>">
                               <?php echo $fit->fit_name; ?>
                            </label>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                       <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Purpose</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($purpose_name as $key => $purpose) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="purpose_name[]" value="<?php echo $purpose->purpose_name; ?>">
                               <?php echo $purpose->purpose_name; ?>
                            </label>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                       <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Shape</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($shape_name as $key => $shape) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="shape_type[]" value="<?php echo $shape->shape_type; ?>">
                               <?php echo $shape->shape_type; ?>
                            </label>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Style</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($style_name as $key => $style) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="style_type[]" value="<?php echo $style->style_name; ?>">
                               <?php echo $style->style_name; ?>
                            </label>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                       <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Material</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($material_name as $key => $material) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="material_name[]" value="<?php echo $material->material_name; ?>">
                               <?php echo $material->material_name; ?>
                            </label>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Product Weight" aria-label="Category" name="weight" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('weight'); ?>
                      </div>
                     <div class="form-group" style="margin-top: 1rem;">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Product Dimension" aria-label="Category" name="dimension" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('dimension'); ?>
                      </div>

                           <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control"  placeholder="Product Price" aria-label="Category" name="product_price" id="product_price" aria-describedby="colored-addon1">
                        </div>
                           <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control"  placeholder="Product Quantity" aria-label="Category" name="product_quantity" id="product_quantity" aria-describedby="colored-addon1">
                        </div>
                           <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control"  placeholder="Offer" aria-label="Category" name="offer" id="offer" aria-describedby="colored-addon1">
                        </div>
                        <div class="form-group" style="margin-top: 1rem;">

                      <?php echo form_upload(['name' => 'userfile', 'class' => 'file-upload-default']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload product Image">
                        <div class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </div>
                        <?php
if (isset($upload_error)) {
    echo $upload_error;

}?>
                      </div>
                    </div>
                    <div class="form-group" style="margin-top: 1rem;">
                    <?php echo form_upload(['multiple' => '', 'name' => 'featuredimage[]', 'class' => 'file-upload-default']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Fetured Images">
                        <div class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </div>
                        <?php
if (isset($fupload_error)) {
    echo $fupload_error;

}?>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                         <h4 class="card-title">Product Description</h4>
                       <textarea id="summernoteExample" name="content" placeholder="Product Description..."></textarea>

                    </div>
                  </div>
                      </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
    $('#cat_name').on('change',function(){
        var cat_id= $(this).val();

        if(cat_id){
            $.ajax({
                 type:'POST',
                 url:'<?php echo site_url('admin/dropsubcat_ajaxData') ?>',
                 data:'cat_id='+cat_id,
                 async:false,
                success:function(data){

                   $('#sub_cat_name').html(data);
                }
            });
        }
        else{
            $('#sub_cat_name').html('<option value="">Select Category name first</option>');
        }
    });
});
</script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/icheck/icheck.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/typeahead.js/dist/typeahead.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/select2/dist/js/select2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/summernote/dist/summernote-bs4.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/misc.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/file-upload.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/iCheck.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/typeahead.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/select2.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/js/editorDemo.js"></script>
  <!-- End custom js for this page-->

</body>
</html>
