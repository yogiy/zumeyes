<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zumeyes</title>
<?php include 'head.php';?><style type="text/css"></style>
</head>

<body>

	<?php include 'header.php';
$tax = 0;
$ii = 0?>
	<section class="col-sm-12 checkoutSection clearfix">

		<div class="col-sm-8 secureCheckoutBlock clearfix">

			<div class="secureCheckout clearfix">

				<h2>Secure Checkout</h2>

				<div class="checkoutList clearfix">

					<div class="bar active clearfix">

						<span class="loginText">Email</span>

						<div class="userId clearfix">
						<?php if ($this->session->userdata('guest')) {?>

                         <div id="newCheckoutLoginDetails" class="field" style="display: ;"><input type="email" name="guest_email" value="<?php echo $this->session->userdata('guest_email'); ?>" id="c_email" placeholder="useremail@gmail.com" required="">

						</div>
                          <button id="check_email">Next</button>

						<?php } else {?>
							<h3 id="checkoutLoginDetails" ><?php echo $this->session->userdata('user_name'); ?> <em><?php echo $this->session->userdata('user_email'); ?></em></h3>

							<div id="newCheckoutLoginDetails" class="field" style="display: none;"><input type="text" id="c_email" value="<?php echo $this->session->userdata('user_email'); ?>" placeholder="useremail@gmail.com"></div>

							<button id="changeLoginBtn" style="display: none;">Change</button>
							<button id="saveLoginBtn" style="display: none;">Next</button>
						<?php }?>
						</div>

					</div>

					<div class="bar active clearfix" id="chooseAddressBar">

						<span>Delivery Address</span>

						<div class="addrsBlock clearfix">
						<?php if (isset($useraddress) && !empty($useraddress)) {
    $i = 1;
    foreach ($useraddress as $user_address) {?>
							<div class="addrsBox clearfix">

								<div class="addrsBoxHead clearfix">

									<div class="radioBlock"><i class="icon icon-radio-button <?php if ($i <= 1) {?> active <?php }?>"></i></div>

									<div class="userName">

										<h3><?php echo $username = $user_address->name; ?><?php if ($i <= 1) {?> (Default Address)<?php $i++;}?></h3>
										<div class="buttonBlock">

											<button><i class="icon icon-pencil-edit-button"></i><em>Edit Address</em></button>
											<form method="post" action="delete_user_address">
		     <input type="hidden" name="addressid" value="<?php echo $user_address->id ?>">	<button type="submit"  value="delete_pro" name="delete_pro"><i class="icon icon-delete-button"></i><em>Remove</em></button></form>


										</div>

									</div>

								</div>

								<div class="addrsBoxContent clearfix">

									<p><?php echo $user_address->address; ?>,</p>
								<p><?php echo $user_address->city; ?>:-<?php echo $user_address->pincode; ?>,</p>

								<p><?php echo $user_address->state; ?>,</p>
								<p><?php echo $user_address->phone; ?></p>
								<?php $address = $user_address->address . ',' . $user_address->city . ':' . $user_address->pincode . ',' . $user_address->state;?>


								</div>

								<div class="addrsBoxFoot clearfix"><button class="selectDeliveryAddress" address="<?php echo $user_address->id; ?>" >Deliver to this address</button></div>

							</div>
							<?php }}?>

						</div>


						<div class="addNewAddrs clearfix" 	<?php if ($this->session->userdata('guest')) {?>
                         id="hidedisplay" style="display:none"<?php }?>>

							<a href="#" class="clearfix" >

								<i class="icon icon-plus-button"></i>
								<span>Add New Address</span>

							</a>


						</div>

					</div>


					<div class="bar active clearfix changeAddrsBar">

						<span class="loginText">Delivery Address</span>

						<div class="userId clearfix">

							<p id="checkoutAddressDetails" class="select_DeliveryAddress">



						</p>
     <button id="changeDeliveryBtn">Change</button>
						</div>

					</div>


					<div class="bar clearfix addAddrsBar">

						<span>Add New Address</span>

						<form method="post" <?php if ($this->session->userdata('guest')) {?>action="guest"<?php } else {?> action="myAccount" <?php }?> >

								<div class="addrsDetails clearfix">


								<div class="detailsBar clearfix">

									<div class="field"><input type="text" required name="name" id="cfname"  pattern="^[A-Za-z\s]+$" placeholder="Full Name"></div>
									<div class="field right"><input type="text" required name="phone" id="cnum" pattern="^[0-9]+$" placeholder="Phone Number" minlength="10" maxlength="10"></div>
								<?php echo form_error('name'); ?>
								</div>
								<div class="detailsBar clearfix">

									<div class="field full"><textarea required name="address" id="caddrs" placeholder="Address"></textarea></div>
								<?php echo form_error('address'); ?>
								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" required name="cpin" id="cpin" pattern="^[0-9]+$" minlength="6" maxlength="6" placeholder="Pincode"></div>
									<?php echo form_error('cpin'); ?>
									<div class="field right"><input type="text" id="clocality" name="locality" required placeholder="Locality"></div>
								<?php echo form_error('locality'); ?>
								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" required name="city" id="ccity" pattern="^[A-Za-z\s]+$" placeholder="City"></div>
									<?php echo form_error('city'); ?>
									<div class="field right"><input name="state" required type="text" id="cstate" pattern="^[A-Za-z\s]+$" placeholder="State"></div>
								<?php echo form_error('state'); ?>
								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" required name="landmark" id="clandm" placeholder="Landmark"></div>
									<?php echo form_error('landmark'); ?>
									<div class="field right"><input name="alternatephone" required type="text" pattern="^[0-9]+$" minlength="10" maxlength="10" id="caltnum" placeholder="Alternate Number"></div>
								<?php echo form_error('alternatephone'); ?>
								</div>

								<div class="detailsBar clearfix">

									<label>Addresss Type</label>

									<div class="addrsType clearfix">

										<div class="radioBlock">
										<input id="homeD" class="radio-custom" value="Home (All day delivery)" name="radio-group" type="radio" checked>
            							<span for="homeD" class="radio-custom-label"><em>Home (All day delivery)</em></span>
										</div>
										<div class="radioBlock">
										<input id="officeD" class="radio-custom" value="Office (Delivery Between 10am - 7pm)" name="radio-group" type="radio">
            							<span for="officeD" class="radio-custom-label"><em>Office (Delivery Between 10am - 7pm)</em></span>
										</div>
														<?php echo form_error('radio-group'); ?>
									</div>

								</div>
								<div class="guest_emailarea">

                                    </div>
								<div class="buttonBlock clearfix">
								<input type="hidden" name="addnewaddresscheckout" value="addnewaddresscheckout">
									<div class="button">

										<input name="addnewaddress" <?php if ($this->session->userdata('guest')) {?>value="Next" <?php } else {?> value="Save" <?php }?>type="submit"></div>
									<button class="cancelBtn">Cancel</button>

								</div>



						</div>
					</form>
						</div>

						<div class="bar clearfix reviewBar">

						<span>Review Order</span>

						<div class="orderList clearfix">
							<?php $i = 1;
$Total = 0;
$taxrate = 0;?>
			       <?php $total_product = 0;?>
						 <?php
if (!isset($cart_data)) {
    foreach ($this->cart->contents() as $items): ?>
		  	<?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

							<div class="itemBar clearfix">

								<div class="itemImgBlock clearfix">

									<img src="<?php echo base_url('assets/upload/product/') ?><?php echo str_replace(" ", '_', $items['pro_image']); ?>" alt="Image1">
								<form method="post" action="delete_product_from_cartcheckout">
		     <input type="hidden" name="rowid" value="<?php echo $items['rowid'] ?>">	<button type="submit"  value="delete_pro" name="delete_pro"><i class="icon icon-delete-button"></i><em>Remove</em></button></form>

								</div>
								<div class="itemInfoBlock clearfix">

									<h4><?php echo $items['name']; ?></h4>
									<span><?php echo @$items['prescription_type'] ?></span>
									<em>Delivery By: <strong><?php date_default_timezone_set('Asia/Kolkata');
    $date = date("M d Y");
    echo date('M d Y', strtotime($date . ' + 7 days'));?></strong></em>

									<div class="quantityBlock clearfix">
										<label>Quantity</label>

										<div class="field">
										 <form method="post" action="update_product_from_cartcheckout" class="cartupdate">
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

								</div>
								<div class="itemPriceBlock clearfix"><span>Rs<?php echo $items['subtotal']; ?></span></div>

							</div>
							<?php $total_product = $this->cart->total_items();
    $tax = $items['tax'];
    if (isset($items['lense_price'])) {
        $subtotal = ($items['lense_price'] + $items['price']) * $items['qty'];
        $tax_rate = $subtotal * $tax / 100;} else {

        $subtotal = $items['price'] * $items['qty'];
        $tax_rate = $subtotal * $tax / 100;
    }
    $Total = $subtotal + $Total;
    $taxrate = $tax_rate + $taxrate;
    $order_id[$ii] = $items['id'];
    $ii++;
    ?>
			<?php endforeach;}?>
							<?php if (isset($cart_data) && !empty($cart_data)) {

    foreach ($cart_data as $items) {?>

						 	<div class="itemBar clearfix">

								<div class="itemImgBlock clearfix">

									<img src="<?php echo base_url('assets/upload/product/') ?><?php echo str_replace(" ", '_', $items->pro_image); ?>" alt="Image1">

							<form method="post" action="delete_product_from_usercartcheckout">
								<?php
if ($this->cart->contents()) {
        foreach ($this->cart->contents() as $item) {?>
		  	<?php echo form_hidden($i . '[rowid]', $item['rowid']); ?>

								 <input type="hidden" name="crowid" value="<?php echo $item['rowid'] ?>">

                        <?php }}?>
					<input type="hidden" name="rowid" value="<?php echo $items->id ?>">	<button type="submit" value="delete_pro" name="delete_pro"><i class="icon icon-delete-button"></i><em>Remove</em></button>
				</form>
								</div>
								<div class="itemInfoBlock clearfix">

									<h4><?php echo $items->name; ?></h4>
									<span><?php echo $items->prescription_type ?></span>
									<em>Delivery By: <strong><?php date_default_timezone_set('Asia/Kolkata');
        $date = date("M d Y");
        echo date('M d Y', strtotime($date . ' + 7 days'));?></strong></em>

									<div class="quantityBlock clearfix">
										<label>Quantity</label>

										<div class="field">
										 <form method="post" action="update_product_from_usercartcheckout" id="usercartupdate">
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

								</div>
								<?php

        $total_product = $items->qty + $total_product;
        $tax = $items->tax;
        if (isset($items->lense_price) && !empty($items->lense_price)) {$subtotal = ($items->lense_price + $items->price) * $items->qty;
            $tax_rate = $subtotal * $tax / 100;
        } else {
            $subtotal = $items->price * $items->qty;
            $tax_rate = $subtotal * $tax / 100;
        }
        $taxrate = $tax_rate + $taxrate;
        $Total = $subtotal + $Total;

        $order_id[$ii] = $items->pro_id;
        $ii++;

        ?>
								<div class="itemPriceBlock clearfix"><span>Rs<?php echo $subtotal; ?></span></div>

							</div>

			<?php }}?>


							<div class="buttonBlock clearfix"><button class="proceed">Proceed to Pay</button></div>

						</div>

					</div>

					<div class="bar clearfix paymentBar">

						<span>Make Payment</span>

						<div class="paymentOptionBlock clearfix">

							<ul class="optionsList clearfix">

								<li id="creditCard">Credit Card</li>
								<li id="debitCard">Debit Card</li>
								<li id="netBanking">Net Banking</li>
							<!--	<li id="cod">Cash on Delivery</li>
								<li id="bhimUPI">PhonePe/BHIM UPI</li>
								<li id="emi">EMI (Easy Installments)</li>-->

							</ul>

							<div class="paymentOptionContent clearfix">

								<span class="option creditCardOption">Credit Card</span>
								<?php $amount = $Total + $taxrate;
$cart_id = implode(',', $order_id);
$today = date("Ymd");
$rand = strtoupper(substr(uniqid(sha1(time())), 0, 4));
$orderid = '402' . '-' . $today . '-' . $rand;

$name = $username;if ($this->session->userdata('user_email')) {$mailid = $this->session->userdata('user_email');} elseif ($this->session->userdata('guest_email')) {$mailid = $this->session->userdata('guest_email');}
$phoneno = 1234567890;
$productinfo = $cart_id;
$address = $address;
$failure = base_url('payfail');
$sucess = base_url('paysuccess');
$cancel = base_url('checkout');
$PAYU_BASE_URL = "https://sandboxsecure.payu.in";
$MERCHANT_KEY = "xqHrv7DU";
$SALT = "DYRIJdQp46";
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$deliverydata = date('M d Y', strtotime($date . ' + 7 days'));
$orderdate = date('M d Y');
// Hash Sequence
$udf1 = $orderid;
$udf2 = $deliverydata;
$udf3 = $orderdate;
$udf4 = '';
$udf5 = '';
$hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $productinfo . '|' . $name . '|' . $mailid . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
$hash = strtolower(hash('sha512', $hashstring));

$action = $PAYU_BASE_URL . '/_payment';

?>
								<form  action="<?php echo $action; ?>" method="post" id="payuForm" name="payuForm">
								<div class="paymentDetails clearfix" id="creditCardContent" >

									<div class="detailsBar clearfix">

										<div class="field full"><input type="text" id="cardNumber" placeholder="Card Number"></div>

									</div>

									<div class="detailsBar clearfix">

										<div class="field">
											 <select style="background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
   border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;

    box-shadow: 0 0 10px #E8E8E8 inset;
    height: 50px;
    margin: 0 0 0 0px;
    padding: 10px;
    width:100%" name="exp_month" id="ccardexpM" required>
    <option value="">Expiry Month</option>
    <option value="01">01</option>
						   <option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
                            <option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
                            <option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
                            <option value="11">11</option>
							<option value="12">12</option>
						</select>
										</div>
										<div class="field right">
											 <select style="background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
   border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;

    box-shadow: 0 0 10px #E8E8E8 inset;
    height: 50px;
    margin: 0 0 0 0px;
    padding: 10px;
    width:100%" name="exp_year" id="ccardexpY" required>
    <option value="">Expiry Year</option>
    <option value="2019">2019</option>
						   <option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
                            <option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
                            <option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2028">2028</option>
                            <option value="2029">2029</option>
							<option value="2030">2030</option>
						</select>
										</div>

									</div>

									<div class="detailsBar clearfix">

										<div class="field">
											<input type="text" id="cvv" placeholder="CVV Number">
										</div>
										<div class="field right">
											<select style="background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
   border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;

    box-shadow: 0 0 10px #E8E8E8 inset;
    height: 50px;
    margin: 0 0 0 0px;
    padding: 10px;
    width:100%" name="cardtype" id="cctype" required>
    <option value="">Card Type</option>
    <option value="Master">Master</option>
						   <option value="Visa">Visa</option>
							<option value="American Express">American Express</option>

						</select>
										</div>

									</div>

									<div class="detailsBar clearfix">

										<div class="field full"><input type="text" id="owner" placeholder="Name on Card"></div>

									</div>

									<div class="detailsBar clearfix">

										<div class="checkbox check"><i class="checkIcon icon-tick"></i></div>
										<em class="saveCard">Save this card for future faster checkout</em>

									</div>
									<?php $order_id = implode(',', $order_id);?>
									<div class="buttonBlock clearfix">
									 <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="udf1" value="<?php echo $orderid; ?>"/>
      <input type="hidden" name="udf2" value="<?php echo $deliverydata; ?>"/>
      <input type="hidden" name="udf3" value="<?php echo $orderdate; ?>"/>

       <input type="hidden" name="address2" class="useraddress" value=""/>

      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
        <input class="form-control" type="hidden" name="amount" value="<?php echo $amount ?>"  readonly/>
          <input class="form-control" type="hidden" name="firstname" id="firstname" value="<?php echo $name ?>" readonly/>
  <input class="form-control" type="hidden" name="email" id="email" value="<?php echo $mailid ?>" readonly/>
  <input class="form-control" type="hidden" name="productinfo"  value="<?php echo $productinfo ?>" readonly/>
   <input class="form-control" type="hidden" name="phone" value="<?php echo $phoneno ?>" readonly />

      <input name="surl" type="hidden" value="<?php echo $sucess ?>" size="64" type="hidden" />
                            <input name="furl" value="<?php echo $failure ?>" size="64" type="hidden" />
                            <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                            <input name="curl" value="<?php echo $cancel ?> " type="hidden" />


										<button type="submit" class="btn btn-success" id="confirm-purchase">Pay Rs <?php echo $amount
; ?></button>

									</div>

								</div>
								</form>
								<form  action="<?php echo $action; ?>" method="post" name="payuForm">
								<span class="option debitCardOption">Debit Card</span>

								<div class="paymentDetails clearfix" id="debitCardContent">

									<div class="detailsBar clearfix">

										<div class="field full"><input type="text" id="cardNumberdebit" placeholder="Card Number"></div>

									</div>

									<div class="detailsBar clearfix">

										<div class="field">
											 <select style="background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
   border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;

    box-shadow: 0 0 10px #E8E8E8 inset;
    height: 50px;
    margin: 0 0 0 0px;
    padding: 10px;
    width:100%" name="exp_month" id="ccardexpM1" required>
    <option value="">Expiry Month</option>
    <option value="01">01</option>
						   <option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
                            <option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
                            <option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
                            <option value="11">11</option>
							<option value="12">12</option>
						</select>
										</div>
										<div class="field right">
											 <select style="background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
   border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;

    box-shadow: 0 0 10px #E8E8E8 inset;
    height: 50px;
    margin: 0 0 0 0px;
    padding: 10px;
    width:100%" name="exp_year" id="ccardexpY1" required>
    <option value="">Expiry Year</option>
    <option value="2019">2019</option>
						   <option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
                            <option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
                            <option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2028">2028</option>
                            <option value="2029">2029</option>
							<option value="2030">2030</option>
						</select>
										</div>

									</div>

									<div class="detailsBar clearfix">

										<div class="field">
											<input type="text" id="cvvd" placeholder="CVV Number">
										</div>
										<div class="field right">
											<select style="background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
   border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;

    box-shadow: 0 0 10px #E8E8E8 inset;
    height: 50px;
    margin: 0 0 0 0px;
    padding: 10px;
    width:100%" name="cardtype" id="cctyped" required>
    <option value="">Card Type</option>
    <option value="Master">Master</option>
						   <option value="Visa">Visa</option>
							<option value="American Express">American Express</option>

						</select>
										</div>

									</div>

									<div class="detailsBar clearfix">

										<div class="field full"><input type="text" id="ownerdebit" placeholder="Name on Card"></div>

									</div>

									<div class="detailsBar clearfix">

										<div class="checkbox check"><i class="checkIcon icon-tick"></i></div>
										<em class="saveCard">Save this card for future faster checkout</em>

									</div>
									<div class="buttonBlock clearfix">
									 <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
       <input type="hidden" name="useraddress" class="useraddress" value=""/>
      <input type="hidden" name="orderid" value="<?php echo $orderid; ?>"/>
        <input class="form-control" type="hidden" name="amount" value="<?php echo $amount ?>"  readonly/>
          <input class="form-control" type="hidden" name="firstname" value="<?php echo $name ?>" readonly/>
  <input class="form-control" type="hidden" name="email" value="<?php echo $mailid ?>" readonly/>
  <input class="form-control" type="hidden" name="productinfo"  value="<?php echo $productinfo ?>" readonly/>
   <input class="form-control" type="hidden" name="phone" value="<?php echo $phoneno ?>" readonly />

     <input class="form-control" type="hidden" name="address" value="<?php echo $address ?>" readonly/>
     <input name="surl" type="hidden" value="<?php echo $sucess ?>" size="64" type="hidden" />
                            <input name="furl" value="<?php echo $failure ?>" size="64" type="hidden" />
                            <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                            <input name="curl" value="<?php echo $cancel ?> " type="hidden" />

										<button type="submit" class="btn btn-success" id="confirm-purchasedd">Pay Rs <?php echo $amount
; ?></button>

									</div>

								</div>
								</form>
								<span class="option netBankingOption">Net Banking</span>

								<div class="paymentDetails clearfix" id="netBankingContent">

									<div class="detailsBar clearfix">

										<div class="paymoney clearfix">
											<i class="icon icon-radio-button"></i>
											<img src="images/AXIS_Bank.jpg" alt="Axis Bank">
										</div>
										<div class="paymoney clearfix">
											<i class="icon icon-radio-button"></i>
											<img src="images/HDFC_Bank.jpg" alt="Hdfc Bank">
										</div>
										<div class="paymoney clearfix">
											<i class="icon icon-radio-button"></i>
											<img src="images/ICICI_Bank.jpg" alt="ICICI Bank">
										</div>
										<div class="paymoney clearfix">
											<i class="icon icon-radio-button"></i>
											<img src="images/State_Bank_of_India.jpg" alt="SBI Bank">
										</div>
										<div class="paymoney clearfix">
											<i class="icon icon-radio-button"></i>
											<img src="images/Kotak_Mahindra_Bank.jpg" alt="Kotak Bank">
										</div>
										<div class="paymoney clearfix">
											<i class="icon icon-radio-button"></i>
											<img src="images/YES_Bank.png" alt="Yes Bank">
										</div>

									</div>

									<div class="detailsBar clearfix">

										<div class="field full">
											<input id="banklist" placeholder="Select Bank" type="text">
											<i class="icon icon-angle-down"></i>
										  	<ul class="list">
												<li><a href="#">Airtel Payments Bank</a></li>
												<li><a href="#">Allahabad Bank</a></li>
												<li><a href="#">Andhra Bank</a></li>
												<li><a href="#">Bandhan Bank</a></li>
												<li><a href="#">Bassien Catholic Co-Operative Bank</a></li>
												<li><a href="#">Bank of Baroda</a></li>
												<li><a href="#">Bank of Baroda Corporate</a></li>
												<li><a href="#">Bank of Baroda Retail</a></li>
												<li><a href="#">Bank of India</a></li>
												<li><a href="#">Bank of Maharashtra</a></li>
												<li><a href="#">Canara Bank</a></li>
												<li><a href="#">Catholic Syrian Bank</a></li>
												<li><a href="#">Central Bank</a></li>
												<li><a href="#">Citibank</a></li>
												<li><a href="#">City Union Bank</a></li>
												<li><a href="#">Corporation Bank</a></li>
												<li><a href="#">Cosmos Co-op Bank</a></li>
												<li><a href="#">Digibank by DBS</a></li>
												<li><a href="#">DCB BANK LTD</a></li>
												<li><a href="#">Dena Bank</a></li>
												<li><a href="#">Deutsche Bank</a></li>
												<li><a href="#">Dhanalakshmi Bank</a></li>
												<li><a href="#">Federal Bank</a></li>
												<li><a href="#">IDBI Bank</a></li>
												<li><a href="#">IDFC Bank</a></li>
												<li><a href="#">Indian Bank</a></li>
												<li><a href="#">IndusInd Bank</a></li>
												<li><a href="#">Indian Overseas Bank</a></li>
												<li><a href="#">JANATA SAHAKARI BANK LTD PUNE</a></li>
												<li><a href="#">Oriental Bank of Commerce</a></li>
												<li><a href="#">Punjab National Bank</a></li>
												<li><a href="#">Punjab National Bank Corporate</a></li>
												<li><a href="#">RBL Bank – Net Banking</a></li>
												<li><a href="#">RBS</a></li>
												<li><a href="#">Standard Chartered Bank</a></li>
												<li><a href="#">Syndicate Bank</a></li>
												<li><a href="#">UCO Bank</a></li>
												<li><a href="#">Yes Bank</a></li>
												<li><a href="#">Union Bank of India</a></li>
												<li><a href="#">United Bank of India</a></li>
												<li><a href="#">Vijaya Bank</a></li>
										  	</ul>
										</div>

									</div>

									<div class="buttonBlock clearfix">

										<button>Pay Rs <?php echo $amount; ?></button>

									</div>

								</div>

							<!--	<span class="option codOption">Cash on Delivery</span>

								<div class="paymentDetails clearfix" id="codContent">

									<div class="detailsBar clearfix">

										<p class="text1">Amount payable at the time of delivery Rs <?php echo $Total + $tax
; ?> (includes $9 COD charges)</p>

										<p class="text2">Save $9 COD charges by placing a prepaid order. #GoCashless</p>

									</div>

									<div class="buttonBlock clearfix">

										<button>Place Order</button>

									</div>
									<br><br>
									<br><br>

								</div>

								<span class="option bhimUPIOption">PhonePe/Bhim UPI</span>

								<div class="paymentDetails clearfix" id="bhimUPIContent">

									<div class="detailsBar clearfix">

										<p class="text1">You'll be redirected to PhonePe page, where you can pay using UPI, credit/debit card or wallet.</p>

									</div>

									<div class="buttonBlock clearfix">

										<button>Pay Rs <?php echo $Total + $tax
; ?></button>

									</div>

									<br><br>
									<br><br>

								</div>

								<span class="option emiOption">EMI</span>

								<div class="paymentDetails clearfix" id="emiContent">

									<div class="detailsBar clearfix selectEMIBank">

										<div class="field full">
											<input id="banklist" placeholder="Select Bank" type="text">
											<i class="icon icon-angle-down"></i>
										  	<ul class="list">
												<li><a href="#">Airtel Payments Bank</a></li>
												<li><a href="#">Allahabad Bank</a></li>
												<li><a href="#">Andhra Bank</a></li>
												<li><a href="#">Bandhan Bank</a></li>
												<li><a href="#">Bassien Catholic Co-Operative Bank</a></li>
												<li><a href="#">Bank of Baroda</a></li>
												<li><a href="#">Bank of Baroda Corporate</a></li>
												<li><a href="#">Bank of Baroda Retail</a></li>
												<li><a href="#">Bank of India</a></li>
												<li><a href="#">Bank of Maharashtra</a></li>
												<li><a href="#">Canara Bank</a></li>
												<li><a href="#">Catholic Syrian Bank</a></li>
												<li><a href="#">Central Bank</a></li>
												<li><a href="#">Citibank</a></li>
												<li><a href="#">City Union Bank</a></li>
												<li><a href="#">Corporation Bank</a></li>
												<li><a href="#">Cosmos Co-op Bank</a></li>
												<li><a href="#">Digibank by DBS</a></li>
												<li><a href="#">DCB BANK LTD</a></li>
												<li><a href="#">Dena Bank</a></li>
												<li><a href="#">Deutsche Bank</a></li>
												<li><a href="#">Dhanalakshmi Bank</a></li>
												<li><a href="#">Federal Bank</a></li>
												<li><a href="#">IDBI Bank</a></li>
												<li><a href="#">IDFC Bank</a></li>
												<li><a href="#">Indian Bank</a></li>
												<li><a href="#">IndusInd Bank</a></li>
												<li><a href="#">Indian Overseas Bank</a></li>
												<li><a href="#">JANATA SAHAKARI BANK LTD PUNE</a></li>
												<li><a href="#">Oriental Bank of Commerce</a></li>
												<li><a href="#">Punjab National Bank</a></li>
												<li><a href="#">Punjab National Bank Corporate</a></li>
												<li><a href="#">RBL Bank – Net Banking</a></li>
												<li><a href="#">RBS</a></li>
												<li><a href="#">Standard Chartered Bank</a></li>
												<li><a href="#">Syndicate Bank</a></li>
												<li><a href="#">UCO Bank</a></li>
												<li><a href="#">Yes Bank</a></li>
												<li><a href="#">Union Bank of India</a></li>
												<li><a href="#">United Bank of India</a></li>
												<li><a href="#">Vijaya Bank</a></li>
										  	</ul>
										</div>

									</div>

									<div class="detailsBar clearfix selectEMIOption">

										<div id="emiOptions" class="emiOptions clearfix">
											<label>Select EMI Option</label>
											<div class="emiHeadingBlock clearfix">
												<p class="emi-heading hOne">Tenure</p>
												<p class="emi-heading hTwo">Bank Interest Rate</p>
												<p class="emi-heading">Monthly Installment</p>
												<p class="emi-heading">Total Interest Paid To Bank</p>
											</div>
											<div class="emiHeadingBlock clearfix AvailableEMIOption">
												<p class="emi-heading emiValue hOne"><i class="icon icon-radio-button"></i>3 Months</p>
												<p class="emi-heading emiValue hTwo">12.5%</p>
												<p class="emi-heading emiValue">Rs. 4760.82/- p.m.</p>
												<p class="emi-heading emiValue">Rs. 292.46</p>
											</div>
											<div class="emiHeadingBlock clearfix AvailableEMIOption">
												<p class="emi-heading emiValue hOne"><i class="icon icon-radio-button"></i>6 Months</p>
												<p class="emi-heading emiValue hTwo">12.5%</p>
												<p class="emi-heading emiValue">Rs. 2417.41/- p.m.</p>
												<p class="emi-heading emiValue">Rs. 514.46</p>
											</div>
											<div class="emiHeadingBlock clearfix AvailableEMIOption">
												<p class="emi-heading emiValue hOne"><i class="icon icon-radio-button"></i>9 Months</p>
												<p class="emi-heading emiValue hTwo">12.5%</p>
												<p class="emi-heading emiValue">Rs. 1643.19/- p.m</p>
												<p class="emi-heading emiValue">Rs. 798.71</p>
											</div>
											<div class="emiHeadingBlock clearfix AvailableEMIOption">
												<p class="emi-heading emiValue hOne"><i class="icon icon-radio-button"></i>9 Months</p>
												<p class="emi-heading emiValue hTwo">12.5%</p>
												<p class="emi-heading emiValue">Rs. 1252.83/- p.m.</p>
												<p class="emi-heading emiValue">Rs. 1043.96</p>
											</div>

										</div>

									</div>

									<div class="detailsBar clearfix selectEMICardDetail">

										<div class="field"><input type="text" id="ccardnum" placeholder="Card Number"></div>

										<div class="field right">
											<input type="text" id="ccardexpM" placeholder="Expiry Month">
											<i class="icon icon-angle-down"></i>
										  	<ul class="list">
												<li><a href="#">01</a></li>
												<li><a href="#">02</a></li>
												<li><a href="#">03</a></li>
												<li><a href="#">04</a></li>
												<li><a href="#">05</a></li>
												<li><a href="#">06</a></li>
												<li><a href="#">07</a></li>
												<li><a href="#">08</a></li>
												<li><a href="#">09</a></li>
												<li><a href="#">10</a></li>
												<li><a href="#">11</a></li>
												<li><a href="#">12</a></li>
										  	</ul>
										</div>

									</div>

									<div class="detailsBar clearfix selectEMICardDetail">

										<div class="field">
											<input type="text" id="ccardexpY" placeholder="Expiry Year">
											<i class="icon icon-angle-down"></i>
										  	<ul class="list">
												<li><a href="#">2018</a></li>
												<li><a href="#">2019</a></li>
												<li><a href="#">2020</a></li>
												<li><a href="#">2021</a></li>
												<li><a href="#">2022</a></li>
												<li><a href="#">2023</a></li>
												<li><a href="#">2024</a></li>
												<li><a href="#">2025</a></li>
												<li><a href="#">2026</a></li>
												<li><a href="#">2027</a></li>
												<li><a href="#">2028</a></li>
												<li><a href="#">2029</a></li>
										  	</ul>
										</div>

										<div class="field right">
											<input type="text" id="cccvv" placeholder="CVV Number">
										</div>

									</div>

									<div class="buttonBlock clearfix">

										<button>Pay Rs <?php echo $Total + $tax
; ?></button>

									</div>

								</div>-->

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="col-sm-4 orderSumryBlock clearfix">

			<div class="amountBar clearfix">

				<h4>Order Complete Summary</h4>

					<div class="amount clearfix"><span>Item Count</span><em><?php echo $total_product; ?></em></div>
					<div class="amount clearfix"><span>Sub Total</span><em>Rs <?php echo $Total; ?></em></div>
					<div class="amount clearfix"><span>Tax</span><em>Rs <?php echo $taxrate;
?></em></div>
					<div class="amount clearfix"><span>Shipping</span><em>0.00</em></div>
					<div class="amount clearfix"><span>Coupon</span><em>0.00</em></div>
					<div class="amount clearfix"><span class="total">Total Amount</span><em class="total">Rs <?php echo $Total + $taxrate; ?></em></div>

			</div>

		</div>

	</section>



<?php include 'footer.php';?>

<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
	<script type="text/javascript">

		$(document).ready(function(){

 $(".selectDeliveryAddress").click(function(){
     var addresss =  $(this).attr("address");
               $(".useraddress").attr("value", addresss);
 });





         var error_cpwds=false;

          $("#check_email").click(function(){
          	check_email();
          });

          function check_email(){

          	var pattern= /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
          	var c_email =$("#c_email").val();
          	if(pattern.test(c_email) && c_email !== ''){

          		 document.getElementById('hidedisplay').style.display = '';
          		 $.ajax({
				type:'POST',
				data:{guest_email:c_email},
				url:"<?php echo base_url('setguest_email') ?>",
				success:function(data){
					 $(".guest_emailarea").html(data);
				},
				error:function(){
					alert('failure');
				}

			});
          	}
          	else{

          		document.getElementById('hidedisplay').style.display = 'none';
          	}
          }
      });
     </script>
     <script type="text/javascript">

		$(document).ready(function(){
            $(".selectDeliveryAddress").click(function(){
        var address_id=	$(this).attr('address');
         var email =$("#c_email").val();

            	$.ajax({
                type:"POST",
                url:"<?php echo base_url('getselectedaddress'); ?>",
            data:{address_id:address_id,email:email},
                success:function(data){
                  $(".select_DeliveryAddress").html(data);

                }
            });

            });

		});
	</script>
	<script src="<?php echo base_url('assets/js/jquery.payform.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/paycheckout_script.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/paydebitcard_script.js'); ?>"></script>

</body>
</html>