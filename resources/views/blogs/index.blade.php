@extends('layouts.dashboard')

@section('dash-content')
<div class="min-h-screen bg-gray-50 py-12 px-6">
    <div class="max-w-7xl mx-auto">
        <!-- Page Header -->
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Tech Blog Insights</h1>

            <!-- Filters -->
            <div class="flex flex-col md:flex-row gap-4">
                <input id="blogSearch" type="text" placeholder="Search blog posts..."
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">

                <select id="blogCategory"
                    class="w-full md:w-64 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="">All Categories</option>
                    <option value="tech">Technology</option>
                    <option value="design">Design</option>
                    <option value="business">Business</option>
                    <option value="lifestyle">Lifestyle</option>
                </select>
            </div>
        </div>

        <!-- Blog Grid -->
        <div id="blogContainer" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Cards populated by JavaScript -->
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const defaultImage = "https://img.freepik.com/free-photo/technology-background-with-digital-numbers_53876-97647.jpg";

        const blogs = [
            {
                id: 1,
                title: "The Future of AI",
                description: "Explore how AI will shape education, jobs, and business in the near future.",
                category: "tech",
                color: "blue",
                image: defaultImage
            },
            {
                id: 2,
                title: "Designing for Minimalism",
                description: "Principles of creating clean, effective UI designs in 2025.",
                category: "design",
                color: "purple",
                image: defaultImage
            },
            {
                id: 3,
                title: "Remote Startup Strategy",
                description: "A guide to building online businesses with lean resources.",
                category: "business",
                color: "green",
                image: defaultImage
            },
            {
                id: 4,
                title: "Healthy Remote Work Habits",
                description: "Simple routines to stay sharp while working from home.",
                category: "lifestyle",
                color: "amber",
                image: defaultImage
            },
            {
                id: 5,
                title: "Top Tech Trends 2025",
                description: "AI, quantum computing, and more you need to watch for.",
                category: "tech",
                color: "blue",
                image: defaultImage
            },
        ];

        const blogContainer = document.getElementById('blogContainer');
        const searchInput = document.getElementById('blogSearch');
        const categorySelect = document.getElementById('blogCategory');

        function renderBlogs(data) {
            blogContainer.innerHTML = '';
            if (data.length === 0) {
                blogContainer.innerHTML = '<p class="text-gray-500 col-span-4 text-center py-8">No blog posts found.</p>';
                return;
            }

            data.forEach(blog => {
                const card = document.createElement('div');
                card.className = 'bg-white rounded-xl shadow hover:shadow-md transition-shadow overflow-hidden border border-gray-200';

                card.innerHTML = `
                    <img src="${blog.image}" alt="${blog.title}" class="w-full h-36 object-cover">
                    <div class="p-5">
                        <span class="text-${blog.color}-600 uppercase text-xs font-bold tracking-wide">${blog.category}</span>
                        <h2 class="mt-2 text-base font-semibold text-gray-900">${blog.title}</h2>
                        <p class="mt-2 text-sm text-gray-600">${blog.description}</p>
                        <a href="#" class="mt-3 inline-block text-${blog.color}-600 text-sm font-medium hover:underline">Read more →</a>
                    </div>
                `;
                blogContainer.appendChild(card);
            });
        }

        function filterBlogs() {
            const term = searchInput.value.toLowerCase();
            const selectedCategory = categorySelect.value;

            let filtered = blogs;

            if (term) {
                filtered = filtered.filter(blog =>
                    blog.title.toLowerCase().includes(term) ||
                    blog.description.toLowerCase().includes(term)
                );
            }

            if (selectedCategory) {
                filtered = filtered.filter(blog => blog.category === selectedCategory);
            }

            renderBlogs(filtered);
        }

        searchInput.addEventListener('input', filterBlogs);
        categorySelect.addEventListener('change', filterBlogs);

        renderBlogs(blogs);
    });
</script>
@endsection
