<div class="menu-section">
			<div class="container">
                <div class="row">
                    <div class="all-drop-down">
                        <!-- My Account Dropdown Structure -->
						<ul id='drop-account' class='dropdown-content drop-con-man'>
							<li>
								<a href="/my-account">My Account</a>
								<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
							</li>
						</ul>
                    </div>
                </div>
				<div class="row">
					<div class="logo">
						<a href="{{ route('home') }}">
                            <img src="assets/images/logo.webp" alt=""/>
						</a>
					</div>
					<div class="menu-bar">
						<ul>
							<li><a href="/home">Home</a>
							</li>
							<li><a href="/booking">Booking</a>
							</li>
							<li><a href="/hotel-facilities">Facilities</a>
							</li>
                            <li><a href="/about-us">About Us</a>
							</li>
							<li><a href="/contact-us">Contact Us</a>
							</li>
                            <li>
								@if (Route::has('login'))
									@auth
										<a class='dropdown-button' href='#' data-activates='drop-account'>Hi, {{ Auth::user()->name }} <i class="fa fa-angle-down"></i></a>
									@else
										<a href="{{ route('login') }}">Sign in</a>
									@endauth
								@endif
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
