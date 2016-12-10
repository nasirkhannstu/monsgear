<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\Product;
use App\Category;
use App\Userinfo;
use App\Cartproduct;
use App\order;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
                'info'          => 'max:255',
                'method'          => 'required'
            ));
        
        if(Session::has('coupon')){
            $coupon = Session::get('coupon');
            $couponid = $coupon->id;
        }else{
            $couponid = 'NULL';
        }
        $order = new Order;
        $order->method = $request->method;
        $order->coupon = $couponid;
        $order->save();

        $userId = "guest";
        $userinfo = new Userinfo;
        $userinfo->userId = $userId;
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


        if(!Session::has('cart')){
            return view('pages.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $totalPrice = $cart->totalPrice;
        $products = $cart->items;


        foreach($products as $product){
            $cartproducts = new Cartproduct;
            $cartproducts->order_id = $order->id;
            $cartproducts->product_id = $product['item']['id'];
            $cartproducts->product_amount = $product['qty'];
            $cartproducts->totalprice = $totalPrice;
            $cartproducts->save();
        }


        Session::flash('success','The Order has successfully saved!');

        //redirect to another page
        return redirect()->route('product.checkout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
