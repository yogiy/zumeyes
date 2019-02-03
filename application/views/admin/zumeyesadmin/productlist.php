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






 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Product List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                             <th>SubCategory Name</th>
                              <th>Price(INR)</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sr_no = 1;
if (@$pro_list) {
    foreach ($pro_list as $key => $pro_dat) {
        $id = $pro_dat->id;
        $pro_name = $pro_dat->product_name;
        $sale_price = $pro_dat->sale_price;
        $cat_id = $pro_dat->cat_id;
        $sub_cat_id = $pro_dat->sub_cat_id;

        ?>
                        <tr>
                            <td><?php echo $sr_no; ?></td>
                            <td><?php echo $pro_name ?></td>
                            <td><?php
foreach ($cat_list as $key => $value) {
            $cat_name = $value->cat_name;
            $cat_name_id = $value->id;

            if ($cat_name_id == $cat_id) {?><?php echo $cat_name;}} ?></td>
                            <td><?php foreach ($subcat_list as $key => $subvalue) {
            $sub_cat_name = $subvalue->sub_cat_name;
            $subcat_name_id = $subvalue->id;
            if ($subcat_name_id == $sub_cat_id) {echo $sub_cat_name;}
        }?></td>
              <td><?php echo $sale_price ?></td>
                            <td>

                             <form method="post" action="status_product" class="cartupdate">
                  <input type="hidden" name="id"  value="<?php echo $id ?>">
                  <input type="hidden" name="status"  value="<?php echo $pro_dat->status ?>">
                <input type="checkbox" name="status" value="<?php echo $pro_dat->status ?>" <?php if ($pro_dat->status == 1) {?> checked <?php }?> id="cylL" placeholder="01" onchange="this.form.submit()">
                 <label for="flat-checkbox-2">Active</label>
                </form>
                            </td>
                            <td>
                              <a href="<?php echo site_url() ?>admin/product_update?id=<?php echo $id ?>" class="btn btn-outline-primary">Update</a>
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
