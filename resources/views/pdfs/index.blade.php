@extends('layouts.dashboard')

@section('dash-content')
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="mb-12">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Explore PDFs</h1>
                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Search -->
                    <div class="flex-1">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="pdfSearch" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="Search PDFs...">
                        </div>
                    </div>

                    <!-- Type Filter -->
                    <select id="pdfType" class="block w-full md:w-64 px-4 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-2 focus:ring-blue-500">
                        <option value="">All Types</option>
                        @foreach($pdfresource->unique('type') as $resource)
                            <option value="{{ $resource->type }}">{{ ucfirst($resource->type) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- PDF Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="pdfContainer">
                @forelse($pdfresource as $pdf)
                    <div class="pdf-card bg-white rounded-xl shadow-md overflow-hidden transition-transform hover:scale-105"
                         data-title="{{ strtolower($pdf->title) }}"
                         data-description="{{ strtolower($pdf->description) }}"
                         data-type="{{ $pdf->type }}">
                        <div class="h-40 bg-{{ $loop->index % 5 == 0 ? 'blue' : ($loop->index % 5 == 1 ? 'green' : ($loop->index % 5 == 2 ? 'purple' : ($loop->index % 5 == 3 ? 'amber' : 'red'))) }}-100 flex items-center justify-center">
                            <svg class="w-10 h-10 text-{{ $loop->index % 5 == 0 ? 'blue' : ($loop->index % 5 == 1 ? 'green' : ($loop->index % 5 == 2 ? 'purple' : ($loop->index % 5 == 3 ? 'amber' : 'red'))) }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <div class="uppercase text-sm text-{{ $loop->index % 5 == 0 ? 'blue' : ($loop->index % 5 == 1 ? 'green' : ($loop->index % 5 == 2 ? 'purple' : ($loop->index % 5 == 3 ? 'amber' : 'red'))) }}-600 font-semibold">{{ ucfirst($pdf->type) }}</div>
                            <h3 class="mt-1 text-lg font-medium text-gray-900">{{ $pdf->title }}</h3>
                            <p class="mt-2 text-gray-500 text-sm">{{ Str::limit($pdf->description, 100) }}</p>
                            @if($pdf->url)
                                <a href="{{ $pdf->url }}" target="_blank" class="mt-4 inline-block text-{{ $loop->index % 5 == 0 ? 'blue' : ($loop->index % 5 == 1 ? 'green' : ($loop->index % 5 == 2 ? 'purple' : ($loop->index % 5 == 3 ? 'amber' : 'red'))) }}-600 hover:underline text-sm">View / Download</a>
                            @else
                                <span class="mt-4 inline-block text-gray-400 text-sm">No URL available</span>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-8">
                        <p class="text-gray-500">No PDFs found.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($pdfresource->hasPages())
                <div class="mt-8 flex justify-center">
                    {{ $pdfresource->links() }}
                </div>
            @endif
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const pdfContainer = document.getElementById('pdfContainer');
            const pdfSearch = document.getElementById('pdfSearch');
            const pdfType = document.getElementById('pdfType');
            const pdfCards = document.querySelectorAll('.pdf-card');

            function filterPDFs() {
                const searchTerm = pdfSearch.value.toLowerCase();
                const selectedType = pdfType.value;
                let visibleCount = 0;

                pdfCards.forEach(card => {
                    const title = card.getAttribute('data-title');
                    const description = card.getAttribute('data-description');
                    const type = card.getAttribute('data-type');

                    const matchesSearch = !searchTerm ||
                        title.includes(searchTerm) ||
                        description.includes(searchTerm);

                    const matchesType = !selectedType || type === selectedType;

                    if (matchesSearch && matchesType) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Show "no results" message if no cards are visible
                const existingMessage = document.getElementById('no-results-message');
                if (existingMessage) {
                    existingMessage.remove();
                }

                if (visibleCount === 0) {
                    const noResultsMessage = document.createElement('div');
                    noResultsMessage.id = 'no-results-message';
                    noResultsMessage.className = 'col-span-4 text-center py-8';
                    noResultsMessage.innerHTML = '<p class="text-gray-500">No PDFs found matching your criteria.</p>';
                    pdfContainer.appendChild(noResultsMessage);
                }
            }

            pdfSearch.addEventListener('input', filterPDFs);
            pdfType.addEventListener('change', filterPDFs);
        });
    </script>
@endsection
