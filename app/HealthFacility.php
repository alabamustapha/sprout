<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class HealthFacility extends Model
{

	use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
	}
	
    protected $fillable = [
		'global_id', 
		'latitude', 
		'longitude', 
		'lga_name', 
		'name', 
		'slug',
		'state_name', 
		'type', 
		'ward_name', 
		'ownership', 
		'alternate_name', 
		'functional_status', 
		'ri_service_status', 
		'ward_code', 
		'lga_code', 
		'state_code', 
		'type',
		'address',
    	'phone',
    	'email',
    	'facebook',
    	'twitter',
    	'instagram',
    	'facility_manager_id',
    ];

    protected $hidden = [
    ];

    public function owner()
    {
        return $this->belongsTo(FacilityManager::class);
    }
}
