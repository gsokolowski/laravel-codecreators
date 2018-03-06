<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        // $articles = Article::all();
        // $articles = Article::paginate(2);

//        $articles = Article::where([
//            'status' => 'PUBLISHED'
//        ])->orderBy('id', 'desc')->paginate(3);

        $articles = Article::where([
            'status' => 'PUBLISHED'
        ])->orderBy('id', 'desc')->get();

// many to many
//        $article = Article::find(1);
//        foreach ( $article->categories as $category) {
//            print_r($category->name);
//        }
//        dd();

        return view('articles.index', [
            'articles' => $articles,
            'backgroundImg'=>'/img/home-bg.jpg'
            ]);
    }


    public function show(Article $article) {

        return view('articles.show', ['article'=>$article]);
    }

    public function php(Category $category) {

        $cat = $category->findBySlug('php');

// many to many
//        foreach ( $cat->articles as $article) {
//            print_r($article->title);
//        }
//        dd();
        return view('articles.index', [
            'articles' => $cat->articles, // you have here all articles related to the category
            'backgroundImg'=>'/img/php-bg.jpg'
        ]);

    }

    public function laravel(Category $category) {

        $cat = $category->findBySlug('laravel');

        return view('articles.index', [
            'articles' => $cat->articles,
            'backgroundImg'=>'/img/laravel-bg.jpg'
        ]);

    }

    public function angular(Category $category) {

        $cat = $category->findBySlug('angular');

        return view('articles.index', [
            'articles' => $cat->articles,
            'backgroundImg'=>'/img/angular-bg.jpg'
        ]);

    }

}
