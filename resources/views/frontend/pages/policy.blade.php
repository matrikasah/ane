@extends('frontend.master')
@section('content')


<section class="featured-img">
    <img src="{{ asset('image/course-featured.jpg') }}">
    <div class="overlap-featured-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-7">
                    <h1 class="innerpage-title">Our Compliance and Policy</h1>
                    <p>Our Compliance and Policies</p>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Compliance and Policy</li>
                      </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="innerpage-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="sidebar">
                    <div class="title">
                        <h3>Our Compliance and Policy</h3>
                        <h1>Our Compliance and Policies</h1>
                    </div>
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#international1" type="button" role="tab" aria-controls="international1" aria-selected="true">Privacy Policy <i class="fas fa-angle-double-right"></i></button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#international2" type="button" role="tab" aria-controls="international2" aria-selected="false">Return Policy <i class="fas fa-angle-double-right"></i></button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#international3" type="button" role="tab" aria-controls="international3" aria-selected="false">Terms & Condition <i class="fas fa-angle-double-right"></i></button>
                      </li>
                      
                    </ul>
                </div>				
            </div>
            <div class="col-sm-8">
                
                    <div class="tab-content content-text" id="myTabContent">
                      <div class="tab-pane fade show active" id="international1" role="tabpanel" aria-labelledby="home-tab">	
                              <div class="small-title title">
                                <h3>Privacy Policy</h3>
                                <h1>Start your journey to ANE College</h1>
                            </div>
                            <p class="para">Australian National Education Pty Ltd (ANE) College is committed to providing quality education to you and this policy outlines our ongoing obligations to you in respect of how we manage your Personal Information.
                            We have adopted the Australian Privacy Principles (APPs) contained in the Privacy Act 1988 (Cth) (the Privacy Act). The NPPs govern the way in which we collect, use, disclose, store, secure and dispose of your Personal Information.
                            A copy of the Australian Privacy Principles may be obtained from the website of The Office of the Australian Information Commissioner at www.aoic.gov.au</p>

                            <h3>What is Personal Information and why do we collect it?</h3>
                            <p class="para">
                            Personal Information is information or an opinion that identifies an individual. Examples of Personal Information we collect include names, addresses, email addresses, phone and facsimile numbers.</p>
                            <p class="para">
                            This Personal Information is obtained in many ways including interviews, correspondence, by telephone and facsimile, by email, via our website www.ane.edu.au, from your website, from media and publications, from other publicly available sources, from cookies- delete all that aren’t applicable and from third parties. We don’t guarantee website links or the policy of authorised third parties.</p>
                            <p class="para">
                            We collect your Personal Information for the primary purpose of providing our services to you, providing information to our clients and marketing. We may also use your Personal Information for secondary purposes closely related to the primary purpose, in circumstances where you would reasonably expect such use or disclosure. You may unsubscribe from our mailing/marketing lists at any time by contacting us in writing.
                            When we collect Personal Information we will, where appropriate and where possible, explain to you why we are collecting the information and how we plan to use it.</p>

                            <h3>Sensitive Information</h3>
                            <p class="para">Sensitive information is defined in the Privacy Act to include information or opinion about such things as an individual's racial or ethnic origin, political opinions, membership of a political association, religious or philosophical beliefs, membership of a trade union or other professional body, criminal record or health information.</p>
                            <div class="bold-text">Sensitive information will be used by us only:</div>
                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>For the primary purpose for which it was obtained</li>
                                    <li><i class="fas fa-angle-double-right"></i>For a secondary purpose that is directly related to the primary purpose</li>
                                    <li><i class="fas fa-angle-double-right"></i>With your consent; or where required or authorised by law.</li>
                                </ul>
                            <h3>Third Parties</h3>
                            <p class="para">Where reasonable and practicable to do so, we will collect your Personal Information only from you. However, in some circumstances, we may be provided with information by third parties. In such a case we will take reasonable steps to ensure that you are made aware of the information provided to us by the third party.</p>
                            <h3>Disclosure of Personal Information</h3>
                            <p class="para">Your Personal Information may be disclosed in a number of circumstances including the following:</p>
                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>Third parties where you consent to the use or disclosure; and</li>
                                    <li><i class="fas fa-angle-double-right"></i>Where required or authorised by law.</li>
                                </ul>
                            <h3>Security of Personal Information</h3>
                            <p class="para">Your Personal Information is stored in a manner that reasonably protects it from misuse and loss and from unauthorized access, modification or disclosure.</p>
                            <p class="para">When your Personal Information is no longer needed for the purpose for which it was obtained, we will take reasonable steps to destroy or permanently de-identify your Personal Information. However, most of the Personal Information is or will be stored in client files which will be kept by us for a minimum of 7 years.</p>
                            <h3>Access to your Personal Information</h3>
                            <p class="para">You may access the Personal Information we hold about you and update and/or correct it, subject to certain exceptions. If you wish to access your Personal Information, please contact us in writing.</p>
                            <p class="para">Australian National Education Pty Ltd (ANE) College will not charge any fee for your access request but may charge an administrative fee for providing a copy of your Personal Information.</p>
                            <p class="para">In order to protect your Personal Information, we may require identification from you before releasing the requested information.</p>
                            <h3>Maintaining the Quality of your Personal Information</h3>
                            <p class="para">It is important to us that your Personal Information is up to date. We will take reasonable steps to make sure that your Personal Information is accurate, complete and up-to-date. If you find that the information we have is not up to date or is inaccurate, please advise us as soon as practicable so we can update our records and ensure we can continue to provide quality services to you.</p>
                            <h3>Policy Updates</h3>
                            <p class="para">This Policy may change from time to time and is available on our website.</p>
                            <h3>Privacy Policy Complaints and Enquiries</h3>
                            <p class="para">If you have any queries or complaints about our Privacy Policy please contact us at:
                            Suite 67 & 68 Level 6, 8-24 Kippax Street Surry Hills NSW 2010
                            sydney.campus@ane.edu.au
                            +61 2 9281 5929</p>
                      
                              <p class="para">
                            Australian National Education Pty Ltd (ANE) College is committed to providing quality education to you and this policy outlines our ongoing obligations to you in respect of how we manage your Personal Information.
                            We have adopted the Australian Privacy Principles (APPs) contained in the Privacy Act 1988 (Cth) (the Privacy Act). The NPPs govern the way in which we collect, use, disclose, store, secure and dispose of your Personal Information.
                            A copy of the Australian Privacy Principles may be obtained from the website of The Office of the Australian Information Commissioner at www.aoic.gov.au

                            </p>

                            
                      </div>
                      <div class="tab-pane fade" id="international2" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="small-title title">
                                <h3>Refund Policy</h3>
                                <h1>Start your journey to ANE College</h1>
                            </div>
                              <p class="para">This refund policy applies to all course monies paid to the College and includes any course monies paid to an education agent to be remitted to the College as per the Letter of Offer. This policy applies to both commencing and extending students.</p>
                            <p class="para">In the event of student/agent requesting to make any change to the agreed starting date by email, telephone, and any communication from ANE College about the change/deferment to the agreed starting date, shall be binding and in such cases for Refund purposes.</p>
                            <p class="para">
                            The policy covers full and partial refunds, refunds in the event of student default and in the case of provider default.</p>
                             
                            <p class="para">A copy of this policy will be provided to students before a contract/agreement is signed or an amount of money is paid for a registered course. The policy is provided on the Student Application form, Student Handbook, Acceptance of Offer/Written Agreement and available on the ANE College website.</p>
                             
                            <p class="para">As a student of ANE College, you are responsible for the understanding of this policy upon commencing your course. However, we realize that exceptional circumstances can take place about the character of the training services we provide.</p>

                            <h3>Definitions</h3>

                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>The word "Course" refers to the whole period for which the Confirmation of Enrolments or letter of offer is issued.</li>
                             
                                    <li><i class="fas fa-angle-double-right"></i>“Tuition fees” are fees that are causally related to the provision of course.</li>
                             
                                    <li><i class="fas fa-angle-double-right"></i>Agreed Starting Date means, unless and otherwise defined in the terms and conditions, the day of scheduled course commencement, or a later day agreed between ANE College and the student such day being the commencement day in the offer letter or the Students Confirmation of Enrolment. (ECOE). The agreed starting date will be the initial course start/agreed starting date before any change/deferment is made.</li>
                             
                                    <li><i class="fas fa-angle-double-right"></i>Package course/program means a package of courses of study comprising more than one course, all of which are offered by ANE College and in which the student is enrolled. Where the student is enrolled in a package course/program, then the agreed starting date is the commencement date of the first course in which the student is enrolled in.</li>
                                </ul>


                                <h3>IMPORTANT INFORMATION</h3>
                                 
                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>All requests for a refund must be submitted in the appropriate 'Refund Application Form' to ANE College Administration Office.</li>
                                 
                                    <li><i class="fas fa-angle-double-right"></i>Refund requests must be accompanied by official documentary evidence. If the student is unable to access the refund form, a refund request should be made in writing and emailed, faxed, or posted to the College Administration Office.</li>
                                 
                                    <li><i class="fas fa-angle-double-right"></i>The refund will only be made in the name of the person who paid the student fees unless the student gives a written direction to the college to pay the refund to someone else.</li>

                                    <li><i class="fas fa-angle-double-right"></i>Refunds are made in accordance with the policy below and full refunds of amounts owed to the students will be made within 4 business weeks.</li>
                                     
                                    <li><i class="fas fa-angle-double-right"></i>All charges incurred by ANE College in issuing refund will be met by the student.</li>
                                     
                                    <li><i class="fas fa-angle-double-right"></i>ANE College will endeavour to contact students who have not requested a refund within 4 weeks of leaving the College at the last known contact address, phone, and email, and keep such evidence on the student file.</li>
                                     
                                    <li><i class="fas fa-angle-double-right"></i>In the instance of Provider or Student default, the reporting timelines stated in the Policy will be adhered to.</li>
                                     
                                    <li><i class="fas fa-angle-double-right"></i>Refunds will only be in Australian dollars.</li>
                                     
                                    <li><i class="fas fa-angle-double-right"></i>ANE College reserves the right to withhold granting the award attained by the student if student fees remain outstanding.</li>
                                    <li><i class="fas fa-angle-double-right"></i>ANE College’s dispute resolution processes do not circumscribe the student’s rights to pursue other legal remedies.</li>
                                    <li><i class="fas fa-angle-double-right"></i>Refer to the student complaints & appeal procedure on the ANE College’s website and in the Student
                                    Handbook if you wish to appeal the refund policy.</li>
                                    <li class="sub-list"><i class="fas fa-angle-double-right"></i>ANE College will consider the following exceptional circumstances as grounds for a student’s
                                    <ul>
                                        <li><i class="fas fa-angle-right"></i>Severe life-threatening illness or disability</li>
                                            <li><i class="fas fa-angle-right"></i>Death of an immediate family member (i.e., Mother, Father, Brother, Sister or relative where it can be shown that severe hardship may be felt by the family if study did occur).</li>
                                            <li> <span class="bold-text">Note:</span> When acceptable documentary evidence is produced, refunds will be at the discretion of ANE College. ANE College does not provide refunds for:
                                             </li>
                                            <li><i class="fas fa-angle-right"></i>Application fees, accommodation assistance fees & airport reception fees.</li>
                                            <li><i class="fas fa-angle-right"></i>Withdrawal from course after the course has commenced.</li>
                                            <li><i class="fas fa-angle-right"></i>Change in students’ work hours.</li>
                                            <li><i class="fas fa-angle-right"></i>Inconvenience of travel to class.</li>
                                            <li><i class="fas fa-angle-right"></i>Moving interstate or overseas.</li>
                                            <li><i class="fas fa-angle-right"></i>Job changes or retrenchment.</li>
                                            <li><i class="fas fa-angle-right"></i>Students who leave before completing the course &/or qualification</li>
                                            <li><i class="fas fa-angle-right"></i>All bank charges incurred by ANE College in issuing a refund will be met by the student.</li>
                                            <li><i class="fas fa-angle-right"></i>ANE College will endeavor to contact students who have not requested a refund within 4 weeks of leaving the college and keep such evidence on the student file. If the student does not commence studies on the due date the college will advise the Secretary of DIBP via PRISMS of details of the student who has not commenced studies within a period of 14 days.</li>
                                    </ul>
                                    </li>
                                </ul>


                                <h3>STUDENT DEFAULT</h3>

                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>A student is not eligible for a refund in the event of student default.</li>
                                 
                                    <li class="bold-text text-left">A student default when:</li>
                                    <li><i class="fas fa-angle-double-right"></i>the course starts on the agreed starting day, but the student does not attend the classes on that day (and has not previously withdrawn); Tel: +61 02 9281 5929, CRICOS Provider Code: 03859B Australia Email: sydney.campus@ane.edu.au</li>
                                    <li class="bold-text text-left">Or</li>
                                    <li><i class="fas fa-angle-double-right"></i>the student withdraws from the course (either before or after the agreed starting day),</li>
                                     
                                    <li class="bold-text text-left">Or</li>
                                    <li class="sub-list"><i class="fas fa-angle-double-right"></i>The Institute refuses to provide, or continue providing, the course to the student because of one or more of the following events:
                                        <ul>
                                            <li><i class="fas fa-angle-right"></i>the student failed to pay an amount he or she was liable to pay to the Institute,</li>
                                            <li><i class="fas fa-angle-right"></i>directly or indirectly, to undertake the course.</li>
                                            <li><i class="fas fa-angle-right"></i>the student breached a condition of his or her student visa; or</li>
                                            <li><i class="fas fa-angle-right"></i>Misbehavior by the student.</li>
                                        </ul>
                                    </li>

                                </ul>

                                <h3>STUDENT DEFAULT TIMELINES</h3>

                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>5 business days to notify the Secretary and the TPS Director (via PRISMS) of the student default.</li>
                                    <li><i class="fas fa-angle-double-right"></i>14 days to report cancellation of the student's enrolment to DOE (via PRISMS)</li>
                                    <li><i class="fas fa-angle-double-right"></i>28 days to finalize the student default obligations as set out in the written agreement with the student and</li>
                                    <li><i class="fas fa-angle-double-right"></i>A further 7 days to report the outcome of the student default (via PRISMS).</li>
                                </ul>
                                <h3>STUDENT’S RIGHTS TO APPEAL</h3>
                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>Any student who is refused a refund by ANE College may appeal within 14 days in writing to the Academic Manger.</li>
                                    <li><i class="fas fa-angle-double-right"></i>The Institute’s appeal process does not circumscribe the student’s right to pursue other legal remedies.</li>
                                    <li><i class="fas fa-angle-double-right"></i>This agreement, and the availability of complaints and appeal processes, does not remove the right of the
                                    student to act under Australia’s consumer protection laws.</li>
                                </ul>

                                <h3>CHANGE OF ADDRESS/CONTACT DETAILS</h3>
                                <p class="para">All Students are required to notify the college of a change of address, phone, or email while enrolled in the course within 7 days of a change.</p>

                                <h3>Student Default Refund Table</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                            <td>Enrolment / application $250</td><td>
                                            Non-refundable</td>
                                            </tr>
                                            <tr>
                                            <td colspan="2">Tuition Fees</td>
                                            </tr>
                                            <tr>
                                            <td>
                                            Visa refused prior to course commencement</td><td>
                                            Full refund</td>
                                            </tr>
                                            <tr>
                                            <td>
                                            Withdrawal at least 10 weeks prior to agreed start date</td><td>
                                            Full refund</td>
                                            </tr>
                                            <tr>
                                            <td>
                                            Withdrawal at least 4 weeks prior to agreed start date</td><td>
                                            75% refund</td>
                                            </tr>
                                            <tr>
                                            <td>
                                            Withdrawal less than 4 weeks prior to agreed start date</td><td>
                                            60% refund</td>
                                            </tr>
                                            <tr>
                                            <td>
                                            Withdrawal after the agreed start date</td><td>
                                            No refund</td>
                                            </tr>
                                            <tr>
                                            <td>
                                            Visa cancelled due to actions of the students</td><td>
                                            No refund</td>
                                            </tr>
                                            <tr>
                                            <td>
                                            Course withdrawn by ANE (provider default)</td><td>
                                            Full refund</td>
                                            </tr>
                                            <tr>
                                            <td>
                                            Student is unable to start the course on serious medical grounds and evidence is provided from a registered doctor at least 2 weeks prior to agreed start date</td><td>
                                            Partial / Full refund</td>
                                            </tr>
                                             <tr>
                                            <td colspan="2">
                                            All tuition fee refunds will attract $250.00 administration fee</td>
                                            </tr>

                                             

                                        </tbody>
                                    </table>
                                </div>

                                <h3>PROVIDER DEFAULT - CANCELLATION OR NON-DELIVERY OF THE COURSE</h3>
                                <ul>
                                    <li class="sub-list"><i class="fas fa-angle-double-right"></i>In the unlikely event that the College defaults, it will notify the Secretary (or delegate) and Tuition Protection Service (TPS) Director within 3 business days of the default and will have a period of 14 days to satisfy its tuition protection obligations in relation to an affected student.
                                    The College defaults when:
                                        <ul>
                                            <li><i class="fas fa-angle-right"></i>It fails to provide the course to the student on the agreed starting day; or</li>
                                            <li><i class="fas fa-angle-right"></i>the course ceases to be provided to the student any time after it starts but before it is completed; and</li>
                                            <li><i class="fas fa-angle-right"></i>The student has not withdrawn before the default day.</li>
                                        </ul>
                                </li>
                                 
                                <li><i class="fas fa-angle-double-right"></i>In the unlikely event that the College is unable to deliver the course in full, the student will be offered enrolment into an alternative course at no extra cost or, the student will be refunded the unspent portion of the tuition fees paid to date within 2 weeks of the day on which the course ceased to be provided.</li>
                                 
                                <li><i class="fas fa-angle-double-right"></i>Students have the right to choose whether they would accept a refund of tuition fees or to accept a place in an alternative course. If student chooses placement in another course, the student will sign a new written. Agreement with the college to indicate the student accepted the replacement.</li>
                                 
                                 
                                <li><i class="fas fa-angle-double-right"></i>In the unlikely event the College is unable to provide a refund or place student in an alternative course, the TPS will provide the student with options for suitable alternative courses (if any such courses are available) or if this is not possible, the student will be eligible for a refund as calculated by the TPS Director. Students in this instance are advised to contact https://tps.gov.au/StaticContent/Get/StudentInformation.</li>
                            </ul>
                                
                      </div>
                      <div class="tab-pane fade" id="international3" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="small-title title">
                                <h3>TERMS & CONDITIONS</h3>
                                <h1>Start your journey to ANE College</h1>
                            </div>
                              
                                  <h3>Application, variation and termination of these Terms and Conditions</h3>
                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>These Terms and Conditions govern the website operated and provided by Australian National College Pty Ltd (ANE College).</li>
                                    <li><i class="fas fa-angle-double-right"></i>Use of Australian National College Pty Ltd’s website by you constitutes acceptance of these Terms and Conditions</li>
                                    <li><i class="fas fa-angle-double-right"></i>Australian National College Pty Ltd may at any time, in its sole discretion, amend, vary or modify these Terms and Conditions without notice.</li>
                                    <li><i class="fas fa-angle-double-right"></i>Modifications to these Terms and Conditions will be effective immediately and any subsequent use by you of this website will constitute your acceptance of the modifications and the then-current terms and conditions of use of this website.</li>
                                    <li><i class="fas fa-angle-double-right"></i>Australian National College Pty Ltd may, without notice, terminate or suspend this website or any part of the website at any time.</li>
                                </ul>
                                <h3>Privacy</h3>
                                <p class="para">Any personal information received by Australian National College Pty Ltd will be collected and disclosed in accordance with Australian National College Pty Ltd’s Privacy Policy (as updated from time to time and available here).</p>

                                <h3>Disclaimer and Liability</h3>
                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>While Australian National College Pty Ltd provides the website and its contents in good faith, Australian National College Pty Ltd does not accept liability or responsibility for any content or material on this website, including for the accuracy, completeness, authenticity, reliability or timeliness of the content;</li>
                                    <li><i class="fas fa-angle-double-right"></i>Australian National College Pty Ltd does not represent or warrant that this website, any files obtained from or through this website are free from harmful code, computer viruses or other defects;</li>
                                    <li><i class="fas fa-angle-double-right"></i>To the extent permitted by law, Australian National College Pty Ltd expressly excludes all conditions and warranties (including warranties as to merchantability, non-infringement of intellectual property or any other rights or fitness for a particular purpose), guarantees, rights and remedies, liabilities and other terms that may be implied by custom, statute or common law in relation to any information or materials on this website or any websites linked to this website; and</li>
                                    <li><i class="fas fa-angle-double-right"></i>Australian National College Pty Ltd is not liable for any consequential losses (including any loss of revenue or profits, loss of anticipated savings, loss of data, loss of value of equipment, any penalties or fines imposed by a regulator and any loss that is indirect loss) that you suffer or for any costs, damages, expenses, loss or charges that you incur as a result of your use any information or materials on this website or any websites linked to this website.</li>
                                </ul>

                                <h3>Intellectual Property</h3>
                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>Intellectual property rights (including any copyright, trademark rights) in the content on this website, vests in Australian National College Pty Ltd, subject to any third party rights.</li>
                                    <li><i class="fas fa-angle-double-right"></i>Australian National College Pty Ltd, the Australian National College Pty Ltd’s logo, the logo, and the icon are trademarks of Australian National College Pty Ltd, registered in Australia.</li>
                                    <li><i class="fas fa-angle-double-right"></i>Nothing contained on this website is to be construed as granting a licence to use any content on this website. You may not use, reproduce or modify any content displayed on this website including Australian National College Pty Ltd’s logo or trademark/s without Australian National College Pty Ltd’s written consent.</li>
                                    <li><i class="fas fa-angle-double-right"></i>You may not pass off content from this website as your own. This includes the practice of 'Framing' this website within another website as well as copying and re-using parts of the website.</li>
                                    <li><i class="fas fa-angle-double-right"></i>No part should be reproduced, copied, stored, distributed or transmitted in any form, or by any means, including photocopying, scanning, or other mechanical or electronic methods without the prior written permission of Australian National College Pty Ltd. To seek permission, please contact sydney.campus@ane.edu.au.</li>
                                </ul>
                                <h3>Linking to other website</h3>
                                <p class="para">This website may contain links to other websites. Australian National College Pty Ltd does not warrant approval of or accept any liability or responsibility for any such websites. Access to these websites is at your own risk.</p>

                                <h3>Guidelines for linking to this website</h3>
                                <p class="para">You are welcome to put links on your website pointing to the Australian National College Pty Ltd’s website. In such case we request that you adopt the following guidelines for linking:</p>

                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>Links to Australian National College Pty Ltd’s site should usually be to the home page, i.e. https://www.ane.edu.au. Linking to other parts of the site poses some risk, as the page or service to which you link may move or become unavailable.</li>
                                    <li><i class="fas fa-angle-double-right"></i>The correct name for the website is ANE College</li>
                                    <li><i class="fas fa-angle-double-right"></i>Australian National College Pty Ltd’s logo and its variants are registered trademarks and subject to copyright. They may only be used with written permission from Australian National College Pty Ltd.</li>
                                </ul>


                                <h3>Cookies and other features of our website</h3>
                                <ul>
                                    <li><i class="fas fa-angle-double-right"></i>This website uses cookies to identify visitors to this site, gather statistical information, store user preferences, activity, and session information. Australian National College Pty Ltd uses cookies to improve security, enhance website functionality and improve its services. By using this website, you are consenting to Australian National College Pty Ltd’s use of cookies on your device.</li>
                                    <li><i class="fas fa-angle-double-right"></i>You can disable cookies in your browser settings. However, adjusting these settings may affect the functionality of this website.</li>
                                    <li class="sub-list"><i class="fas fa-angle-double-right"></i>Information stored in cookies can include:
                                    <ul>
                                        <li>
                                            <i class="fas fa-angle-right"></i>The identity of the page or services you are requesting;</li>
                                        <li>
                                            <i class="fas fa-angle-right"></i>The type of browser or operating system in use;</li>
                                        <li>
                                            <i class="fas fa-angle-right"></i>Time and date of access; and</li>
                                        <li>
                                            <i class="fas fa-angle-right"></i>The internet address of the website from which you navigated from to reach our website.</li>
                                        </ul>
                                    </li>
                                    <li class="sub-list"><i class="fas fa-angle-double-right"></i>Cookies do not store personal information such as:
                                    <ul>
                                        <li>
                                            <i class="fas fa-angle-right"></i>your name</li>
                                        <li>
                                            <i class="fas fa-angle-right"></i>email addresses</li>
                                        <li>
                                            <i class="fas fa-angle-right"></i>phone numbers</li>
                                    </ul>
                                    </li>
                                    <li><i class="fas fa-angle-double-right"></i>Australian National College Pty Ltd uses web analytics and session recording technology provided by third-party service providers such as Google Analytics and Hotjar. These services use cookies to assist us to understand how visitors access and utilise our site. For more information see Australian National College Pty Ltd’s Privacy Policy (as updated from time to time and available here).</li>
                                    <li><i class="fas fa-angle-double-right"></i>Australian National College Pty Ltd also uses JavaScript, which is a programming language that helps our website work. In order to use our website, we recommend that you have JavaScript enabled in your browser settings. To enable JavaScript in your browser, follow the instructions for your browser version here.</li>
                                </ul>

                                <h3>Governing Law</h3>
                                    <p class="para">The laws of the State of New South Wales, Australia governs these Terms and Conditions and any agreement formed under them. You and Australian National College Pty Ltd irrevocably and unconditionally submit to the non-exclusive jurisdiction of the Courts of the State of New South Wales, Australia.</p>



                            
                                    
                      </div>
                      
                    </div>
                    
                
            </div>
        </div>
    </div>
</section>


<section class="gap enrollment">
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card" data-aos="fade-up">
            <div class="card-body">
                  <div class="left">
<<<<<<< HEAD
                      <img src="image/contact.svg">
=======
                      <img src="{{ asset('image/contact.svg') }}">
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                  </div>
                  <div class="right">
                      <h5 class="card-title">Contact</h5>
                    <p class="card-text">Feel free to contact us anytime you need.</p>
                  </div>
              </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card" data-aos="fade-up">
            <div class="card-body">
                  <div class="left">
<<<<<<< HEAD
                      <img src="image/consult.svg">
=======
                      <img src="{{ asset('image/consult.svg') }}">
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                  </div>
                  <div class="right">
                      <h5 class="card-title">Consult</h5>
                    <p class="card-text">Dedicated staff are there to answer any questions.</p>
                  </div>
              </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card" data-aos="fade-up">
            <div class="card-body">
                  <div class="left">
<<<<<<< HEAD
                      <img src="image/admission.svg">
=======
                      <img src="{{ asset('image/admission.svg') }}">
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                  </div>
                  <div class="right">
                      <h5 class="card-title">Admission</h5>
                    <p class="card-text">Apply in ANE College for your interested course right away.</p>
                  </div>
              </div>
              </div>
        </div>
    </div>
</div>
</section>


@endsection