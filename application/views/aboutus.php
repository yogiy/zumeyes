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
    <script src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/slider/slider.js"></script>

</head>

<body>

	<?php include 'header.php';?>

	<section class="aboutSection clearfix">

		<div class="container">

			<h1>About us</h1>

		<div class="aboutContent clearfix">
			<?php foreach ($about_data as $key => $about_dat) {?>
			<div class="bar clearfix">
				<div class="col-sm-6 contentBox clearfix">
					<h2>Our Story</h2>
					<p>Founded in 2018, By an ex-Microsoft 'techie' with no money but truckloads of relentless passion to make a difference in this world, Lenskart is India's fastest growing eyewear business today.</p>

					<p>With a rapidly growing business reaching out to over 1,00,000 customers a month via a unique combination of a strong online business as www.zumeyes.com, uniquely designed physical stores, as well as a first of its kind 'home eye check up' service, Zumeyes is revolutionizing the eyewear industry in india.</p>
				</div>
				<div class="col-sm-6 imgBox clearfix">
					<div class="img clearfix"><img src="<?php echo base_url('assets/images/blog_2.jpg') ?>" alt="Image"></div>
				</div>
			</div>
		<?php }?>
			<div class="bar clearfix">
				<div class="col-sm-6 imgBox clearfix">
					<div class="img clearfix"><img src="<?php echo base_url('assets/images/blog_1.jpg') ?>" alt="Image"></div>
				</div>
				<div class="col-sm-6 contentBox clearfix">
					<h2>Our Vision</h2>
					<ul class="list clearfix">
						<li>15 million people in India are blind, which is 50% of the blind people of the world.</li>
						<li>75% of these are cases of avoidable blindness. Thanks to the country's acute shortage of optometrists and donated eyes for the treatment of corneal blindness.</li>
						<li>153 million people in the country need reading glasses but do not have access to them.</li>
						<li>Our country needs 40,000 optometrists. Unfortunately we only have 8,000.</li>
					</ul>

					<p>Zumeyes's aim is to help drop this number marginally in the coming years, which can be achieved by providing high quality eyewear to millions of Indians at affordable prices, giving free eye check ups at home and by extending our services to the remote corners of India.</p>
				</div>
			</div>


		</div>

		</div>

	</section>


	<?php include 'footer.php';?>
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>

</html>