<?php

namespace App;
use App\Coupon;
use App\Product;
use App\Category;
use App\Cartproduct;
use App\Order;
use Session;
class Functionss
{
    public $totalPrice = 0;
    public function __construct(){
        
    }
    public function grandtotal($id){
        $order = Order::find($id);
        $total = $order->total;
        $coupon = Coupon::where('id', "=", $order->coupon)->first();
        $cartproducts = Cartproduct::where('order_id', "=", $order->id)->get();


        $var = $coupon->created +($coupon->expire * 60 * 60);
        if($var <= time()){
            if($coupon->limit <= $coupon->limit){
                if($total >= $coupon->minspent){
                    $withCat = 0;
                    $withoutCat = 0;
                    foreach($cartproducts as $product){
                        $prodictId = $product->product_id;
                        $mProduct = Product::find($prodictId);
                        if($mProduct->category_id == $coupon->excludcat){
                            $withoutCat += $mProduct->price*$product->product_amount;
                        }else{
                            $withCat += $mProduct->price*$product->product_amount;
                        }
                    }
                    //dd($withCat);
                    if($coupon->dtype == 'cart'){
                        $withCat = $withCat - $coupon->amount;
                    }else{
                        $withCat = $withCat - (($withCat*$coupon->amount) / 100);
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
    }
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
}
