<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $posts = Post::orderBy('created_at', 'desc')->where('user_id', $user_id)->get();
        return view('posts.index')->with('posts',$posts);
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
        $this->validate($request, [
            'name' => 'required',
            'protein' => 'required',
            'carbs' => 'required',
            'fat' => 'required',
            'meal' => 'required'
        ]);

        // Create Post
        $post = new Post;
        $post->name = $request->input('name');
        $post->protein = $request->input('protein');
        $post->carbs = $request->input('carbs');
        $post->fat = $request->input('fat');
        $post->meal = $request->input('meal');
//        $post->meal = $request->input('meal');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Meal Added');
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
        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', "Unauthorized Page");
        }

        $post = Post::find($id);
//            Post::orderBy('id', 'desc')->get();
        return view('posts.show')->with('post', $post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', "Unauthorized Page");
        }
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
//        $this->validate($request, [
//            'title' => 'required',
//            'protein' => 'required',
//            'carbs' => 'required',
//            'fat' => 'required'
//        ]);

        $post = Post::find($id);

//        $post->name = $request->input('title');
//        $post->protein = $request->input('protein');
//        $post->carbs = $request->input('carbs');
//        $post->fat = $request->input('fat');
//        $post->save();

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', "Unauthorized Page");
        }

//        return redirect('/posts')->with('success', 'Food Added');
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
        return redirect('/posts')->with('success', 'Meal Removed');
        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', "Unauthorized Page");
        }
    }
}
