<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display the index blog page.
     *
     * @return View The posts/index.blade.php view
     */
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::latest()->simplePaginate(10)
        ]);
    }

    /**
     * Create a new blog post
     * @return View The posts/create.blade.php view
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Edit a blog post
     * @return View The posts/edit.blade.php view
     */
    public function edit($slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the content of a blog post
     * @param Request $request
     * @param $slug
     * @return RedirectResponse
     */
    public function update(Request $request, $slug): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|min:10|max:255',
            'slug' => 'required|unique:posts,slug,' . $slug . ',slug',
            'body' => 'required|string|min:10'
        ]);

        $post = Post::where('slug', $slug)->firstOrFail();
        $post->update($validated);
        return redirect()->route('posts.show', $post->slug)->with('success', 'Post updated successfully!');
    }

    /**
     * Delete a blog post
     * @param $slug
     * @return RedirectResponse
     */
    public function delete($slug): RedirectResponse
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }

    /**
     * Show a blog post
     * @param $slug
     * @return View The posts/show.blade.php view
     */
    public function show($slug): View
    {
        // Find the post by its slug
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Store a new blog post
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|min:10|max:255',
            'slug' => 'required|string|unique:posts,slug|max:255|regex:/^[^ \/\\\\]*$/|min:10',
            'body' => 'required|string|min:10'
        ]);

        Post::create($validated);
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}
