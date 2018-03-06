@extends('layouts.index')

@section('title', ' - '.$article->title)

@section('header')
    <header class="masthead" style="background-image: url(/storage/{{ $article->image }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $article->title }}</h1>
                        <h2 class="subheading">{{ $article->sub_title }}</h2>
                        <span class="meta">Posted by
                             <a href="#">{{ $article->user->name }}</a>
                            on {{ $article->created_at->format('F d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <h2 class="subheading">{{ $article->excerpt }}</h2>
                    {!! $article->body !!}
                </div>
            </div>
        </div>
    </article>

@stop
