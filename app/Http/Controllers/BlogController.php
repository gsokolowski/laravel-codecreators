<?php

namespace App\Http\Controllers;

use App\Category;
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

// many to many
//        $post = Post::find(1);
//        foreach ( $post->categories as $category) {
//            print_r($category->name);
//        }

        return view('posts.index', [
            'posts' => $posts,
            'backgroundImg'=>'/img/home-bg.jpg'
            ]);
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

    public function php(Category $category) {
//        $posts = Post::where([
//            'category_id' => '1'
//        ])->orderBy('id', 'desc')->get();


        $cat = $category->findBySlug('php');

//        foreach ( $cat->posts as $post) {
//            print_r($post->title);
//        }

        return view('posts.index', [
            'posts' => $cat->posts, // you have here all posts related to the category
            'backgroundImg'=>'/img/php-bg.jpg'
        ]);

    }

    public function laravel(Category $category) {

//        $posts = Post::where([
//            'category_id' => '3'
//        ])->orderBy('id', 'desc')->get();

        $cat = $category->findBySlug('laravel');

        return view('posts.index', [
            'posts' => $cat->posts,
            'backgroundImg'=>'/img/laravel-bg.jpg'
        ]);

    }

    public function angular(Category $category) {

//        $posts = Post::where([
//            'category_id' => '2'
//        ])->orderBy('id', 'desc')->get();

        $cat = $category->findBySlug('angular');

        return view('posts.index', [
            'posts' => $cat->posts,
            'backgroundImg'=>'/img/angular-bg.jpg'
        ]);

    }

}
