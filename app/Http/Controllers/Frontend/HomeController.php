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
//dom PDF
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
    $applicant_email=$req->stdemail;
    $check=ApplicantPersonalDetail::where('stdemail',$applicant_email)->first();
    if($check){
                return back()->with('warning','This Email is Already used Please Enter Valid Email');
        }else{

                $req->merge(['offshore_student'=>1]);
                 $applicant_personal_detail=ApplicantPersonalDetail::create($req->all());


                    if(!$applicant_personal_detail){
                        return back()->with('warning','please check form and try again');
                    }else{
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
                                $applicant_photography_concent=ApplicantPhotographyConsent::create($req->all());

                                $req->merge([
                                    'applicant_id'=>$applicant_personal_detail->id

                                    ]);
                                $applicant_collage_commitment=ApplicantCollageCommitment::create($req->all());
                    }

                    if(!($application_emergency_contact && $application_education_agent && $applicant_education &&  $applicant_language_culture)){

                                    return back()->with('warning','Something went wrong Please try again');

                            }else{

                                    $user_id = $applicant_personal_detail->id;

                                            $data = array('id'=>$user_id );

                                            $email=$applicant_personal_detail['stdemail'];

                                            Mail::send('frontend.emailTemplate.mail-ofsore', $data, function($message) use($email) {
                                            $message->to($email, 'ANE')->subject
                                                ('Please verify your email');
                                            $message->from('ane.demo123@gmail.com','ANE');


                                            });

                                    }

                    return back()->with('message', 'Thankyou Your Information is sucessfully  Added!');


        }
}


public function onshore_form(){

    return view('frontend.pages.apply-onshore');

}

public function store_onshore(ApplicantOnShore $req){
    $applicant_email=$req->stdemail;
    $check=ApplicantPersonalDetail::where('stdemail',$applicant_email)->first();
    if($check){
                return back()->with('warning','This Email is Already used Please Enter Valid Email');
        }else{
            $req->merge(['offshore_student'=>0,]);
             $applicant_personal_detail=ApplicantPersonalDetail::create($req->all());

                if(!$applicant_personal_detail){
                    return back()->with('warning','Please Reenter the valid information');
                        }
                        else{
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
                                $applicant_photography_concent=ApplicantPhotographyConsent::create($req->all());

                                $req->merge([
                                    'applicant_id'=>$applicant_personal_detail->id

                                    ]);
                                $applicant_collage_commitment=ApplicantCollageCommitment::create($req->all());
                        }

                        if($application_emergency_contact &&  $application_education_agent && $applicant_education && $applicant_language_culture && $applicant_collage_commitment){

                                      $user_id = $applicant_personal_detail->id;

                                            $data = array('id'=>$user_id );

                                            $email=$applicant_personal_detail['stdemail'];

                                            Mail::send('frontend.emailTemplate.mail-ofsore', $data, function($message) use($email) {
                                            $message->to($email, 'ANE')->subject
                                                ('Please verify your email');
                                            $message->from('ane.demo123@gmail.com','ANE');


                                            });

                        }else{
                                    return back()->with('warning','Your form cannot be submitted Please Try again');
                               }
          return back()->with('message', 'Thankyou Your Information is sucessfully  Added!');
        }


}
public function agent_form(){

    return view('frontend.pages.apply-agent-form');

}
public function agent(){

    return view('frontend.pages.become-agent');

}
public function store_agent_application(AgentPostRequest $req){


    $agent_number=$req->mobile_num;
    $check=AgentDetails::where('mobile_num',$agent_number)->first();
    if($check){
        return back()->with('warning','Mobile number already exists please try again with new number');
    }else{
        $agent_details= AgentDetails::create($req->all());
                if($agent_details){


                                $req->merge(['agent_id'=>$agent_details->id ]);
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
                  }else{
                            return back()->with('warning','Agent Form Cannot be Created Please Try again');
                        }

                        if($agent_business_history &&  $agent_contact_person1 &&  $agent_contact_person2 &&   $agent_declaration){

                                $user_id = $agent_details->id;

                                $data = array('id'=>$user_id );

                                $email='ane.demo123@gmail.com';

                                $mail=Mail::send('frontend.emailTemplate.mail-agent', $data, function($message) use($email) {
                                $message->to($email, 'ANE')->subject
                                    ('Please verify your email');
                                $message->from('ane.demo123@gmail.com','ANE');


                                });


                        }else{
                            return back()->with('warning','Something Went Wrong Please Try again');
                        }


    }


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
public function course(){

    return view('frontend.pages.course');

}
public function child_education(){

    return view('frontend.pages.childhood-education');

}
public function commercial_cookery(){

    return view('frontend.pages.commercial-cookery');

}
public function community_service(){

    return view('frontend.pages.community-services');

}
public function hospitality_management(){

    return view('frontend.pages.hospitality-manangement');

}
public function disability(){

    return view('frontend.pages.disability');

}

public function policy(){

    return view('frontend.pages.policy');

}



public function pork(){

    return view('frontend.pages.pork-thyme');

}
public function Cauliflower(){

    return view('frontend.pages.Cauliflower');

}

public function store_contact_form(ContactRequest $req){
   $contact=Contact::create($req->all());
if($contact){
                $data = [
                'name'=>$contact->name,
                'email'=>$contact->email,
                'phone'=>$contact->phone,
                'message'=>$contact->message ];

                $email='ane.demo123@gmail.com';

                $mail=Mail::send('frontend.emailTemplate.contact', ["data"=>$data], function($message) use($email) {
                $message->to($email, 'ANE')->subject
                    ('Contact Mail');
                $message->from('ane.demo123@gmail.com','ANE');


                });

    return back()->with('message', 'Thankyou Your for contacting us! we will respond soon.');
}else{
    return back()->with('message', 'Sorry Something went wrong please try again.');
}



}

public function offsore_download(Request $request,$id){
    $applicant=ApplicantPersonalDetail::findorFail($id);
    $pdf = PDF::loadView('frontend.pdf.offsore-pdf', compact('applicant'));
    return $pdf->download('offsore.pdf');


}

public function onsore_download(Request $request,$id){
    $applicant=ApplicantPersonalDetail::findOrFail($id);
    $pdf = PDF::loadView('frontend.pdf.onsore-pdf',compact('applicant'));
    return $pdf->download('onsore.pdf');
}


public function agent_download(Request $request,$id){
    $agent=AgentDetails::findorFail($id);
    $pdf = PDF::loadView('frontend.pdf.agent-pdf',compact('agent'));
    return $pdf->download('agent.pdf');

}



}
