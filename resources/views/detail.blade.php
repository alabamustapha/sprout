@extends('layouts.master')

@section('content')
<div id="page" class="theia-exception">
		
	{{-- <header class="header_in">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div id="logo">
						<a href="index.html">
							<img src="{{ asset('img/logo_sticky.svg') }}" width="165" height="35" alt="" class="logo_sticky">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<ul id="top_menu">
						<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
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
                            <li><span><a href="#0">Home</a></span></li>
                        
                            <li><span><a href="#0">Pages</a></span></li>
                            <li><span><a href="#0">Extra</a></span>
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->		
	</header> --}}
	<!-- /header -->

	@include('layouts.partials.g_header')
	
	<main>		
		<div class="hero_in ">
			<div id='map' style='width: 1400px; height: 700px;'></div>
		</div>
		<!--/hero_in-->
		
	

		<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<section id="description">
							<div class="detail_title_1">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h1>{{ $facility->name }}</h1>
								<a class="address" href="https://www.google.com/maps/dir//{{ $facility->latitude . ',' .  $facility->longitude}}">{{ $facility->ward_name }}, {{ $facility->state_name }}</a>
							</div>
							<h5 class="add_bottom_15">Services</h5>
							<div class="row add_bottom_30">
							@foreach($facility->services->chunk(4) as $services)
								<div class="col-lg-6">
									<ul class="bullets">
										@foreach($services as $service)
											<li>{{ $service->name }}</li>
										@endforeach
									</ul>
								</div>
							@endforeach
							</div>
							<!-- /row -->						
							<hr>
						
					
						
							<hr>
							<h3>Location</h3>
							
							<!-- End Map -->
						</section>
						<!-- /section -->
					
						<section id="reviews">
							<h2>Reviews</h2>
							<div class="reviews-container add_bottom_30">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>{{ $facility->rate }}</strong>
											<em>Superb</em>
											<small>Based on {{ $facility->reviews->count() }} reviews</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->
							</div>

							<div class="reviews-container">

								@foreach($facility->reviews as $review)
								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											@for($i = 1; $i<= $review->rate; $i++)
											<i class="icon_star voted"></i>
											@endfor
											@for($i = 1; $i<= 5 - $review->rate; $i++)
											<i class="icon_star"></i>
											@endfor
										</div>
										<div class="rev-info">
											{{ $review->user->name }} – {{ $review->created_at }}
										</div>
										<div class="rev-text">
											<p>
												{{ $review->review }}
											</p>
										</div>
									</div>
								</div>
								@endforeach
							
							</div>
							<!-- /review-container -->
						</section>
						<!-- /section -->
						<hr>

							@if(auth()->user() && !$facility->reviews()->where('user_id', auth()->user()->id)->count() > 0 )
							<div class="add-review">
								<h5>Leave a Review</h5>
								<form>
									<div class="row">
										<div class="form-group col-md-6">
											<label>Name and Lastname *</label>
											<input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
										</div>
										<div class="form-group col-md-6">
											<label>Email *</label>
											<input type="email" name="email_review" id="email_review" class="form-control">
										</div>
										<div class="form-group col-md-6">
											<label>Rating </label>
											<div class="custom-select-form">
											<select name="rating_review" id="rating_review" class="wide">
												<option value="1">1 (lowest)</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5" selected>5 (medium)</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10 (highest)</option>
											</select>
											</div>
										</div>
										<div class="form-group col-md-12">
											<label>Your Review</label>
											<textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
										</div>
										<div class="form-group col-md-12 add_top_20 add_bottom_30">
											<input type="submit" value="Submit" class="btn_1" id="submit-review">
										</div>
									</div>
								</form>
							</div>
							@else
							<div class="add-review">
									<h5>Leave a Review</h5>
									<form>
										<div class="row">
											
											<div class="form-group col-md-6">
												<label>Rating </label>
												<div class="custom-select-form">
												<select name="rating_review" id="rating_review" class="wide">
													<option value="1">1 (lowest)</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5" selected>5 (medium)</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10 (highest)</option>
												</select>
												</div>
											</div>
											<div class="form-group col-md-12">
												<label>Your Review</label>
												<textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
											</div>
											<div class="form-group col-md-12 add_top_20 add_bottom_30">
												<input type="submit" value="Submit" class="btn_1" id="submit-review">
											</div>
										</div>
									</form>
								</div>
							@endif
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
							<div class="price">
								<span>OWNER <small>ship</small></span>
								<div class="score"><span></span><strong>***</strong></div>
							</div>

							@guest
							<div class="form-group" id="input-dates">
								<input class="form-control" type="text" name="dates" placeholder="FullName">
								<i class="icon_user"></i>
							</div>
							<div class="form-group" id="input-dates">
								<input class="form-control" type="text" name="dates" placeholder="Username">
								<i class="icon_user"></i>
							</div>

							<div class="form-group" id="input-dates">
								<input class="form-control" type="text" name="dates" placeholder="Password">
								<i class="icon_lock"></i>
							</div>

							<div class="form-group" id="input-dates">
								<input class="form-control" type="text" name="dates" placeholder="Confirm Password">
								<i class="icon_lock"></i>
							</div>

							<div class="form-group" id="input-dates">
								<input class="form-control" type="text" name="dates" placeholder="Phone">
								<i class="icon_phone"></i>
							</div>

							

							<div class="form-group clearfix">
								<div class="custom-select-form">
									<select class="wide">
										<option>Gender</option>	
										<option>Male</option>
										<option>Female</option>
										<option>Others</option>
									</select>
								</div>
							</div>
							@endguest
							<a href="{{ route("request_ownership", $facility->slug) }}" class=" add_top_30 btn_1 full-width purchase">Request ownership</a>
							
							<div class="text-center"><small>The account will be assigned after verification</small></div>
						</div>
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
					</aside>
				</div>
				<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	
	@include('layouts.partials.footer')
	</div>
	<!-- page -->
	

	
	<div id="toTop"></div><!-- Back to top button -->
	
	
	<script>

		mapboxgl.accessToken = 'pk.eyJ1Ijoic2FpZHUiLCJhIjoiY2pveTNrM3ZvMTdpajNyb2R0Nmg1cG5hMCJ9.dDu8jfgjcQheDRsucflg3g';
		var map = new mapboxgl.Map({
			container: 'map',
			style: 'mapbox://styles/mapbox/streets-v9',
			center: [7.4490,10.5432],
			zoom: 14
		});
		let dataset;
		let url = "https://api.grid-nigeria.org/health-facilities/"
		fetch(url)
		.then((res)=> res.json())
		.then((data)=>{
			dataset = data;
			console.log(dataset)
		})
		
		map.on('style.load', function () {

map.addSource("markers", {
	"type": "geojson",
	"data": {
		"type": "FeatureCollection",
		"features": [{
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [7.4490, 10.5432]
			},
			"properties": {
				"title": "Medical Facility",
				'marker-color': '#3bb2d0',
      'marker-size': 'large',
      'marker-symbol': 'cross'
			}
		}, {
			"type": "Feature",
			"geometry": {
				"type": "Point",
				"coordinates": [-122.414, 37.776]
			},
			"properties": {
				"title": "Mapbox SF",
				"marker-color": "#ff00ff"
			}
		}]
	}
});

map.addLayer({
	"id": "markers",
	"type": "symbol",
	"source": "markers",
	"layout": {
		"icon-image": "{marker-symbol}-15",
		"text-field": "{title}",
		"text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
		"text-offset": [0, 0.6],
		"text-anchor": "top"
	}
});
});

				</script>

@endsection