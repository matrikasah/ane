<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section class="innerpage-content onshoreForm">
        <div class="container">
            <div class="row calender content-text">
                <div class="col-12">
                    <section class="onshoreForm">

                        <div class="aneContent">
                            <form action="" method="">

                                <div class="personalDetails p-1 mt-4 gap">
                                    <div class="personalDetailsHead mainFormHeadings">

                                        <h3>Personal Details</h3>
                                        <p>(Legal name as per photo ID, which will need to be sighted to verify
                                            legal
                                            name)
                                        </p>
                                    </div>
                                    <div class="row">


                                        <p for="userUsi" class="input-group-text userusiLabel"><b>Unique Student Identifier
                                                (USI) – <span class="secondarySpan"> Refer to
                                                    Page 5 for assistance : </span></b> 12342342 </p>
                                        <p for="userSurname" class="input-group-text"> <b>Surname: </b>{{$applicant->stdsurname}}</p>
                                        <p for="userGivenName" class="input-group-text"> <b> Given Name: </b>{{$applicant->stdgivenname}}</p>
                                        <p for="userHomeAddress" class="input-group-text"> <b>Home Address: </b> {{$applicant->stdhomeaddress}}</p>
                                        <p for="userHomeAddress" class="input-group-text"> <b>Suburb: </b> {{$applicant->stdsuburb}}</p>
                                        <p for="userHomeAddress" class="input-group-text"> <b>State & Postcode: </b> {{$applicant->stdpostcode}}</p>
                                        <p for="userHomeAddress" class="input-group-text"> <b>Telephone Number: </b> {{$applicant->stdtelnum}}</p>
                                        <p for="userHomeAddress" class="input-group-text"> <b>Email Address: </b> {{$applicant->stdemail}}</p>
                                        <p for="userHomeAddress" class="input-group-text"> <b>Date of Birth: </b> {{$applicant->stddob}}</p>
                                        <p for="userHomeAddress" class="input-group-text"> <b>Sex: </b> {{$applicant->sex}}</p>
                                    </div>
                                </div>
                                <div class="p-1 mt-4 emergencyContactDetails gap">
                                    <div class="mainFormHeadings emergencyHeading">
                                        <h3>Emergency Contact Details</h3>
                                    </div>
                                    <div class="row">

                                        <p for="userHomeAddress" class="input-group-text"> <b>Full Name: </b> {{$applicant->emergencycontacts->fullName}}</p>


                                        <p for="userHomeAddress" class="input-group-text"> <b>Relationship: </b> {{$applicant->emergencycontacts->relationship}}</p>


                                        <p for="userHomeAddress" class="input-group-text"> <b>Contact Number: </b> {{$applicant->emergencycontacts->contactNum}}</p>


                                        <p for="userHomeAddress" class="input-group-text"> <b>Mobile: </b> {{$applicant->emergencycontacts->mobile}}</p>

                                        <div class="d-flex mt-4" style="align-items: center;">



                                            <p for="userHomeAddress" class="input-group-text"> <b>In the event of an emergency do you give ANE College
                                                    permission to organise emergency transport and treatment and agree to pay all costs related to the emergency?: </b> {{$applicant->emergencycontacts->emergency_pay}}</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="eduAgent gap">
                                    <div class=" mainFormHeadings">
                                        <h3>Education Agent / Representative</h3>

                                    </div>
                                    <div class="row">


                                        <p for="userHomeAddress" class="input-group-text"> <b>Are you applying through agent?: </b> {{$applicant->applicationagents->apply_through_agent}}</p>


                                        <p for="userHomeAddress" class="input-group-text"> <b>Organization Name?: </b> {{$applicant->applicationagents->orgName}}</p>



                                        <p for="userHomeAddress" class="input-group-text"> <b>Contact Number: </b> {{$applicant->applicationagents->agentCnum}}</p>



                                    </div>
                                </div>
                                <div class="eduQualifications mt-4 gap">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <h3>Education</h3>

                                            <div class="educationContent">

                                                <p for="userHomeAddress" class="input-group-text"> <b>What is your highest COMPLETED school level?: </b> {{$applicant->applicationeducation->higher_edu}}</p>

                                                <p for="userHomeAddress" class="input-group-text"> <b>What YEAR did you complete the relevant qualification: </b> {{$applicant->applicationeducation->yearCompletion}}</p>

                                                <p for="userHomeAddress" class="input-group-text"> <b>Are you still attending secondary school?: </b> {{$applicant->applicationeducation->secondary}}</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <h3>Previous Qualification</h3>


                                        <p for="userHomeAddress" class="input-group-text"> <b>Qualifications that you have successfully completed: </b> {{$applicant->applicationeducation->prevquali}}</p>
                                    </div>
                                    <div class="col-md-4">

                                        <h3>Employment</h3>


                                        <p for="userHomeAddress" class="input-group-text"> <b>What is your current employment status: </b> {{$applicant->applicationeducation->employment}}</p>
                                    </div>
                                </div>
                        </div>
                        <!-- language and cultural diversity -->
                        <div class="languageNculture mt-4 gap">

                            <h3>Language and Cultural Diversity</h3>

                            <div class="row">

                                <p for="userHomeAddress" class="input-group-text"> <b>Country of Birth: </b> {{$applicant->applicationcultural->langbirthCoun}}</p>



                                <p for="userHomeAddress" class="input-group-text"> <b>Do you have Australian Citizenship?: </b> {{$applicant->applicationcultural->ausCtzen}}</p>



                                <p for="userHomeAddress" class="input-group-text"> <b>Are you of Australian Aboriginal or Torres Strait Islander origin?: </b> {{$applicant->applicationcultural->ausAbor}}</p>


                                <p for="userHomeAddress" class="input-group-text"> <b>Are you of Australian Aboriginal?: </b> {{$applicant->applicationcultural->onlyAbor}}</p>


                                <p for="userHomeAddress" class="input-group-text"> <b>Are you of Torres Strait Islander origin?: </b> {{$applicant->applicationcultural->onlyTorres}}</p>



                                <p for="userHomeAddress" class="input-group-text"> <b>How well do you speak English? </b> {{$applicant->applicationcultural->englanguage}}</p>


                                <p for="userHomeAddress" class="input-group-text"> <b>Main language spoken at home if not English: </b> {{$applicant->applicationcultural->otherlanguages}}</p>

                            </div>

                        </div>


                        <!-- language and cultural diversity -->
                        <div class="languageNculture mt-4 gap">
                            <div class="personalDetailsHead mainFormHeadings">
                                <h3>Program History</h3>
                            </div>
                            <div class="row">

                                <p><b>Program History :</b>{{$applicant->applicationeducation->proghistory}}</p>

                                <p><b>Do you wish to apply for Recognition of Prior Learning? :</b>{{$applicant->applicationeducation->priorlearn}}</p>

                            </div>
                        </div>



                        <!-- Disability -->
                        <div class="languageNculture mt-4 gap">
                            <div class="personalDetailsHead mainFormHeadings">
                                <h3>Disability</h3>
                            </div>
                            <div class="row">

                                <p><b>Do you consider yourself to have a disability, impairment or long-term condition? :</b>{{$applicant->is_disable}}</p>

                                <p><b>If YES, then please indicate the areas of disability, impairment or long-term condition (You may indicate more than one
                                        area.): </b>
                                        @if (!is_null($applicant->disable))
                                            @foreach ($applicant->disable as $item)
                                                {{$item}}
                                            @endforeach
                                        @else
                                            N/A
                                        @endif

                                           </p>


                            </div>
                        </div>



                        <!-- English Proficieny test -->
                        <div class="englishTest mt-4 gap">
                            <div class=" mainFormHeadings">
                                <h3>English Proficieny Test</h3>
                            </div>
                            <div class="row">
                                <p><b>Test :</b>@if ($applicant->applicationeducation->ieltsscr) IELTS @endif
                                                @if ($applicant->applicationeducation->ptescr) PTE @endif
                                                @if ($applicant->applicationeducation->toeflscr) TOFEL @endif


                            </p>

                                <p><b>Score :</b>
                                    @if ($applicant->applicationeducation->ieltsscr) {{$applicant->applicationeducation->ieltsscr}}@endif
                                    @if ($applicant->applicationeducation->ptescr) {{$applicant->applicationeducation->ptescr}}@endif
                                    @if ($applicant->applicationeducation->toeflscr) {{$applicant->applicationeducation->toeflscr}}@endif

                                </p>

                                <p><b>Year :</b>
                                    @if ($applicant->applicationeducation->ieltsyear) {{$applicant->applicationeducation->ieltsyear}}@endif
                                    @if ($applicant->applicationeducation->pteyear) {{$applicant->applicationeducation->pteyear}}@endif
                                    @if ($applicant->applicationeducation->tofelyear) {{$applicant->applicationeducation->tofelyear}}@endif

                                </p>
                            </div>
                        </div>



                        <!-- Proposed Study -->
                        <div class="proposedStudy mt-4 gap">
                            <div class=" mainFormHeadings">
                                <h3>Proposed Study</h3>
                            </div>
                            <div class="mt-4">

                            <p><b>Proposed Study: </b>
                                @if (!is_null($applicant->applicationeducation->course))


                                        @foreach ($applicant->applicationeducation->course as $item)
                                            {{$item}}
                                        @endforeach
                            @else
                            N/A
                               @endif


                                </p>
                            </div>
                        </div>



                        <!-- Proposed Study -->
                        <div class="proposedStudy mt-4 gap">
                            <div class=" mainFormHeadings">
                                <h3>Preferred intake date</h3>
                            </div>
                            <p><b>Preferred intake date :</b>
                         @if (!is_null($applicant->applicationeducation->intake))
                                @foreach ($applicant->applicationeducation->intake as $item)
                               {{$item}}
                                @endforeach
                        @else
                        N/A
                        @endif
                            </p>

                        </div>



                        <!-- Photography Consent -->
                        <div class="proposedStudy mt-4 gap">
                            <div class=" mainFormHeadings">
                                <h3>Photography Consent</h3>
                            </div>


                            <p><b>I consent to having my photograph used in documents for advertising for this organisation. :</b>{{$applicant->photographyConsent->photoConsent}}</p>
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
                            <div class="noteMessage">
                                <p class="highlightNote">
                                    Please Note ANE College does not accept Cash Payments under any circumstances. No
                                    responsibility will be taken if cash
                                    is paid to any person.

                                    All payments by Bank Transfer Only. Minimum payment from 1 July 2020 for any COE issue will
                                    be - $3,150.00

                                    Please check student eligibility for entry at <a target="_blank" href="http://www.training.gov.au">www.training.gov.au</a>
                                </p>
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
                                        <td>Student ID</td>
                                        <td>$25</td>
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
                                        <p><b>Situation</b></p>
                                        <div class="col-md-6">
                                            <p>Student withdraws their visa application on request from ANE college.</p>
                                        </div>
                                        <div class="col-md-6">
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


                                    <div class="borderbottomDiv d-flex justify-content-between row makegreyBg">
                                        <div class="col-md-6">
                                            <p><b>Situation</b></p>
                                            <p>Student cannot start their course on time because the Visa Application

                                                processing is delayed by circumstances beyond the student’s control.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><b>Refund</b></p>
                                            <ul>
                                                <li>Student is subjected to No Refund. </li>

                                                <li>If Application for Deferral of Enrolment is submitted, ANE college will
                                                    defer enrolment and provide new documentation
                                                    for the next Commencement Date.</li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="borderbottomDiv d-flex justify-content-between row">
                                        <p><b>Situation</b></p>
                                        <div class="col-md-6">
                                            <p>Student’s visa is cancelled because they fail to comply with enrolment conditions

                                                or breach their visa conditions.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><b>Refund</b></p>
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
                                                <p><b>Situation</b></p>
                                                <ul>
                                                    <li>ANE college cancels the Agreed Course but offers an alternative

                                                        equivalent course at no extra cost to the student.</li>
                                                    <li>Student chooses to Accept the offer of the alternative course.</li>
                                                </ul>
                                            </div>
                                            <div class=" col-md-6">
                                                <p><b>Refund</b></p>
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
                                                <p><b>Situation</b></p>
                                                <ul>
                                                    <li>ANE college cancels the Agreed Course but offers an alternative

                                                        equivalent course at no extra cost to the student.</li>
                                                    <li>Student chooses to Accept the offer of the alternative course.</li>
                                                </ul>
                                            </div>
                                            <div class=" col-md-6">
                                                <p>Refund</p>
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
                                        <div class="borderbottomDiv d-flex justify-content-between row">
                                            <div class=" col-md-6">
                                                <p><b>Situation</b></p>
                                                <p>Cancellation/Withdrawal before or after the Commencement Date of a course

                                                    which is part of a package program.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Refund</b></p>
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
                                                <p><b>Situation</b></p>
                                                <p>Cancellation of CoE and Reporting for breach of student visa conditions,

                                                    conditions of enrolment and/or National Standards (Unsatisfactory
                                                    Attendance,

                                                    Unsatisfactory Academic Progress, Non-payment of Fees, etc.)</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Refund</b></p>
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
                                                <p><b>Situation</b></p>
                                                <p>Cancellation/Withdrawal due to demonstrated Compassionate and/or Compelling
                                                    Circumstances and approved by ANE college.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Refund</b></p>
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
                                        <div class="borderbottomDiv d-flex justify-content-between row">
                                            <div class=" col-md-6">
                                                <p><b>Situation</b></p>
                                                <p>CoE is cancelled as a result of a students’ enrolment cancellation/withdrawal

                                                    more than 8 weeks (56 days) before the commencement date of their non-

                                                    package course.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Refund</b></p>
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
                                                <p><b>Situation</b></p>
                                                <p>CoE is cancelled for a non-packaged course as a result of a students’
                                                    enrolment cancellation/withdrawal more than 4 weeks (28 days) but less than 8 weeks.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Refund</b></p>
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
                                                <p><b>Situation</b></p>
                                                <p>CoE is cancelled for a no packaged course as a result of their enrolment

                                                    cancellation/withdrawal less than 2 weeks (14 days)</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Refund</b></p>
                                                <p>Before, or after the commencement date of their non-package course, students
                                                    are
                                                    subjected to <b>No-Refund</b> of their
                                                    pre-paid Course Tuition Fees and Materials Fee.</p>

                                            </div>
                                        </div>

                                        <!--  -->
                                        <div class="borderbottomDiv d-flex justify-content-between row makegreyBg">

                                            <div class=" col-md-6">
                                                <p><b>Situation</b></p>
                                                <p>CoE is cancelled as a result of a breach of student visa conditions,
                                                    conditions

                                                    of enrolment and/or National Code Standards (Unsatisfactory Attendance,

                                                    Unsatisfactory Academic Progress, Non-payment of Fees, etc.)</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Refund</b></p>
                                                <p>Student is subjected to <b>No Refund</b> of their pre-paid Course Tuition
                                                    Fees
                                                    and Materials Fee.</p>
                                            </div>
                                        </div>


                                        <!--  -->
                                        <div class="borderbottomDiv d-flex justify-content-between row">

                                            <div class=" col-md-6">
                                                <p><b>Situation</b></p>
                                                <p>CoE is cancelled due to demonstrated compassionate and/or compelling

                                                    circumstances</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><b>Refund</b></p>
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
                                        <!-- <input class="form-control signNdate" type="text"> -->
                                        <p class="mt-1"><b>Applicant Signature: </b></p>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <!-- <input class="form-control signNdate" type="text"> -->
                                        <p class="mt-1"><b>Date: </b></p>
                                    </div>
                                </div>
                            </div>
                            <p class="secondarySpan mt-2">This agreement, and the availability of complaints and appeals
                                processes,
                                does not remove the right of the student to
                                take action under Australia’s consumer

                                protection laws.</p>
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
                                    <a target="_blank" href="http://www.usi.gov.au/create-your-USI">http://www.usi.gov.au/create-your-USI</a>
                                    . <br>

                                    If you would like ANE College to apply for a USI on your behalf you must authorise us to do
                                    so and declare that you have
                                    read the privacy information

                                    at <a target="_blank" href="http://www.usi.gov.au/Training-Organisations/Documents/Privacy-Notice.pdf">http://www.usi.gov.au/Training-Organisations/Documents/Privacy-Notice.pdf</a>
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
                                    <!-- <label for="stdname" class="input-group-text">Student Name:</label>
                            <input id="stdname" name="stdname" type="text" class="form-control"
                                placeholder="Enter Your Name"> -->
                                    <p><b>Student Name: </b>@if($applicant->applicantCommitment->stdname)
                                        {{$applicant->applicantCommitment->stdname}} @else N/A @endif
                                    </p>
                                </div>
                                <div class="yourNameDesc mt-4">
                                    <p>I, <b>Lorem Ipsum</b> will create my own USI and advise ANE
                                        College. I also give permission for ANE College to verify my records
                                        by viewing them via the USI. I understand my enrolment cannot be confirmed until I
                                        provide the USI.</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mt-4">
                                        <!-- <input name="applicantsign" class="form-control signNdate" type="text"> -->
                                        <p class="mt-1"><b>Applicant Signature:@if ($applicant->applicantCommitment->applicant_sign)
                                            {{$applicant->applicantCommitment->applicant_sign}} @else N/A
                                        @endif  </b></p>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <!-- <input name="signdate" class="form-control signNdate" type="text"> -->
                                        <p class="mt-1"><b>Date:@if ($applicant->applicantCommitment->date_of_sign)
                                            {{$applicant->applicantCommitment->date_of_sign}} @else N/A
                                        @endif
                                        </b>
                                    </p>
                                    </div>
                                </div>
                            </div>


                            <!--  -->
                            <div class="mt-3 sectionBPart">

                                <p><b>Section B (Giving permission to ANE College to create your USI)</b></p>



                                <div class="yourNameDescB mt-4">
                                    <p>I @if ($applicant->applicantCommitment->stdnameB)
                                        {{$applicant->applicantCommitment->stdnameB}} @else N/A
                                    @endif , <b></b> authorise ANE College to apply pursuant to sub-section
                                        9(2) of the Student

                                        Identifiers Act 2014, for a USI on my behalf. I have read, and I consent to the
                                        collection, use and disclosure of my
                                        personal information pursuant

                                        to the information detailed at <a target="_blank" href="http://www.usi.gov.au/Training-Organisations/Documents/Privacy-Notice.pdf">http://www.usi.gov.au/Training-Organisations/Documents/Privacy-Notice.pdf</a>
                                        .</p>
                                    <p class="mt-2"> <b>One of the document copy:</b> @if ($applicant->applicantCommitment->mydocs)
                                        {{$applicant->applicantCommitment->mydocs}} @else N/A
                                    @endif   </p>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <!-- <input type="radio" name="mydocs" id="license" type="checkbox">
                                    <label class="nobgLabel" for="license">Driving License</label> -->
                                            <p class="mt-1"><b>Driving License: </b></p>
                                        </div>


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mt-4">
                                        <!-- <input class="form-control signNdate" name="applicant_signB" type="text"> -->
                                        <p class="mt-1"><b>Applicant Signature: </b>  @if ($applicant->applicantCommitment->applicant_signB)
                                            {{$applicant->applicantCommitment->applicant_signB}} @else N/A
                                        @endif</p>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <!-- <input class="form-control signNdate" name="date_of_signB" type="text"> -->
                                        <p class="mt-1"><b>Date: </b>@if ($applicant->applicantCommitment->date_of_signB)
                                            {{$applicant->applicantCommitment->date_of_signB}} @else N/A
                                        @endif </p>
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
                                        <!-- <th>Postal Address :</th> -->
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>enrolmentmanager@ane.edu.au</p>
                                            </td>
                                            <td style="margin-left: 12px;">
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


                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
