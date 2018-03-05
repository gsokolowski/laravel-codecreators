<div class="post-preview">
    <a href="/posts/{{$post->id}}">
        <h2 class="post-title">
            {{ $post->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ $post->excerpt }}
        </h3>
    </a>
    <p class="post-meta">Posted by
        <a href="#">{{ $post->user->name }}</a>
        on {{ $post->created_at->format('F d, Y') }}</p>


    @foreach($post->categories as $category)
        <span>{{ $category->name }}</span>
    @endforeach
</div>
<hr>