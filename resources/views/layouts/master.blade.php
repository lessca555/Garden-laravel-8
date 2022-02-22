<!DOCTYPE html>
<html lang="en">

<head>
	<title>Hotel Hebat</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- ALL CSS FILES -->
	<link href="assets/css/materialize.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="assets/css/responsive.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body data-ng-app="">
	<!--MOBILE MENU-->
	@include('partials.mobileNav')
	<!--HEADER SECTION-->
	<section>
		<!--TOP SECTION-->
		@include('partials.nav')
		<!--TOP SECTION-->
		@include('home')				
	</section>
	<!--END HEADER SECTION-->
	@include('partials.footer')
	<section class="copy">
		<div class="container">
			<p>copyrights &copy; 2022. &nbsp;&nbsp;All rights reserved. </p>
		</div>
	</section>
	<!--ALL SCRIPT FILES-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/materialize.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>