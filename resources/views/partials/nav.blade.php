<div class="menu-section">
			<div class="container">
                <div class="row">
                    <div class="all-drop-down">
                        <!-- My Account Dropdown Structure -->
						<ul id='drop-account' class='dropdown-content drop-con-man'>
							<li><a href="/my-profile">Profile</a>
							</li>
							<li><a href="{{ route('logout') }}"
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
						<a href="index.html"><img src="assets/images/logo.png" alt="" />
						</a>
					</div>
					<div class="menu-bar">
						<ul>
							<li><a href="/home">Home</a>
							</li>
							<li><a href="/all-rooms">Rooms</a>
							</li>
							<li><a href="/services">Services</a>
							</li>
                            <li><a href="/about-us">About Us</a>
							</li>
							<li><a href="/contact-us">Contact Us</a>
							</li>
                            <li><a class='dropdown-button' href='#' data-activates='drop-account'> My Account <i class="fa fa-angle-down"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>