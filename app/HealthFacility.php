<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthFacility extends Model
{
    protected $fillable = [
		'global_id',
		'latitude',
		'longitude',
		'lga_name',
		'name',
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
        return $this->belongsTo(User::class, 'facility_manager_id');
    }
}
