<details>
    <!-- Question -->
    <summary> {{ $faq->question }}</summary>

    <!-- Answer -->
    <div>
        @if ($faq->link)
            {!! str_replace('[link]', '<a href="' . $faq->link . '" target="_blank"> this link </a>', $faq->answer) !!}
        @else
            {!! $faq->answer !!}
        @endif
    </div>
</details>
