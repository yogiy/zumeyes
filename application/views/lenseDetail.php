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
<section class="col-sm-12 clearfix proDetailsSection">
	 <?php if(@$pro_data_lense){
                	 foreach ($pro_data_lense as $key => $pro_dat) {
                	 	 $featuredimage=explode("|",$pro_dat->featuredimage);
                	 	 $pro_colors=explode("|",$pro_dat->color);
                      $procolor=$pro_dat->color;
                                                $weight=$pro_dat->weight;
                       $water_content=$pro_dat->water_content;
                        $material=$pro_dat->material;
                        $uses=$pro_dat->uses;
                       $uses_duration=$pro_dat->uses_duration;
                         $packaging=$pro_dat->packaging;
                     
                	 	 
                                     ?>
  <div class="center slider">
  	<?php foreach ($featuredimage as $key => $featuredimage) { ?>
    <div> <img src="<?php echo base_url('assets/upload/featuredimage/')?><?php echo $featuredimage?>" alt="Image1"> </div> <?php  } ?>  
  </div>
	
  <div class="row productDetails clearfix">
    <h3><?php echo $pro_dat->product_name?></h3>
    <em>$<?php echo $pro_dat->sale_price?></em><span class="mrp">$ <?php echo $pro_dat->regular_price?> </span><div class="offer"><span><?php echo $pro_dat->offer?>% Off</span></div>
    <p>Starting at $95, including prescription lenses</p>
    <div class="reviewRatingBar clearfix">
      <div class="rating clearfix"> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full active"></i> <i class="icon icon-star-full"></i> <i class="icon icon-star-full"></i> </div>
      <a href="#" class="reviewLink">99 Review</a> </div>
    <div class="shareBlock clearfix"> <span class="shareText">Share</span> <i class="icon icon-facebook"></i> <i class="icon icon-twitter"></i> <i class="icon icon-google-plus"></i> </div>
    <div class="colorBlock clearfix">
      <div class="colorList clearfix">
      	<?php foreach($pro_colors as $key => $color){ ?>
        <label>
        <div class="circle">
          <div class="color" style="background-color:<?php echo $color;?>"></div>
        </div>
        <a href="#"><?php echo $color;?></a>
        </label> 
    <?php } ?>
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
		  <form action="shoppingCart" method="post">
		 
          <div class="valueBlock clearfix" id="singleVisionContent" >
			  
			  <h3>Choose Lens Package: Single Vision</h3>
			  
               <div class="lenseAddBlock clearfix owl-carousel owl-theme">
				   <?php foreach($prescription_type as $key => $packages){
				   	if($packages->prescription_type == 'Single Vision'){
				   	?>
                  <div class="lenseBox clearfix">
					  
                  <div class="box clearfix">
					
						<div class="top clearfix">
						
							<h3><?php echo $packages->lense_name?></h3>
							<div class="priceBox clearfix">
								<span>Now Only Rs<?php echo $packages->price?></span>
								<em>Included</em>	
							</div>
							<div class="offer clearfix">
                
								<span>$100 Off</span>
								<small>use code multi100</small>
							</div>
						
						</div>
						<ul class="featureList clearfix">
						  <?php echo $packages->description?>
							
						
						</ul>
						
						<div class="button clearfix">
												
								<span>Add to Cart</span>
								<em>(Select Product)</em>							
							   <input type="radio" name="singleVision">
            
						
						</div>
					
					</div>
					  
                </div>
            <?php } } ?>
				   
                </div>
				 <form action="shoppingCart" method="post">
			  <h3>Enter Your Prescription</h3>
			
			<div class="value clearfix">
				
				<div class="bar clearfix">
				
					<label>Prescription Name</label>
          <input type="text" name="prescription_id" required value="" id="prescName" placeholder="e.g amanda octobar 2018">
          
					
					
				</div>
			
				<div class="col-sm-12 leftValue">
            		<span class="eyeText">Left Eye (OS)</span>
            		<div class="valueBar clearfix">
              	<div class="valueBox clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" list="lsphere" id="sphL" name="lsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  
                


                   <datalist id="lsphere">
                  
 <?php foreach($sphere_data as $key =>$sphere){ ?>
                     ?>


            <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option>
           <?php }  ?>
           </datalist>
         

                 
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" name="lcylinder" required="" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <select style="width:100%" name="lcylinder" >
                    <?php foreach($cylinder_data as $key =>$cylinder){ ?>
                      <option value="<?php echo $cylinder->cylinder ?>"><?php echo $cylinder->cylinder; ?></option>
         
                       <?php } ?>
                  </select>
                  </ul>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" name="laxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <select style="width: 100%" required>
                    <?php foreach($axis_data as $key =>$axis){ ?>
                      <option value="<?php echo $axis->axis; ?>"><?php echo $axis->axis; ?></option>
         
                     <?php } ?>
                </select>
                  </ul>
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
                  <input type="text" id="sphR" name="rsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <select style="width: 100%" required>
                     <?php foreach($sphere_data as $key =>$sphere){ ?>
                    <option value="<?php echo $sphere->sphere; ?>"><?php echo $sphere->sphere; ?></option> 
                    <li><a href="#"><?php echo $sphere->sphere; ?></a></li>
                  <?php } ?>
                </select>
                  </ul>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylR" name="rcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <select style="width: 100%" required>
                    <?php foreach($cylinder_data as $key =>$cylinder){ ?>
                       <option value="<?php echo $cylinder->cylinder; ?>"><?php echo $cylinder->cylinder; ?></option> 
                     <?php } ?>
                   </select>
                  </ul>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisR" name="raxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <select style="width: 100%" required>
                     <?php foreach($axis_data as $key =>$axis){ ?>
                      <option value="<?php echo  $axis->axis; ?>"><?php echo $axis->axis; ?></option>
                     <?php } ?>
                </select>
                  </ul>
                </div>
              </div>
            </div>
          </div>
			
			</div>
             <div class="buttonBlock clearfix">
  	  <input type="hidden" name="pro_name" value="<?php echo $pro_dat->product_name;?>">
  	   <input type="hidden" name="pro_image" value="<?php echo $pro_dat->pro_image;?>">
  	 <input type="hidden" name="sale_price" value="<?php echo $pro_dat->sale_price;?>">
  	 <input type="hidden" name="lense_price" value="<?php echo $pro_dat->sale_price;?>">
  	 <input type="hidden" name="id" value="<?php echo $pro_dat->id;?>">
  	
    <button class="hvr-wobble-top" type="submit" name="singleVision" value="singleVision "> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button> 
    <div class="whislistIcon"> <i class="icon icon-heart"></i> </div>
  </div>
</form>
            </div>
		  
		  <div class="valueBlock clearfix" id="bifocalContent" >
			  
			  <h3>Choose Lens Package: BiFocal </h3>
			  
               <div class="lenseAddBlock clearfix owl-carousel owl-theme">
				   <?php foreach($prescription_type as $key => $packages){
				   	if($packages->prescription_type == 'Bifocal'){
				   	?>
                  <div class="lenseBox clearfix">
					  
                  <div class="box clearfix">
					
						<div class="top clearfix">
						
							<h3><?php echo $packages->lense_name?></h3>
							<div class="priceBox clearfix">
								<span>Now Only Rs<?php echo $packages->price?></span>
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
                <input type="radio" name="bifocal">
            						
							</a>
						
						</div>
					
					</div>
					  
                </div>
            <?php } }?>
		
                </div>
				 <form action="shoppingCart" method="post">
			  <h3>Enter Your Prescription</h3>
			
			<div class="value clearfix">
				
				<div class="bar clearfix">
				
					<label>Prescription Name</label>
					 <select name="prescription_id" id="prescName">
             <?php foreach($prescription_type as $key => $packages){
            if($packages->prescription_type == 'Bifocal'){
            ?>
            <option value="<?php echo $packages->id; ?>"><?php echo $packages->lense_name; ?></option>
           <?php }  } ?>
          </select>
					
				</div>
			
				<div class="col-sm-12 leftValue clearfix">
            		<span class="eyeText">Left Eye (OS)</span>
            		<div class="valueBar clearfix">
              	<div class="valueBox valueBox1 clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" id="sphL" name="lsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                 
                  <ul class="list">
                     <?php foreach($sphere_data as $key =>$sphere){ ?>
                    <li><a href="#"><?php echo $sphere->sphere; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
              	<div class="valueBox valueBox1 clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" name="lcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                     <?php foreach($cylinder_data as $key =>$cylinder){ ?>
                    <li><a href="#"><?php echo $cylinder->cylinder; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
              	<div class="valueBox valueBox1 clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" name="laxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <?php foreach($axis_data as $key =>$axis){ ?>
                    <li><a href="#"><?php echo $axis->axis; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
						
				<div class="valueBox valueBox1 clearfix">
                <label>Add (Near addition)</label>
                <div class="field">
                  <input type="text" id="nearAddi" name="leftlnearAddi" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <?php foreach($nearaddition_data as $key =>$nearaddition){ ?>
                    <li><a href="#"><?php echo $nearaddition->nearaddition; ?></a></li>
                  <?php } ?>
                  </ul>
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
                  <input type="text" id="sphL" name="rsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                     <?php foreach($sphere_data as $key =>$sphere){ ?>
                    <li><a href="#"><?php echo $sphere->sphere; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
              	<div class="valueBox valueBox1 clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" name="rcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <?php foreach($cylinder_data as $key =>$cylinder){ ?>
                    <li><a href="#"><?php echo $cylinder->cylinder; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
              	<div class="valueBox valueBox1 clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" name="raxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                   <?php foreach($axis_data as $key =>$axis){ ?>
                    <li><a href="#"><?php echo $axis->axis; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
						
				<div class="valueBox valueBox1 clearfix">
                <label>Add (Near addition)</label>
                <div class="field">
                  <input type="text" id="nearAddi" name="rightlnearAddi" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <?php foreach($nearaddition_data as $key =>$nearaddition){ ?>
                    <li><a href="#"><?php echo $nearaddition->nearaddition; ?></a></li>
                  <?php } ?>
                  </ul>
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
                  <input type="text" id="sphL" name="pdsphere" placeholder="62">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                      <?php foreach($sphere_data as $key =>$sphere){ ?>
                    <li><a href="#"><?php echo $sphere->sphere; ?></a></li>
                  <?php } ?>
                  </ul>
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
                  <input type="text" id="sphL" name="nearpdsphere" placeholder="62">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                     <?php foreach($sphere_data as $key =>$sphere){ ?>
                    <li><a href="#"><?php echo $sphere->sphere; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
            	</div>
          		</div>
				
				<div class="textBar clearfix">
				
					<label>Additional comment about your prescription?</label>
					<textarea name="prescComment" id="prescComment" name="description" placeholder=""></textarea>
					
				</div>
			
			</div>
			 <div class="buttonBlock clearfix">
  	<input type="hidden" name="pro_name" value="<?php echo $pro_dat->product_name;?>">
       <input type="hidden" name="pro_image" value="<?php echo $pro_dat->pro_image;?>">
     <input type="hidden" name="sale_price" value="<?php echo $pro_dat->sale_price;?>">
     <input type="hidden" name="lense_price" value="<?php echo $pro_dat->sale_price;?>">
     <input type="hidden" name="id" value="<?php echo $pro_dat->id;?>">
    
  	
    <button class="hvr-wobble-top" type="submit" value="bifocal" name="bifocal"> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button> 
    <div class="whislistIcon"> <i class="icon icon-heart"></i> </div>
  </div>
            </div>
		  
		  <div class="valueBlock clearfix" id="zeroPowerContent" >
			  
			  <h3>Choose Lens Package</h3>
			  
               <div class="lenseAddBlock clearfix owl-carousel owl-theme">
				    <?php foreach($prescription_type as $key => $packages){
				   	if($packages->prescription_type == 'Zero Power'){
				   	?>
				   <div class="lenseBox clearfix ">
				
					<div class="box clearfix">
					
						<div class="top clearfix">
						
							<h3><?php echo $packages->lense_name?></h3>
							<div class="priceBox clearfix"><span>Rs<?php echo $packages->price?></span></div>
							<div class="offer clearfix">
								<span>$100 Off</span>
								<small>use code multi100</small>
							</div>
						</div>
						
						<ul class="featureList clearfix">
						<?php echo $packages->description?>
						
						</ul>
						
						<div class="button clearfix">
						
							<a href="#">							
								<span>Add to Cart</span>
								<em>(Submit power post checkout)</em>	
                <input type="radio" name="zeroPowerp">
            						
							</a>
						
						</div>
					
					</div>
				
				</div>
				
				<?php } }?>
				
				
				
				
                </div>
				  <form action="shoppingCart" method="post">
			  <h3>Enter Your Prescription</h3>
			
			<div class="value clearfix">
				
				<div class="bar clearfix">
				
					<label>Prescription Name</label>
					 <select name="prescription_id" id="prescName">
             <?php foreach($prescription_type as $key => $packages){
            if($packages->prescription_type == 'Zero Power'){
            ?>
            <option value="<?php echo $packages->id; ?>"><?php echo $packages->lense_name; ?></option>
           <?php }  } ?>
          </select>
					
				</div>
			
				<div class="col-sm-12 leftValue">
            		<span class="eyeText">Left Eye (OS)</span>
            		<div class="valueBar clearfix">
              	<div class="valueBox clearfix">
                <label>Sphere (SPH)</label>
                <div class="field">
                  <input type="text" id="sphL" name="lsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  
                  <ul class="list">
                     <?php foreach($sphere_data as $key =>$sphere){ ?>
                    <li><a href="#"><?php echo $sphere->sphere; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylL" name="lcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <?php foreach($cylinder_data as $key =>$cylinder){ ?>
                    <li><a href="#"><?php echo $cylinder->cylinder; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisL" name="laxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <?php foreach($axis_data as $key =>$axis){ ?>
                    <li><a href="#"><?php echo $axis->axis; ?></a></li>
                  <?php } ?>
                  </ul>
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
                  <input type="text" id="sphR" name="rsphere" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <?php foreach($sphere_data as $key =>$sphere){ ?>
                    <li><a href="#"><?php echo $sphere->sphere; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Cylinder(CYL)</label>
                <div class="field">
                  <input type="text" id="cylR" name="rcylinder" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <?php foreach($cylinder_data as $key =>$cylinder){ ?>
                    <li><a href="#"><?php echo $cylinder->cylinder; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
              <div class="valueBox clearfix">
                <label>Axis</label>
                <div class="field">
                  <input type="text" id="axisR" name="raxis" placeholder="0.00">
                  <i class="icon icon-angle-down"></i>
                  <ul class="list">
                    <?php foreach($axis_data as $key =>$axis){ ?>
                    <li><a href="#"><?php echo $axis->axis; ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
			
			</div>
			 <div class="buttonBlock clearfix">
  	<input type="hidden" name="pro_name" value="<?php echo $pro_dat->product_name;?>">
       <input type="hidden" name="pro_image" value="<?php echo $pro_dat->pro_image;?>">
     <input type="hidden" name="sale_price" value="<?php echo $pro_dat->sale_price;?>">
     <input type="hidden" name="lense_price" value="<?php echo $pro_dat->sale_price;?>">
     <input type="hidden" name="id" value="<?php echo $pro_dat->id;?>">
     <div class="buttonBlock clearfix">
  	
    <button class="hvr-wobble-top" type="submit" value="zeroPower" name="zeroPower"> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button> 
    <div class="whislistIcon"> <i class="icon icon-heart"></i> </div>
  </div>
            </div>
		  
      </div>

          <div class="valueBlock clearfix" id="frameContent" >             
         <form action="shoppingCart" method="post">
      
             <div class="buttonBlock clearfix">
      <input type="hidden" name="pro_name" value="<?php echo $pro_dat->product_name;?>">
       <input type="hidden" name="pro_image" value="<?php echo $pro_dat->pro_image;?>">
     <input type="hidden" name="sale_price" value="<?php echo $pro_dat->sale_price;?>">
     <input type="hidden" name="lense_price" value="<?php echo $pro_dat->sale_price;?>">
     <input type="hidden" name="id" value="<?php echo $pro_dat->id;?>">
    
    <button class="hvr-wobble-top" type="submit" name="frameOnly" value="frameOnly "> <i class="icon icon-shopping-cart"></i> <span>Add to Cart</span> </button> 
    <div class="whislistIcon"><i class="icon icon-heart"></i> </div>
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
              <li>Brand: <em><?php 
      
           echo $brand ; ?></em> </li>
              <li>Water Content: <em><?php 
      
           echo $water_content ; ?></em> </li>
              <li>Lens Material: <em><?php 
      
           echo $material ; ?></em> </li>
              <li>Lens Type: <em><?php 
      
           echo $uses ; ?></em> </li>
              <li>Usage Duration: <em><?php 
      
           echo $uses_duration ; ?></em> </li>
              <li>Packaging: <em><?php 
      
           echo $packaging ; ?></em> </li>
            </ul>
          <?php } ?>
          </div>
        </div>
        <div class="tabContent clearfix">
         <?php echo $description; } }?>
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
      <?php foreach($related as $key =>$relate){
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
          <div class="itemImg"> <a href="<?php echo site_url('productDetails');?>?id=<?php echo $relate->id?>"> <img src="<?php echo base_url('assets/upload/product/')?><?php echo str_replace(" ", '_',$relate->pro_image) ?>" alt="Frame"> </a> </div>
          <div class="itemBottom">
            <h3> <a class="productName" href="#"><?php echo $relate->product_name?></a> </h3>
            <div class="priceBox"> <span>Rs <?php echo $relate->sale_price?></span> </div>
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
	

	
<?php include('footer.php');?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.js');?>"></script>
<script src="<?php echo base_url('assets/js/script.js');?>"></script>
<script src="<?php echo base_url('assets/js/slick.js');?>"></script>
<script type="text/javascript">
		
	</script>
</body>
</html>