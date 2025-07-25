<!-- Mobile Menu Button -->
<button id="mobile-menu-button" class="lg:hidden fixed top-4 left-4 z-50 p-2 rounded-lg bg-[#4F46E5] text-white shadow-lg">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
</button>

<!-- Mobile Overlay -->
<div id="mobile-overlay" class="lg:hidden fixed inset-0 bg-black/50 z-40 hidden"></div>

<div class="flex min-h-screen">
    <!-- Sidebar Navigation -->
    <div id="sidebar" class="fixed lg:static inset-y-0 left-0 z-40 w-64 bg-gradient-to-b from-[#4F46E5] to-[#4338CA] text-white shadow-2xl flex flex-col transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
        <!-- Mobile Close Button -->
        <button id="mobile-close-button" class="lg:hidden absolute top-4 right-4 p-2 rounded-lg bg-white/20 text-white">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="block">
            <div class="p-6 border-b border-white/10">
                <div class="flex items-center space-x-3">
                    <!-- Logo Icon -->
                    <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <h1 class="text-xl font-bold">SkillHive</h1>
                </div>
            </div>
        </a>

        <!-- Main Navigation -->
        <nav class="flex-1 p-4 overflow-y-auto">
            <div class="space-y-1">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}"
                   class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v4m8-4v4"/>
                    </svg>
                    <span class="font-medium">Dashboard</span>
                </a>

                <!-- Courses -->
                <a href="{{ route('course') }}"
                   class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('course') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <span class="font-medium">Courses</span>
                </a>

                <!-- PDF Resources -->
                <a href="{{ route('pdfs') }}"
                   class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('pdfs') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span class="font-medium">PDF Resources</span>
                </a>

                <!-- Opportunities -->
                <a href="{{ route('opportunities') }}"
                   class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('opportunities') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"/>
                    </svg>
                    <span class="font-medium">Opportunities</span>
                </a>

                <!-- Blogs -->
{{--                <a href="/blog"--}}
{{--                   class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('blog') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">--}}
{{--                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>--}}
{{--                    </svg>--}}
{{--                    <span class="font-medium">Blogs</span>--}}
{{--                </a>--}}




                @auth
                    @if (Auth::user()->role === 'superadmin')
                        <!-- Admin Section Divider -->
                        <div class="pt-6 pb-2">
                            <div class="flex items-center space-x-2 px-3 mb-3">
                                <div class="flex-1 h-px bg-white/20"></div>
                                <span class="text-xs font-semibold text-white/60 uppercase tracking-wider">Admin Panel</span>
                                <div class="flex-1 h-px bg-white/20"></div>
                            </div>
                        </div>

                        <!-- Manage Categories -->
                        <a href="{{ route('categories.index') }}"
                           class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('categories') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                            <span class="font-medium">Manage Categories</span>
                        </a>

                        <!-- Manage Courses -->
                        <a href="{{ route('courses.index') }}"
                           class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('courses') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="font-medium">Manage Courses</span>
                        </a>

                        <!-- Manage PDF Resources -->
                        <a href="{{ route('pdfresource.index') }}"
                           class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('pdfresources') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span class="font-medium">Manage PDF Resources</span>
                        </a>

                        <!-- Manage Opportunities -->
                        <a href="{{ route('opportunity.index') }}"
                           class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('opportunity') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                            </svg>
                            <span class="font-medium">Manage Opportunities</span>
                        </a>

                        <!-- Manage Blogs -->
{{--                        <a href="{{ route('blogs.index') }}"--}}
{{--                           class="nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('blog.index') ? 'bg-white/20 text-white shadow-lg' : 'hover:bg-white/10 text-white/80 hover:text-white' }}">--}}
{{--                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>--}}
{{--                            </svg>--}}
{{--                            <span class="font-medium">Manage Blog</span>--}}
{{--                        </a>--}}
                    @endif
                @endauth
            </div>
        </nav>

        <!-- User Profile Section -->
        <div class="p-4 border-t border-white/10 bg-black/10">
            <div class="flex items-center space-x-3 p-3 rounded-lg bg-white/10">
                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                    {{ strtoupper(substr(explode(' ', Auth::user()->name)[0], 0, 1) . substr(explode(' ', Auth::user()->name)[1] ?? '', 0, 1)) }}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="font-medium text-white text-sm truncate">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-white/60 capitalize">{{ Auth::user()->role }}</p>
                </div>
                <button class="text-white/60 hover:text-white transition-colors flex-shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col overflow-hidden lg:ml-0">
        <!-- Top Header -->
        <header class="bg-white shadow-sm p-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <!-- Mobile spacer for menu button -->
                <div class="w-8 lg:hidden"></div>
                <h2 class="text-xl font-semibold text-[#111827]">Dashboard</h2>
            </div>

            <!-- User Profile (Desktop) -->
            <div class="hidden lg:flex items-center space-x-4">
                <div class="text-right">
                    <p class="font-medium text-[#111827]">{{ Auth::user()->name }}</p>
                    <p class="text-sm text-[#6B7280]">{{ Auth::user()->role }}</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-[#4F46E5] flex items-center justify-center text-white font-bold">
                    {{ strtoupper(substr(explode(' ', Auth::user()->name)[0], 0, 1) . substr(explode(' ', Auth::user()->name)[1] ?? '', 0, 1)) }}
                </div>
            </div>

            <!-- Mobile User Avatar -->
            <div class="lg:hidden">
                <div class="w-8 h-8 rounded-full bg-[#4F46E5] flex items-center justify-center text-white font-bold text-sm">
                    {{ strtoupper(substr(explode(' ', Auth::user()->name)[0], 0, 1) . substr(explode(' ', Auth::user()->name)[1] ?? '', 0, 1)) }}
                </div>
            </div>
        </header>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileCloseButton = document.getElementById('mobile-close-button');
        const mobileOverlay = document.getElementById('mobile-overlay');
        const sidebar = document.getElementById('sidebar');
        const navLinks = document.querySelectorAll('.nav-link');

        // Open mobile menu
        mobileMenuButton.addEventListener('click', function() {
            sidebar.classList.remove('-translate-x-full');
            mobileOverlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        });

        // Close mobile menu
        function closeMobileMenu() {
            sidebar.classList.add('-translate-x-full');
            mobileOverlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        mobileCloseButton.addEventListener('click', closeMobileMenu);
        mobileOverlay.addEventListener('click', closeMobileMenu);

        // Close menu when clicking navigation links on mobile
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 1024) {
                    setTimeout(closeMobileMenu, 100);
                }
            });
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('-translate-x-full');
                mobileOverlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                mobileOverlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        });

        // Prevent body scroll when menu is open on mobile
        function preventBodyScroll(e) {
            if (window.innerWidth < 1024 && !sidebar.classList.contains('-translate-x-full')) {
                e.preventDefault();
            }
        }

        document.addEventListener('touchmove', preventBodyScroll, { passive: false });
    });
</script>

<style>
    /* Additional responsive styles */
    @media (max-width: 1023px) {
        .main-content {
            margin-left: 0 !important;
        }
    }

    /* Smooth transitions for all screen sizes */
    @media (prefers-reduced-motion: reduce) {
        #sidebar {
            transition: none;
        }
    }

    /* Ensure proper z-index stacking */
    .lg\:static {
        position: static;
    }

    @media (max-width: 1023px) {
        .lg\:static {
            position: fixed;
        }
    }
</style>
