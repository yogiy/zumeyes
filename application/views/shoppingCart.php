<?php echo form_open('path/to/controller/update/method'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zumeyes</title>
<link href="<?php echo base_url(); ?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/font.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/slick.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<style type="text/css"></style>
</head>

<body>

<?php include 'header.php';?>
	<section class="col-sm-12 shoppingCartSection clearfix">

		<h2>Shopping Cart</h2>

		<div class="cartList clearfix">
			<?php $i = 1;
$Total = 0;?>
			       <?php $total_product = 0;?>
		  <?php
if ($this->session->userdata('isUserLoggedIn') == false) {
    if (count($this->cart->contents()) > 0) {

        foreach ($this->cart->contents() as $items): ?>
		  	<?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

			<div class="cartBar clearfix">
				<div class="col-sm-4 col-xs-12 itemImg clearfix">

					<img src="<?php echo base_url('assets/upload/product/') ?><?php echo str_replace(" ", '_', $items['pro_image']); ?>" alt="Product1">

				</div>

				<div class="col-sm-8 col-xs-12 itemDetails clearfix">

					<div class="itemHead clearfix">

						<h3><?php echo $items['name']; ?> </h3>
					<form method="post" action="delete_product_from_cart">
					<input type="hidden" name="rowid" value="<?php echo $items['rowid'] ?>">	<button type="submit" name="delete_pro"><i class="icon icon-delete-button"></i><em>Remove</em></button></form>

					</div>
					<div class="itemInfo clearfix">

						<div class="bar bar1 clearfix">

						<?php if (isset($items['prescription_type'])) {?>	<div class="left clearfix"><span>Select Prescription Type </span></div>
							<div class="right"><em><?php echo $items['prescription_type']; ?></em> <?php if ($items['prescription_type'] == 'Frame Only') {
            echo "You Did not select Lense Package(Optional)";
        }?></div><?php }?>

						</div>
						<?php if (isset($items['lsphere'])) {?>
						<div class="bar clearfix">

							<div class="right clearfix">
							<?php if (isset($items['leftlnearAddi']) || isset($items['rightlnearAddi'])) {?>  <style type="text/css">.shoppingCartSection .cartList .itemInfo em.mode {

    width: 25%;

}</style><?php }?>
								<em class="mode">Sphere(SPH)</em>
								<em class="mode">Cylinder(CYL)</em>
								<em class="mode">Axis</em>
								<?php if (isset($items['leftlnearAddi']) || isset($items['rightlnearAddi'])) {?>
								<em class="mode">Add (Near Addition)</em>
                               <?php }?>
							</div>

						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Left Eye (OS)</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items['lsphere'] ?></em>
								<em class="mode"><?php echo $items['lcylinder'] ?></em>
								<em class="mode"><?php echo $items['laxis'] ?></em>
								<?php if (isset($items['leftlnearAddi'])) {?>
                                <em class="mode"><?php echo $items['leftlnearAddi'] ?></em>
									<?php }?>
							</div>
						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Right Eye (OD)</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items['rsphere'] ?></em>
								<em class="mode"><?php echo $items['rcylinder'] ?></em>
								<em class="mode"><?php echo $items['raxis'] ?></em>
								<?php if (isset($items['rightlnearAddi'])) {?>
                                <em class="mode"><?php echo $items['rightlnearAddi'] ?></em>
								<?php }?>
							</div>
						</div>
						<?php if (isset($items['pdsphere']) || isset($items['nearpdsphere'])) {?>
						<div class="bar clearfix">
							<div class="left clearfix"><span>PD</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items['pdsphere'] ?></em>

							</div>
						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Near PD</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items['nearpdsphere'] ?></em>

							</div>
						</div>
					<?php }}?>
					</div>

					<div class="itemPrice clearfix">

						<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Frame Prize</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span>Rs <?php echo $items['price'] ?>/-</span></div>

						</div>
						<?php if (isset($items['lense_price'])) {?>
						<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Lens</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span><?php echo $items['lense_name']; ?></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><em><?php if ($items['lense_price']) {?>Rs <?php echo $items['lense_price'];
            echo '/-';} ?></em></div>

						</div>
						<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>AR Anti-Reflection Coating</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span>Standard Anti-Reflective Coating</span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span><!--Rs 5--></span></div>

						</div>
					<?php }?>
						<div class="bar itemTotalBar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><h4>Subtotal</h4></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix">
								<label>Quantity</label>
								<div class="field">
							<form method="post" action="update_product_from_cart" class="cartupdate">
									<input type="hidden" name="crowid" value="<?php echo $items['rowid'] ?>">
								  <input type="text" list="qty" value="<?php echo $items['qty'] ?>" name="qantity" id="cylL" placeholder="01" onchange="this.form.submit()">
								  <i class="icon icon-angle-down"></i>
								  <datalist id="qty" >
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>

								 </datalist>
								</form>
								</div>
							</div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><em class="amount">Rs <?php if (isset($items['lense_price'])) {echo $subtotal = $items['lense_price'] + $items['subtotal'];} else {

            ?><?php
echo $subtotal = $items['subtotal'];
        }
        ?></em></div>

						</div>

					</div>

				</div>

			</div>
			<?php $total_product = $this->cart->total_items();

        $Total = $subtotal + $Total;
        ?>
			<?php endforeach;}}?>
			<?php
if (isset($cart_data) && !empty($cart_data)) {

    foreach ($cart_data as $items) {?>

			<div class="cartBar clearfix">
				<div class="col-sm-4 col-xs-12 itemImg clearfix">

					<img src="<?php echo base_url('assets/upload/product/') ?><?php echo str_replace(" ", '_', $items->pro_image); ?>" alt="Product1">

				</div>

				<div class="col-sm-8 col-xs-12 itemDetails clearfix">

					<div class="itemHead clearfix">

						<h3><?php echo $items->name; ?> </h3>
					<form method="post" action="delete_product_from_usercart">


		  <?php $i = 1;
        if ($this->session->userdata('isUserLoggedIn') == true) {
            if (count($this->cart->contents()) > 0) {

                foreach ($this->cart->contents() as $item) {?>
		  	<?php echo form_hidden($i . '[rowid]', $item['rowid']); ?>

					<input type="hidden" name="crowid" value="<?php echo $item['rowid']; ?>">
                 <?php }}}?>
					<input type="hidden" name="rowid" value="<?php echo $items->id ?>">	<button type="submit" value="delete_pro" name="delete_pro"><i class="icon icon-delete-button"></i><em>Remove</em></button></form>

					</div>
					<div class="itemInfo clearfix">

						<div class="bar bar1 clearfix">

						<?php if (isset($items->prescription_type)) {?>	<div class="left clearfix"><span>Select Prescription Type </span></div>
							<div class="right"><em><?php echo $items->prescription_type; ?></em> <?php if ($items->prescription_type == 'Frame Only') {
            echo "You Did not select Lense Package(Optional)";
        }?></div><?php }?>

						</div>
						<?php if (isset($items->lsphere)) {?>
						<div class="bar clearfix">

							<div class="right clearfix">

								<em class="mode">Sphere(SPH)</em>
								<em class="mode">Cylinder(CYL)</em>
								<em class="mode">Axis</em>
								<em class="mode">Add (Near Addition)</em>
							</div>

						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Left Eye (OS)</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items->lsphere ?></em>
								<em class="mode"><?php echo $items->lcylinder ?></em>
								<em class="mode"><?php echo $items->laxis ?></em>

							</div>
						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Right Eye (OD)</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items->rsphere ?></em>
								<em class="mode"><?php echo $items->rcylinder ?></em>
								<em class="mode"><?php echo $items->raxis ?></em>

							</div>
						</div>
					<?php }?>
					</div>

					<div class="itemPrice clearfix">

						<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Frame Prize</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span><?php if (!empty($items->price)) {?>Rs <?php echo $items->price;
            echo '/-';} ?></span></div>

						</div>
						<?php if (isset($items->lense_price)) {?>
						<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Lens</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span><?php echo $items->lense_name; ?></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><em><?php if (!empty($items->lense_price)) {?>Rs <?php echo $items->lense_price;} ?></em></div>

						</div>
						<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>AR Anti-Reflection Coating</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span>Standard Anti-Reflective Coating</span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span><!--Rs 5--></span></div>

						</div>
					<?php }?>
						<div class="bar itemTotalBar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><h4>Subtotal</h4></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix">
								<label>Quantity</label>
								<div class="field">
							<form method="post" action="update_product_from_usercart" id="usercartupdate">
									<input type="hidden" name="crowid" value="<?php echo $items->pro_id ?>">
									<input type="hidden" name="email" value="<?php echo $items->email ?>">
								  <input type="text" list="qty" value="<?php echo $items->qty ?>" name="qantity" id="cylL" placeholder="01" onchange="this.form.submit()">
								  <i class="icon icon-angle-down"></i>
								  <datalist id="qty" >
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>

								 </datalist>
								</form>
								</div>
							</div>

							<div class="col-sm-2 col-xs-12 boxThird clearfix"><em class="amount">Rs <?php if (isset($items->lense_price)) {echo $subtotal = ($items->lense_price + $items->price) * $items->qty;} else {

            ?><?php
echo $subtotal = $items->price * $items->qty;
        }
        ?></em></div>

						</div>

					</div>

				</div>

			</div>
			<?php $total_product = $items->qty + $total_product;

        $Total = $subtotal + $Total;
        ?>
			<?php }}?>


		</div>
		<?php if ((count($this->cart->contents()) > 0) || isset($cart_data)) {?>
		<h2 class="summaryText">Order Complete Summary</h2>
		<?php } else {?>
			<h2 class="summaryText">Your Cart Is Empty</h2>
<?php }?>
		<div class="amountBlock clearfix">
		<?php if ((count($this->cart->contents()) > 0) || isset($cart_data)) {?>

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

					<a href="<?php echo base_url('productList'); ?>"><button class="continue">Continue Shopping</button>
				<?php if ($total_product > 0 || !empty($cart_data)) {?>
					<a href="<?php echo base_url('checkout'); ?>">
					<button class="checkout">Checkout</button></a>
				<?php }?>

				</div>
			</div>

		</div>

	</section>



<?php include 'footer.php';?>
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

</body>
</html>