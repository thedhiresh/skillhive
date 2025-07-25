@extends('layouts.dashboard')

@section('dash-content')
    <div class="min-h-screen bg-gray-50">
        <!-- Hero Section -->
        <div class="relative bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <!-- Breadcrumb -->
                <nav class="flex mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/courses" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Courses
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $course->title }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <!-- Main Content -->
                    <div class="lg:col-span-2">
                        <!-- Course Header -->
                        <div class="mb-8">
                            @php
                                $categoryColors = [
                                    'Computer Science' => 'blue',
                                    'Biotechnology' => 'green',
                                    'Management' => 'purple',
                                    'Engineering' => 'amber'
                                ];
                                $color = $categoryColors[$course->category->name] ?? 'gray';
                            @endphp

                            <div class="flex items-center mb-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-{{ $color }}-100 text-{{ $color }}-800">
                                    {{ $course->category->name }}
                                </span>
                            </div>

                            <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $course->title }}</h1>

                            @if($course->description)
                                <div class="text-lg text-gray-600 leading-relaxed">
                                    {!! nl2br(e($course->description)) !!}
                                </div>
                            @endif
                        </div>

                        <!-- Feature Image -->
                        @if($course->feature_image)
                            <div class="mb-12">
                                <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                    <img src="{{ asset($course->feature_image) }}" alt="{{ $course->title }}" class="w-full h-64 sm:h-80 object-cover">
                                </div>
                            </div>
                        @endif

                        <!-- Course Sections -->
                        <div class="space-y-12">
                            @if($course->how_section)
                                <section>
                                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                        <div class="w-8 h-8 bg-{{ $color }}-100 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-5 h-5 text-{{ $color }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                            </svg>
                                        </div>
                                        How It Works
                                    </h2>
                                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                                        {!! $course->how_section !!}
                                    </div>
                                </section>
                            @endif

                            @if($course->guidance)
                                <section>
                                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                        <div class="w-8 h-8 bg-{{ $color }}-100 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-5 h-5 text-{{ $color }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        Guidance
                                    </h2>
                                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                                        {!! $course->guidance !!}
                                    </div>
                                </section>
                            @endif

                            @if($course->reference)
                                <section>
                                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                        <div class="w-8 h-8 bg-{{ $color }}-100 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-5 h-5 text-{{ $color }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                        </div>
                                        References
                                    </h2>
                                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                                        {!! $course->reference !!}
                                    </div>
                                </section>
                            @endif
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="lg:col-span-1">
                        <div class="sticky top-8 space-y-8">
                            <!-- Course Info Card -->
                            <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Course Information</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-sm text-gray-500">Category</p>
                                            <p class="font-medium text-gray-900">{{ $course->category->name }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a4 4 0 11-8 0V7a4 4 0 014-4h4a4 4 0 014 4v8a4 4 0 01-4 4H8a4 4 0 01-4-4z"></path>
                                        </svg>
                                        <div>
                                            <p class="text-sm text-gray-500">Created</p>
                                            <p class="font-medium text-gray-900">{{ $course->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                        </svg>
                                        <div>
                                            <p class="text-sm text-gray-500">Last Updated</p>
                                            <p class="font-medium text-gray-900">{{ $course->updated_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="fixed bottom-8 right-8 p-3 bg-{{ $color }}-600 text-white rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-{{ $color }}-700 focus:outline-none z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll to Top Functionality
            const scrollToTopBtn = document.getElementById('scrollToTopBtn');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                    scrollToTopBtn.classList.add('opacity-100', 'visible');
                } else {
                    scrollToTopBtn.classList.remove('opacity-100', 'visible');
                    scrollToTopBtn.classList.add('opacity-0', 'invisible');
                }
            });

            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const headerOffset = 80;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Add scroll ids to sections
            const sections = document.querySelectorAll('section');
            sections.forEach((section, index) => {
                const heading = section.querySelector('h2');
                if (heading) {
                    const text = heading.textContent.toLowerCase().replace(/\s+/g, '-');
                    section.id = text;
                }
            });
        });
    </script>
@endsection
