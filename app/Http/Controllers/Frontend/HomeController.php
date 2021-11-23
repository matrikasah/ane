<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


use App\Models\ApplicantPersonalDetail;
use App\Models\ApplicantEmergencyContact;
use App\Models\ApplicantEducationAgent;
use App\Models\ApplicantEducation;
use App\Models\ApplicantLanguageCulture;
use App\Models\ApplicantCourseDetails;
use App\Models\ApplicantPhotographyConsent;
use App\Models\ApplicantCollageCommitment;


use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function index(){
    
        return view('frontend.pages.index');

    }

public function offshore_form(){

    return view('frontend.pages.apply-offshore');

}

public function store_ofshore(Request $req){
   
    
    $req->merge([
        'offshore_student'=>1,
        
    ]);

    $applicant_personal_detail=ApplicantPersonalDetail::create($req->all());
    
    $req->merge([
    'applicant_id'=>$applicant_personal_detail->id

    ]);
    $application_emergency_contact=ApplicantEmergencyContact::create($req->all());
    $req->merge([
        'applicant_id'=>$applicant_personal_detail->id
    
        ]);
    $application_education_agent=ApplicantEducationAgent::create($req->all());
    $req->merge([
        'applicant_id'=>$applicant_personal_detail->id
    
        ]);
    $applicant_education=ApplicantEducation::create($req->all());
    $req->merge([
        'applicant_id'=>$applicant_personal_detail->id
    
        ]);
     $applicant_language_culture=ApplicantLanguageCulture::create($req->all());
     $req->merge([
        'applicant_id'=>$applicant_personal_detail->id
    
        ]);
     $applicant_course=ApplicantCourseDetails::create($req->all());
     $req->merge([
        'applicant_id'=>$applicant_personal_detail->id
    
        ]);
    $applicant_photography_concent=ApplicantPhotographyConsent::create($req->all());
    
    $req->merge([
        'applicant_id'=>$applicant_personal_detail->id
    
        ]);
     $applicant_collage_commitment=ApplicantCollageCommitment::create($req->all());

     

dd('sucessfull');



}

public function onshore_form(){

    return view('frontend.pages.apply-onshore');

}
public function agent_form(){

    return view('frontend.pages.apply-agent-form');

}
public function agent(){

    return view('frontend.pages.become-agent');

}




}
