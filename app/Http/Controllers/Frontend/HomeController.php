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
use App\Models\Contact;

use App\Models\AgentBusinessHistory;
use App\Models\AgentDetails;
use App\Models\AgentContactPerson;
use App\Models\AgentDeclaration;
use Mail;


use App\Http\Requests\ApplicantPostRequest;
use App\Http\Requests\ApplicantOnShore;
use App\Http\Requests\AgentPostRequest;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use PDF;
class HomeController extends Controller
{
 
    public function index(){
       
    
        return view('frontend.pages.index');

    }

public function offshore_form(){

    return view('frontend.pages.apply-offshore');

}

public function store_ofshore(ApplicantPostRequest $req){
   
    
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

        $data=[];
        Mail::send('frontend.emailTemplate.mail-ofsore', $data, function($message){
            $message->to('pandeyvivak25@gmail.com', 'ANE')->subject('Please verify your email');
            $message->from('admin@gmail.com','ANE');

        });


        return back()->with('message', 'Thankyou Your Information is sucessfully  Added!');

    }



public function onshore_form(){

    return view('frontend.pages.apply-onshore');

}

public function store_onshore(ApplicantOnShore $req){
 
   
    $req->merge([
        'offshore_student'=>0,
        
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

     return back()->with('message', 'Thankyou Your Information is sucessfully  Added!');
     

}
public function agent_form(){

    return view('frontend.pages.apply-agent-form');

}
public function agent(){

    return view('frontend.pages.become-agent');

}
    public function store_agent_application(AgentPostRequest $req){
      
        $agent_details= AgentDetails::create($req->all());
        $req->merge([
            'agent_id'=>$agent_details->id
        ]);
        $agent_business_history=AgentBusinessHistory::create($req->all());
       
        $agent_contact_person1=AgentContactPerson::create([
            'keyStaff'=>$req->keyStaff,
            'useragentname'=>$req->useragentname,
            'userinstname'=>$req->userinstname,
            'userinsttitle'=>$req->userinstname,
            'userinstphone'=>$req->userinstphone,
            'userinstfax'=>$req->userinstfax,
            'userinstemail'=>$req->userinstemail,
            'agent_id'=>$agent_details->id,
        ]);

        $agent_contact_person2=AgentContactPerson::create([
            'keyStaff'=>$req->keyStaff,
            'useragentname'=>$req->useragentname2,
            'userinstname'=>$req->userinstname2,
            'userinsttitle'=>$req->userinstname2,
            'userinstphone'=>$req->userinstphone2,
            'userinstfax'=>$req->userinstfax2,
            'userinstemail'=>$req->userinstemail2,
            'agent_id'=>$agent_details->id,
        ]);
        $req->merge([
            'agent_id'=>$agent_details->id
        ]);
        $agent_declaration=AgentDeclaration::create($req->all());
        $data=[];
        Mail::send('frontend.emailTemplate.mail-agent', $data, function($message){
            $message->to('pandeyvivak25@gmail.com', 'ANE')->subject('Please verify your email');
            $message->from('admin@gmail.com','ANE');

        });

        return back()->with('message', 'Thankyou Your Information is sucessfully  Added!');

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
public function glazed(){

    return view('frontend.pages.glazed-beef');

}
public function pork(){

    return view('frontend.pages.pork-thyme');

}
public function Cauliflower(){

    return view('frontend.pages.Cauliflower');

}
public function child_education(){
    return view('frontend.pages.childhood-education');
}
public function hospitality_management(){
    return view('frontend.pages.hospitality-manangement');
}
public function commercial_cookery(){
    return view('frontend.pages.commercial-cookery');
}
public function disability(){
    return view('frontend.pages.disability');
}
public function community_service(){
    return view('frontend.pages.community-services');
}
public function course(){
    return view('frontend.pages.course');
}

public function store_contact_form(ContactRequest $req){
    Contact::create($req->all());
    return back()->with('message', 'Thankyou Your for contacting us! we will respond soon.');
}

public function offsore_download(Request $request){
    $pdf = PDF::loadView('frontend.pages.offsore-pdf');
    return $pdf->download('offsore.pdf');
    

}

public function onsore_download(Request $request){
    $pdf = PDF::loadView('frontend.pages.onsore-pdf');
    return $pdf->download('onsore.pdf');
}


public function agent_download(Request $request){
    $agent=AgentDetails::findorFail(1);
    $pdf = PDF::loadView('frontend.pages.agent-pdf', $agent);
    return $pdf->download('agent.pdf');

}

}
