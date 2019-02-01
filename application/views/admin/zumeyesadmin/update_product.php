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
                  <h4 class="card-title">Add product Name
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/product_update', $attributes);
foreach ($product_data as $key => $product_dat) {
    $id = $product_dat->id;
    $cat_id = $product_dat->cat_id;
    $sub_cat_id = $product_dat->sub_cat_id;
    $product_namee = $product_dat->product_name;
    $pro_description = $product_dat->pro_description;
    $regular_price = $product_dat->regular_price;
    $offer = $product_dat->offer;
    $product_name = $product_dat->dimension;
    $dimension = $product_dat->product_name;
    $weight = $product_dat->weight;
    $quantity = $product_dat->quantity;
    $brandd = explode("|", $product_dat->brand);
    $colorr = explode("|", $product_dat->color);
    $stylee = explode("|", $product_dat->style);
    $purposee = explode("|", $product_dat->purpose);
    $fitt = explode("|", $product_dat->fit);
    $materiall = explode("|", $product_dat->material);
    $shapee = explode("|", $product_dat->shape);
}

?>
     <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                           <input type="hidden" name="id" value="<?php echo $id ?>" aria-describedby="colored-addon1">
                          <input type="text" class="form-control" value="<?php echo $product_namee; ?>" placeholder="Product Name" aria-label="Category" name="product_name" id="product_name" aria-describedby="colored-addon1">
                        </div>
                         <div class="form-group" style="margin-top: 1rem;">
                          <select class="js-example-basic-single"  name="cat_name" id="cat_name" style="width:100%">

                         <?php if (@$cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        ?>
                         <?php if ($cat_id == $cat_dat->id) {?>
                          <option value="<?php echo $cat_dat->id ?>"><?php echo $cat_dat->cat_name; ?></option>
                         <?php }}
    foreach ($cat_data as $key => $cat_dat) {
        ?>
                          ><?php if ($cat_id != $cat_dat->id) {?>
                          <option value="<?php echo $cat_dat->id ?>"><?php echo $cat_dat->cat_name; ?></option>
                         <?php }}
}?>
                        </select>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                        <select class="js-example-basic-single" name="sub_cat_id" style="width:100%" id="sub_cat_name">
                            <?php if (@$subcat_data) {
    foreach ($subcat_data as $key => $subcat_dat) {
        ?>
                           <?php if ($sub_cat_id == $subcat_dat->id) {?>
                          <option value="<?php echo $subcat_dat->id ?>"><?php echo $subcat_dat->sub_cat_name; ?></option>
                         <?php }}

}?>
                        </select>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Brand</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($brand_name as $key => $brand) {
    $brand_namee = $brand->brand_name;
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="brand_name[]" value="<?php echo $brand_namee; ?>" <?php
foreach ($brandd as $key => $valuee) {
        if ($valuee == $brand_namee) {
            ?>checked <?php }}?> />
                               <?php echo $brand->brand_name;

    ?>
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
                              <input type="checkbox" class="form-check-input" name="color_name[]" value="<?php echo $color->color_name; ?>" <?php foreach ($colorr as $key => $colorr) {if ($colorr == $color->color_name) {?>checked <?php }}?>>
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
                              <input type="checkbox" class="form-check-input" name="fit_name[]" value="<?php echo $fit->fit_name; ?>" <?php foreach ($fitt as $key => $fitt) {if ($fitt == $fit->fit_name) {?>checked <?php }}?>>
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
                              <input type="checkbox" class="form-check-input" name="purpose_name[]" value="<?php echo $purpose->purpose_name; ?>" <?php foreach ($purposee as $key => $purposee) {if ($purposee == $purpose->purpose_name) {?>checked <?php }}?>>
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
                              <input type="checkbox" class="form-check-input" name="shape_type[]" value="<?php echo $shape->shape_type; ?>" <?php foreach ($shapee as $key => $shapee) {if ($shapee == $shape->shape_type) {?>checked <?php }}?>>
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
                              <input type="checkbox" class="form-check-input" name="style_type[]" value="<?php echo $style->style_name; ?>" <?php foreach ($stylee as $key => $stylee) {if ($stylee == $style->style_name) {?>checked <?php }}?>>
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
                              <input type="checkbox" class="form-check-input" name="material_name[]" value="<?php echo $material->material_name; ?>" <?php foreach ($materiall as $key => $materiall) {if ($materiall == $material->material_name) {?>checked <?php }}?>>
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
                          <input type="text" class="form-control" value="<?php echo $weight; ?>" placeholder="Product Weight" aria-label="Category" name="weight" aria-describedby="colored-addon1">
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
                          <input type="text" class="form-control" value="<?php echo $dimension; ?>" placeholder="Product Dimension" aria-label="Category" name="dimension" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('dimension'); ?>
                      </div>

                           <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" value="<?php echo $regular_price; ?>" placeholder="Product Price" aria-label="Category" name="product_price" id="product_price" aria-describedby="colored-addon1">
                        </div>
                           <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" value="<?php echo $quantity; ?>"  placeholder="Product Quantity" aria-label="Category" name="product_quantity" id="product_quantity" aria-describedby="colored-addon1">
                        </div>
                           <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" value="<?php echo $offer; ?>"  placeholder="Offer" aria-label="Category" name="offer" id="offer" aria-describedby="colored-addon1">
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
                       <textarea id="summernoteExample" name="content" placeholder="Product Description..."><?php echo $pro_description; ?></textarea>

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

</body>
</html>
