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

    public function setDisableAttribute($value) 

    { 

        $this->attributes['disable'] = json_encode($value); 

    } 

 

    public function getDisableAttribute($value) 

    { 

        return $this->attributes['disable'] = json_decode($value); 

    } 


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


}
