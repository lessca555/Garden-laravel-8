<!DOCTYPE html>
<html lang="en">

<head>
	<title>Garden Palace</title>
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
                                    <h2>Sign up</h2>
                                    <p>Create your account. It's take less then a minutes</p>
                                    <form class="col s12" method="POST" action="{{ route('register') }}">
										@csrf

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autocomplete="name">
                                                <label for="name">Full Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="password" type="password" class="validate" name="password" required autocomplete="new-password">
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="input-field col s12">
                                                <input id="password-confirm" type="password" class="validate" name="password_confirmation" required autocomplete="new-password">
                                                <label for="password-confirm">Confirm Password</label>
                                            </div>
                                        </div>
										<div class="row">
											<div class="input-field col s12">
												<!-- <input id="birth_date" type="date" class="validate" name="birth_date" required autocomplete="birth_date"> -->
												<input id="birth_date" type="text" onfocus="(this.type='date')" class="validate" name="birth_date" required autocomplete="birth_date">
												<label for="birth_date">Date of Birth</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s12">
												<input id="address" type="text" class="validate" name="address" required autocomplete="address">
												<label for="address">Address</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s12">
												<input id="phone" type="text" class="validate" name="phone" required autocomplete="phone">
												<label for="phone">Phone Number</label>
											</div>
										</div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light" type="submit" name="action">{{ __('Sign up') }}</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col">
                                                <p>Already have account?? <a href="{{ route('login') }}">Sign in</a></p>
                                            </div>
                                        </div>
										<input type="hidden" name='role' value="user">
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
