<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function showJobWithApplicants($jobId)
    {
        // find job by its id
        $job = Job::find($jobId);

        // check if the job exists

        if(!$job){
            return redirect()-> route('jobs.index')-> with('error','Job not found');
        }

        // retrieve all applicants for the specific job
        $applicants = $job -> applicants;

        // Pass the job and its applicants to the view
        return view ('jobs.show',compact('job','applicants'));

    }
   
    // for showinf all jobs
public function index()
{
    $jobs = Job::all(); // Fetch all jobs
    return view('jobs.index', compact('jobs')); // Pass jobs to the view
}
}
