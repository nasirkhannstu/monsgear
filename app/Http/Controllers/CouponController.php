<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Coupon;
use App\Category;
use Session;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('customer.auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('id','desc')->paginate(10);

        return view('coupon.index')->withCoupons($coupons);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('coupon.create')->withCategories($categories); 
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
                'name'            => 'required|max:255',
                'dtype'           => 'max:255',
                'amount'          => 'integer',
                'freeship'        => 'max:255',
                'minspent'        => 'integer',
                'excludcat'       => 'max:255',
                'limit'           => 'integer',
                'expire'          => 'integer'
            ));
        //Store in the database
        $coupon = new Coupon;
        $coupon->name = $request->name;
        $coupon->dtype = $request->dtype;
        $coupon->amount = $request->amount;
        $coupon->freeship = $request->freeship;
        $coupon->minspent = $request->minspent;
        $coupon->excludcat = $request->excludcat;
        $coupon->limit = $request->limit;
        $coupon->created = time();
        $coupon->expire = $request->expire;

        $coupon->save();


        Session::flash('success','The Coupon has successfully created!');

        //redirect to another page
        return redirect()->route('coupons.index');
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
        $coupon = Coupon::find($id);
        $coupon->delete();
        Session::flash('success', 'The Coupon was successfully deleted.');
        return redirect()->route('coupons.index'); 
    }
}
