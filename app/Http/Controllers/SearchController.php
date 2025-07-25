<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');

        if (empty($query)) {
            // If no search query, show all courses or redirect to home
            $courses = Course::all();
        } else {
            // Search courses by title and description
            $courses = Course::where('title', 'LIKE', '%' . $query . '%')
                ->orWhere('description', 'LIKE', '%' . $query . '%')
                ->get();
        }

        return view('home.search', compact('courses', 'query'));
    }
}
