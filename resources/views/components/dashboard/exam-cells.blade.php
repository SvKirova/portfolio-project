@php use Carbon\Carbon; @endphp

<form action="{{ route('dashboard.update', $test->id) }}" method="POST">
    @csrf
    @method('PUT')
    <td>{{ $test->name }}</td>
    <td class="cell"> {{ ($test->weighing_factor * 100). '%' }} </td>
    <td class="cell">
        @if ($test->created_at)
            {{ Carbon::parse($test->created_at)->format('jS \of F Y') }}
        @else
            <p> Still not passed </p>
            <input type="date" name="created_at" class="date-picker">
        @endif
    </td>
    <td class="cell"> @if($test->best_grade != null) {{ $test->best_grade }} @else {{ 'Still not graded' }} @endif </td>
    <td class="grades"><input type="text" name="best_grade"> <button>Submit</button></td>
</form>
