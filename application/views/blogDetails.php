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
	<?php foreach($blog_data as $key => $blog){
		?>
	<div id="banner" class="innerBanner clearfix">
		<div class="blogImg">
			<img src="<?php echo base_url('assets/upload/blog/')?><?php echo $blog->image; ?>" alt="Blog1">
		</div>
	</div>	
	<section class="blogDetailsSection clearfix">
		
		<div class="container">
		
		<h2><?php echo $blog->title; ?></h2>
		
		<div class="blogInfoBar clearfix">
			<span>Posted on <?php echo $blog->date; ?></span>
			<div class="shareBar">
				<small>share on :</small>
				<i class="icon icon-facebook"></i>
				<i class="icon icon-twitter"></i>
				<i class="icon icon-linkedin"></i>
				<i class="icon icon-google-plus"></i>
			</div>
		</div>
		
		<div class="blogContent clearfix">
		     <?php echo $blog->description; } ?>
			<p>We’re definitely enjoying summer but after another great school year with Pupils Project, we’re looking forward to the next one. Pupils Project has come a long way but first, to bring you up to speed</p>
			
			<p>A few years ago, as part of our Buy a Pair, Give a Pair program, we created Pupils Project, our program with a number of organizations and local government agencies in New York City and Baltimore that provides free vision screenings, eye exams, and glasses to kids who need them the most. The American Optometric Association estimates that 80% of childhood learning occurs visually so it’s crucial to address vision problems as early as possible.</p>
			
			<p>Pupils Project works to eliminate any financial and logistical hurdles that get in the way of obtaining vision care. Our partners administer vision screenings and eye exams in the children’s classrooms (where vision issues are often first spotted by teachers) and we provide the glasses, which each student handpicks in trunk show setup at school. For many kids, this is their first pair of glasses.</p>
			
			<p>In 2015, we began a four-year partnership with the City of New York, Department of Education, and the Office of School Health in which we provide school-based vision help to students enrolled in Community Schools. So far, over 46,000 pairs of glasses have been given to students in need. It’s a start but we estimate that of the 1.1 million students enrolled in New York City schools, over 200,000 of them lack the glasses they need to learn.</p>
			
			<div class="imgBar clearfix">
				
				<img src="<?php echo base_url('assets/images/blog_1_1.jpg')?>" alt="Image 1">
								
			</div>
			
			<p>In 2016, we kicked off Vision for Baltimore, a three-year partnership with the City of Baltimore, Baltimore City Health Department, and Vision to Learn, that reaches all students in 150 elementary and middle public schools throughout the city. (This part is especially cool: Johns Hopkins University is conducting a longitudinal study to better understand the correlation between the intervention of vision treatment and reading scores and the benefits of ensuring access to glasses for children in urban settings. Johns Hopkins will publish their findings with the hopes of influencing public policy at a federal level, and to ensure that glasses are within reach of any child who needs them.)</p>
			
			<p>Since starting Pupils Project, we’ve seen firsthand how big this issue is to solve. But in the 2018–2019 school year, Pupils Project will be in over 250 (!) schools in New York City and we estimate that over 30,000 (!) pairs of glasses will be given out in both New York City and Baltimore. Onward!</p>
		
		</div>
			
		</div>
		
	</section>
	
	<section class="commentSection clearfix">
		
		<div class="container">
			
			<h2>2 comments</h2>
			
			<div class="commentBar clearfix">
		
			<div class="userInfo clearfix">
				<div class="userImg"><i class="icon icon-user"></i></div>
				<span>Narinder Singh</span>
			</div>
			<div class="userComment clearfix">
				<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			</div>
			
		</div>
			
			<div class="commentBar clearfix">
		
			<div class="userInfo clearfix">
				<div class="userImg"><i class="icon icon-user"></i></div>
				<span>Yogesh Yadav</span>
			</div>
			<div class="userComment clearfix">
				<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
			</div>
			
			</div>
			
			<div class="leaveCommentBlock clearfix">
			
				<h2>Leave your comments</h2>
				
				<div class="formDetails clearfix">
					<div class="field">
						<textarea name="comment" id="comment" placeholder="Write your comments..."></textarea>
					</div>
					<div class="bar clearfix">
						<div class="fieldBar clearfix">
							<input type="text" name="uname" id="uname" placeholder="Name">
						</div>
						<div class="fieldBar clearfix">
							<input type="text" name="uemail" id="uemail" placeholder="Email">
						</div>
					</div>
					<button>Post Comment</button>
				</div>
			
			</div>
			
		</div>
	</section>
	
	

	<?php include('footer.php');?>
<script src="<?php echo base_url('assets/js/script.js');?>"></script>
</body>

</html>