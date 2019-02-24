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
  <script src="//platform-api.sharethis.com/js/sharethis.js#property=5c5f1ef883748d001131544f&product=inline-share-buttons"></script>

</head>

<body>


<?php include 'header.php';?>
<section class="col-sm-12 clearfix proDetailsSection">
	 <?php if (@$pro_data) {
    foreach ($pro_data as $key => $pro_dat) {
        $featuredimage = explode("|", $pro_dat->featuredimage);
        $pro_colors = explode("|", $pro_dat->color);
        $procolor = $pro_dat->color;
        $pro_idr = $pro_dat->id;
        $tags = $pro_dat->tags;
        $features = $pro_dat->features;
        $weight = $pro_dat->weight;
        $tax = $pro_dat->tax;
        $frame_width = $pro_dat->frame_width;
        $lense_height = $pro_dat->lense_height;
        $lense_width = $pro_dat->lense_width;
        $temple_length = $pro_dat->temple_length;
        $bridge = $pro_dat->bridge;

        $pro_style = $pro_dat->frame_style;
        $pro_shape = $pro_dat->shape;
        $pro_material = $pro_dat->material;
        $description = $pro_dat->pro_description;
        ?>
  <div class="center slider">
  	<?php foreach ($featuredimage as $key => $featuredimage) {?>
    <div> <img src="<?php echo base_url('assets/upload/featuredimage/') ?><?php echo $featuredimage ?>" alt="Image1"> </div> <?php }?>
  </div>

  <div class="row productDetails clearfix">
    <h3><?php echo $pro_dat->product_name ?></h3>
    <em>Rs <?php echo $pro_dat->sale_price ?></em><span class="mrp">Rs <?php echo $pro_dat->regular_price ?> </span><div class="offer"><span><?php echo $pro_dat->offer ?>% Off</span></div>
    <p>Starting at Rs 95, including prescription lenses</p>
    <div class="reviewRatingBar clearfix">
      <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
      <a href="#" class="reviewLink">99 Review</a> </div>
    <div class="shareBlock clearfix"> <span class="shareText">Share</span><div class="sharethis-inline-share-buttons"></div>
         </div>
    <div class="colorBlock clearfix">
      <div class="colorList clearfix">
      	<?php foreach ($pro_colors as $key => $color) {?>
        <label class="colorclick" color="<?php echo $color; ?>">
        <div class="circle">
          <div class="color" style="background-color:<?php echo $color; ?>"></div>
        </div>
        <a><?php echo $color; ?></a>

        </label>
    <?php }?>
      </div>
    </div>
  </div>

  <div class="row productPrescriBlock clearfix">

    <div class="container">

      <div class="row prescriType clearfix">

        <h3>Select Prescription Type</h3>

        <ul class="presList clearfix">
           <li id="singleVision">
				<input type="radio" name="radio">
				<span class="checkmark">Single Vision</span>
			</li>
			<li id="bifocal">
				<input type="radio" name="radio">
				<span class="checkmark">Bifocal</span>
			</li>
			<li id="frame">
				<input type="radio" name="radio">
				<span class="checkmark">Frame Only</span>
			</li>
			<li id="zeroPower">
				<input type="radio" name="radio">
				<span class="checkmark">Zero Power</span>
			</li>

        </ul>
		  <form action="singleVision" method="post" name="singleVisionform">

          <div class="valueBlock clearfix" id="singleVisionContent" >

			  <h3>Choose Lens Package: Single Vision</h3>

               <div class="lenseAddBlock clearfix owl-carousel owl-theme">
				   <?php foreach ($prescription_type as $key => $packages) {
            if ($packages->prescription_type == 'Single Vision') {
                ?>
                  <div class="lenseBox clearfix">

                  <div class="box clearfix">

						<div class="top clearfix">

							<h3><?php echo $packages->lense_name ?></h3>
              <input type="hidden" name="spackagename" value="<?php echo $packages->lense_name ?>">
							<div class="priceBox clearfix">
								<span>Now Only Rs<?php echo $packages->price ?></span>
								<em>Included</em>
							</div>
							<div class="offer clearfix">

								<span>$100 Off</span>
								<small>use code multi100</small>
							</div>

						</div>
						<ul class="featureList clearfix">
						  <?php echo $packages->description ?>
						</ul>

						<div class="button clearfix">
								<span>Add to Cart</span>
								<em>(Select Product)</em>
							   <!--<input type="radio" required value="<?php echo $packages->id; ?>" name="prescription_id">-->
							   <input hidden type="radio" required value="<?php echo $packages->id; ?>" name="prescription_id">
							  </div>

					</div>

                </div>
            <?php }}?>

                </div>

			  <h3>Enter Your Prescription</h3>

			<div class="value clearfix">

				<div class="bar clearfix">

					<label>Prescription Name</label>
          <input type="text" name="prescriptionname" autocomplete="off" required  id="prescName" placeholder="e.g amanda octobar 2018">



				</div>

				<div class="col-sm-12 leftValue">
            		<span class="eyeText">Left Eye (OS)</span>
            		<div class="valueBar clearfix">
              	<div class="valueBox clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" list="lsphere" id="sphL" autocomplete="off" required name="lsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>

                   <datalist id="lsphere">

 <?php foreach ($sphere_data as $key => $sphere) {?>
                     ?>

            <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
           <?php }?>
           </datalist>



                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" list="lcylinder" autocomplete="off" required name="lcylinder" required="" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                   <datalist id="lcylinder">

                    <?php foreach ($cylinder_data as $key => $cylinder) {?>
                      <option value="<?php echo $cylinder->cylinder ?>"><?php echo $cylinder->cylinder; ?></option>

                       <?php }?>
                  </datalist>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" list="laxis" autocomplete="off" required name="laxis" placeholder="0.00">
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
              <div class="valueBox clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" id="sphR" list="rsphere" autocomplete="off" required name="rsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <datalist id="rsphere">
                     <?php foreach ($sphere_data as $key => $sphere) {?>
                    <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
                      <?php }?>
                </datalist>

                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylR" list="rcylinder" autocomplete="off" required name="rcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <datalist id="rcylinder">
                    <?php foreach ($cylinder_data as $key => $cylinder) {?>
                       <option value="<?php echo $cylinder->cylinder; ?>"><?php echo $cylinder->cylinder; ?></option>
                     <?php }?>
                   </datalist>

                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" list="raxis" id="axisR" autocomplete="off" required name="raxis" placeholder="0.00">
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
             <div class="buttonBlock clearfix">
  	  <input type="hidden" name="pro_name" value="<?php echo $pro_dat->product_name; ?>">
  	   <input type="hidden" name="pro_image" value="<?php echo $pro_dat->pro_image; ?>">
  	 <input type="hidden" name="sale_price" value="<?php echo $pro_dat->sale_price; ?>">
     <input type="hidden" name="tax" value="<?php echo $tax; ?>">
  	 <input type="hidden" name="lense_price" value="<?php echo $pro_dat->sale_price; ?>">
  	 <input type="hidden" name="id" value="<?php echo $pro_dat->id; ?>">
     <input  type="hidden" value="" name="color_name" class="color_name1">


    <button class="hvr-wobble-top singleVision" type="submit" name="singleVision" value="singleVision"> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button>
    <div class="whislistIcon"> <i class="icon icon-heart"></i> </div>
  </div>
</form>
            </div>

		  <div class="valueBlock clearfix" id="bifocalContent" >
			  <form method="post" action="bifocal" name="bifocalform">
			  <h3>Choose Lens Package: BiFocal </h3>

               <div class="lenseAddBlock clearfix owl-carousel owl-theme">
				   <?php foreach ($prescription_type as $key => $packages) {
            if ($packages->prescription_type == 'Bifocal') {
                ?>
                  <div class="lenseBox clearfix">

                  <div class="box clearfix">

						<div class="top clearfix">

							<h3><?php echo $packages->lense_name ?></h3>
              <input type="hidden" name="bpackagename" value="<?php echo $packages->lense_name ?>">
							<div class="priceBox clearfix">
								<span>Now Only Rs<?php echo $packages->price ?></span>
								<em>Included</em>
							</div>
							<div class="offer clearfix">
								<span>$100 Off</span>
								<small>use code multi100</small>
							</div>

						</div>
						<ul class="featureList clearfix">
						<?php echo $packages->description ?>

						</ul>

						<div class="button clearfix">

							<a href="#">
								<span>Add to Cart</span>
								<em>(Submit power post checkout)</em>
                <input hidden type="radio" required value="<?php echo $packages->id; ?>" name="prescription_id">

							</a>

						</div>

					</div>

                </div>
            <?php }}?>

                </div>

			  <h3>Enter Your Prescription</h3>

			<div class="value clearfix">

				<div class="bar clearfix">

					<label>Prescription Name</label>
					 <input type="text" name="prescriptionname" autocomplete="off" required value="" id="prescName" placeholder="e.g amanda octobar 2018">


				</div>

				<div class="col-sm-12 leftValue clearfix">
            		<span class="eyeText">Left Eye (OS)</span>
            		<div class="valueBar clearfix">
              	<div class="valueBox valueBox1 clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" id="sphL" list="lsphere" autocomplete="off" required name="lsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                 <datalist id="lsphere">
                     <?php foreach ($sphere_data as $key => $sphere) {?>
                     <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
                  <?php }?>
                  </datalist>
                </div>
              </div>
              	<div class="valueBox valueBox1 clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" list="lcylinder" autocomplete="off" required name="lcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <datalist id="lcylinder">
                     <?php foreach ($cylinder_data as $key => $cylinder) {?>
                       <option value="<?php echo $cylinder->cylinder; ?>"><?php echo $cylinder->cylinder; ?></option>

                    <?php }?>
                  </datalist>
                </div>
              </div>
              	<div class="valueBox valueBox1 clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" list="laxis" id="axisL" autocomplete="off" required name="laxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <datalist id="laxis">
                    <?php foreach ($axis_data as $key => $axis) {?>
                      <option value="<?php echo $axis->axis; ?>"><?php echo $axis->axis; ?></option>

                    <?php }?>
                  </datalist>
                </div>
              </div>

				<div class="valueBox valueBox1 clearfix">
                <label>Add (Near addition)</label>
                <div class="field">
                  <input type="text" id="nearAddi" autocomplete="off" required list="leftlnearAddi" name="leftlnearAddi" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>

                    <datalist id="leftlnearAddi">
                    <?php foreach ($nearaddition_data as $key => $nearaddition) {?>
                    <option value="<?php echo $nearaddition->nearaddition; ?>"><?php echo $nearaddition->nearaddition; ?></option>
                  <?php }?>
                  <datalist id="laxis">

                </div>
              </div>
            </div>
          		</div>

          		<div class="col-sm-12 rightValue clearfix">
            	<span class="eyeText">Right Eye (OS)</span>
            		<div class="valueBar clearfix">
              	<div class="valueBox valueBox1 clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" id="sphL" required list="rsphere" autocomplete="off" name="rsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <datalist id="rsphere">
                     <?php foreach ($sphere_data as $key => $sphere) {?>
                    <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
                  <?php }?>
                  </datalist>
                </div>
              </div>
              	<div class="valueBox valueBox1 clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" required autocomplete="off" list="rcylinder" name="rcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                   <datalist id="rcylinder">
                    <?php foreach ($cylinder_data as $key => $cylinder) {?>
                    <option value="<?php echo $cylinder->cylinder; ?>"><?php echo $cylinder->cylinder; ?></option>
                  <?php }?>
                  </datalist>
                </div>
              </div>
              	<div class="valueBox valueBox1 clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" required autocomplete="off" list="raxis" name="raxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                   <datalist id="raxis">
                   <?php foreach ($axis_data as $key => $axis) {?>
                    <option value="<?php echo $axis->axis; ?>"><?php echo $axis->axis; ?></option>
                  <?php }?>
                  </datalist>
                </div>
              </div>

				<div class="valueBox valueBox1 clearfix">
                <label>Add (Near addition)</label>
                <div class="field">
                  <input type="text" id="nearAddi" autocomplete="off" required list="rightlnearAddi" name="rightlnearAddi" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <datalist id="rightlnearAddi">
                    <?php foreach ($nearaddition_data as $key => $nearaddition) {?>
                    <option><?php echo $nearaddition->nearaddition; ?></option>
                  <?php }?>
                 </datalist>
                </div>
              </div>
            </div>
          		</div>

				<div class="col-sm-12 rightValue pdValue clearfix">
            	<span class="eyeText">PD</span>
            		<div class="valueBar clearfix">
              	<div class="valueBox valueBox1 clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" id="sphL" autocomplete="off" required list="pdsphere" name="pdsphere" placeholder="62">
                  <i class="icon icon-angle-down"></i>
                   <datalist id="pdsphere">
                      <?php foreach ($sphere_data as $key => $sphere) {?>
                    <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
                  <?php }?>
                  </datalist>
                </div>
              </div>
            	</div>
          		</div>

				<div class="col-sm-12 rightValue pdValue  clearfix">
            	<span class="eyeText">Near PD</span>
            		<div class="valueBar clearfix">
              	<div class="valueBox valueBox1 clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" id="sphL" autocomplete="off" required list="nearpdsphere" name="nearpdsphere" placeholder="62">
                  <i class="icon icon-angle-down"></i>
                   <datalist id="nearpdsphere">
                     <?php foreach ($sphere_data as $key => $sphere) {?>
                    <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
                  <?php }?>
                 </datalist>
                </div>
              </div>
            	</div>
          		</div>

				<div class="textBar clearfix">

					<label>Additional comment about your prescription?</label>
					<textarea id="prescComment" name="description" placeholder=""></textarea>

				</div>

			</div>
			 <div class="buttonBlock clearfix">
  	<input type="hidden" name="pro_name" value="<?php echo $pro_dat->product_name; ?>">
       <input type="hidden" name="pro_image" value="<?php echo $pro_dat->pro_image; ?>">
     <input type="hidden" name="sale_price" value="<?php echo $pro_dat->sale_price; ?>">
     <input type="hidden" name="lense_price" value="<?php echo $pro_dat->sale_price; ?>">
      <input type="hidden" name="tax" value="<?php echo $tax; ?>">

     <input type="hidden" name="id" value="<?php echo $pro_dat->id; ?>">
     <input  type="hidden" value="" name="color_name" class="color_name1">


    <button class="hvr-wobble-top bifocal" type="submit" value="bifocal" name="bifocal"> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button>
    <div class="whislistIcon"> <i class="icon icon-heart"></i> </div>
  </div>
            </div>
		  </form>
		  <div class="valueBlock clearfix" id="zeroPowerContent" >
			  <form action="zeroPower" method="post" name="zeroPowerform">
			  <h3>Choose Lens Package</h3>

               <div class="lenseAddBlock clearfix owl-carousel owl-theme">
				    <?php foreach ($prescription_type as $key => $packages) {
            if ($packages->prescription_type == 'Zero Power') {
                ?>
				   <div class="lenseBox clearfix ">

					<div class="box clearfix">

						<div class="top clearfix">

							<h3><?php echo $packages->lense_name ?></h3>
              <input type="hidden" name="zpackagename" value="<?php echo $packages->lense_name ?>">
							<div class="priceBox clearfix"><span>Rs<?php echo $packages->price ?></span></div>
							<div class="offer clearfix">
								<span>$100 Off</span>
								<small>use code multi100</small>
							</div>
						</div>

						<ul class="featureList clearfix">
						<?php echo $packages->description ?>

						</ul>

						<div class="button clearfix">

							<a href="#">
								<span>Add to Cart</span>
								<em>(Submit power post checkout)</em>
                <input hidden type="radio" value="<?php echo $packages->id ?>" required name="prescription_id">

							</a>

						</div>

					</div>

				</div>

				<?php }}?>




                </div>

			  <h3>Enter Your Prescription</h3>

			<div class="value clearfix">

				<div class="bar clearfix">

					<label>Prescription Name</label>
					 <input type="text" name="prescriptionname" autocomplete="off" required value="" id="prescName" placeholder="e.g amanda octobar 2018">

				</div>

				<div class="col-sm-12 leftValue">
            		<span class="eyeText">Left Eye (OS)</span>
            		<div class="valueBar clearfix">
              	<div class="valueBox clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" id="sphL" autocomplete="off" required list="lsphere" name="lsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                   <datalist id="lsphere">
                     <?php foreach ($sphere_data as $key => $sphere) {?>
                    <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
                  <?php }?>
                 </datalist>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" autocomplete="off" required list="lcylinder" name="lcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                    <datalist id="lcylinder">
                    <?php foreach ($cylinder_data as $key => $cylinder) {?>
                    <option value="<?php echo $cylinder->cylinder; ?>"><?php echo $cylinder->cylinder; ?></option>
                  <?php }?>
                 </datalist>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" list="laxis" autocomplete="off" required name="laxis" placeholder="0.00">
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
              <div class="valueBox clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" id="sphR" required autocomplete="off" list="rsphere" name="rsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <datalist id="rsphere">
                    <?php foreach ($sphere_data as $key => $sphere) {?>
                    <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
                  <?php }?>
                 </datalist>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylR" required autocomplete="off" list="rcylinder" name="rcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                 <datalist id="rcylinder">
                    <?php foreach ($cylinder_data as $key => $cylinder) {?>
                    <option value="<?php echo $cylinder->cylinder; ?>"><?php echo $cylinder->cylinder; ?></option>
                  <?php }?>
                  </datalist>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisR" required autocomplete="off" list="raxis" name="raxis" placeholder="0.00">
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
			 <div class="buttonBlock clearfix">
  	<input type="hidden" name="pro_name" value="<?php echo $pro_dat->product_name; ?>">
       <input type="hidden" name="pro_image" value="<?php echo $pro_dat->pro_image; ?>">
     <input type="hidden" name="sale_price" value="<?php echo $pro_dat->sale_price; ?>">
     <input type="hidden" name="lense_price" value="<?php echo $pro_dat->sale_price; ?>">
      <input type="hidden" name="tax" value="<?php echo $tax; ?>">

     <input type="hidden" name="id" value="<?php echo $pro_dat->id; ?>">
      <input  type="hidden" value="" name="color_name" class="color_name1">

     <div class="buttonBlock clearfix">

    <button class="hvr-wobble-top zeroPower" type="submit" value="zeroPower" name="zeroPower"> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button>
    <div class="whislistIcon"> <i class="icon icon-heart"></i> </div>
  </div>
            </div>

      </div>
</form>
          <div class="valueBlock clearfix" id="frameContent" >
         <form action="frameOnly" method="post" name="frameOnlyform">

             <div class="buttonBlock clearfix">
      <input type="hidden" name="pro_name" value="<?php echo $pro_dat->product_name; ?>">
       <input type="hidden" name="pro_image" value="<?php echo $pro_dat->pro_image; ?>">
     <input type="hidden" name="sale_price" value="<?php echo $pro_dat->sale_price; ?>">
     <input type="hidden" name="lense_price" value="<?php echo $pro_dat->sale_price; ?>">
       <input type="hidden" name="tax" value="<?php echo $tax; ?>">
     <input type="hidden" name="pro_id" value="<?php echo $pro_dat->id; ?>">
     <input  type="hidden" value="" name="color_name" class="color_name1">

    <button class="hvr-wobble-top frameOnly" type="submit" name="frameOnly" value="frameOnly"> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button>
    <div class="whislistIcon"><i class="icon icon-heart class"></i> </div>
  </div>
</form>
            </div>
    </div>
  </div>

 <!-- <div class="buttonBlock clearfix">


    <button class="hvr-wobble-top"> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button>
    <div class="whislistIcon"> <i class="icon icon-heart"></i> </div>
  </div> -->
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
            <?php if (isset($pro_style)) {?>
            <h3>Specification</h3>
            <ul class="list clearfix">
              <li>Style: <em><?php echo $pro_style;

            ?></em> </li>
              <li>Shape: <em><?php echo $pro_shape;

            ?></em> </li>
              <li>Front Material: <em><?php

            echo $pro_material; ?></em> </li>
              <li>Color: <em><?php

            echo $color; ?></em> </li>
              <li>Features: <em><?php

            echo $features; ?></em> </li>
              <li>Tags: <em><?php

            echo $tags; ?></em> </li>
            </ul>
          <?php } else {?>
     <h3>Benefits</h3>
            <ul class="list clearfix">
              <li>Offer great wearing experience</li>
              <li>High water content</li>
              <li>Extremely soft and comfortable</li>
              <li>UV protected lenses</li>
              <li>No redness, irritation or dryness</li>
              <li>Good for prolonged usage</li>
            </ul>
            <?php
}?>
          </div>
          <div class="col-sm-6 detailsBlock clearfix">
            <?php if (isset($pro_style) && !empty($pro_style)) {?>
            <h3>Frame Details</h3>
            <ul class="list clearfix">
              <li>Frame Width: <em><?php

            echo $frame_width; ?></em> </li>
              <li>Lens Width: <em><?php

            echo $lense_width; ?></em> </li>
              <li>Bridge: <em><?php

            echo $bridge; ?></em> </li>
              <li>Temple Length: <em><?php

            echo $temple_length; ?></em> </li>
              <li>Lens Height: <em><?php

            echo $lense_height; ?></em> </li>
              <li>Frame Weight: <em><?php

            echo $weight; ?></em> </li>
            </ul>
          <?php } elseif (isset($water_content)) {?>
          <h3>Product Features</h3>
            <ul class="list clearfix">
              <li>Brand: <em><?php

            echo $brand; ?></em> </li>
              <li>Water Content: <em><?php

            echo $water_content; ?></em> </li>
              <li>Lens Material: <em><?php

            echo $material; ?></em> </li>
              <li>Lens Type: <em><?php

            echo $uses; ?></em> </li>
              <li>Usage Duration: <em><?php

            echo $uses_duration; ?></em> </li>
              <li>Packaging: <em><?php

            echo $packaging; ?></em> </li>
            </ul>
          <?php }?>
          </div>
        </div>
        <div class="tabContent clearfix">
         <?php echo $description;}} ?>
           </div>
        <div class="tabContent clearfix">
          <div class="tabRatingBlock clearfix">
            <div class="bar clearfix">
              <div class="col-sm-6 totalRatingBox clearfix"> <span>4.5 <em>/5</em> </span>
                <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
                <p>1024 Ratings & 124 Reviews</p>
                <a href="#">View All Reviews</a> </div>
              <div class="col-sm-6 writeReviewBtnBlock clearfix">
                <p>Share your thoughts with other customers</p>
                   <div class="text-center">
  <a href="" class="btn btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm"><button>Write a Review</button></a>
</div>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write a Review</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3" style="text-align: left">
        <div class="md-form mb-5">
          <i class="fa fa-user prefix grey-text"></i>
           <label data-error="wrong" data-success="right"  for="orangeForm-name">Your name</label>
          <input type="text" name="name" id="reviewname" required class="form-control validate">

        </div>
        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
          <input type="email"  id="reviewemail" name="email" required class="form-control validate">
          <input type="hidden" name="pro_id"  id="reviewid" value="<?php echo $pro_idr ?>">

        </div>
            <div class="md-form mb-5">
          <i class="fa fa-user prefix grey-text"></i>
           <label data-error="wrong" data-success="right" for="orangeForm-name">Title</label>
          <input type="text" id="reviewtitle" name="title" required class="form-control validate">

        </div>
         <div class="md-form">
          <i class="fa fa-pencil prefix grey-text"></i>
           <label data-error="wrong" data-success="right" for="form8">Your message</label>
          <textarea type="text" id="reviewmessage" name="description" class="md-textarea form-control" rows="4"></textarea>

        </div>

      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button id="review" name="reviewemail" value="">Submit</button>
      </div>

    </div>
  </div>
</div>

<script>
$(document).ready(function(){

  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });

  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });


  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');

    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }

    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }

    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);

  });


});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
</script>

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
            <div class="productAction" style="padding-left:23px">

              <div class="wishlist icon" style="padding-left: 23px;"> <i class="icon-favorite-heart-button class" style="cursor: pointer"></i> </div>
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
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/slick.js'); ?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".singleVision").click(function(){
		var pres_id=document.forms["singleVisionform"]["prescription_id"].value;
			var color_name=document.forms["singleVisionform"]["color_name"].value;
    if (pres_id== "") {
    alert("Please select the Single vision package");
    return false;
  }
  if(color_name== ""){
       alert("Please select the product color");
       return false;
  }
});
     $(".bifocal").click(function(){
    var pres_id=document.forms["bifocalform"]["prescription_id"].value;
    var color_name=document.forms["bifocalform"]["color_name"].value;
    if (pres_id== "") {
    alert("Please select the BiFocal package");
    return false;
  }
    if(color_name== ""){
       alert("Please select the product color");
       return false;
  }
});
      $(".zeroPower").click(function(){
    var pres_id=document.forms["zeroPowerform"]["prescription_id"].value;
    var color_name=document.forms["zeroPowerform"]["color_name"].value;
    if (pres_id== "") {
    alert("Please select the Zero Power package");
    return false;
  }
    if(color_name== ""){
       alert("Please select the product color");
       return false;
  }
});
      $(".frameOnly").click(function(){
       var color_name=document.forms["frameOnlyform"]["color_name"].value;
       if(color_name== ""){
       alert("Please select the product color");
       return false;
  }
      });

  });
	</script>
	<script type="text/javascript">

   $(".class").click(function(){
        $(this).toggleClass("'.$this->session->userdata('active').'");
      var sale_price =  $(this).attr("proprice");
      var pro_id=  $(this).attr("pro_id");
      var pro_name=  $(this).attr("pro_name");
      var pro_image=  $(this).attr("pro_image");
       var prescription_type="Contact Lenses";

        $.ajax({
                type:"POST",
                url:"'.base_url('wishframeOnly').'",
            data:{pro_id:pro_id,pro_name:pro_name,sale_price:sale_price,pro_image:pro_image,prescription_type:prescription_type},
                success:function(data){

                }
            });

    });
</script>
<script type="text/javascript">

$(document).ready(function(){

 $(".colorclick").click(function(){
     var color=  $(this).attr("color");
               $(".color_name1").attr("value", color);
 });
    $("#review").click(function(){
     var review_name= true;
      var review_email= true;
       var review_title= true;
        var review_message= true;
      var reviewname =  document.getElementById("reviewname").value;;
      var reviewemail=  document.getElementById("reviewemail").value;
      var reviewtitle= document.getElementById("reviewtitle").value;
      var reviewmessage= document.getElementById("reviewmessage").value;
      var pro_id=  document.getElementById("reviewid").value;
   if (reviewname== "") {
   document.getElementById("edName").attributes["required"] = "";
    review_name = false;
   }
    if (reviewemail== "") {
    document.getElementById("edName").attributes["required"] = "";
    review_email= false;
   }
    if (reviewmessage== "") {
   document.getElementById("edName").attributes["required"] = "";
    review_message = false;
   }
    if (reviewtitle== "") {
   document.getElementById("edName").attributes["required"] = "";
    review_title = false;
   } if(review_name ==true && review_email ==true && reviewtitle ==true){
            $.ajax({
                type:"POST",
                url:"<?php echo base_url('review'); ?>",
            data:{pro_id:pro_id,reviewname:reviewname,reviewemail:reviewemail,reviewtitle:reviewtitle,reviewmessage:reviewmessage},
                success:function(data){
                   window.location.reload();

                }
            });
}
    });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
   $(".class").click(function(){
        $(this).toggleClass("active");
        });
        });
</script>
</body>
</html>