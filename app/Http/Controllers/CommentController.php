<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Blog;
use Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('id','desc')->paginate(10);

        return view('comment.index')->withComments($comments);
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
    public function store(Request $request, $blog_id)
    {
        $this->validate($request, array(
                'name'          => 'required|max:255',
                'email'           => 'required|max:255',
                'body'           => 'required'
            ));

        $blog = Blog::find($blog_id);
        //Store in the database
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->body = $request->body;
        $comment->visibility = 'notVisible';
        $comment->blog()->associate($blog); //commetn model theke asche

        $comment->save();


        Session::flash('success','The blog post was successfully saved!');

        //redirect to another page
        return redirect()->route('sBlog.single', [$blog->slug]);    
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
        $comment = Comment::find($id);
        $comment->visibility = 'visible';

        $comment->save();

        Session::flash('success', 'This Comment Get Approved.');
        return redirect()->route('comments.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        Session::flash('success', 'The Product was successfully deleted.');
        return redirect()->route('comments.index'); 
    }
}
