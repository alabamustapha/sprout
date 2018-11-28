@extends('layouts.master')

@section('content')
                        
	<div id="page">	
	
		@include('layouts.partials.header')
        
        <div id='map' style='width: 400px; height: 300px;'></div>

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
  mapboxgl.accessToken = 'pk.eyJ1Ijoic2FpZHUiLCJhIjoiY2pveTNrM3ZvMTdpajNyb2R0Nmg1cG5hMCJ9.dDu8jfgjcQheDRsucflg3g';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v10'
  });
</script>





@endsection