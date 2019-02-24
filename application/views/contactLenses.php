<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes Contact Lenses</title>
	<?php include 'head.php';?>
</head>

<body>

	<?php include 'header.php';?>

	<div class="innerBanner clearfix">

		<img src="<?php echo base_url('assets/images/banner2.jpg') ?>" alt="Banner">

	</div>

	<section class="col-sm-12 productListSection clearfix">

		<div id="stick-here"></div>

		<div class="col-sm-12 filterSection clearfix" id="filter">

			<div class="bar clearfix filterHeading" id="slideFilterTab">

					<i class="icon icon-filter"></i>
					<a href="#">Filter</a>

			</div>

			<div class="filterNameList clearfix">

				<div class="box clearfix" id="brandFilter">

					<div class="filterName clearfix">

					<span>Brands</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>

				</div>

				<div class="box clearfix" id="lenseTypeFilter">

					<div class="filterName clearfix">

					<span>Contact Lense Type</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>

				</div>

				<div class="box clearfix" id="colorFilter">

					<div class="filterName clearfix">

					<span>Color</span>
					<i class="icon icon-minus-symbol" id="minus" style="display: none;"></i>
					<i class="icon icon-plus-button" id="plus" style="display: block;"></i>

					</div>

				</div>

			</div>

			<div class="filterContainer clearfix">
 <div class="bar clearfix" id="brandFilterContent">

					<div class="filterList clearfix" style="display: none;">
                     <?php foreach ($brand_name as $key => $brand_dat) {?>

					<label>
						<input id="brand1" class="checkbox-custom brand1" value="<?php echo $brand_dat->brand_name; ?>" type="checkbox">
						<span for="brand1" class="checkbox-custom-label"></span>
					<?php echo $brand_dat->brand_name; ?>
					</label>
				<?php }?>

				</div>
			</div>



				<div class="bar clearfix" id="lenseTypeFilterContent">

					<div class="filterList clearfix" style="display: none;">

					<?php foreach ($lense_uses as $key => $lense_usess) {?>
					<label>
						<input id="lense_uses" class="checkbox-custom lense_uses" name="uses" type="checkbox" value="<?php echo $lense_usess->uses; ?>">
						<span for="brand1" class="checkbox-custom-label"></span>
						<?php echo $lense_usess->uses; ?>
					</label>
				<?php }?>

				</div>

				</div>

				<div class="bar clearfix" id="colorFilterContent">

					<div class="filterList clearfix" style="display: none;">
         <?php foreach ($color_name as $key => $color_dat) {?>
           					<label>




						<input id="color" value="<?php echo $color_dat->color_name; ?>" class="checkbox-custom color"  type="checkbox">
						<span for="brand1" class="checkbox-custom-label"><?php echo $color_dat->color_name; ?>&nbsp&nbsp
					</span>
						<div class="circle">
							<div class="color" style="background: <?php echo $color_dat->color_name; ?>"></div>
						</div>
					</label>

				<?php }?>

				</div>

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
								<input type="text" id="byPrize"  list="Prize" placeholder="Popular Item">
								<i class="icon icon-angle-down"></i>
								<datalist id="Prize">
									<option value="l">Low Prize</option>
									<option value="h">High Prize</option>
				     	<option value="l_to_h">Low to High Prize</option>
						<option value="h_to_l">High to Low Prize</option>
								</datalist>

							</div>

						</div>
						<div class="fieldBar clearfix">

							<label>Sort By</label>
							 <div class="field">
                  <input type="text" id="shortby" list="popular" name="popular" placeholder="Popular Item">
                  <i class="icon icon-angle-down"></i>
                  <datalist id="popular">
                     <option value="Newest">
										Newest Items
									</option>
									<option value="popular">
										Popular Itmes
									</option>
                  </datalist>
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


		<input type="hidden" id="pageid" value="<?php echo $this->session->userdata('lense_page'); ?>">
		<input type="hidden" id="sid" value="<?php echo $this->session->userdata('last_subid'); ?>">
<?php include 'footer.php';?>
</body>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<style>
#loading
{
 text-align:center;
 background: url('assets/images/loader.gif') no-repeat center;
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
			var lense_uses=get_filter('lense_uses');

			var color=get_filter('color');

			var id =document.getElementById("pageid").value;
			var sid =document.getElementById("sid").value;
			var byPrize =document.getElementById("byPrize").value;
		   var  shortby =document.getElementById("shortby").value;

			$.ajax({
				type:"POST",
				url:"<?php echo base_url('fetch_lensedata') ?>",
				data:{id:id,action:action,brand:brand,color:color,lense_uses:lense_uses,byPrize:byPrize,shortby:shortby,sid:sid},
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
		$('#byPrize').change(function(){
        filter_data(1);
    });
		$('#shortby').change(function(){
        filter_data(1);
    });


		});
	</script>

</html>