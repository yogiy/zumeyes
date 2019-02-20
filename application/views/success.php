

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
<?php include 'head.php';?>
</head>

<body>

	<?php include 'header.php';?>
	<section class="col-sm-12 blogSection clearfix">

		<div class="container">
			<div class="sectionTitle">

				<h2>
					<span>Order Detail</span>
				</h2>

			</div>

			<div class="row blogBar">
          	<div class="col-sm-4 col-xs-12 blog">


					<h4>Thank You. Your order status is <?php echo $status; ?>.</h4>
					<div class="info clearfix">

						<span>Your Order ID for this transaction is <?php echo $orderid; ?></span>


					</div>
					We have received a payment of Rs. <?php echo $amount; ?> Your order will soon be shipped.

				</div>

			</div>
		</div>
	</section>

	<?php include 'footer.php';?>
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

</body>

</html>