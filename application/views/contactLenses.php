<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<link href="<?php echo base_url();?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/font.css" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

</head>

<body>

	<?php include('header.php');?>

	<div class="innerBanner clearfix">

		<img src="<?php echo base_url('assets/images/banner2.jpg')?>" alt="Banner">

	</div>

	<section class="col-sm-12 productListSection clearfix">
		
		<div id="stick-here"></div>

		<div class="col-sm-12 filterSection clearfix" id="filter">
			
			<div class="bar clearfix filterHeading" id="slideFilterTab">

					<i class="icon icon-filter"></i>
					<a href="#">Filter</a>

			</div>
			
			<div class="filterNameList clearfix">
				
				<div class="box clearfix" id="brandFilter">
				
					<div class="filterName clearfix">

					<span>Brands</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>
				
				</div>
				
				<div class="box clearfix" id="lenseTypeFilter">
					
					<div class="filterName clearfix">

					<span>Contact Lense Type</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>
				
				</div>
				
				<div class="box clearfix" id="colorFilter">
				
					<div class="filterName clearfix">

					<span>Color</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>
				
				</div>		
			
			</div>
			
			<div class="filterContainer clearfix">
				
				<div class="bar clearfix" id="brandFilterContent">
					
					<div class="filterList clearfix" style="display: none;">
<?php foreach ($brand_name as $key => $brand_dat) {?>
					<label>
						<input id="brand1" class="checkbox-custom" name="brand1" type="checkbox">
						<span for="brand1" class="checkbox-custom-label"></span>
						<a href="<?php echo site_url('productlist');?>?brand=<?php echo $brand_dat->brand_name;?>"><?php echo $brand_dat->brand_name;?></a>
					</label>
				<?php }?>	
					
				</div>
					
				</div>
				
				<div class="bar clearfix" id="lenseTypeFilterContent">
				
					<div class="filterList clearfix" style="display: none;">

					<?php foreach($lense_uses as $key => $lense_usess) { ?>
					<label>
						<input id="brand1" class="checkbox-custom" name="uses" type="checkbox">
						<span for="brand1" class="checkbox-custom-label"></span>
						<a href="<?php echo site_url('productlist');?>?uses=<?php echo $lense_usess->uses;?>"><?php echo $lense_usess->uses;?></a>
					</label>
				<?php }?>	
					
				</div>
				
				</div>

				<div class="bar clearfix" id="colorFilterContent">
				
					<div class="filterList clearfix" style="display: none;">

					 <?php foreach ($color_name as $key => $color_dat) {?>
					<label>
						<div class="circle">
							<div class="color cantique" style="background: <?php echo $color_dat->color_name;?>"></div>
						</div>
						<a href="<?php echo site_url('productlist');?>?color=<?php echo $color_dat->color_name?>"><?php echo $color_dat->color_name;?>
						<div class="select"></div>
						<input id="color" value="<?php echo $color_dat->color_name;?>" class="checkbox-custom" name="color[]" type="checkbox"></a>
					</label>
				<?php }?>
					
				</div>
				
				</div>
				

			</div>
			
			<div class="filterBottom clearfix">
				
				<div class="bar clearfix">

					<span>Search Result -
						<em>125</em>
					</span>

					<div class="topFilter clearfix">

						<div class="fieldBar clearfix">

							<label>By Prize</label>
							<div class="field">
								<input type="text" id="byPrize" placeholder="Low to High">
								<i class="icon icon-angle-down"></i>
								<ul class="list">

									<li>
										<a href="#">Low Prize</a>
									</li>
									<li>
										<a href="#">High Prize</a>
									</li>
									<li>
										<a href="#">Low to High Prize</a>
									</li>
									<li>
										<a href="#">High to Low Prize</a>
									</li>

								</ul>
							</div>

						</div>
						<div class="fieldBar clearfix">

							<label>Sort By</label>
							<div class="field">
								<input type="text" id="sortBy" placeholder="Popular Item">
								<i class="icon icon-angle-down"></i>
								<ul class="list">

									<li>
										<a href="#">Newest Items</a>
									</li>
									<li>
										<a href="#">Popular Itmes</a>
									</li>

								</ul>
							</div>

						</div>

					</div>

				</div>

				<div class="appliedFilter clearfix">

					<div class="box">
						<a href="#" class="filtered-brand">Multicolored</a>
						<a class="icon icon-close"></a>
					</div>
					<div class="box">
						<a href="#" class="filtered-brand">Antique bronz</a>
						<a class="icon icon-close"></a>
					</div>
					<div class="box">
						<a href="#" class="filtered-brand">Gunmetal</a>
						<a class="icon icon-close"></a>
					</div>
					<div class="box">
						<a href="#" class="filtered-brand">Browline</a>
						<a class="icon icon-close"></a>
					</div>
					<div class="box">
						<a href="#" class="filtered-brand">Square</a>
						<a class="icon icon-close"></a>
					</div>
					<button>Clear All</button>

				</div>

			</div>

		</div>
		
		<div class="filterOverlay" id="filterOverlay"></div>
		
		<div class="col-sm-12 productList clearfix">
			
			<div class="col-sm-12 products">

				<div class="row probar clearfix">

					<div class="col-sm-4 proBox">
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
							<div class="itemImg"> <a href="lensDetails.html"><img src="<?php echo base_url('assets/images/lens_1.png')?>" alt="Frame"></a>

							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#">Bausch & Lomb Soflens 59</a>
								</h3>
								<div class="itemOffer clearfix">							
									<em>$ 50.97</em>
									<div class="offer"><span>50% Off</span></div>
								</div>
								<div class="priceBox">
									<span>$ 21.99</span>
								</div>
								<div class="productAction">

									<div class="cart icon">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="wishlist icon">
										<i class="icon-favorite-heart-button"></i>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 proBox">
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
							<div class="itemImg"> <a href="lensDetails.html"><img src="<?php echo base_url('assets/images/lens_2.png')?>" alt="Frame"></a>

							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#">Bausch & Lomb I Connect</a>
								</h3>
								<div class="itemOffer clearfix">							
									<em>$ 90.97</em>
									<div class="offer"><span>60% Off</span></div>
								</div>
								<div class="priceBox">
									<span>$ 30.97</span>
								</div>
								<div class="productAction">

									<div class="cart icon">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="wishlist icon">
										<i class="icon-favorite-heart-button"></i>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 proBox">
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
							<div class="itemImg"> <a href="lensDetails.html"><img src="<?php echo base_url('assets/images/lens_3.png')?>" alt="Frame"></a>

							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#">Bausch & Lomb Purevision2</a>
								</h3>
								<div class="itemOffer clearfix">							
									<em>$ 59.97</em>
									<div class="offer"><span>50% Off</span></div>
								</div>
								<div class="priceBox">
									<span>$ 29.97</span>
								</div>
								<div class="productAction">

									<div class="cart icon">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="wishlist icon">
										<i class="icon-favorite-heart-button"></i>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 proBox">
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
							<div class="itemImg"> <a href="lensDetails.html"><img src="<?php echo base_url('assets/images/lens_4.png')?>" alt="Frame"></a>

							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#">Bausch & Lomb Soflens Toric</a>
								</h3>
								<div class="itemOffer clearfix">							
									<em>$ 30.97</em>
									<div class="offer"><span>30% Off</span></div>
								</div>
								<div class="priceBox">
									<span>$ 21.99</span>
								</div>
								<div class="productAction">

									<div class="cart icon">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="wishlist icon">
										<i class="icon-favorite-heart-button"></i>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="col-sm-4 proBox">
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
							<div class="itemImg"> <a href="lensDetails.html"><img src="<?php echo base_url('assets/images/lens_5.png')?>" alt="Frame"></a>

							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#">Bausch & Lomb Soflens Toric 1 Lens</a>
								</h3>
								<div class="itemOffer clearfix">							
									<em>$ 50.97</em>
									<div class="offer"><span>50% Off</span></div>
								</div>
								<div class="priceBox">
									<span>$ 21.99</span>
								</div>
								<div class="productAction">

									<div class="cart icon">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="wishlist icon">
										<i class="icon-favorite-heart-button"></i>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 proBox">
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
							<div class="itemImg"> <a href="lensDetails.html"><img src="<?php echo base_url('assets/images/lens_6.png')?>" alt="Frame"></a>

							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#">Bausch & Lomb I Connect 6 Lens</a>
								</h3>
								<div class="itemOffer clearfix">							
									<em>$ 90.97</em>
									<div class="offer"><span>60% Off</span></div>
								</div>
								<div class="priceBox">
									<span>$ 30.97</span>
								</div>
								<div class="productAction">

									<div class="cart icon">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="wishlist icon">
										<i class="icon-favorite-heart-button"></i>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 proBox">
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
							<div class="itemImg"> <a href="lensDetails.html"><img src="<?php echo base_url('assets/images/lens_7.png')?>" alt="Frame"></a>

							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#">Bausch & Lomb Purevision 2 Astigmatism</a>
								</h3>
								<div class="itemOffer clearfix">							
									<em>$ 59.97</em>
									<div class="offer"><span>50% Off</span></div>
								</div>
								<div class="priceBox">
									<span>$ 29.97</span>
								</div>
								<div class="productAction">

									<div class="cart icon">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="wishlist icon">
										<i class="icon-favorite-heart-button"></i>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="col-sm-4 proBox">
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
							<div class="itemImg"> <a href="lensDetails.html"><img src="<?php echo base_url('assets/images/lens_1.png')?>" alt="Frame"></a>

							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#">Bausch & Lomb Soflens 59</a>
								</h3>
								<div class="itemOffer clearfix">							
									<em>$ 50.97</em>
									<div class="offer"><span>50% Off</span></div>
								</div>
								<div class="priceBox">
									<span>$ 21.99</span>
								</div>
								<div class="productAction">

									<div class="cart icon">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="wishlist icon">
										<i class="icon-favorite-heart-button"></i>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 proBox">
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
							<div class="itemImg"> <a href="lensDetails.html"><img src="<?php echo base_url('assets/images/lens_2.png')?>" alt="Frame"></a>

							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#">Bausch & Lomb I Connect</a>
								</h3>
								<div class="itemOffer clearfix">							
									<em>$ 90.97</em>
									<div class="offer"><span>60% Off</span></div>
								</div>
								<div class="priceBox">
									<span>$ 30.97</span>
								</div>
								<div class="productAction">

									<div class="cart icon">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="wishlist icon">
										<i class="icon-favorite-heart-button"></i>
									</div>

								</div>
							</div>
						</div>
					</div>

					

				</div>


			</div>

		</div>

	</section>

	
	<?php include('footer.php');?>
<script src="<?php echo base_url('assets/js/script.js');?>"></script>
</body>

</html>