<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>

<link href="<?php echo base_url();?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/font.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/js/slider/slider.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url();?>/assets/js/slider/slider.js"></script>
    <script src="<?php echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

</head>

<body>

	<?php include('header.php');?>
	<section class="col-sm-12 sunglassSub clearfix">
	
		<div class="col-sm-6 sunglassMen clearfix">
			
			<a href="<?php echo base_url('contactlense');?>">		
				<div class="img clearfix"><img src="<?php echo base_url('assets/images/lensSolutions_Img.jpg')?>" alt="Lens Solutions"></div>
			
				<h3>Lens Solutions</h3>
			</a>
		
		</div>
		
		<div class="col-sm-6 sunglassMenPresc clearfix">
			
			<a href="<?php echo base_url('contactlense');?>?id=23">		
				<div class="img clearfix"><img src="<?php echo base_url('assets/images/lensCases_Img.jpg')?>" alt="Lens Cases"></div>
			
				<h3>LensCases</h3>
			</a>
		
		</div>
	
	</section>


	<footer>

		<div class="container">

			

			<div class="row copyrightBlock">

				<span>© 2018 Zumeyes. All rights resereved</span>

			</div>

		</div>
	</footer>
<script src="<?php echo base_url('assets/js/script.js');?>"></script>
</body>

</html>