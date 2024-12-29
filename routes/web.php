<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('jobs.index'); // Show landing page with jobs

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Add a Route to Show Job Details
Route::get('/jobs/{jobId}', [JobController::class, 'showJobWithApplicants'])->name('jobs.show');

// Route to apply for the job
Route::post('/jobs/{jobId}/apply', [ApplicantController::class, 'apply'])->name('applicant.apply');

// Route to show all applicants for a specific job
Route::get('/jobs/{jobId}/applicants', [ApplicantController::class, 'showApplicants'])->name('applicant.show');

require __DIR__.'/auth.php';
