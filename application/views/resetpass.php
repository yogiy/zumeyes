<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<?php include 'head.php';?></head>

<body>

	<?php include 'header.php'?>
	<section class="col-sm-12 otpSection clearfix">

		<div class="container">
			<div class="otpPanel">

			<form method="post" action="resetpass">
			<p>Please enter New Password</p>
			<div class="field clearfix">

				<input type="password" id="pass" name="pass" placeholder="Enter Your New password">
				<?php echo form_error('pass', '<p class="statusMsg">', '</p>'); ?></p>

			</div>


			<button name="resetpass" value="resetpass" type="submit">Submit</button>
		</form>
			</div>

					</div>


	</section>


	<footer>



		<div class="row copyrightBlock">

			<span>© <?php echo date('Y') ?> Zumeyes. All rights resereved</span>

		</div>


	</footer>
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>

</html>