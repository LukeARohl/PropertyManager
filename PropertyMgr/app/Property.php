<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
	'manager_id',
    ]

    public function units()
    {
	return $this->hasMany('App\Unit');
    }
}
