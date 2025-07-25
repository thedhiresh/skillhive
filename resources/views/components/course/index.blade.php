@extends('layouts.dashboard')

@section('dash-content')
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <!-- Scroll to Top Button -->
        <button id="scrollToTopBtn" class="fixed bottom-8 right-8 p-3 bg-blue-600 text-white rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>

        <div class="max-w-7xl mx-auto">
            <!-- Search and Filter Section -->
            <div class="mb-12" id="topSection">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Explore Courses</h1>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="searchInput" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Search courses...">
                        </div>
                    </div>
                    <select id="categoryFilter" class="block w-full md:w-64 px-4 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Course Categories Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                @php
                    $categoryColors = [
                        'Computer Science' => 'blue',
                        'Biotechnology' => 'green',
                        'Management' => 'purple',
                        'Engineering' => 'amber'
                    ];

                    $categoryIcons = [
                        'Computer Science' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'Biotechnology' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                        'Management' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                        'Engineering' => 'M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z'
                    ];
                @endphp

{{--                @foreach($categories as $category)--}}
{{--                    @php--}}
{{--                        $color = $categoryColors[$category->name] ?? 'gray';--}}
{{--                        $icon = $categoryIcons[$category->name] ?? 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253';--}}
{{--                        $courseCount = $category->courses->count();--}}
{{--                    @endphp--}}

{{--                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">--}}
{{--                        <div class="p-6">--}}
{{--                            <div class="flex items-center justify-center w-16 h-16 rounded-lg bg-{{ $color }}-100 mb-4">--}}
{{--                                <svg class="w-8 h-8 text-{{ $color }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <h2 class="text-xl font-semibold text-gray-800 mb-3">{{ $category->name }}</h2>--}}
{{--                            <div class="text-sm text-gray-600">--}}
{{--                                {{ $courseCount }} {{ $courseCount == 1 ? 'course' : 'courses' }} available--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
            </div>

            <!-- All Courses Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">All Courses</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" id="coursesContainer">
                    <!-- Courses will be inserted here by JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Convert PHP data to JavaScript
            const allCourses = @json($courses);
            const categoryColors = {
                'Computer Science': 'blue',
                'Biotechnology': 'green',
                'Management': 'purple',
                'Engineering': 'amber'
            };

            // Display all courses initially
            displayCourses(allCourses);

            // Search and filter functionality
            const searchInput = document.getElementById('searchInput');
            const categoryFilter = document.getElementById('categoryFilter');

            searchInput.addEventListener('input', filterCourses);
            categoryFilter.addEventListener('change', filterCourses);

            function filterCourses() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedCategoryId = categoryFilter.value;

                let filtered = allCourses;

                if (searchTerm) {
                    filtered = filtered.filter(course =>
                        course.title.toLowerCase().includes(searchTerm) ||
                        (course.description && course.description.toLowerCase().includes(searchTerm))
                    );
                }

                if (selectedCategoryId) {
                    filtered = filtered.filter(course => course.category_id == selectedCategoryId);
                }

                displayCourses(filtered);
            }

            function displayCourses(courses) {
                const container = document.getElementById('coursesContainer');
                container.innerHTML = '';

                if (courses.length === 0) {
                    container.innerHTML = '<p class="text-gray-500 col-span-4 text-center py-8">No courses found matching your criteria.</p>';
                    return;
                }

                courses.forEach(course => {
                    const categoryName = course.category ? course.category.name : 'Uncategorized';
                    const color = categoryColors[categoryName] || 'gray';
                    const description = course.description || 'No description available';
                    const imageUrl = course.feature_image ? `/${course.feature_image}` : null;

                    const courseCard = document.createElement('div');
                    courseCard.className = `bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300`;
                    courseCard.innerHTML = `
                    <div class="h-40 bg-${color}-100 flex items-center justify-center">
                        ${imageUrl ?
                        `<img src="${imageUrl}" alt="${course.title}" class="w-full h-full object-cover">` :
                        `<svg class="w-12 h-12 text-${color}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>`
                    }
                    </div>
                    <div class="p-6">
                        <div class="uppercase tracking-wide text-sm text-${color}-600 font-semibold">${categoryName}</div>
                        <a href="/courses/${course.id}" class="block mt-1 text-lg font-medium text-gray-900 hover:text-${color}-600">${course.title}</a>
                        <p class="mt-2 text-gray-500 text-sm">${description.substring(0, 100)}${description.length > 100 ? '...' : ''}</p>
                    </div>
                `;
                    container.appendChild(courseCard);
                });
            }

            // Scroll to Top Functionality
            const scrollToTopBtn = document.getElementById('scrollToTopBtn');

            // Show/hide scroll to top button based on scroll position
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                    scrollToTopBtn.classList.add('opacity-100', 'visible');
                } else {
                    scrollToTopBtn.classList.remove('opacity-100', 'visible');
                    scrollToTopBtn.classList.add('opacity-0', 'invisible');
                }
            });

            // Smooth scroll to top
            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            scrollToTopBtn.addEventListener('click', scrollToTop);

            // Smooth scroll to any anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
@endsection
