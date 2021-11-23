<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantLanguageCulture extends Model
{
    use HasFactory;

    protected $fillable=[
        'langbirthCoun',
        'ausCtzen',
        'ausAbor',
        'onlyAbor',
        'onlyTorres',
        'englanguage',
        'otherlanguages',
        'applicant_id'
    ];
}
