<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
	use Searchable;
	
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function pcomment(){
    	return $this->hasMany('App\Pcomment');
    }
}
