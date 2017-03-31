<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$posts = Post::all()->paginate(5);
        $posts = Post::orderBy('id' ,'desc')->paginate(5);
        return view('admin_post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin_post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating the data
        $this->validate($request , [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        //Store in the database
         $post = new Post;
         $post->title = $request->title;
         $post->body = $request->body;
         $post->save();
         // Message Flash
        Session::flash('success', 'The blog post was successfully save !');
         //Redirect the page
        return redirect()->route('posts.show',$post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Display single Post

        $post = Post::find($id);
        return view('admin_post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the post in the database and save as a var
        $post = Post::find($id);

        //return the view and pass in the var we previous created
        return view('admin_post.edit',compact('post'));
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
       //Validate the data
        $this->validate($request , [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
        //Save the data to the database
        $post = Post::find($id);
        $post->title = $request ->input('title');
        $post->body = $request ->input('body');

        $post->save();

        //Set flash data with success message
        Session::flash('success','This post was successfully saved');

        //redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);

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
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'The post was succesfully deleted');
        return redirect()->route('posts.index');
    }
}
