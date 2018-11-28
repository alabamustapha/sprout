<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name', 'phone', 'dob',
    ];

    protected $hidden = [
    ];

    public function healthFacility()
    {
    	return $this->belongsTo(HealthFacility::class);
    }
}
