@extends('layouts.master')

@section('content')

<div id="page">
		
	<header class="header_in is_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div id="logo">
						<a href="index.html">
							<img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<ul id="top_menu">
						<li><a href="account.html" class="btn_add">Add Listing</a></li>
						<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
						<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
					</ul>
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
                            <li><span><a href="#0">Home</a></span>
                                <ul>
                                    <li><a href="index.html">Home version 1</a></li>
                                    <li><a href="index-2.html">Home version 2</a></li>
                                    <li><a href="index-3.html">Home version 3</a></li>
                                    <li><a href="index-4.html">Home version 4</a></li>
                                    <li><a href="index-5.html">Home version 5</a></li>
                                    <li><a href="index-6.html">Home version 6 (GDPR)</a></li>
                                </ul>
                            </li>
                            <li><span><a href="#0">Listings</a></span>
                                <ul>
                                    <li>
                                        <span><a href="#0">Grid Layout</a></span>
                                        <ul>
                                            <li><a href="grid-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
                                            <li><a href="grid-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
                                            <li><a href="grid-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
                                            <li><a href="grid-listings-filterstop.html">Full+Search mobile 2</a></li>
                                            <li><a href="grid-listings-isotope.html">Full+Isotope filter</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span><a href="#0">Row Layout</a></span>
                                        <ul>
                                            <li><a href="row-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
                                            <li><a href="row-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
                                            <li><a href="row-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
                                            <li><a href="row-listings-filterstop.html">Full+Search mobile 2</a></li>
                                            <li><a href="row-listings-isotope.html">Full+Isotope filter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="listing-map.html">Listing Map</a></li>
                                    <li>
                                        <span><a href="#0">Detail pages</a></span>
                                        <ul>
                                            <li><a href="detail-hotel.html">Detail page 1</a></li>
                                            <li><a href="detail-restaurant.html">Detail page 2</a></li>
                                            <li><a href="detail-shop.html">Detail page 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="bookings.html">Bookings - Purchases</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="confirm.html">Confirm</a></li>
                                </ul>
                            </li>
                            <li><span><a href="#0">Pages</a></span>
                                <ul>
                                    <li><a href="admin_section/index.html">Admin section</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="account.html">Account</a></li>
                                    <li><a href="help.html">Help Section</a></li>
                                    <li><a href="faq.html">Faq Section</a></li>
                                    <li><a href="wishlist.html">Wishlist page</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li>
                                        <span><a href="#0">Icon Packs</a></span>
                                        <ul>
                                            <li><a href="icon-pack-1.html">Icon pack 1</a></li>
                                            <li><a href="icon-pack-2.html">Icon pack 2</a></li>
                                            <li><a href="icon-pack-3.html">Icon pack 3</a></li>
                                            <li><a href="icon-pack-4.html">Icon pack 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="media-gallery.html">Media gallery</a></li>
                                </ul>
                            </li>
                            <li><span><a href="#0">Extra</a></span>
                                <ul>
                                    <li><a href="404.html">404 page</a></li>
                                    <li><a href="contacts-2.html">Contacts 2</a></li>
                                    <li><a href="pricing-tables.html">Pricing tables</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="menu-options.html">Menu Options</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="coming_soon/index.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li><span><a href="#0">Buy template</a></span></li>
                        </ul>
                    </nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->		
	</header>
	<!-- /header -->
	
	<div class="sub_header_in">
		<div class="container">
			<h1>Contacts Sparker</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
		
	<main>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19864.623539539858!2d-0.1407216728393208!3d51.51178603603532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604cb878e81b3%3A0x91f10fa364452046!2sCovent+Garden%2C+Londra+WC2E+8BG%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1538380105649" width="600" height="450" allowfullscreen id="map_iframe"></iframe>
		<!-- /map -->
		<div class="container margin_60_35">
			<div class="row justify-content-center">
				
				<div class="col-xl-5 col-lg-6 pr-xl-5">
					<div class="main_title_3">
						<span></span>
						<h2>Send us a message</h2>
						<p>Cum doctus civibus efficiantur in imperdiet.</p>
					</div>
					<div id="message-contact"></div>
					<form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="text" id="name_contact" name="name_contact">
						</div>
						<div class="form-group">
							<label>Last name</label>
							<input class="form-control" type="text" id="lastname_contact" name="lastname_contact">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" id="email_contact" name="email_contact">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Telephone</label>
									<input class="form-control" type="text" id="phone_contact" name="phone_contact">
								</div>
							</div>
						</div>
						<!-- /row -->
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" id="message_contact" name="message_contact" style="height:120px;"></textarea>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Are you human? 3 + 1 =</label>
									<input class="form-control" type="text" id="verify_contact" name="verify_contact">
								</div>
							</div>
						</div>
						<p class="add_top_30"><input type="submit" value="Submit" class="btn_1" id="submit-contact"></p>
					</form>
				</div>
				<div class="col-xl-5 col-lg-6 pl-xl-5">
					<div class="box_contacts">
						<i class="ti-support"></i>
						<h2>Need Help?</h2>
						<a href="#0">43 4324265622</a> - <a href="#0">help@sparker.com</a>
					</div>
					<div class="box_contacts">
						<i class="ti-help-alt"></i>
						<h2>Questions?</h2>
						<a href="#0">43 324242322</a> - <a href="#0">info@sparker.com</a>
					</div>
					<div class="box_contacts">
						<i class="ti-home"></i>
						<h2>Address</h2>
						<a href="#0">PO Box 97845 Baker st. 567, Los Angeles<br>California - US.</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
	
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
						<h3>Quick Links</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_1">
						<ul class="links">
							<li><a href="#0">About us</a></li>
							<li><a href="#0">Faq</a></li>
							<li><a href="#0">Help</a></li>
							<li><a href="#0">My account</a></li>
							<li><a href="#0">Create account</a></li>
							<li><a href="#0">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
						<h3>Categories</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_2">
						<ul class="links">
							<li><a href="#0">Shops</a></li>
							<li><a href="#0">Hotels</a></li>
							<li><a href="#0">Restaurants</a></li>
							<li><a href="#0">Bars</a></li>
							<li><a href="#0">Events</a></li>
							<li><a href="#0">Fitness</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
						<h3>Contacts</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_3">
						<ul class="contacts">
							<li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="ti-headphone-alt"></i>+39 06 97240120</li>
							<li><i class="ti-email"></i><a href="#0">info@sparker.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
						<h3>Keep in touch</h3>
					</a>
					<div class="collapse show" id="collapse_ft_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
									<input type="submit" value="Submit" id="submit-newsletter">
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><i class="ti-facebook"></i></a></li>
								<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
								<li><a href="#0"><i class="ti-google"></i></a></li>
								<li><a href="#0"><i class="ti-pinterest"></i></a></li>
								<li><a href="#0"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<ul id="footer-selector">
						<li>
							<div class="styled-select" id="lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select" id="currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="img/cards_all.svg" alt=""></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2018 Sparker</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->

@endsection