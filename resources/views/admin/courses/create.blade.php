@extends('layouts.dashboard')

@section('dash-content')

    <div class="max-w-5xl mx-auto px-4 py-10">

        <h1 class="text-3xl font-semibold text-gray-800 mb-8">Add New Course</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-6">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8 bg-white p-8 rounded shadow">
            @csrf

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- categories -->
                <div>
                    <label for="category_id" class="block mb-1 text-sm font-medium text-gray-700">Category</label>
                    <select name="category_id" id="category_id" required
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Feature Image Upload -->
                <div>
                    <label for="feature_image" class="block mb-1 text-sm font-medium text-gray-700">Feature Image</label>
                    <input type="file" name="feature_image" id="feature_image" accept="image/*"
                           class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">
                </div>

                <!-- Title -->
                <div class="md:col-span-2">
                    <label for="title" class="block mb-1 text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                           class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">
                </div>

            </div>

            <!-- Description - HTML Editable -->
            <div>
                <label for="description" class="block mb-1 text-sm font-medium text-gray-700">Description (HTML Supported)</label>
                <textarea name="description" id="description" rows="6" class="rich-text w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">{{ old('description') }}</textarea>
            </div>

            <!-- How Section - HTML Editable -->
            <div>
                <label for="how_section" class="block mb-1 text-sm font-medium text-gray-700">How Section (HTML Supported)</label>
                <textarea name="how_section" id="how_section" rows="6" class="rich-text w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">{{ old('how_section') }}</textarea>
            </div>

            <!-- Guidance - HTML Editable -->
            <div>
                <label for="guidance" class="block mb-1 text-sm font-medium text-gray-700">Guidance (HTML Supported)</label>
                <textarea name="guidance" id="guidance" rows="6" class="rich-text w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">{{ old('guidance') }}</textarea>
            </div>

            <!-- Reference - HTML Editable -->
            <div>
                <label for="reference" class="block mb-1 text-sm font-medium text-gray-700">References / Links (HTML Supported)</label>
                <textarea name="reference" id="reference" rows="4" class="rich-text w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">{{ old('reference') }}</textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                        class="px-6 py-2 bg-sky-500 text-white rounded hover:bg-sky-600 transition w-full sm:w-auto">
                    Add Course
                </button>
            </div>

        </form>

    </div>

@endsection
