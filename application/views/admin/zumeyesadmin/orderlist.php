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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/zumeyes/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" />

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
        <!-- partial:../../partials/_sidebar.html -->

        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Orders</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                      <div class="alert alert-warning" role="alert">
                          <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="order-listing" class="table" cellspacing="0" width="100%">
                          <thead>
                            <tr class="bg-primary text-white">
                                <th>Order Id #</th>
                                <th>Customer</th>
                                <th>Ship to</th>
                                <th>Total Price</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if (!empty($user_order)) {
    foreach ($user_order as $userorder) {?>


                            <tr>
                                <td><?php echo $userorder->order_id; ?></td>
                                <td><?php echo $userorder->username; ?></td>
                                <td><?php echo $userorder->city; ?></td>
                                <td><?php echo $userorder->phone; ?></td>
                                <td><?php echo $userorder->amount; ?></td>
                                <td>
                                  <label class="badge badge-info">On hold</label>
                                </td>
                                <td><a href="<?php echo base_url('admin/orderDetail'); ?>?id=<?php echo $userorder->id ?>">
                                  <button class="btn btn-light">
                                    <i class="mdi mdi-eye text-primary"></i>View
                                  </button></a>
                                  <button class="btn btn-light">
                                    <i class="mdi mdi-close text-danger"></i>Remove
                                  </button>
                                </td>
                            </tr>
                           <?php }}?>
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
        <?php include 'footer.php';?>
        <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="<?php echo base_url(); ?>assets/zumeyes/node_modules/datatables.net/js/jquery.dataTables.js"></script>

</body>

</html>
