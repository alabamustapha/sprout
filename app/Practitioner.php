<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practitioner extends Model
{
    protected $fillable = [
    	'designation_id',
    	'name',
    	'address',
    	'email',
    	'phone',
    	'highest_qualification',
    	'dob',
    ];

    protected $hidden = [
    ];
}
