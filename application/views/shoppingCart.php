<?php echo form_open('path/to/controller/update/method'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zumeyes</title>
<link href="<?php echo base_url();?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/font.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/slick.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
<style type="text/css"></style>
</head>

<body>
	
<?php include('header.php');?>
	<section class="col-sm-12 shoppingCartSection clearfix">
	
		<h2>Shopping Cart</h2>
		
		<div class="cartList clearfix">
			<?php $i = 1; 
			       $Total=0;?>
			       <?php $total_product=0; ?>
		  <?php 
                 if(count($this->cart->contents()) > 0){
		  foreach ($this->cart->contents() as $items): ?>
		  	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
		  	
			<div class="cartBar clearfix">
				<div class="col-sm-4 col-xs-12 itemImg clearfix">
				
					<img src="<?php echo base_url('assets/upload/product/')?><?php echo str_replace(" ", '_',$items['pro_image']); ?>" alt="Product1">
				
				</div>
				
				<div class="col-sm-8 col-xs-12 itemDetails clearfix">
				
					<div class="itemHead clearfix">
					
						<h3><?php echo $items['name']; ?> </h3>
					<form method="post" action="delete_product_from_cart">
					<input type="hidden" name="rowid" value="<?php echo $items['rowid']?>">	<button type="submit" name="delete_pro"><i class="icon icon-delete-button"></i><em>Remove</em></button></form>
					
					</div>
					<div class="itemInfo clearfix">
						
						<div class="bar bar1 clearfix">
						
							<div class="left clearfix"><span>Select Prescription Type </span></div>
							<div class="right"><em><?php echo $items['prescription_type']; ?></em> <?php if($items['prescription_type']=='Frame Only'){
								echo "You Did not select Lense Package(Optional)";
							}?></div>
							
						</div>
						<?php if(isset($items['lsphere'])) { ?>
						<div class="bar clearfix">
						
							<div class="right clearfix">
								<em class="mode">Sphere(SPH)</em>
								<em class="mode">Cylinder(CYL)</em>
								<em class="mode">Axis</em>
								
							</div>
						
						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Left Eye (OS)</span></div>
							<div class="right clearfix">
							
								<em class="mode"><?php echo $items['lsphere']?></em>
								<em class="mode"><?php echo $items['lcylinder']?></em>
								<em class="mode"><?php echo $items['laxis']?></em>
								
							</div>
						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Right Eye (OD)</span></div>
							<div class="right clearfix">
							
								<em class="mode"><?php echo $items['rsphere']?></em>
								<em class="mode"><?php echo $items['rsphere']?></em>
								<em class="mode"><?php echo $items['rsphere']?></em>
								
							</div>
						</div>
					<?php } ?>
					</div>
					
					<div class="itemPrice clearfix">
					
						<div class="bar clearfix">
						
							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Frame Prize</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span>Rs <?php echo $items['price']?></span></div>
						
						</div>
						<?php if(isset($items['lense_price'])) { ?>
						<div class="bar clearfix">
						
							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Lens</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span>1.50 Standard Index</span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><em>Rs <?php echo $items['lense_price']?></em></div>
						
						</div>
						<div class="bar clearfix">
						
							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>AR Anti-Reflection Coating</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span>Standard Anti-Reflective Coating</span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span>$4.95</span></div>
						
						</div>
					<?php } ?>
						<div class="bar itemTotalBar clearfix">
						
							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><h4>Subtotal</h4></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix">
								<label>Quantity</label>
								<div class="field">
								  <input type="text"  id="cylL" placeholder="01">
								  <i class="icon icon-angle-down"></i>
								  <ul class="list">
									<li><a href="#">01</a></li>
									<li><a href="#">02</a></li>
									<li><a href="#">03</a></li>
									<li><a href="#">04</a></li>
								  </ul>
								</div>
							</div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><em class="amount">Rs <?php if(isset($items['lense_price'])) { echo       $subtotal=$items['lense_price']+$items['price']; } else {
								
							?><?php 
                       echo $subtotal=$items['price'];
                          }
							 ?></em></div>
						
						</div>
					
					</div>
				
				</div>
			
			</div>
			<?php $total_product++; 
                   
                   $Total=$subtotal+$Total;
			?>
			<?php endforeach; } ?>
			
		
		</div>
		<?php if(count($this->cart->contents()) > 0){?>
		<h2 class="summaryText">Order Complete Summary</h2>
		<?php } else{ ?>
			<h2 class="summaryText">Your Cart Is Empty</h2>
<?php }?>
		<div class="amountBlock clearfix">
		<?php if(count($this->cart->contents()) > 0){?>
		
			<div class="col-sm-5 col-xs-12 promoCode clearfix">
			
				<span>Have a promo code? <em>(One promo code per order)</em></span>
				<div class="fieldBar clearfix">
				
					<div class="field"><input type="text" id="promoCode"></div>
					<button>Apply</button>
				
				</div>
			
			</div>
		<?php }?>
			<div class="col-sm-7 col-xs-12 totalAmount clearfix">
			
				<div class="amountBar clearfix">
					<div class="amount clearfix"><span>Item Count</span><em><?php echo $total_product; ?></em></div>
					<div class="amount clearfix"><span>Sub Total</span><em>Rs <?php echo $Total; ?></em></div>
					<div class="amount clearfix"><span>Tax</span><em>Rs 0.00</em></div>
					<div class="amount clearfix"><span>Shipping</span><em>Rs 0.00</em></div>
					<div class="amount clearfix"><span>Coupon</span><em>Rs 0.00</em></div>
					<div class="amount clearfix"><span class="total">Total Amount</span><em class="total">Rs <?php echo $Total; ?></em></div>
				</div>

				<div class="buttonBlock clearfix">
				
					<a href="<?php echo base_url('productList');?>"><button class="continue">Continue Shopping</button>
					<?php	if(count($this->cart->contents()) > 0){ ?>
					<a href="<?php echo base_url('checkout');?>">	
					<button class="checkout">Checkout</button></a>
				<?php } ?>
				
				</div>
			</div>
		
		</div>
	
	</section>	
	

	
<?php include('footer.php');?>
<script src="<?php echo base_url('assets/js/script.js');?>"></script>
</body>
</html>