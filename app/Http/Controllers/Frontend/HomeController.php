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

public function who_can_apply(){

    return view('frontend.pages.who-can-apply');

}

public function intake_date(){

    return view('frontend.pages.intake-date');

}
public function how_to_apply(){

    return view('frontend.pages.how-to-apply');

}
public function first_day(){

    return view('frontend.pages.first-day');

}
public function orientation(){

    return view('frontend.pages.orientation');

}
public function campus_location(){

    return view('frontend.pages.campus-location');

}
public function student_support(){

    return view('frontend.pages.student-support');

}
public function rules_regulations(){

    return view('frontend.pages.rulesandregulations');

}

public function airport_pick_up(){

    return view('frontend.pages.airport-pick-up');

}

public function oshc(){

    return view('frontend.pages.oshc');

}

public function faqs(){

    return view('frontend.pages.faq');

}

public function about(){

    return view('frontend.pages.about');

}

public function international_student(){

    return view('frontend.pages.international-student');

}
public function message_ceo(){

    return view('frontend.pages.message-ceo');

}

public function contact(){

    return view('frontend.pages.contact');

}
public function notice(){

    return view('frontend.pages.notice');

}




}
