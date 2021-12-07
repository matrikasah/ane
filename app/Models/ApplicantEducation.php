<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantEducation extends Model
{
    use HasFactory;


    protected $fillable=[
        'higher_edu',
        'yearCompletion',
        'secondary',
        'prevquali',
        'employment',
        'ieltsscr',
        'ptescr',
        'toeflscr',
        'ieltsyear',
        'pteyear',
        'tofelyear',
        'otheryear',
        'proghistory',
        'priorlearn',
        'course',
        'intake',
        'applicant_id'

    ];

    protected $casts = [
        'course' => 'array',
        'intake'=>'array'
    ];





}
