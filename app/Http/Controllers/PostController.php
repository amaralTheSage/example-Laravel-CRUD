<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home')->with('posts', $posts);
    }

    // public function show($id)
    // {
    //     $a = 'oasijd';
    // }

    public function store(Request $request)
    {
        $post =  new Post;
        $post->content = $request->postBox;
        $post->save();
        return redirect()->back();
    }

    public function update(Request $req)
    {
        $post = Post::find($req->id);
        $post->update(['content' => $req->updateBox]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return redirect()->back(); // would otherwise be route('post.index')
    }
}
