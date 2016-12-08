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

    public function calCoupon($coupon){
        if(Coupon::where('name', '=', $coupon)->exists()){

            $coupon = Coupon::where('name', "=", $coupon)->first();
            if(!Session::has('cart')){
                return view('pages.checkout');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $totalPrice = $cart->totalPrice;
            $products = $cart->items;

            $exp = $coupon->expire * 60 * 60;
            if($exp <= time()){
                if($coupon->limit <= $coupon->limit){
                    if($totalPrice >= $coupon->minspent){
                        $withCat = 0;
                        $withoutCat = 0;
                        foreach($products as $product){
                            $prodictId = $product['item']['id'];
                            $mProduct = Product::find($prodictId);
                            if($mProduct->category->id == $coupon->excludcat){
                                $withoutCat += $product['price'];
                                
                            }else{
                                $withCat += $product['price'];
                            }
                        }
                        if($coupon->dtype == 'cart'){
                            $withCat = $withCat - $coupon->amount;
                        }else{
                            $withCat += ($withCat*$coupon->amount) / 100;
                        }

                        $total = $withoutCat+$withCat;

                        if($coupon->freeship == 'yes'){
                            $total = $total - 25;
                        }
                        return $total;
                    }else{
                        return $msg = 'Min Spent: failed';
                    }
                }else{
                    return $msg =  'Coupon limit failed';
                }
            }else{
                return $msg =  "Expired!!";
            }  
        }else{
            return $msg =  'Invalid Coupon';
        }
    }
    public function getCoupon(Request $request){
        $getCoupon = $this->calCoupon($request->coupon);
        $coupon = Coupon::where('name', "=", $request->coupon)->first();

        if(!Session::has('cart')){
            return view('pages.welcome');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'coupon' => $coupon, 'couponTotal' => $getCoupon]);
    }
}