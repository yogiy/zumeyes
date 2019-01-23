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
	<div class="col-sm-12 pageNavigator clearfix">
		
		<a href="home.html">Home  /</a>  <a href="myAccount.html">My Account  /</a> <a href="myAccount.html">My Order  /</a>  <span>402-1028188-6637912</span>
	
	</div>
	
	<section class="col-sm-12 orderDetailsBlock clearfix">
	
		<div class="orderBar clearfix">
        	<div class="top clearfix">
				<span>Order ID<em>402-1028188-6637912</em></span> 
				<span>Order Placed<em>Tue, Mar 14th '17</em></span> 
				<button>Invoice</button>
          	</div>
			
			<div class="orderInfo clearfix">
			
				<div class="col-sm-6 deliverAddrs clearfix">
				
					<h3>Shipping Address</h3>
					<span>Narinder Singh</span>
					<p>D Block 201, Ground Floor, Gali No.1</p> 
					<p>West Dawarka,</p> 
					<p>New Delhi</p>
					<p>Delhi110048</p>
					<p>Mobile: 1879523687</p>
				
				</div>
				<div class="col-sm-6 orderSummary  clearfix">
				
					<h3>Order Summary</h3>
					<div class="amount clearfix"><span>Item Count</span><em>02</em></div>
					<div class="amount clearfix"><span>Sub Total</span><em>$35.93</em></div>
					<div class="amount clearfix"><span>Tax</span><em>$10.00</em></div>
					<div class="amount clearfix"><span>Shipping</span><em>$0.00</em></div>
					<div class="amount clearfix"><span>Coupon</span><em>$0.00</em></div>
					<div class="amount clearfix"><span class="total">Total Amount</span><em class="total">$45.93</em></div>
				
				</div>
			
			
			</div>
			
      	</div>
		
		<div class="trackingInfo clearfix">
			
			<div class="bar clearfix">
			
				<h3>Tracking Details</h3>
				<i class="icon icon-angle-down"></i>
			
			</div>
			
			
			
			<div class="tracking clearfix">
			
				<div class="row">
					<div class="col-xs-3 left">
						<span class="trackDate">Tue, 7 Mar 2018</span>
						<span class="trackTime">09:39:02 am</span>					
					</div>
					<div class="col-xs-9 right">
						<div class="productTrack productTrackActive">
							<span class="trackCircle trackCircleActive"></span>
							<div class="trackDetails">
								<div class="trackingMessage">
									<div class="trackStatus">Your Order has been placed.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-3 left">
						<span class="trackDate">Tue, 7 Mar 2018</span>
						<span class="trackTime">10:00:02 pm</span>					
					</div>
					<div class="col-xs-9 right">
						<div class="productTrack productTrackActive">
							<span class="trackCircle trackCircleActive"></span>
							<div class="trackDetails">
								<div class="trackingMessage">
									<div class="trackStatus">Your item has been picked up by courier partner.</div>
								</div>
								<!--<p>Tracking ID <span class="trackingId">SF11175459JB</span></p>-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-3 left">
						<span class="trackDate">Wed, 8 Mar 2018</span>
						<span class="trackTime">11:20:00 am</span>					
					</div>
					<div class="col-xs-9 right">
						<div class="productTrack productTrackActive">
							<span class="trackCircle trackCircleActive"></span>
							<div class="trackDetails">
								<div class="trackingMessage">
									<div class="trackStatus">Your item has been shipped. Ekart Logistics</div>
								</div>
								<p>Tracking ID <span class="trackingId">SF11175459JB</span></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-3 left">
						<span class="trackDate"><!--Wed, 9 Mar 2018--></span>
						<span class="trackTime"><!--08:20:10 pm--></span>					
					</div>
					<div class="col-xs-9 right">
						<div class="productTrack">
							<span class="trackCircle"></span>
							<div class="trackDetails">
								<div class="trackingMessage">
									<div class="trackStatus">&nbsp;<!--Your item has been delivered--></div>
								</div>
								<p><!--Tracking ID <span class="trackingId">SF11175459JB</span>--></p>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		
		</div>
		
		<div class="orderItems clearfix">
		
			<div class="bar clearfix">
			
				<h3>2 Item Shipments</h3>
			
			</div>
			
			<div class="itemsList clearfix">
			
				<div class="col-sm-6 col-xs-12 clearfix item">
				
					<div class="itemBar clearfix">
						<div class="itemImg"><img src="images/cart_proImg1.jpg" alt="Item One"></div>
						<div class="itemInfo clearfix">
							<h4>Square-Eye Glasses </h4>
							<div class="info clearfix">
								<div class="bar clearfix">
								<span>Single Vision</span> 
								<span>Quantity <strong>01</strong></span> 
								</div>
								<em>$ 23.99</em> 
							</div>
						</div>
					</div>

					<button>Rate & Review Product</button>

				</div>
				
				<div class="col-sm-6 col-xs-12 clearfix item">
				
					<div class="itemBar clearfix">
						<div class="itemImg"><img src="images/cart_proImg1.jpg" alt="Item One"></div>
						<div class="itemInfo clearfix">
							<h4>Square-Eye Glasses </h4>
							<div class="info clearfix">
								<div class="bar clearfix">
								<span>Single Vision</span> 
								<span>Quantity <strong>01</strong></span> 
								</div>
								<em>$ 23.99</em> 
							</div>
						</div>
					</div>

					<button>Rate & Review Product</button>

				</div>
			
			</div>
			
			
		
		</div>
	
	</section>

	
<?php include('footer.php');?>
<script src="<?php echo base_url('assets/js/script.js');?>"></script>

</body>

</html>