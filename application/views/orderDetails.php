<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<?php include 'head.php';?></head>

<body>
<?php include 'header.php';?>
	<div class="col-sm-12 pageNavigator clearfix">
		<?php if (!empty($user_order)) {
    foreach ($user_order as $userorder) {?>

		<a href="<?php echo base_url('index'); ?>">Home  /</a>  <a href="<?php echo base_url('myAccount'); ?>">My Account  /</a> <a href="<?php echo base_url('myAccount'); ?>">My Order  /</a>  <span><?php echo $userorder->order_id; ?></span>

	</div>

	<section class="col-sm-12 orderDetailsBlock clearfix">

		<div class="orderBar clearfix">
        	<div class="top clearfix">
				<span>Order ID<em><?php echo $userorder->order_id; ?></em></span>
				<span>Order Placed<em><?php echo $userorder->order_date; ?></em></span>
				<button>Invoice</button>
          	</div>

			<div class="orderInfo clearfix">

				<div class="col-sm-6 deliverAddrs clearfix">

					<h3>Shipping Address</h3>
					<span><?php echo $userorder->username; ?></span>
					<p><?php echo $userorder->address; ?></p>
					<p><?php echo $userorder->city; ?>:<?php echo $userorder->pincode; ?></p>
					<p><?php echo $userorder->state; ?></p>
					<p>Mobile: <?php echo $userorder->phone; ?></p>
					<p>Alternate Phone: <?php echo $userorder->altphone; ?></p>

				</div>
				<?php }}?>
				<div class="col-sm-6 orderSummary  clearfix">
				<?php if (!empty($order_cart_data)) {$qty = 0;
    $taxx = 0;
    foreach ($order_cart_data as $order_cartdata) {
        $qty = $order_cartdata->qty + $qty;

        if (empty($order_cartdata->lense_price)) {
            if ($order_cartdata->tax != 0) {
                $taxx = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->tax / 100;}
            $subtotal = $order_cartdata->price * $order_cartdata->qty;
            $total = $order_cartdata->price * $order_cartdata->qty + $taxx;

        } else {
            if ($order_cartdata->tax != 0) {
                $taxx = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->lense_price * $order_cartdata->tax / 100;
            }
            $subtotal = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->lense_price;
            $total = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->lense_price + $taxx;
        }
    }}?>
					<h3>Order Summary</h3>
					<div class="amount clearfix"><span>Item Count</span><em><?php echo $qty; ?></em></div>
					<div class="amount clearfix"><span>Sub Total</span><em>Rs <?php echo $subtotal; ?></em></div>
					<div class="amount clearfix"><span>Tax</span><em>Rs <?php echo $taxx; ?></em></div>
					<div class="amount clearfix"><span>Shipping</span><em>Rs 0.00</em></div>
					<div class="amount clearfix"><span>Coupon</span><em>Rs 0.00</em></div>
					<div class="amount clearfix"><span class="total">Total Amount</span><em class="total">Rs <?php echo $total ?></em></div>

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

				<h3><?php echo $qty; ?> Item Shipments</h3>

			</div>

			<div class="itemsList clearfix">
			<?php if (!empty($order_cart_data)) {
    foreach ($order_cart_data as $order_cartdata) {?>

				<div class="col-sm-6 col-xs-12 clearfix item">

					<div class="itemBar clearfix">
						<div class="itemImg"><img src="<?php echo base_url() ?>assets/upload/product/<?php echo str_replace(" ", '_', $order_cartdata->pro_image) ?>" alt="Item One"></div>
						<div class="itemInfo clearfix">
							<h4><?php echo $order_cartdata->name ?> </h4>
							<div class="info clearfix">
								<div class="bar clearfix">
								<span><?php echo $order_cartdata->prescription_type ?></span>
								<span>Quantity <strong><?php echo $order_cartdata->qty ?></strong></span>
								</div>
								<em>Rs
									<?php if (!empty($order_cart_data)) {$qty = 0;
        $taxx = 0;
        foreach ($order_cart_data as $order_cartdata) {
            $qty = $order_cartdata->qty + $qty;

            if (empty($order_cartdata->lense_price)) {
                if ($order_cartdata->tax != 0) {
                    $taxx = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->tax / 100;}
                echo $order_cartdata->price * $order_cartdata->qty + $taxx;

            } else {
                if ($order_cartdata->tax != 0) {
                    $taxx = $order_cartdata->price * $order_cartdata->qty * $order_cartdata->lense_price * $order_cartdata->tax / 100;
                }
                echo $order_cartdata->price * $order_cartdata->qty * $order_cartdata->lense_price + $taxx;
            }
        }}?>
								</em>
							</div>
						</div>
					</div>

					<button>Rate & Review Product</button>

				</div>
			<?php }}?>


			</div>



		</div>

	</section>


<?php include 'footer.php';?>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {

     console.log("Success");

});
</script>
</body>

</html>