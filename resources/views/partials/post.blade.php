<div class="col-lg-4 col-md-6 col-sm-12 post-preview">
    <div class="card-border">
        <a href="/posts/{{$post->id}}">
            <img src="/img/about-bg.jpg" class="img-card">
            <h2 class="post-title">
                {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
                {{ $post->excerpt }}
            </h3>
        </a>
    </div>
    {{--<p class="post-meta">Posted by--}}
        {{--<a href="#">{{ $post->user->name }}</a>--}}
        {{--on {{ $post->created_at->format('F d, Y') }}</p>--}}
</div>