@extends('layouts.dashboard')

@section('dash-content')

    <div class="max-w-5xl mx-auto px-4 py-10">

        <h1 class="text-3xl font-semibold text-gray-800 mb-8">Add New PDF Resource</h1>

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

        <form action="{{ route('pdfresource.store') }}" method="POST" class="space-y-8 bg-white p-8 rounded shadow">
            @csrf

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Title -->
                <div class="md:col-span-2">
                    <label for="title" class="block mb-1 text-sm font-medium text-gray-700">Title <span class="text-red-600">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                           placeholder="Enter the resource title"
                           class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">
                </div>

                <!-- Type -->
                <div>
                    <label for="type" class="block mb-1 text-sm font-medium text-gray-700">Type <span class="text-red-600">*</span></label>
                    <select name="type" id="type" required
                            class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">
                        <option value="">Select Resource Type</option>
                        <option value="Manual" {{ old('type') == 'Manual' ? 'selected' : '' }}>Manual</option>
                        <option value="Guide" {{ old('type') == 'Guide' ? 'selected' : '' }}>Guide</option>
                        <option value="Documentation" {{ old('type') == 'Documentation' ? 'selected' : '' }}>Documentation</option>
                        <option value="Report" {{ old('type') == 'Report' ? 'selected' : '' }}>Report</option>
                        <option value="Tutorial" {{ old('type') == 'Tutorial' ? 'selected' : '' }}>Tutorial</option>
                        <option value="Whitepaper" {{ old('type') == 'Whitepaper' ? 'selected' : '' }}>Whitepaper</option>
                        <option value="Other" {{ old('type') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <!-- URL -->
                <div>
                    <label for="url" class="block mb-1 text-sm font-medium text-gray-700">URL <span class="text-gray-500">(Optional)</span></label>
                    <input type="url" name="url" id="url" value="{{ old('url') }}"
                           placeholder="https://example.com/resource.pdf"
                           class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">
                    <p class="text-sm text-gray-500 mt-1">If provided, this should be a direct link to the PDF resource.</p>
                </div>

            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block mb-1 text-sm font-medium text-gray-700">Description <span class="text-red-600">*</span></label>
                <textarea name="description" id="description" rows="6" required
                          placeholder="Enter a detailed description of the resource"
                          class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-sky-500 focus:outline-none">{{ old('description') }}</textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex flex-col sm:flex-row gap-4 justify-end">
                <a href="{{ route('pdfresource.index') }}"
                   class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition text-center">
                    Cancel
                </a>
                <button type="submit"
                        class="px-6 py-2 bg-sky-500 text-white rounded hover:bg-sky-600 transition">
                    Create Resource
                </button>
            </div>

        </form>

    </div>

@endsection

@section('scripts')
    <script>
        // Optional: Add custom type input when "Other" is selected
        document.getElementById('type').addEventListener('change', function() {
            if (this.value === 'Other') {
                // You can add custom logic here if needed
                console.log('Other type selected');
            }
        });
    </script>
@endsection
