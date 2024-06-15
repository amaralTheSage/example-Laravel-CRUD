<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home')->with('posts', $posts); // Sends $posts to home so it can be used there
    }

    // public function show($id)
    // {
    //     $a = 'oasijd';
    // }

    public function store(Request $request)
    {
        $post = new Post;

        // Grabs the postBox's content and all it needs is for the input field to have name="postBox"
        $post->content = $request->postBox;
        $post->save();
        return redirect()->back();
    }

    public function update(Request $req)
    {
        $post = Post::find($req->id);
        $post->update(['content' => $req->updateBox]);
        // replaces selected fields with the info provided;
        // updateBox: same shit as postBox;
        return redirect()->back();
    }

    public function destroy($id)
    {
        Post::destroy($id); // Quick and easy, this method fucks

        return redirect()->back(); // would otherwise be route('post.index')
    }
}
