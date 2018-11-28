<?php

namespace App\Http\Controllers;

use App\Facility;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $facility)
    {

        $http = new Client;

        $url = "https://api.grid-nigeria.org/health-facilities/?cql=latitude = 9.249853050000002 AND longitude = 8.46761152";
                
        $response = $http->get($url);

        

        $response = json_decode($response->getBody(), true);

        dd($response);

        $facility = [];

        $total_count = $response["totalFeatures"];
        foreach($response["features"] as $feature){
            $properties = array_only($feature["properties"], ['global_id', 'latitude', 'longitude', 'lga_name', 'name', 'state_name', 'type', 'ward_name', 'ownership']);
            array_push($facilities, $properties);
        }

        
        return view('welcome', compact('facilities', 'total_count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        //
    }
}
