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
        <?php if (isset($pro_data)) {
    foreach ($pro_data as $key => $pro_data) {
        @$pro_id = $pro_data->id;
        @$pro_product_name = $pro_data->product_name;
        @$pro_pro_image = $pro_data->pro_image;
        @$pro_featured_image = $pro_data->featuredimage;
        @$pro_sale_price = $pro_data->sale_price;
        @$pro_regular_price = $pro_data->regular_price;
        @$pro_brand = explode("|", $pro_data->brand);
        @$pro_color = explode("|", $pro_data->color);
        @$pro_purpose = explode("|", $pro_data->purpose);
        @$pro_fit = explode("|", $pro_data->fit);
        @$pro_material = explode("|", $pro_data->material);
        @$pro_shape = explode("|", $pro_data->shape);
        @$pro_lense_type = explode("|", $pro_data->lense_type);

        @$pro_cat_id = $pro_data->cat_id;
        @$pro_subcat_id = $pro_data->sub_cat_id;
        @$pro_sub_sub_catid = $pro_data->sub_sub_catid;

        @$pro_description = $pro_data->pro_description;
        @$pro_offer = $pro_data->offer;
        @$pro_frame_width = $pro_data->frame_width;
        @$pro_weight = $pro_data->weight;
        @$pro_quantity = $pro_data->quantity;
        @$pro_uses = $pro_data->uses;

        @$pro_bridge = $pro_data->bridge;
        @$pro_temple_length = $pro_data->temple_length;
        @$pro_water_content = $pro_data->water_content;
        @$pro_use_duration = $pro_data->use_duration;
        @$pro_packageing = $pro_data->packageing;
        @$pro_lense_width = $pro_data->lense_width;
        @$pro_lense_height = $pro_data->lense_height;

        @$pro_feature = $pro_data->features;
        @$pro_tag = $pro_data->tags;
        @$pro_frame_style = $pro_data->frame_style;

    }

}?>
         <div class="content-wrapper" style="min-height:145px;">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add product
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/product_doupdate', $attributes);
?>
  <input type="hidden" name="proid" value="<?php echo $pro_id ?>">
     <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_product_name ?>" class="form-control" placeholder="Product Name" aria-label="Category" name="product_name" id="product_name" aria-describedby="colored-addon1">
                           <?php echo form_error('product_name'); ?>
                        </div>
                         <div class="form-group" style="margin-top: 1rem;">
                          <select class="js-example-basic-single"  name="cat_name" id="cat_name" style="width:100%">
                            <?php if (@$cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        if ($cat_dat->id == $pro_cat_id) {?><option value="<?php echo $cat_dat->id; ?>">
               <?php echo $cat_dat->cat_name; ?></option><?php }}}?>
                   <!--      <?php if (@$cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        if ($cat_dat->id != $pro_cat_id) {
            ?>
                          <option value="<?php echo $cat_dat->id ?>"><?php echo $cat_dat->cat_name ?></option>
                         <?php }}
}?>-->
                        </select>
                          <?php echo form_error('cat_name'); ?>
                      </div>
                      <div id="allhide">
                      <div class="form-group" style="margin-top: 1rem;">
                        <select class="js-example-basic-single" name="sub_cat_id" style="width:100%" id="sub_cat_name">
                          <?php if (@$subcat_data) {
    foreach ($subcat_data as $key => $subcat_dat) {
        if ($subcat_dat->id == $pro_subcat_id) {?>
                            <option value="<php echo $subcat_dat->id>"><?php echo $subcat_dat->sub_cat_name; ?></option>
                        <?php }}}?>
                        </select>
                                          <?php echo form_error('sub_cat_id'); ?>
                      </div>
                       <div class="form-group" style="margin-top: 1rem;">
                        <select class="js-example-basic-single" name="sub_sub_cat_id" style="width:100%" id="sub_sub_cat_name">
                           <?php if (@$sub_subcat_data) {
    foreach ($sub_subcat_data as $key => $sub_subcat_dat) {
        if ($sub_subcat_dat->id == $pro_sub_sub_catid) {?>
                            <option><?php echo $sub_subcat_dat->sub_sub_cat; ?></option>
                        <?php }}}?>
                        </select>
                                    <?php echo form_error('sub_sub_cat_id'); ?>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Brand</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($brand_name as $key => $brand) {
    if (@$pro_brand) {

        ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" <?php foreach ($pro_brand as $key => $pro_brandd) {if ($pro_brandd == $brand->brand_name) {?>checked <?php }}?> class="form-check-input" name="brand_name[]" value="<?php echo $brand->brand_name; ?>">
                               <?php echo $brand->brand_name; ?>
                            </label>
                            <?php echo form_error('brand_name'); ?>
                            </div>
                          </div>
                          <?php }}?>
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
                              <input type="checkbox" <?php foreach ($pro_color as $key => $pro_colorr) {if ($pro_colorr == $color->color_name) {?>checked <?php }}?> class="form-check-input" name="color_name[]" value="<?php echo $color->color_name; ?>">
                               <?php echo $color->color_name; ?>
                            </label>
                            <?php echo form_error('color_name'); ?>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                       <div class="form-group" id="fit" style="margin-top: 1rem;display:;">
                           <h4 class="card-title">Fit</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($fit_name as $key => $fit) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" <?php foreach ($pro_fit as $key => $pro_fitt) {if ($pro_fitt == $fit->fit_name) {?>checked <?php }}?>  class="form-check-input" name="fit_name[]" value="<?php echo $fit->fit_name; ?>">
                               <?php echo $fit->fit_name; ?>
                            </label>
                            <?php echo form_error('fit_name'); ?>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                       <div class="form-group" id="purpose" style="margin-top: 1rem;">
                           <h4 class="card-title">Purpose</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($purpose_name as $key => $purpose) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" <?php foreach ($pro_purpose as $key => $pro_purposee) {if ($pro_purposee == $purpose->purpose_name) {?>checked <?php }}?> class="form-check-input" name="purpose_name[]" value="<?php echo $purpose->purpose_name; ?>">
                               <?php echo $purpose->purpose_name; ?>
                            </label>
                            <?php echo form_error('purpose_name'); ?>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                       <div class="form-group" id="shape" style="margin-top: 1rem;">
                           <h4 class="card-title">Shape</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php

foreach ($shape_name as $key => $shape) {
    ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" <?php foreach ($pro_shape as $key => $pro_shapee) {if ($pro_shapee == $shape->shape_type) {?>checked <?php }}?> class="form-check-input" name="shape_type[]" value="<?php echo $shape->shape_type; ?>">
                               <?php echo $shape->shape_type; ?>
                            </label>
                            <?php echo form_error('shape_name'); ?>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                      <div class="form-group" id="lensetype" style="margin-top: 1rem;">
                           <h4 class="card-title">Lense Type</h4>
                          <div class="form-group row" style="margin-top: 1rem;">

                           <?php
if (isset($lense_uses)) {
    foreach ($lense_uses as $key => $lense) {
        ?>
                                       <div class="col-sm-4">
                                      <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" <?php foreach ($pro_lense_type as $key => $pro_lense_typee) {if ($pro_lense_typee == $lense->uses) {?>checked <?php }}?>  class="form-check-input" name="lense_type[]" value="<?php echo $lense->uses; ?>">
                               <?php echo @$lense->uses; ?>
                            </label>
                            <?php echo form_error('lense_type'); ?>
                            </div>
                          </div>
                          <?php }}?>
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
                              <input type="checkbox" <?php foreach ($pro_material as $key => $pro_materiall) {if ($pro_materiall == $material->material_name) {?>checked <?php }}?> class="form-check-input" name="material_name[]" value="<?php echo $material->material_name; ?>">
                               <?php echo $material->material_name; ?>
                            </label>
                            <?php echo form_error('material_name'); ?>
                            </div>
                          </div>
                          <?php }?>
                      </div>
                      </div>
                      <div class="form-group" style="margin-top: 1rem;">
                         <h4 class="card-title">Weight</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_weight ?>" class="form-control" placeholder="Product Weight" aria-label="Category" name="weight" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('weight'); ?>
                      </div>
                     <div class="form-group" id="framewidth" style="margin-top: 1rem;">
                       <h4 class="card-title">Frame Width</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_frame_width ?>" class="form-control" placeholder="Frame Width" aria-label="Category" name="frame_width" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('frame_width'); ?>
                      </div>
                       <div class="form-group" id="framestyle" style="margin-top: 1rem;">
                         <h4 class="card-title">Frame Style</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_frame_style ?>" class="form-control" placeholder="Frame Style Like Full Rim" aria-label="Category" name="frame_style" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('frame_style'); ?>
                      </div>
                       <div class="form-group" id="features" style="margin-top: 1rem;">
                         <h4 class="card-title">Features</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" value="<?php echo $pro_feature ?>" placeholder="Produc Feature Example Spring Hinges , Custom engraving" aria-label="Category" name="features" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('features'); ?>
                      </div>
                       <div class="form-group" id="tag" style="margin-top: 1rem;">
                         <h4 class="card-title">Tags</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_tag ?>" class="form-control" placeholder="Tags... Example Like Neutral Glasses" aria-label="Category" name="tag" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('tag'); ?>
                      </div>
                       <div class="form-group" id="lensewidth" style="margin-top: 1rem;">
                         <h4 class="card-title">Lense Width</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_lense_width ?>" class="form-control" placeholder="Lense Width" aria-label="Category" name="lense_width" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('lense_width'); ?>
                      </div>
                        <div class="form-group" id="lenseheight" style="margin-top: 1rem;">
                           <h4 class="card-title">Lense Height</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" value="<?php echo $pro_lense_height ?>" placeholder="Lense Height" aria-label="Category" name="lense_height" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('lense_height'); ?>
                      </div>

                        <div class="form-group" id="templelength" style="margin-top: 1rem;">
                           <h4 class="card-title">Temple Length</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_temple_length ?>" class="form-control" placeholder="Temple Length" aria-label="Category" name="temple_length" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('temple_length'); ?>
                      </div>
                       <div class="form-group" id="bridge" style="margin-top: 1rem;">
                         <h4 class="card-title">Bridge</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_bridge ?>" class="form-control" placeholder="Bridge" aria-label="Category" name="bridge" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('bridge'); ?>
                      </div>

                      <div class="form-group" id="package" style="margin-top: 1rem;">

                         <h4 class="card-title">No Of Lenses In A Package</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_packageing ?>" class="form-control" placeholder="No. of lense in one Package" aria-label="Category" name="lense_inpackage" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('lense_inpackage'); ?>
                      </div>
                       <div class="form-group" id="lenseuses" style="margin-top: 1rem;">
                         <h4 class="card-title">Lense Uses</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_uses ?>" class="form-control" placeholder="Lense Type Example Like  Monthly Disposable" aria-label="Category" name="lense_uses" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('lense_uses'); ?>
                      </div>
                       <div class="form-group" id="watercontent" style="margin-top: 1rem;">
                         <h4 class="card-title">Water Content</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_water_content ?>" class="form-control" placeholder="Water Content Example Like 50%" aria-label="Category" name="water_content"  aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('water_content'); ?>
                      </div>
                       <div class="form-group" id="useduration" style="margin-top: 1rem;">
                         <h4 class="card-title">Use Duration Limit</h4>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_use_duration ?>" class="form-control" placeholder="Lense Usage Duration Like Monthly" aria-label="Category" name="use_duration" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('use_duration'); ?>
                      </div>
                       <div class="form-group" style="margin-top: 1rem;">

                        <h4 class="card-title">Product Price</h4>
                           <div class="input-group" >

                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_regular_price ?>" class="form-control"  placeholder="Product Price" aria-label="Category" name="product_price" id="product_price" aria-describedby="colored-addon1">
                          <?php echo form_error('product_price'); ?>
                        </div>
                      </div>
                       <div class="form-group" style="margin-top: 1rem;">
                          <h4 class="card-title">Available Quantity</h4>
                           <div class="input-group" >

                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_quantity ?>" class="form-control"  placeholder="Product Quantity" aria-label="Category" name="product_quantity" id="product_quantity" aria-describedby="colored-addon1">
                          <?php echo form_error('product_quantity'); ?>
                        </div>
                      </div>
                         <div class="form-group" style="margin-top: 1rem;">
                           <h4 class="card-title">Offer On Product</h4>
                           <div class="input-group" >

                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" value="<?php echo $pro_offer ?>" class="form-control"  placeholder="Offer In Percentage(Don't put % sign)" aria-label="Category" name="offer" id="offer" aria-describedby="colored-addon1">
                          <?php echo form_error('offer'); ?>
                        </div>
                      </div>
                        <div class="form-group" style="margin-top: 1rem;">

                    <?php echo form_upload(['name' => 'userfile', 'class' => 'file-upload-default', 'value' => '' . $pro_pro_image . '']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" value="<?php echo $pro_pro_image ?>" class="form-control file-upload-info" disabled placeholder="Upload product Image">
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
                    <?php echo form_upload(['multiple' => '', 'name' => 'featuredimage[]', 'class' => 'file-upload-default', 'value' => '' . $pro_featured_image . '']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" value="<?php echo $pro_featured_image ?>" class="form-control file-upload-info" disabled placeholder="Upload Fetured Images">
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
                       <textarea id="summernoteExample" name="content" placeholder="Product Description..."><?php echo $pro_description ?></textarea>

                    </div>
                  </div>

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                    </div>
                  </div>
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
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">© 2018 Zumeyes. All rights resereved</span>
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

        var cat_id= $('#cat_name').val();

        if(cat_id == '13' || cat_id == '14'){
              document.getElementById('lenseuses').style.display = "none";
             document.getElementById('watercontent').style.display = "none";
         document.getElementById('lensetype').style.display = "none";
         document.getElementById('useduration').style.display = "none";
         document.getElementById('package').style.display = "none";
         document.getElementById('allhide').style.display = "";

          document.getElementById('fit').style.display = "";
        document.getElementById('shape').style.display = "";
         document.getElementById('purpose').style.display = "";
         document.getElementById('framewidth').style.display = "";
        document.getElementById('lensewidth').style.display = "";
         document.getElementById('bridge').style.display = "";
        document.getElementById('templelength').style.display = "";
        document.getElementById('lenseheight').style.display = "";
        document.getElementById('features').style.display = "";
        document.getElementById('tag').style.display = "";
        document.getElementById('framestyle').style.display = "";
        document.getElementById('allhide').style.display = "";


          }
        if(cat_id == '15'){
       document.getElementById('fit').style.display = "none";
        document.getElementById('shape').style.display = "none";
         document.getElementById('purpose').style.display = "none";
         document.getElementById('framewidth').style.display = "none";
        document.getElementById('lensewidth').style.display = "none";
         document.getElementById('bridge').style.display = "none";
        document.getElementById('templelength').style.display = "none";
        document.getElementById('lenseheight').style.display = "none";
        document.getElementById('features').style.display = "none";
        document.getElementById('tag').style.display = "none";
        document.getElementById('framestyle').style.display = "none";
        document.getElementById('allhide').style.display = "";

        document.getElementById('lenseuses').style.display = "";
             document.getElementById('watercontent').style.display = "";
         document.getElementById('lensetype').style.display = "";
         document.getElementById('useduration').style.display = "";
         document.getElementById('package').style.display = "";


          }


       /* if(cat_id){
            $.ajax({
                 type:'POST',
                 url:'<?php echo site_url('admin/dropsubcat_ajaxData') ?>',
                 data:'cat_id='+cat_id,
                success:function(data){
                   $('#sub_cat_name').html(data);
                }
            });
        }
        else{
            $('#sub_cat_name').html('<option value="">Select Category name first</option>');
        }*/

});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#sub_cat_name').on('change',function(){
        var subcat_id= $(this).val();


        if(subcat_id){
            $.ajax({
                 type:'POST',
                 url:'<?php echo site_url('admin/dropsubsubcat_ajaxData') ?>',
                 data:'subcat_id='+subcat_id,
                 async:false,
                success:function(data){

                   $('#sub_sub_cat_name').html(data);
                }
            });
        }
        else{
            $('#sub_sub_cat_name').html('<option value="">Select Sub Category name first</option>');
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
