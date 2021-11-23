@extends('frontend.master')
@section('content')
<section class="featured-img">
	<img src="image/course-featured.jpg">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Agent</h1>
					<p>Become an agent</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">International Students</li>
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
            <div class="col-sm-6">
                <div class="button-lists bd-example">
                    <div class="btn-group">
                    <a type="button"  onclick="window.print();return false;" class="btn btn-outline-primary hvr-bounce-to-right">Print <i class="fas fa-print"></i></a>                 
                    <a type="button" target="_blank" href="image/AgentApplicationForm.pdf" class="btn btn-outline-secondary hvr-bounce-to-right">Download <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
		<div class="row content-text">
			<div class="col-12">
				
					 <section class="offshoreForm">
        
        <form action="">
            <div class="AgentDetails p-1 mt-4 gap">
                <div class="personalDetailsHead mainFormHeadings">
                    <h3 class="bold-text">Details</h3>

                </div>
                <div class="row">

                    <div class="col-md-6  mt-4">
                        <div class="input-group">
                            <label for="userUsi" class="input-group-text userusiLabel">Agent Name :</label>
                            <input id="userUsi" name="stdusi" type="text" class="form-control" placeholder="Agent Name">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userSurname" class="input-group-text">Surname</label>
                            <input id="userSurname" name="stdsurname" type="text" class="form-control"
                                placeholder="Enter Your Surname">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userGivenName" class="input-group-text">Given Name</label>
                            <input id="userGivenName" name="stdgivenname" type="text" class="form-control"
                                placeholder="Enter Your Given Name">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userHomeAddress" class="input-group-text">Address in Australia</label>
                            <input id="userHomeAddress" name="stdhomeaddress" type="text" class="form-control"
                                placeholder="Enter Your Address in Australia">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userSuburb" class="input-group-text">Suburb</label>
                            <input id="userSuburb" name="stdsuburb" type="text" class="form-control"
                                placeholder="Enter Your Suburb">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userState" class="input-group-text">Country</label>
                            <input id="userState" name="stdpostcode" type="text" class="form-control"
                                placeholder="Enter Your Country">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="telNum" class="input-group-text">Address <span class="secondarySpan"> (Outside
                                    Australia)</span> </label>
                            <input id="telNum" name="stdtelnum" type="number" class="form-control"
                                placeholder="Enter Your Address Outside Australia">
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userEmail" class="input-group-text">Suburb</label>
                            <input id="userEmail" name="stdemail" type="text" class="form-control"
                                placeholder="Enter Your Suburb">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userDob" class="input-group-text">Postcode</label>
                            <input id="userDob" name="stddob" type="text" class="form-control"
                                placeholder="Enter Your Postcode">
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userDob" class="input-group-text">Mobile</label>
                            <input id="userDob" name="stddob" type="text" class="form-control"
                                placeholder="Enter Your Mobile">
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userDob" class="input-group-text">Telephone (work)</label>
                            <input id="userDob" name="stddob" type="text" class="form-control"
                                placeholder="Enter Your Telephone">
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userDob" class="input-group-text">Emergency Contact</label>
                            <input id="userDob" name="stddob" type="text" class="form-control"
                                placeholder="Enter Your Emergency Contact">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userDob" class="input-group-text">Address</label>
                            <input id="userDob" name="stddob" type="text" class="form-control"
                                placeholder="Enter Your Address">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userDob" class="input-group-text">Telephone</label>
                            <input id="userDob" name="stddob" type="text" class="form-control"
                                placeholder="Enter Your Telephone">
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
                    <input class="agentAnswer mt-1" name="" id="agentDuration"></input>
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="otherAreas">Does your company deal in areas other than
                        international education?

                    </label>
                    <input class="agentAnswer mt-1" name="" id="otherAreas"></input>
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="totalStds">What is the total number of students that your office
                        recruits each year?
                    </label>
                    <input class="agentAnswer mt-1" name="" id="totalStds"></input>
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="whichCountry">Where (which countries) do you send most of your
                        students?
                    </label>
                    <input class="agentAnswer mt-1" name="" id="whichCountry"></input>
                </div>


                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="stdCount">How many students does your agency brought to Australia
                        to study in the last 12 months?

                    </label>
                    <input class="agentAnswer mt-1" name="" id="stdCount"></input>
                </div>



                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="partners">Do you work with any other education agents as a
                        partnership or an affiliation?

                    </label>
                    <input class="agentAnswer mt-1" name="" id="partners"></input>
                </div>

                <div class="form-group mt-2">
                    <label class="mt-3 nobgLabel" for="institutions">Do you represent any other Australian institutions?
                        (If Yes, please describe the institutions’ names.)

                    </label>
                    <input class="agentAnswer mt-1" name="" id="institutions"></input>
                </div>

            </div>

            <div class="gap">
            <div class="agencyInfo mt-4">
                <h3 class="bold-text">Agency information (Contact person)</h3>
                <p>Key staff contact (1) Position</p>
                <input class="agentAnswer mt-1" name="" id="keyStaff"></input>
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
                                placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstname" class="input-group-text">Institution Name :</label>
                            <input id="userinstname" name="userinstname" type="text" class="form-control"
                                placeholder="Enter Your Institution Name">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinsttitle" class="input-group-text">Title :</label>
                            <input id="userinsttitle" name="userinsttitle" type="text" class="form-control"
                                placeholder="Enter Your Title">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstphone" class="input-group-text">Phone :</label>
                            <input type="number" id="userinstphone" name="userinstphone" class="form-control"
                                placeholder="Enter Your Phone">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstphone" class="input-group-text">Fax :</label>
                            <input type="text" id="userinstfax" name="userinstphone" class="form-control"
                                placeholder="Enter Your Fax">
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="input-group">
                            <label for="userinstphone" class="input-group-text">Email :</label>
                            <input type="text" id="userinstemail" name="userinstphone" class="form-control"
                                placeholder="Enter Your Email">
                        </div>
                    </div>


                    <p class="mt-4"><b>Referee 2:</b></p>
                    <!-- <label for="refonename">Name :</label>
                                    <input type="text" id="refonename"> -->
                    <div class="row">


                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="useragentname" class="input-group-text">Name :</label>
                                <input id="useragentname" name="useragentname" type="text" class="form-control"
                                    placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstname" class="input-group-text">Institution Name :</label>
                                <input id="userinstname" name="userinstname" type="text" class="form-control"
                                    placeholder="Enter Your Institution Name">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinsttitle" class="input-group-text">Title :</label>
                                <input id="userinsttitle" name="userinsttitle" type="text" class="form-control"
                                    placeholder="Enter Your Title">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstphone" class="input-group-text">Phone :</label>
                                <input type="number" id="userinstphone" name="userinstphone" class="form-control"
                                    placeholder="Enter Your Phone">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstphone" class="input-group-text">Fax :</label>
                                <input type="text" id="userinstfax" name="userinstphone" class="form-control"
                                    placeholder="Enter Your Fax">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="input-group">
                                <label for="userinstphone" class="input-group-text">Email :</label>
                                <input type="text" id="userinstemail" name="userinstphone" class="form-control"
                                    placeholder="Enter Your Email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="declaration mt-4 gap">
                <h3 class="bold-text">Declaration</h3>
                <input class="agentAnswer mt-2" name="" id="agentDeclaration"></input>


                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="input-group">
                            <label for="printname" class="input-group-text">Print Name :</label>
                            <input type="text" id="printname" name="userinstphone" class="form-control"
                                placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <input class="form-control signNdate" type="text">
                            <p class="mt-1"><b>Applicant Signature</b></p>
                            <!--  <div id="signature"></div>
                            <button style="float: right;" id="reset" type="button">Reset</button> -->
                            <!-- <label for="signature_capture">The data URI scheme</label>
                            <textarea id="signature_capture" name="contractdata"></textarea> -->
                        </div>
                        <div class="col-md-6 mt-4">
                            <input class="form-control signNdate" type="text">
                            <p class="mt-1"><b>Position</b></p>
                        </div>
                        <div class="col-md-6 mt-4 ml-0">
                            <input id="datepicker" class="form-control signNdate" type="text">
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

        </form>
    </section>
			</div>
		</div>
	</div>
</section>




@endsection