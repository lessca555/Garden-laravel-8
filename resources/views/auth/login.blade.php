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
		<div class="inn-body-section inn-detail">
			<div class="container">
				<div class="row">
					<div class="inn-bod">
						<div class="inn-detail-p1 inn-com inn-com-form">
							<div class="col-md-12">
                                <div class="head-typo collap-expand book-form inn-com-form">
                                    <h2>Sign in</h2>
                                    <p>Welcome Back!</p>
                                    <form class="col s12" method="POST" action="{{ route('login') }}">
										@csrf

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="email" class="validate" name="email" required>
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="password" class="validate" name="password" required>
                                                <label>Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light" type="submit" name="action">{{ __('Sign in') }}</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col">
                                                <p>Don't have account? <a href="{{ route('register') }}">Create your account</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
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