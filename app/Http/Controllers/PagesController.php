<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Userinfo;
use App\Product;
use App\Blog;
use App\Cart;
use App\Coupon;
use Session;
use Mail;
use Auth;

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
            return redirect()->route('pages.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
        Session::put('newcart', $cart);

        if(!Auth::guest()){
            $userId = Auth::user()->id;
            if(Userinfo::where('userId', "=", $userId)->exists()){
                $userInfo = Userinfo::where('userId', "=", $userId)->first();
            }else{
                $userInfo = false;
            }
         }

        return view('pages.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'coupon' => $coupon, 'couponTotal' => $couponTotal, 'userInfo' => $userInfo]);
    }
// amount,freeship,minspent,excludcat,limit,expire,dtype

    public function calCoupon($coupon){
        if(Coupon::where('name', '=', $coupon)->exists()){

            $coupon = Coupon::where('name', "=", $coupon)->first();
            Session::put('coupon', $coupon);
            $coupon = Session::get('coupon');

            if(!Session::has('cart')){
                return redirect()->route('pages.index');
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
                return redirect()->route('pages.index');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'coupon' => $coupon, 'couponTotal' => $getCoupon]);
        }else{
            $coupon = Coupon::where('name', "=", $request->coupon)->first();

            if(!Session::has('cart')){
                return redirect()->route('pages.index');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return redirect()->route('product.shoppingCart')->withProducts($cart->items)->withTotalPrice($cart->totalPrice);
        }
    }

    public function showContact(){
        return view('pages.contact');
    }
    public function showAbout(){
        return view('pages.about');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'order_number' => 'min:1',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'order_number' => $request->order_number,
            'name' => $request->name,
            'bodyMessage' => $request->message

        );

        Mail::send('email.contact', $data, function ($message) use ($data) {
            $message ->from($data['email']);
            $message->to('t@sectorbravo1.com');
            $message->subject($data['subject']);
        });
        Session::flash('success', 'Your Email was sent! ');
        return redirect('/');

    }
    public function showMyaccount(){
        return view('account.index');
    }


}