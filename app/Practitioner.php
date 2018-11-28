<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practitioner extends Model
{
    protected $fillable = [
    	'designation_id',
        'health_facility_id',
    	'name',
    	// 'address',
    	'email',
    	'phone',
    	'highest_qualification',
    	'dob',
    ];

    protected $hidden = [
    ];

    public function healthFacility()
    {
        return $this->belongsTo(HealthFacility::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
}
