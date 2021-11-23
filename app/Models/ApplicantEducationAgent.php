<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantEducationAgent extends Model
{
    use HasFactory;

    protected $fillable=[
        'apply_through_agent',
        'orgName',
        'agentCnum',
        'applicant_id',
       


    ];
}
