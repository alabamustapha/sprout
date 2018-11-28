<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\HealthFacility;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $facilities = HealthFacility::all()->random(9);
        $total_count = HealthFacility::count();

        // $http = new Client;

        // $url = "https://api.grid-nigeria.org/health-facilities/?cql=state_name IN ('Kaduna')&size=3";
                
        // $response = $http->get($url);

        // $response = json_decode($response->getBody(), true);

        // $facilities = [];

        // $total_count = $response["totalFeatures"];
        // foreach($response["features"] as $feature){
        //     $properties = array_only($feature["properties"], ['global_id', 'latitude', 'longitude', 'lga_name', 'name', 'state_name', 'type', 'ward_name', 'ownership']);
        //     array_push($facilities, $properties);
        // }

        
        return view('welcome', compact('facilities', 'total_count'));
    }

    public function facilities(Request $request)
    {
        return $request->all();
    }
}
