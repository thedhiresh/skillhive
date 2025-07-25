@extends('layouts.dashboard')
@section('dash-content')

<main class="flex-1 overflow-y-auto p-6 bg-[#F9FAFB]">
                <!-- User Profile Card -->
                <div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
                    <div class="flex items-center space-x-6">
                        <!-- Avatar -->
                        <div class="w-20 h-20 rounded-full bg-[#4F46E5] flex items-center justify-center text-white text-3xl font-bold">
                            {{ strtoupper(substr(explode(' ', Auth::user()->name)[0], 0, 1) . substr(explode(' ', Auth::user()->name)[1] ?? '', 0, 1)) }}

                        </div>

                        <!-- User Info -->
                        <div>
                            <h3 class="text-2xl font-bold text-[#111827]">{{ Auth::user()->name }}</h3>
                            <p class="text-[#6B7280]">{{ Auth::user()->email }}</p>
                            <div class="flex space-x-4 mt-2">
{{--                                <span class="px-3 py-1 bg-[#E0E7FF] text-[#4F46E5] rounded-full text-sm">Administrator</span>--}}
                                <span class="px-3 py-1 bg-[#ECFDF5] text-[#059669] rounded-full text-sm">Active</span>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-200">
                            Logout
                        </button>
                    </form>


                    <!-- Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                        <div class="bg-[#F9FAFB] p-4 rounded-lg border border-[#E5E7EB]">
                            <p class="text-[#6B7280]"> Total Courses available</p>
                            <p class="text-2xl font-bold text-[#111827]">{{$courses->count()}}</p>
                        </div>
                        <div class="bg-[#F9FAFB] p-4 rounded-lg border border-[#E5E7EB]">
                            <p class="text-[#6B7280]">Resources Downloaded</p>
                            <p class="text-2xl font-bold text-[#111827]">{{$pdfresources->count()+$courses->count()}}</p>
                        </div>
                        <div class="bg-[#F9FAFB] p-4 rounded-lg border border-[#E5E7EB]">
                            <p class="text-[#6B7280]">Last Active</p>
                            <p class="text-2xl font-bold text-[#111827]">2h ago</p>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="mt-8">
                        <h4 class="text-lg font-semibold text-[#111827] mb-4">Recent Courses</h4>
                        <div class="space-y-4">


                            @foreach ($courses->take(6) as $course)
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 rounded-full bg-[#E0E7FF] flex items-center justify-center text-[#4F46E5] mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-[#111827]">{{ $course->title }}</p>
                                    <p class="text-sm text-[#6B7280]">{{ $course->updated_at }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>

    </div>
    </div>

@endsection
