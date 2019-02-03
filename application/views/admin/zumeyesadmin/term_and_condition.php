<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Zumeyes Admin</title>
  <!-- plugins:css -->
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
   <?php include 'sidebar.php'?>
        <!-- partial -->
         <div class="content-wrapper" style="min-height:145px;">

         <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">About Description
                     <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>

                  <?php
echo form_open_multipart('admin/addtermand_condition');
?>

                  <textarea id="summernoteExample" name="content"></textarea>

                  <input type="submit" name="term" class="btn btn-primary btn-rounded btn-fw" value="Submit"/>
                   <button type="reset" class="btn btn-light">Cancel</button>
                </form>
                </div>
              </div>
            </div>
          </div>




 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Term And Condition Page Content</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Content</th>

                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if (@$faq_data) {
    foreach ($term_data as $key => $term_dat) {
        $id = $term_dat->id;
        $description = $faq_dat->description;
        $limitedstring = substr($description, 0, 20);

        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $limitedstring ?></td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/delete_term?id=<?php echo $id ?>" class="btn btn-outline-primary">Delete</a>

                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/updateabout?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
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
       <?php include 'footer.php';?>
</body>
</html>
