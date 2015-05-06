<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Category extends Model  
{
	public function quotes()
	{
		return $this->hasMany('App\Models\Quote');
	}
}