<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zumeyes</title>
<link href="<?php echo base_url();?>/assets/styles/slick.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/assets/styles/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/font.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
</head>

<body> 

<?php include('header.php');?>
	
<section class="col-sm-12 clearfix proDetailsSection lensDetailsSection">
	
  <div class="center slider">
    <div> <img src="<?php echo base_url('assets/images/lens_Img1.jpg')?>" alt="Image1"> </div>
    <div> <img src="<?php echo base_url('assets/images/lens_Img2.jpg')?>" alt="Image2"> </div>
    <div> <img src="<?php echo base_url('assets/images/lens_Img3.jpg')?>" alt="Image3"> </div>
    <div> <img src="<?php echo base_url('assets/images/lens_Img4.jpg')?>" alt="Image1"> </div>
  </div>
	
  <div class="row productDetails lenstDetails clearfix">
    <h3>Bausch & Lomb</h3>
	<p>Soflens 59 (6 Lens per Box) Bausch & Lomb</p>
    <small>1 Box</small><em>$19.95</em><span class="mrp">$ 25.97 </span><div class="offer"><span>30% Off</span></div>
    
    <div class="reviewRatingBar clearfix">
      <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> </div>
      <a href="#" class="reviewLink">66 Review</a> </div>
    <div class="shareBlock clearfix"> <span class="shareText">Share</span> <i class="icon icon-facebook"></i> <i class="icon icon-twitter"></i> <i class="icon icon-google-plus"></i> </div>
    <div class="colorBlock clearfix">
      <div class="colorList clearfix">
        <label>
        <div class="circle">
          <div class="color cantique"></div>
        </div>
        <a href="#">Antique bronz</a>
        </label>
        <label>
        <div class="circle">
          <div class="color cblue"></div>
        </div>
        <a href="#">Blue</a>
        </label>
        <label>
        <div class="circle">
          <div class="color cyellow"></div>
        </div>
        <a href="#">Yellow</a>
        </label>
        <label>
        <div class="circle">
          <div class="color cred"></div>
        </div>
        <a href="#">Red</a>
        </label>
        <label>
        <div class="circle">
          <div class="color cgreen"></div>
        </div>
        <a href="#">Green</a>
        </label>
        <label>
        <div class="circle">
          <div class="color cgunmetal"></div>
        </div>
        <a href="#">Gunmetal</a>
        </label>
        <label>
        <div class="circle">
          <div class="color cburgundy"></div>
        </div>
        <a href="#">Burgundy</a>
        </label>
      </div>
    </div>
  </div>
	
  <div class="row productPrescriBlock lensPrescriBlock clearfix">
	  
    <div class="container">
		
      <div class="row prescriType clearfix">
		 
          <div class="valueBlock clearfix" >
			  
			 <h3>Enter Your Prescription</h3>
			
			<div class="value clearfix">
				
				<div class="bar clearfix">
				
					<label>Prescription Name</label>
					<input type="text" name="prescName" id="prescName" placeholder="e.g amanda octobar 2018">
					
				</div>
			
				<div class="col-sm-12 leftValue">
            		<span class="eyeText">Left Eye (OS)</span>
            		<div class="valueBar clearfix">
              			<div class="valueBox valueBox1 clearfix">
						<label>Boxes</label>
						<div class="field">
						  <input type="text" id="boxL" placeholder="1 Box">
						  <i class="icon icon-angle-down"></i>
						  <ul class="list">
							<li><a href="#">1 Box</a></li>
							<li><a href="#">2 Box</a></li>
							<li><a href="#">3 Box</a></li>
							<li><a href="#">4 Box</a></li>
						  </ul>
						</div>
					  	</div>
						<div class="valueBox valueBox1 clearfix">
						<label>Sphere (SPH)</label>
						<div class="field">
						  <input type="text" id="sphL" placeholder="0.00">
						  <i class="icon icon-angle-down"></i>
						  <ul class="list">
							<li><a href="#">1.00</a></li>
							<li><a href="#">1.25</a></li>
							<li><a href="#">1.50</a></li>
							<li><a href="#">1.75</a></li>
						  </ul>
						</div>
					  	</div>
              			<div class="valueBox valueBox1 clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <li><a href="#">1.00</a></li>
                    <li><a href="#">1.25</a></li>
                    <li><a href="#">1.50</a></li>
                    <li><a href="#">1.75</a></li>
                  </ul>
                </div>
              </div>
              			<div class="valueBox valueBox1 clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <li><a href="#">1.00</a></li>
                    <li><a href="#">1.25</a></li>
                    <li><a href="#">1.50</a></li>
                    <li><a href="#">1.75</a></li>
                  </ul>
                </div>
              </div>
            		</div>
          		</div>
				
          		<div class="col-sm-12 rightValue">
            	<span class="eyeText">Right Eye (OS)</span>
            <div class="valueBar clearfix">
             <div class="valueBox valueBox1 clearfix">
						<label>Boxes</label>
						<div class="field">
						  <input type="text" id="boxR" placeholder="1 Box">
						  <i class="icon icon-angle-down"></i>
						  <ul class="list">
							<li><a href="#">1 Box</a></li>
							<li><a href="#">2 Box</a></li>
							<li><a href="#">3 Box</a></li>
							<li><a href="#">4 Box</a></li>
						  </ul>
						</div>
					  	</div>
						<div class="valueBox valueBox1 clearfix">
						<label>Sphere (SPH)</label>
						<div class="field">
						  <input type="text" id="sphL" placeholder="0.00">
						  <i class="icon icon-angle-down"></i>
						  <ul class="list">
							<li><a href="#">1.00</a></li>
							<li><a href="#">1.25</a></li>
							<li><a href="#">1.50</a></li>
							<li><a href="#">1.75</a></li>
						  </ul>
						</div>
					  	</div>
              			<div class="valueBox valueBox1 clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <li><a href="#">1.00</a></li>
                    <li><a href="#">1.25</a></li>
                    <li><a href="#">1.50</a></li>
                    <li><a href="#">1.75</a></li>
                  </ul>
                </div>
              </div>
              			<div class="valueBox valueBox1 clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <li><a href="#">1.00</a></li>
                    <li><a href="#">1.25</a></li>
                    <li><a href="#">1.50</a></li>
                    <li><a href="#">1.75</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
			
			</div>
            </div>
		  
      </div>
    </div>
  </div>
	
  <div class="buttonBlock clearfix">
    <button class="hvr-wobble-top"> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button>
    <div class="whislistIcon"> <i class="icon icon-heart"></i> </div>
  </div>
	
  <div class="moreDetailsBlock clearfix">
    <div class="tabBlock clearfix">
      <ul class="tabList clearfix">
        <li class="tab is-active">Details</li>
        <li class="tab">Description</li>
        <li class="tab">Reviews</li>
      </ul>
      <div class="tabContentBlock clearfix">
        <div class="tabContent clearfix">
          <div class="col-sm-6 detailsBlock clearfix">
            <h3>Benefits</h3>
            <ul class="list clearfix">
              <li>Offer great wearing experience</li>
              <li>High water content</li>
              <li>Extremely soft and comfortable</li>
              <li>UV protected lenses</li>
              <li>No redness, irritation or dryness</li>
              <li>Good for prolonged usage</li>
            </ul>
          </div>
          <div class="col-sm-6 detailsBlock clearfix">
            <h3>Product Features</h3>
            <ul class="list clearfix">
              <li>Brand: <em>Bausch & Lomb</em> </li>
              <li>Water Content: <em>59%</em> </li>
              <li>Lens Material: <em>Hilafilcon B</em> </li>
              <li>Lens Type: <em>Monthly Disposable</em> </li>
              <li>Usage Duration: <em>Monthly</em> </li>
              <li>Packaging: <em>6 Lens Box</em> </li>
            </ul>
          </div>
        </div>
        <div class="tabContent clearfix">
          <p>Bausch & Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.</p>
        </div>
        <div class="tabContent clearfix">
          <div class="tabRatingBlock clearfix">
            <div class="bar clearfix">
              <div class="col-sm-6 totalRatingBox clearfix"> <span>4 <em>/5</em> </span>
                <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> </div>
                <p>1024 Ratings & 124 Reviews</p>
                <a href="#">View All Reviews</a> </div>
              <div class="col-sm-6 writeReviewBtnBlock clearfix">
                <p>Share your thoughts with other customers</p>
                <button>Write a Review</button>
              </div>
            </div>
            <div class="chooseType clearfix"> <span>Sort By :</span>
              <ul class="ratingList">
                <li class="active" id="allRating"> <a href="#">All</a> </li>
                <li id="oneStar"> <a href="#">1 Star</a> </li>
                <li id="twoStar"> <a href="#">2 Star</a> </li>
                <li id="threeStar"> <a href="#">3 Star</a> </li>
                <li id="fourStar"> <a href="#">4 Star</a> </li>
                <li id="fiveStar"> <a href="#">5 Star</a> </li>
              </ul>
            </div>
            <div class="reviewBlock clearfix">
              <div class="review clearfix" id="allRatingContent">
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Slightly different </h4>
                  <p>The lighter (cream) color of this cream/brown tortoise combination did not arrive as pictured. It looks to be a
                    more opaque cream color online, but is in reality translucent, giving this style a more dated/less modern look.</p>
                  <span>by <strong>Yogesh Yadav</strong> on 20 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>0 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> </div>
                  <h4>Retro Effect</h4>
                  <p>These are lightweight, cute, and quirky. My favorite part is their tortoiseshell color. These are not translucent,
                    but a mottled, creamy tan with brown. I'm still getting accustomed to them, as you can't see my eyebrows when
                    I have them on, lol. But I've gotten compliments. A unique frame!</p>
                  <span>by <strong>Pradeep Rawat</strong> on 19 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
              </div>
				
              <div class="review clearfix" id="oneStarContent">
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Slightly different </h4>
                  <p>The lighter (cream) color of this cream/brown tortoise combination did not arrive as pictured. It looks to be a
                    more opaque cream color online, but is in reality translucent, giving this style a more dated/less modern look.</p>
                  <span>by <strong>Yogesh Yadav</strong> on 20 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>0 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Retro Effect</h4>
                  <p>These are lightweight, cute, and quirky. My favorite part is their tortoiseshell color. These are not translucent,
                    but a mottled, creamy tan with brown. I'm still getting accustomed to them, as you can't see my eyebrows when
                    I have them on, lol. But I've gotten compliments. A unique frame!</p>
                  <span>by <strong>Pradeep Rawat</strong> on 19 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
              </div>
				
              <div class="review clearfix" id="twoStarContent">
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Slightly different </h4>
                  <p>The lighter (cream) color of this cream/brown tortoise combination did not arrive as pictured. It looks to be a
                    more opaque cream color online, but is in reality translucent, giving this style a more dated/less modern look.</p>
                  <span>by <strong>Yogesh Yadav</strong> on 20 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>0 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Retro Effect</h4>
                  <p>These are lightweight, cute, and quirky. My favorite part is their tortoiseshell color. These are not translucent,
                    but a mottled, creamy tan with brown. I'm still getting accustomed to them, as you can't see my eyebrows when
                    I have them on, lol. But I've gotten compliments. A unique frame!</p>
                  <span>by <strong>Pradeep Rawat</strong> on 19 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
              </div>
              <div class="review clearfix" id="threeStarContent">
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Slightly different </h4>
                  <p>The lighter (cream) color of this cream/brown tortoise combination did not arrive as pictured. It looks to be a
                    more opaque cream color online, but is in reality translucent, giving this style a more dated/less modern look.</p>
                  <span>by <strong>Yogesh Yadav</strong> on 20 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>0 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Retro Effect</h4>
                  <p>These are lightweight, cute, and quirky. My favorite part is their tortoiseshell color. These are not translucent,
                    but a mottled, creamy tan with brown. I'm still getting accustomed to them, as you can't see my eyebrows when
                    I have them on, lol. But I've gotten compliments. A unique frame!</p>
                  <span>by <strong>Pradeep Rawat</strong> on 19 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
              </div>
              <div class="review clearfix" id="fourStarContent">
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Slightly different </h4>
                  <p>The lighter (cream) color of this cream/brown tortoise combination did not arrive as pictured. It looks to be a
                    more opaque cream color online, but is in reality translucent, giving this style a more dated/less modern look.</p>
                  <span>by <strong>Yogesh Yadav</strong> on 20 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>0 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Retro Effect</h4>
                  <p>These are lightweight, cute, and quirky. My favorite part is their tortoiseshell color. These are not translucent,
                    but a mottled, creamy tan with brown. I'm still getting accustomed to them, as you can't see my eyebrows when
                    I have them on, lol. But I've gotten compliments. A unique frame!</p>
                  <span>by <strong>Pradeep Rawat</strong> on 19 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
              </div>
              <div class="review clearfix" id="fiveStarContent">
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> </div>
                  <h4>Slightly different </h4>
                  <p>The lighter (cream) color of this cream/brown tortoise combination did not arrive as pictured. It looks to be a
                    more opaque cream color online, but is in reality translucent, giving this style a more dated/less modern look.</p>
                  <span>by <strong>Yogesh Yadav</strong> on 20 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>0 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> </div>
                  <h4>Retro Effect</h4>
                  <p>These are lightweight, cute, and quirky. My favorite part is their tortoiseshell color. These are not translucent,
                    but a mottled, creamy tan with brown. I'm still getting accustomed to them, as you can't see my eyebrows when
                    I have them on, lol. But I've gotten compliments. A unique frame!</p>
                  <span>by <strong>Pradeep Rawat</strong> on 19 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
                <div class="reviewBar clearfix">
                  <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> </div>
                  <h4>Very good lenses and service</h4>
                  <p>Very good lenses and very good and fast service . Arrived in really fast. I ordered only from Zumeyes and my family
                    too </p>
                  <span>by <strong>Narinder Singh</strong> on 22 July, 2018</span>
                  <div class="helpAction clearfix">
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-up"></i> <em>20 Helpful</em> </div>
                    <div class="helpfulBox clearfix"> <i class="icon icon-thumbs-down"></i> <em>20 Not Helpful</em> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	
</section>	

<section class="col-sm-12 proLikeSection clearfix">
  <div class="container">
    <div class="sectionTitle">
      <h2> <span>You may also like these</span> </h2>
    </div>
    <div class="row probar clearfix">
      <div class="col-sm-3 proBox">
        <div class="product">
          <div class="itemTop">
            <ul class="colorList">
              <li> <a href="#" class="cblue"></a> </li>
              <li> <a href="#" class="cyellow"></a> </li>
              <li> <a href="#" class="cred"></a> </li>
              <li> <a href="#" class="cgreen"></a> </li>
            </ul>
          </div>
          <div class="itemImg"> <a href="productDetails.html"> <img src="<?php echo base_url('assets/images/frame_2.png')?>" alt="Frame"> </a> </div>
          <div class="itemBottom">
            <h3> <a class="productName" href="#">Chamberlain</a> </h3>
            <div class="priceBox"> <span>$ 21.99</span> </div>
            <div class="productAction">
              <div class="cart icon"> <i class="icon-shopping-cart"></i> </div>
              <div class="wishlist icon"> <i class="icon-heart"></i> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3 proBox">
        <div class="product">
          <div class="itemTop">
            <ul class="colorList">
              <li> <a href="#" class="cblue"></a> </li>
              <li> <a href="#" class="cyellow"></a> </li>
              <li> <a href="#" class="cred"></a> </li>
              <li> <a href="#" class="cgreen"></a> </li>
            </ul>
          </div>
          <div class="itemImg"> <a href="productDetails.html"> <img src="images/frame_3.png " alt="Frame"> </a> </div>
          <div class="itemBottom">
            <h3> <a class="productName" href="#">Hughes Wide</a> </h3>
            <div class="priceBox"> <span>$ 30.97</span> </div>
            <div class="productAction">
              <div class="cart icon"> <i class="icon-shopping-cart"></i> </div>
              <div class="wishlist icon"> <i class="icon-heart"></i> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3 proBox">
        <div class="product">
          <div class="itemTop">
            <ul class="colorList">
              <li> <a href="#" class="cblue"></a> </li>
              <li> <a href="#" class="cyellow"></a> </li>
              <li> <a href="#" class="cred"></a> </li>
              <li> <a href="#" class="cgreen"></a> </li>
            </ul>
          </div>
          <div class="itemImg"> <a href="productDetails.html"> <img src="images/frame_4.png" alt="Frame"> </a> </div>
          <div class="itemBottom">
            <h3> <a class="productName" href="#">Baker</a> </h3>
            <div class="priceBox"> <span>$ 29.97</span> </div>
            <div class="productAction">
              <div class="cart icon"> <i class="icon-shopping-cart"></i> </div>
              <div class="wishlist icon"> <i class="icon-heart"></i> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3 proBox">
        <div class="product">
          <div class="itemTop">
            <ul class="colorList">
              <li> <a href="#" class="cblue"></a> </li>
              <li> <a href="#" class="cyellow"></a> </li>
              <li> <a href="#" class="cred"></a> </li>
              <li> <a href="#" class="cgreen"></a> </li>
            </ul>
          </div>
          <div class="itemImg"> <a href="productDetails.html"> <img src="images/frame_2.png" alt="Frame"> </a> </div>
          <div class="itemBottom">
            <h3> <a class="productName" href="#">Chamberlain</a> </h3>
            <div class="priceBox"> <span>$ 21.99</span> </div>
            <div class="productAction">
              <div class="cart icon"> <i class="icon-shopping-cart"></i> </div>
              <div class="wishlist icon"> <i class="icon-heart"></i> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	

<?php include('footer.php');?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.js');?>"></script>
<script src="<?php echo base_url('assets/js/script.js');?>"></script>
<script src="<?php echo base_url('assets/js/slick.js');?>"></script>
<script type="text/javascript">
		
	</script>
</body>
</html>