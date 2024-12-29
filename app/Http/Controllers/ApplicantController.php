<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    // Apply for a job
    public function apply(Request $request, $jobId)
    {
        // Validate the request data
        $request->validate([
            'resume' => 'required|mimes:pdf,doc,docx|max:2048', // File validation
        ]);

        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to apply for a job.');
        }

        // Find the job to which the applicant is applying
        $job = Job::findOrFail($jobId);

        // Save the applicant's resume
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Create a new Applicant record
        $applicant = new Applicant();
        $applicant->job_id = $job->id;
        $applicant->user_id = Auth::id(); // Associate applicant with logged-in user
        $applicant->resume_path = $resumePath;
        $applicant->status = 'pending';

        // Save the applicant record to the database
        $applicant->save();

        // Redirect back with a success message
        return redirect()->route('jobs.show', ['jobId' => $job->id])
            ->with('success', 'You have applied for the job successfully.');
    }

    // Show all applicants for a job
    public function showApplicants($jobId)
    {
        // Find the job and load its applicants
        $job = Job::findOrFail($jobId);
        $applicants = $job->applicants;

        // Return a view with the job and its applicants
        return view('jobs.applicants', compact('job', 'applicants'));
    }
}
