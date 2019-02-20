<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<?php include 'head.php';?>
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

							<span><?php echo form_error('email', '<p style="font-size:15px" class="statusMsg">', '</p>'); ?>
								<?php echo form_error('password', '<p style="font-size:15px"class="statusMsg">', '</p>'); ?>
							</span>

                         <form action="login_and_registration" method="post">
							<div class="loginDetails clearfix">
								<div class="fieldBar clearfix">
<?php
echo '<span id="disapper" style="font-size:15px">' . $this->session->flashdata('error_msg');
?>
     <?php
echo $this->session->flashdata('rerror_msg') . '</span>';
?>
     <?php echo '<p class="statusMsg">' . $this->session->flashdata('rsuccess_msg') . '</p>';
?>
    <?php echo form_error('cemail', '<p class="statusMsg">', '</p>'); ?>
									<label>Username</label>
									<div class="field">
										<input type="text" id="cname" required name="email" value="" autocomplete="off"  placeholder="user@gmail.com">


									</div>
                                    </div>
								<div class="fieldBar clearfix">

									<label>Password</label>
									<div class="field">
						      <input type="password" id="cpwd" required value=""  autocomplete="off" name="password" placeholder="......">


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
										<input type="text" id="cfname" required name="fname" autocomplete="off" placeholder="First Name">
										  <span class="error_cfname" style="font-size:15px" id="fname_error_message"></span>

									</div>
                                   	</div>
								<div class="fieldBar clearfix">

									<label>Last Name</label>
									<div class="field">
										<input type="texxt" id="clname" required name="lname"  autocomplete="off" placeholder="Last Name">
										 <span class="error_clname" style="font-size:15px" id="lname_error_message"></span>

									</div>
                              </div>
								<div class="fieldBar clearfix">

									<label>Email</label>
									<div class="field">
										<input type="text" id="cemail" required name="cemail"  autocomplete="off" placeholder="user@gmail.co">
										<span class="error_cemail" style="font-size:15px" id="email_error_message"></span>

									</div>
                                    </div>
								<div class="fieldBar clearfix">

									<label>Password</label>
									<div class="field">
										<input type="password" required id="cpwds" name="pass" placeholder=".......">
									 <span class="error_cpwds" style="font-size:15px" id="cpwds_error_message"></span>
									</div>

								</div>
								<div class="fieldBar clearfix">

									<label>Confirm Password</label>
									<div class="field">
										<input type="password" id="ccpwds" required name="cpass" placeholder=".......">
									 <span class="error_ccpwds" style="font-size:15px" id="ccpwds_error_message"></span>
									</div>

								</div>
								<p class="condition clearfix">By creating this account, you agree to the
									<a href="<?php echo base_url('term_and_condition'); ?>">Terms of Use</a> and
									<a href="<?php echo base_url('privacy_policy'); ?>">Privacy Policy.</a>
								</p>

                            <button type="submit" name="regisSubmit" value="registerSubmit" id="submitbutton">Register</button>


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

			<span>© <?php echo date('Y') ?> Zumeyes. All rights resereved</span>

		</div>


	</footer>
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<?php if ($this->session->flashdata('osuccess_msg')) {?>
<script type="text/javascript">

	alert('Your Password successfully changed. Please login to your account.');
</script>
<?php }?>
</body>
<script type="text/javascript">

		$(document).ready(function(){
		      var error_email=false;
		     var error_fname=false;
		     var error_lname=false;
		     var error_cpwds=false;
		     var error_ccpwds=false;


          $("#cname").focusin(function(){
          	$('#disapper').hide();
          	$('.statusMsg').hide();
          });
           $("#cpwd").focusin(function(){
          	$('#disapper').hide();
          	$('.statusMsg').hide();
          });






			$('#email_error_message').hide();
          	$('#fname_error_message').hide();
          	$('#lname_error_message').hide();
          	$('#cpwds_error_message').hide();
         	$('#ccpwds_error_message').hide();

          $("#cemail").focusout(function(){
          	check_email();
          });
 $("#cfname").focusout(function(){
          	check_fname();
          });
          $("#clname").focusout(function(){
          	check_lname();
          });
          $("#cpwds").focusout(function(){
          	check_password();
          });
           $("#ccpwds").keyup(function(){
          	match_password();
          });
 $("#cemail").focusin(function(){
          	$('#email_error_message').hide();
          });
 $("#cfname").focusin(function(){
          	$('#fname_error_message').hide();
          });
          $("#clname").focusin(function(){
          	$('#lname_error_message').hide();
          });
          $("#cpwds").focusin(function(){
          	$('#cpwds_error_message').hide();
          });


          function check_email(){
          	var pattern= /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
          	var email =$("#cemail").val();
          	if(pattern.test(email) && email !== ''){
          		$("#email_error_message").hide();
          		document.getElementById('submitbutton').disabled = '';

          	}
          	else{
          		$("#email_error_message").html("Invalid Email");
          		$("#email_error_message").show();
          		$("#email_error_message").css("color","red");
          		error_email = true;
          		document.getElementById('submitbutton').disabled = 'disabled';
          	}
          }

		 function check_fname(){
          	var pattern= /^[A-Za-z]+$/;
          	var fname =$("#cfname").val();
          	if(pattern.test(fname) && fname !== ''){
          		$("#name_error_message").hide();
          		document.getElementById('submitbutton').disabled = '';

          	}
          	else{
          		$("#fname_error_message").html("First Name Should Be Letter");
          		$("#fname_error_message").show();
          		$("#fname_error_message").css("color","red");
          		error_fname = true;
          		document.getElementById('submitbutton').disabled = 'disabled';
          	}
          }
           function check_lname(){
          	var pattern= /^[A-Za-z]+$/;
          	var name =$("#clname").val();
          	if(pattern.test(name) && name !== ''){
          		$("#lname_error_message").hide();
          		document.getElementById('submitbutton').disabled = '';

          	}
          	else{
          		$("#lname_error_message").html("Last Name Should Be Letter");
          		$("#lname_error_message").show();
          		$("#lname_error_message").css("color","red");
          		error_lname = true;
          		document.getElementById('submitbutton').disabled = 'disabled';
          	}
          }
           function check_password(){
          	var pattern= /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
          	var cpass =$("#cpwds").val();
          	if(pattern.test(cpass) && cpass !== ''){
          		$("#cpwds_error_message").hide();
          		document.getElementById('submitbutton').disabled = '';

          	}
          	else{
          		$("#cpwds_error_message").html("Password combination Should have 1 Cap,1 small,1 Numeric,1 special charecter and minimum length 8.");
          		$("#cpwds_error_message").show();
          		$("#cpwds_error_message").css("color","red");
          		error_cpwds = true;
          		document.getElementById('submitbutton').disabled = 'disabled';
          	}
          }
			 function match_password(){

          	var cpass =$("#cpwds").val();
          	var ccpass =$("#ccpwds").val();
          	if(cpass == ccpass){
          		$("#ccpwds_error_message").hide();
          		document.getElementById('submitbutton').disabled = '';

          	}
          	else{
          		$("#ccpwds_error_message").html("Password didn't match.");
          		$("#ccpwds_error_message").show();
          		$("#ccpwds_error_message").css("color","red");
          		error_cpwds = true;
          		document.getElementById('submitbutton').disabled = 'disabled';
          	}
          }

});


      </script>
</html>