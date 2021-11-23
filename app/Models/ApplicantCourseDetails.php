<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantCourseDetails extends Model
{
    use HasFactory;


    protected $fillable=[
        'course_code',
        'course_name',
        'tuition_fee',
        'enrollment_fee',
        'material_fee',
        'time',
        'applicant_id'
    ];
}
