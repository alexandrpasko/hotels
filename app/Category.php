<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
	 * defines relationship between classes (a category can have many hotels)
	 */
    public function hotels()
    {
    	return $this->hasMany(Hotel::class);
    }
}
