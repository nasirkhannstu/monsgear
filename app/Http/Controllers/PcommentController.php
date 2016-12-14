<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pcomment;
use App\Product;
use Session;

class PcommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcomments = Pcomment::orderBy('id','desc')->paginate(10);

        return view('pcomment.index')->withPcomments($pcomments);
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
    public function store(Request $request, $product_id)
    {
        $this->validate($request, array(
                'name'          => 'required|max:255',
                'email'           => 'required|max:255',
                'body'           => 'required'
            ));

        $product = Product::find($product_id);
        //Store in the database
        $pcomment = new Pcomment;
        $pcomment->name = $request->name;
        $pcomment->email = $request->email;
        $pcomment->body = $request->body;
        $pcomment->rating = 4;
        $pcomment->visibility = 'notVisible';
        $pcomment->product()->associate($product); //commetn model theke asche

        $pcomment->save();


        Session::flash('success','Your comment has been queued for review by site administrators and will be published after approval.');

        //redirect to another page
        return redirect()->route('blog.single', [$product->slug]);    
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
        $pcomment = Pcomment::find($id);
        $pcomment->visibility = 'visible';

        $pcomment->save();

        Session::flash('success', 'This Product Comment Get Approved.');
        return redirect()->route('pcomments.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pcomment = Pcomment::find($id);
        $pcomment->delete();
        Session::flash('success', 'The Product was successfully deleted.');
        return redirect()->route('pcomments.index'); 
    }
}
