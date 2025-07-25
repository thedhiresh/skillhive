<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // List all courses
    public function index()
    {
        // eager load categories to avoid N+1 problem
        $courses = Course::all();
        $categories = Category::all();
        return view('admin.courses.index', compact('categories','courses'));
    }

    // Show create form
    public function create()
    {
        $categories = Category::all();
        return view('admin.courses.create', compact('categories'));
    }

    // Store new course
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'how_section' => 'nullable|string',
            'guidance' => 'nullable|string',
            'reference' => 'nullable|string',
        ]);

        $data = $request->only(['category_id', 'title', 'description', 'how_section', 'guidance', 'reference']);

        // Handle feature image upload
        if ($request->hasFile('feature_image') && $request->file('feature_image')->isValid()) {
            $uploadPath = public_path('uploads/courses');
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $featureImage = $request->file('feature_image');
            $featureImageName = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $featureImage->getClientOriginalName());

            if ($featureImage->move($uploadPath, $featureImageName)) {
                $data['feature_image'] = 'uploads/courses/' . $featureImageName;
            }
        }

        Course::create($data);

        return redirect()->to('/courses')->with('success', 'Course created successfully!');
    }

    // Show single course
    public function show(Course $course)
    {
        $courses = Course::all();
        $categories = Category::all();
        return view('admin.courses.show', compact('course', 'categories'));
    }

    // Show edit form
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('admin.courses.edit', compact('course', 'categories'));
    }

    // Update course
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'feature_image' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'how_section' => 'nullable|string',
            'guidance' => 'nullable|string',
            'reference' => 'nullable|string',
        ]);

        $course->update($request->all());

        return redirect()->route('admin.courses.index')->with('success', 'Course updated!');
    }

    // Delete course
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted!');
    }
}
