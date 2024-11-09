<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name'];

    public function Applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
