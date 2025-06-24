@php use Carbon\Carbon; @endphp

<x-layout.main
    description="This is my post about: {{ $post->title }}"
    keywords="Blog, post, description"
    title="Portfolio | Post">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css-files/forms-style.css') }}">
    @endpush

<div class="container">
    <!-- Heading on top -->
    <h1 class="page-heading"> {{ $post->title }}</h1>
    <div class="image-stack">
        <img class="post-pic" src="{{ asset('images/it-specialist.png') }}" width="550px" height="440px" alt="pic-of-person">
        <br>
        <img class="post-pic" src="{{ asset('images/computer.png') }}" width="500px" height="410px"
             alt="pic-of-computer">
    </div>
    <!-- Text container for the body of the post -->
    <div class="text">
        <hr id="line">
        {!! $post->body !!}
        <hr id="line">
        <p><i> Last update: {{ Carbon::parse($post->created_at)->format('l jS \of F Y h:i:s A') }} </i></p>

        <!-- Buttons to go back to the blog page, edit or delete the post -->
        <div id="group-buttons">
            <a href="{{ route('posts.index') }}"><button id="back-button">Back to blog</button></a>
            <a href="{{ route('posts.edit', ['slug' => $post->slug]) }}"><button id="edit-button">Edit post</button></a>
            <button id="delete-button" onclick="showModal('{{ route('posts.destroy', $post->slug) }}')">Delete post</button>
            <x-ui.modal></x-ui.modal>
        </div>
    </div>
</div>
        @push('scripts')
            <script>
                function showModal(route) {
                    document.getElementById('delete-form').action = route;
                    document.getElementById('modal-div').style.display = 'block';
                }
            </script>
        @endpush
</x-layout.main>
