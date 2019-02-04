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
	<?php include_once 'header.php';?>
	<div id="banner" class="bannerSection clearfix">
		<div id="myCarousel" class="carousel slide">
			<!-- Wrapper for Slides -->
			<div class="carousel-inner">

				<?php $active = 1;
foreach ($slider_data as $key => $slider) {

    ?>
				<div class="item <?php if ($active == 1) {?>active<?php }?>">
					<div class="mask"></div>
					<div class="fill">
						<img src="<?php echo base_url('assets/upload/') ?><?php echo $slider->sliderimage ?>" alt="Banner">
					</div>

				</div>
			<?php $active++;}?>

			</div>

			<!-- Controls -->

			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<div class="icon">
					<span class="icon-prev"></span>
				</div>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<div class="icon">
					<span class="icon-next"></span>
				</div>
			</a>

		</div>
	</div>

	<section class="col-sm-12 offerSection clearfix">
 <?php foreach ($offer_data as $key => $offerimages) {
    ?>
		<div class="col-sm-6 col-xs-12 offerBox">

			<img src="<?php echo base_url('assets/upload/') ?><?php echo $offerimages->offerimage ?>" alt="Offer">

		</div>
		<?php }?>

	</section>

	<section class="col-sm-12 featureProSection clearfix">

		<div class="container">
			<div class="sectionTitle">

				<h2>
					<span>Featured Products</span>
				</h2>

			</div>
			<div class="row proRow clearfix">
				<?php
$variable = 1;
foreach ($product_data as $key => $product_dat) {
    //  $offer=explode("|",$product_dat->offerimage);
    //     foreach ($offer as $key => $offerimages) {
    ?>
				<div class="col-sm-6 col-xs-12 proBox">
					<div class="product">

						<div class="itemTop">
							<ul class="colorList">
								<li>
									<input type="radio" checked="" name="radio">
  									<span class="checkmark cblue"></span>
								</li>
								<li>
									<input type="radio" name="radio">
  									<span class="checkmark cyellow"></span>
								</li>
								<li>
									<input type="radio" name="radio">
  									<span class="checkmark cred"></span>
								</li>
								<li>
									<input type="radio" name="radio">
  									<span class="checkmark cgreen"></span>
								</li>
							</ul>
						</div>
						<div class="itemImg">

            <a href="<?php echo site_url('lenseDetails') ?>?id=<?php echo $product_dat->id ?>"><img src="<?php echo base_url('assets/upload/product/') ?><?php echo $product_dat->pro_image ?>" alt="Frame"></a>

						</div>
						<div class="itemBottom">
							<h3>
								<a class="productName" href="#"><?php echo $product_dat->product_name ?></a>
							</h3>
							<div class="itemOffer clearfix">

								<em>$ <?php echo $product_dat->regular_price ?></em>
								<div class="offer"><span>29% Off</span></div>

							</div>
							<div class="priceBox">
								<span>$ <?php echo $product_dat->sale_price ?></span>
							</div>
							<div class="productAction productActionHome">

										<div class="wishlist icon">


                                        <i style="cursor: pointer" class="icon-favorite-heart-button class" proprice="<?php echo $product_dat->sale_price; ?>" pro_id="<?php echo $product_dat->id ?>" pro_name="<?php echo $product_dat->product_name ?>"pro_image="<?php echo $product_dat->pro_image ?>"></i>
										</div>

									</div>

						</div>
					</div>
				</div>
                <?php $variable++;}?>
				<div class="col-sm-6 col-xs-12 proBox noPadding">



                        <div class="row probar clearfix">
                        	               <?php $row_image = 1;
foreach ($pro_data as $key => $produc_dat) {

    //  $offer=explode("|",$product_dat->offerimage);
    //     foreach ($offer as $key => $offerimages) {
    ?>
						<div class="col-sm-6 proBox">
							<div class="product">
								<div class="itemTop">
									<ul class="colorList">
										<li>
											<input type="radio" checked="checked" name="radio">
											<span class="checkmark cblue"></span>
										</li>
										<li>
											<input type="radio" name="radio">
											<span class="checkmark cyellow"></span>
										</li>
										<li>
											<input type="radio" name="radio">
											<span class="checkmark cred"></span>
										</li>
										<li>
											<input type="radio" name="radio">
											<span class="checkmark cgreen"></span>
										</li>
									</ul>
								</div>
								<div class="itemImg">
									<a href="<?php echo site_url('productDetails') ?>?id=<?php echo $produc_dat->id ?>"><img src="<?php echo base_url('assets/upload/product/') ?><?php echo str_replace(" ", '_', $produc_dat->pro_image) ?>" alt="Frame"></a>


								</div>
								<div class="itemBottom">
									<h3>
										<a class="productName" href="<?php echo site_url('productDetails') ?>?id=<?php echo $produc_dat->id ?>"><?php echo $produc_dat->product_name ?></a>
									</h3>
									<div class="itemOffer clearfix">
										<em>Rs <?php echo $produc_dat->regular_price ?></em>
										<div class="offer"><span><?php echo $produc_dat->offer ?>% Off</span></div>
									</div>
									<div class="priceBox">
										<span>Rs <?php echo $produc_dat->sale_price ?></span>
									</div>
									<div class="productAction productActionHome">

										<div class="wishlist icon">

                                     <i style="cursor: pointer" class="icon-favorite-heart-button class" proprice="<?php echo $product_dat->sale_price; ?>" pro_id="<?php echo $product_dat->id ?>" pro_name="<?php echo $product_dat->product_name ?>"pro_image="<?php echo $product_dat->pro_image ?>"></i>

										</div>

									</div>
								</div>
							</div>
						</div>
						 <?php $row_image++;}?>
						</div>





		<!--		<div class="row probar clearfix">

						<div class="col-sm-6 proBox">
							<div class="product">
								<div class="itemTop">
									<ul class="colorList">
										<li>
											<input type="radio" checked="checked" name="radio">
											<span class="checkmark cblue"></span>
										</li>
										<li>
											<input type="radio" name="radio">
											<span class="checkmark cyellow"></span>
										</li>
										<li>
											<input type="radio" name="radio">
											<span class="checkmark cred"></span>
										</li>
										<li>
											<input type="radio" name="radio">
											<span class="checkmark cgreen"></span>
										</li>
									</ul>
								</div>
								<div class="itemImg">
									<a href="productDetails.html">
										<img src="<?php echo base_url('assets/images/frame_4.png') ?>" alt="Frame">
									</a>
								</div>
								<div class="itemBottom">
									<h3>
										<a class="productName" href="#">Baker</a>
									</h3>
									<div class="itemOffer clearfix">
										<em>$ 59.97</em>
										<div class="offer"><span>50% Off</span></div>
									</div>
									<div class="priceBox">
										<span>$ 29.97</span>
									</div>
									<div class="productAction productActionHome">

										<div class="wishlist icon">
											<i class="icon-favorite-heart-button"></i>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 proBox">
							<div class="product">
								<div class="itemTop">
									<ul class="colorList">
										<li>
											<input type="radio" checked="checked" name="radio">
											<span class="checkmark cblue"></span>
										</li>
										<li>
											<input type="radio" name="radio">
											<span class="checkmark cyellow"></span>
										</li>
										<li>
											<input type="radio" name="radio">
											<span class="checkmark cred"></span>
										</li>
										<li>
											<input type="radio" name="radio">
											<span class="checkmark cgreen"></span>
										</li>
									</ul>
								</div>
								<div class="itemImg">
									<a href="productDetails.html">
										<img src="<?php echo base_url('assets/images/frame_5.png') ?>" alt="Frame">
									</a>

								</div>
								<div class="itemBottom">
									<h3>
										<a class="productName" href="#">Hawthorne</a>
									</h3>
									<div class="itemOffer clearfix">
										<em>$ 60.97</em>
										<div class="offer"><span>40% Off</span></div>
									</div>
									<div class="priceBox">
										<span>$ 40.97</span>
									</div>
									<div class="productAction productActionHome">

										<div class="wishlist icon">
											<i class="icon-favorite-heart-button"></i>
										</div>

									</div>
								</div>
							</div>
						</div>

					</div> -->

				</div>
			</div>
		</div>
	</section>

	<section class="col-sm-12 offerSection">
<?php foreach ($banner_data as $key => $bannerimages) {
    ?>
		<div class="offerL">
			<img src="<?php echo base_url('assets/images/') ?><?php echo $bannerimages->bannerimage ?>" alt="Offer">
		</div>
<?php }?>
	</section>

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
                <a href="<?php echo site_url('blogDetails') ?>?id=<?php echo $blog_dat->id ?>">
					<button>Read More</button> </a>
				</div>
                    <?php }?>
			</div>
		</div>
	</section>


	<?php include 'footer.php';?>
	<script>
		$('.carousel').carousel({
			interval: 3000 //changes the speed
		})
	</script>
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

<script type="text/javascript">
		$(document).ready(function(){
			$('.wishid').click(function(){
           var wishid=$(this).attr('wishid');

           $.ajax({
				type:'POST',
				data:{wishid:wishid},
				url:"<?php echo base_url('removewishlist') ?>",
				success:function(data){
					alert('Successfully Remove From The WishList');
				}

			});
			});
			});


		</script>
		 <script type="text/javascript">
  $(document).ready(function(){
   $(".class").click(function(){
        $(this).toggleClass("active");
      var sale_price =  $(this).attr("proprice");
      var pro_id=  $(this).attr("pro_id");
      var pro_name=  $(this).attr("pro_name");
      var pro_image=  $(this).attr("pro_image");
      var prescription_type="prescription_type";
        $.ajax({
                type:"POST",
                url:"<?php echo base_url('wishframeOnly') ?>'",
            data:{pro_id:pro_id,pro_name:pro_name,sale_price:sale_price,pro_image:pro_image,prescription_type:prescription_type},
                success:function(data){
                    $(".wishcount").html(data);
                }
            });

    });
    });
</script>
</body>
</html>