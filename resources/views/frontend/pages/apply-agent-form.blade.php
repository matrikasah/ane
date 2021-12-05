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
                        <div class="alert alert-success fade show" role="alert">
                            
                             <h4 class="alert-heading">Well done!</h4>
                              <p> {{ session()->get('message') }}</p>
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
        <ul class="error">
            @foreach($errors->all() as $error)
            <li><div class="alert alert-danger" role="alert">
                {{ $error }}
                </div>
            </li>
            @endforeach
        </ul>

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
                            <input id="agent_name" name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="Agent Name">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_surname" class="input-group-text">Surname</label>
                            <input id="agent_surname" name="surname" type="text" class="form-control"
                                placeholder="Enter Your Surname" value="{{ old('surname') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_givename" class="input-group-text">Given Name</label>
                            <input id="agent_givename" name="givenname" type="text" class="form-control"
                                placeholder="Enter Your Given Name" value="{{ old('givenname') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_ausaddress" class="input-group-text">Address in Australia</label>
                            <input id="agent_ausaddress" name="address_in_aus" type="text" class="form-control"
                                placeholder="Enter Your Address in Australia" value="{{ old('address_in_aus') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_suburb" class="input-group-text">Suburb</label>
                            <input id="agent_suburb" name="suburb" type="text" class="form-control"
                                placeholder="Enter Your Suburb" value="{{ old('suburb') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_country" class="input-group-text">Country</label>
                            <input id="agent_country" name="country" type="text" class="form-control"
                                placeholder="Enter Your Country" value="{{ old('country') }}">
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="input-group">
                            <label for="agent_out_aus" class="input-group-text">Address <span class="secondarySpan"> (Outside
                                    Australia)</span> </label>
                            <input id="agent_out_aus" name="address_outside_aus" type="text" class="form-control"
                                placeholder="Enter Your Address Outside Australia" value="{{ old('address_outside_aus') }}">
                        </div>
                    </div>

                    {{-- sub outside aus --}}
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="suburb_out_aus" class="input-group-text">Suburb </label>
                            <input id="suburb_out_aus" name="suburb_outside_aus"  type="text" class="form-control"
                                placeholder="Enter Your Suburb" value="{{ old('suburb_outside_aus') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_postcode" class="input-group-text">Postcode</label>
                            <input id="agent_postcode" name="post_code" type="text" class="form-control"
                                placeholder="Enter Your Postcode" value="{{ old('post_code') }}">
                        </div>
                    </div>

                  

                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_mobile" class="input-group-text">Mobile</label>
                            <input id="agent_mobile" name="mobile_num" type="number" class="form-control"
                                placeholder="Enter Your Mobile" value="{{ old('mobile_num') }}">
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_tel_work" class="input-group-text">Telephone (work)</label>
                            <input id="agent_tel_work" name="telephone_num" type="text" class="form-control"
                                placeholder="Enter Your Telephone" value="{{ old('telephone_num') }}">
                        </div>
                    </div>


                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_abn" class="input-group-text">ABN</label>
                            <input id="agent_abn" name="abn" type="text" class="form-control"
                                placeholder="Enter Your Postcode" value="{{ old('abn') }}">
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_acn" class="input-group-text">ACN</label>
                            <input id="agent_acn" name="acn" type="text" class="form-control"
                                placeholder="Enter Your Postcode" value="{{ old('acn') }}">
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="input-group">
                            <label for="agent_emer_cont" class="input-group-text">Emergency Contact</label>
                            <input id="agent_emer_cont" name="emergency_contact" type="text" class="form-control"
                                placeholder="Enter Your Emergency Contact" value="{{ old('emergency_contact') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_address_usual" class="input-group-text">Address</label>
                            <input id="agent_address_usual" name="emgy_address" type="text" class="form-control"
                                placeholder="Enter Your Address" value="{{ old('emgy_address') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="agent_tel_usual" class="input-group-text">Telephone</label>
                            <input id="agent_tel_usual" name="emgy_telephone" type="text" class="form-control"
                                placeholder="Enter Your Telephone" value="{{ old('emgy_telephone') }}">
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
                    <input class="agentAnswer mt-1" name="how_long_operation" id="agentDuration" value="{{ old('how_long_operation') }}"></input>
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="otherAreas">Does your company deal in areas other than
                        international education?

                    </label>
                    <input class="agentAnswer mt-1" name="deal_area" id="otherAreas" value="{{ old('deal_area') }}"></input>
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="totalStds">What is the total number of students that your office
                        recruits each year?
                    </label>
                    <input class="agentAnswer mt-1" value="{{ old('totalnumber_student') }}" name="totalnumber_student" id="totalStds"></input>
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="whichCountry">Where (which countries) do you send most of your
                        students?
                    </label>
                    <input class="agentAnswer mt-1" value="{{ old('country_student_send') }}" name="country_student_send" id="whichCountry"></input>
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="stdCount">How many students does your agency brought to Australia
                        to study in the last 12 months?

                    </label>
                    <input class="agentAnswer mt-1" value="{{ old('student_in_austrila"') }}" name="student_in_austrila" id="stdCount"></input>
                </div>



                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="partners">Do you work with any other education agents as a
                        partnership or an affiliation?

                    </label>
                    <input class="agentAnswer mt-1" value="{{ old('partners') }}" name="partners" id="partners"></input>
                </div>

                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="institutions">Do you represent any other Australian institutions?
                        (If Yes, please describe the institutions’ names.)

                    </label>
                    <input class="agentAnswer mt-1" value="{{ old('institutions') }}" name="institutions" id="institutions"></input>
                </div>

            </div>

            <div class="gap">
            <div class="agencyInfo mt-4">
                <h3 class="bold-text">Agency information (Contact person)</h3>
                <p>Key staff contact (1) Position</p>
                <input class="agentAnswer mt-1" value="{{ old('keyStaff') }}" name="keyStaff" id="keyStaff"></input>
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
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstname" class="input-group-text">Institution Name :</label>
                            <input id="userinstname" name="userinstname" type="text" class="form-control"
                                placeholder="Enter Your Institution Name" value="{{ old('userinstname') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinsttitle" class="input-group-text">Title :</label>
                            <input id="userinsttitle" name="userinsttitle" type="text" class="form-control"
                                placeholder="Enter Your Title" value="{{ old('userinsttitle') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstphone" class="input-group-text">Phone :</label>
                            <input type="number" id="userinstphone" name="userinstphone" class="form-control"
                                placeholder="Enter Your Phone" value="{{ old('userinstphone') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstphone" class="input-group-text">Fax :</label>
                            <input type="text" id="userinstfax" name="userinstfax" class="form-control"
                                placeholder="Enter Your Fax" value="{{ old('userinstfax') }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstphone" class="input-group-text">Email :</label>
                            <input type="text" id="userinstemail" name="userinstemail" class="form-control"
                                placeholder="Enter Your Email" value="{{ old('userinstemail') }}">
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
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstname" class="input-group-text">Institution Name :</label>
                                <input id="userinstname" name="userinstname2" type="text" class="form-control"
                                    placeholder="Enter Your Institution Name" value="{{ old('userinstname2') }}">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinsttitle" class="input-group-text">Title :</label>
                                <input id="userinsttitle" name="userinsttitle2" type="text" class="form-control"
                                    placeholder="Enter Your Title" value="{{ old('userinsttitle2') }}">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstphone" class="input-group-text">Phone :</label>
                                <input type="number" id="userinstphone" name="userinstphone2" class="form-control"
                                    placeholder="Enter Your Phone" value="{{ old('userinstphone2') }}">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstphone" class="input-group-text">Fax :</label>
                                <input type="text" id="userinstfax" name="userinstfax2" class="form-control"
                                    placeholder="Enter Your Fax" value="{{ old('userinstfax2') }}">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstphone" class="input-group-text">Email :</label>
                                <input type="text" id="userinstemail" name="userinstemail2" class="form-control"
                                    placeholder="Enter Your Email" value="{{ old('userinstemail2') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="declaration mt-4 gap">
                <h3 class="bold-text">Declaration</h3>
                <input class="agentAnswer mt-2" value="{{ old('declaration') }}" name="declaration" id="agentDeclaration"></input>


                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="input-group">
                            <label for="printname" class="input-group-text">Print Name :</label>
                            <input type="text" id="printname" name="agentprintname" class="form-control"
                                placeholder="Enter Your Name" value="{{ old('agentprintname') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <input class="form-control signNdate" name="agent_sign" type="text">
                            <p class="mt-1"><b>Applicant Signature</b></p>
                            <!--  <div id="signature"></div>
                            <button style="float: right;" id="reset" type="button">Reset</button> -->
                            <!-- <label for="signature_capture">The data URI scheme</label>
                            <textarea id="signature_capture" name="contractdata"></textarea> -->
                        </div>
                        <div class="col-md-6 mt-4">
                            <input class="form-control signNdate" name="agent_position" type="text" value="{{ old('agent_position') }}">
                            <p class="mt-1"><b>Position</b></p>
                        </div>
                        <div class="col-md-6 mt-4 ml-0">
                            <input id="datepicker" class="form-control signNdate mydatepicker" name="date" type="text" value="{{ old('date') }}">
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
                    <p>Australian National Education Pty. Ltd.</p>
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