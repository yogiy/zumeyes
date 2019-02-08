<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<link href="<?php echo base_url(); ?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/font.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

</head>

<body>

	<?php include 'header.php'?>
	<section class="col-sm-12 otpSection clearfix">

		<div class="container">
			<div class="otpPanel">
				<?php echo $this->session->flashdata('unauth'); ?>

			<form method="post" action="identify">
			<p>Please enter the Your Detail</p>
			<div class="field clearfix">

				<input type="text" id="email" name="email" placeholder="Enter Your email">


			</div>
			<div class="field clearfix">

				<input type="text" id="otpnum" name="phone" placeholder="Phone No">


			</div>

			<button name="frgpass" value="frgpass" type="submit">Submit</button>
		</form>
			</div>

		</div>


	</section>


	<footer>



		<div class="row copyrightBlock">

			<span>© <?php echo date('Y') ?> Zumeyes. All rights resereved</span>

		</div>


	</footer>

</body>

</html>