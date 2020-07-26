<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // we added this line

class Hotel extends Model
{	
    use SoftDeletes; // we added this line for soft delete

	/**
	 * defines relationship between classes (a hotel belongs to a specific category)
	 * @return [type] [description]
	 */
    public function category(){
    	return $this->belongsTo(Category::class);
    }

    protected $fillable = [
    	'name',
    	'abstract',
    	'body',
    	'image',
    	'stars',
    	'restaurants',
    	'bars',
    	'pools',
    	'price',
    	'raiting',
    	'all_inclusive',
        'category_id'
    ];    
}
