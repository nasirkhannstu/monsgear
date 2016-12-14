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
        if(Session::has('coupon')){
            $coupon = Session::get('coupon');
            $couponTotal = $this->calCoupon($coupon->name);
        }else{
            $coupon = false;
            $couponTotal = false;
        }
        
        if(!Session::has('cart')){
            return view('pages.checkout');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
        Session::put('newcart', $cart);

        return view('pages.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'coupon' => $coupon, 'couponTotal' => $couponTotal]);
    }
// amount,freeship,minspent,excludcat,limit,expire,dtype

    public function calCoupon($coupon){
        if(Coupon::where('name', '=', $coupon)->exists()){

            $coupon = Coupon::where('name', "=", $coupon)->first();
            Session::put('coupon', $coupon);
            $coupon = Session::get('coupon');

            if(!Session::has('cart')){
                return view('pages.welcome');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $totalPrice = $cart->totalPrice;
            $products = $cart->items;

            $exp = $coupon->created +($coupon->expire * 60 * 60);
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
                            $withCat = $withCat - (($withCat*$coupon->amount) / 100) ;
                        }

                        $total = $withoutCat+$withCat;

                        if($coupon->freeship == 'No' && $totalPrice <= 500){
                            $total = $total + 25;
                        }
                        return $total;
                    }else{
                        Session::flash('err','Min Spent: failed!');
                        return false;
                    }
                }else{
                    Session::flash('err','Coupon limit failed!');
                        return false;
                }
            }else{
                Session::flash('err','Coupon Expired!');
                        return false;
            }  
        }else{
            Session::flash('err','Invalid Coupon!');
                        return false;
        }
    }
    public function getCoupon(Request $request){
        if($getCoupon = $this->calCoupon($request->coupon)){

            // $coupon = Coupon::where('name', "=", $request->coupon)->first();
            $coupon = Session::get('coupon');
            
            if(!Session::has('cart')){
                return view('pages.welcome');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'coupon' => $coupon, 'couponTotal' => $getCoupon]);
        }else{
            $coupon = Coupon::where('name', "=", $request->coupon)->first();

            if(!Session::has('cart')){
                return view('pages.welcome');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return redirect()->route('product.shoppingCart')->withProducts($cart->items)->withTotalPrice($cart->totalPrice);
        }
    }
}