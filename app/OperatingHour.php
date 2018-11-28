<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatingHour extends Model
{
    protected $fillable = [
    	'health_facility_id',
    	'day',
    	'opening_time',
    	'closing_time',
    ];

    protected $hidden = [
    ];

    public function healthFacility()
    {
    	return $this->belongsTo(HealthFacility::class);
    }
}
