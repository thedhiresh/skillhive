@extends('layouts.dashboard')

@section('dash-content')

    <section class=" p-12 mt-10 bg-white shadow-md rounded-xl">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add Opportunity</h2>

        <form action="{{ route('opportunity.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Type -->
            <div>
                <label for="type" class="block mb-1 font-medium text-gray-700">Type</label>
                <input
                    type="text"
                    id="type"
                    name="type"
                    placeholder="Enter Opportunity Type"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Title -->
            <div>
                <label for="title" class="block mb-1 font-medium text-gray-700">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    placeholder="Enter Title"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block mb-1 font-medium text-gray-700">Category</label>
                <input
                    type="text"
                    id="category"
                    name="category"
                    placeholder="Enter Category"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- For Nation or International -->
            <div>
                <label for="for" class="block mb-1 font-medium text-gray-700">For</label>
                <select
                    id="for"
                    name="for"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
                    <option value="">Select Option</option>
                    <option value="Nation">Nation</option>
                    <option value="International">International</option>
                </select>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block mb-1 font-medium text-gray-700">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="4"
                    placeholder="Enter Description"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                ></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button
                    type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition"
                >
                    Add Opportunity
                </button>
            </div>

        </form>
    </section>

@endsection
