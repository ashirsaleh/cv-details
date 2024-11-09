<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['full_name', 'email', 'phone_number'];

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
