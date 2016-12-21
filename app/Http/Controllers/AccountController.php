<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functionss;
use App\Product;
use App\Category;
use App\Userinfo;
use App\Cartproduct;
use App\Order;
use App\Coupon;
use Session;
use Auth;

class AccountController extends Controller
{
    public function showMyaccount(){
    	$userId = Auth::user()->id;
        if(Userinfo::where('userId', "=", $userId)->exists()){
            $userInfo = Userinfo::where('userId', "=", $userId)->first();
        }else{
            $userInfo = false;
        }
        return view('account.index')->withUserinfo($userInfo);
    }
    public function showAddress(){
    	$userId = Auth::user()->id;
        if(Userinfo::where('userId', "=", $userId)->exists()){
            $userInfo = Userinfo::where('userId', "=", $userId)->first();
        }else{
            $userInfo = false;
        }
        return view('account.addaddress')->withUserinfo($userInfo);
    }
    public function save(Request $request){
        $this->validate($request, array(
                'fname'          => 'required|max:255',
                'lname'           => 'required|max:255',
                'company'       => 'max:255',
                'address'           => 'required|max:255',
                'city'           => 'required|max:255',
                'state'           => 'required|max:255',
                'zip'           => 'required|max:255',
                'email'          => 'required|max:255',
                'board'          => 'max:255',
                'info'          => 'max:255'
            ));
        
        if(!Auth::guest()){
            $userId = Auth::user()->id;
         }else{
            $userId = "Guest";
        }
        $order_id = NULL;
        $userId = Auth::user()->id;
        if(Userinfo::where('userId', "=", $userId)->exists()){
            $userinfo = Userinfo::where('userId', "=", $userId)->first();
	        $userinfo->userId = $userId;
	        $userinfo->order_id = $order_id;
	        $userinfo->fname = $request->fname;
	        $userinfo->lname = $request->lname;
	        $userinfo->company = $request->company;
	        $userinfo->address = $request->address;
	        $userinfo->city = $request->city;
	        $userinfo->state = $request->state;
	        $userinfo->zip = $request->zip;
	        $userinfo->email = $request->email;
	        $userinfo->board = $request->board;
	        $userinfo->info = $request->info;
	        $userinfo->save();
        }else{
            $userinfo = new Userinfo;
	        $userinfo->userId = $userId;
	        $userinfo->order_id = $order_id;
	        $userinfo->fname = $request->fname;
	        $userinfo->lname = $request->lname;
	        $userinfo->company = $request->company;
	        $userinfo->address = $request->address;
	        $userinfo->city = $request->city;
	        $userinfo->state = $request->state;
	        $userinfo->zip = $request->zip;
	        $userinfo->email = $request->email;
	        $userinfo->board = $request->board;
	        $userinfo->info = $request->info;
	        $userinfo->save();
        }

        return redirect()->route('account.index');
    }
    public function showOrder(){
    	$userId = Auth::user()->id;

        if(Order::where('user_id', "=", $userId)->exists()){
            $orders = Order::where('user_id', "=", $userId)->get();
        }else{
            $orders = false;
        }
        return view('account.showorder')->withOrders($orders);
    }
    public function showProducts($id){
        $order = Order::find($id);
        $cartproducts = Cartproduct::where('order_id', "=", $order->id)->get();
        $mproducts = Product::all();
        return view('account.showproducts')->withCartproducts($cartproducts)->withMproducts($mproducts);
    }

}
