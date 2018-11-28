<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $fillable = [
    	'name',
    	'unit_price',
    	'quantity',
    ];

    protected $hidden = [
    ];
}
