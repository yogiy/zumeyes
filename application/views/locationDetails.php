<?php
if (!empty($shop_data)) {
    foreach ($shop_data as $key => $shop_dat) {
        $shop_name = $shop_dat->shop_name;
        $address = $shop_dat->address;
        $shop_about = $shop_dat->shop_about;
        @$shop_info = $shop_dat->shop_info;
    }
}

?>

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

	<div class="shopInfoSection clearfix">

		<div id="banner" class="bannerSection shopBanner clearfix">
		<div id="myCarousel" class="carousel slide">

			<!-- Wrapper for Slides -->
			<div class="carousel-inner">

				<div class="item active">
					<div class="mask"></div>
					<div class="fill">
						<img src="<?php echo base_url(); ?>assets/images/shopImg1.jpg" alt="Banner1">
					</div>

				</div>
				<div class="item">
					<div class="mask"></div>
					<div class="fill">
						<img src="<?php echo base_url(); ?>assets/images/shopImg2.jpg" alt="Banner1">
					</div>

				</div>
				<div class="item">
					<div class="mask"></div>
					<div class="fill">
						<img src="<?php echo base_url(); ?>assets/images/shopImg3.jpg" alt="Banner1">
					</div>

				</div>
				<div class="item">
					<div class="mask"></div>
					<div class="fill">
						<img src="<?php echo base_url(); ?>assets/images/shopImg2.jpg" alt="Banner1">
					</div>

				</div>
			</div>

			<!-- Controls -->

			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<div class="icon">
					<span class="icon-prev"></span>
				</div>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<div class="icon">
					<span class="icon-next"></span>
				</div>
			</a>

		</div>
	</div>

		<div class="shopDetails clearfix">

			<h1><?php echo $shop_name; ?></h1>
			<a><?php echo $address; ?></a>
			<p><?php echo $shop_about; ?></p>

			<span>Timing</span>

			<div class="timingBar clearfix">
				<div class="col-sm-4 box clearfix">
					<em>mon–thu</em>
					<small>10 a.m.–9 p.m.</small>
				</div>
				<div class="col-sm-4 box clearfix">
					<em>fri–sat</em>
					<small>10 a.m.–10 p.m.</small>
				</div>
				<div class="col-sm-4 box clearfix">
					<em>sun</em>
					<small>11 a.m.–7 p.m.</small>
				</div>
			</div>

		</div>

	</div>




	<!--<section class="locationDetailSection clearfix">

		<div class="container">
			<h2>Our Locations</h2>
			<div class="content clearfix">
			<?php echo @$shop_info; ?>

			</div>

		</div>

	</section>-->

	<?php include 'footer.php';?>

	<script>
		$('.carousel').carousel({
			interval: 3000 //changes the speed
		})
	</script>

	<script type="text/javascript" src="js/script.js"></script>

</body>

</html>