
		<header class="header menu_fixed">
			<div id="logo">
				<a href="index.html" title="Sparker - Directory and listings template">
					<img src="img/logo.svg" width="165" height="35" alt="" class="logo_normal">
					<img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky"> 
				</a>
			</div>
			
			<!-- /top_menu -->
			<a href="#menu" class="btn_mobile">
				<div class="hamburger hamburger--spin" id="hamburger">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<nav id="menu" class="main-menu">
				<ul>
					<li><span><a href="#0">Home</a></span></li>
					<li><span><a href="#0">About us</a></span></li>
					<li><span><a href="#0">Contact us</a></span></li>
					@guest
					<li><span><a href="{{ route('login') }}">{{ __('Login') }}</a></span></li>
					<li>
						@if (Route::has('register'))
							<span><a href="{{ route('register') }}">{{ __('Register') }}</a></span>
						@endif
					</li>
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				</ul>
			</nav>
		</header>
		<!-- /header -->