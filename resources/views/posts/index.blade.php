<x-layout.main
    description="In the blog page, you can find a list of blog posts, each containing a different topic about why I chose ICT, what is my experience in the area, my SWOT analysis, my dream companies and many more."
    keywords="Blog, Posts, ICT, Programming"
    title="Portfolio | Blog">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css-files/blog-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css-files/pagination-style.css') }}">
    @endpush

    <article class="all-posts">
        <h1 id="blog-title">Blog posts</h1>
        @if ($posts->isEmpty())
            <article class="post">
                <h2><i>This blog is empty</i></h2>
                <h3><i>You can create new blog posts by clicking the button below</i></h3>
            </article>
        @else
            @foreach($posts as $post)
                <x-post.article :post="$post"></x-post.article>
          @endforeach
        @endif
        <a href="{{ route('posts.create') }}"><button id="create-button">Create a new post</button></a>

        @if ($posts->hasPages())
            <hr id="blog-separator">
        @endif

        <div class="pagination">
            {{ $posts->links() }}
        </div>

    </article>
</x-layout.main>
