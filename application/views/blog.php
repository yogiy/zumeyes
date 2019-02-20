<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
<?php include 'head.php';?>
</head>

<body>

	<?php include 'header.php';?>
	<section class="col-sm-12 blogSection clearfix">

		<div class="container">
			<div class="sectionTitle">

				<h2>
					<span>From Blog</span>
				</h2>

			</div>

			<div class="row blogBar">
           <?php foreach ($blog_data as $key => $blog_dat) {?>
				<div class="col-sm-4 col-xs-12 blog">

					<div class="blogImg">
						<img src="<?php echo base_url('assets/upload/blog/') ?><?php echo $blog_dat->image; ?>" alt="Blog">
					</div>
					<h4><?php echo $blog_dat->title; ?></h4>
					<div class="info clearfix">

						<span><?php echo $blog_dat->username; ?></span>
						<small><?php echo $blog_dat->date; ?> |
							<a href="#">18 Comments</a>
						</small>

					</div>
					<?php echo $blog_dat->shortdescription; ?>
                 <a href="<?php echo site_url('blogDetails') ?>?title=<?php echo str_replace(' ', '_', $blog_dat->title); ?>">
					<button>Read More</button> </a>
				</div>
                    <?php }?>
			</div>
		</div>
	</section>

	<?php include 'footer.php';?>
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

</body>

</html>