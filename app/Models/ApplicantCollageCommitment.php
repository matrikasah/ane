<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantCollageCommitment extends Model
{
    use HasFactory;

    protected $fillable=[
        'applicant_sign',
        'date_of_sign',
        'stdname',
        'stdnameB',
        'mydocs',
        'applicant_signB',
        'date_of_signB',
        'applicant_id'
        
    ];
}
