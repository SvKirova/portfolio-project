@props(['value' => '', 'name', 'height' => 400])

<div class="@error($name) is-invalid @enderror">
    <textarea id="ckeditor-{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'textarea']) }} >{!! $value !!}</textarea>
</div>

@push('scripts')
    {{-- External link to the CKEditor JavaScript --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor-{{ $name }}'))
            .then(editor => {
                document.querySelector('#ckeditor-{{ $name }}').editor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

@push('styles')
    <style>
        {{-- Set the height of the editor --}}
        .ck-editor__editable_inline {
            min-height: {{ $height }}px;
        }
    </style>
@endpush
