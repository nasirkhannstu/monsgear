<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request){
    	$error = ['error' => 'No result found, Please try with different keywords.'];

    	if($request->has('q')){
    		$product = Product::search($request->get('q'))->get();
    		$blog = Blog::search($request->get('q'))->get();
    		$posts = $product->merge($blog);
    		return $posts;
    	}
    	return $error;
    }
}
