@extends('layouts.dashboard')

@section('dash-content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <!-- Feature Image -->
    <div class="w-full mb-6 rounded-xl overflow-hidden shadow-md">
        <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover">
    </div>

    <!-- Meta Info -->
    <div class="mb-4">
        <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-{{ $blog->category_color }}-100 text-{{ $blog->category_color }}-800">
            {{ ucfirst($blog->category) }}
        </span>
    </div>

    <!-- Title -->
    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $blog->title }}</h1>

    <!-- Meta Description -->
    <p class="text-lg text-gray-600 mb-6">{{ $blog->meta_description }}</p>

    <!-- Full Content -->
    <div class="prose max-w-none text-gray-800">
        {!! nl2br(e($blog->description)) !!}
    </div>
</div>
@endsection
