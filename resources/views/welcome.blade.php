@extends('layouts.master')

@section('content')
                        
	<div id="page">	
	
		@include('layouts.partials.header')

		<main class="pattern">
			<section class="hero_single version_2">
				<div class="wrapper">
					<div class="container">
						<h3>Locate Medical Facility!</h3>
						<p>Discover {{ $total_count }} medical facilities in Kaduna</p>
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
					@foreach($facilities as $facility)
					
						<div class="col-md-4">
							<div class="strip grid">
								<figure>
									<a href="#0" class="wish_bt"></a>
									<a href="detail-restaurant.html"><img src="img/hospital.jpg" class="img-fluid" alt="">
										<div class="read_more"><span>View Facility</span></div>
									</a>
									<small>MF</small>
								</figure>
								<div class="wrapper">
									<h3><a href="{{ route('show_facility', $facility['global_id']) }}">{{ $facility['name'] }}</a></h3>
									<small>{{ $facility['ward_name'] }}, {{ $facility['state_name'] }}</small><br>
									{{-- <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p> --}}
									<a class="address" href="https://www.google.com/maps/dir//{{ $facility['latitude'] . ',' .  $facility['longitude']}}" target="_blank">Get directions</a>
								</div>
								<ul>
									<li><span class="loc_open">Now Open</span></li>
									<li>
										<div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
									</li>
								</ul>
							</div>
						</div>
					
					@endforeach
					
					
				
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

		@include('layouts.partials.footer')	
		@include('layouts.partials.signin-popup')	
	</div>
	<!-- page -->
	
@endsection



@section('footer_scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> --}}
<script src="{{ asset('js/app.js') }}" defer></script>


<script>

    
    axios.get('/api/features')
    .then((res)=>{
        console.log(res.data)

          let resource = '<div class="card-deck mb-5">'
        
            res.data.forEach(feature => {
                resource += `<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">${feature.name}</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>`
            });

        resource += '</div>'
        

        $('#facilities').append(resource)

        $('#load-more').attr('data-url', response.data.pager.next);
        
    });

    

    // const getDatasets = (url) => {
        
    //     axios.get(url).then(response => {
            
    //         console.log(response)
    //         features = response.data.features
            
    //           
    //     })
    // }
 
    // let response = getDatasets(url) // You can optionally pass other parameters as defined above

    // console.log(response)


    // $(document).ready(function(){
    //     $("#load-more").click(function(event){
    //         event.preventDefault()
    //         alert("clicked")
    //         let response = getDatasets($(this).data('url')) // You can optionally pass other parameters as defined above
    //     })    
        
    //     $("[name='lga_name']").change(function(event){
    //         let lga_name = $(this).val()
    //         url = "https://api.grid-nigeria.org/health-facilities/?size=4&cql=state_name IN ('Kaduna') and lga_name = '" + lga_name + "'"
    //         $('#facilities').empty()
            
    //         getDatasets(url) // You can optionally pass other parameters as defined above
            
    //     })    
    // })
    

</script>

@endsection