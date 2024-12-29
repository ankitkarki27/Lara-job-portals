<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\JobController;
use App\Models\Job;

class ApplicantController extends Controller
{
   public function apply (Request $request,$jobId){

        // Validation for the request data
        $request->validate([
            'resume'=>'required|mimes:pdf,doc,docx|max:2048',// File validation
        ]);


        // find job to which applicant is applying

        $job=Job::findforall($jobId);

        // save applicants resume


   }
}
