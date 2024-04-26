<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.index", ["posts" => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (isset($post)) {
            return view("posts.show", ["post" => $post]);
        }

        return redirect("/");
        
    }

    public function create()
    {
        $posts = Post::all();
        return view("posts.create", ["posts" => $posts]);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect("/");

        // dd($request);


    }
}
