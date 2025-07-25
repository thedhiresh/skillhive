<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-[#4F46E5] to-[#6366F1] text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==')]"></div>
    </div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight max-w-4xl mx-auto">
            Expand Your Knowledge With <span class="text-[#A5B4FC]">Free</span> Online Courses
        </h1>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-10 opacity-90">
            Access 10,000+ courses from top universities and companies worldwide. Learn anything, anytime.
        </p>
        <!-- Updated Search Form -->
        <form action="{{ route('search') }}" method="GET" class="max-w-2xl mx-auto flex bg-white rounded-lg overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <input
                type="text"
                name="query"
                placeholder="Search for courses, subjects, or providers..."
                class="flex-grow px-6 py-5 focus:outline-none text-gray-800 placeholder-gray-400"
            >
            <button type="submit" class="bg-[#4F46E5] hover:bg-[#4338CA] px-8 text-white transition-all flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </form>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ route('search', ['query' => 'Computer Science']) }}"
               class="px-4 py-2 bg-white/10 rounded-full text-sm backdrop-blur-sm hover:bg-white/20 transition">
                Computer Science
            </a>
            <a href="{{ route('search', ['query' => 'Business']) }}"
               class="px-4 py-2 bg-white/10 rounded-full text-sm backdrop-blur-sm hover:bg-white/20 transition">
                Business
            </a>
            <a href="{{ route('search', ['query' => 'Data Science']) }}"
               class="px-4 py-2 bg-white/10 rounded-full text-sm backdrop-blur-sm hover:bg-white/20 transition">
                Data Science
            </a>
            <a href="{{ route('search', ['query' => 'Categories']) }}"
               class="px-4 py-2 bg-white/10 rounded-full text-sm backdrop-blur-sm hover:bg-white/20 transition">
                +12 Categories
            </a>
        </div>

    </div>
</section>

<!-- Course and collage -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<section class="max-w-6xl mx-auto px-4 py-12 w-[90%]">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-3">Find Your Study Path</h2>
        <p class="text-gray-500 max-w-2xl mx-auto">Select from our carefully curated academic programs</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card: Engineering -->
        <div
            class="bg-white rounded-xl p-6 border border-gray-200 group hover:-translate-y-1 transition-all duration-300 hover:shadow-md flex">
            <div
                class="w-1/3 flex flex-col items-center justify-center text-center pr-4 border-r border-gray-100">
                <div
                    class="w-16 h-16 flex items-center justify-center bg-blue-50 rounded-xl group-hover:bg-blue-100 transition-all mb-3">
                    <i class="fas fa-user-graduate text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Engineering</h3>
                <p class="text-sm text-gray-500 mt-1">6,323 Colleges</p>
            </div>
            <div class="w-2/3 flex flex-col justify-center pl-6 space-y-2">
                <a href="{{ route('search', ['query' => 'BE/B.Tech']) }}"
                   class="text-sm text-gray-700 hover:text-blue-600 transition py-2 px-3 hover:bg-blue-50 rounded-lg block cursor-pointer">
                    BE/B.Tech
                </a>
                <a href="{{ route('search', ['query' => 'Diploma']) }}"
                   class="text-sm text-gray-700 hover:text-blue-600 transition py-2 px-3 hover:bg-blue-50 rounded-lg block cursor-pointer">
                    Diploma
                </a>
                <a href="{{ route('search', ['query' => 'ME/M.Tech']) }}"
                   class="text-sm text-gray-700 hover:text-blue-600 transition py-2 px-3 hover:bg-blue-50 rounded-lg block cursor-pointer">
                    ME/M.Tech
                </a>
            </div>
        </div>

        <!-- Card: Medical -->
        <div
            class="bg-white rounded-xl p-6 border border-gray-200 group hover:-translate-y-1 transition-all duration-300 hover:shadow-md flex">
            <div
                class="w-1/3 flex flex-col items-center justify-center text-center pr-4 border-r border-gray-100">
                <div
                    class="w-16 h-16 flex items-center justify-center bg-pink-50 rounded-xl group-hover:bg-pink-100 transition-all mb-3">
                    <i class="fa-solid fa-house-medical text-pink-500 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Medical</h3>
                <p class="text-sm text-gray-500 mt-1">7,895 Colleges</p>
            </div>
            <div class="w-2/3 flex flex-col justify-center pl-6 space-y-2">
                <a href="{{ route('search', ['query' => 'MBBS']) }}"
                   class="text-sm text-gray-700 hover:text-pink-500 transition py-2 px-3 hover:bg-pink-50 rounded-lg block cursor-pointer">
                    MBBS
                </a>
                <a href="{{ route('search', ['query' => 'Nursing']) }}"
                   class="text-sm text-gray-700 hover:text-pink-500 transition py-2 px-3 hover:bg-pink-50 rounded-lg block cursor-pointer">
                    Nursing
                </a>
                <a href="{{ route('search', ['query' => 'Pharmecy']) }}"
                   class="text-sm text-gray-700 hover:text-pink-500 transition py-2 px-3 hover:bg-pink-50 rounded-lg block cursor-pointer">
                    Pharmecy
                </a>
            </div>
        </div>

        <!-- Card: Commerce -->
        <div
            class="bg-white rounded-xl p-6 border border-gray-200 group hover:-translate-y-1 transition-all duration-300 hover:shadow-md flex">
            <div
                class="w-1/3 flex flex-col items-center justify-center text-center pr-4 border-r border-gray-100">
                <div
                    class="w-16 h-16 flex items-center justify-center bg-blue-50 rounded-xl group-hover:bg-blue-100 transition-all mb-3">
                    <i class="fas fa-shopping-cart text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Commerce</h3>
                <p class="text-sm text-gray-500 mt-1">5,042 Colleges</p>
            </div>
            <div class="w-2/3 flex flex-col justify-center pl-6 space-y-2">
                <a href="{{ route('search', ['query' => 'B.Com']) }}"
                   class="text-sm text-gray-700 hover:text-blue-600 transition py-2 px-3 hover:bg-blue-50 rounded-lg block cursor-pointer">
                    B.Com
                </a>
                <a href="{{ route('search', ['query' => 'M.Com']) }}"
                   class="text-sm text-gray-700 hover:text-blue-600 transition py-2 px-3 hover:bg-blue-50 rounded-lg block cursor-pointer">
                    M.Com
                </a>
            </div>
        </div>

        <!-- Card: Arts -->
        <div
            class="bg-white rounded-xl p-6 border border-gray-200 group hover:-translate-y-1 transition-all duration-300 hover:shadow-md flex">
            <div
                class="w-1/3 flex flex-col items-center justify-center text-center pr-4 border-r border-gray-100">
                <div
                    class="w-16 h-16 flex items-center justify-center bg-pink-50 rounded-xl group-hover:bg-pink-100 transition-all mb-3">
                    <i class="fas fa-paint-brush text-pink-500 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800">Arts</h3>
                <p class="text-sm text-gray-500 mt-1">5,691 Colleges</p>
            </div>
            <div class="w-2/3 flex flex-col justify-center pl-6 space-y-2">
                <a href="{{ route('search', ['query' => 'BA']) }}"
                   class="text-sm text-gray-700 hover:text-pink-500 transition py-2 px-3 hover:bg-pink-50 rounded-lg block cursor-pointer">
                    BA
                </a>
                <a href="{{ route('search', ['query' => 'MA']) }}"
                   class="text-sm text-gray-700 hover:text-pink-500 transition py-2 px-3 hover:bg-pink-50 rounded-lg block cursor-pointer">
                    MA
                </a>
                <a href="{{ route('search', ['query' => 'BFA']) }}"
                   class="text-sm text-gray-700 hover:text-pink-500 transition py-2 px-3 hover:bg-pink-50 rounded-lg block cursor-pointer">
                    BFA
                </a>
            </div>
        </div>

    </div>
</section>



<!-- Popular Courses Section -->
<section class="py-20 bg-[#F9FAFB]">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-[#4F46E5] bg-[#E0E7FF] rounded-full mb-4">LEARNING PATHS</span>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#111827]">Popular Courses</h2>
            <p class="text-[#6B7280] max-w-2xl mx-auto text-lg">Handpicked courses loved by our community of 500,000+ learners</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Course Card 1 -->
            <a href="/courses/4">
            <div class="group bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-all border border-[#E5E7EB] hover:border-[#D1D5DB]">
                <div class="relative h-56 bg-gradient-to-r from-[#7C3AED] to-[#8B5CF6] flex items-center justify-center">
                    <span class="text-white text-3xl font-bold">CS101</span>
                    <div class="absolute top-4 right-4">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-xs font-semibold px-3 py-1 rounded-full">BESTSELLER</span>
                    </div>
                </div>
                <div class="p-2">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-[#111827] group-hover:text-[#4F46E5] transition-colors">Introduction to Computer Science</h3>
                    </div>
                    <p class="text-[#6B7280] mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#4F46E5]" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                        Harvard University
                    </p>

                    <div class="mt-6 pt-2 border-t border-[#E5E7EB] flex justify-between items-center">
                        <span class="text-lg font-bold text-[#4F46E5]"></span>
                        <button class="px-4 py-2 bg-[#4F46E5] hover:bg-[#4338CA] text-white rounded-lg text-sm font-medium transition-colors">
                            View
                        </button>
                    </div>
                </div>
            </div></a>

            <!-- Course Card 2 -->
            <a href="/courses/5">
            <div class="group bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-all border border-[#E5E7EB] hover:border-[#D1D5DB]">
                <div class="relative h-56 bg-gradient-to-r from-[#059669] to-[#10B981] flex items-center justify-center">
                    <span class="text-white text-3xl font-bold">AI101</span>
                    <div class="absolute top-4 right-4">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-xs font-semibold px-3 py-1 rounded-full">NEW</span>
                    </div>
                </div>
                <div class="p-2">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-[#111827] group-hover:text-[#4F46E5] transition-colors">Jounney of AI for Everythings </h3>
                    </div>
                    <p class="text-[#6B7280] mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#4F46E5]" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                        Stanford University
                    </p>
                    <div class="mt-6 pt-2 border-t border-[#E5E7EB] flex justify-between items-center">
                        <span class="text-lg font-bold text-[#4F46E5]"></span>
                        <button class="px-4 py-2 bg-[#4F46E5] hover:bg-[#4338CA] text-white rounded-lg text-sm font-medium transition-colors">
                            View
                        </button>
                    </div>
                </div>
            </div></a>

            <!-- Course Card 3 -->
            <a href="/courses/6">
            <div class="group bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-all border border-[#E5E7EB] hover:border-[#D1D5DB]">
                <div class="relative h-56 bg-gradient-to-r from-[#D946EF] to-[#A855F7] flex items-center justify-center">
                    <span class="text-white text-3xl font-bold">DS101</span>
                </div>
                <div class="p-2">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-[#111827] group-hover:text-[#4F46E5] transition-colors">Basic Cyber Security </h3>
                    </div>
                    <p class="text-[#6B7280] mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#4F46E5]" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                        Massachusetts Institute of Technology
                    </p>
                    <div class="mt-6 pt-2 border-t border-[#E5E7EB] flex justify-between items-center">
                        <span class="text-lg font-bold text-[#4F46E5]"></span>
                        <button class="px-4 py-2 bg-[#4F46E5] hover:bg-[#4338CA] text-white rounded-lg text-sm font-medium transition-colors">
                            View
                        </button>
                    </div>
                </div>
            </div></a>
            <!-- Course Card 4 -->
            <a href="/courses/7">
            <div class="group bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-all border border-[#E5E7EB] hover:border-[#D1D5DB]">
                <div class="relative h-56 bg-gradient-to-r from-[#D946EF] to-[#A855F7] flex items-center justify-center">
                    <span class="text-white text-3xl font-bold">IIT01</span>
                </div>
                <div class="p-2">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-[#111827] group-hover:text-[#4F46E5] transition-colors">Data Science and Its Fundamentals</h3>
                    </div>
                    <p class="text-[#6B7280] mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#4F46E5]" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                        India Institute of Technology
                    </p>
                    <div class="mt-6 pt-2 border-t border-[#E5E7EB] flex justify-between items-center">
                        <span class="text-lg font-bold text-[#4F46E5]"></span>
                        <button class="px-4 py-2 bg-[#4F46E5] hover:bg-[#4338CA] text-white rounded-lg text-sm font-medium transition-colors">
                            View
                        </button>
                    </div>
                </div>
            </div> </a>
        </div>

        <div class="text-center mt-16">
            <a href="#" class="inline-flex items-center px-8 py-4 border border-[#4F46E5] text-[#4F46E5] hover:bg-[#4F46E5] hover:text-white rounded-xl transition-all font-medium group">
                View All 10,000+ Courses
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-[#4F46E5] bg-[#E0E7FF] rounded-full mb-4">WHY CHOOSE US</span>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#111827]">Designed For Your Success</h2>
            <p class="text-[#6B7280] max-w-2xl mx-auto text-lg">Modern learning experience with proven results</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow border border-[#E5E7EB] hover:border-[#D1D5DB] text-center group">
                <div class="w-20 h-20 bg-[#E0E7FF] text-[#4F46E5] rounded-2xl flex items-center justify-center mx-auto mb-6 text-3xl group-hover:bg-[#4F46E5] group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-[#111827]">Quality Courses</h3>
                <p class="text-[#6B7280]">Curated selection from top institutions and industry leaders with rigorous quality standards.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow border border-[#E5E7EB] hover:border-[#D1D5DB] text-center group">
                <div class="w-20 h-20 bg-[#D1FAE5] text-[#059669] rounded-2xl flex items-center justify-center mx-auto mb-6 text-3xl group-hover:bg-[#059669] group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-[#111827]">Recognized Certificates</h3>
                <p class="text-[#6B7280]">Earn shareable certificates that you can add to your resume or LinkedIn profile.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow border border-[#E5E7EB] hover:border-[#D1D5DB] text-center group">
                <div class="w-20 h-20 bg-[#DBEAFE] text-[#1D4ED8] rounded-2xl flex items-center justify-center mx-auto mb-6 text-3xl group-hover:bg-[#1D4ED8] group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-[#111827]">Flexible Learning</h3>
                <p class="text-[#6B7280]">Learn at your own pace with on-demand videos and interactive exercises.</p>
            </div>
        </div>
    </div>
</section>

<!-- Providers Section
<section class="py-16 bg-[#F9FAFB]">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-[#4F46E5] bg-[#E0E7FF] rounded-full mb-4">PARTNERS</span>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#111827]">Trusted by Leading Institutions</h2>
            <p class="text-[#6B7280] max-w-2xl mx-auto text-lg">Partnering with the best to bring you quality education</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <div class="bg-white p-6 rounded-lg flex items-center justify-center border border-[#E5E7EB] h-24 hover:shadow-md transition-all hover:border-[#4F46E5]">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Harvard_University_logo.svg/2560px-Harvard_University_logo.svg.png" alt="Harvard" class="h-12 object-contain">
            </div>
            <div class="bg-white p-6 rounded-lg flex items-center justify-center border border-[#E5E7EB] h-24 hover:shadow-md transition-all hover:border-[#4F46E5]">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Stanford_University_seal_2003.svg/1200px-Stanford_University_seal_2003.svg.png" alt="Stanford" class="h-12 object-contain">
            </div>
            <div class="bg-white p-6 rounded-lg flex items-center justify-center border border-[#E5E7EB] h-24 hover:shadow-md transition-all hover:border-[#4F46E5]">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/MIT_logo.svg/1200px-MIT_logo.svg.png" alt="MIT" class="h-8 object-contain">
            </div>
            <div class="bg-white p-6 rounded-lg flex items-center justify-center border border-[#E5E7EB] h-24 hover:shadow-md transition-all hover:border-[#4F46E5]">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Google_logo_%282010-2013%29.svg/1200px-Google_logo_%282010-2013%29.svg.png" alt="Google" class="h-8 object-contain">
            </div>
            <div class="bg-white p-6 rounded-lg flex items-center justify-center border border-[#E5E7EB] h-24 hover:shadow-md transition-all hover:border-[#4F46E5]">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/IBM_logo.svg/1200px-IBM_logo.svg.png" alt="IBM" class="h-8 object-contain">
            </div>
            <div class="bg-white p-6 rounded-lg flex items-center justify-center border border-[#E5E7EB] h-24 hover:shadow-md transition-all hover:border-[#4F46E5]">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Microsoft_logo_%282012%29.svg/1200px-Microsoft_logo_%282012%29.svg.png" alt="Microsoft" class="h-8 object-contain">
            </div>
        </div>
    </div>
</section> -->

<!-- CTA Section -->
<section class="relative py-24 bg-gradient-to-r from-[#4F46E5] to-[#6366F1] text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==')]"></div>
    </div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="text-3xl md:text-5xl font-bold mb-6 leading-tight max-w-3xl mx-auto">Ready to Start Learning?</h2>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto mb-10 opacity-90">
            Join our community of 500,000+ learners advancing their careers.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#" class="px-8 py-4 bg-white text-[#4F46E5] rounded-lg hover:bg-opacity-90 font-medium transition-all shadow-lg hover:shadow-xl">
                Browse All Courses
            </a>
            <a href="#" class="px-8 py-4 border-2 border-white text-white rounded-lg font-medium transition-all">
                <span class="flex items-center justify-center">
                    How It Works
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>
