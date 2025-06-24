<x-layout.main
    description="On this page you can create a new FAQ that will be added to the collection of frequently asked questions."
    keywords="Question, Answer, FAQ"
    title="Portfolio | Create FAQ">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css-files/forms-style.css') }}">
    @endpush

    <div>
        <form action="{{ route('faqs.store') }}" method="POST">
            @csrf
            <h1 id="form-title"> Create a new FAQ </h1>
            <h3 id="form-sub"> Please fill out all the form fields and click 'Save' </h3>

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
        <label>Question</label>
            <input type="text" name="question" placeholder="Enter a question..." value="{{ old('question') }}"
                   class="@error('question') is-invalid @enderror">

        {{-- Second input --}}
        <label>Link</label>
            <input type="text" name="link" placeholder="Enter a link for your answer..." value="{{ old('link') }}"
                   class="@error('link') is-invalid @enderror">

        {{-- Third input --}}
        <label>Answer</label>
            <x-ui.wysiwyg name="answer" id="txt" rows="15" placeholder="Enter the question's answer...
            (If you want to include the link in the answer, write [link] in the place where you want the link
            to appear. For example: Visit [link] to learn about HZ...)" value="{{ old('answer') }}"></x-ui.wysiwyg>

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
                    const textarea = document.querySelector('#ckeditor-answer').editor;
                    textarea.setData('', '');
                });
        </script>
    @endpush
</x-layout.main>

