<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zumeyes</title>

<?php include 'head.php';?>
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5c5f1ef883748d001131544f&product=inline-share-buttons"></script>
</head>

<body>

	<?php include 'header.php';?>
	<?php if (!empty($blog_data)) {

    foreach ($blog_data as $key => $blog) {
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
			<div class="sharethis-inline-share-buttons"></div>

			</div>
		</div>

		<div class="blogContent clearfix">
		     <?php echo $blog->description;}} ?>

		</div>

		</div>

	</section>

	<section class="commentSection clearfix">

		<div class="container">

			<h2>2 comments</h2>
			<?php if (isset($blog_comment) && !empty($blog_comment)) {
    foreach ($blog_comment as $blog_comments) {?>
			<div class="commentBar clearfix">

			<div class="userInfo clearfix">
				<div class="userImg"><i class="icon icon-user"></i></div>
				<span><?php echo $blog_comments->name; ?></span>
			</div>
			<div class="userComment clearfix">
				<p><?php echo $blog_comments->comment; ?></p></div>

		</div>
			<?php }}?>

			<div class="leaveCommentBlock clearfix">

				<h2>Leave your comments</h2>
				<form method="post" id="myform">
				<div class="formDetails clearfix">
					<div class="field">
						<textarea name="comment" id="comment" placeholder="Write your comments..." required ></textarea>
					</div>
					<div class="bar clearfix">
						<div class="fieldBar clearfix">
							<input type="text" required name="uname" id="uname" placeholder="Name">
							<input type="hidden" required  id="title" value="<?php echo $blog->title; ?>">
					        <span class="error_name" id="name_error_message"></span>
						</div>
						<div class="fieldBar clearfix">
							<input type="email" name="uemail" required id="uemail" placeholder="Email">
							<span class="error_email" id="email_error_message"></span>
						</div>
					</div>
					<button class="blogcomment" type="button">Post Comment</button>
					<span class="successcomment"></span>
				</div>
		</form>
			</div>

		</div>
	</section>



	<?php include 'footer.php';?>
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

		<script type="text/javascript">
		$(document).ready(function(){
		  var error_email=false;
		  var error_name=false;
			$('#email_error_message').hide();
      $('#name_error_message').hide();
      $("#uemail").focusout(function(){
          check_email();
      });
 			$("#uname").focusout(function(){
        check_name();
      });

          function check_email(){
          	var pattern= /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
          	var email =$("#uemail").val();
          	if(pattern.test(email) && email !== ''){
          		$("#email_error_message").hide();

          	}
          	else{
          		$("#email_error_message").html("Invalid Email");
          		$("#email_error_message").show();
          		$("#email_error_message").css("color","red");
          		error_email = true;
          	}
          }

		 function check_name(){
          	var pattern= /^[A-Za-z]+$/;
          	var name =$("#uname").val();
          	if(pattern.test(name) && name !== ''){
          		$("#name_error_message").hide();

          	}
          	else{
          		$("#name_error_message").html("Name Should Be Letter");
          		$("#name_error_message").show();
          		$("#name_error_message").css("color","red");
          		error_name = true;
          	}
          }


			$('.blogcomment').click(function(){
			    	check_email();
			    	check_name();
			    	if(error_email !== true && error_name !== true){
          var uemail =document.getElementById("uemail").value;
		  var uname =document.getElementById("uname").value;
		var comment =document.getElementById("comment").value;
		var title =document.getElementById("title").value;

           $.ajax({
				type:'POST',
				data:{uemail:uemail,uname:uname,comment:comment,title:title},
				url:"<?php echo base_url('comment') ?>",
				success:function(data){
					$(".successcomment").html(data);
					document.getElementById('myform').reset();
				}

			});
			    	}
			});
			});


		</script>
</body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>