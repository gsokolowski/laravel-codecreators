<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        // $posts = Post::all();
        // $posts = Post::paginate(2);

//        $posts = Post::where([
//            'status' => 'PUBLISHED'
//        ])->orderBy('id', 'desc')->paginate(3);

        $posts = Post::where([
            'status' => 'PUBLISHED'
        ])->orderBy('id', 'desc')->get();


        return view('posts.index', ['posts' => $posts]);
    }

     // calling static show
//    public static function show($slug) {
//        $post = Post::findBySlugStatic($slug);
//        return view('post.show', ['post'=>$post]);
//    }

      // Basic version
//    public function show($id) {
//
//        $post = Post::findOrFail($id);
//        return view('post.show', ['post'=>$post]);
//    }

    // Short version
    public function show(Post $post) {

        return view('posts.show', ['post'=>$post]);
    }


}
