@extends('layouts.app')

@section('content')
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
                        <input type="text" placeholder="Job title or keyword" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-800">
                    </div>
                    <div class="flex-1">
                        <input type="text" placeholder="Location" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                    <button class="bg-blue-800 text-white px-8 py-2 rounded-lg hover:bg-blue-900">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="jobs" class="w-full bg-gray-50">
    <div class="max-w-[1920px] mx-auto py-8 px-6">
        @if($jobs->isEmpty())
            <p class="text-center text-gray-500">No jobs available at the moment.</p>
        @else
            <div class="grid grid-cols-1 gap-4">
                @foreach($jobs as $job)
                    <div class="bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100 h-[280px]">
                        <div class="flex justify-between h-full">
                            <!-- Left Section -->
                            <div class="flex-1 pr-8">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="text-gray-700 font-medium">{{ $job->company }}</h3>
                                    <div class="flex items-center gap-6 text-gray-500 text-sm">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                            </svg>
                                            {{ $job->location }}
                                        </span>
                                        <span class="flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            {{ $job->posted_date }}
                                        </span>
                                    </div>
                                </div>

                                <h2 class="text-2xl font-semibold text-gray-900 mb-4">{{ $job->title }}</h2>
                                <p class="text-gray-600 mb-6">{{ $job->job_type }} - {{ $job->salary_range }}</p>

                                <div class="flex flex-wrap gap-2">
                                    @foreach(explode(',', $job->key_skills) as $skill)
                                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm">
                                            {{ trim($skill) }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Right Section -->
                            <div class="flex items-center">
                                @auth
                                    <form action="{{ route('jobs.show', $job->id) }}">
                                        <button type="submit" 
                                                class="bg-blue-600 text-white px-6 py-2.5 rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                                            View Details
                                        </button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

<div id="jobs" class="container w-full bg-gray-50 py-12 px-4">
    <h2 class="text-3xl font-bold text-center mb-6 text-gray-900">Available Jobs</h2>
    <div class="max-w-[1920px] mx-auto py-8 px-6">
        @if($jobs->isEmpty())
            <p class="text-center text-gray-500">No jobs available at the moment.</p>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-4">
                @foreach($jobs as $job)
                    <div class="bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 border border-red-400">
                        <!-- Company and Time Info -->
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-gray-700 font-medium">{{ $job->company }}</h3>
                            <div class="flex items-center gap-4 text-gray-800 rounded-full text-sm text-m">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                    </svg>
                                    {{ $job->job_type }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    {{ $job->deadline }}
                                </span>
                            </div>
                        </div>

                        <!-- Job Title -->
                        <h2 class="text-xl font-bold text-gray-900 mb-3">{{ $job->title }}</h2>

                        <!-- Salary Range -->
                        <p class="text-gray-600 mb-4">{{ $job->job_type }}-Rs {{ $job->salary }}</p>
                        <p class="text-gray-600 mb-4"> Experience - {{ $job->required_experience }} yrs  </p>
                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mt-4">
                            @foreach(explode(',', $job->key_skills) as $skill)
                                <span class="px-3 py-1 bg-red-200 text-gray-600 rounded-full text-sm">
                                    {{ trim($skill) }}
                                </span>
                            @endforeach
                        </div><br>
<hr>
{{ $job->created_at }}
                        <div class="mt-4 flex items-center justify-between">
                            <a href="{{ route('jobs.show', $job->id) }}" 
                               class="text-indigo-600 text-sm font-medium hover:underline">
                                View Details
                            </a>
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
