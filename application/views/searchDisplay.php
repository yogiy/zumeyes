<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<?php include 'head.php';?>	</head>

<body>

	<?php include 'header.php';?>
	<div class="innerBanner clearfix">

		<img src="<?php echo base_url('assets/images/banner2.jpg') ?>" alt="Banner">

	</div>

	<section class="col-sm-12 productListSection clearfix">

		<div id="stick-here"></div>

		<div class="col-sm-12 filterSection clearfix" id="filter">

		<div class="filterOverlay" id="filterOverlay"></div>

		<div class="col-sm-12 productList clearfix">

			<div class="col-sm-12 products">

				<div class="row probar clearfix filter_data">
					<?php if (isset($search)) {
    foreach ($search as $search) {
        ?>
              <div class="col-sm-4 proBox">
						<div class="product">

							<div class="itemImg">
                              <?php if (empty($search->uses)) {?>
							 <a href="<?php echo site_url('productDetails') ?>?id=<?php echo $search->id ?>"><img src="<?php echo base_url() ?>/assets/upload/product/<?php echo str_replace(" ", '_', $search->pro_image) ?>" alt="Frame"></a>
							<?php } else {?>
                        <a href="<?php echo site_url('lenseDetails') ?>?id=<?php echo $search->id ?>"><img src="<?php echo base_url() ?>/assets/upload/product/<?php echo str_replace(" ", '_', $search->pro_image) ?>" alt="Frame"></a>
                    <?php }?>
							</div>
							<div class="itemBottom">
								<h3>
									<a class="productName" href="#"><?php echo $search->product_name ?></a>
								</h3>
								<div class="itemOffer clearfix">
									<em>RS <?php echo $search->regular_price ?></em>
									<div class="offer"><span><?php echo $search->offer ?>% Off</span></div>
								</div>
								<div class="priceBox">
									<span>Rs <?php echo $search->sale_price ?></span>
								</div>
								<div class="productAction">

									<div class="cart icon">

										<i style="cursor: pointer" class="icon-shopping-cart add_cart" proprice="<?php echo $search->sale_price ?>" pro_id="<?php echo $search->id ?>" pro_name="<?php echo $search->product_name ?>"pro_image="<?php echo $search->pro_image ?>"></i>

									</div>
									<div class="wishlist icon">
										 <i style="cursor: pointer" class="icon-favorite-heart-button class" proprice="<?php echo $search->sale_price ?>" pro_id="<?php echo $search->id ?>" pro_name="<?php echo $search->product_name ?>"pro_image="<?php echo $search->pro_image ?>"></i>
									</div>

								</div>
							</div>
						</div>
					</div>
					<?php }}?>
				</div>


			</div>

		</div>
<div align="center" id="pagination_link"></div>
	</section>


<?php include 'footer.php';?>
</body>
<script src="<?php echo base_url('assets/js/script.js'); ?>">
</script>
	<script type="text/javascript">
$(document).ready(function(){
    $(".add_cart").click(function(){
      var sale_price =  $(this).attr("proprice");
      var pro_id=  $(this).attr("pro_id");
      var pro_name=  $(this).attr("pro_name");
      var pro_image=  $(this).attr("pro_image");
      var prescription_type="Contact Lenses";

      $.ajax({
                type:"POST",
                url:"<?php echo base_url('frameOnly') ?>",
            data:{pro_id:pro_id,pro_name:pro_name,sale_price:sale_price,pro_image:pro_image,prescription_type:prescription_type},
                success:function(data){

                }
            });

    });
});
</script>
 <script type="text/javascript">

   $(".class").click(function(){
        $(this).toggleClass("active");
      var sale_price =  $(this).attr("proprice");
      var pro_id=  $(this).attr("pro_id");
      var pro_name=  $(this).attr("pro_name");
      var pro_image=  $(this).attr("pro_image");
       var prescription_type="Contact Lenses";

        $.ajax({
                type:"POST",
                url:"<?php echo base_url('wishframeOnly') ?>",
            data:{pro_id:pro_id,pro_name:pro_name,sale_price:sale_price,pro_image:pro_image,prescription_type:prescription_type},
                success:function(data){

                }
            });

    });
</script>
</html>