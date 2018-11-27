<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityManager extends Model
{
	protected $fillable = [
		'name',
		'username',
		'email',
		'address',
		'phone',
		'password',
    ];

    protected $hidden = [
    ];
}
