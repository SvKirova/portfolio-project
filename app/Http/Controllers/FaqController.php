<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FaqController extends Controller
{
    /**
     * Display the index FAQ page.
     *
     * @return View The faqs/index.blade.php view
     */
    public function index(): View
    {
        return view('faqs.index', [
            'faqs' => Faq::simplePaginate(10)
        ]);
    }

    /**
     * Create a new FAQ
     * @return View The faqs/create.blade.php view
     */
    public function create(): View
    {
        return view('faqs.create');
    }

    /**
     * Store a new FAQ
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'question' => 'required|string|min:10|max:255',
            'link' => 'nullable|url',
            'answer' => 'required|string|min:10'
        ]);

        Faq::create($validated);
        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully!');
    }

    /**
     * Update a FAQ
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Validate the incoming request
        $validated = $request->validate([
            'question' => 'required|string|min:10|max:255',
            'link' => 'nullable|url',
            'answer' => 'required|string|min:10'
        ]);

        $faq = Faq::find($id);
        $faq->update($validated);
        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully!');
    }

    /**
     * Edit a FAQ
     * @param $id
     * @return View
     */
    public function edit($id): View
    {
        $faq = Faq::find($id);
        return view('faqs.edit', ['faq' => $faq]);
    }

    /**
     * Delete a FAQ
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id): RedirectResponse
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully!');
    }
}
