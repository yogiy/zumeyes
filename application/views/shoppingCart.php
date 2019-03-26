<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zumeyes</title>

<link href="<?php echo base_url(); ?>/assets/styles/slick.css" rel="stylesheet" type="text/css">
<?php include 'head.php';?>
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
                              <?php if (isset($items['lbox']) || isset($items['rbox'])) {?>
								<em class="mode">Eye Boxes</em>
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
									<?php if (isset($items['lbox'])) {?>
                                <em class="mode"><?php echo $items['lbox'] ?></em>
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
								<?php if (isset($items['rbox'])) {?>
                                <em class="mode"><?php echo $items['rbox'] ?></em>
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
					<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Color</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span><?php echo $items['color']; ?></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span><!--Rs 5--></span></div>

						</div>
						<?php if (!empty($items['prescription_name'])) {?>
						<div class="bar clearfix">
							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Prescription Name</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span><?php echo $items['prescription_name']; ?></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span></span></div>
						</div>
					<?php }?>
					<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Tax</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span> &nbsp&nbsp<?php if (!empty($items['tax'])) {?><?php echo $items['tax'];
            echo '%';} else {echo '0.0%';} ?></span></div>

						</div>

						<div class="bar itemTotalBar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><h4>Subtotal</h4></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix">
								<label>Quantity</label>
								<div class="field">
							<form method="post" action="update_product_from_cart" class="cartupdate">
									<input type="hidden" name="crowid" value="<?php echo $items['rowid'] ?>">
								 <select style="background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
   border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;

    box-shadow: 0 0 10px #E8E8E8 inset;
    height: 40px;
    margin: 0 0 0 25px;
    padding: 10px;
    width: 110px;" onchange="this.form.submit()" name="qantity">
    <option value="<?php echo $items['qty'] ?>"><?php echo $items['qty'] ?></option>
    <option value="1">1</option>
								<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option></select>
								</form>
								</div>
							</div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><em class="amount">Rs <?php if (isset($items['lense_price'])) {
            if ($items['tax'] != 0) {

                $tax_rate = (($items['lense_price'] * $items['qty'] + $items['price'] * $items['qty']) * $items['tax']) / 100;
                echo $subtotal = ($items['lense_price'] * $items['qty'] + $items['price'] * $items['qty']) + $tax_rate;
            } else {
                $tax_rate = 0;
                echo $subtotal = ($items['lense_price'] * $items['qty'] + $items['price'] * $items['qty']);
            }} else {

            ?><?php
if ($items['tax'] != 0) {
                $tax_rate = ($items['price'] * $items['qty'] * $items['tax']) / 100;
                echo $subtotal = $items['price'] * $items['qty'] + $tax_rate;
            } else {
                $tax_rate = 0;
                echo $subtotal = $items['price'] * $items['qty'];
            }}
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

						<?php if (isset($items->prescription_type) && !empty($items->prescription_type)) {?>	<div class="left clearfix"><span>Select Prescription Type </span></div>
							<div class="right"><em><?php echo $items->prescription_type; ?></em> <?php if ($items->prescription_type == 'Frame Only') {
            echo "You Did not select Lense Package(Optional)";
        }?></div><?php }?>

						</div>
						<?php if (isset($items->lsphere) && !empty($items->lsphere)) {?>
						<div class="bar clearfix">

							<div class="right clearfix">

								<em class="mode">Sphere(SPH)</em>
								<em class="mode">Cylinder(CYL)</em>
								<em class="mode">Axis</em>
								<?php if (!empty($items->leftlnearAddi) || !empty($items->rightlnearAddi)) {?>
								<em class="mode">Add (Near Addition)</em>
                               <?php }?>
                              <?php if (isset($items->lbox) && !empty($items->lbox) || isset($items->rbox) && !empty($items->rbox)) {?>
								<em class="mode">Eye Boxes</em>
                               <?php }?>
							</div>

						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Left Eye (OS)</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items->lsphere ?></em>
								<em class="mode"><?php echo $items->lcylinder ?></em>
								<em class="mode"><?php echo $items->laxis ?></em>
									<?php if (isset($items->leftlnearAddi)) {?>
                                <em class="mode"><?php echo $items->leftlnearAddi ?></em>
									<?php }?>
									<?php if (isset($items->lbox)) {?>
                                <em class="mode"><?php echo $items->lbox ?></em>
								<?php }?>
							</div>
						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Right Eye (OD)</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items->rsphere ?></em>
								<em class="mode"><?php echo $items->rcylinder ?></em>
								<em class="mode"><?php echo $items->raxis ?></em>
								<?php if (isset($items->rightlnearAddi)) {?>
                                <em class="mode"><?php echo $items->rightlnearAddi ?></em>
								<?php }?>
								<?php if (isset($items->rbox)) {?>
                                <em class="mode"><?php echo $items->rbox ?></em>
								<?php }?>
							</div>
						</div>
							<?php if (isset($items->pdsphere) && !empty(!empty($items->pdsphere)) || isset($items->nearpdsphere) && !empty(!empty($items->nearpdsphere))) {?>
						<div class="bar clearfix">
							<div class="left clearfix"><span>PD</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items->pdsphere ?></em>

							</div>
						</div>
						<div class="bar clearfix">
							<div class="left clearfix"><span>Near PD</span></div>
							<div class="right clearfix">

								<em class="mode"><?php echo $items->nearpdsphere ?></em>

							</div>
						</div>
					<?php }}?>
					</div>

					<div class="itemPrice clearfix">

						<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Frame Prize</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span><?php if (!empty($items->price)) {?>Rs <?php echo $items->price;
            echo '/-';} ?></span></div>

						</div>
						<?php if (isset($items->lense_price) && !empty($items->lense_price)) {?>
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
					<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Color</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span><?php echo $items->color; ?></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span><!--Rs 5--></span></div>

						</div>
						<?php if ($items->prescription_name) {?>
						<div class="bar clearfix">
							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Prescription Name</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span><?php echo $items->prescription_name; ?></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span></span></div>
						</div>
						<?php }?>
						<div class="bar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><span>Tax</span></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix"><span></span></div>
							<div class="col-sm-2 col-xs-12 boxThird clearfix"><span><?php if (!empty($items->tax)) {?>&nbsp&nbsp <?php echo $items->tax;
            echo '%';} else {echo '0.0%';} ?></span></div>

						</div>
						<div class="bar itemTotalBar clearfix">

							<div class="col-sm-4 col-xs-12 boxFirst clearfix"><h4>Subtotal</h4></div>
							<div class="col-sm-6 col-xs-12 boxSecond clearfix">
								<label>Quantity</label>
								<div class="field">
							<form method="post" action="update_product_from_usercart" id="usercartupdate">
									<input type="hidden" name="crowid" value="<?php echo $items->pro_id ?>">
									<input type="hidden" name="email" value="<?php echo $items->email ?>">
								  <select style="background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
   border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;

    box-shadow: 0 0 10px #E8E8E8 inset;
    height: 40px;
    margin: 0 0 0 25px;
    padding: 10px;
    width: 110px;" onchange="this.form.submit()" name="qantity">
    <option value="<?php echo $items->qty ?>"><?php echo $items->qty ?></option>
    <option value="1">1</option>
								<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option></select>
								</form>
								</div>
							</div>

							<div class="col-sm-2 col-xs-12 boxThird clearfix"><em class="amount">
							Rs <?php if (isset($items->lense_price) && !empty($items->lense_price)) {
            if ($items->tax != 0) {
                $tax_rate = (((trim($items->lense_price)) * (trim($items->qty)) + (trim($items->price)) * (trim($items->qty))) * $items->tax) / 100;
                echo $subtotal = ((trim($items->lense_price)) * (trim($items->qty)) + (trim($items->price)) * (trim($items->qty))) + $tax_rate;
            } else {
                echo $subtotal = ((trim($items->lense_price)) * (trim($items->qty)) + (trim($items->price)) * (trim($items->qty)));
                $tax_rate = 0;}} else {

            ?><?php
$tax_rate = (($items->price * $items->qty) * $items->tax) / 100;
            echo $subtotal = ($items->price * $items->qty) + $tax_rate;
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

					<div class="field"><input type="text" id="promoCode" placeholder="<?php echo $this->session->userdata('promocode'); ?>"></div>
					<button id="applypromo">Apply</button>

				</div>
			<span><?php echo $this->session->flashdata('expire'); ?></span>
			</div>
		<?php }?>
			<div class="col-sm-7 col-xs-12 totalAmount clearfix">

				<div class="amountBar clearfix">
					<div class="amount clearfix"><span>Item Count</span><em><?php echo $total_product; ?></em></div>
					<div class="amount clearfix"><span>Sub Total</span><em>Rs <?php echo $Total; ?></em></div>
				<!--	<div class="amount clearfix"><span>Tax</span><em>Rs 0.00</em></div>-->
					<div class="amount clearfix"><span>Shipping</span><em>Rs 0.00</em></div>
					<div class="amount clearfix"><span>Coupon</span><em id="offerprice"><?php
$cupon_price = 0;

if ($this->session->userdata('cupon_code')) {$cupon_price = $Total * $this->session->userdata('cupon_code') / 100;?>
					Rs <?php echo $cupon_price;} else { ?>Rs 0.00<?php }?></em></div>
					<div class="amount clearfix"><span class="total">Total Amount</span><em class="total">Rs <?php echo $Total - $cupon_price; ?></em></div>
				</div>

				<div class="buttonBlock clearfix">

					<a href="<?php echo base_url('index'); ?>"><button class="continue">Continue Shopping</button>
				<?php if ($total_product > 0 || !empty($cart_data)) {?>
					<a href="<?php echo base_url('checkout'); ?>">
					<button class="checkout">Checkout</button></a>
				<?php }?>

				</div>
			</div>

		</div>

	</section>



<?php include 'footer.php';?>

<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
	<script type="text/javascript">
		$('#applypromo').click(function(){

          var promocode =document.getElementById("promoCode").value;

          if(promocode)
			{
           $.ajax({

				type:'POST',
				data:{promocode:promocode},
				url:"<?php echo base_url('promocode') ?>",
				success:function(data){
					 window.location.reload();
				}

			});
       }
			});
	</script>

</body>
</html>