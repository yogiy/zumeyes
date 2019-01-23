<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>
	<link href="<?php echo base_url();?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/styles/font.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>/assets/js/slider/slider.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url();?>/assets/js/slider/slider.js"></script>
	<script src="<?php echo base_url();?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	</head>

<body>

	<?php include('header.php');?>
	<div class="innerBanner clearfix">

		<img src="<?php echo base_url('assets/images/banner2.jpg')?>" alt="Banner">

	</div>

	<section class="col-sm-12 productListSection clearfix">
		
		<div id="stick-here"></div>

		<div class="col-sm-12 filterSection clearfix" id="filter">
			
			<div class="bar clearfix filterHeading" id="slideFilterTab">

					<i class="icon icon-filter"></i>
					<a href="#">Filter</a>

			</div>
			
			<div class="filterNameList clearfix">
				
				<div class="box clearfix" id="colorFilter">
				
					<div class="filterName clearfix">

					<span>Color</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>
				
				</div>
				
				<div class="box clearfix" id="shapeFilter">
					
					<div class="filterName clearfix">

					<span>Shape</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>
				
				</div>
				
				<div class="box clearfix" id="materialFilter">
				
					<div class="filterName clearfix">

					<span>Material</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>
				
				</div>
				
				<div class="box clearfix" id="fitFilter">
				
					<div class="filterName clearfix">

					<span>Fit</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;" ></i>

					</div>
				
				</div>
				
				<div class="box clearfix" id="purposeFilter">
				
					<div class="filterName clearfix">

					<span>Purpose</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;" ></i>

					</div>
				
				</div>
				
				<div class="box clearfix" id="brandFilter">
				
					<div class="filterName clearfix">

					<span>Brands</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>
				
				</div>
				
				
			
			</div>
			
			<div class="filterContainer clearfix">
              
			<div class="bar clearfix" id="colorFilterContent">
				
					<div class="filterList clearfix" style="display: none;">
            <?php foreach ($color_name as $key => $color_dat) {?>
           					<label>
						
						<div class="circle">
							<div class="color" style="background: <?php echo $color_dat->color_name;?>"></div>
						</div>
						
						<div class="select"></div>
						<input id="color" value="<?php echo $color_dat->color_name;?>" class="checkbox-custom color"  type="checkbox">
						<?php echo $color_dat->color_name;?>
					
					</label>
					
				<?php }?>
					
				</div>
				
				</div>
				
				<div class="bar clearfix" id="shapeFilterContent">
				
					<div class="filterList clearfix" style="display: none;">
                    <?php foreach ($shape_name as $key => $shape_dat) {?>	
                      			
					<label>
						
						<input id="shapeBrowline" value="<?php echo $shape_dat->shape_type;?>" class="checkbox-custom shape"  type="checkbox">
                      <span for="shapeBrowline" class="checkbox-custom-label"></span>
						<?php echo $shape_dat->shape_type;?>
					</label>
				<?php }?>
					
				</div>
				
				</div>				
				
				<div class="bar clearfix" id="materialFilterContent">
				
					<div class="filterList clearfix" style="display: none;">
                <?php foreach ($material_name as $key => $material_dat) {?>
                	
					<label>
						
						<input id="material1" value="<?php echo $material_dat->material_name; ?>" class="checkbox-custom material" type="checkbox">
						<span for="material1" class="checkbox-custom-label"></span>
						<?php echo $material_dat->material_name;?>
					</label>
					<?php }?>
					
				</div>
				
				</div>				
				
				<div class="bar clearfix" id="fitFilterContent">
				
					<div class="filterList clearfix" style="display: none;">
                     <?php foreach ($fit_name as $key => $fit_dat) {?>
                     	
					<label>
						
						<input id="fit1" class="checkbox-custom fit" value="<?php echo $fit_dat->fit_name;?>" type="checkbox">
						<span for="fit1" class="checkbox-custom-label"></span>
						<?php echo $fit_dat->fit_name;?>
					</label>
				<?php }?>
				</div>				
				</div>				
				
				<div class="bar clearfix" id="purposeFilterContent">
				
					<div class="filterList clearfix" style="display: none;">
                  <?php foreach ($purpose_name as $key => $purpose_dat) {?>
                  	
					<label>
						<input id="purWork" class="checkbox-custom purposes" value="<?php echo $purpose_dat->purpose_name;?>" type="checkbox">
						<span for="purWork" class="checkbox-custom-label"></span>
						<?php echo $purpose_dat->purpose_name;?>
					</label>
				<?php }?>
					

				</div>
				
				</div>			
				
					<div class="bar clearfix" id="brandFilterContent">
					
					<div class="filterList clearfix" style="display: none;">
                     <?php foreach ($brand_name as $key => $brand_dat) {?>
                     	
					<label>	
						<input id="brand1" class="checkbox-custom brand1" value="<?php echo $brand_dat->brand_name;?>" type="checkbox">
						<span for="brand1" class="checkbox-custom-label"></span>
					<?php echo $brand_dat->brand_name;?>
					</label>
				<?php }?>					

				</div>
			</div>
			
			<div class="filterBottom clearfix">
				
				<div class="bar clearfix">

					<span>Search Result -
						<em>125</em>
					</span>

					<div class="topFilter clearfix">

						<div class="fieldBar clearfix">

							<label>By Prize</label>
							<div class="field">
								<select id="byPrize"><i class="icon icon-angle-down"></i>
									<option>Low Prize</option>
									<option>High Prize</option>
									<option>Low to High Prize</option>
									4<option>High to Low Prize</option>
								</select>
								
							</div>

						</div>
						<div class="fieldBar clearfix">

							<label>Sort By</label>
							<div class="field">
								<input type="text" id="sortBy" placeholder="Popular Item">
								<i class="icon icon-angle-down"></i>
								<ul class="list">

									<li>
										<a href="#">Newest Items</a>
									</li>
									<li>
										<a href="#">Popular Itmes</a>
									</li>

								</ul>
							</div>

						</div>

					</div>

				</div>

				

			</div>

		</div>
		
		<div class="filterOverlay" id="filterOverlay"></div>
		
		<div class="col-sm-12 productList clearfix">
			
			<div class="col-sm-12 products">
    
				<div class="row probar clearfix filter_data">
               <div id="loading" style="" ></div>
					

				</div>


			</div>

		</div>
<div align="center" id="pagination_link"></div>
	</section>

	
		<input type="hidden" id="pageid" value="<?php echo @$page_id; ?>">
		<input type="hidden" id="sid" value="<?php echo @$sid; ?>">
<?php include('footer.php');?>
</body>
<script src="<?php echo base_url('assets/js/script.js');?>">
</script>
<style>
#loading
{
 text-align:center; 
 background: url('http://demo.webslesson.info/codeigniter-demo/asset/loader.gif') no-repeat center; 
 height: 150px;
}
</style>
<script type="text/javascript">
		$(document).ready(function(){
			
			filter_data(1);
            
			function filter_data(page){
				 $('.filter_data').html('<div id="loading" style="" ></div>');
			var action ='fetch_data';
			var brand=get_filter('brand1');	
			var purpose=get_filter('purposes');	
			var fit=get_filter('fit');
			var color=get_filter('color');
			var material=get_filter('material');		
			var shape=get_filter('shape');
			var id =document.getElementById("pageid").value;
			var sid =document.getElementById("sid").value;
			var byPrize =document.getElementById("byPrize").value;
		   
			$.ajax({
				type:"POST",
				url:"<?php echo base_url('fetch_data')?>",								
				data:{id:id,action:action,brand:brand,color:color,material:material,shape:shape,fit:fit,purpose:purpose,byPrize:byPrize,sid:sid},
				success:function(data){
					$('.filter_data').html(data);

				}
			})
			}

			function get_filter(class_name){
            var filter1 = [];
            $('.'+class_name+':checked').each(function(i){
            filter1[i]=$(this).val();
            });
			
			return filter1;
		}
		$('.checkbox-custom').click(function(){
        filter_data(1);
    });
		

		});
	</script>
	
</html>