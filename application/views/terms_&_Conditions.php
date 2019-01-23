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
	<section class="termsSection clearfix">
		
		<div class="container">
			<h2>Terms & Conditions</h2>
			
			<div class="content clearfix">
			<?php foreach ($term_get as $key => $value) {
				$description = $value->description;
				echo $description;
			

			}?>
		
				
			</div>
			
		</div>
		
	</section>	
	
	<?php include('footer.php');?>
<script src="<?php echo base_url('assets/js/script.js');?>"></script>

</body>

</html>