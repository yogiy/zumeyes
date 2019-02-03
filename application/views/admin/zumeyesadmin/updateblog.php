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
    <?php include 'sidebar.php';?>
        <!-- partial -->
         <div class="content-wrapper" style="min-height:145px;">
         <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Write Blog
                     <span style="color:blue;padding-left:70px">
              <?php echo $this->session->flashdata('form_succ_msg'); ?></span></h4>

                  <?php
echo form_open_multipart('admin/blog_update');
foreach ($blog_data as $key => $blog_dat) {
    $id = $blog_dat->id;
}
?>                <div class="form-group" style="margin-top: 1rem;">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-info bg-info" id="colored-addon1">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Blog title" aria-label="Category" value="<?php echo $blog_dat->title ?>" name="title" aria-describedby="colored-addon1">
                        </div>
                        <?php echo form_error('title'); ?>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $blog_dat->id ?>">
                      <div class="form-group">
                       <div class="form-group" style="margin-top: 1rem;">

                      <?php echo form_upload(['name' => 'blogimage', 'class' => 'file-upload-default', 'value' => '' . $blog_dat->image . '']) ?>
                      <div class="input-group col-xs-12">
                        <input type="text" value="<?php echo $blog_dat->image ?>" class="form-control file-upload-info" disabled placeholder="Upload Image">
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
                  <textarea id="summernoteExample" name="content"><?php echo $blog_dat->description; ?></textarea>

                  <input type="submit" name="blog_update" class="btn btn-primary btn-rounded btn-fw" value="Submit"/>
                    <a href=<?php echo base_url('admin/addblog'); ?>>Back</a>
                </form>

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
