<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantPersonalDetail extends Model
{
    use HasFactory;

    protected $fillable=[
        'uid',
        'stdsurname',
        'stdgivenname',
        'stdhomeaddress',
        'stdsuburb',
        'stdpostcode',
        'stdtelnum',
        'stdemail',
        'stddob',
        'sex',
        'is_disable',
        'disable',

        'offshore_student'
    ];

  protected $casts =[
      'disable'=>'array',
  ];


    public function emergencycontacts(){
        return $this->hasOne(ApplicantEmergencyContact::class, 'applicant_id');
    }

    public function applicationagents(){
        return $this->hasOne(ApplicantEducationAgent::class, 'applicant_id');
    }

    public function applicationeducation(){
        return $this->hasOne(ApplicantEducation::class, 'applicant_id');
    }

    public function applicationcultural(){
        return $this->hasOne(ApplicantLanguageCulture::class, 'applicant_id');
    }

    public function photographyConsent(){
        return $this->hasOne(ApplicantPhotographyConsent::class, 'applicant_id');
    }
    public function applicantCommitment(){
        return $this->hasOne(ApplicantCollageCommitment::class, 'applicant_id');
    }



}
