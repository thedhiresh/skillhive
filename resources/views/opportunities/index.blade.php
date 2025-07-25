@extends('layouts.dashboard')

@section('dash-content')
    <div class="min-h-screen bg-gray-50 py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <!-- Header and Filters -->
            <div class="mb-10">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Explore Opportunities</h1>
                <form method="GET" action="{{ route('opportunity.index') }}" class="flex flex-col md:flex-row gap-4">
                    <!-- Search -->
                    <input name="search" type="text" placeholder="Search by title or description..."
                           value="{{ request('search') }}"
                           class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">

                    <!-- Categories Filter -->
                    <select name="category" class="w-full md:w-60 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">All Categories</option>
                        <option value="internship" {{ request('category') == 'internship' ? 'selected' : '' }}>Internship</option>
                        <option value="fulltime" {{ request('category') == 'fulltime' ? 'selected' : '' }}>Full-time</option>
                        <option value="remote" {{ request('category') == 'remote' ? 'selected' : '' }}>Remote</option>
                        <option value="freelance" {{ request('category') == 'freelance' ? 'selected' : '' }}>Freelance</option>
                    </select>

                    <!-- Filter Button -->
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        Filter
                    </button>
                </form>
            </div>

            <!-- Opportunities Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($opportunities as $opportunity)
                    @php
                        $colors = ['blue', 'purple', 'green', 'amber', 'red', 'indigo', 'pink', 'teal'];
                        $randomColor = $colors[array_rand($colors)];
                    @endphp
                    <div class="border border-gray-200 rounded-xl shadow-sm bg-white hover:shadow-lg transition-shadow duration-300">
                        <div class="p-6">
                            <div class="text-{{ $randomColor }}-600 font-semibold text-sm mb-2 uppercase">
                                #{{ $opportunity->id }} — {{ $opportunity->category }}
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $opportunity->title }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($opportunity->description, 100) }}</p>

                            @if($opportunity->tags)
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach(json_decode($opportunity->tags) as $tag)
                                        <span class="inline-block bg-{{ $randomColor }}-100 text-{{ $randomColor }}-800 text-xs px-2 py-1 rounded-full">
                                        {{ $tag }}
                                    </span>
                                    @endforeach
                                </div>
                            @endif

                            <a href="/opportunities/{{$opportunity->id}}"
                               class="inline-block text-sm font-medium text-{{ $randomColor }}-600 hover:underline">
                                Read more →
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-gray-500 text-lg">No opportunities found.</p>
                        @if(request()->has('search') || request()->has('category'))
                            <a href="{{ route('opportunities.index') }}"
                               class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                                Clear Filters
                            </a>
                        @endif
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($opportunities->hasPages())
                <div class="mt-12 flex justify-center">
                    {{ $opportunities->appends(request()->query())->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
