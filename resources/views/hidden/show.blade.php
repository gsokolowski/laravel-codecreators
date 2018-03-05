@extends('layouts.index')



@section('header')
    <header class="masthead" style="background-image: url(/storage/posts/post1.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>Hidden post</h1>
                        <h2 class="subheading">I'm hidden</h2>
                        <span class="meta">Posted by
                             <a href="#">Greg</a>
                            on 5 March 2018</span>
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
                    <h2 class="subheading">Hidden</h2>

                </div>
            </div>
        </div>
    </article>

@stop
