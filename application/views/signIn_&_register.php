<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<link href="<?php echo base_url(); ?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/font.css" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url(); ?>/assets/js/slider/slider.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

</head>

<body>

	<?php include 'header.php'?>
	<section class="col-sm-12 userLoginPanel clearfix">

		<div class="container">

			<section class="tabs">


				<input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
				<label for="tab-1" class="tab-label-1">Login</label>

				<input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
				<label for="tab-2" class="tab-label-2">Signup</label>
				<div class="clearfix"></div>

				<div id="loginSignupdiv" class="content login clearfix">

					<div class="content-1 clearfix">

						<div class="leftPanel clearfix">

							<span>&nbsp;</span>

                         <form action="login_and_registration" method="post">
							<div class="loginDetails clearfix">
								<div class="fieldBar clearfix">
<?php echo '<p class="statusMsg">' . $this->session->flashdata('rsuccess_msg') . '</p>';
?>
									<label>Username</label>
									<div class="field">
										<input type="text" id="cname" name="email" value="" placeholder="user@gmail.com">
									<?php echo form_error('email', '<p class="statusMsg">', '</p>'); ?>

									</div>
                                    </div>
								<div class="fieldBar clearfix">

									<label>Password</label>
									<div class="field">
						      <input type="password" id="cpwd" value="" name="password" placeholder="......">
						      <?php echo form_error('password', '<p class="statusMsg">', '</p>'); ?>
							<?php
echo $this->session->flashdata('error_msg');
?>
									</div>
                              	</div>
								<p class="forgetpwd">
									<a href="<?php echo base_url('identify'); ?>">Forgot your password?</a>
								</p>


								<button type="submit" name="loginSubmit" value="loginSubmit">Login</button>

							</div>
                        </form>

						</div>

						<div class="lineBar">

							<span>OR</span>

						</div>

						<div class="rightPanel clearfix">

							<span>You can also...</span>
							<button class="border" id="registerBtn">Register</button>
							<form action="guest" method="post">

							<button type="submit" name="guest" value="guest" class="guest">Checkout as Guest</button>
                         </form>
						</div>

					</div>
					<div class="content-2 clearfix">

						<div class="leftPanel clearfix">

							<span>We will need...</span>

							<div class="loginDetails clearfix">
                            <form method="post" action="login_and_registration">
								<div class="fieldBar clearfix">

									<label>First Name</label>
									<div class="field">
										<input type="text" id="cfname" name="fname" placeholder="First Name">
										  <?php echo form_error('fname', '<p class="statusMsg">', '</p>'); ?>

									</div>
                                   	</div>
								<div class="fieldBar clearfix">

									<label>Last Name</label>
									<div class="field">
										<input type="texxt" id="clname" name="lname" placeholder="Last Name">
										 <?php echo form_error('lname', '<p class="statusMsg">', '</p>'); ?>

									</div>
                              </div>
								<div class="fieldBar clearfix">

									<label>Email</label>
									<div class="field">
										<input type="text" id="cemail" name="cemail" placeholder="user@gmail.co">
										<?php echo form_error('cemail', '<p class="statusMsg">', '</p>'); ?>

									</div>
                                    </div>
								<div class="fieldBar clearfix">

									<label>Password</label>
									<div class="field">
										<input type="password" id="cpwds" name="pass" placeholder=".......">
									 <?php echo form_error('pass', '<p class="statusMsg">', '</p>'); ?>
									</div>

								</div>
								<div class="fieldBar clearfix">

									<label>Confirm Password</label>
									<div class="field">
										<input type="password" id="ccpwd" name="cpass" placeholder=".......">
										<?php echo form_error('cpass', '<p class="statusMsg">', '</p>'); ?></p>
									</div>

								</div>
								<p class="condition clearfix">By creating this account, you agree to the
									<a href="#">Terms of Use</a> and
									<a href="#">Privacy Policy.</a>
								</p>

                            <button type="submit" name="regisSubmit" value="registerSubmit">Register</button>


							</div>

						</div>

						<div class="lineBar">

							<span>OR</span>

						</div>

						<div class="rightPanel clearfix">

							<span>You can also...</span>
							<button class="border" id="loginBtn">Login</button>
							<button class="guest">Checkout as Guest</button>

						</div>
					</div>
				</div>

			</section>

		</div>


	</section>


	<footer>



		<div class="row copyrightBlock loginCopyrightBlock">

			<span>© 2018 Zumeyes. All rights resereved</span>

		</div>


	</footer>
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<?php if ($this->session->flashdata('osuccess_msg')) {?>
<script type="text/javascript">

	alert('Your Password successfully changed. Please login to your account.');
</script>
<?php }?>
</body>

</html>