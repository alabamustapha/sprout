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

    protected $casts = [
    	'created_at' => 'date',
    	'updated_at' => 'date',
    	'dob' => 'date',
    ];

    public function healthFacility()
    {
    	return $this->belongsTo(HealthFacility::class);
    }

}
