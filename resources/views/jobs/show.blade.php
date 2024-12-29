@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8 mt-8">
    <!-- Job Details Section -->
    <h1 class="text-3xl font-bold text-indigo-600 mb-4">{{ $job->title }}</h1>
    <p class="text-gray-700 text-lg mb-6">{{ $job->description }}</p>

    <!-- Applicants Section -->
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Applicants</h2>
    @if ($applicants->isEmpty())
        <p class="text-gray-600 italic">No applicants yet.</p>
    @else
        <ul class="list-disc list-inside space-y-2">
            @foreach ($applicants as $applicant)
                <li class="text-gray-700 font-medium">
                    {{ $applicant->name }} - 
                    <a href="mailto:{{ $applicant->email }}" class="text-indigo-500 hover:underline">
                        {{ $applicant->email }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Apply Form -->
    <div class="mt-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Apply for this Job</h3>
        <form action="{{ route('applicant.apply', $job->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="resume" class="block text-sm font-medium text-gray-700">Upload Resume:</label>
                <input type="file" name="resume" id="resume" class="block w-full border-gray-300 rounded-md shadow-sm mt-1" required>
            </div>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                Apply
            </button>
        </form>
    </div>
</div>

@endsection
