<tr class="ongoing">
    <td @if(count($tests) > 1) rowspan="{{ count($tests) }}" @endif> {{ $course->cu_code }}</td>
    <td @if(count($tests) > 1) rowspan="{{ count($tests) }}" @endif>{{ $course->name }}</td>
    <td class="ecs" @if(count($tests) > 1) rowspan="{{ count($tests) }}" @endif>{{ $course->credits }}</td>

    <!-- Render the first exam -->
    <x-dashboard.exam-cells :test="$tests->first()"></x-dashboard.exam-cells>
    <td @if(count($tests) > 1) rowspan="{{ count($tests) }}" @endif class="cell">
        {{ number_format($course->calculateCourseGrade(), 2) }}
    </td>
</tr>
