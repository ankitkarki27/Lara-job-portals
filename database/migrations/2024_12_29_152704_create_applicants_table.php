<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id'); // Foreign key to the job
            $table->unsignedBigInteger('user_id'); // Foreign key to the user (applicant)
            $table->string('resume_path')->nullable(); // Resume file path (nullable)
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Application status
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
