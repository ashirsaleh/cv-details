<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['institution_name', 'degree', 'graduation_year'];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
