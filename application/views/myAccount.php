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
	<script type="text/javascript">
		$(document).ready(function(){
			$('.wishid').click(function(){
           var wishid=$(this).attr('wishid');
          
           $.ajax({
				type:'POST',
				data:{wishid:wishid},
				url:"<?php echo base_url('removewishlist')?>",		
				success:function(data){
					alert('Successfully Remove From The WishList');
				}

			});
			});
			});
            
			
		</script>
		<script src="<?php echo base_url('assets/js/script.js');?>"></script>

</head>

<body>
<?php include('header.php');?>

	<div class="col-sm-12 pageNavigator clearfix">
		
		<a href="home.html">Home  /</a>  <a href="home.html">My Account  /</a>  <span>Personal Information</span>
	
	</div>
	
	<section class="col-sm-12 myAccSection clearfix">
	
		<div class="leftSide clearfix col-sm-3">
		
			<div class="panel clearfix">
			
				<div class="panelTop clearfix">
				
					<i class="icon icon-user-circle"></i>
					<div class="userInfo clearfix">
					
						<span><?php echo $this->session->userdata('user_name'); ?> </span>
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
					<span>Payment</span>
					<li id="phonePe"><a href="#">PhonePe Wallet</a></li>
					<li id="giftCards"><a href="#">Gift Cards</a></li>
					<span>Other Stuff</span>
					<li id="wishlist"><a href="#">My Wishlist</a></li>
					<li id="notification"><a href="#">All Notifications</a></li>
					<li id="rewards"><a href="#">My Rewards</a></li>
				
				</ul>
			
			</div>
		
		</div>
		
		<div class="rightSide clearfix col-sm-9">
		
			<div class="accContentSection clearfix">
				
				<div class="acodinOption myOrderOption"><span>My Order</span></div>
			
				<div class="accContent clearfix" id="myOrderContent" style="display: none;">
				
					<div class="head clearfix"><h1>My Order List</h1></div>
					
					<div class="myOrderContent clearfix">
					
						<div class="orderBar clearfix">
						
							<div class="barTop clearfix">
							
								<div class="boxT clearfix">
								
									<span>Order ID</span>
									<em>402-1028188-6637912</em>
								
								</div>
								<div class="boxT clearfix">
								
									<span>Order Placed</span>
									<em>Tue, Mar 14th '17</em>
								
								</div>
								<div class="buttonBlock clearfix">
								
									<a href="orderDetails.html">
									<button>Order Details</button>
                                    </a>
								  	<button>Invoice</button>
									<button>Track</button>
								
								</div>
							
							</div>
																		
							<div class="itemBar clearfix">

								<div class="itemImg"><img src="images/cart_proImg1.jpg" alt="Item One"></div>

								<div class="itemInfo clearfix">

									<h2>Square-Eye Glasses </h2>
									<div class="info clearfix">
										<span>Single Vision</span>
										<span>Quantity <strong>01</strong></span>
										<em>$ 23.99</em>
									</div>

								</div>

							</div>
							
							<div class="itemBar clearfix">

								<div class="itemImg"><img src="images/cart_proImg2.jpg" alt="Item One"></div>

								<div class="itemInfo clearfix">

									<h2>Square-Eye Glasses </h2>
									<div class="info clearfix">
										<span>Single Vision</span>
										<span>Quantity <strong>01</strong></span>
										<em>$ 23.99</em>
									</div>

								</div>

							</div>
							
							<div class="barFoot clearfix">
							
								<span class="deliverText">Delivered On: <em>Friday, Mar 17th '17</em></span>
								<span class="deliverAmtText"><em>Total Amount &nbsp;</em> $ 47.98</span>
							
							</div>
						
						</div>
						
						<div class="orderBar clearfix">
						
							<div class="barTop clearfix">
							
								<div class="boxT clearfix">
								
									<span>Order ID</span>
									<em>402-1028188-6637912</em>
								
								</div>
								<div class="boxT clearfix">
								
									<span>Order Placed</span>
									<em>Tue, Mar 14th '17</em>
								
								</div>
								<div class="buttonBlock clearfix">
								
									<a href="orderDetails.html">
									<button>Order Details</button>
                                    </a>
									<button>Invoice</button>
									<button>Track</button>
								
								</div>
							
							</div>
																		
							<div class="itemBar clearfix">

								<div class="itemImg"><img src="images/cart_proImg1.jpg" alt="Item One"></div>

								<div class="itemInfo clearfix">

									<h2>Square-Eye Glasses </h2>
									<div class="info clearfix">
										<span>Single Vision</span>
										<span>Quantity <strong>01</strong></span>
										<em>$ 23.99</em>
									</div>

								</div>

							</div>
							
							<div class="itemBar clearfix">

								<div class="itemImg"><img src="images/cart_proImg2.jpg" alt="Item One"></div>

								<div class="itemInfo clearfix">

									<h2>Square-Eye Glasses </h2>
									<div class="info clearfix">
										<span>Single Vision</span>
										<span>Quantity <strong>01</strong></span>
										<em>$ 23.99</em>
									</div>

								</div>

							</div>
							
							<div class="barFoot clearfix">
							
								<span class="deliverText">Delivered On: <em>Friday, Mar 17th '17</em></span>
								<span class="deliverAmtText"><em>Total Amount &nbsp;</em> $ 47.98</span>
							
							</div>
						
						</div>
					
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
							<span><?php echo $this->session->userdata('phone');?></span>
						
						</div>
						<div class="infoBar clearfix">
					
							<label>Date of Birth</label>
							<span><?php echo $this->session->userdata('dob');?></span>
						
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
							<div class="field clearfix"><input type="text" required name="name" id="cfname" placeholder="<?php echo $this->session->userdata('user_name'); ?> "></div>
						<?php echo form_error('name');?>
						</div>
						<div class="infoBar clearfix">
					
							<label>Gender</label>
							<div class="radioBlock clearfix">
								<div class="option">
									<input id="male" class="radio-custom" name="radio-group" type="radio" checked>
            						<span for="male" class="radio-custom-label"><em>Male</em></span>
								</div>
								<div class="option">
									<input id="female" class="radio-custom" name="radio-group" type="radio">
            						<span for="female" class="radio-custom-label"><em>Female</em></span>
								</div>						
							</div>
						<?php echo form_error('radio-group');?>
						</div>
						<div class="infoBar clearfix">
					
							<label>Mobile Number</label>
							<div class="field clearfix"><input type="text" required name="phone" id="cnum" placeholder="+91 2874001122"></div>
						<?php echo form_error('phone');?>
						</div>
						<div class="infoBar clearfix">
					
							<label>Date of Birth</label>
							<div class="field clearfix"><input type="text" required name="dob" id="cdob" placeholder="31/02/1983"></div>
						<?php echo form_error('dob');?>
						</div>
						
						<div class="buttonBlock clearfix">
						
							<div class="button"><input type="submit" name="update_personal_info" name="save" value="Save"></div>
							<button class="cancel">Cancel</button>
						
						</div>
					</form>
					</div>
					<div class="changePwd clearfix">
						<form method="post" action="myAccount">
					
						<h3>Change Password</h3>
					
						<div class="infoBar clearfix">
					
							<label>Type Current Password</label>
							<div class="field clearfix"><input type="text" required name="cpass" id="oldpwd" placeholder="">
								<?php echo form_error('cpass');?></div>
						
						</div>
						<div class="infoBar clearfix">
					
							<label>Type New Password</label>
							<div class="field clearfix" ><input type="text" required name="pass" id="newpwd" placeholder="">
								<?php echo form_error('newpass');?></div>
						
						</div>
						<div class="infoBar clearfix">
					
							<label>Retype New Password</label>
							<div class="field clearfix"><input type="text" required name="rnewpass" id="rtypnewpwd" placeholder="">
								<?php echo form_error('rnewpass');?></div>
						
						</div>
						
						<div class="buttonBlock clearfix ">
						
							<button type="submit" name="changepass" value="changepass">Change</button>
							<button class="cancel">Cancel</button>
						
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
						<form method="post" action="myAccount">
							
								<div class="addrsDetails clearfix">
						
							
								<div class="detailsBar clearfix">
								
									<div class="field"><input type="text" required name="name" id="cfname" placeholder="Full Name"></div>
									<div class="field right"><input type="text" required name="phone" id="cnum" placeholder="Phone Number"></div>
								<?php echo form_error('name');?>
								</div>
								<div class="detailsBar clearfix">
								
									<div class="field full"><textarea required name="address" id="caddrs" placeholder="Address"></textarea></div>
								<?php echo form_error('address');?>
								</div>
								
								<div class="detailsBar clearfix">
								
									<div class="field"><input type="text" required name="cpin" id="cpin" placeholder="Pincode"></div>
									<?php echo form_error('cpin');?>
									<div class="field right"><input type="text" id="clocality" name="locality" required placeholder="Locality"></div>
								<?php echo form_error('locality');?>
								</div>
								
								<div class="detailsBar clearfix">
								
									<div class="field"><input type="text" required name="city" id="ccity" placeholder="City"></div>
									<?php echo form_error('city');?>
									<div class="field right"><input name="state" required type="text" id="cstate" placeholder="State"></div>
								<?php echo form_error('state');?>
								</div>
								
								<div class="detailsBar clearfix">
								
									<div class="field"><input type="text" required name="landmark" id="clandm" placeholder="Landmark"></div>
									<?php echo form_error('landmark');?>
									<div class="field right"><input name="alternatephone" required type="text" id="caltnum" placeholder="Alternate Number"></div>
								<?php echo form_error('alternatephone');?>
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
														<?php echo form_error('radio-group');?>					
									</div>
								
								</div>
								
								<div class="buttonBlock clearfix">
								
									<div class="button"><input name="addnewaddress" value="Save" type="submit"></div>
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
								
									<div class="field"><input type="text" name="name" id="cfname" placeholder="<?php echo $this->session->userdata('user_name'); ?> "></div>
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
										<input id="homeD" class="radio-custom" name="radio-group" type="radio" checked>
            							<span for="homeD" class="radio-custom-label"><em>Home (All day delivery)</em></span>
										</div>
										<div class="radioBlock">
										<input id="officeD" class="radio-custom" name="radio-group" type="radio">
            							<span for="officeD" class="radio-custom-label"><em>Office (Delivery Between 10am - 7pm)</em></span>
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

							<?php if(isset($useraddress)){
							foreach($useraddress as $user_address){?>
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
                                        


<form method="post" action="delete_user_address">
		     <input type="hidden" name="addressid" value="<?php echo $user_address->id?>">	
											<button class="deleteClass"><i class="icon icon-delete-button"></i><em>Remove</em></button></form>
										
										</div>
										
									</div>
									
								</div>
								
								<div class="addrsBoxContent clearfix">
								
								<p><?php echo	$user_address->address;?>,</p>
								<p><?php echo	$user_address->city;?>,</p>
								<p><?php echo	$user_address->pincode;?>,</p>
								<p><?php echo	$user_address->state;?>,</p>
								<p><?php echo	$user_address->phone;?></p>
								
								
								
								</div>
							
							</div>
							<?php }} ?>
							
						
						</div>
					
					</div>
					
				</div>
				
				<div class="acodinOption saveCardsOption"><span>Save Cards</span></div>
				
				<div class="accContent clearfix" id="saveCardsContent">
				
					<div class="head clearfix">
						<h1>Manage Address</h1>
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
						
						<div class="detailsBar clearfix">
									
							<div class="field full"><input type="text" id="ccardnum" placeholder="Card Number"></div>
									
						</div>
									
						<div class="detailsBar clearfix">
									
						<div class="field">
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
										
										<div class="field right">
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
									
									</div>
									
						<div class="detailsBar clearfix">
									
										<div class="field">
											<input type="text" id="cccvv" placeholder="CVV Number">											
										</div>
										<div class="field right">
											<input type="text" id="cctype" placeholder="Card Type">
											<i class="icon icon-angle-down"></i>
										  	<ul class="list">
												<li><a href="#">Master</a></li>
												<li><a href="#">Visa</a></li>
												<li><a href="#">American Express</a></li>
										  	</ul>
										</div>
									
									</div>
									
						<div class="detailsBar clearfix">
									
										<div class="field full"><input type="text" id="ccname" placeholder="Name on Card"></div>
									
									</div>
						
						<div class="buttonBlock clearfix">
								
							<button class="saveBtn">Save</button>
							<button class="cancelBtn">Cancel</button>
								
						</div>
					
					</div>				
					
						<div class="saveCardList clearfix">
					
						<div class="cardBar clearfix">
						
							<div class="img"><img src="images/visa.png" alt="Visa Card"></div>
							<span>4854 98** **** 1470</span>
							<em>Expires : 08/21</em>
							<a href="#" class="icon icon-delete-button"></a>
						
						</div>
						
						<div class="cardBar clearfix">
						
							<div class="img"><img src="images/visa.png" alt="Visa Card"></div>
							<span>5884 20** **** 2304</span>
							<em>Expires : 06/20</em>
							<a href="#" class="icon icon-delete-button"></a>
						
						</div>
					
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
				
				<div class="acodinOption phonePeOption"><span>PhonePe Wallet</span></div>
				
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
					
				</div>
				
				<div class="acodinOption wishlistOption"><span>My Wishlist</span></div>
				
				<div class="accContent clearfix" id="wishlistContent">
				
					<div class="head clearfix"><h1>My Wishlist</h1>
                     <p class="classremove"></p>
					</div>
					
					<div class="wishlist clearfix">
					
						<div class="wishlistBar clearfix">
						<?php if(@$wishlist) { 
							foreach($wishlist as $key =>$wishlist) { ?>
							<div class="wishlistBox clearfix">
							
								<div class="img clearfix"><img src="<?php echo base_url('assets/upload/product/')?><?php echo str_replace(" ", '_',$wishlist->pro_image);?>" alt="Product Image"></div>
								<h3><?php echo $wishlist->name;?></h3>
								<em>Rs <?php echo $wishlist->price;?></em>
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
								<form method="post" action="wisht_to_shoppingCart">
								<div class="buttonBlock clearfix">
									<input type="hidden" name="wish_id" value="<?php echo @$wishlist->id?>">
									
									<button class="hvr-wobble-top" name="<?php echo @$wishlist->prescription_type;?>" type="submit"> 
										<i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> 
									</button>
									
									<div class="whislistIcon"> <i class="icon icon-heart active wishid " wishid="<?php echo @$wishlist->id?>">
										
									</i> </div>
								</div>
								</form>
							</div>
							<?php } } else{?>
							<div class="wishlistBox clearfix">
							
								
								<h3>Wishlist Is Empty</h3>
								</div>
						<?php } ?>
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
								
				<div class="acodinOption rewardsOption"><span>My Rewards</span></div>
				
				<div class="accContent clearfix" id="rewardsContent">
				
					<div class="head clearfix"><h1>My Rewards</h1></div>
					
					<div class="returnOContent clearfix">
						
						<div class="nothingAddedBox clearfix">
						
							<h3>No rewards yet !</h3>
							<p>You can earn rewards from zumeyes to see them here.</p>
						
						</div>
					
					</div>
					
				</div>
							
			
			</div>
		
		</div>
	
	</section>	

	

<?php include('footer.php');?>
<?php if($this->session->flashdata('success_info')){?>
<script type="text/javascript">
	alert('<?php echo $this->session->flashdata('success_info');?>'
						);
</script>
	<?php } ?>
	<?php if($this->session->flashdata('success_address')){?>
<script type="text/javascript">
	alert('<?php echo $this->session->flashdata('success_address');?>'
						);
</script>
	<?php } ?>
	<?php if($this->session->flashdata('success_pass')){?>
<script type="text/javascript">
	alert('<?php echo $this->session->flashdata('success_pass');?>'
						);
</script>
	<?php } ?>
</body>

</html>