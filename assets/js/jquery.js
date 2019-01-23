<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Nuleaf</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="images/favicon.png" type="images/x-icon">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="slider/slider.js"></script>
	<link href="slider/slider.css" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet" type="text/css">
	<link href="style/font.css" rel="stylesheet" type="text/css">
	<link href="style/bootstrap.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>

<body>

	<header class="clearfix">

		<div class="head">

			<div class="logo">
				<img src="images/logo.png" alt="Nuleaf Logo">
			</div>
			<nav class="mainNav">
				<ul class="clearfix">
				<li class="activeLink"> <a href="index.html">Home</a></li>
				<li> <a href="about.html">About Us</a></li>
				<li> <a href="#">Services</a></li>
				<li> <a href="#">Industry</a></li>
				<li> <a href="contact.html">Contact us</a></li>
			</ul>

			</nav>
			<div class="toggle-btn" onclick="toggleSidebar(this);">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="sidebar" id="sidebar">
				<ul class="item">
					<li class="activeLink"> <a href="index.html">Home</a></li>
					<li> <a href="about.html">About Us</a></li>
					<li> <a href="#">Services</a></li>
					<li> <a href="#">Industry</a></li>
					<li> <a href="contact.html">Contact us</a></li>
				</ul>
			</div>
			<div class="overlay" id="overlay"></div>

		</div>


		<div id="banner" class="bannerSection clearfix">
			<div id="myCarousel" class="carousel slide">
				
				<!-- Wrapper for Slides -->
				<div class="carousel-inner">

					<div class="item active">
						<div class="mask"></div>
						<div class="fill" style="background-image: url(images/banner1.jpg)"></div>
						<div class="carousel-caption">
							<h2>Full of Freshness!</h2>
						</div>
					</div>
					<div class="item">
						<div class="mask"></div>
						<div class="fill" style="background-image: url(images/banner2.jpg)"></div>
						<div class="carousel-caption">
							<h2>Direct from the Farm</h2>
						</div>
					</div>
					<div class="item">
						<div class="mask"></div>
						<div class="fill" style="background-image: url(images/banner3.jpg)"></div>
						<div class="carousel-caption">
							<h2>Ripe and Ready Specialists</h2>
						</div>
					</div>
					<div class="item">
						<div class="mask"></div>
						<div class="fill" style="background-image: url(images/banner4.jpg)"></div>
						<div class="carousel-caption">
							<h2>Farm Fresh Produce</h2>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<div class="icon">
						<span class="icon-prev"></span>
					</div>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<div class="icon">
						<span class="icon-next"></span>
					</div>
				</a>
			</div>
		</div>

	</header>

	<section class="col-sm-12 socialCSection clearfix">

		<div class="container-fluid">

			<h2 class="corners">Social Connet</h2>
			<p class="punchLine">Be sure to like our Social Pages !</p>

			<div class="row bar clearfix">

				<div class="col-sm-4 socialBox">

					<div class="imgCircle">
						<img src="images/socialImg1.jpg" alt="Socail Image">
					</div>
					<div class="socialNameCircle fb clearfix">
						<i class="icon icon-facebook"></i>
					</div>

				</div>
				<div class="col-sm-4 socialBox">

					<div class="imgCircle">
						<img src="images/socialImg2.jpg" alt="Socail Image">
					</div>
					<div class="socialNameCircle clearfix instagram">
						<i class="icon icon-instagram-logo"></i>
					</div>

				</div>
				<div class="col-sm-4 socialBox">

					<div class="imgCircle">
						<img src="images/socialImg3.jpg" alt="Socail Image">
					</div>
					<div class="socialNameCircle clearfix google">
						<i class="icon icon-google-plus"></i>
					</div>

				</div>


			</div>

		</div>

	</section>

	<section class="col-sm-12 categorySection clearfix">

		<div class="container-fluid">

			<h2 class="corners">Categories</h2>
			<p class="punchLine">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
				dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
				book.</p>

			<div class="row bar category slider clearfix">

				<div class="col-sm-3 box">
					<a href="bananaCateg.html">
					
						<div class="catgImg">
							<img src="images/bananaImg.png" alt="Banana">
						</div>
						<h3>Banana</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
						<div class="availabilityBox available">Available</div>
					
					</a>
					

				</div>
				<div class="col-sm-3 box">

					<div class="catgImg">
						<img src="images/avocadoImg.png" alt="Avocado">
					</div>
					<h3>Avocado</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
					<div class="availabilityBox available">Available</div>

				</div>
				<div class="col-sm-3 box">

					<div class="catgImg">
						<img src="images/citrusImg.png" alt="Citrus">
					</div>
					<h3>Citrus</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
					<div class="availabilityBox notAvailable">Not Available</div>

				</div>

				<div class="col-sm-3 box">

					<div class="catgImg">
						<img src="images/mangoImg.png" alt="Mango">
					</div>
					<h3>Mango</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
					<div class="availabilityBox available">Available</div>

				</div>

				<div class="col-sm-3 box">

					<div class="catgImg">
						<img src="images/citrusImg.png" alt="Citrus">
					</div>
					<h3>Citrus</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
					<div class="availabilityBox notAvailable">Not Available</div>

				</div>

			</div>
			<div class="row navigationBar clearfix">

				<div class="prevCircle">
					<i class="icon-chevron-left"></i>
				</div>
				<div class="nextCircle">
					<i class="icon-chevron-right"></i>
				</div>

			</div>

		</div>

	</section>

	<section class="col-sm-12 introSection clearfix">

		<div class="container-fluid">

			<div class="col-sm-5 introContent clearfix">

				<h2 class="intro">Company Introduction</h2>
				<p>Nu Leaf is a dynamic company that supplies fresh produce nationally to the major retailers on a daily basis. We specialise
					in the supply of sub-tropical fruits. We are also suppliers of cut flowers to the major national retail companies.</p>
				<p>Nu Leaf offers a unique service to both pour clients and producers alike using our ?whole tree concept?: through connecting
					one with the other, Nu Leaf sources fresh produce for retail distribution, wholesaling, processing as well as securing
					direct supply programmes for our agricultural operations and suppliers, the majority of whom are Eurogap/Globalgap accredited.
				</p>
				<button>read more</button>

			</div>
			<div class="col-sm-7 introImg clearfix">
				<img src="images/introImg.png" alt="Intro Image">
			</div>

		</div>

	</section>

	<section class="col-sm-12 companyInfoSection clearfix">

		<div class="col-sm-4 box ourHistory">

			<div class="mask"></div>
			<div class="icon">
				<i class="icon-history-clock-button"></i>
			</div>
			<h3>Our History</h3>
			<p>Nu Leaf is a dynamic company that supplies fresh produce nationally to the major retailers on a daily basis. We specialise
				in the supply of sub-tropical/tropical fruits and vegetables.</p>
			<button>read more</button>

		</div>
		<div class="col-sm-4 box ourMission">

			<div class="mask"></div>
			<div class="icon">
				<i class="icon-target"></i>
			</div>
			<h3>Our Mission</h3>
			<p>Our primary strength lies in the A-Team that we have skillfully constructed, where each member of our procurement team
				has spent a lifetime building relationships within the industry.</p>
			<button>read more</button>

		</div>
		<div class="col-sm-4 box msg">

			<div class="mask"></div>
			<div class="icon">
				<i class="icon-male-silhouette-talking"></i>
			</div>
			<h3>CEO Message</h3>
			<p>Nu Leaf is a dynamic company that supplies fresh produce nationally to the major retailers on a daily basis. We specialise
				in the supply of sub-tropical/tropical fruits and vegetables.</p>
			<button>read more</button>

		</div>

	</section>

	<section class="col-sm-12 serviceSection clearfix">

		<div class="container-fluid">

			<h2 class="corners">Services</h2>
			<p class="punchLine">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
				dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
				book.</p>

			<div class="row bar clearfix">

				<div class="col-sm-4 serviceBox">

					<div class="box clearfix">

						<div class="img">
							<img src="images/areasServiceImg.jpg" alt="Area Service">
						</div>
						<h3>Areas Service</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>

					</div>

				</div>
				<div class="col-sm-4 serviceBox">

					<div class="box clearfix">

						<div class="img">
							<img src="images/ripeningFacilitiesImg.jpg" alt="Ripening Facilities Service">
						</div>
						<h3>Ripening Facilities</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>

					</div>

				</div>
				<div class="col-sm-4 serviceBox">

					<div class="box clearfix">

						<div class="img">
							<img src="images/coldChainManageImg.jpg" alt="Cold Chain Management Service">
						</div>
						<h3>Cold Chain Management</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>

					</div>

				</div>


			</div>
			<div class="row bar centerDiv clearfix">

				<div class="col-sm-4 serviceBox">

					<div class="box clearfix">

						<div class="img">
							<img src="images/qualityAssuranceImg.jpg" alt="Quality Assurance Service">
						</div>
						<h3>Quality Assurance</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>

					</div>

				</div>
				<div class="col-sm-4 serviceBox">

					<div class="box clearfix">

						<div class="img">
							<img src="images/coldStorageUnitsImg.jpg" alt="Cold Storage Units Service">
						</div>
						<h3>Cold Storage Units</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>

					</div>

				</div>

			</div>

		</div>

	</section>

	<footer class="col-sm-12 clearfix">

		<div class="row contentBar clearfix">

			<div class="col-sm-5 queryFormSection">

				<h2>Contact Us</h2>
				<p>Don’t go just by what we say. Try us for once, for we much value the opportunity.</p>

				<div class="formBlock clearfix">

					<div class="field">
						<input type="text" name="Name" placeholder="Name" id="name" required>
					</div>
					<div class="field">
						<input type="text" name="email" placeholder="Email" id="email" required>
					</div>
					<div class="field">
						<textarea name="message" placeholder="Message" id="message"></textarea>
					</div>
					<button>Submit your query</button>
				</div>

			</div>

			<div class="col-sm-7 footerContent">

				<div class="bar clearfix">

					<div class="col-sm-6 linksBlock">

						<h2>Usefull Links</h2>
						<div class="double-line mb-30"></div>
						<ul class="bottomLinks">

							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">About Us</a>
							</li>
							<li>
								<a href="#">Categories</a>
							</li>
							<li>
								<a href="#">Services</a>
							</li>
							<li>
								<a href="#">Contact Us</a>
							</li>

						</ul>

					</div>

					<div class="col-sm-6 linksBlock">

						<h2>Quick Links</h2>
						<div class="double-line mb-30"></div>
						<ul class="bottomLinks">

							<li>
								<a href="#">Site Map</a>
							</li>
							<li>
								<a href="#">Terms & Conditions</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>

						</ul>

					</div>

				</div>

				<div class="bar clearfix">

					<div class="col-sm-12 linksBlock">

						<h2>Social Media Links</h2>
						<div class="double-line mb-30"></div>
						<div class="socialBottom clearfix">

							<div class="socialIcon">
								<i class="icon-facebook"></i>
							</div>
							<div class="socialIcon">
								<i class="icon-instagram-logo"></i>
							</div>
							<div class="socialIcon">
								<i class="icon-google-plus"></i>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		<div class="row clearfix copyrightBlock">

			<p>©2018 NU LEAF BRANDS. All Rights Reserved.</p>

		</div>


	</footer>


	<script>
		$('.carousel').carousel({
			interval: 3000 //changes the speed
		})
	</script>
</body>

</html>
</html>