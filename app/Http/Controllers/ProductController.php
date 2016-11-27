<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Image;
use Storage;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddToCart( Request $request, $id )
    {

        $products = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $products->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('pages.index');
    }
    public function getAddToCartC( Request $request, $id )
    {

        $products = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $products->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.shoppingCart');
    }

    public function getReduceByOneC($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('product.shoppingCart');
    }
    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        Session::put('cart', $cart);
        return redirect()->route('product.shoppingCart');
    }

    public function getCart()
    {
        if(!Session::has('cart')){
            return view('pages.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(10);

        return view('product.index')->withProducts($products);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'name'          => 'required|max:255',
                'slug'           => 'required|alpha_dash|min:5|max:255|unique:products,slug',
                'body'           => 'required',
                'price'           => 'required',
                'image'          => 'sometimes|image'
            ));
        //Store in the database
        $product = new Product;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->body = $request->body;

        if($request->hasFile('image')){
           $image = $request->file('image');
           $filename = time() . '.' . $image->getClientOriginalExtension();
           $location = public_path('uploads/product/'. $filename);
           Image::make($image)->save($location);

           $product->image = $filename;
        }

        $product->save();


        Session::flash('success','The Product has successfully saved!');

        //redirect to another page
        return redirect()->route('product.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show')->withProduct($product);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->withProduct($product);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        
        $this->validate($request, array(
            'name'          => 'required|max:255',
            'slug'           => 'required|alpha_dash|min:5|max:255|unique:products,slug,$id',
            'body'           => 'required',
            'price'           => 'required',
            'image'          => 'image'
        ));

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->body = $request->input('body');
        $product->price = $request->input('price');

        if($request->hasFile('image')){
           $image = $request->file('image');
           $filename = time() . '.' . $image->getClientOriginalExtension();
           $location = public_path('uploads/product/'. $filename);
           Image::make($image)->resize(800, 400)->save($location);

           $oldImg = $product->image;
           $product->image = $filename;
           Storage::delete('product/'.$oldImg);
        }

        $product->save();
        

        Session::flash('success','This product was successfully saved!');
        return redirect()->route('product.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        
        Storage::delete('product/'.$product->image);
        $product->delete();
        Session::flash('success', 'The Product was successfully deleted.');
        return redirect()->route('product.index');      
    }
}
