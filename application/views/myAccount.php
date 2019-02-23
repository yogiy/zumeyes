<!doctype html>
<html>
<?php if (isset($user) && !empty($user)) {
    foreach ($user as $key => $userdata) {
        $gender = $userdata->gender;
    }
}
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<?php include 'head.php';?>
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

</head>

<body>
<?php include 'header.php';?>

	<div class="col-sm-12 pageNavigator clearfix">

		<a href="home.html">Home  /</a>  <a href="home.html">My Account  /</a>  <span>Personal Information</span>

	</div>

	<section class="col-sm-12 myAccSection clearfix">

		<div class="leftSide clearfix col-sm-3">

			<div class="panel clearfix">

				<div class="panelTop clearfix">

					<i class="icon icon-user-circle"></i>
					<div class="userInfo clearfix">

						<span><?php echo $this->session->userdata('user_name'); ?>&nbsp <?php echo $this->session->userdata('user_lname'); ?> </span>
						<em><?php echo $this->session->userdata('user_email'); ?> </em>

					</div>

				</div>

				<ul class="accList clearfix">

					<li id="myOrder"><a href="#">My Order</a></li>
					<li id="returnOrder"><a href="#">Return Order</a></li>
					<span>Profile</span>
					<li id="personalInfo"><a href="#">Personal Information</a></li>
					<li id="manageAddrs"><a href="#">Manage Address</a></li>
					<li id="saveCards"><a href="#">Saved Cards</a></li>
					<li id="bankDetails"><a href="#">Bank Details</a></li>
					<!--<span>Payment</span>
					<li id="phonePe"><a href="#">PhonePe Wallet</a></li>
					<li id="giftCards"><a href="#">Gift Cards</a></li>-->
					<span>Other Stuff</span>
					<li id="wishlist"><a href="#">My Wishlist</a></li>
					<li id="notification"><a href="#">All Notifications</a></li>
				<!--	<li id="rewards"><a href="#">My Rewards</a></li>-->

				</ul>

			</div>

		</div>

		<div class="rightSide clearfix col-sm-9">

			<div class="accContentSection clearfix">

				<div class="acodinOption myOrderOption"><span>My Order</span></div>

				<div class="accContent clearfix" id="myOrderContent" style="display: none;">

					<div class="head clearfix"><h1>My Order List</h1></div>

					<div class="myOrderContent clearfix">

						<?php if (!empty($user_order)) {
    foreach ($user_order as $userorder) {?>
						<div class="orderBar clearfix">

							<div class="barTop clearfix">

								<div class="boxT clearfix">

									<span>Order ID</span>
									<em><?php echo $userorder->order_id; ?></em>

								</div>
								<div class="boxT clearfix">

									<span>Order Placed</span>
									<em><?php echo $userorder->order_date; ?></em>

								</div>
								<div class="buttonBlock clearfix">

									<a href="<?php echo base_url('orderDetails'); ?>?id=<?php echo $userorder->id; ?>">
									<button>Order Details</button>
                                    </a>
									<button>Invoice</button>
									<a href="<?php echo base_url('orderDetails'); ?>?id=<?php echo $userorder->id; ?>"><button>Track</button>
								</a>
								</div>

							</div>
								<?php if (!empty($order_cart_data)) {
        foreach ($order_cart_data as $order_cartdata) {
            if ($order_cartdata->order_id == $userorder->order_id) {
                ?>
							<div class="itemBar clearfix">

								<div class="itemImg"><img src="<?php echo base_url() ?>assets/upload/product/<?php echo str_replace(" ", '_', $order_cartdata->pro_image) ?>" alt="Item One"></div>

								<div class="itemInfo clearfix">

									<h2><?php echo $order_cartdata->name ?> </h2>
									<div class="info clearfix">
										<span><?php echo $order_cartdata->prescription_type ?></span>
										<span>Quantity <strong><?php echo $order_cartdata->qty ?></strong></span>
										<em>Rs <?php
if ($order_cartdata->order_id == $userorder->order_id) {
                    $qty = 0;
                    $taxx = 0;
                    $qty = $order_cartdata->qty + $qty;

                    if (empty($order_cartdata->lense_price)) {
                        if ($order_cartdata->tax != 0) {
                            $taxx = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->tax / 100;}
                        echo $order_cartdata->price * $order_cartdata->qty + $taxx;

                    } else {
                        if ($order_cartdata->tax != 0) {
                            $taxx = ($order_cartdata->price + $order_cartdata->lense_price) * $order_cartdata->qty * $order_cartdata->tax / 100;
                        }
                        echo (($order_cartdata->price + $order_cartdata->lense_price) * $order_cartdata->qty) + $taxx;
                    }
                }?>
										</em>
									</div>

								</div>

							</div>
							<?php }}}?>

							<div class="barFoot clearfix">

								<span class="deliverText">Delivered On: <em><?php echo $userorder->deliverydate; ?></em></span>
								<span class="deliverAmtText"><em>Total Amount &nbsp;</em> Rs <?php echo $userorder->amount; ?></span>

							</div>

						</div>
					<?php }}?>
					</div>

				</div>

				<div class="acodinOption returnOrderOption"><span>Return Order</span></div>

				<div class="accContent clearfix" id="returnOrderContent">

					<div class="head clearfix"><h1>Return Order List</h1></div>

					<div class="returnOContent clearfix">

						<div class="nothingAddedBox clearfix">

							<h3>No return order</h3>
							<p>There is no item has been return to Zumeyes</p>

						</div>

					</div>

				</div>

				<div class="acodinOption personalInfoOption"><span>Personal Information</span></div>

				<div class="accContent clearfix" id="personalInfoContent" style="display: block;">

					<div class="head clearfix">
						<h1>Your Personal Infomaion</h1>
						<button id="btn_edit_address" ><i class="icon icon-pencil-edit-button"></i><em>Edit Personal Information</em></button>
						<button id="btn_cancel_edit_address" class="cancel" style="display: none;"><i class="icon icon-close"></i><em>Cancel</em></button>
					</div>

					<div class="personalDetails clearfix">

						<div class="infoBar clearfix">
					    	<label>Email</label>
							<span><?php echo $this->session->userdata('user_email'); ?></span>

						</div>
						<div class="infoBar clearfix">

							<label>Name</label>
							<span><?php echo $this->session->userdata('user_name'); ?></span>

						</div>
						<div class="infoBar clearfix">

							<label>Password</label>
							<span>*******</span>
							<a id="startChangePwd" href="#">Change Password</a>

						</div>
						<div class="infoBar clearfix">

							<label>Mobile Number</label>
							<span><?php echo $this->session->userdata('phone'); ?></span>

						</div>
						<div class="infoBar clearfix">

							<label>Date of Birth</label>
							<span><?php echo $this->session->userdata('dob'); ?></span>

						</div>

					</div>

					<div class="editPersonalDetails clearfix">
					<form method="post" action="myAccount">
						<div class="infoBar noChange clearfix">

							<label>Email</label>
							<span><?php echo $this->session->userdata('user_email'); ?> </span>

						</div>
						<div class="infoBar clearfix">

							<label>First Name</label>
							<div class="field clearfix"><input type="text" required name="name" id="fname" value="<?php echo $this->session->userdata('user_name'); ?> "></div>
						<span class="error_cemail" style="font-size:15px" id="fname_error_message"></span>
						</div>
						<div class="infoBar clearfix">

							<label>Gender</label>
							<div class="radioBlock clearfix">
								<div class="option">
									<input id="male" value="Male" class="radio-custom" name="radio-group" type="radio" <?php if ($gender == 'Male') {?>checked <?php }?> >
            						<span for="male" class="radio-custom-label"><em>Male</em></span>
								</div>
								<div class="option">
									<input id="female" value="Female" class="radio-custom" name="radio-group" <?php if ($gender == 'Female') {?>checked <?php }?> type="radio">
            						<span for="female" class="radio-custom-label"><em>Female</em></span>
								</div>
							</div>
						<?php echo form_error('radio-group'); ?>
						</div>
						<div class="infoBar clearfix">

							<label>Mobile Number</label>
							<div class="field clearfix"><input type="text"  required name="phone" id="num" value="<?php echo $this->session->userdata('phone'); ?>" placeholder="xxxxxxxxxx"></div>
						<span class="error_cemail" style="font-size:15px" id="phone_error_message"></span>
						</div>
						<div class="infoBar clearfix">

							<label>Date of Birth</label>
							<div class="field clearfix"><input type="text" pattern="^\d{2}/\d{2}/\d{4}$" required name="dob" id="cdob" value="<?php echo $this->session->userdata('dob'); ?>" placeholder="31/02/19xx"></div>

						</div>

						<div class="buttonBlock clearfix">

							<div class="button"><input type="submit" name="update_personal_info" id="editpinfo" name="save" value="Save"></div>
							<button class="cancel">Cancel</button>

						</div>
					</form>
					</div>
					<div class="changePwd clearfix">
						<form method="post" action="myAccount">

						<h3>Change Password</h3>

						<div class="infoBar clearfix">

							<label>Type Current Password</label>
							<div class="field clearfix"><input type="password" required name="cpass" id="oldpwd" placeholder="">
								<span class="error_cemail" style="font-size:15px" id="c_pwd_error_message"></span></div>

						</div>
						<div class="infoBar clearfix">

							<label>Type New Password</label>
							<div class="field clearfix" ><input type="password" required name="pass" id="cpwds" placeholder="">
								<span class="error_cemail" style="font-size:15px" id="cpwds_error_message"></span></div>

						</div>
						<div class="infoBar clearfix">

							<label>Retype New Password</label>
							<div class="field clearfix"><input type="password" required name="rnewpass" id="ccpwds" placeholder="">
								<span class="error_cemail" style="font-size:15px" id="ccpwds_error_message"></span></div>

						</div>

						<div class="buttonBlock clearfix ">

							<button type="submit" name="changepass" id="submitbutton" value="changepass">Change</button>
							<button id="reloadfrompass" class="cancel" >Cancel</button>

						</div>
					</form>
					</div>

				</div>


				<div class="acodinOption manageAddrsOption"><span>Manage Address</span></div>

				<div class="accContent clearfix" id="manageAddrsContent">

					<div class="head clearfix">
						<h1>Manage Address</h1>
						<div class="addNewAddrs clearfix">
							<a id="btnAddAddress" href="#" class="clearfix">
								<i class="icon icon-plus-button"></i>
								<span>Add New Address</span>
							</a>
						</div>
						<button class="cancel" style="display: none;"><i class="icon icon-close"></i><em>Cancel</em></button>
					</div>

					<div class="manageAddrsBlock clearfix">

						<div class="addrsBlock clearfix">

							<div class="clearfix addNewAddrs" id="newAddressBlock">

								<span>Add New Address</span>
						<form method="post" action="myAccount" autocomplete="off">

								<div class="addrsDetails clearfix">


								<div class="detailsBar clearfix">

									<div class="field"><input type="text" autocomplete="off" required name="name" id="nfname" placeholder="Full Name">
										<span class="error_cemail" style="font-size:15px" id="nname_error_message"></span></div>
									<div class="field right"><input type="text" pattern="^[0-9]+$" placeholder="Phone Number" minlength="8" maxlength="15" autocomplete="off" required name="phone" id="nnum" placeholder="Phone Number"><span class="error_cemail" style="font-size:15px" id="cphone_error_message"></span></div>

								</div>
								<div class="detailsBar clearfix">

									<div class="field full"><textarea required name="address" id="naddr" placeholder="Address"></textarea>
									<span class="error_cemail" style="font-size:15px" id="naddress_error_message"></span></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" autocomplete="off" required name="cpin" id="npin" placeholder="Pincode">
									<span class="error_cemail" style="font-size:15px" id="npin_error_message"></span></div>

									<div class="field right"><input type="text" autocomplete="off" id="nlocality" name="locality" required placeholder="Locality">
									<span class="error_cemail" style="font-size:15px" id="nlocality_error_message"></span></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" autocomplete="off" required name="city" id="ncity" placeholder="City">
									<span class="error_cemail" style="font-size:15px" id="ncity_error_message"></span></div>

									<div class="field right"><input name="state" autocomplete="off" required type="text" id="nstate" placeholder="State">
										<span class="error_cemail" style="font-size:15px" id="nstate_error_message"></span> </div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" autocomplete="off" required name="landmark" id="nlandm" placeholder="Landmark"><span class="error_cemail" style="font-size:15px" id="nlandm_error_message"></span></div>

									<div class="field right"><input name="alternatephone" autocomplete="off" required type="text" placeholder="Alternate Number" pattern="^[0-9]+$" placeholder="Phone Number" minlength="10" maxlength="10"></div>

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

								<div class="buttonBlock clearfix">

									<div class="button"><input name="addnewaddress" value="Save" type="submit" id="addaddress"></div>
									<button class="cancelBtn">Cancel</button>

								</div>



						</div>
					</form>
							</div>

							<div class="clearfix addNewAddrs editAddrs" id="updateAddressBlock" >

								<span>Edit Address</span>

								<div class="addrsDetails clearfix">

							<form method="post" action="myAccount">

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="name" id="cfname" value="<?php echo $this->session->userdata('user_name'); ?> "></div>
									<div class="field right"><input type="text" name="phone" id="cnum" placeholder="+91 2875469872"></div>

								</div>
								<div class="detailsBar clearfix">

									<div class="field full"><textarea name="address" id="caddrs" placeholder="D Block 201, Ground Floor, Gali No.1,West Dawarka"></textarea></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="pincode" id="cpin" placeholder="110048"></div>
									<div class="field right"><input type="text" id="clocality" name="locakity" placeholder="South Delhi"></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="city" id="ccity" placeholder="New Delhi"></div>
									<div class="field right"><input type="text" name="state" id="cstate" placeholder="New Delhi"></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="landmark" id="clandm" placeholder="Near DAV School"></div>
									<div class="field right"><input type="text" name="alternatephone" id="caltnum" placeholder="+91 8745000036"></div>

								</div>

								<div class="detailsBar clearfix">

									<label>Addresss Type</label>

									<div class="addrsType clearfix">

										<div class="radioBlock">
										<input id="homeED" class="radio-custom" name="radio-group" type="radio" checked>
            							<span for="homeED" class="radio-custom-label"><em>Home (All day delivery)</em></span>
										</div>
										<div class="radioBlock">
										<input id="officeED" class="radio-custom" name="radio-group" type="radio">
            							<span for="officeED" class="radio-custom-label"><em>Office (Delivery Between 10am - 7pm)</em></span>
										</div>

									</div>

								</div>


								<div class="buttonBlock clearfix">

									<div class="button selectAndDeliveryAddress"><input name="addressupdate" value="Save" type="submit"></div>
									<button class="cancelBtn">Cancel</button>

								</div>

							</form>

						</div>

							</div>
							<div class="clearfix addNewAddrs editAddrs" class="updateAddressBlock" >

								<span>Edit Address</span>

								<div class="addrsDetails clearfix">

							<form method="post" action="myAccount">

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="name" class="cfname" value="Ravi"></div>
									<div class="field right"><input type="text" name="phone" class="cnum" placeholder="+91 2875469872"></div>

								</div>
								<div class="detailsBar clearfix">

									<div class="field full"><textarea name="address" class="caddrs" placeholder="D Block 201, Ground Floor, Gali No.1,West Dawarka"></textarea></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="pincode" class="cpin" placeholder="110048"></div>
									<div class="field right"><input type="text" class="clocality" name="locakity" placeholder="South Delhi"></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="city" class="ccity" placeholder="New Delhi"></div>
									<div class="field right"><input type="text" name="state" class="cstate" placeholder="New Delhi"></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="landmark" class="clandm" placeholder="Near DAV School"></div>
									<div class="field right"><input type="text" name="alternatephone" class="caltnum" placeholder="+91 8745000036"></div>

								</div>

								<div class="detailsBar clearfix">

									<label>Addresss Type</label>

									<div class="addrsType clearfix">

										<div class="radioBlock">
										<input id="homeEOD" class="radio-custom" name="radio-group" type="radio" checked>
            							<span for="homeEOD" class="radio-custom-label"><em>Home (All day delivery)</em></span>
										</div>
										<div class="radioBlock">
										<input id="officeEOD" class="radio-custom" name="radio-group" type="radio">
            							<span for="officeEOD" class="radio-custom-label"><em>Office (Delivery Between 10am - 7pm)</em></span>
										</div>

									</div>

								</div>


								<div class="buttonBlock clearfix">

									<div class="button selectAndDeliveryAddress"><input name="addressupdate" value="Save" type="submit"></div>
									<button class="cancelBtn">Cancel</button>

								</div>

							</form>

						</div>

							</div>

							<?php if (isset($useraddress) && !empty($useraddress)) {
    foreach ($useraddress as $user_address) {?>
							<div class="addrsBox clearfix">

								<div class="addrsBoxHead clearfix">

									<div class="radioBlock">
										<input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked>
            							<span for="radio-1" class="radio-custom-label"></span>
									</div>

									<div class="userName">

										<h3><?php echo $user_address->name; ?>  (Default Address)</h3>
										<div class="buttonBlock clearfix">

											<button class="editClass"><i class="icon icon-pencil-edit-button"></i><em>Edit Address</em></button>



<form method="post" action="delete_user_addressmyaccount">
		     <input type="hidden" name="addressid" value="<?php echo $user_address->id ?>">
											<button class="" type="submit" value="deleteClass"><i class="icon icon-delete-button"></i><em>Remove</em></button></form>

										</div>

									</div>

								</div>

								<div class="addrsBoxContent clearfix">

								<p><?php echo $user_address->address; ?>,</p>
								<p><?php echo $user_address->city; ?>,</p>
								<p><?php echo $user_address->pincode; ?>,</p>
								<p><?php echo $user_address->state; ?>,</p>
								<p><?php echo $user_address->phone; ?></p>



								</div>

							</div>
							<?php }}?>


						</div>

					</div>

				</div>

				<div class="acodinOption saveCardsOption"><span>Save Cards</span></div>

				<div class="accContent clearfix" id="saveCardsContent">

					<div class="head clearfix">
						<h1>Manage Card Detail</h1>
						<div class="addNewAddrs addNewCard clearfix">
							<a id="btnAddCard" href="#" class="clearfix">
								<i class="icon icon-plus-button"></i>
								<span>Add a New Card</span>
							</a>
						</div>
						<button class="cancel" style="display: none;"><i class="icon icon-close"></i><em>Cancel</em></button>
					</div>

					<div class="saveCardBlock clearfix">

						<div class="addCard clearfix" id="newCardBlock">

						<span>Add New Card</span>
						<form action="card_save" method="post" id="card_save">
						<div class="detailsBar clearfix">

						<div class="field full"><input type="text" id="cardNumber" placeholder="Card Number" name="cardno" required>
								</div>

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
											<input type="text" id="cvv" required placeholder="CVV Number">

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

										<div class="field full"><input type="text" id="owner" name="name_oncard" placeholder="Name on Card" required>
										</div>

									</div>

						<div class="buttonBlock clearfix" id="pay-now">
								<input type="hidden" name="email" value="<?php echo $this->session->userdata('user_email'); ?>">
							<button type="submit" class="" name="savecard" id="confirm-purchase" >Save</button>
							<button class="cancelBtn">Cancel</button>

						</div>
					</form>
					</div>

						<div class="saveCardList clearfix">
					<?php if (isset($card_info) && !empty($card_info)) {
    foreach ($card_info as $cardinfo) {
        ?>
						<div class="cardBar clearfix">

						<div class="img"><img src="<?php echo base_url() ?>/assets/images/<?php if ($cardinfo->cardtype == 'Visa') {?>visa.png<?php }if ($cardinfo->cardtype == 'Master') {?>master.png<?php }if ($cardinfo->cardtype == 'American Express') {?>amex.png<?php }?>" alt="Card"></div>
							<span><?php echo $cardinfo->card1; ?> **** **** <?php echo $cardinfo->card4; ?></span>
							<em>Expires : <?php echo $cardinfo->exp_month; ?>/<?php echo $cardinfo->exp_year; ?></em>
							<a href="<?php echo site_url('card_remove') ?>?id=<?php echo $cardinfo->id; ?>" class="icon icon-delete-button"></a>

						</div>
						<?php }}?>


					</div>

					</div>

				</div>

				<div class="acodinOption bankDetailsOption"><span>Bank Details</span></div>

				<div class="accContent clearfix" id="bankDetailsContent">

					<div class="head clearfix">
						<h1>Bank Details</h1>
					</div>
					<div class="returnOContent bankDetailsBlock clearfix">

						<div class="nothingAddedBox clearfix">

							<h3>No bank details</h3>
							<p>There is no saved bank details found on Zumeyes</p>

						</div>

					</div>


				</div>

		<!--		<div class="acodinOption phonePeOption"><span>PhonePe Wallet</span></div>

				<div class="accContent clearfix" id="phonePeContent">

					<div class="head clearfix">
						<h1>PhonePe Wallet</h1>
					</div>

					<div class="phonePeBlock clearfix">

						<div class="addPhonePe clearfix">

							<div class="phonepeLogo clearfix"><img src="images/phonepeImg.png" alt="PhonePe"></div>

							<button>Add PhonePe Account</button>

						</div>

						<div class="phonePe clearfix">

							<div class="addedMsgBar clearfix">

								<div class="iconCircle"><i class="icon icon-tick"></i></div>
								<div class="addMsg clearfix">
									<span>PhonePe Added Successfully !</span>
									<p>Your PhonePe is now ready to use. You can use it for payment and refund on Zumeyes.</p>
								</div>

							</div>

							<div class="phonePeBalBar clearfix">

								<div class="phonePeBal clearfix">

									<div class="balText clearfix">
										<em>Your Balance</em>
										<span>Rs. 0</span>
									</div>
									<button>Shop Now</button>

								</div>
								<div class="withdrawText clearfix"><a href="#">Withdraw PhonePe balance <i class="icon icon-chevron-right"></i></a></div>


							</div>

						</div>

						<div class="phonePeWhy clearfix">

							<h3>PhonePe FAQs</h3>

							<div class="phonePeFaqBar clearfix">

								<span>What is PhonePe? What payment options does PhonePe provide?</span>
								<p>PhonePe is a new mobile payment solution. Our goal is to make digital payments so easy and safe that people never have to carry cash or cards again! You can use PhonePe as a wallet or directly make transfers through your linked bank account using UPI. It's safe, easy and instant, you have to use it to believe it!</p>

							</div>

							<div class="phonePeFaqBar clearfix">

								<span>What is UPI? What is the advantage of UPI transfers over wallets?</span>
								<p>'Unified Payment Interface' (UPI) is an instant payment system that allows you to transfer money directly from your bank account. The best part about UPI is that it allows you to make payments with a few clicks without the hassle of sharing bank a/c details or typing your card details, net banking password, OTP, etc. There are many advantages of UPI. The main advantage is that you don't have to block your money by loading it into a wallet. Simply link your bank account and then you can make seamless payments without having to worry about topping up a wallet, wallet spend limits or not earning interest on your money. Makes sense to use UPI for direct bank transfer rather than the plethora of wallets, doesn't it? </p>

							</div>
							<div class="phonePeFaqBar clearfix">

								<span>Can I transfer funds from PhonePe wallet? If yes, how much can be transferred?</span>
								<p>Yes, you can transfer funds from PhonePe wallet to your bank account using the Bank Account Number and Branch IFSC Code. You can transfer a maximum of ₹5,000 in a single transaction and a maximum of ₹25,000 in a month.</p>

							</div>
							<div class="phonePeFaqBar clearfix">

								<span>Can I use an International phone number to activate PhonePe wallet?</span>
								<p>No, currently PhonePe wallet is available only for domestic mobile numbers.</p>

							</div>
							<div class="phonePeFaqBar clearfix">

								<a href="#">View all FAQs</a>

							</div>

						</div>

					</div>


				</div>

				<div class="acodinOption giftCardsOption"><span>Gift Cards</span></div>

				<div class="accContent clearfix" id="giftCardsContent">

					<div class="head clearfix"><h1>Gift Cards</h1></div>

					<div class="giftCardsContent clearfix">

						<div class="nothingAddedBox clearfix">

							<h3>Received a Gift Card ?</h3>
							<p>Lucky you! You are just few steps away from enjoying ultimate experience. Let’s get started...</p>

						</div>

					</div>

				</div>-->

				<div class="acodinOption wishlistOption"><span>My Wishlist</span></div>

				<div class="accContent clearfix" id="wishlistContent">

					<div class="head clearfix"><h1>My Wishlist</h1>
                     <p class="classremove"></p>
					</div>

					<div class="wishlist clearfix">

						<div class="wishlistBar clearfix">
						<?php if (isset($wishlist) && !empty($wishlist)) {
    foreach ($wishlist as $key => $wishlist) {?>
							<div class="wishlistBox clearfix">

								<div class="img clearfix"><img src="<?php echo base_url('assets/upload/product/') ?><?php echo str_replace(" ", '_', $wishlist->pro_image); ?>" alt="Product Image"></div>
								<h3><?php echo $wishlist->name; ?></h3>
								<em>Rs <?php echo $wishlist->price; ?></em>
								<div class="reviewRatingBar clearfix">
									<div class="rating clearfix">
										<i class="icon icon-star-full active"></i>
										<i class="icon icon-star-full active"></i>
										<i class="icon icon-star-full active"></i>
										<i class="icon icon-star-full"></i>
										<i class="icon icon-star-full"></i>
									</div>
      								<a href="#" class="reviewLink">99 Review</a>
								</div>

								<div class="buttonBlock clearfix">


									<a href="<?php echo site_url('productDetails') ?>?id=<?php echo @$wishlist->id ?>"><button class="hvr-wobble-top" name="<?php echo @$wishlist->prescription_type; ?>" type="submit">
										<i class="icon icon-shopping-cart"></i> <span>Add to Cart</span>
									</button></a>

									<div class="whislistIcon"> <i class="icon icon-heart active wishid " wishid="<?php echo @$wishlist->id ?>">

									</i> </div>

								</div>

							</div>
							<?php }} else {?>
							<div class="wishlistBox clearfix">


								<h3>Wishlist Is Empty</h3>
								</div>
						<?php }?>
						</div>

					</div>

				</div>

				<div class="acodinOption notificationOption"><span>All Notifications</span></div>

				<div class="accContent clearfix" id="notificationContent">

					<div class="head clearfix"><h1>All Notifications</h1></div>

					<div class="notificationBlock clearfix">

						<div class="notificationBar clearfix">
							<a href="#">
							<div class="img"><img src="images/cart_proImg3.jpg" alt="Image"></div>
							<div class="content clearfix">

								<p>Your package containing Men Fletcher Sunglasses that you ordered has been delivered. Thanks for shopping!</p>
								<em>03 Jul, 2018</em>

							</div>
							</a>
						</div>

						<div class="notificationBar clearfix">
							<a href="#">
							<div class="img"><img src="images/cart_proImg2.jpg" alt="Image"></div>
							<div class="content clearfix">

								<p>Your package containing Men Fletcher Sunglasses that you ordered has been delivered. Thanks for shopping!</p>
								<em>03 Jul, 2018</em>

							</div>
							</a>
						</div>

						<div class="notificationBar clearfix">
							<a href="#">
							<div class="img"><img src="images/cart_proImg1.jpg" alt="Image"></div>
							<div class="content clearfix">

								<p>Your package containing Men Fletcher Sunglasses that you ordered has been delivered. Thanks for shopping!</p>
								<em>03 Jul, 2018</em>

							</div>
							</a>
						</div>





					</div>

				</div>

		<!--		<div class="acodinOption rewardsOption"><span>My Rewards</span></div>

				<div class="accContent clearfix" id="rewardsContent">

					<div class="head clearfix"><h1>My Rewards</h1></div>

					<div class="returnOContent clearfix">

						<div class="nothingAddedBox clearfix">

							<h3>No rewards yet !</h3>
							<p>You can earn rewards from zumeyes to see them here.</p>

						</div>

					</div>

				</div>-->


			</div>

		</div>

	</section>



<?php include 'footer.php';?>
<?php if ($this->session->flashdata('success_info')) {?>
<script type="text/javascript">
	alert('<?php echo $this->session->flashdata('success_info'); ?>'
						);
</script>
	<?php }?>
	<?php if ($this->session->flashdata('success_address')) {?>
<script type="text/javascript">
	alert('<?php echo $this->session->flashdata('success_address'); ?>'
						);
</script>
	<?php }?>
	<?php if ($this->session->flashdata('success_pass')) {?>
<script type="text/javascript">
	alert('<?php echo $this->session->flashdata('success_pass'); ?>'
						);
</script>
	<?php }?>
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

	<script type="text/javascript">

		$(document).ready(function(){
         var error_name=false;
		     var error_naddress=false;
		     var error_nnum=false;
		     var error_npin=false;
		      var error_nlocality=false;
		       var error_ncity=false;
		        var error_nstate=false;
		         var error_nlandm=false;
                  var error_nalter=false;


		     $('#nname_error_message').hide();
		     $('#naddress_error_message').hide();
         	$('#cphone_error_message').hide();
         	$('#npin_error_message').hide();
         	$('#ncity_error_message').hide();
         	$('#nstate_error_message').hide();
         	$('#nlandm_error_message').hide();
         	$('#nalter_error_message').hide();
         	$('#nlocality_error_message').hide();

         	$("#cfname").focusin(function(){
          	$('#nname_error_message').hide();
          });

         	$("#npin").focusin(function(){
          	$('#npin_error_message').hide();
          });

         	$("#nnum").focusin(function(){
          	$('#cphone_error_message').hide();
          });
         	$("#nstate").focusin(function(){
          	$('#nstate_error_message').hide();
          });
         	$("#ncity").focusin(function(){
          	$('#ncity_error_message').hide();
          });

         	$("#naddr").focusin(function(){
          	$('#naddress_error_message').hide();
          });
         	$("#naddr").focusout(function(){
          	check_address();
          });
         	$("#npin").focusout(function(){
          	check_npin();
          });
         	$("#nfname").focusout(function(){
          	check_fname();
          });
         	$("#nstate").focusout(function(){
          	check_state();
          });
         	$("#ncity").focusout(function(){
          	check_city();
          });


         	$("#nnum").focusout(function(){
          	check_num();
          });
         	$("#naltnum").focusout(function(){
          	check_altnum();
          });

		   function check_fname(){
          	var pattern= /^[A-Za-z\s]+$/;
          	var fname =$("#nfname").val();
          	if(pattern.test(fname) && fname !== ''){
          		$("#nname_error_message").hide();
          		document.getElementById('addaddress').disabled = '';

          	}
          	else{
          		$("#nname_error_message").html("First Name Should Be Letter");
          		$("#nname_error_message").show();
          		$("#nname_error_message").css("color","red");
          		error_fname = true;
          		document.getElementById('addaddress').disabled = 'disabled';
          	}
          }

           function check_city(){
          	var pattern= /^[A-Za-z\s]+$/;
          	var ncity =$("#ncity").val();
          	if(pattern.test(ncity) && ncity !== ''){
          		$("#ncity").hide();
          		document.getElementById('addaddress').disabled = '';

          	}
          	else{
          		$("#ncity_error_message").html("City Name Should Be Letter");
          		$("#ncity_error_message").show();
          		$("#ncity_error_message").css("color","red");
          		error_ncity = true;
          		document.getElementById('addaddress').disabled = 'disabled';
          	}
          }

          function check_state(){
          	var pattern= /^[A-Za-z\s]+$/;
          	var nstate =$("#nstate").val();
          	if(pattern.test(nstate) && nstate !== ''){
          		$("#nstate").hide();
          		document.getElementById('addaddress').disabled = '';

          	}
          	else{
          		$("#nstate_error_message").html("State Name Should Be Letter");
          		$("#nstate_error_message").show();
          		$("#nstate_error_message").css("color","red");
          		error_nstate = true;
          		document.getElementById('addaddress').disabled = 'disabled';
          	}
          }
          function check_num1(){
          	var pattern= /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
          	var phone =$("#nnum").val();
          	if(pattern.test(phone) && phone !== ''){
          		$("#cphone_error_message").hide();
          		document.getElementById('addaddress').disabled = '';

          	}
          	else{
          		$("#cphone_error_message").html("Please enter valid phone number");
          		$("#cphone_error_message").show();
          		$("#cphone_error_message").css("color","red");
          		error_num = true;
          		document.getElementById('addaddress').disabled = 'disabled';
          	}
          }
          function check_altnum(){
          	var pattern= /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
          	var naltnum =$("#naltnum").val();
          	if(pattern.test(naltnum) && naltnum !== ''){
          		$("#nalter_error_message").hide();
          		document.getElementById('addaddress').disabled = '';

          	}
          	else{
          		$("#nalter_error_message").html("Please enter valid phone number");
          		$("#nalter_error_message").show();
          		$("#nalter_error_message").css("color","red");
          		error_num = true;
          		document.getElementById('addaddress').disabled = 'disabled';
          	}
          }


function check_npin(){

          	var pattern= /^\d{6}$/;
          	var phone =$("#npin").val();
          	if(pattern.test(phone) && phone !== ''){
          		$("#npin_error_message").hide();
          		document.getElementById('addaddress').disabled = '';

          	}
          	else{
          		$("#npin_error_message").html("Please enter valid pin code");
          		$("#npin_error_message").show();
          		$("#npin_error_message").css("color","red");
          		error_num = true;
          		document.getElementById('addaddress').disabled = 'disabled';
          	}
          }

          });
      </script>

	<script type="text/javascript">

		$(document).ready(function(){
         var error_fname=false;
		     var error_gender=false;
		     var error_num=false;
		     var error_dob=false;

		     $('#fname_error_message').hide();
		     $('#gender_error_message').hide();
         	$('#phone_error_message').hide();
         	$('#dob_error_message').hide();
         	$("#fname").focusout(function(){
          	check_fname();
          });
         	$("#fname").focusin(function(){
          	$('#fname_error_message').hide();
          });
         	$("#num").focusout(function(){
          	check_num();
          });
         	$("#num").focusin(function(){
          	$('#phone_error_message').hide();
          });
		   function check_fname(){
          	var pattern= /^[A-Za-z]+$/;
          	var fname =$("#fname").val();
          	if(pattern.test(fname) && fname !== ''){
          		$("#name_error_message").hide();
          		document.getElementById('editpinfo').disabled = '';

          	}
          	else{
          		$("#fname_error_message").html("First Name Should Be Letter");
          		$("#fname_error_message").show();
          		$("#fname_error_message").css("color","red");
          		error_fname = true;
          		document.getElementById('editpinfo').disabled = 'disabled';
          	}
          }
          function check_num(){
          	var pattern= /^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/;
          	var phone =$("#num").val();
          	if(pattern.test(phone) && phone !== ''){
          		$("#phone_error_message").hide();
          		document.getElementById('editpinfo').disabled = '';

          	}
          	else{
          		$("#phone_error_message").html("Please enter valid phone number");
          		$("#phone_error_message").show();
          		$("#phone_error_message").css("color","red");
          		error_num = true;
          		document.getElementById('editpinfoeditpinfo').disabled = 'disabled';
          	}
          }

          });
      </script>

<script type="text/javascript">

		$(document).ready(function(){
         var error_cpwds=false;
		     var error_ccpwds=false;
		     var error_oldpwd=false;

		     $('#c_pwd_error_message').hide();
		     $('#cpwds_error_message').hide();
         	$('#ccpwds_error_message').hide();
		    $("#cpwd").focusin(function(){
          	$('#disapper').hide();
          	$('.statusMsg').hide();
          });
		    $("#oldpwd").focusout(function(){
          	auth_password();
          });
		     $("#oldpwd").focusin(function(){
          	$('#c_pwd_error_message').hide();
          });
            $("#cpwds").focusout(function(){
          	check_password();
          });
           $("#ccpwds").keyup(function(){
          	match_password();
          });
           $("#cpwds").focusin(function(){
          	$('#cpwds_error_message').hide();
          });
$("#reloadfrompass").focusin(function(){
          	window.location.reload();
          });
            function check_password(){
          	var pattern= /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
          	var cpass =$("#cpwds").val();
          	if(pattern.test(cpass) && cpass !== ''){
          		$("#cpwds_error_message").hide();
          		document.getElementById('submitbutton').disabled = '';

          	}
          	else{
          		$("#cpwds_error_message").html("Password combination Should have 1 Cap,1 small,1 Numeric,1 special charecter and minimum length 8.");
          		$("#cpwds_error_message").show();
          		$("#cpwds_error_message").css("color","red");
          		error_cpwds = true;
          		document.getElementById('submitbutton').disabled = 'disabled';
          	}
          }
			 function match_password(){

          	var cpass =$("#cpwds").val();
          	var ccpass =$("#ccpwds").val();
          	if(cpass == ccpass){
          		$("#ccpwds_error_message").hide();
          		document.getElementById('submitbutton').disabled = '';

          	}
          	else{
          		$("#ccpwds_error_message").html("Password didn't match.");
          		$("#ccpwds_error_message").show();
          		$("#ccpwds_error_message").css("color","red");
          		error_ccpwds = true;
          		document.getElementById('submitbutton').disabled = 'disabled';
          	}
          }
 function auth_password(){
          var oldpwd =$("#oldpwd").val();
              $.ajax({
                type:"POST",
                url:"<?php echo base_url('authajax_password'); ?>",
            data:{cpass:oldpwd},
                success:function(data){
                  $("#c_pwd_error_message").html(data);
          		$("#c_pwd_error_message").show();
          		$("#c_pwd_error_message").css("color","red");
          		error_oldpwd = true;
          		if(data =='Your Current Password Is Wrong.')  {
                     document.getElementById('submitbutton').disabled = 'disabled';
          	}
          	else{
          		document.getElementById('submitbutton').disabled = '';

                }
          	}
            });



 }


		});
	</script>
	<script src="<?php echo base_url('assets/js/jquery.payform.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/pay_script.js'); ?>"></script>


</body>

</html>