<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthFacility extends Model
{
    protected $fillable = [
    	'ward_id',
    	'facility_manager_id',
    	'global_id',
    	'name',
    	'type',
    	'status',
    	'ownership',
    	'longitude',
    	'latitude',
    	'address',
    	'phone',
    ];

    protected $hidden = [
    ];

    public function owner()
    {
        return $this->belongsTo(FacilityManager::class);
    }
}
