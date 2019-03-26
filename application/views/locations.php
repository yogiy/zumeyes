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
	<div class="innerBanner clearfix">

		<img src="<?php echo base_url(); ?>assets/images/banner2.jpg" alt="Banner">

	</div>

	<section class="locationSection clearfix">

		<div class="container">
			<h2>Our Locations</h2>
			<div class="content clearfix">

			<?php if (!empty($location_data)) {
    $content_In_row = 1;
    foreach ($location_data as $key => $location_dat) {

        $shop_name = $location_dat->shop_name;
        $address = $location_dat->address;?>
			<?php if ($content_In_row % 3 == 0) {?>	<div class="locBar clearfix"><?php }?>
					<div class="col-sm-4 col-xs-12 locBox clearfix">
						<a href="<?php echo base_url('locationDetails') ?>?shop=<?php echo $shop_name; ?> && address=<?php echo $address; ?>"><?php echo $shop_name; ?></a>
						<span>Address</span>
						<p><?php echo $address; ?></p>
					</div>
					<?php if ($content_In_row % 3 == 0) {?>	</div><?php }?>

					<?php $content_In_row++;}}?>







			</div>

		</div>

	</section>

	<?php include 'footer.php';?>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/script.js"></script>

</body>

</html>