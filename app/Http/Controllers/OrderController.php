<?php

namespace App\Http\Controllers;

use App\Functionss;
use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\Category;
use App\Userinfo;
use App\Cartproduct;
use App\Order;
use App\Coupon;
use Session;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id','desc')->paginate(10);

        return view('order.index')->withOrders($orders);
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
        
        if(!Session::has('cart')){
            return redirect()->route('pages.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $totalPrice = $cart->totalPrice;
        $products = $cart->items;
        if(Session::has('coupon')){
            $coupon = Session::get('coupon');
            $couponid = $coupon->id;
        }else{
            $couponid = 'NULL';
        }
        if(!Auth::guest()){
            $userId = Auth::user()->id;
         }else{
            $userId = "Guest";
        }
        $status = "Processing";
        $order = new Order;
        $order->status = $status;
        $order->user_id = $userId;
        $order->total = $totalPrice;
        $order->method = $request->method;
        $order->coupon = $couponid;
        $order->save();

         
        $userinfo = new Userinfo;
        $userinfo->userId = $userId;
        $userinfo->order_id = $order->id;
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


        foreach($products as $product){
            $cartproducts = new Cartproduct;
            $cartproducts->order_id = $order->id;
            $cartproducts->product_id = $product['item']['id'];
            $cartproducts->product_amount = $product['qty'];
            $cartproducts->totalprice = $totalPrice;
            $cartproducts->save();
        }


        Session::flash('success','The Order has successfully Placed!');
        $total = 12;
        //redirect to another page
        return redirect()->route('pages.showorder', $order->id);
    }

    public function getShowOrder($id){
        $order = Order::find($id);
        $cartProducts = Cartproduct::where('order_id', "=", $order->id)->first();
        $userInfo = Userinfo::where('order_id', "=", $order->id)->first();

        $cart = Session::get('newcart');

        if(Session::has('coupon')){
            $coupon = Session::get('coupon');
            $getTotal = new Functionss;
            $couponTotal = $getTotal->calCoupon($coupon->name);
            //dd($couponTotal);
            // Saving Grand total
            $order->grandtotal = $couponTotal;
            $order->save();
        }else{
            $coupon = false;
            $couponTotal = false;
        }
        Session::forget('cart');
        //order email
        return view('pages.showorder', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'coupon' => $coupon, 'couponTotal' => $couponTotal, 'order' => $order, 'info' => $userInfo]);

        // return view('pages.showorder')->withOrder($order)->withProducts($cartProducts)->withInfo($userInfo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);

        $info = Userinfo::where('order_id', "=", $order->id)->first();

        $cartproducts = Cartproduct::where('order_id', "=", $order->id)->get();
        $mproducts = Product::all();

        return view('order.show')->withOrder($order)->withCartproducts($cartproducts)->withInfo($info)->withMproducts($mproducts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);

        $coupons = Coupon::all();
        if($order->coupon != "NULL"){
            $couponsel = Coupon::where('id', "=", $order->coupon)->first();
            $function = new Functionss;
            if($function->grandtotal($order->id)){
                $grandtotal = $function->grandtotal($order->id);
            }elseif($order->total <= 500){
                $grandtotal = $order->total + 25;
                $couponsel = false;
            }else{
                $grandtotal = $order->total;
                $couponsel = false;
            }
            
        }elseif($order->total <= 500){
            $grandtotal = $order->total + 25;
            $couponsel = false;
        }else{
            $couponsel = false;
            $grandtotal = $order->total;
        }
        //Saving grand total
        $order->grandtotal = $grandtotal;
        $order->save();

        $info = Userinfo::where('order_id', "=", $order->id)->first();

        $cartproducts = Cartproduct::where('order_id', "=", $order->id)->get();
        $mproducts = Product::all();

        return view('order.edit')->withOrder($order)->withCartproducts($cartproducts)->withInfo($info)->withMproducts($mproducts)->withCoupons($coupons)->withCouponsel($couponsel)->withGrandtotal($grandtotal);
    }

    public function getAddprod(Request $request, $id)
    {
        $selproduct = Product::find($request->selprod);
        $cartproducts = Cartproduct::where('order_id', "=", $id)->get();
        $cartprods = Cartproduct::all();
        // dd($cartprods);

        foreach($cartproducts as $cartproduct){
            if($cartproduct->product_id == $selproduct->id){
                Session::flash('success','This Product is already ordered. Please Add Quantity!');
                return redirect()->back();
            }else{
                $ok = "ok";
            }
        }
        if($ok = "ok"){

            $addproduct = new Cartproduct;
            $addproduct->order_id = $id;
            $addproduct->product_id = $request->selprod;
            $addproduct->product_amount = 1;
            $addproduct->totalprice = 'Null';
            $addproduct->save();

            $order = Order::find($id);
            $order->total = $order->total + $selproduct->price;
            $order->save(); 
        }
        
        return redirect()->back();
    }
    public function getAddstatus(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->selstatus;
        $order->save();
        return redirect()->back();
    }

    public function getAddcoupon(Request $request, $id)
    {
        $order = Order::find($id);
        $order->coupon = $request->selcoupon;
        $order->save();
        return redirect()->back();
    }
    public function getAddquantity(Request $request, $id)
    {
        
        $quantityadd = Cartproduct::find($request->product_id);
        $quantityadd->product_amount = $request->product_amount;
        $quantityadd->save();

        $newprods = Cartproduct::where('order_id', "=", $id)->get();
        $newTotal = 0;
        foreach($newprods as $newprods){
            $product = Product::find($newprods->product_id);
            $newTotal +=  $newprods->product_amount*$product->price;
        }
        $order = Order::find($id);
        $order->total = $newTotal;
        $order->save();
        return redirect()->back();
    }
    public function getAddaddress(Request $request, $id)
    {
        $info = Userinfo::where('order_id', "=", $id)->first();

        $info->address = $request->address;
        $info->city = $request->city;
        $info->state = $request->state;
        $info->state = $request->state;
        $info->zip = $request->zip;
        $info->save();
        return redirect()->back();
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
