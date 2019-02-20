<?php
if (!empty($fb)) {
    echo '<script>alert()</script>';
    foreach ($fb as $fbb) {
        $gb_link = $fbb->facebook_page;
    }
}
if (!empty($gp)) {
    foreach ($gp as $gpp) {
        $gp_link = $gpp->googleplus_page;
    }
}
if (!empty($twitter)) {
    foreach ($twitter as $twitterr) {
        $twitter_link = $twitterr->twitter_page;
    }
}
?>

<section class="col-sm-12 companyPolicySection clearfix">

		<div class="container-fluid">

			<div class="col-sm-3 col-xs-12 box">

				<div class="icon">
					<i class="icon-credit-card"></i>
				</div>
				<h5>100% Secure Payment</h5>
			</div>
			<div class="col-sm-3 col-xs-12 box">

				<div class="icon">
					<i class="icon-original"></i>
				</div>
				<h5>100% Original Product</h5>

			</div>
			<div class="col-sm-3 col-xs-12 box">

				<div class="icon">
					<i class="icon-box"></i>
				</div>
				<h5>Return Policy</h5>

			</div>
			<div class="col-sm-3 col-xs-12 box">

				<div class="icon">
					<i class="icon-free-delivery"></i>
				</div>
				<h5>Get free delivery</h5>

			</div>

		</div>

	</section>

	<section class="col-sm-12 newLetterSection clearfix">

		<div class="container">

			<div class="col-sm-6 col-xs-12 title">
				<h4>Newletter</h4>
				<p>Get the inside scoop on new frames, events, and more</p>
			</div>

			<div class="col-sm-6 col-xs-12 formBlock">
                <span class="successsubscribe"></span>
				<form method="post" name="myform" id="myform">

					<div class="field clearfix">
    <input type="email" name="email" autocomplete="off" id="email" placeholder="Enter your e-mail">
						<span class="error_form" id="email_error_message"></span>
						</div>
					<button type="button" class="newsletter">Subscribe</button>

				</form>

			</div>

		</div>
	</section>

<footer>

		<div class="container">

			<div class="row">

				<div class="col-sm-4 companyContact">

					<div class="bottomLogo">
						<img src="<?php echo base_url('assets/images/logo.png') ?>" alt="Logo">
					</div>

					<div class="bar clearfix">

						<span>Address</span>
						<em>777/a4 Bonosri Road, Danpura East USA. -25000</em>

					</div>
					<div class="bar clearfix">

						<span>Phone</span>
						<em>888.492.7297</em>

					</div>
					<div class="bar clearfix">

						<span>Email</span>
						<em>info@zumeyes.com</em>

					</div>
					<div class="bar socialIcons clearfix">

						<a href="https://facebook.com" class="iconCircle">
							<i class="icon icon-facebook"></i>
						</a>
						<a href="https://twitter.com" class="iconCircle">
							<i class="icon icon-twitter"></i>
						</a>
						<a href="" class="iconCircle">
							<i class="icon icon-google-plus"></i>
						</a>

					</div>

				</div>

				<div class="col-sm-8 col-xs-12 bottomLinks clearfix">

					<div class="col-sm-4 linksBlock">

						<h5>Online Shopping</h5>
						<ul class="links">

							<li>
								<a href="<?php echo site_url('productlist'); ?>?id=9">Men</a>
							</li>
							<li>
								<a href="<?php echo site_url('productlist'); ?>?id=10">Women</a>
							</li>
							<li>
								<a href="<?php echo site_url('productlist'); ?>?id=">Kids</a>
							</li>

						</ul>

					</div>
					<div class="col-sm-4 linksBlock">

						<h5>Useful Links</h5>
						<ul class="links">

							<li>
								<a href="<?php echo base_url('contactus'); ?>">Contact Us</a>
							</li>
							<li>
								<a href="<?php echo site_url('aboutus'); ?>">About us</a>
							</li>
							<li>
								<a href="<?php echo site_url('faq'); ?>">FAQs</a>
							</li>
							<li>
								<a href="<?php echo base_url('blog'); ?>">Blog</a>
							</li>
							<li>
								<a href="<?php echo site_url('term_and_condition'); ?>">Terms & Conditions</a>
							</li>

						</ul>

					</div>
					<div class="col-sm-4 linksBlock">

						<h5>Policies</h5>
						<ul class="links">

							<li>
								<a href="<?php echo base_url('shipping_policy'); ?>">Shipping Policy</a>
							</li>
							<li>
								<a href="<?php echo base_url('cancel_and_modification'); ?>">Cancellations & Modifications</a>
							</li>
							<li>
								<a href="<?php echo base_url('return_and_refund'); ?>">Return & Refund</a>
							</li>
							<li>
								<a href="<?php echo base_url('privacy_policy'); ?>">Privacy Policy</a>
							</li>

						</ul>

					</div>

				</div>

			</div>

			<div class="row copyrightBlock">

				<span>© <?php echo date('Y') ?> Zumeyes. All rights resereved</span>

			</div>

		</div>
	</footer>
<script type="text/javascript">

		$(document).ready(function(){
			var error_email=false;
			$('#email_error_message').hide();

          $("#email").focusin(function(){
          $('#email_error_message').hide();
          });
           $("#email").focusout(function(){
          	check_email();
          });

          function check_email(){
          	var pattern= /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
          	var email =$("#email").val();
          	if(pattern.test(email) && email !== ''){
          		$("#email_error_message").hide();

          	}
          	else{
          		$("#email_error_message").html("Invalid Email");
          		$("#email_error_message").show();
          		$("#email_error_message").css("color","red");
          		error_email = true;
          	}
          }

			$('.newsletter').click(function(){
				check_email();
				if(error_email !== true){
					alert();
          var email =document.getElementById("email").value;

           $.ajax({
				type:'POST',
				data:{email:email},
				url:"<?php echo base_url('newsletter') ?>",
				success:function(data){
					$(".successsubscribe").html(data);
				}

			});
       }
			});
			});


		</script>