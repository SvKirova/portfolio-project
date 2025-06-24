<x-layout.main
    description="Here is the dashboard table containing information about all of the course subjects that are present in our programme during the first year in HBO-ICT at HZ University of Applied Sciences."
    keywords="Course content, ICT, Dashboard"
    title="Portfolio | Dashboard">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css-files/dashboard-style.css') }}">
    @endpush

    <h1 id="course-structure">Course structure of the programme</h1>
            @if($courses->isEmpty() || $tests->isEmpty())
                <h2 id="empty-db">There is no data present</h2>
            @else
                <table>
                    <thead>
                    <tr>
                        <!-- new row -->
                        <th>
                            <p> Code </p>
                        </th>
                        <th>
                            <p> Course Name</p>
                        </th>
                        <th>
                            <p> ECs </p>
                        </th>
                        <th>
                            <p> Exam </p>
                        </th>
                        <th>
                            <p> Weighing Factor </p>
                        </th>
                        <th>
                            <p> Passed At </p>
                        </th>
                        <th>
                            <p> Best grade </p>
                        </th>
                        <th>
                            <p> Grade</p>
                        </th>
                        <th>
                            <p> Course Grade</p>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Render the course row with the first exam -->
                    @foreach($courses as $course)
                        <x-dashboard.table-row :course="$course" :tests="$course->tests"></x-dashboard.table-row>
                        <!-- Render additional exams for the course -->
                        @foreach($course->tests->skip(1) as $test)
                            <tr>
                                <x-dashboard.exam-cells :test="$test"></x-dashboard.exam-cells>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>

                <h2 id="study-monitor"> Study monitor | Progress bar </h2>

                <!-- Progress bar -->
                <div class="progress-bar">
                    <div class="progress-bar-value">
                        <p id="pass"> 45 ECs </p>
                        <p id="max"> 60 ECs </p>
                    </div>
                    <div class="progress-bar-fill"></div>
                </div>

                <h2 id="requirements">In order to pass your first year in HBO-ICT you need to have gathered at least 45 out of
                    60 ECs ( NBSA / Negative Binding Study Advice / = 45 ECs)
                </h2>
            @endif
</x-layout.main>
