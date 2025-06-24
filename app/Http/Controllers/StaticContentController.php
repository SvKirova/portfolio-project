<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class StaticContentController extends Controller
{
    /**
     * Display the index page.
     *
     * @return View The index.blade.php view
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Display the profile page.
     *
     * @return View The profile.blade.php view
     */
    public function profile(): View
    {
        return view('profile');
    }
}
