<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zumeyes</title>
<link href="<?php echo base_url(); ?>/assets/styles/slick.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/assets/styles/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/font.css" rel="stylesheet" type="text/css">

	<script src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</head>

<body>

<?php include 'header.php';?>

<section class="col-sm-12 clearfix proDetailsSection lensDetailsSection">
	<?php if (@$pro_data) {
    foreach ($pro_data as $key => $pro_dat) {
        $featuredimage = explode("|", $pro_dat->featuredimage);
        $pro_colors = explode("|", $pro_dat->color);
        $procolor = $pro_dat->color;
        $pro_brand = $pro_dat->brand;

        $weight = $pro_dat->weight;
        $water_content = $pro_dat->water_content;
        $packaging = $pro_dat->packaging;
        $uses = $pro_dat->uses;
        $uses_duration = $pro_dat->uses_duration;

        $pro_material = $pro_dat->material;
        $description = $pro_dat->pro_description;
        ?>
  <div class="center slider">
   <?php foreach ($featuredimage as $key => $featuredimage) {?>
    <div> <img src="<?php echo base_url('assets/upload/featuredimage/') ?><?php echo $featuredimage ?>" alt="Image1"> </div> <?php }?>

  </div>

  <div class="row productDetails clearfix">
    <h3><?php echo $pro_dat->product_name ?></h3>
    <em>Rs<?php echo $pro_dat->sale_price ?></em><span class="mrp">Rs <?php echo $pro_dat->regular_price ?> </span><div class="offer"><span><?php echo $pro_dat->offer ?>% Off</span></div>
    <p>Starting at Rs 95, including prescription lenses</p>
    <div class="reviewRatingBar clearfix">
      <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
      <a href="#" class="reviewLink">99 Review</a> </div>
    <div class="shareBlock clearfix"> <span class="shareText">Share</span> <i class="icon icon-facebook"></i> <i class="icon icon-twitter"></i> <i class="icon icon-google-plus"></i> </div>
    <div class="colorBlock clearfix">
      <div class="colorList clearfix">
        <?php foreach ($pro_colors as $key => $color) {?>
        <label>
        <div class="circle">
          <div class="color" style="background-color:<?php echo $color; ?>"></div>
        </div>
        <a><?php echo $color; ?></a>
        </label>
    <?php }?>
      </div>
    </div>
  </div>

  <div class="row productPrescriBlock lensPrescriBlock clearfix">

    <div class="container">

      <div class="row prescriType clearfix">

          <div class="valueBlock clearfix" >

			 <h3>Enter Your Prescription</h3>
			<form action="contactlensecart" method="post" name="lenseform">
			<div class="value clearfix">

				<div class="bar clearfix">

					<label>Prescription Name</label>
					<input type="text" name="prescriptionname" required id="prescName" placeholder="e.g amanda octobar 2018">

				</div>

				<div class="col-sm-12 leftValue">
            		<span class="eyeText">Left Eye (OS)</span>
            		<div class="valueBar clearfix">
              			<div class="valueBox valueBox1 clearfix">
						<label>Boxes</label>
						<div class="field">
						  <input type="text" list="box" required id="boxL" name="lbox" placeholder="1 Box">
						  <i class="icon icon-angle-down"></i>
						  <datalist id="box">
							<option value="1 Box">1 Box</option>
							<option value="2 Box">2 Box</option>
							<option value="3 Box">3 Box</option>
							<option value="4 Box">4 Box</option>
						 </datalist>
						</div>
					  	</div>
						<div class="valueBox valueBox1 clearfix">
						<label>Sphere (SPH)</label>
						<div class="field">
                  <input type="text" list="lsphere" id="sphL" required name="lsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>

                   <datalist id="lsphere">

 <?php foreach ($sphere_data as $key => $sphere) {?>
                     ?>

            <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
           <?php }?>
           </datalist>



                </div>
					  	</div>
              			<div class="valueBox valueBox1 clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" list="lcylinder" required name="lcylinder" required="" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                   <datalist id="lcylinder">

                    <?php foreach ($cylinder_data as $key => $cylinder) {?>
                      <option value="<?php echo $cylinder->cylinder ?>"><?php echo $cylinder->cylinder; ?></option>

                       <?php }?>
                  </datalist>
                </div>
              </div>
              			<div class="valueBox valueBox1 clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" list="laxis" required name="laxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>

                     <datalist id="laxis">
                    <?php foreach ($axis_data as $key => $axis) {?>
                      <option value="<?php echo $axis->axis; ?>"><?php echo $axis->axis; ?></option>

                     <?php }?>
                </datalist>

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
						  <input type="text" id="boxR" list="rbox" required name="rbox" placeholder="1 Box">
						  <i class="icon icon-angle-down"></i>
						   <datalist id="rbox">
              <option value="1 Box">1 Box</option>
              <option value="2 Box">2 Box</option>
              <option value="3 Box">3 Box</option>
              <option value="4 Box">4 Box</option>
             </datalist>
						</div>
					  	</div>
						<div class="valueBox valueBox1 clearfix">
						<label>Sphere (SPH)</label>
						 <div class="field">
                  <input type="text" list="rsphere" id="sphR" required name="rsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>

                   <datalist id="rsphere">

 <?php foreach ($sphere_data as $key => $sphere) {?>
                     ?>

            <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
           <?php }?>
           </datalist>



                </div>
					  	</div>
              			<div class="valueBox valueBox1 clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylR" list="rcylinder" required name="rcylinder" required="" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                   <datalist id="rcylinder">

                    <?php foreach ($cylinder_data as $key => $cylinder) {?>
                      <option value="<?php echo $cylinder->cylinder ?>"><?php echo $cylinder->cylinder; ?></option>

                       <?php }?>
                  </datalist>
                </div>
              </div>
              			<div class="valueBox valueBox1 clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisR" list="raxis" required name="raxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>

                     <datalist id="raxis">
                    <?php foreach ($axis_data as $key => $axis) {?>
                      <option value="<?php echo $axis->axis; ?>"><?php echo $axis->axis; ?></option>

                     <?php }?>
                </datalist>

                </div>
              </div>
            </div>
          </div>

			</div>
            </div>

      </div>
    </div>
  </div>
	 <input type="hidden" name="pro_name" id="pro_name" value="<?php echo $pro_dat->product_name; ?>">
       <input type="hidden" name="pro_image" id="pro_image" value="<?php echo $pro_dat->pro_image; ?>">
     <input type="hidden" name="sale_price" id="sale_price" value="<?php echo $pro_dat->sale_price; ?>">
     <input type="hidden" name="id" id="id" value="<?php echo $pro_dat->id; ?>">

  <div class="buttonBlock clearfix">
    <button class="hvr-wobble-top" type="submit" name="contactlense" value="contactlense "> <i class="icon icon-shopping-cart class"></i> <span>Add to Cart</span> </button>

    <div class="whislistIcon"><i style="cursor: pointer" class="icon icon-heart class" proprice="<?php echo $pro_dat->sale_price ?>" pro_id="<?php echo $pro_dat->id ?>" pro_name="<?php echo $pro_dat->product_name ?>" pro_image="<?php echo $pro_dat->pro_image ?>"></i>
  </div>
  </div>
	</form>

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
              <li>Brand: <em><?php echo $pro_brand ?></em> </li>
              <li>Water Content: <em><?php echo $water_content ?></em> </li>
              <li>Lens Material: <em><?php echo $pro_material ?></em> </li>
              <li>Lens Type: <em><?php echo $uses ?></em> </li>
              <li>Usage Duration: <em><?php echo $uses_duration ?></em> </li>
              <li>Packaging: <em><?php echo $packaging ?> Lens Box</em> </li>
            </ul>
          </div>
        </div>
        <div class="tabContent clearfix">
          <?php echo $description;}} ?>
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
     <?php foreach ($related as $key => $relate) {
    ?>

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
          <div class="itemImg"> <a href="<?php echo site_url('productDetails'); ?>?id=<?php echo $relate->id ?>"> <img src="<?php echo base_url('assets/upload/product/') ?><?php echo str_replace(" ", '_', $relate->pro_image) ?>" alt="Frame"> </a> </div>
          <div class="itemBottom">
            <h3> <a class="productName" href="#"><?php echo $relate->product_name ?></a> </h3>
            <div class="priceBox"> <span>Rs <?php echo $relate->sale_price ?></span> </div>
            <div class="productAction">
              <div class="cart icon"> <i class="icon-shopping-cart"></i> </div>
              <div class="wishlist icon"> <i class="icon-heart"></i> </div>
            </div>
          </div>
        </div>
      </div>
     <?php }?>
    </div>
  </div>
</section>


<?php include 'footer.php';?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $(".class").click(function(){

        $(this).toggleClass("active");
      var sale_price =  $(this).attr("proprice");
      var pro_id=  $(this).attr("pro_id");
      var pro_name=  $(this).attr("pro_name");
      var pro_image=  $(this).attr("pro_image");
      var prescription_type="prescription_type";
        $.ajax({
                type:"POST",
                url:"<?php echo base_url('wishframeOnly') ?>",
            data:{pro_id:pro_id,pro_name:pro_name,sale_price:sale_price,pro_image:pro_image,prescription_type:prescription_type},
                success:function(data){

                }
            });

    });
    });
</script>
<script src="<?php echo base_url('assets/js/owl.carousel.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/slick.js'); ?>"></script>
<script type="text/javascript">

	</script>

</body>
</html>