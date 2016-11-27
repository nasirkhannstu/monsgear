<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use Session;
use Image;
use Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(10);

        return view('blog.index')->withBlogs($blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
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
                'title'          => 'required|max:255',
                'slug'           => 'required|alpha_dash|max:255|unique:blogs,slug',
                'body'           => 'required',
                'image'          => 'sometimes|image'
            ));
        //Store in the database
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->body = $request->body;

        if($request->hasFile('image')){
           $image = $request->file('image');
           $filename = time() . '.' . $image->getClientOriginalExtension();
           $location = public_path('uploads/blogimg/'. $filename);
           Image::make($image)->resize(800, 400)->save($location);

           $blog->image = $filename;
        }
        

        $blog->save();


        Session::flash('success','The blog post was successfully saved!');

        //redirect to another page
        return redirect()->route('blog.show', $blog->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show')->withBlog($blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit')->withBlog($blog);
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
        $blog = Blog::find($id);

        
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => "required|alpha_dash|max:255|unique:blogs,slug,$id",
            'body'  => 'required',
            'image' => 'image'
        ));

        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->slug = $request->input('slug');
        $blog->body = $request->input('body');

        if($request->hasFile('image')){
           $image = $request->file('image');
           $filename = time() . '.' . $image->getClientOriginalExtension();
           $location = public_path('uploads/blogimg/'. $filename);
           Image::make($image)->resize(800, 400)->save($location);

           $oldImg = $blog->image;
           $blog->image = $filename;
           Storage::delete('blogimg/'.$oldImg);
        }

        $blog->save();
        

        Session::flash('success','This blog was successfully saved!');
        return redirect()->route('blog.show', $blog->id);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Blog::find($id);
        
        Storage::delete('blogimg/'.$post->image);
        $post->delete();
        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('blog.index');    
    }
}
