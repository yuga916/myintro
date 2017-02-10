<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Myintro</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home" data-vide-bg="video/Perfume_Live">

<header id="header">

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<?php require('layout/nav.php'); ?>

		</div>	
	</nav>
</header>

<main id="main" style="height: 800px;">

	<div class="container">

	<!-- 目次 -->
	<div class="row section recentworks topspace" style="margin-top: 320px;"> 
		
		<div class="text-center" style="margin-bottom: 150px;">
		   <h1 style="color: white; margin-bottom: 50px; font-size: 50px;">YUGA ICHINOHE</h1>
		   <h4 style="color: white;">About me</h4>
		   
		</div>
		<div class="thumbnails recentworks row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<a class="thumbnail" href="profile.php" style="background-color: initial;">
					<h4 style="color: white;">- Who am I? -</h4>
					<span class="title" style="color: white;">About what I can do and my career</span>
				</a>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<a class="thumbnail" href="history.php" style="background-color: initial;">
					<h4 style="color: white;">- My history -</h4>
					<span class="title" style="color: white;">About what I can do and my career</span>
				</a>
			</div>
			
			<!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a class="thumbnail" href="interview.php" style="background-color: initial;">
					<h4 style="color: white;">- Interview -</h4>
					<span class="title" style="color: white;">About what I can do and my career</span>
				</a>
			</div> -->

			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<a class="thumbnail" href="news.php" style="background-color: initial;">
					<h4 style="color: white;">- Latest news -</h4>
					<span class="title" style="color: white;">About what I can do and my career</span>
				</a>
			</div>
			
		</div>

	</div> <!-- /section -->
 </div>

</main>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.vide.min.js"></script>
<!-- <script src="assets/js/template.js"></script> -->
<script type="text/javascript">
$(function(){
  $('body').vide('video/Perfume_Live', {
    playbackRate: 1,
    muted: true,
    loop: true,
    autoplay: true,
    position: '50% 50%', // Similar to the CSS `background-position` property.
    posterType: 'detect', // Poster image type. "detect" — auto-detection; "none" — no poster; "jpg", "png", "gif",... - extensions.
    resizing: true, // Auto-resizing, read: https://github.com/VodkaBears/Vide#resizing
    bgColor: 'transparent', // Allow custom background-color for Vide div,
    className: '' // Add custom CSS class to Vide div
  });
});
</script>
</body>
</html>
