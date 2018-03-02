@extends('layouts.index')

@section('header')
    <header class="masthead" style="background-image: url('/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 mx-auto">
                    <div class="site-heading">
                        <h1>{{ setting('site.title') }}</h1>
                        <span class="subheading">{{ setting('site.description') }}</span>
                        <div id="logo" class="bounce">
                            <a href="#about" class="js-scroll-trigger">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
<section id="about">
<div class="row">

        @foreach ($posts as $post)
            @include('partials.post', ['post' => $post])
        @endforeach

</div>
</section>
@stop