@extends('layouts.master')

@section('content')

<div id="page">
		
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
			</ul>
		</nav>
	</header>
	<!-- /header -->
	
	<main class="pattern">
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>Locate Medical Facility!</h3>
					<p>Discover top rated hotels, shops and restaurants around the world</p>
					<form method="post" action="grid-listings-filterscol.html">
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Locate Medical Facility">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Where" placeholder="State" value="Kaduna" disabled>
									<i class="icon_pin_alt"></i>
								</div>
							</div>
                            <div class="col-lg-3">
								<select class="wide" name="lga_name" id="lga_name">
                                    <option value="">All</option>
                                    <option value="Birnin Gwari">Birnin Gwari</option>
                                    <option value="Chikun">Chikun</option>
                                    <option value="Giwa">Giwa</option>
                                    <option value="Igabi">Igabi</option>
                                    <option value ="Ikara">Ikara</option>
                                    <option value ="Jaba">Jaba</option>
                                    <option value ="Jema’A">Jema’a</option>
                                    <option value ="Kachia">Kachia</option>
                                    <option value ="Kaduna North">Kaduna North</option>
                                    <option value ="Kaduna South">Kaduna South</option>
                                    <option value ="Kagarko">Kagarko</option>
                                    <option value ="Kajuru">Kajuru</option>
                                    <option value ="Kaura">Kaura</option>
                                    <option value ="Kauru">Kauru</option>
                                    <option value ="Kubau">Kubau</option>
                                    <option value ="Kudan">Kudan</option>
                                    <option value ="Lere">Lere</option>
                                    <option value ="Makarfi">Makarfi</option>
                                    <option value ="Sabon Gari">Sabon Gari</option>
                                    <option value ="Sanga">Sanga</option>
                                    <option value ="Soba">Soba</option>
                                    <option value ="Zangon Kataf">Zangon Kataf</option>
                                    <option value ="Zaria">Zaria</option>
								</select>
							</div>
							<div class="col-lg-2">
								<input type="submit" value="Search" id="#load-more">
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->
		
		<div class="main_categories">
			<div class="container">
				<ul class="clearfix">
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-hospital"></i>
							<h3>...</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-location"></i>
							<h3>...</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-ambulance"></i>
							<h3>...</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-child"></i>
							<h3>...</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-dot-3"></i>
							<h3>...</h3>
						</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /main_categories -->
		
		<div class="container margin_60_35">
			
			<div class="row add_bottom_30">
				<div class="col-md-4" v-for="facility in facilities" :key="facility.uid">
                    <div class="strip grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="detail-restaurant.html"><img src="img/hospital.jpg" class="img-fluid" alt="">
                                <div class="read_more"><span>View Facility</span></div>
                            </a>
                            <small>MF</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="detail-restaurant.html">Limon Bar</a></h3>
                            <small>438 Rush Green Road, Romford</small>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                            <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Get directions</a>
                        </div>
                        <ul>
                            <li><span class="loc_open">Now Open</span></li>
                            <li>
                                <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>s
              
                
				
			
            </div>
		</div>
		
		<div class="call_section">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
						<span><em></em></span>
						<h2>How it Works</h2>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-search"></i>
								<h3>Search Locations</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-info"></i>
								<h3>View Location Info</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-like2"></i>
								<h3>Book, Reach or Call</h3>
								<p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
							</div>
						</div>
					</div>
					<!-- /row -->
		
				</div>
				<canvas id="hero-canvas" width="1920" height="1080"></canvas>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/call_section-->
		
		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Sparker App Available</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div class="row justify-content-center text-center">
				<div class="col-md-6">
					<img src="img/mobile.svg" alt="" class="img-fluid add_bottom_45">
					<div class="app_icons">
						<a href="#0" class="pr-lg-2"><img src="img/app_android.svg" alt=""></a>
						<a href="#0" class="pl-lg-2"><img src="img/app_apple.svg" alt=""></a>
					</div>
					<div class="add_bottom_15"><small>*An eum dolores tractatos, aeterno menandri deseruisse ut eum.</small></div>
				</div>
			</div>
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->

	<footer class="plus_border">
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
    





@endsection



@section('footer_scripts')
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


<script src="{{ asset('js/app.js') }}" defer></script>

<script>


    let url = "https://api.grid-nigeria.org/"
    url = "https://api.grid-nigeria.org/health-facilities/?cql=state_name IN ('Kaduna') and lga_name = 'Lere'&size=4"

    const getDatasets = (url) => {
        
        axios.get(url).then(response => {
            
            console.log(response)
            features = response.data.features
            
                let resource = `
                <div class="card-deck mb-5">
        
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${features[0].properties.name}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${features[1].properties.name}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${features[2].properties.name}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${features[3].properties.name}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                </div>                      
                `

                $('#facilities').append(resource)

                $('#load-more').attr('data-url', response.data.pager.next);
                
        })
    }
 
    let response = getDatasets(url) // You can optionally pass other parameters as defined above

    console.log(response)


    $(document).ready(function(){
        $("#load-more").click(function(event){
            event.preventDefault()
            alert("clicked")
            let response = getDatasets($(this).data('url')) // You can optionally pass other parameters as defined above
        })    
        
        $("[name='lga_name']").change(function(event){
            let lga_name = $(this).val()
            url = "https://api.grid-nigeria.org/health-facilities/?size=4&cql=state_name IN ('Kaduna') and lga_name = '" + lga_name + "'"
            $('#facilities').empty()
            
            getDatasets(url) // You can optionally pass other parameters as defined above
            
        })    
    })
    

</script>

@endsection