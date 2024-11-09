<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
protected $fillable = ['company_name', 'role', 'duration'];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
