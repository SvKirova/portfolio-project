<x-layout.main
    description="On this page you can edit your blog post. Write all the changes that you want to make."
    keywords="Post, Blog, Edit"
    title="Portfolio | Edit Post">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css-files/forms-style.css') }}">
    @endpush

    <div>
        <form action="{{ route('posts.update', $post->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <h1 id="form-title">Edit your blog post</h1>
            <h3 id="form-sub"> Please write the necessary changes and click 'Save' </h3>

            @if ($errors->any())
                <div class="error-feedback">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- First input --}}
            <label>Title</label>
            <input type="text" name="title" placeholder="Enter the post's title..." value="{{ old('title', $post->title) }}"
                   class="@error('title') is-invalid @enderror">

            {{-- Second input --}}
            <label>Slug</label>
            <input type="text" name="slug" placeholder="e.g. my-first-post" value="{{ old('slug', $post->slug) }}"
                   class="@error('slug') is-invalid @enderror">

            {{-- Third input --}}
            <label>Body</label>
            <x-ui.wysiwyg name="body" id="txt" rows="15" placeholder="Enter the blog post's content..."  value="{{ old('body', $post->body) }}"></x-ui.wysiwyg>

            {{-- Buttons to save, cancel or reset the post --}}
            <div id="group-buttons">
                <button id="save-button" type="submit">Save</button>
                <a href="{{ url()->previous() }}" id="cancel-button">Cancel</a>
                <button id="reset-button" type="reset">Reset</button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            document.getElementById('reset-button').addEventListener('click', function () {
                const textarea = document.querySelector('#ckeditor-body').editor;
                textarea.setData(`{!! old('body', $post->body) !!}`, '');
            });
        </script>
    @endpush
</x-layout.main>

