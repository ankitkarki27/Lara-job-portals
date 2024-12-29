<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    
    use HasFactory;

      // Define a relationship method to get all applicants for this jo
    public function  applicants() {

        return $this->hasMany(Applicant::class);
        // hasMany meth means 1 to m reln
    }
}
