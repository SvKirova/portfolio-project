<x-layout.main
    description="Here are the most frequently asked questions in the HBO-ICT programme in HZ University of Applied Sciences. Answers are provided below every question."
    keywords="FAQ, Questions, Answers, HZ"
    title="Portfolio | FAQ">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css-files/faq-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css-files/pagination-style.css') }}">
    @endpush

    <h1 id="faq-title">Frequently Asked Questions (FAQ) </h1>
    <img id="faq-pic" src="{{ asset('images/questions.png') }}" alt="question-mark-image">

  <div id="wrap-content">
    <!-- Questions & their answers -->
    @if ($faqs->isEmpty())
        <details>
        <summary> There are no FAQs </summary>
            <div>
                <p>You can create new FAQs by clicking the button below</p>
            </div>
        </details>
    @else
        @foreach($faqs as $faq)
              <div id="wrap-faq">
                  <x-faq.question-answer :faq="$faq"></x-faq.question-answer>
                  <a href="{{ route('faqs.edit', ['id' => $faq->id]) }}"><button id="edit-button">Edit FAQ</button></a>
                  <button id="delete-button" onclick="showModal('{{ route('faqs.destroy', $faq->id) }}')">Delete FAQ</button>
                  <x-ui.modal></x-ui.modal>
              </div>
        @endforeach
    @endif
      <a href="{{ route('faqs.create') }}"><button id="create-button">Create a new FAQ</button></a>

      @if ($faqs->hasPages())
          <hr id="faq-separator">
      @endif

      <div class="pagination">
          {{ $faqs->links() }}
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
