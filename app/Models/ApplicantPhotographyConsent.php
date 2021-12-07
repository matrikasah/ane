<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantPhotographyConsent extends Model
{
    use HasFactory;
    protected $fillable =[
        'photoConsent',
        'applicant_id'

    ];

}
