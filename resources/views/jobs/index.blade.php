@extends('layouts.app')

@section('content')
<!-- Hero Section -->
 <!-- Hero Section -->
 <div class="bg-blue-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-white mb-6">Find Your Dream Job Today</h1>
            <p class="text-xl text-blue-100 mb-8">Connect with over 10,000+ employers and start your next career journey</p>
            
            <!-- Search Box -->
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-4">
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1">
                        <input type="text" placeholder="Job title or keyword" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="flex-1">
                        <input type="text" placeholder="Location" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <button class="bg-blue-600 text-white px-8 py-2 rounded-lg hover:bg-blue-700">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Available Jobs Section -->
<div id ="jobs" class="container mx-auto py-12 px-4">
    <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">Available Jobs</h2>
    @if($jobs->isEmpty())
        <p class="text-center text-gray-500">No jobs available at the moment.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($jobs as $job)
                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">{{ $job->title }}</h3>
                    <ul class="text-sm text-gray-700 space-y-1">
                        <li><strong>Type:</strong> {{ $job->job_type }}</li>
                        <li><strong>Location:</strong> {{ $job->location }}</li>
                        <li><strong>Skills:</strong> {{ $job->key_skills }}</li>
                        <li><strong>Experience:</strong> {{ $job->required_experience }} yrs</li>
                    </ul>
                    <div class="mt-4 flex items-center justify-between">
                        {{-- <a href="{{ route('jobs.show', $job->id) }}" 
                           class="text-indigo-600 text-sm font-medium hover:underline">
                            View Details
                        </a> --}}
                        @auth
                            <form action="{{ route('jobs.show', $job->id) }}">
                                {{-- @csrf --}}
                                <button type="submit" 
                                        class="text-sm bg-blue-600 text-white px-3 py-1.5 rounded hover:bg-blue-500 transition">
                                    View Details
                                </button>
                            </form>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>


    <!-- Features Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Why Choose JobConnect?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i data-feather="briefcase" class="w-8 h-8 text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">10,000+ Jobs</h3>
                    <p class="text-gray-600">Find opportunities from leading companies across industries</p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i data-feather="users" class="w-8 h-8 text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Verified Employers</h3>
                    <p class="text-gray-600">Connect with legitimate companies and secure opportunities</p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i data-feather="trending-up" class="w-8 h-8 text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Career Growth</h3>
                    <p class="text-gray-600">Access resources and tools to advance your career</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Ready to Find Your Next Opportunity?</h2>
                <p class="text-xl text-blue-100 mb-8">Join thousands of professionals who've found their dream jobs through JobConnect</p>
                <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-gray-100">Get Started Now</button>
            </div>
        </div>
    </div>
@endsection
