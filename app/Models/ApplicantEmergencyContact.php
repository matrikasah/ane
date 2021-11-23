<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantEmergencyContact extends Model
{
    use HasFactory;

    protected $fillable =[
        'fullName',
        'relationship',
        'contactNum',
        'mobile',
        'emergency_pay',
        'applicant_id'

    ];
}
