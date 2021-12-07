@extends('frontend.master')
@section('content')
<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Offshore Students</h1>
					<p>Apply as Offshore Students</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Offshore Students</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

@if(session()->has('message'))
<div classs="container p-5">
	<div class="row no-gutters">
		<div class="col-lg-6 col-md-12 m-auto">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Well done!</strong> {{ session()->get('message') }}
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
		</div>
	</div>
</div>
@endif
<section class="innerpage-content offshoreForm">
	<div class="container">
        <div class="row   mt-5">

            <div class="col-sm-6">
                <div class="small-title title">
                    <h3>Offshore Students</h3>
                    <h1>OFFSHORE STUDENT ENROLLMENT FORM</h1>
                </div>
            </div>

 
            <div class="col-sm-6">
                <div class="button-lists bd-example">
                    <div class="btn-group">
                    <a  onclick="window.print();return false;" class="btn btn-outline-primary hvr-bounce-to-right">Print <i class="fas fa-print"></i></a>                  
                    <a target="_blank" href="{{ asset('image/StudentEnrolmentForm(Offshore).pdf') }}" class="btn btn-outline-secondary hvr-bounce-to-right">Download <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
		<div class="row calender content-text">
			<div class="col-12">
				<section class="offshoreForm">
        
       <div class="aneContent">
            <p class="enrollmentDesc">Before you complete this Enrollment Form, please read all available information and
                Course Pre-
                Information on our
                website. If you have any enquiries, please contact the ANE College or email us from the Contact Us link
                on our website <a target="_blank" href="http://www.ane.edu.au">www.ane.edu.au</a>.
                Once signed and the issue of a receipt for initial fees this document is a binding
                contract.</p>

           
                <!-- <ul class="error">
                    @foreach($errors->all() as $error)
                    <li><div class="alert alert-danger" role="alert">
                        {{ $error }}
                        </div>
                    </li>
                    @endforeach
                </ul> -->

            <form action="{{route('offshore.store')}}" method="POST" >
                @csrf
                
          
                <div class="personalDetails p-1 mt-4 gap">
                    <div class="personalDetailsHead mainFormHeadings">
                        <h3>Personal Details</h3>
                        <p>(Legal name as per photo ID, which will need to be sighted to verify
                            legal
                            name)
                        </p>
                    </div>
                    <div class="row">

                        <div class="col-md-12  mt-4">
                            <div class="input-group">
                                <label for="userUsi" class="input-group-text userusiLabel">Unique Student Identifier
                                    (USI) – <span class="secondarySpan"> Refer to
                                        Page 5 for assistance :</span></label>
                                <input id="userUsi" name="stdusi" type="text" class="form-control"
                                    placeholder="Unique Student Identifier (USI)" value="{{ old('stdusi') }}" >
                                    @if ($errors->has('stdusi'))
                                    <div class="alert alert-danger">{{ $errors->first('stdusi') }}</div>
                                    @endif
                                   
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userSurname" class="input-group-text">Surname</label>
                                <input id="userSurname" name="stdsurname" type="text" class="form-control"
                                    placeholder="Enter Your Surname" value="{{ old('stdsurname') }}" required>
                                    @if ($errors->has('stdsurname'))
                                    <div class="alert alert-danger">{{ $errors->first('stdsurname') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userGivenName" class="input-group-text">Given Name</label>
                                <input id="userGivenName" name="stdgivenname" type="text" class="form-control"
                                    placeholder="Enter Your Given Name" value="{{ old('stdgivenname') }}" required>
                                    @if ($errors->has('stdgivenname'))
                                    <div class="alert alert-danger">{{ $errors->first('stdgivenname') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userHomeAddress" class="input-group-text">Home Address</label>
                                <input id="userHomeAddress" name="stdhomeaddress" type="text" class="form-control"
                                    placeholder="Enter Your Home Address" value="{{ old('stdhomeaddress') }}" required>
                                    @if ($errors->has('stdhomeaddress'))
                                    <div class="alert alert-danger">{{ $errors->first('stdhomeaddress') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userSuburb" class="input-group-text">Suburb</label>
                                <input id="userSuburb" name="stdsuburb" value="{{ old('stdsuburb') }}" type="text" class="form-control"
                                    placeholder="Enter Your Suburb" required>
                                    @if ($errors->has('stdsuburb'))
                                    <div class="alert alert-danger">{{ $errors->first('stdsuburb') }}</div>
                                    @endif
                            </div>
                        </div>

                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userState" class="input-group-text">State & Postcode</label>
                                <input id="userState" name="stdpostcode" value="{{ old('stdpostcode') }}" type="number" class="form-control"
                                    placeholder="Enter Your State & Postcode" required>
                                    @if ($errors->has('stdpostcode'))
                                    <div class="alert alert-danger">{{ $errors->first('stdpostcode') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="telNum" class="input-group-text">Telephone Number <span
                                        style="display: block;" class="secondarySpan">(Including
                                        Country & Area Code) </span></label>
                                <input id="telNum" name="stdtelnum" value="{{ old('stdtelnum') }}" type="number" class="form-control"
                                    placeholder="Enter Your Telephone Number" required>
                                    @if ($errors->has('stdtelnum'))
                                    <div class="alert alert-danger">{{ $errors->first('stdtelnum') }}</div>
                                    @endif
                            </div>
                        </div>

                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userEmail" class="input-group-text">Email Address</label>
                                <input id="userEmail" name="stdemail" value="{{ old('stdemail') }}" type="text" class="form-control"
                                    placeholder="Enter Your Email Address" required>
                                    @if ($errors->has('stdemail'))
                                    <div class="alert alert-danger">{{ $errors->first('stdemail') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userDob" class="input-group-text">Date of Birth</label>
                                <input id="userDob" name="stddob" value="{{ old('stddob') }}"  type="text" class="form-control"
                                    placeholder="Enter Your Date of Birth">
                                    @if ($errors->has('stddob'))
                                    <div class="alert alert-danger">{{ $errors->first('stddob') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 ml-0">
                            <div class="input-group">
                                <span class="input-group-text ml-0">Sex</span>
                                <div class="d-flex align-items-center genderlabelDiv">
                                    <input id="maleGender" name="sex" value="Male"  type="radio">
                                    <label class="genderLabel" for="maleGender">Male</label>
                                </div>
                                <div class="d-flex align-items-center ml-1 genderlabelDiv">
                                    <input id="femaleGender" name="sex" value="Female"  type="radio">
                                    <label class="genderLabel" for="femaleGender">Female</label>
                                </div>
                                <div class="d-flex align-items-center ml-1 genderlabelDiv">
                                    <input id="othersGender" name="sex" value="Others"  type="radio">
                                    <label class="genderLabel" for="othersGender">Others</label>
                                </div>
                                @if ($errors->has('sex'))
                                    <div class="alert alert-danger">{{ $errors->first('sex') }}</div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-1 mt-4 emergencyContactDetails gap">
                    <div class="mainFormHeadings emergencyHeading">
                        <h3>Emergency Contact Details</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="fullName" class="input-group-text">Full Name</label>
                                <input id="fullName" name="fullName" value="{{ old('fullName') }}"  type="text" class="form-control "
                                    placeholder="Enter Your Full Name" required>
                                    @if ($errors->has('fullName'))
                                    <div class="alert alert-danger">{{ $errors->first('fullName') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="relationship" class="input-group-text">Relationship</label>
                                <input id="relationship" name="relationship" value="{{ old('relationship') }}" type="text" class="form-control "
                                    placeholder="Relationship">
                                    @if ($errors->has('relationship'))
                                    <div class="alert alert-danger">{{ $errors->first('relationship') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="contactNum" class="input-group-text">Contact Number</label>
                                <input id="contactNum" name="contactNum"  value="{{ old('contactNum') }}" type="number" class="form-control "
                                    placeholder="Contact Number">
                                    @if ($errors->has('contactNum'))
                                    <div class="alert alert-danger">{{ $errors->first('contactNum') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="mobile" class="input-group-text">Mobile</label>
                                <input id="mobile" name="mobile"  value="{{ old('mobile') }}" type="number" class="form-control "
                                    placeholder="Mobile" required>
                                    @if ($errors->has('mobile'))
                                    <div class="alert alert-danger">{{ $errors->first('mobile') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="d-flex mt-4" style="align-items: center;">


                            <span class="secondarySpan ">In the event of an emergency do you give ANE College
                                permission
                                to
                                organise emergency transport and treatment and

                                agree to pay all costs related to the emergency?


                            </span>

                            <div class="d-flex secondaryspanChoose">
                                <div class="d-flex align-items-center">
                                    <input id="yes" name="emergency_pay"  value="Yes" type="radio">
                                    <label class="genderLabel" for="yes"> Yes </label>
                                </div>

                                <div class="d-flex align-items-center">
                                    <input id="noemer" name="emergency_pay" value="No" type="radio">
                                    <label class="genderLabel" for="noemer"> No</label>
                                </div>
                                @if ($errors->has('emergency_pay'))
                                    <div class="alert alert-danger">{{ $errors->first('emergency_pay') }}</div>
                                    @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="eduAgent gap">
                    <div class=" mainFormHeadings">
                        <h3>Education Agent / Representative</h3>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-4 ml-0">
                            <div class="input-group">
                                <span class="input-group-text ml-0">Are you applying through agent?</span>
                                <div class="agentChoose d-flex">
                                    <div class="d-flex align-items-center" style="margin-right: 10px;">
                                        <input id="yesagent" name="apply_through_agent" value="Yes" type="radio">
                                        <label class="genderLabel" for="yesagent"> Yes </label>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <input id="noagent" name="apply_through_agent" value="No" type="radio">
                                        <label class="genderLabel" for="noagent"> No </label>
                                    </div>

                                    @if ($errors->has('apply_through_agent'))
                                    <div class="alert alert-danger">{{ $errors->first('apply_through_agent') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="orgName" class="input-group-text">Organization Name</label>
                                <input id="orgName" name="orgName" value="{{ old('orgName') }}" type="text" class="form-control"
                                    placeholder="Enter organization name">
                                    @if ($errors->has('orgName'))
                                    <div class="alert alert-danger">{{ $errors->first('orgName') }}</div>
                                    @endif
                            </div>

                        </div>
                        <div class="col-md-6 mt-4 ml-0">
                            <div class="input-group">
                                <label for="agentCnum" class="input-group-text">Contact Number</label>
                                <input id="agentCnum" name="agentCnum" value="{{ old('agentCnum') }}" type="number" class="form-control"
                                    placeholder="Enter Contact Number">
                                    @if ($errors->has('agentCnum'))
                                    <div class="alert alert-danger">{{ $errors->first('agentCnum') }}</div>
                                    @endif
                            </div>
                        </div>


                    </div>
                </div>
                <div class="eduQualifications mt-4 gap">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mainFormHeadings">
                                <h3>Education</h3>
                            </div>
                            <div class="educationContent">
                                <p class="educationDesc mt-4">What is your highest COMPLETED school level? (ONE box
                                    only.)
                                </p>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <label class="genderLabel nopadding" for="year11"> Year 12 or equivalent
                                        </label>
                                        <input id="year11" name="higher_edu"  value="Year_12" type="radio">
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="genderLabel nopadding" for="year11"> Year 11 or equivalent
                                        </label>
                                        <input id="year11" name="higher_edu" value="Year_11" type="radio">
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="genderLabel nopadding" for="year11"> Year 10 or equivalent
                                        </label>
                                        <input id="year11" name="higher_edu" value="Year_10" type="radio">
                                    </div>
                                    @if ($errors->has('higher_edu'))
                                    <div class="alert alert-danger">{{ $errors->first('higher_edu') }}</div>
                                    @endif
                                    <div class="input-group mt-4">
                                        <label for="completionYear" class="input-group-text">What YEAR did you 
                                            complete <br> the relevant
                                            qualification?</label>
                                        <input id="completionYear" name="yearCompletion"  value="{{ old('yearCompletion') }}" type="number"
                                            class="form-control" placeholder="Completion year" style="height: 64px;">
                                            @if ($errors->has('yearCompletion'))
                                    <div class="alert alert-danger">{{ $errors->first('yearCompletion') }}</div>
                                    @endif
                                    </div>
                                    <div class="input-group mt-4">
                                        <span style="text-align: left;" class="input-group-text ml-0">Are you still <br>
                                            attending
                                            secondary school?</span>
                                        <!-- <input name="yearCompletion" type="number" class="form-control"
                                            placeholder="Completion year"> -->
                                        <div class="secondaryChoose d-flex">
                                            <div class="d-flex align-items-center" style="margin-right:10px">
                                                <input id="yesSecondary" name="secondary" value="Yes"  type="radio">
                                                <label class="genderLabel " for="yesSecondary"> Yes </label>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input id="noSecondary" name="secondary"  value="No" type="radio">
                                                <label class="genderLabel" for="noSecondary"> No </label>
                                            </div>
                                            @if ($errors->has('secondary'))
                                    <div class="alert alert-danger">{{ $errors->first('secondary') }}</div>
                                    @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mainFormHeadings">
                                <h3>Previous Qualification</h3>
                            </div>
                            <div class="qualificationContent">
                                <p class="mt-4 educationDesc">Have you SUCCESSFULLY completed any of the following
                                    qualifications?</p>
                                <p class="mt-1 educationDesc">If YES, then tick ANY applicable boxes</p>
                                <div class="d-flex align-items-center">
                                    <label class="genderLabel nopadding" for="yesBach">Bachelor or Higher Degree
                                    </label>
                                    <input id="yesBach" name="prevquali"  value="Bachelor_or_Higher" type="radio" required>
                                    
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="genderLabel nopadding" for="yesDip">Advanced Diploma or Associate
                                        Degree
                                    </label>
                                    <input id="yesDip" name="prevquali"  value="Advanced_Diploma" type="radio" required>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="genderLabel nopadding" for="yesCerti">Certificate III </label>
                                    <input id="yesCerti" name="prevquali"  value="Certificate_III" type="radio" required>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="genderLabel nopadding" for="yesOthers">Certificates other than the
                                        above
                                    </label>
                                    <input id="yesOthers" name="prevquali"  value="Certificates_other" type="radio" required>
                                </div>
                                @if ($errors->has('prevquali'))
                                    <div class="alert alert-danger">{{ $errors->first('prevquali') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mainFormHeadings">
                                <h3>Employment</h3>
                            </div>
                            <div class="employmentContent">
                                <p class="mt-4 educationDesc">Of the following categories, which BEST describes your
                                    current employment status? (ONE box only.)</p>
                                <div class="d-flex align-items-center">
                                    <label class="genderLabel nopadding" for="yesfull">Full-time employee
                                    </label>
                                    <input id="yesfull" name="employment"  value="Full-time"  type="radio">
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="genderLabel nopadding" for="yespart">Part-time employee
                                    </label>
                                    <input id="yespart" name="employment" value="Part-time" type="radio">
                                </div>
                                <!-- Self-employed - not employing others -->
                                <div class="d-flex align-items-center">
                                    <label class="genderLabel nopadding" for="yesSelf">Self-employed - not employing
                                        others
                                    </label>
                                    <input id="yesSelf" name="employment" value="Self-employed" type="radio">
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="genderLabel nopadding" for="unemployed">Unemployed - seeking part-time
                                        work
                                    </label>
                                    <input id="unemployed" name="employment" value="Unemployed" type="radio">
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="genderLabel nopadding" for="notseeking">Not employed - not seeking
                                        employment
                                    </label>
                                    <input id="notseeking" name="employment" value="Not-employed" type="radio">
                                </div>
                                @if ($errors->has('employment'))
                                    <div class="alert alert-danger">{{ $errors->first('employment') }}</div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- language and cultural diversity -->
                <div class="languageNculture mt-4 gap">
                    <div class="personalDetailsHead mainFormHeadings">
                        <h3>Language and Cultural Diversity</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mt-4">
                                <label for="langbirthCoun" class="input-group-text">Country of Birth</label>
                                <input id="langbirthCoun" name="langbirthCoun"  value="{{ old('langbirthCoun') }}" type="text" class="form-control"
                                    placeholder="Enter Your Country of Birth">
                                    @if ($errors->has('langbirthCoun'))
                                    <div class="alert alert-danger">{{ $errors->first('langbirthCoun') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mt-4">
                                <span class="input-group-text  ml-0">Australian Citizenship</span>
                                <div class="secondaryChoose d-flex">
                                    <div class="d-flex align-items-center">
                                        <input id="yesAustralian" name="ausCtzen" value="Yes"  type="radio">
                                        <label class="genderLabel " for="yesAustralian"> Yes </label>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <input id="noAustralian" name="ausCtzen"  value="No" type="radio">
                                        <label class="genderLabel" for="noAustralian"> No </label>
                                    </div>
                                    @if ($errors->has('ausCtzen'))
                                    <div class="alert alert-danger">{{ $errors->first('ausCtzen') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="input-group mt-4 ">
                                <span class="input-group-text torres-strait flex-column ml-0 mr-0" style="margin-left: 0px;">Are you of Australian Aboriginal or
                                    Torres Strait
                                    Islander origin?
                                    <br>
                                    <span style="font: size 12px; color: #666666; margin-top: 3px;"
                                        class="spanThird">(For persons of both Aboriginal and Torres Strait
                                        Islander origin, mark both ‘Yes’ boxes.</span></span>
                                <div class="secondaryChoose d-flex">
                                    <div class="d-flex align-items-center">
                                        <input id="yesAborginal" name="ausAbor"  value="Yes"  type="radio">
                                        <label class="genderLabel " for="yesAborginal"> Yes </label>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <input id="noAborginal" name="ausAbor"  value="No" type="radio">
                                        <label class="genderLabel" for="noAborginal"> No </label>
                                    </div>
                                    @if ($errors->has('ausAbor'))
                                    <div class="alert alert-danger">{{ $errors->first('ausAbor') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mt-4">
                                <span class="input-group-text flex-column  ml-0" style="margin-right: 10px;">Aboriginal</span>
                                <div class="secondaryChoose d-flex">
                                    <div class="d-flex align-items-center">
                                        <input id="yesonlyAbor" name="onlyAbor"  value="Yes"  type="radio">
                                        <label class="genderLabel " for="yesonlyAbor"> Yes </label>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <input id="noonlyAbor" name="onlyAbor" value="No" type="radio">
                                        <label class="genderLabel" for="noonlyAbor"> No </label>
                                    </div>
                                    @if ($errors->has('onlyAbor'))
                                    <div class="alert alert-danger">{{ $errors->first('onlyAbor') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mt-4">
                                <span class="input-group-text flex-column  ml-0" style="margin-right: 10px;">Torres Strait Islander</span>
                                <div class="secondaryChoose d-flex">
                                    <div class="d-flex align-items-center">
                                        <input id="yesonlyTorres" name="onlyTorres" value="Yes" type="radio">
                                        <label class="genderLabel " for="yesonlyTorres"> Yes </label>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <input id="noonlyTorres" name="onlyTorres" value="No" type="radio">
                                        <label class="genderLabel" for="noonlyTorres"> No </label>
                                    </div>
                                    @if ($errors->has('onlyTorres'))
                                    <div class="alert alert-danger">{{ $errors->first('onlyTorres') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mt-4">
                                <span class="input-group-text flex-column  ml-0 mr-0">How well do you speak English?</span>
                                <div class="secondaryChoose englishChooseBox d-flex">
                                    <div class="d-flex align-items-center">
                                        <input id="verywilleng" name="englanguage" value="Very_Well" type="radio">
                                        <label class="genderLabel " for="verywilleng"> Very Well </label>
                                        
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <input id="welleng" name="englanguage"  value="Well" type="radio">
                                        <label class="genderLabel" for="welleng"> Well </label>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input id="notwelleng" name="englanguage" value="Not_Well"  type="radio">
                                        <label class="genderLabel" for="notwelleng"> Not Well </label>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input id="notatalleng" name="englanguage"  value="Not_at_all" type="radio">
                                        <label class="genderLabel" for="notatalleng"> Not at all </label>
                                    </div>
                                    @if ($errors->has('englanguage'))
                                    <div class="alert alert-danger">{{ $errors->first('englanguage') }}</div>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6  ml-0">
                            <div class="input-group mt-4">
                                <span class="input-group-text flex-column  ml-0">Main language spoken at home if not
                                    English</span>
                                <input name="otherlanguages" value="{{ old('otherlanguages') }}"  type="text" class="form-control"
                                    placeholder="Main language">
                                    @if ($errors->has('otherlanguages'))
                                    <div class="alert alert-danger">{{ $errors->first('otherlanguages') }}</div>
                                    @endif
                            </div>
                        </div>
                    </div>

                </div>


                <!-- language and cultural diversity -->
                <div class="languageNculture mt-4 gap">
                    <div class="personalDetailsHead mainFormHeadings">
                        <h3>Program History</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="togetjob"> To get a Job </label>
                                <input id="togetjob" name="proghistory" value="togetjob" type="radio">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="togetbetter"> To get a better job or promotion
                                </label>
                                <input id="togetbetter" name="proghistory"  value="togetbetter" type="radio">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="toanothercourse"> To get into another course of
                                    study
                                </label>
                                <input id="toanothercourse" name="proghistory" value="toanothercourse" type="radio">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="todiffcareer"> To try for a different career
                                </label>
                                <input id="todiffcareer" name="proghistory"  value="todiffcareer" type="radio">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="jobrequirement"> It was a requirement of my job
                                </label>
                                <input id="jobrequirement" name="proghistory" value="jobrequirement" type="radio">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="selfInterest"> For personal interest or
                                    self-development
                                </label>
                                <input id="selfInterest" name="proghistory" value="selfInterest" type="radio">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="startBusiness"> To start my own business
                                </label>
                                <input id="startBusiness" name="proghistory" value="startBusiness" type="radio">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="extraskills">I wanted extra skills for my job
                                </label>
                                <input id="extraskills" name="proghistory" value="extraskills" type="radio">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="otherreasons"> Other reasons
                                </label>
                                <input id="otherreasons" name="proghistory" value="otherreasons" type="radio">
                            </div>
                        </div>
                        <div class="col-md-4 ml-0 mr-0">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="todevBusiness"> To develop my existing business
                                </label>
                                <input id="todevBusiness" name="proghistory" value="todevBusiness" type="radio">
                            </div>
                        </div>
                        @if ($errors->has('proghistory'))
                        <div class="alert alert-danger">{{ $errors->first('proghistory') }}</div>
                        @endif
                        <div style="width: 100%;" class="col-md-6">
                            <div class="input-group mt-4">
                                <span class="input-group-text flex-column  ml-0 mr-0">Do you wish to apply for Recognition of Prior
                                    Learning?</span>
                                <div class="secondaryChoose priorChoose d-flex">
                                    <div class="d-flex align-items-center">
                                        <input id="yesprior" name="priorlearn" value="Yes" type="radio">
                                        <label class="genderLabel " for="yesprior"> Yes </label>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <input id="noprior" name="priorlearn"  value="No" type="radio">
                                        <label class="genderLabel" for="noprior"> No </label>
                                    </div>

                                </div>
                                @if ($errors->has('priorlearn'))
                                <div class="alert alert-danger">{{ $errors->first('priorlearn') }}</div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>



                <!-- Disability -->
                <div class="languageNculture mt-4 gap">
                    <div class="personalDetailsHead mainFormHeadings">
                        <h3>Disability</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group mt-4">
                                <span class="input-group-text flex-column  ml-0 mr-0">Do you consider yourself to have a
                                    disability, impairment or long-term condition?</span>
                                <div class="secondaryChoose priorChoose d-flex">
                                    <div class="d-flex align-items-center">
                                        <input id="yeslongtermDis" name="is_disable"  value="Yes" type="radio">
                                        <label class="genderLabel " for="yeslongtermDis"> Yes </label>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <input id="nolongtermDis" name="is_disable" value="No"  type="radio">
                                        <label class="genderLabel" for="nolongtermDis"> No </label>
                                    </div>

                                </div>
                                @if ($errors->has('is_disable'))
                                <div class="alert alert-danger">{{ $errors->first('is_disable') }}</div>
                                @endif
                            </div>
                        </div>
                        <p class="secondarySpan mt-2">If YES, then please indicate the areas of disability,
                            impairment or long-term condition (You may indicate more than one
                            area.)</p>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="hearDeaf"> Hearing/Deaf
                                </label>
                                <input id="hearDeaf" name="disable[]"  value="hearing"  type="checkbox">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="learning"> Learning
                                </label>
                                <input id="learning" name="disable[]" value="learning"  type="checkbox">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="vision"> Vision
                                </label>
                                <input id="vision" name="disable[]" value="vision"  type="checkbox">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="physical"> Physical
                                </label>
                                <input id="physical" name="disable[]" value="physical"  type="checkbox">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="mentalIllness"> Mental Illness
                                </label>
                                <input id="mentalIllness" name="disable[]" value="mentalIllness" type="checkbox">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="medicalCond"> Medical Condition
                                </label>
                                <input id="medicalCond" name="disable[]" value="medicalCond" type="checkbox">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="intellectual"> Intellectual
                                </label>
                                <input id="intellectual" name="disable[]" value="intellectual" type="checkbox">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="brainImpair"> Acquired Brain Impairment
                                </label>
                                <input id="brainImpair" name="disable[]" value="brainImpair" type="checkbox">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center mt-3">
                                <label class="genderLabel jobLabel" for="otherDis"> Other
                                </label>
                                <input id="otherDis" name="disable[]" value="otherDis" type="checkbox">
                            </div>
                        </div>
                        @if ($errors->has('disable[]'))
                        <div class="alert alert-danger">{{ $errors->first('disable[]') }}</div>
                        @endif
                    </div>
                </div>



                <!-- English Proficieny test -->
                <div class="englishTest mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>English Proficieny Test</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-4">
                            <p><b>Test:</b></p>

                            <div class="input-group mt-4">
                                <label for="ieltsscr" class="input-group-text flex-column">IELTS</label>
                            </div>
                            <div class="input-group mt-4">
                                <label for="ptescr" class="input-group-text flex-column">PTE</label>
                            </div>
                            <div class="input-group mt-4">
                                <label for="toeflscr" class="input-group-text flex-column">TOEFL</label>
                            </div>
                            <div class="input-group mt-4">
                                <label for="otherscr" class="input-group-text flex-column">If Other (Please
                                    Specify)</label>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <p><b>Score:</b></p>
                            <input id="ieltsscr" name="ieltsscr"  value="{{ old('ieltsscr') }}" type="text" class="form-control  allow_decimal mt-4"
                                placeholder="Enter your IELTS score">
                                @if ($errors->has('ieltsscr'))
                                <div class="alert alert-danger">{{ $errors->first('ieltsscr') }}</div>
                                @endif
                            <input id="ptescr" name="ptescr"  value="{{ old('ptescr') }}" type="text" class="form-control allow_decimal mt-4" placeholder="Enter your PTE score">
                            @if ($errors->has('ptescr'))
                                <div class="alert alert-danger">{{ $errors->first('ptescr') }}</div>
                                @endif
                            <input id="toeflscr" name="toeflscr" value="{{ old('toeflscr') }}" type="text" class="form-control allow_decimal mt-4"
                                placeholder="Enter your TOEFL score">
                                @if ($errors->has('toeflscr'))
                                <div class="alert alert-danger">{{ $errors->first('toeflscr') }}</div>
                                @endif
                            <input id="otherscr" name="otherscr" value="{{ old('otherscr') }}" type="text" class="form-control allow_decimal mt-4"
                                placeholder="Enter your other test score">
                                @if ($errors->has('otherscr'))
                                <div class="alert alert-danger">{{ $errors->first('otherscr') }}</div>
                                @endif
                        </div>
                        <div class="col-md-4 mt-4">
                            <p><b>Year:</b></p>
                            <input type="number" name="ieltsyear"  value="{{ old('ieltsyear') }}" class="form-control mt-4" placeholder="Enter Year">
                            @if ($errors->has('ieltsyear'))
                            <div class="alert alert-danger">{{ $errors->first('ieltsyear') }}</div>
                            @endif
                            <input type="number" name="pteyear" value="{{ old('pteyear') }}" class="form-control mt-4" placeholder="Enter Year">
                            @if ($errors->has('pteyear'))
                            <div class="alert alert-danger">{{ $errors->first('pteyear') }}</div>
                            @endif
                            <input type="number" name="tofelyear"  value="{{ old('tofelyear') }}"  class="form-control mt-4" placeholder="Enter Year">
                            @if ($errors->has('tofelyear'))
                            <div class="alert alert-danger">{{ $errors->first('tofelyear') }}</div>
                            @endif
                            <input type="number" name="otheryear"  value="{{ old('otheryear') }}"  class="form-control mt-4" placeholder="Enter Year">
                            @if ($errors->has('otheryear'))
                            <div class="alert alert-danger">{{ $errors->first('otheryear') }}</div>
                            @endif
                        </div>
                    </div>
                </div>



                <!-- Proposed Study -->
                <div class="proposedStudy mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>Proposed Study</h3>
                    </div>
                    <div class="mt-4">
                        <div class="table-responsive">


                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Tick</th>
                                        <th scope="col">Course Code</th>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Tuition Fee</th>
                                        <th scope="col">Enrollment Fee</th>
                                        <th scope="col">Materials Fee</th>
                                        <th scope="col">Time</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="course[]"  value="CHC43115"></td>
                                        <td>CHC43115</td>
                                        <td>Certificate IV in Disability</td>
                                        <td>$11400</td>
                                        <td>$250.00</td>
                                        <td>$850.00</td>
                                        <td>52 weeks</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="course[]"  value="CHC50113" ></td>
                                        <td>CHC50113</td>
                                        <td>Diploma of Early Childhood Education and Care</td>
                                        <td>$20900</td>
                                        <td>$250.00</td>
                                        <td>$1500.00</td>
                                        <td>104 weeks</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="course[]" value="CHC52015"></td>
                                        <td>CHC52015</td>
                                        <td>Diploma of Community Services</td>
                                        <td>$19200</td>
                                        <td>$250.00</td>
                                        <td>$1000.00</td>
                                        <td>78 weeks</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="course[]" value="SIT40516"></td>
                                        <td>SIT40516</td>
                                        <td>Certificate IV in Commercial Cookery</td>
                                        <td>$15950</td>
                                        <td>$250.00</td>
                                        <td>$1500.00</td>
                                        <td>78 weeks</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="course[]"  value="SIT50416"></td>
                                        <td>SIT50416</td>
                                        <td>Diploma of Hospitality Management</td>
                                        <td>$11300</td>
                                        <td>$250.00</td>
                                        <td>$850.00</td>
                                        <td>78 weeks</td>
                                    </tr>
                                </tbody>
                            </table>
                            @if ($errors->has('course[]'))
                            <div class="alert alert-danger">{{ $errors->first('course[]') }}</div>
                            @endif
                        </div>
                    </div>
                </div>



                <!-- Proposed Study -->
                <div class="proposedStudy mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>Preferred intake date</h3>
                    </div>
                    <div class="preferredMonth d-flex justify-content-between mt-4">
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]"  value="10/01/2022"  id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>10 <sup>th</sup> Jan  2022</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]"  value="04/04/2022" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>4 <sup>th</sup> April  2022</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="27/06/2022" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>27 <sup>th</sup> June  2022</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="19/09/2022" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>19 <sup>th</sup> Sept  2022</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="09/01/2023" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>9 <sup>th</sup> Jan  2023</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="03/04/2023" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>3 <sup>rd</sup> April  2023</p>
                            </label>
                        </div>
                    </div>
                    <div class="preferredMonth d-flex justify-content-between mt-4">
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="26/06/2023" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>26 <sup>th</sup> June  2023</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="18/09/2023" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>18 <sup>th</sup> Sept  2023</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="08/01/2024" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>8 <sup>th</sup> Jan  2024</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="01/04/2024" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>1 <sup>st</sup> April  2024</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="24/06/2024" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>24 <sup>th</sup> June  2024</p>
                            </label>
                        </div>
                        <div class="form-check specificMonth">
                            <input class="form-check-input" type="checkbox" name="intake[]" value="16/09/2024" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p>16 <sup>th</sup> Sept  2024</p>
                            </label>
                        </div>
                    </div>
                    <p class="secondarySpan mt-3">
                        It may not be always possible to commence at your preferred selection, but all consideration
                        will be provided for that
                        selection
                    </p>
                    @if ($errors->has('intake[]'))
                    <div class="alert alert-danger">{{ $errors->first('intake[]') }}</div>
                    @endif
                </div>



                <!-- Photography Consent -->
                <div class="proposedStudy mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>Photography Consent</h3>
                    </div>
                    <div class="row">
                        <div class="input-group mt-4">
                            <span class="input-group-text flex-column ml-0">I consent to having my photograph used in
                                documents for advertising for this organisation.</span>
                            <div class="secondaryChoose d-flex">
                                <div class="d-flex align-items-center">
                                    <input id="yesConcent" name="photoConsent" value="Yes"  type="radio">
                                    <label class="genderLabel " for="yesConcent"> Yes </label>
                                </div>

                                <div class="d-flex align-items-center">
                                    <input id="noConcent" name="photoConsent" value="No" type="radio">
                                    <label class="genderLabel" for="noConcent"> No </label>
                                </div>
                            </div>
                            @if ($errors->has('photoConsent'))
                            <div class="alert alert-danger">{{ $errors->first('photoConsent') }}</div>
                            @endif
                        </div>

                    </div>

                </div>




                <!-- Photography Consent -->
                <div class="feesCollection mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>Fees Collection</h3>
                    </div>
                    <div class="row mt-4">
                        <p class="mb-1">ANE College collects student fees in advance and therefore it will comply with
                            the following
                            options for initial and
                            continuing fee collection and registration:</p>
                        <ul>
                            <li class="mb-1">Students, or the person responsible for paying the tuition fees, can now
                                choose to pay
                                more than 50 per cent of their
                                tuition fees before they start their course.</li>
                            <li>ANE College cannot require students to pay more than 50 per cent of their
                                tuition fees
                                before they start the course. A
                                further 50% fee is due at the

                                commencement of the second semester.</li>
                        </ul>
                        <p class="mt-1">Any payment plan for any outstanding fees will be negotiated and will be
                            detailed on a
                            separate document and will only
                            apply to the second payment.</p>

                    </div>

                </div>


                <!-- Other potential fees -->
                <div class="feesCollection mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>Other Potential Fees</h3>
                    </div>
                    <div class="table-responsive">


                        <table class="table table-striped">
                            <tr>
                                <td>LEADR External Complaint Resolution Fee</td>
                                <td>No Charge</td>
                                <td>Re sit assessment due to Academic Misconduct</td>
                                <td>$400.00</td>
                            </tr>


                            <tr>
                                <td>Administration/Enrolment Fee (Non-refundable)</td>
                                <td>$250.00</td>
                                <td>Replacement Certificate</td>
                                <td>$100.00</td>
                            </tr>
                            <tr>
                                <td>Re-enrollment Fee</td>
                                <td>$500.00</td>
                                <td>Use of Photocopier</td>
                                <td>$0.10</td>
                            </tr>
                            <tr>
                                <td>1st Assessment</td>
                                <td>No Fee</td>
                                <td>Welfare Service – ANE College Referral Service</td>
                                <td>No Fee</td>
                            </tr>
                            <tr>
                                <td>2nd Assessment – same unit</td>
                                <td>No Fee</td>
                                <td>Welfare Service – ANE College Representative</td>
                                <td>No Fee</td>
                            </tr>
                            <tr>
                                <td>3rd and subsequent Reassessment – Maximum 4 (same unit)</td>
                                <td>$250.00</td>
                                <td>Welfare Service - External Professional Fees</td>
                                <td>$60 +</td>
                            </tr>
                        </table>
                    </div>

                    <div class="feesNote">
                        <p><b>Note: </b>There is a possibility for potential fees to change during a student’s course
                            and applicable refund policies.</p>
                    </div>
                </div>

                <!-- Other potential fees -->
                <div class="feesCollection mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>Refund Policy – Refer to the Student Handbook or Website documents for a
                            comprehensive explanation</h3>
                    </div>

                    <div class="mt-4">
                        <p><b>ANE College Refunds Policy, Procedures and Actions: Student Gui</b></p>
                        <p><b>Schedule A: </b> Visa Issues: Visa Application Rejection or Processing Delay; Visa
                            Cancellation or Breach; Change of Visa Status</p>

                        <div class="scheduleAcontent   mt-4">
                            <div class="borderbottomDiv d-flex justify-content-between row makegreyBg">
                                <div class="scheduleASituation col-md-6">
                                    <p><b>Situation</b></p>
                                    <p>Student’s visa application is rejected. (We will need to sight a verified letter
                                        from

                                        the Australian Embassy/Consulate rejecting the application).</p>
                                </div>
                                <div class="scheduleARefund col-md-6">
                                    <p><b>Refund</b></p>
                                    <ul>
                                        <li>Student is subjected to receive <b>Full Refund</b> of : </li>
                                        <ol>

                                            <li>Initial Payment Fee.</li>
                                            <li>Enrollment Fee.</li>
                                            <li>Material Fee.</li>
                                        </ol>
                                        <li>Student is required to pay $500 for administrative fee.</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="borderbottomDiv d-flex justify-content-between row">
                                <div class="col-md-6">
                                    <p>Student withdraws their visa application on request from ANE college.</p>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Student is subjected to receive <b>Full Refund</b> of : </li>
                                        <ol>

                                            <li>Initial Payment Fee.</li>
                                            <li>Enrollment Fee.</li>
                                            <li>Material Fee.</li>
                                        </ol>
                                        <li>Student is required to pay $500 for administrative fee.</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="borderbottomDiv d-flex justify-content-between row makegreyBg">
                                <div class="col-md-6">
                                    <p>Student cannot start their course on time because the Visa Application

                                        processing is delayed by circumstances beyond the student’s control.</p>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Student is subjected to No Refund. </li>

                                        <li>If Application for Deferral of Enrolment is submitted, ANE college will
                                            defer enrolment and provide new documentation
                                            for the next Commencement Date.</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="borderbottomDiv d-flex justify-content-between row">
                                <div class="col-md-6">
                                    <p>Student’s visa is cancelled because they fail to comply with enrolment conditions

                                        or breach their visa conditions.</p>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Student is subjected to No Refund of Course Tuition Fees, nor the Materials
                                            Fee for the course withdrawn from and any
                                            subsequent Package Courses.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- ScheduleB content -->
                        <div class=" mt-4">
                            <div class="mainFormHeadings">
                                <p><b>
                                  Schedule B:</b> Provider Default: ANE College Fails to Start the
                                    Agreed Course or
                                    is
                                    Unable to Deliver it in Full</p>
                            </div>

                            <div class="scheduleBcontent">

                                <div class="borderbottomDiv d-flex justify-content-between row makegreyBg mt-3">
                                    <div class="scheduleBSituation col-md-6">
                                        <p><b>Situation</b></p>
                                        <p>ANE college cancels a course and does not offer an equivalent alternative
                                            course
                                            at no extra cost.</p>
                                    </div>
                                    <div class="scheduleBRefund col-md-6">
                                        <p><b>Refund</b></p>
                                        <ul>
                                            <li>Student is subjected to receive <b>Full Refund</b> of : </li>
                                            <ol>

                                                <li>Initial Payment Fee.</li>
                                                <li>Enrollment Fee.</li>
                                                <li>Material Fee.</li>
                                            </ol>
                                            <li>Student is required to pay $500 for administrative fee.</li>
                                        </ul>

                                    </div>
                                </div>


                                <div class="borderbottomDiv d-flex justify-content-between row">
                                    <div class=" col-md-6">
                                        <ul>
                                            <li>ANE college cancels the Agreed Course but offers an alternative

                                                equivalent course at no extra cost to the student.</li>
                                            <li>Student chooses to Accept the offer of the alternative course.</li>
                                        </ul>
                                    </div>
                                    <div class=" col-md-6">
                                        <ul>
                                            <li>Student is subjected to No Refund: Student is issued LOO for the
                                                alternative
                                                course. The pre-paid Tuition Fees will be
                                                fully refunded, and the student will be invoiced for the alternative
                                                course
                                                fees, or on the student’s request, the
                                                pre-paid fees will be transferred from discontinued course to
                                                alternative
                                                course.</li>
                                            <li>Student is issued CoE for the equivalent alternative course.</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="borderbottomDiv d-flex justify-content-between row makegreyBg">
                                    <div class=" col-md-6">
                                        <ul>
                                            <li>ANE college cancels the Agreed Course but offers an alternative

                                                equivalent course at no extra cost to the student.</li>
                                            <li>Student chooses to Accept the offer of the alternative course.</li>
                                        </ul>
                                    </div>
                                    <div class=" col-md-6">
                                        <ul>
                                            <li>Student is subjected to No Refund of Unspent Tuition Fees for current
                                                course
                                                and any subsequent package course for which
                                                fees have been pre- paid, subject to appeal.</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- ScheduleC content -->
                        <div class=" mt-4">
                            <div class="mainFormHeadings">
                                <p><b>Schedule C:</b> Student Default: Course Withdrawal/Release Package
                                    Program Courses</p>
                            </div>

                            <div class="scheduleCcontent">

                                <div class="borderbottomDiv d-flex justify-content-between row makegreyBg mt-3">
                                    <div class="scheduleBSituation col-md-6 ">
                                        <p><b>Situation</b></p>

                                    </div>
                                    <div class="scheduleBRefund col-md-6">
                                        <p><b>Situation</b></p>


                                    </div>
                                </div>


                                <div class="borderbottomDiv d-flex justify-content-between row">

                                    <div class=" col-md-6">
                                        <p>Cancellation/Withdrawal before or after the Commencement Date of a course

                                            which is part of a package program.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Student is subjected to <b>No Refund:</b> </li>
                                        </ul>
                                        <p>Paid Course Tuition and Non-Tuition Fees for the course withdrawn from and
                                            any
                                            subsequent package courses.</p>
                                    </div>
                                </div>

                                <!--  -->
                                <div class="borderbottomDiv d-flex justify-content-between row makegreyBg">

                                    <div class=" col-md-6">
                                        <p>Cancellation of CoE and Reporting for breach of student visa conditions,

                                            conditions of enrolment and/or National Standards (Unsatisfactory
                                            Attendance,

                                            Unsatisfactory Academic Progress, Non-payment of Fees, etc.)</p>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Student is subjected to No Refund of Unspent Tuition Fees and Materials
                                                Fees
                                                for their current course and any subsequent
                                                package course for which Tuition Fees have been pre-paid</li>
                                        </ul>

                                    </div>
                                </div>

                                <!--  -->
                                <div class="borderbottomDiv d-flex justify-content-between row">

                                    <div class=" col-md-6">
                                        <p>Cancellation/Withdrawal due to demonstrated Compassionate and/or Compelling
                                            Circumstances and approved by ANE college.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Student is subjected to receive <b>Full Refund</b> of: Tuition Fees for
                                                the
                                                cancelled course and any subsequent package courses
                                                plus associated Non-Tuition Fees.</li>
                                            <li>Student is required to pay $500 for administrative fee.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ScheduleD content -->
                        <div class=" mt-4">
                            <div class="mainFormHeadings">
                                <p><b>Schedule D:</b> Student Default: Course Withdrawal/Release Non –
                                    Packaged Program Course</p>
                            </div>
                            <div class="scheduleDcontent">



                                <div class="borderbottomDiv d-flex justify-content-between row makegreyBg mt-3">
                                    <div class="scheduleBSituation col-md-6 ">
                                        <p><b>Situation</b></p>

                                    </div>
                                    <div class="scheduleBRefund col-md-6">
                                        <p><b>Situation</b></p>


                                    </div>
                                </div>


                                <div class="borderbottomDiv d-flex justify-content-between row">

                                    <div class=" col-md-6">
                                        <p>CoE is cancelled as a result of a students’ enrolment cancellation/withdrawal

                                            more than 8 weeks (56 days) before the commencement date of their non-

                                            package course.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Student is subjected to receive <b>Full Refund </b>of:</li>
                                        </ul>
                                        <ol>
                                            <li>Initial Payment Fee</li>
                                            <li>Enrollment Fee</li>
                                            <li>Material Fee</li>
                                        </ol>
                                        <ul>
                                            <li>Student is required to pay $500 for administrative fee.</li>
                                        </ul>


                                    </div>
                                </div>

                                <!--  -->
                                <div class="borderbottomDiv d-flex justify-content-between row makegreyBg">

                                    <div class=" col-md-6">
                                        <p>CoE is cancelled for a non-packaged course as a result of a students’
                                            enrolment

                                            cancellation/withdrawal more than 4 weeks (28 days) but less than 8 weeks.
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Before the commencement date of their non-package course, student is
                                                entitled to a <b>75% refund</b> of:</li>
                                        </ul>
                                        <ol>
                                            <li>Initial Payment Fee</li>
                                            <li>Enrollment Fee</li>
                                            <li>Material Fee</li>
                                        </ol>
                                        <ul>
                                            <li>Student is required to pay $500 for administrative fee.</li>
                                        </ul>

                                    </div>
                                </div>

                                <!--  -->
                                <div class="borderbottomDiv d-flex justify-content-between row">

                                    <div class=" col-md-6">
                                        <p>CoE is cancelled for a no packaged course as a result of their enrolment

                                            cancellation/withdrawal less than 2 weeks (14 days)</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Before, or after the commencement date of their non-package course, students
                                            are
                                            subjected to <b>No-Refund</b> of their
                                            pre-paid Course Tuition Fees and Materials Fee.</p>

                                    </div>
                                </div>

                                <!--  -->
                                <div class="borderbottomDiv d-flex justify-content-between row makegreyBg">

                                    <div class=" col-md-6">
                                        <p>CoE is cancelled as a result of a breach of student visa conditions,
                                            conditions

                                            of enrolment and/or National Code Standards (Unsatisfactory Attendance,

                                            Unsatisfactory Academic Progress, Non-payment of Fees, etc.)</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Student is subjected to <b>No Refund</b> of their pre-paid Course Tuition
                                            Fees
                                            and Materials Fee.</p>

                                    </div>
                                </div>


                                <!--  -->
                                <div class="borderbottomDiv d-flex justify-content-between row">

                                    <div class=" col-md-6">
                                        <p>CoE is cancelled due to demonstrated compassionate and/or compelling

                                            circumstances</p>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Student is subjected to receive <b>Full Refund</b> of: Tuition Fees for
                                                the
                                                cancelled course and any subsequent package courses
                                                plus associated Non-Tuition Fees.</li>
                                            <li>Student is required to pay $500 for administrative fee.</li>
                                        </ul>
                                        <p><b>Note :</b></p>
                                        <ul>
                                            <li>If the withdrawal is before course commencement date, student is
                                                subjected
                                                to Full-Refund.</li>
                                        </ul>
                                        <p>If the withdrawal is after the course commencement date, student is subjected
                                            to
                                            a
                                            <b>50% of Refund</b> for the unspent Tuition
                                            Fees for the cancelled course at time of withdrawal.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Disclaimer -->
                <div class="feesCollection mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>Disclaimer</h3>
                    </div>


                    <div class="mt-3">
                        <p>Students are requested to declare at your time of enrolment anything that might prevent you
                            from satisfactorily
                            progressing through the training and

                            assessment program e.g. anything related to physical ability, cultural background or
                            educational background. ANE College
                            will not accept liability for any

                            issue not declared at enrolment that has a potential to prevent satisfactory progress.</p>
                    </div>
                </div>


                <!-- College Commitment -->
                <div class="feesCollection mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>ANE College Commitment</h3>
                    </div>


                    <div class="mt-3">
                        <p>ANE College undertakes to provide a course/program corresponding to the requirements of the
                            relevant National Training
                            Package and the respective

                            qualification as identified by this application as well as being compliant to the National
                            Vocational Regulator
                            Standards as accredited by the Australian Skills

                            Quality Authority.</p>
                    </div>
                    <div class="student Signature mt-4">



                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <input class="form-control signNdate" name="applicant_sign" type="text">
                                <p class="mt-1"><b>Applicant Signature</b></p>
                            </div>
                            <div class="col-md-6 mt-4">
                                <input class="form-control signNdate mydatepicker" name="date_of_sign" value="{{ old('date_of_sign') }}" type="text">
                                <p class="mt-1"><b>Date</b></p>
                                @if ($errors->has('date_of_sign'))
                                <div class="alert alert-danger">{{ $errors->first('date_of_sign') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <p class="secondarySpan mt-2">This agreement, and the availability of complaints and appeals
                        processes,
                        does not remove the right of the student to
                        take action under Australia’s consumer

                        protection laws</p>
                </div>







                <!-- College Commitment -->
                <div class="feesCollection mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3">Required Document/s to be submitted with this Application</h3>
                    </div>


                    <div class="mt-3">
                        <p> <b>Off-Shore Student</b> </p>
                        <ol>
                            <li>Student Visa Supporting Evidence Checklist – Genuine Temporary Entrant (GTE) Document;
                            </li>
                            <li>ANE Pre-Enrolment Questionnaire;</li>
                            <li>Previous Academic Certificate (Certified if not in English);</li>
                            <li>Statement of Purpose (SOP);</li>
                            <li>Certificate of English Language Proficiency.</li>
                        </ol>
                        <p>If you do not have access to these forms, please contact us at
                            <a target="_blank" href="mailto:sydney.campus@ane.edu.au">sydney.campus@ane.edu.au</a> and
                            make a request to supply
                            them.
                        </p>
                    </div>
                </div>



                <!-- Unique Student Identifier -->
                <div class="feesCollection mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>Unique Student Identifier</h3>
                    </div>


                    <div class="mt-3">
                        <p>ANE College can be prevented from issuing you with a Nationally Recognised VET qualification
                            Certificate or Statement of
                            Attainment when you

                            complete your course if you do not have a Unique Student Identifier (USI). If you have not
                            yet obtained a USI you can
                            apply for it directly at
                            <a target="_blank"
                                href="http://www.usi.gov.au/create-your-USI">http://www.usi.gov.au/create-your-USI</a>
                            . <br>

                            If you would like ANE College to apply for a USI on your behalf you must authorise us to do
                            so and declare that you have
                            read the privacy information

                            at <a target="_blank"
                                href="http://www.usi.gov.au/Training-Organisations/Documents/Privacy-Notice.pdf">http://www.usi.gov.au/Training-Organisations/Documents/Privacy-Notice.pdf</a>
                        </p>
                    </div>
                </div>



                <!-- Section A or Section B -->
                <div class=" mt-4 gap">
                    <div class=" mainFormHeadings">
                        <h3>Please complete Section A or Section B.</h3>
                    </div>


                    <div class="mt-3 sectionAPart">
                        
                                <p><b>Section A (You will create your own USI)</b></p>
                            

                        <div style="width: 60%;" class="input-group mt-2 giveMaxWidth ml-0">
                            <label for="stdname" class="input-group-text">Student Name:</label>
                            <input id="stdname" name="stdname" value="{{ old('stdname') }}" type="text" class="form-control"
                                placeholder="Enter Your Name">
                                @if ($errors->has('stdname'))
                                <div class="alert alert-danger">{{ $errors->first('stdname') }}</div>
                                @endif
                        </div>
                        <div class="yourNameDesc mt-4">
                            <p>I, <input name="stdname" value="{{ old('stdname') }}"  type="text" class="form-control nosideBorders"
                                    placeholder="Enter Your Name">(insert name) will create my own USI and advise ANE
                                College. I also give permission for ANE College to verify my records
                                by viewing them via the USI. I understand my enrolment cannot be confirmed until I
                                provide the USI.</p>

                                
                        </div>

                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <input name="applicant_sign" class="form-control signNdate" type="text">
                                <p class="mt-1"><b>Applicant Signature</b></p>
                            </div>
                            <div class="col-md-6 mt-4">
                                <input name="date_of_sign" value="{{ old('date_of_sign') }}"  class="form-control signNdate mydatepicker" type="text">
                                <p class="mt-1"><b>Date</b></p>
                                @if ($errors->has('date_of_sign'))
                                <div class="alert alert-danger">{{ $errors->first('date_of_sign') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>


                    <!--  -->
                    <div class="mt-3 sectionBPart">
                       
                                <p><b>Section B (Giving permission to ANE College to create your USI)</b></p>
                          


                        <div class="yourNameDescB mt-4">
                            <p>I (insert
                                name), <input name="stdnameB"  value="{{ old('stdnameB') }}" type="text" class="form-control nosideBorders"
                                    placeholder="Enter Name"> authorise ANE College to apply pursuant to sub-section
                                9(2) of the Student

                                Identifiers Act 2014, for a USI on my behalf. I have read, and I consent to the
                                collection, use and disclosure of my
                                personal information pursuant

                                to the information detailed at <a target="_blank"
                                    href="http://www.usi.gov.au/Training-Organisations/Documents/Privacy-Notice.pdf">http://www.usi.gov.au/Training-Organisations/Documents/Privacy-Notice.pdf</a>
                                .</p>
                            <p class="mt-2"> <b>Select one of the following and attach a copy:</b> </p>
                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <input type="radio" name="mydocs" value="Driving_License"  id="license" type="checkbox">
                                    <label class="nobgLabel" for="license">Driving License</label>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <input type="radio" name="mydocs" value="Medicare_card"  id="medicard" type="checkbox">
                                    <label class="nobgLabel" for="medicard">Medicare card</label>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <input type="radio" name="mydocs" value="Passport"  id="passport" type="checkbox">
                                    <label class="nobgLabel" for="passport">Passport</label>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <input type="radio" name="mydocs" value="Australian_Birth"  id="birthCerti" type="checkbox">
                                    <label class="nobgLabel" for="birthCerti">Australian Birth Certificate</label>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <input type="radio" name="mydocs" value="Certificate_Registration "  id="regCerti" type="checkbox">
                                    <label class="nobgLabel" for="regCerti">Certificate of Registration by
                                        Descent</label>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <input type="radio" name="mydocs" value="Citizenship_Certificate"  id="ctzenCerti" type="checkbox">
                                    <label class="nobgLabel" for="ctzenCerti">Citizenship Certificate</label>
                                </div>
                                @if ($errors->has('mydocs'))
                                <div class="alert alert-danger">{{ $errors->first('mydocs') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <input class="form-control signNdate" name="applicant_signB" value="{{ old('applicant_signB') }}" type="text">
                                <p class="mt-1"><b>Applicant Signature</b></p>
                                @if ($errors->has('applicant_signB'))
                                <div class="alert alert-danger">{{ $errors->first('applicant_signB') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6 mt-4">
                                <input class="form-control signNdate mydatepicker" name="date_of_signB"  value="{{ old('date_of_signB') }}" type="text">
                                <p class="mt-1"><b>Date</b></p>
                                @if ($errors->has('date_of_signB'))
                                <div class="alert alert-danger">{{ $errors->first('date_of_signB') }}</div>
                                @endif
                            </div>
                        </div>



                    </div>
                </div>


                <div class=" mt-4">
                                    <div class="postPara bold-text">Please post or email enrollment to</div>

                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <th>Email :</th>
                                <th>Postal Address :</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>enrolmentmanager@ane.edu.au</p>
                                    </td>
                                    <td>
                                        <p>ANE College</p>
                                        <p>Suite 67/68, Level 6</p>
                                        <p class="kippoxPara">8-24 Kippax Street, SURRY HILLS, NSW 2010</p>
                                        <p>AUSTRALIA</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p><b>OR</b> bring the form to the ANE College with your payment. By making this payment and
                        signing, I agree to the terms and conditions of enrolling in the selected course.</p>
                </div>



                <!-- Section A or Section B -->
                <div class=" mt-4">
                    <div class=" mainFormHeadings">
                        <h3>Issuing Certificates and/or Statements.</h3>
                    </div>
                    <p class="mt-3">It is important that you provide the exact name you wish to have shown on any
                        qualifications or
                        licences issued.
                        Therefore, it is important that

                        you complete the particulars below in neat BLOCK letters so we can transfer the details to your
                        documents.
                        Any incorrect information will incur a re-issue fee if we have to print the documentation again.
                    </p>

                </div>

                    <button type="submit" class="btn btn-black mb-2 hvr-sweep-to-right">Submit</button>
            </form>
        </div>
    </section>
			</div>
		</div>
	</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(".mydatepicker").datepicker({
  format: "dd-mm-yyyy",
});
</script>



@endsection

