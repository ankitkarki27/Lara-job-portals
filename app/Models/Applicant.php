<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
// Define a relationship method to get the job that this applicant applied for
    public function job()
    {
        return $this->belongsTo((job::class));
        // The 'belongsTo' method defines the many-to-one relationship
        // means 1 applicant 1 job
        
    }
}
