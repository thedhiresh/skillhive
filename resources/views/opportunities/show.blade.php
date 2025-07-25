@extends('layouts.dashboard')

@section('dash-content')
<div class="min-h-screen bg-gray-50 py-12 px-6">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-xl p-8">
        <!-- categories & ID -->
        <div class="mb-4">
            <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-{{ $opportunity->color }}-100 text-{{ $opportunity->color }}-800 uppercase">
                #{{ $opportunity->id }} — {{ ucfirst($opportunity->category) }}
            </span>
        </div>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $opportunity->title }}</h1>

        <!-- Description -->
        <p class="text-gray-700 text-base leading-relaxed mb-6">
            {{ $opportunity->description }}
        </p>

        <!-- Tags -->
        @if (!empty($opportunity->tags))
            <div class="mb-6">
                <h3 class="text-sm font-semibold text-gray-500 mb-2">Tags:</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach ($opportunity->tags as $tag)
                        <span class="inline-block bg-{{ $opportunity->color }}-100 text-{{ $opportunity->color }}-800 text-xs px-2 py-1 rounded-full">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Back Button -->
        <a href="/opportunities"
           class="inline-block mt-4 text-sm font-medium text-{{ $opportunity->color }}-600 hover:underline">
            ← Back to all opportunities
        </a>
    </div>
</div>
@endsection
