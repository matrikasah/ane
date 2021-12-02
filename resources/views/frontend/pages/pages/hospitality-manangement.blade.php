@extends('frontend.master')
@section('content')


	<section class="featured-img">
		<img src="{{ asset('image/course-featured.jpg') }}">
		<div class="overlap-featured-breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-7">
						<h1 class="innerpage-title">Courses</h1>
						<p>We offer you best the courses in town</p>
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
						    <li class="breadcrumb-item"><a href="{{route('course')}}">Course</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Diploma of Hospitality Management</li>
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
				@include('frontend.partical.sidebar-page')				
				</div>
				<div class="col-sm-8">
					<div class="course-detail">
						<h2>SIT50416 Diploma of Hospitality Management</h2>
						<div class="button-lists bd-example">
							<div class="cat-name">Category : Hospitality Management</div>
							<div class="btn-group">
							<button type="button" class="btn btn-outline-primary hvr-bounce-to-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
							  Apply now <i class="fas fa-angle-double-right"></i>
							</button>
							<a  href="{{ asset('image/brochure_updating_20211107.pdf') }}" class="btn btn-outline-secondary hvr-bounce-to-right">Download <i class="fas fa-angle-double-down"></i></a>
							</div>
						</div>
						<img src="{{ asset('image/hospitality-management.jpg') }}" class="img-responsive course-detail-img">

						

						<div class="accordion accordion-flush content-text" id="accordionFlushExample">
						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingOne">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
							        Course Overview
							      </button>
							    </h2>
							    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">This qualification reflects the role of highly skilled senior operators who use a broad range of hospitality skills
									combined with managerial skills and sound knowledge of industry to coordinate hospitality operations. They
									operate independently, have responsibility for others and make a range of operational business decisions.
									This qualification provides a pathway to work in any hospitality industry sector as a departmental or small
									business manager. The diversity of employers includes restaurants, hotels, motels, catering operations,
									clubs, pubs, cafes, and coffee shops. This qualification allows for multiskilling and for specialisation in
									accommodation services, cookery, food and beverage and gaming.
									Possible job titles and to reflect the specialisation chosen include:
									<ul>
										<li><i class="fas fa-angle-double-right"></i>cafe manager</li>
										<li><i class="fas fa-angle-double-right"></i>chef de cuisine</li>
										<li><i class="fas fa-angle-double-right"></i>chef patissier</li>
										<li><i class="fas fa-angle-double-right"></i>kitchen manager</li>
										<li><i class="fas fa-angle-double-right"></i>restaurant manager</li>
										<li><i class="fas fa-angle-double-right"></i>sous chef</li>
										<li><i class="fas fa-angle-double-right"></i>unit manager catering operations</li>
									</ul>
									The latest release of the qualification and packaging rules can be found at the following link:
									https://training.gov.au/Training/Details/SIT50416</div>
							    </div>
						  </div>
						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingTwo">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
							        Entry requirements
							      </button>
							    </h2>
							    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">ANE college has following entry requirements, as international students must:
									<ul>
										<li>
											<i class="fas fa-angle-double-right"></i> Be at least 18 years of age.
										</li>
										<li>
											<i class="fas fa-angle-double-right"></i> Have successfully completed an AQF Level 3 qualification in the past three years.
										</li>
										<li>
											<i class="fas fa-angle-double-right"></i> Participate in a course entry interview to determine suitability for the course and student    needs.
										</li>
										<li>
											<i class="fas fa-angle-double-right"></i> Have an IELTS* score of 5.5 (test results must be no more than 2 years old).
										</li>
										<li>
											<i class="fas fa-angle-double-right"></i> Note that other English language tests such as PTE and TOEFL can be accepted. You are required to provide your results so that we can confirm they are equivalent to IELTS 5.5.
										</li>
									</ul>
								</div>
						    </div>
						  </div>
						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingThree">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
							        Target group
							      </button>
							    </h2>
							    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">ANE college welcomes all international students, who
									meet our entry requirements, are:
									<ul>
										<li>
											<i class="fas fa-angle-double-right"></i> Seeking to pursue or further a career in hospitality
									 management.
										</li>
										<li>
											<i class="fas fa-angle-double-right"></i> Seeking to enter a new industry sector.
										</li>
										<li>
											<i class="fas fa-angle-double-right"></i> Seeking a pathway to higher level of qualifications
										</li>
									</ul>
								</div>
						    </div>
						  </div>
						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingFour">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
							        Delivery site
							      </button>
							    </h2>
							    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">This course will be delivered in a classroom at Suite 67 &
									68 Level 6, 8 - 24 Kippax Street Surry Hills NSW 2010.
									</div>
							    </div>
						  </div>
						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingFive">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
							        Course structure
							      </button>
							    </h2>
							    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">The SIT50416 Diploma of Hospitality Management
									requires the successful completion of fifteen (15) core
									units and thirteen (13) elective units. Electives for this
									qualification have been chosen by Australian National
									Education to ensure that students achieve a broad range
									of skills and knowledge in hospitality management.
									Units included in this qualification are as follows. Please
									note that due to the entry requirements, you will have
									completed 9 of the required units already and therefore
									are only required to complete those units not highlighted
									in bold in the table above. This also means that the
									qualification is classroom based as the units requiring
									kitchen training and a work placement were completed
									in the SIT40516 Certificate IV in Commercial Cookery

									<div class="table-responsive">
										<table class="table table-striped">
											<tbody>
												<tr>
													<td>BSBDIV501</td> <td>Manage diversity in the workplace </td> <td> Core </td>
												</tr>
												<tr>
												 <td>BSBMGT517</td> <td> Manage operational plan </td> <td>Core</td>
												</tr>
												<tr>
												 <td>SITXCCS007</td> <td> Enhance customer service experiences</td> <td> Core</td>
												</tr>
												<tr>
												 <td>SITXCCS008</td> <td> Develop and manage quality customer service practices</td> <td> Core</td>
												</tr>
												<tr>
												 <td>SITXCOM005</td> <td> Manage conflict</td> <td> Core</td>
												</tr>
												<tr>
												 <td>SITXFIN003</td> <td> Manage finances within a budget</td> <td> Core</td>
												</tr>
												<tr>
												 <td>SITXFIN004</td> <td> Prepare and monitor budgets</td> <td> Core</td>
												</tr>
												<tr>
												 <td>SITXGLC001</td> <td> Research and comply with regulatory requirements </td> <td>Core</td>
												</tr>
												<tr>
												 <td>SITXHRM002</td> <td> Roster staff</td> <td> Core</td>
												</tr>
												<tr>
												 <td>SITXHRM003</td> <td> Lead and manage people</td> <td> Core</td>
												</tr>
												<tr>
												 <td>SITXMGT001</td> <td> Monitor work operations</td> <td> Core</td>
												</tr>
												<tr>
												 <td>SITXMGT002</td> <td> Establish and conduct business relationships</td> <td> Core</td>
												</tr>

												<tr>
												 <td>SITXWHS003 </td> <td>Implement and monitor work health and safety practices </td> <td>Core</td>
												</tr>
												<tr>
												 <td>SITXFSA001 </td> <td>Use hygienic practices for food safety</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITHKOP005 </td> <td>Coordinate cooking operations</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITHCCC001</td> <td> Use food preparation equipment</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITHCCC013 </td> <td>Prepare seafood dishes*</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITHCCC014 </td> <td>Prepare meat dishes* </td> <td>Elective</td>
												</tr>
												<tr>
												 <td>SITHPAT006 </td> <td>Produce desserts*</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITHCCC019 </td> <td>Produce cakes, pastries and breads*</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>BSBRES401</td> <td> Analyse and present research information </td> <td>Elective</td>
												</tr>
												<tr>
												 <td>BSBADM502 </td> <td>Manage meetings</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITXWHS002 </td> <td>Identify hazards, assess and control safety risks</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITXHRM004 </td> <td>Recruit, select and induct staff</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITXCCS006 </td> <td>Provide service to customers</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITXHRM001 </td> <td>Coach others in job skills</td> <td> Elective</td>
												</tr>
												<tr>
												 <td>SITHIND002 </td> <td>Source and use information on the hospitality industry </td> <td>Elective</td>
												</tr>
												<tr>
												 <td>BSBSUS401 </td> <td>Implement and monitor environmentally sustainable work
												practices</td> <td>
												Elective</td>
												</tr>
											</tbody>
										</table>
									</div>
									</div>
							    </div>
						  </div>
						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingSix">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
							        Course progress
							      </button>
							    </h2>
							    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">Please note that as international students, in order to meet your visa requirements, you are required to
									satisfactorily complete your course progress and class attendance’s requirements.
									For further information, please refer to International Student Handbook that also includes information on
									specific supports available for international students.
									Also, students, who are identified as being at risk of not meeting course progress and attendance
									requirements, will be provided with additional support as recorded in an intervention strategy.
									International Student Handbook is available at our website: http://www.ane.edu.au.


									
									</div>
							    </div>
						  </div>

						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingSeven">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
							        Enrolment and orientation
							      </button>
							    </h2>
							    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">Upon acceptance of a student’s application for enrolment, a Letter of Offer (including the Student
									Agreement) will be sent to you. You should carefully review the document because it will provide you with
									all necessary information about the course of study, including terms and conditions.
									Once we received your signed Letter of Offer, we will issue you an invoice of your first instalment
									requested showing, and once this has been paid, a Confirmation of Enrolment (CoE) letter will be issued
									to you.
									On the first day of each course, the Orientation and Induction session will be organised. The Orientation
									and Induction activity will include information about the campus, living in Australia, accessing our support
									services and methods for achieving success throughout the course, including course progress and
									attendance requirements.
									This course brochure should be read in conjunction with Australian National Education International
									Student Handbook. This can be found online at http://www.ane.edu.au


									
									</div>
							    </div>
						  </div>

						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingEight">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
							        Additional support
							      </button>
							    </h2>
							    <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">All students will be provided with a range of
									learning support options and resources to
									help them achieve competency. This includes:
									<ul>
										<li><i class="fas fa-angle-double-right"></i>Academic and personal support.</li>
									
										<li><i class="fas fa-angle-double-right"></i>Referral to external support services</li>
									</ul>


									
									</div>
							    </div>
						  </div>

						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingNine">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
							        Training arrangements
							      </button>
							    </h2>
							    <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">You are required to attend classes for 20 hours a week
									and complete approximately 5 hours of homework per
									week.
									Homework will include reading and general research for
									assessments.
									Timetable information will be provided in the student’s
									Letter of Offer. Students may commence this course at
									the start of any term.
									</div>
							    </div>
						  </div>

						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-headingTen">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseNine">
							        Career outcomes
							      </button>
							    </h2>
							    <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">Students who complete this course
									may be able to seek employment
									in a range of positions as indicated
									on the first page.
									</div>
							    </div>
						  </div>

						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-heading11">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
							        Assessment arrangements
							      </button>
							    </h2>
							    <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">Assessment methods used for this qualification
									will provide a range of ways for individuals to
									demonstrate that they have met the required
									outcomes including:
									<ul>
										<li><i class="fas fa-angle-double-right"></i>Projects</li>
										<li><i class="fas fa-angle-double-right"></i>Observations</li>
										<li><i class="fas fa-angle-double-right"></i>Presentations</li>
										<li><i class="fas fa-angle-double-right"></i>Report writing</li>
										<li><i class="fas fa-angle-double-right"></i>Questioning
										(oral or written)</li>
									</ul>
									At the beginning of each unit, trainers will outline
									the assessment tasks that must be completed.
									</div>
							    </div>
						  </div>

						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-heading12">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
							        Course costs
							      </button>
							    </h2>
							    <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">The costs for this course are as follows:
									Course fees: Please contact the College for more
									information
									Non-Tuition fees: May apply and can be found in the
									International Student Handbook.
									A detailed payment plan and payment arrangements
									are provided in the Letter of offer. Non-payment of
									course fees may result in cancellation of enrolment.
									Course fees do not include laptops or computer
									software
									</div>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<td colspan="3">Name of software</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Office 365 </td>
													<td>$129 annually </td>
													<td>https://products.office.com/en-au/buy/office</td>
												</tr>
											</tbody>
										</table>
										<table class="table table-striped">
											<thead>
												<tr>
													<td colspan="3">Laptop costs</td>
												</tr>
											</thead>
												<tr>
													<td>Any laptop that meets the specifications below.</td>
													<td>$450 (approximate only)  </td>
													<td>Various</td>
												</tr>
											</tbody>
										</table>
									</div>
									Laptops and software may be purchased by students through the suppliers as listed above or any other
									suppliers that offer the resources noting that costs may vary at the time of purchase.
							    </div>
						  </div>

						  <div class="accordion-item">
							    <h2 class="accordion-header" id="flush-heading13">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
							        Selection and enrolment procedures
							      </button>
							    </h2>
							    <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">To enrol for this course, you are required to complete an Enrolment
									form. The Enrolment form can be emailed or posted to students or
									being downloaded from our website.
									The enrolment form should be completed and sent to us along with
									all of required documentations.
									For more information about our selection and enrolment processes,
									please contact us.
							    </div>
						  </div>

						</div>


						<div class="accordion-item">
							    <h2 class="accordion-header" id="flush-heading14">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
							        Course credit
							      </button>
							    </h2>
							    <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">Students may apply for recognition of existing qualifications or skills, knowledge and experience (credit
									transfer or recognition of prior learning) as per the information included in our International Student
									Handbook, which is available at http://www.ane.edu.au
									For international students, the granting of course credit may affect course fees as well as the duration of
									the course.
									The result of an application for credit and any changes to fees or course duration will be advised to
									students in writing.
									If course credit is granted following issuance of the Confirmation of Enrolment, students will receive a new
									Confirmation of Enrolment showing a reduced duration.
									For any questions about course credit, contact us at the details shown below.

							    </div>
						  </div>

						</div>


						<div class="accordion-item">
							    <h2 class="accordion-header" id="flush-heading15">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
							        Laptop specifications
							      </button>
							    </h2>
							    <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">Students should also note the following minimum specifications for a laptop which students must bring to each class
							      	<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<td>Windows:</td>
													<td>Minimum requirements</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Processor </td>
													<td>Intel® or AMD processor with 64-bit support*; 2 GHz or faster processor
													Microsoft Windows 7 with Service pack 1 (64-bit), Windows 10 (Version
													1709 or later) </td>
												</tr>
												<tr>
													<td>Operating system </td>
													<td>Microsoft Windows 7 with Service pack 1 (64-bit), Windows 10 (Version
															1709 or later)</td>
												</tr>
												<tr>
													<td>RAM </td>
													<td> 2 GB or more of RAM (8 GB recommended)</td>
												</tr>
												<tr>
													<td>Hard disk space </td>
													<td> 3.1 GB or more of available hard-disk space for 64-bit installation;
														additional free space required during installation.</td>
												</tr>
												<tr>
													<td>Monitor resolution </td>
													<td> 1024 x 768 display (1280x800 recommended) with 16-bit color and 512
													MB or more of dedicated VRAM; 2 GB is recommended.
													</td>
												</tr>
												<tr>
													<td>Graphics processor
														acceleration requirements </td>
													<td> OpenGL 2.0-capable system
													</td>
												</tr>
												<tr>
													<td>Internet</td>
													<td>Internet connection and registration are necessary for required software
													activation, validation of subscriptions, and access to online services.</td>
												</tr>
											</tbody>
										</table>


										<table class="table table-striped">
											<thead>
												<tr>
													<td>MacOS:</td>
													<td>Minimum requirements</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Processor </td>
													<td>Multicore Intel processor with 64-bit support</td>
												</tr>
												<tr>
													<td>Operating system </td>
													<td>MacOS version 10.12 (Sierra), macOS version 10.13 (High Sierra), or
															macOS version 10.14 (Mojave).</td>
												</tr>
												<tr>
													<td>RAM </td>
													<td>2 GB or more of RAM (8 GB recommended)</td>
												</tr>
												<tr>
													<td>Hard disk space </td>
													<td>4 GB or more of available hard-disk space for 64-bit installation;
													additional free space required during installation.</td>
												</tr>
												<tr>
													<td>Monitor resolution </td>
													<td>1024 x 768 display (1280x800 recommended) with 16-bit color and 512
														MB or more of dedicated VRAM; 2 GB is recommended
														</td>
												</tr>
												<tr>
													<td>Graphics processor
													acceleration requirements </td>
													<td> OpenGL 2.0-capable system

													</td>
												</tr>
												<tr>
													<td>Internet</td>
													<td>Internet connection and registration are necessary for required software
																activation, validation of subscriptions, and access to online services.</td>
												</tr>
											</tbody>
										</table>
										International students are also required to obtain Overseas Health Insurance Cover before arriving in
										Australia. ANE college introduces details of OSHC providers in our International Student Handbook.
										You will be provided with further information about it once you have started your course.
										Additional costs associated with living in Australia are outlined in our International Student Handbook.
										Students are strongly encouraged to review these costs in relation to their budgets. Further information
										can be found at https://www.studyinaustralia.gov.au/english/live-in-australia/living-costs.
									</div>
							    </div>
						  </div>

						</div>

						<div class="accordion-item">
							    <h2 class="accordion-header" id="flush-heading16">
							      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse16" aria-expanded="false" aria-controls="flush-collapse16">
							        Contact details
							      </button>
							    </h2>
							    <div id="flush-collapse16" class="accordion-collapse collapse" aria-labelledby="flush-heading16" data-bs-parent="#accordionFlushExample">
							      <div class="accordion-body">Call our office on +61 2 92815929 or email us at sydney.campus@ane.edu.au

							    </div>
						  </div>

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
				  		<img src="{{ asset('image/contact.svg') }}">
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
				  		<img src="{{ asset('image/consult.svg') }}">
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
				  		<img src="{{ asset('image/admission.svg') }}">
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