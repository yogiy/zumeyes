<header id="header">
		<div class="container-fluid">
			<div class="logo">
				<a href="<?php echo site_url();?>">
					<img src="<?php echo base_url('assets/images/logo.png')?>" alt="Zumeyes Logo">
				</a>
			</div>

			<div class="menu">

				<ul class="parent clearfix">
                  <?php   if($cat_data)
                         {
               foreach ($cat_data as $key => $cat_dat) {
                         ?>
					<li>
						<a href="#"><?php echo $cat_dat->cat_name?></a>

						<ul class="child clearfix">
                         <?php foreach ($subcat_data as $key => $subcat_dat) {
                         	if($cat_dat->id == $subcat_dat->cat_name  && empty($subcat_dat->sub_sub_cat)){
                        ?>
							<li>
								
								<a href="<?php echo site_url('productList')?>?id=<?php echo $subcat_dat->id?>" class="bgLink meneyeG" style="background-image: url(<?php echo base_url('assets/upload/')?><?php echo $subcat_dat->bg_image?>)">
									<span><?php echo $subcat_dat->sub_cat_name?></span>
								</a>
							
							</li>
						<?php } }  ?>
							
                      
						</ul>

					</li>
				<?php } }?>
				</ul>

			</div>

			<div class="toggle-btn" onclick="toggleSidebar(this);">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="sidebar" id="sidebar">

				<ul class="parent clearfix">

					<li id="eyesideMenu">
						<a  href="#">Eyeglasses</a>

						<ul id="closeEyesideMenu" class="child clearfix">
							<div class="icon icon-chevron-left"></div>
							<li>

								<a href="<?php echo site_url('productList');?>" class="bgLink meneyeG">
									<span>Shop Men</span>
								</a>
							</li>
							<li>
								<a href="<?php echo site_url('productList');?>" class="bgLink womeneyeG">
									<span>Shop Women</span>
								</a>
							</li>

						</ul>

					</li>

					<li id="sunsideMenu" >
						<a href="#">Sunglasses</a>

						<ul id="closeSunsideMenu" class="child clearfix">
							<div class="icon icon-chevron-left"></div>
							<li>
								<a href="sunglassesMen.html" class="bgLink mensunG">
									<span>Shop Men</span>
								</a>
							</li>
							<li>
								<a href="sunglassesWomen.html" class="bgLink womensunG">
									<span>Shop Women</span>
								</a>
							</li>

						</ul>

					</li>

					<li id="lensesideMenu" >
						<a href="#">Contact Lenses</a>

						<ul id="closeLensesideMenu" class="child clearfix">
							<div class="icon icon-chevron-left"></div>
							<li>
								<a href="contactLenses.html" class="bgLink contactLenses">
									<span>Contact Lenses</span>
								</a>
							</li>
							<li>
								<a href="lensAccessories.html" class="bgLink lensesAccess">
									<span>Accessories</span>
								</a>
							</li>

						</ul>
					</li>

					<li>
						<a href="#">Locations</a>
					</li>

				</ul>

			</div>

			<div class="overlay" id="overlay"></div>

			<div class="multiSection clearfix">

				<div class="search clearfix">

					<form method="get">

						<input type="search" name="search" id="search" placeholder="search">
						<div id="searchIcon" class="icon">
							<i class="icon-search"></i>
						</div>



					</form>

				</div>

				<div class="cart">
					<a href="<?php echo base_url('shoppingCart')?>">
					<i class="icon-shopping-bag"></i>
					<div class="countCircle clearfix"><span>
						<?php if($this->cart->contents()) { 
						
           $i = 1; $total_product=0;
           foreach ($this->cart->contents() as $items){
           echo form_hidden($i.'[rowid]', $items['rowid']); 
		  	
        $total_product++; 

          }
           echo $total_product; } else{ ?>0<?php } ?>
				</span></div></a>
				</div>

				<div class="userControl clearfix">

					<div class="icon">
						<i class="icon-user"></i>
					</div>
					<?php if($this->session->userdata('isUserLoggedIn')==TRUE &&
        $this->session->userdata('userId')) { ?>
					

					<div class="userDrop1">

						<div class="head">
							<span><?php echo $this->session->userdata('user_name'); ?></span>
							<a href="#"><?php echo $this->session->userdata('user_email'); ?></a>
						</div>

						<ul class="userActionList">
 
							<li>
								<a href="<?php echo base_url('myAccount')?>">My Account</a>
							</li>
							<li>
								<a href="">My Order</a>
							</li>
							<li>
								<a href="<?php echo base_url('myAccount')?>">My Wishlist</a>
							</li>
							<li>
								<a href="">Rewards</a>
							</li>
							<li>
								<a href="<?php echo base_url('logout')?>">Logout</a>
							</li>
							

						</ul>

					</div>
					<?php } elseif($this->session->userdata('guest')) {
						?><a href="#" class="signIn">GuestUser</a>
				<?php	} else { ?>
				
						<a href="<?php echo base_url('login_and_registration')?>" class="signIn">Sign In</a>
				<?php	} ?>

				</div>

			</div>

		</div>
		<div id="hidenSearchField" class="hideField">
			<input type="search" name="search" id="search" placeholder="search">
		</div>
	</header>
