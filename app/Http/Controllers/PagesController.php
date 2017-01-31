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
        $products = Product::all();
            $injectable = Product::where('category_id', "=", 2)->orderBy('id', 'desc')->get();
            $oral = Product::where('category_id', "=", 1)->orderBy('id', 'desc')->get();
            $peptide = Product::where('category_id', "=", 3)->orderBy('id', 'desc')->get();


    	$blogs = Blog::orderBy('id','desc')->get();

        return view('pages.welcome')->withInjectable($injectable)->withOral($oral)->withPeptides($peptide)->withProducts($products)->withBlogs($blogs);
    }
    public function getAllblog(){
        $blogs = Blog::orderBy('id','desc')->get();
        $sideblogs = Blog::orderBy('id','desc')->limit(5)->get();
        return view('pages.allblogs')->withBlogs($blogs)->withSideblogs($sideblogs);
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
        $sideblogs = Blog::orderBy('id','desc')->limit(5)->get();
        return view('pages.singleBlog')->withBlog($blog)->withSideblogs($sideblogs);
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
        }else{
            $userInfo = false;
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
            if($exp >= time()){
                if($coupon->used < $coupon->limit){
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

                        if($coupon->freeship == 'no' && $totalPrice <= 500){
                            $total = $total + 25;
                        }
                        return $total;
                    }else{
                        Session::flash('err',"You must have to buy minimum $$coupon->minspent to use this coupon!");
                        Session::forget('coupon');
                        return false;
                    }
                }else{
                    Session::flash('err','Coupon limit failed!');
                    Session::forget('coupon');
                    return false;
                }
            }else{
                Session::flash('err','Coupon Expired!');
                Session::forget('coupon');
                return false;
            }  
        }else{
            Session::flash('err','Invalid Coupon!');
            Session::forget('coupon');
            return false;
        }
    }
    public function getShowCoupon(){
        if(Session::has('coupon')){
            $coupon = Session::get('coupon');
            if($getCoupon = $this->calCoupon($coupon->name)){
                $coupon = Session::get('coupon');
            }else{
                $coupon = false;
                $getCoupon = false;
            }
        }else{
            $coupon = false;
            $getCoupon = false;
        }
        
        if(!Session::has('cart')){
            return redirect()->route('pages.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'coupon' => $coupon, 'couponTotal' => $getCoupon]);
    }
    public function getCoupon(Request $request){
        if(Coupon::where('name', '=', $request->coupon)->exists()){
            $coupon = Coupon::where('name', "=", $request->coupon)->first();
            Session::put('coupon', $coupon);
            return redirect()->route('product.shoppingCart');
        }else{
            Session::flash('err','Invalid Coupon!');
            return redirect()->route('product.shoppingCart');
        }
        
    }

    public function showContact(){
        $sideblogs = Blog::orderBy('id','desc')->limit(5)->get();
        return view('pages.contact')->withSideblogs($sideblogs);
    }
    public function showAbout(){
        $sideblogs = Blog::orderBy('id','desc')->limit(5)->get();
        return view('pages.about')->withSideblogs($sideblogs);
    }
    public function getSearchPage(){
        $sideblogs = Blog::orderBy('id','desc')->limit(5)->get();
        return view('pages.search')->withSideblogs($sideblogs);
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



}