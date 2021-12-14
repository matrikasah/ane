@extends('frontend.master')
@section('content')
<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Agent</h1>
					<p>Apply to become an agent</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Agent</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="innerpage-content agentSection">
	<div class="container">
        <div class="row   mt-5">
            <div class="col-sm-6">
                <div class="small-title title">
                        <h3>Agent</h3>
                        <h1>Become an agent</h1>
                    </div>
            </div>
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
            @if(session()->has('warning'))
            <div classs="container p-5">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 m-auto">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Well done!</strong> {{ session()->get('warning') }}
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    </div>
                </div>
            </div>
            @endif


            <div class="col-sm-6">
                <div class="button-lists bd-example">
                    <div class="btn-group">
                    <a   onclick="window.print();return false;" class="btn btn-outline-primary hvr-bounce-to-right">Print <i class="fas fa-print"></i></a>
                    <a  target="_blank" href="{{ asset('image/AgentApplicationForm.pdf') }}" class="btn btn-outline-secondary hvr-bounce-to-right">Download <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <ul class="error">
            @foreach($errors->all() as $error)
            <li><div class="alert alert-danger" role="alert">
                {{ $error }}
                </div>
            </li>
            @endforeach
        </ul> -->

		<div class="row content-text">
			<div class="col-12">

					 <section class="offshoreForm">

        <form action="{{route('agent.store')}}" method="POST">
            @csrf



            <div class="AgentDetails p-1 mt-4 gap">
                <div class="personalDetailsHead mainFormHeadings">
                    <h3 class="bold-text">Details</h3>

                </div>
                <div class="row">

                    <div class="col-md-6  mt-4">
                        <div class="input-group">
                            <label for="agent_name" class="input-group-text agent_nameLabel">Agent Name :</label>
                            <input id="agent_name" name="name" type="text" value="{{ old('name') }}"  class="form-control" placeholder="Agent Name" required>

                            @if ($errors->has('name'))
                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_surname" class="input-group-text">Surname</label>
                            <input id="agent_surname" name="surname" type="text" class="form-control"
                                placeholder="Enter Your Surname" value="{{ old('surname') }}" required>

                                @if ($errors->has('surname'))
                            <div class="alert alert-danger">{{ $errors->first('surname') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_givename" class="input-group-text">Given Name</label>
                            <input id="agent_givename" name="givenname" type="text" class="form-control"
                                placeholder="Enter Your Given Name" value="{{ old('givenname') }}" required>
                                @if ($errors->has('givenname'))
                            <div class="alert alert-danger">{{ $errors->first('givenname') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_ausaddress" class="input-group-text">Address in Australia</label>
                            <input id="agent_ausaddress" name="address_in_aus" type="text" class="form-control"
                                placeholder="Enter Your Address in Australia" value="{{ old('address_in_aus') }}" required>
                                @if ($errors->has('address_in_aus'))
                            <div class="alert alert-danger">{{ $errors->first('address_in_aus') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_suburb" class="input-group-text">Suburb</label>
                            <input id="agent_suburb" name="suburb" type="text" class="form-control"
                                placeholder="Enter Your Suburb" value="{{ old('suburb') }}" required>
                                @if ($errors->has('suburb'))
                            <div class="alert alert-danger">{{ $errors->first('suburb') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_country" class="input-group-text">Country</label>
                            <input id="agent_country" name="country" type="text" class="form-control"
                                placeholder="Enter Your Country" value="{{ old('country') }}" required>
                                @if ($errors->has('country'))
                            <div class="alert alert-danger">{{ $errors->first('country') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="input-group">
                            <label for="agent_out_aus" class="input-group-text">Address <span class="secondarySpan"> (Outside
                                    Australia)</span> </label>
                            <input id="agent_out_aus" name="address_outside_aus" type="text" class="form-control"
                                placeholder="Enter Your Address Outside Australia" value="{{ old('address_outside_aus') }}" required>
                                @if ($errors->has('address_outside_aus'))
                            <div class="alert alert-danger">{{ $errors->first('address_outside_aus') }}</div>
                            @endif
                        </div>
                    </div>

                    {{-- sub outside aus --}}
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="suburb_out_aus" class="input-group-text">Suburb </label>
                            <input id="suburb_out_aus" name="suburb_outside_aus"  type="text" class="form-control"
                                placeholder="Enter Your Suburb" value="{{ old('suburb_outside_aus') }}" required>
                                @if ($errors->has('suburb_outside_aus'))
                            <div class="alert alert-danger">{{ $errors->first('suburb_outside_aus') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_postcode" class="input-group-text">Postcode</label>
                            <input id="agent_postcode" name="post_code" type="number" class="form-control"
                                placeholder="Enter Your Postcode" value="{{ old('post_code') }}" required>
                                @if ($errors->has('post_code'))
                            <div class="alert alert-danger">{{ $errors->first('post_code') }}</div>
                            @endif
                        </div>
                    </div>



                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_mobile" class="input-group-text">Mobile</label>
                            <input id="agent_mobile" name="mobile_num" type="number" class="form-control"
                                placeholder="Enter Your Mobile" value="{{ old('mobile_num') }}" required>
                                @if ($errors->has('mobile_num'))
                            <div class="alert alert-danger">{{ $errors->first('mobile_num') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_tel_work" class="input-group-text">Telephone (work)</label>
                            <input id="agent_tel_work" name="telephone_num" type="number" class="form-control"
                                placeholder="Enter Your Telephone" value="{{ old('telephone_num') }}">
                                @if ($errors->has('telephone_num'))
                            <div class="alert alert-danger">{{ $errors->first('telephone_num') }}</div>
                            @endif
                        </div>
                    </div>


                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_abn" class="input-group-text">ABN</label>
                            <input id="agent_abn" name="abn" type="number" class="form-control"
                                placeholder="Enter Your Postcode" value="{{ old('abn') }}" required>
                                @if ($errors->has('abn'))
                            <div class="alert alert-danger">{{ $errors->first('abn') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_acn" class="input-group-text">ACN</label>
                            <input id="agent_acn" name="acn" type="number" class="form-control"
                                placeholder="Enter Your Postcode" value="{{ old('acn') }}" required>
                                @if ($errors->has('acn'))
                            <div class="alert alert-danger">{{ $errors->first('acn') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="input-group">
                            <label for="agent_emer_cont" class="input-group-text">Emergency Contact</label>
                            <input id="agent_emer_cont" name="emergency_contact" type="number" class="form-control"
                                placeholder="Enter Your Emergency Contact" value="{{ old('emergency_contact') }}" required>
                                @if ($errors->has('emergency_contact'))
                            <div class="alert alert-danger">{{ $errors->first('emergency_contact') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_address_usual" class="input-group-text">Address</label>
                            <input id="agent_address_usual" name="emgy_address" type="text" class="form-control"
                                placeholder="Enter Your Address" value="{{ old('emgy_address') }}" required>
                                @if ($errors->has('emgy_address'))
                            <div class="alert alert-danger">{{ $errors->first('emgy_address') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_tel_usual" class="input-group-text">Telephone</label>
                            <input id="agent_tel_usual" name="emgy_telephone" type="number" class="form-control"
                                placeholder="Enter Your Telephone" value="{{ old('emgy_telephone') }}" required>
                                @if ($errors->has('emgy_telephone'))
                            <div class="alert alert-danger">{{ $errors->first('emgy_telephone') }}</div>
                            @endif
                        </div>
                    </div>


                </div>
            </div>
            <div class="businessHistory mt-4 gap">
                <h3 class="bold-text">Business History</h3>
                <div class="form-group">
                    <label class="mt-3 nobgLabel" for="agentDuration">How long have you been in operation as an
                        education
                        agent?
                        (Please provide a business plan if your company is new).
                    </label>
                    <textarea class="form-control agentAnswer mt-1"  name="how_long_operation" id="agentDuration"  rows="3">{{ old('how_long_operation') }}</textarea>
                    @if ($errors->has('how_long_operation'))
                            <div class="alert alert-danger">{{ $errors->first('how_long_operation') }}</div>
                            @endif
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="otherAreas">Does your company deal in areas other than
                        international education?

                    </label>
                    <textarea class="form-control agentAnswer mt-1" name="deal_area" id="otherAreas" rows="3">{{ old('deal_area') }}</textarea>
                    @if ($errors->has('deal_area'))
                            <div class="alert alert-danger">{{ $errors->first('deal_area') }}</div>
                            @endif
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="totalStds">What is the total number of students that your office
                        recruits each year?
                    </label>
                    <textarea class="form-control agentAnswer mt-1"  name="totalnumber_student" id="totalStds" rows="3">{{ old('totalnumber_student') }}</textarea>
                    @if ($errors->has('totalnumber_student'))
                            <div class="alert alert-danger">{{ $errors->first('totalnumber_student') }}</div>
                            @endif
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="whichCountry">Where (which countries) do you send most of your
                        students?
                    </label>
                    <textarea class="form-control agentAnswer mt-1"  name="country_student_send" id="whichCountry" rows="3">{{ old('country_student_send') }}</textarea>
                    @if ($errors->has('country_student_send'))
                            <div class="alert alert-danger">{{ $errors->first('country_student_send') }}</div>
                            @endif
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="stdCount">How many students does your agency brought to Australia
                        to study in the last 12 months?

                    </label>
                    <textarea class="form-control agentAnswer mt-1" name="student_in_austrila" id="stdCount" rows="3">{{ old('student_in_austrila') }}</textarea>
                    @if ($errors->has('student_in_austrila'))
                            <div class="alert alert-danger">{{ $errors->first('student_in_austrila') }}</div>
                            @endif
                </div>



                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="partners">Do you work with any other education agents as a
                        partnership or an affiliation?

                    </label>
                    <textarea class="form-control agentAnswer mt-1" name="partners" id="partners" rows="3">{{ old('partners') }}</textarea>
                    @if ($errors->has('partners'))
                            <div class="alert alert-danger">{{ $errors->first('partners') }}</div>
                            @endif
                </div>

                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="institutions">Do you represent any other Australian institutions?
                        (If Yes, please describe the institutions’ names.)

                    </label>
                    <textarea class="form-control agentAnswer mt-1"  name="institutions" id="institutions" rows="3">{{ old('institutions') }}</textarea>
                    @if ($errors->has('institutions'))
                            <div class="alert alert-danger">{{ $errors->first('institutions') }}</div>
                            @endif
                </div>

            </div>

            <div class="gap">
            <div class="agencyInfo mt-4">
                <h3 class="bold-text">Agency information (Contact person)</h3>
                <p>Key staff contact (1) Position</p>
                <input class="agentAnswer mt-1" value="{{ old('keyStaff') }}" name="keyStaff" id="keyStaff"></input>
                @if ($errors->has('keyStaff'))
                            <div class="alert alert-danger">{{ $errors->first('keyStaff') }}</div>
                            @endif
            </div>

            <div class="referessinfo mt-4">
                <p>Please include the details of two (2) referee we can contact, including one educational institution
                    in Australia.</p>
                <p><b>Referee 1:</b></p>
                <!-- <label for="refonename">Name :</label>
                <input type="text" id="refonename"> -->
                <div class="row">


                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="useragentname" class="input-group-text">Name :</label>
                            <input id="useragentname" name="useragentname" type="text" class="form-control"
                                placeholder="Enter Your Name" value="{{ old('useragentname') }}">
                                @if ($errors->has('useragentname'))
                            <div class="alert alert-danger">{{ $errors->first('useragentname') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstname" class="input-group-text">Institution Name :</label>
                            <input id="userinstname" name="userinstname" type="text" class="form-control"
                                placeholder="Enter Your Institution Name" value="{{ old('userinstname') }}">
                                @if ($errors->has('userinstname'))
                            <div class="alert alert-danger">{{ $errors->first('userinstname') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinsttitle" class="input-group-text">Title :</label>
                            <input id="userinsttitle" name="userinsttitle" type="text" class="form-control"
                                placeholder="Enter Your Title" value="{{ old('userinsttitle') }}">
                                @if ($errors->has('userinsttitle'))
                            <div class="alert alert-danger">{{ $errors->first('userinsttitle') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstphone" class="input-group-text">Phone :</label>
                            <input type="number" id="userinstphone" name="userinstphone" class="form-control"
                                placeholder="Enter Your Phone" value="{{ old('userinstphone') }}">
                                @if ($errors->has('userinstphone'))
                            <div class="alert alert-danger">{{ $errors->first('userinstphone') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstphone" class="input-group-text">Fax :</label>
                            <input type="number" id="userinstfax" name="userinstfax" class="form-control"
                                placeholder="Enter Your Fax" value="{{ old('userinstfax') }}">
                                @if ($errors->has('userinstfax'))
                            <div class="alert alert-danger">{{ $errors->first('userinstfax') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstphone" class="input-group-text">Email :</label>
                            <input type="text" id="userinstemail" name="userinstemail" class="form-control"
                                placeholder="Enter Your Email" value="{{ old('userinstemail') }}">
                                @if ($errors->has('userinstemail'))
                            <div class="alert alert-danger">{{ $errors->first('userinstemail') }}</div>
                            @endif
                        </div>
                    </div>


                    <p class="mt-4"><b>Referee 2:</b></p>
                    <!-- <label for="refonename">Name :</label>
                                    <input type="text" id="refonename"> -->
                    <div class="row">


                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="useragentname" class="input-group-text">Name :</label>
                                <input id="useragentname" name="useragentname2" type="text" class="form-control"
                                    placeholder="Enter Your Name" value="{{ old('useragentname2') }}">
                                    @if ($errors->has('useragentname2'))
                            <div class="alert alert-danger">{{ $errors->first('useragentname2') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstname" class="input-group-text">Institution Name :</label>
                                <input id="userinstname" name="userinstname2" type="text" class="form-control"
                                    placeholder="Enter Your Institution Name" value="{{ old('userinstname2') }}">
                                    @if ($errors->has('userinstname2'))
                            <div class="alert alert-danger">{{ $errors->first('userinstname2') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinsttitle" class="input-group-text">Title :</label>
                                <input id="userinsttitle" name="userinsttitle2" type="text" class="form-control"
                                    placeholder="Enter Your Title" value="{{ old('userinsttitle2') }}">
                                    @if ($errors->has('userinsttitle2'))
                                    <div class="alert alert-danger">{{ $errors->first('userinsttitle2') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstphone" class="input-group-text">Phone :</label>
                                <input type="number" id="userinstphone" name="userinstphone2" class="form-control"
                                    placeholder="Enter Your Phone" value="{{ old('userinstphone2') }}">
                                    @if ($errors->has('userinstphone2'))
                                    <div class="alert alert-danger">{{ $errors->first('userinstphone2') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstphone" class="input-group-text">Fax :</label>
                                <input type="number" id="userinstfax" name="userinstfax2" class="form-control"
                                    placeholder="Enter Your Fax" value="{{ old('userinstfax2') }}">
                                    @if ($errors->has('userinstfax2'))
                                    <div class="alert alert-danger">{{ $errors->first('userinstfax2') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstphone" class="input-group-text">Email :</label>
                                <input type="email" id="userinstemail" name="userinstemail2" class="form-control"
                                    placeholder="Enter Your Email" value="{{ old('userinstemail2') }}">
                                    @if ($errors->has('userinstemail2'))
                                    <div class="alert alert-danger">{{ $errors->first('userinstemail2') }}</div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="declaration mt-4 gap">
                <h3 class="bold-text">Declaration</h3>
                <input class="agentAnswer mt-2" value="{{ old('declaration') }}" name="declaration" id="agentDeclaration"></input>
                @if ($errors->has('declaration'))
                <div class="alert alert-danger">{{ $errors->first('declaration') }}</div>
                @endif

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="input-group">
                            <label for="printname" class="input-group-text">Print Name :</label>
                            <input type="text" id="printname" name="agentprintname" class="form-control"
                                placeholder="Enter Your Name" value="{{ old('agentprintname') }}">
                                @if ($errors->has('agentprintname'))
                                <div class="alert alert-danger">{{ $errors->first('agentprintname') }}</div>
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <input class="form-control signNdate" name="agent_sign" type="text" required>
                            @if ($errors->has('agent_sign'))
                                <div class="alert alert-danger">{{ $errors->first('agent_sign') }}</div>
                                @endif
                            <p class="mt-1"><b>Applicant Signature</b></p>

                            <!--  <div id="signature"></div>
                            <button style="float: right;" id="reset" type="button">Reset</button> -->
                            <!-- <label for="signature_capture">The data URI scheme</label>
                            <textarea id="signature_capture" name="contractdata"></textarea> -->
                        </div>
                        <div class="col-md-6 mt-4">
                            <input class="form-control signNdate" name="agent_position" type="text" value="{{ old('agent_position') }}">
                            @if ($errors->has('agent_position'))
                                <div class="alert alert-danger">{{ $errors->first('agent_position') }}</div>
                                @endif
                            <p class="mt-1"><b>Position</b></p>
                        </div>
                        <div class="col-md-6 mt-4 ml-0">
                            <input id="datepicker" class="form-control signNdate mydatepicker" name="date" type="text" value="{{ old('date') }}">
                            @if ($errors->has('date'))
                                <div class="alert alert-danger">{{ $errors->first('date') }}</div>
                                @endif
                            <p class="mt-1"><b>Date</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="agentFooter mt-4">
                <p>Thank you for taking the time to complete this form.</p>
                <p>Please return to:</p>
                <div class="marketmangrdetails mt-3">
                    <p><b>Marketing Manager</b></p>
                    <p>ANE Pty. Ltd.</p>
                    <p>Suite 67 & 68, Level 6, 8-24 Kippax Street</p>
                    <p>Surry Hills, NSW 2010</p>

                    <p class="mt-3"><b>Email :</b> <a
                            href="mailto:marketingmanager@ane.edu.au">marketingmanager@ane.edu.au</a></p>
                </div>

                <div class="checkList mt-4">
                    <h5>Check List</h5>
                    <ol>
                        <li>Completed Application form:</li>
                        <li>Certificate of Business Registration</li>
                        <li>Business Profile</li>
                        <li>PIER/MARA Certificate</li>
                    </ol>
                </div>
            </div>
            <button type="submit" class="btn btn-black mb-2 hvr-sweep-to-right">Submit</button>
        </form>
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
