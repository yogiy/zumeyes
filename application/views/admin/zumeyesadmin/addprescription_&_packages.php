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
          <div class="row"><div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Prescription Name
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/addprescription', $attributes);
?>
         <div class="form-group">


                        <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required  placeholder="Prescription Name" aria-label="Category" name="pres_name" id="pres_name" aria-describedby="colored-addon1">
                        </div>
                       <?php echo form_error('pres_name'); ?>
                      </div>
                      <button type="submit" name="pres" value="submit" class="btn btn-success mr-2">Submit</button>
                     <button type="reset" class="btn btn-light">Cancel</button>
                </form>


</div>
</div>
</div>
</div>
</div>
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
     <div class="card-body">
                  <h4 class="card-title">Add Prescription Packages
                <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg2'); ?></span></h4>
                      <?php $attributes = array('class' => 'forms-sample');
echo form_open_multipart('admin/addprescription', $attributes);
?>

                         <div class="form-group" style="margin-top: 1rem;">
                          <select class="js-example-basic-single" required  name="pres_name" id="pres_name" style="width:100%">
                            <option>Select Prescription Name</option>
                         <?php if (@$pres_data) {
    foreach ($pres_data as $key => $pres_dat) {
        ?>
                          <option value="<?php echo $pres_dat->prescription_type ?>"><?php echo $pres_dat->prescription_type ?></option>
                         <?php }
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
                          <input type="text" required class="form-control" placeholder="Lense Name" aria-label="Category" name="lense_name" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('lense_name'); ?>
                      </div>

                           <div class="input-group" style="margin-top: 1rem;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" required  placeholder="Package Price" aria-label="Category" name="package_price" id="package_price" aria-describedby="colored-addon1">
                        </div>


                    <div class="form-group" style="margin-top: 1rem;">

                      <div class="form-group" style="margin-top: 1rem;">
                         <h4 class="card-title">Product Description</h4>
                       <textarea id="summernoteExample" required name="content" placeholder="Product Description..."></textarea>

                    </div>
                  </div>

                      <button type="submit" name="packege" value="packege" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
              </div>
            </div>
            </div>
          </div>
        </div>
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Prescription Name Type</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Prescription Name</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($pres_data) {
    foreach ($pres_data as $key => $pres_data) {
        $id = $pres_data->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $pres_data->prescription_type ?></td>

                            <td>
                             <form method="post" action="status_prescription_type" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $pres_data->status ?>">
                <input type="checkbox" name="status" value="<?php echo $pres_data->status ?>" <?php if ($pres_data->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_prescription_type?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
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
              <h4 class="card-title">Prescription Package</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Prescription Type</th>
                            <th>Package Name</th>
                            <th>Package Price(INR)</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if ($prespack_data) {
    foreach ($prespack_data as $key => $prespack_data) {
        $id = $prespack_data->id;
        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $prespack_data->prescription_type ?></td>
                            <td><?php echo $prespack_data->lense_name ?></td>
                            <td><?php echo $prespack_data->price ?></td>

                            <td>
                             <form method="post" action="status_prescription_package" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $prespack_data->status ?>">
                <input type="checkbox" name="status" value="<?php echo $prespack_data->status ?>" <?php if ($prespack_data->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/update_prescription_package?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
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
