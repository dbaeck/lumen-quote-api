<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Quote extends Model  
{
	public function category()
	{
		return $this->belongsTo('App\Models\Category');
	}
}