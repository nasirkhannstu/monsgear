<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Blog extends Model
{
	use Searchable;
	
    public function comment(){
    	return $this->hasMany('App\Comment');
    }
}
