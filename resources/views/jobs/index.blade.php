@extends('layouts.app')

@section('content')

<!-- Hero Section with Animated Gradient -->
<div class="relative bg-gradient-to-br from-blue-950 via-blue-800 to-blue-900 rounded-lg">
    <!-- Overlay Pattern -->
    <div class="rounded-lg absolute inset-0 bg-blue-900/30" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0);background-size: 24px 24px; "></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative">
        <!-- Hero Content -->
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Find Your 
                <span class="bg-gradient-to-r from-blue-200 to-blue-100 text-transparent bg-clip-text"> Dream Job</span>
                Today
            </h1>
            
            <p class="text-xl text-blue-100 mb-12 font-light max-w-2xl mx-auto">
                Connect with over <span class="font-semibold">100+</span> employers and start your next career journey
            </p>

            <!-- Enhanced Search Box -->
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl p-8 backdrop-blur-lg">
                <!-- Search Tabs -->
                <div class="flex gap-6 mb-6 border-b border-gray-200">
                    <button class="text-blue-600 border-b-2 border-blue-600 pb-3 font-medium">Job Search</button>
                    <button class="text-gray-500 hover:text-gray-700 pb-3 font-medium">Company Search</button>
                </div>

                <!-- Search Form -->
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Job Title Input -->
                        <div class="relative">
                            <label class="block text-sm font-medium text-gray-700 mb-1 text-left">Job Title</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input type="text" 
                                       placeholder="e.g., Software Engineer" 
                                       class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                        </div>

                        <!-- Company Input -->
                        <div class="relative">
                            <label class="block text-sm font-medium text-gray-700 mb-1 text-left">Company</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <input type="text" 
                                       placeholder="e.g., Google, Amazon" 
                                       class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                        </div>

                        <!-- Location Input -->
                        <div class="relative">
                            <label class="block text-sm font-medium text-gray-700 mb-1 text-left">Location</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <input type="text" 
                                       placeholder="e.g., New York, Remote" 
                                       class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <button class="w-full bg-blue-600 text-white py-3 rounded-xl hover:bg-blue-700 transition-colors duration-300 font-semibold shadow-lg hover:shadow-xl flex items-center justify-center space-x-2">
                        <span>Search Opportunities</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>

                    <!-- Popular Searches -->
                    <div class="pt-6 border-t border-gray-100">
                        <p class="text-sm text-gray-600 mb-3 text-left">Trending Searches:</p>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="text-sm text-gray-700 bg-gray-100 px-4 py-1.5 rounded-full hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                Remote Jobs
                            </a>
                            <a href="#" class="text-sm text-gray-700 bg-gray-100 px-4 py-1.5 rounded-full hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                Tech Startups
                            </a>
                            <a href="#" class="text-sm text-gray-700 bg-gray-100 px-4 py-1.5 rounded-full hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                Software Engineer
                            </a>
                            <a href="#" class="text-sm text-gray-700 bg-gray-100 px-4 py-1.5 rounded-full hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                Product Design
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <p class="text-3xl font-bold text-white">10K+</p>
                    <p class="text-blue-200 text-sm mt-1">Active Jobs</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold text-white">8K+</p>
                    <p class="text-blue-200 text-sm mt-1">Companies</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold text-white">15K+</p>
                    <p class="text-blue-200 text-sm mt-1">Job Seekers</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold text-white">95%</p>
                    <p class="text-blue-200 text-sm mt-1">Success Rate</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- jobs section --}}
<div id="jobs" class="container mx-auto bg-white py-8 px-4">
    <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">Available Jobs</h2>
    <div class="max-w-7xl mx-auto">
        @if($jobs->isEmpty())
            <p class="text-center text-sm text-gray-500">No jobs available at the moment.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($jobs as $job)
                    <div class="bg-white rounded-lg p-4 border border-gray-200 hover:shadow-md transition-shadow duration-200">
                        <!-- Company Header -->
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-blue-500 rounded flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-900">{{ $job->company->name }}</h3>
                                    <span class="text-xs text-gray-500">{{ $job->company->address }}</span>
                                </div>
                            </div>
                            <span class="px-2 py-1 bg-blue-50 text-blue-600 text-xs font-medium rounded-full">
                                {{ $job->job_type }}
                            </span>
                        </div>

                        <!-- Job Title -->
                        <h2 class="text-lg font-semibold text-gray-900 mb-2">{{ $job->title }}</h2>

                        <!-- Key Details -->
                        <div class="space-y-2 mb-3">
                            <!-- Salary & Experience -->
                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Rs.{{ $job->salary }}</span>
                                <span class="text-gray-400">•</span>
                                <span>{{ $job->required_experience }} years</span>
                            </div>

                            <!-- Skills -->
                            <div class="flex flex-wrap gap-1">
                                @foreach(explode(',', $job->key_skills) as $skill)
                                    <span class="px-2 py-0.5 bg-red-50 text-gray-600 rounded-full text-xs">
                                        {{ trim($skill) }}
                                    </span>
                                @endforeach
                            </div>

                            <!-- Location -->
                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>{{ $job->company->address }}</span>
                            </div>

                            <!-- Deadline -->
                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($job->deadline)->format('Y-m-d') }}</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <div class="flex justify-end pt-3 border-t border-gray-100">
                            <a href="{{ route('jobs.show', $job->id) }}" class="inline-flex items-center px-3 py-1.5 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors">
                                View Details
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

{{-- old jobs --}}

    <!-- Features Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Why Choose jobsNepal?</h2>
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
