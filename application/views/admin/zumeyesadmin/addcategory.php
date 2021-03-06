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
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_settings-panel.html -->
       <?php include 'sidebar.php';?>
        <!-- partial -->
         <div class="content-wrapper" style="min-height:145px;">
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
echo form_open_multipart('admin/category_insert', $attributes);
?>

 <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required placeholder="Category" aria-label="Category" name="cat_name" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('cat_name'); ?>
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
                  <h4 class="card-title">Add Sub Category Name
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg2'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/sub_cat_insert', $attributes);
?>
 <div class="form-group">
                          <select class="js-example-basic-single" required onclick="document.getElementById('sub_cat_name').disabled = true;" name="cat_name" style="width:100%">
                            <option value="">Select Category Name</option>
                         <?php if ($cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        ?>
                          <option value="<?php echo $cat_dat->id ?>"><?php echo $cat_dat->cat_name ?></option>
                         <?php }
}?>
                        </select>

                        <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required placeholder="Sub Category" aria-label="Category" name="sub_cat_name" id="sub_cat_name" aria-describedby="colored-addon1">
                        </div>

                        <div class="form-group" style="margin-top: 1rem;">

                      <?php echo form_upload(['name' => 'userfile', 'class' => 'file-upload-default', 'id' => 'userfile1']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
       <div class="col-md-6 grid-margin stretch-card">
             <div class="card">
           <div class="card-body">
                  <h4 class="card-title">Add Sub About Sub Category
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg3'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/sub_sub_cat_insert', $attributes);
?>
  <div class="form-group" style="margin-top: 1rem;">
                          <select class="js-example-basic-single" required name="cat_id" id="cat_name" style="width:100%">
                            <option value="">Select Category Name</option>
                         <?php if (@$cat_data) {
    foreach ($cat_data as $key => $cat_dat) {
        ?>
                          <option value="<?php echo $cat_dat->id ?>"><?php echo $cat_dat->cat_name ?></option>
                         <?php }
}?>
                        </select>
                      </div>

                       <div class="form-group" style="margin-top: 1rem;">
                        <select class="js-example-basic-single" required name="sub_cat_id" style="width:100%" id="sub_cat_data">
                            <option value="">Select Category Name First</option>

                        </select>
                      </div>
                          <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required placeholder="Sub About Sub Category" aria-label="Category" name="sub_sub_cat_name"aria-describedby="colored-addon1">
                        </div>
                        <div class="form-group" style="margin-top: 1rem;">

                      <?php echo form_upload(['name' => 'userfile', 'class' => 'file-upload-default', 'id' => 'userfile2']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
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

                            <th>Status</th>
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
                            <td><form method="post" action="status_category" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $cat_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $cat_dat->status ?>" <?php if ($cat_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>

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
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if (!empty($subcat_data)) {
    foreach ($subcat_data as $key => $subcat_dat) {
        $id = $subcat_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <?php foreach ($cat_data as $key => $cat_dat) {
            if ($subcat_dat->cat_name == $cat_dat->id) {?>
                            <td><?php echo $cat_dat->cat_name ?></td>
                          <?php }}?>
                            <td><?php echo $subcat_dat->sub_cat_name ?></td>
                            <td><form method="post" action="status_subcategory" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $subcat_dat->id ?>">
                  <input type="hidden" name="status"  value="<?php echo $subcat_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $subcat_dat->status ?>" <?php if ($subcat_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>


                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_subcategory?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
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
              <h4 class="card-title">Sub of Sub Category Name List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Category Name</th>
                            <th>Sub Category Name</th>
                            <th>Sub Of Sub Category Name</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if (!empty($sub_subcat_data)) {
    foreach ($sub_subcat_data as $key => $sub_subcat_dat) {
        $id = $sub_subcat_dat->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <?php if (!empty($cat_data)) {foreach ($cat_data as $key => $cat_dat) {
            if ($cat_dat->id == $sub_subcat_dat->cat_name) {?>
                            <td><?php echo $cat_dat->cat_name ?></td>
                          <?php }}}?>

                            <td> <?php if (!empty($subcat_data)) {foreach ($subcat_data as $key => $subcat_dataa) {
            if ($sub_subcat_dat->sub_cat_name == $subcat_dataa->id) {?><?php echo $subcat_dataa->sub_cat_name ?>
                               <?php }}}?>
                            </td>

                            <td><?php echo $sub_subcat_dat->sub_sub_cat ?></td>
                            <td><form method="post" action="status_sub_subcategory" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $sub_subcat_dat->id ?>">
                  <input type="hidden" name="status"  value="<?php echo $sub_subcat_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $sub_subcat_dat->status ?>" <?php if ($sub_subcat_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>


                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_sub_subcategory?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
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
  </div>

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">© <?php echo date('Y') ?> Zumeyes. All rights resereved</span>

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
    alert(cat_id);
        if(cat_id){
            $.ajax({
                 type:'POST',
                 url:'<?php echo site_url('admin/dropsubcat_ajaxData') ?>',
                 data:'cat_id='+cat_id,
                 async:false,
                success:function(data){

                   $('#sub_cat_data').html(data);
                }
            });
        }
        else{
            $('#sub_cat_data').html('<option value="">Select Category name first</option>');
        }
    });
});
</script>
 <script type="text/javascript">
  $(document).ready(function(){
    $('.status').on('click',function(){
        var status= $(this).val();
    alert(status);
    if(status){
            $.ajax({
                 type:'POST',
                 url:'<?php echo site_url('status/status_category') ?>',
                 data:'status='+status,
                 async:false,
                success:function(data){


                }
            });
        }
        else{
            $('#sub_cat_data').html('<option value="">Select Category name first</option>');
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
  <!-- End custom js for this page-->
</body>

 <script type="text/javascript">
  $(document).ready(function(){

  document.getElementById("userfile1").required = true;
   document.getElementById("userfile2").required = true;

});
</script>
</html>
