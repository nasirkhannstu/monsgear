<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Blog;
use App\Cart;
use App\Coupon;
use Session;

class PagesController extends Controller
{
    public function getIndex(){
        $products = Product::orderBy('id','desc')->get();
    	$blogs = Blog::orderBy('id','desc')->get();

        return view('pages.welcome')->withProducts($products)->withBlogs($blogs);
    }
    // public function getSingle($id){
    // 	$product = Product::find($id);
    //     return view('pages.single')->withProduct($product);
    // }
    public function getSingleProduct($slug){
    	$product = Product::where('slug', "=", $slug)->first();
        return view('pages.single')->withProduct($product);
    }

    public function getSingleBlog($slug){
        $blog = Blog::where('slug', "=", $slug)->first();
        return view('pages.singleBlog')->withBlog($blog);
    }
    public function getCheckout(){
        if(!Session::has('cart')){
            return view('pages.checkout');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
// amount,freeship,minspent,excludcat,limit,expire,dtype
    public function getCoupon(Request $request){
        if(Coupon::where('name', '=', $request->coupon)->exists()){

            $coupon = Coupon::where('name', "=", $request->coupon)->first();
            if(!Session::has('cart')){
                return view('pages.checkout');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $totalPrice = $cart->totalPrice;
            $products = $cart->items;

             if($coupon->dtype == 'cart'){
                return $newTotal = $totalPrice - $coupon->amount;
             }else{
                return $newTotal = ($totalPrice*$coupon->amount) / 100;
             }
        }else{

            return 'false';
        }
    }
}
