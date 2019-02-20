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
			<form method="post" action="verifyotp">
				<?php echo $this->session->flashdata('success_otp'); ?>

			<p>Please enter the OTP</p>

			<div class="field clearfix">

				<input type="text" name="verifyotp" id="otpnum" placeholder="OTP">
				<a href="#">Resend OTP</a>

			</div>

			<button type="submit" value="verifybtn" name="verifybtn">Verify</button>

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
	<?php if ($this->session->flashdata('wrong_otp')) {?>
		<script type="text/javascript">
			alert('You otp is incorrect');
		</script>
	<?php }?>
</body>

</html>