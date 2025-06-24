<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the dashboard page.
     *
     * @return View The dashboard.blade.php view
     */
    public function index(): View
    {
        return view('dashboard', ['courses' => Course::all()], ['tests' => Test::all()]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'best_grade' => 'nullable|numeric|min:0|max:10',
            'created_at' => 'nullable|date',
        ]);

        $test = Test::where('id', $id)->firstOrFail();
        if ($validated['best_grade'] > $test->best_grade || $test->best_grade === null) {
            $test->update(['best_grade' => $validated['best_grade']]);
            if ($test->created_at === null && $validated['best_grade'] >= $test->lowest_passing_grade) {
                $test->update(['created_at' => $validated['created_at']]);
            }

            // Check if all tests in the course have a created_at value
            $allTests = $test->course->tests;
            $allTestsHaveCreatedAt = $allTests->every(function ($test) {
                return $test->created_at !== null;
            });

            if ($allTestsHaveCreatedAt) {
                $test->course->update(['passed_at' => $test->course->tests->last()->created_at]);
            }

            return redirect()->route('dashboard.index')->with('success', 'Dashboard updated successfully!');
        } else {
            return redirect()->route('dashboard.index')->with('info', 'The grade that you submitted is less than
            or equal to your best grade! No changes have been made.');
        }
    }
}
