<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Dec 2018 15:34:07 GMT -->
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
        <div class="content-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card px-2">
                      <div class="card-body">
                        <?php if (!empty($user_order)) {
    foreach ($user_order as $userorder) {?>

                          <div class="container-fluid">
                            <h3 class="text-right my-5">Order Id&nbsp;&nbsp;<?php echo $userorder->order_id; ?></h3>
                            <hr>
                          </div>
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 pl-0">
                              <p class="mt-5 mb-2"><b>Name: <?php echo $userorder->username; ?></b></p>
                              <p>Phone <?php echo $userorder->phone; ?>,<br>Email:<?php echo $userorder->email; ?>,<br>Alternate Phone:<?php echo $userorder->altphone; ?></p>
                            </div>
                            <div class="col-lg-3 pr-0">
                              <p class="mt-5 mb-2 text-right"><b>Ship to</b></p>
                              <p class="text-right"><?php echo $userorder->address; ?>,<br> <?php echo $userorder->city; ?>:<?php echo $userorder->pincode; ?>,<br> <?php echo $userorder->state; ?>.</p>
                            </div>
                          </div>
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 pl-0">
                              <p class="mb-0 mt-5">Place Date : <?php echo $userorder->order_date; ?></p>
                              <p>Delivery Date : <?php echo $userorder->deliverydate; ?></p>
                            </div>
                          </div>
                        <?php }}?>
                          <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table">
                                  <thead>
                                    <tr class="bg-dark text-white">

                                        <th>Product Name</th>
                                         <th>Color</th>
                                          <th>Prescription Type</th>
                                           <th>Left Eye sphere</th>
                                           <th>Right Eye sphere</th>
                                           <th>Left Eye Axis</th>
                                           <th>Right Eye Axis</th>
                                           <th>Left Eye Cylinder</th>
                                           <th>Right Eye Cylinder</th>
                                           <th>Left Eye Box</th>
                                           <th>Right Eye Box</th>
                                        <th class="text-right">Quantity</th>
                                        <th class="text-right">Unit cost</th>
                                        <th class="text-right">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody><?php

if (!empty($order_cart_data)) {$qty = 0;
    $taxx = 0;
    foreach ($order_cart_data as $order_cartdata) {
        $qty = $order_cartdata->qty + $qty;

        if (empty($order_cartdata->lense_price)) {
            if ($order_cartdata->tax != 0) {
                $taxx = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->tax / 100;}
            $subtotal = $order_cartdata->price * $order_cartdata->qty;
            $total = $order_cartdata->price * $order_cartdata->qty + $taxx;

        } else {
            if ($order_cartdata->tax != 0) {
                $taxx = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->lense_price * $order_cartdata->tax / 100;
            }
            $subtotal = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->lense_price;
            $total = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->lense_price + $taxx;
        }
        ?>
                                    <tr class="text-right">
                                       <td><?php echo $order_cartdata->name; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->color; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->prescription_type; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->lsphere; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->rsphere; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->laxis; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->raxis; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->lcylinder; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->rcylinder; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->lbox; ?></td>
                                      <td class="text-left"><?php echo $order_cartdata->rbox; ?></td>

                                      <td><?php echo $order_cartdata->qty; ?></td>
                                      <td>Rs <?php echo $order_cartdata->price; ?></td>
                                      <td>Rs <?php echo $subtotal; ?></td>
                                    </tr>
                                  <?php }}?>

                                  </tbody>
                                </table>
                              </div>
                          </div>
                          <div class="container-fluid mt-5 w-100">
                            <p class="text-right mb-2">Sub - Total amount: Rs <?php echo $subtotal; ?></p>
                            <p class="text-right">Tax : Rs <?php echo $taxx; ?></p>
                            <h4 class="text-right mb-5">Total : Rs <?php echo $total; ?></h4>
                            <hr>
                          </div>
                          <div class="container-fluid w-100">
                            <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i class="mdi mdi-printer mr-1"></i>Print</a>
                            <a href="#" class="btn btn-success float-right mt-4"><i class="mdi mdi-telegram mr-1"></i>Send Invoice</a>
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


<!-- Mirrored from www.urbanui.com/victory/pages/samples/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Dec 2018 15:34:07 GMT -->
</html>
