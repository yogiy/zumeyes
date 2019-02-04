<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<link href="<?php echo base_url(); ?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/font.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/js/slider/slider.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>/assets/js/slider/slider.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>


</head>

<body>

	<?php include_once 'header.php';?>
	<section class="col-sm-12 sunglassSub clearfix">
	<?php foreach ($subcatdata as $key => $subcatdata) {

    ?>
		<div class="col-sm-6 sunglassMen clearfix">
			<?php if ($this->session->flashdata('lense_page') == 15) {?>
			<a href="<?php echo site_url('contactLense') ?>?sid=<?php echo $subcatdata->id ?>">
			<?php } else {?>
            <a href="<?php echo site_url('productList') ?>?sid=<?php echo $subcatdata->id ?>">
            	<?php }?>
				<div class="img clearfix"><img src="<?php echo base_url('assets/upload/') ?><?php echo $subcatdata->bg_image; ?>" alt="Men Sunglasses"></div>

				<h3><?php echo $subcatdata->sub_sub_cat; ?></h3>
			</a>

		</div>
		<?php }?>


	</section>


	<footer>

		<div class="container">



			<div class="row copyrightBlock">

				<span>© <?php echo date('Y') ?> Zumeyes. All rights resereved</span>

			</div>

		</div>
	</footer>
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

</body>

</html>