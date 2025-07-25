@extends('layouts.home')
@section('title')
    Search Results
@endsection
@section('content')

    <div class="max-w-5xl mx-auto px-4 py-8">

        <!-- Search Form -->
        <form action="{{ route('search') }}" method="GET" class="flex space-x-2 mb-8">
            <input type="text" name="query" placeholder="Search courses, PDFs, blogs..."
                   class="flex-1 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                   value="{{ $query }}">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
                Search
            </button>
        </form>

        <!-- Search Term Display -->
        <h1 class="text-2xl font-bold mb-4">
            @if($query)
                Search Results for:
                <span class="text-blue-500">"{{ $query }}"</span>
            @else
                All Courses
            @endif
        </h1>

        <!-- Results Count -->
        <p class="text-gray-600 mb-6">{{ count($courses) }} result(s) found.</p>

        <!-- Results Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @forelse($courses as $course)
                <div class="p-4 border border-gray-200 rounded hover:shadow transition">
                    @if($course->feature_image)
                        <img src="{{ asset($course->feature_image) }}" alt="{{ $course->title }}" class="w-full h-48 object-cover rounded mb-4">
                    @endif

                    <h2 class="text-lg font-semibold text-[#111827] mb-2">
                        {{ $course->title }}
                    </h2>

                    <p class="text-gray-600 mb-4">
                        {{ Str::limit($course->description, 100) }}
                    </p>

                    <a href="{{ route('admin.courses.show', $course) }}" class="text-blue-500 hover:underline hover:text-blue-700 font-medium">
                        View Details
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-500 text-lg">No courses found matching your search.</p>
                    @if($query)
                        <p class="text-gray-400 mt-2">Try searching with different keywords.</p>
                    @endif
                </div>
            @endforelse
        </div>

    </div>

@endsection
