@extends('layouts.dashboard')

@section('dash-content')

<div class="max-w-xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Add New Category</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST" class="space-y-6 bg-white p-6 rounded shadow">
        @csrf

        <!-- categories Name -->
        <div>
            <label for="name" class="block mb-1 text-sm font-medium text-gray-700">Category Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">
        </div>

        <!-- Slug -->
        <div>
            <label for="slug" class="block mb-1 text-sm font-medium text-gray-700">Slug (optional, auto-generated if left blank)</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">
        </div>

        <div>
            <button type="submit"
                class="px-6 py-2 bg-sky-500 text-white rounded hover:bg-sky-600 transition w-full sm:w-auto">
                Add Category
            </button>
        </div>

    </form>

</div>
@endsection
