<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Session;
use DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Buat variabel untuk nyimpan data dari database yg kemudian dilempar ke view page
        $posts = Post::orderBy('id','desc')->paginate(10);

        //variable dilempar ke view page
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validasi data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug'  => 'required|alpha_dash|min:5|max:255',
            'body'  => 'required'
        ));

        // insert data ke database
        $post = new Post;

        $post->title = $request->title;
        $post->slug  = $request->slug;
        $post->body  = $request->body;

        $post->save();

        Session::flash('success','The blog post was successfully save!');

        //redirect pages
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as variable
        $post = Post::find($id);

        //return the view and pass in the variable we previously created
        return view('posts.edit')->withPost($post);
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
        //validasi data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug'  => 'required|alpha_dash|min:5|max:255',
            'body'  => 'required'
        ));
        //save data ke database
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');

        $post->save();

        //set flash data with success message
        Session::flash('success','Post Updated');
        //redirect with flash data to post.show
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'The post was successfully deleted');
        return redirect()->route('post.index');
    }
}
