<div class="post-preview">
    <a href="/articles/{{$article->id}}">
        <h2 class="post-title">
            {{ $article->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ $article->excerpt }}
        </h3>
    </a>
    <p class="post-meta">Posted by
        <a href="#">{{ $article->user->name }}</a>
        on {{ $article->created_at->format('F d, Y') }}</p>


    @foreach($article->categories as $category)
        <span>{{ $category->name }}</span>
    @endforeach
</div>
<hr>