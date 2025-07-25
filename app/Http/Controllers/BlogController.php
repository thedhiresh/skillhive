<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog,slug',
            'description' => 'required|string',
            'published' => 'boolean',
            'featured_image' => 'required|string|max:255',
            'url' => 'required|url|max:255'
        ]);

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Ensure published is boolean
        $validated['published'] = $request->has('published') ? true : false;

        Blog::create($validated);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog created successfully!');
    }

    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog,slug,' . $blog->id,
            'description' => 'required|string',
            'published' => 'boolean',
            'featured_image' => 'required|string|max:255',
            'url' => 'required|url|max:255'
        ]);

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Ensure published is boolean
        $validated['published'] = $request->has('published') ? true : false;

        $blog->update($validated);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog deleted successfully!');
    }
}
