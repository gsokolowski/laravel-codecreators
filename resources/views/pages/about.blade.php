@extends('layouts.index')

@section('title', ' - '.$page->title)

@section('header')
    <header class="masthead" style="background-image: url('/img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{ $page->title }}</h1>
                        <h2 class="subheading">{{ $page->sub_title }}</h2>
                        <span class="meta">Posted by
                             <a href="#">{{ $page->user->name }}</a>
                            on {{ $page->created_at->format('F d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="subheading">{{ $page->excerpt }}</h2>
                hhhhhhhhh
                {!! $page->body !!}
            </div>
        </div>
    </div>
@stop
