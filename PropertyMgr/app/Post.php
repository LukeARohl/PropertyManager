<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
	'start_date','end_date','message','prop_id',
    ]
}
