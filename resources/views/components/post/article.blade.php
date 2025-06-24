@php use Carbon\Carbon; @endphp

<article class="post">
    <h2 class="post-title">{{ $post->title }}</h2>
    <p class="post-date">{{ Carbon::parse($post->created_at)->format('F Y') }}</p>
    <p> {!! Str::limit($post->body, 430) !!}</p>
    <a href="{{ route('posts.show', $post->slug) }}">
        <button>Read more...</button>
    </a>
</article>

