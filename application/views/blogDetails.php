<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>

<link href="<?php echo base_url(); ?>/assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/styles/font.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/js/slider/slider.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>/assets/js/slider/slider.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

</head>

<body>

	<?php include 'header.php';?>
	<?php foreach ($blog_data as $key => $blog) {
    ?>
	<div id="banner" class="innerBanner clearfix">
		<div class="blogImg">
			<img src="<?php echo base_url('assets/upload/blog/') ?><?php echo $blog->image; ?>" alt="Blog1">
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
		     <?php echo $blog->description;} ?>

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
				<form method="post" name="cform">
				<div class="formDetails clearfix">
					<div class="field">
						<textarea name="comment" id="comment" placeholder="Write your comments..." required=""></textarea>
					</div>
					<div class="bar clearfix">
						<div class="fieldBar clearfix">
							<input type="text" required="" name="uname" id="uname" placeholder="Name">
						</div>
						<div class="fieldBar clearfix">
							<input type="email" name="uemail" required="" id="uemail" placeholder="Email">
						</div>
					</div>
					<button class="comment" type="button">Post Comment</button>
					<span class="successcomment"></span>
				</div>
		</form>
			</div>

		</div>
	</section>



	<?php include 'footer.php';?>
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('.comment').click(function(){
          var email =document.getElementById("uemail").value;
			 var name =document.getElementById("uname").value;
		 var comment =document.getElementById("comment").value;

           $.ajax({
				type:'POST',
				data:{uemail:email,uname:name,comment:comment},
				url:"<?php echo base_url('comment') ?>",
				success:function(data){
					$(".successcomment").html(data);

				}

			});

			});
			});


		</script>
</body>

</html>