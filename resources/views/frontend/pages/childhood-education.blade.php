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
							<li class="breadcrumb-item active" aria-current="page">Diploma of Early Childhood Education and Care</li>
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
					<div class="course-features-info">
						<div class="title">
							<h3>Course Features</h3>
							<h1>Details on what we have for the course</h1>
						</div>
						<ul>
							<li class="students-feature">
								<i class="fas fa-info-circle"></i>
								<span class="label">CRICOS Course Code</span>
								<span class="value">102538F</span>
							</li>
							<li class="duration-feature">
								<i class="fas fa-clock"></i>
								<span class="label">Duration</span>
								<span class="value">104 weeks </span>
							</li>
							<li class="lectures-feature">
								<i class="fas fa-chalkboard-teacher"></i>
								<span class="label">Face to face Class</span>
								<span class="value">20 Hrs/W</span>
							</li>

							<li class="lectures-feature">
								<i class="fas fa-laptop"></i>
								<span class="label">Online Class</span>
								<span class="value">5 Hrs/W</span>
							</li>

							<li class="language-feature">
								<i class="fa fa-language"></i>
								<span class="label">Language</span>
								<span class="value">English</span>
							</li>

						</ul>
					</div>
					@include('frontend.partical.sidebar-page')
				</div>
			</div>
			<div class="col-sm-8">
					<div class="course-detail">
						<h2>CHC50113 Diploma of Early Childhood Education and Care</h2>
						<div class="button-lists bd-example">
							<div class="cat-name">Category : Childhood Education</div>
							<div class="btn-group">
								<button type="button" class="btn btn-outline-primary hvr-bounce-to-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
									Apply now <i class="fas fa-angle-double-right"></i>
								</button>
								<a href="{{ asset('image/brochure_updating_20211107.pdf') }}" class="btn btn-outline-secondary hvr-bounce-to-right">Download <i class="fas fa-angle-double-down"></i></a>
							</div>
						</div>
						<img src="{{ asset('image/childhood-education.jpg') }}" class="img-responsive course-detail-img">



						<div class="accordion accordion-flush content-text" id="accordionFlushExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingOne">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
										Course Overview
									</button>
								</h2>
								<div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">This qualification reflects the role of early childhood educators who are responsible for designing and
										implementing curriculum in early childhood education and care services. In doing so they work to
										implement an approved learning framework within the requirements of the Education and Care Services
										National Regulations and the National Quality Standard.
										They may have responsibility for supervision of volunteers or other staff.
										Under the Education and Care Services National Law (2011) the Australian Children???s Education and Care
										Quality Authority (ACECQA) publishes lists of approved early childhood education and care qualifications
										and information regarding regulatory requirements here: www.acecqa.gov.au
										The latest release of the qualification and packaging rules can be found at the following link:
									</div>
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
												<i class="fas fa-angle-double-right"></i> Participate in a course entry interview to determine suitability for the course and student needs.
											</li>
											<li>
												<i class="fas fa-angle-double-right"></i> Have an IELTS* score of 5.5 (test results must be no more than 2 years old).
											</li>
											<li>
												<i class="fas fa-angle-double-right"></i> Please, Note that other English language tests such as PTE and TOEFL can be accepted. You are required to provide your results so that we can confirm they are equivalent to IELTS 5.5.
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
											<li><i class="fas fa-angle-double-right"></i>Seeking to pursue or further a career in Child Care
												services.</li>
											<li><i class="fas fa-angle-double-right"></i>Seeking to enter a new industry sector.</li>
											<li><i class="fas fa-angle-double-right"></i>Seeking a pathway to higher level of qualifications.</li>
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
									<div class="accordion-body">This course will be delivered in the face-to-face training
										methodology, classroom-based at Level 6, 8 - 24 Kippax
										Street Surry Hills NSW 2010.
										As part of the Unit competency, students are required
										to conduct Work Placement training at the Child Care
										Centres/organisations in a variety of locations.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingFive">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
										Course duration
									</button>
								</h2>
								<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">This qualification will be delivered over 104 weeks of
										study. 240 hours of work placement (to be completed
										during weeks 9 and 10 of each term)
										Class sessions are planned to ensure that students have
										a mixture of practical and theoretical components and
										those classes cater for a wide variety of learning styles.
										Additionally, workplace practices and environments
										are simulated and used to conduct skills-based
										assessments in accordance with unit requirements.
										The timing for this course will be advised in the Letter of
										Offer.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingSix">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
										Education pathways
									</button>
								</h2>
								<div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">Students who complete this course may wish
										to further their study into higher education
										qualifications
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header" id="flush-headingSeven">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
										Course structure
									</button>
								</h2>
								<div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">The CHC50113 Diploma of Early Childhood
										Education and Care requires the successful
										completion of twenty-three (23) core units and
										five (5) elective units.
										Electives of this qualification have been
										carefully selected by ANE college to ensure
										that students achieve a broad range of skills
										and knowledge in Early Childhood Education
										and Care.
										Units included in this qualification are:
										<div class="table-responsive">
											<table class="table table-striped">
												<tbody>
													<tr>
														<td>

															CHCDIV002</td>
														<td> Promote Aboriginal and /or Torres Strait Islander cultural
															safety</td>
														<td>
															Core</td>
													</tr>
													<tr>
														<td>CHCECE001* </td>
														<td>Develop cultural competence</td>
														<td> Core</td>
													</tr>
													<tr>
														<td>CHCECE002*</td>
														<td> Ensure the health and safety of children </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>CHCECE003* </td>
														<td>Provide care for children </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>CHCECE004</td>
														<td> Promote and provide healthy food and drinks </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>CHCECE005* </td>
														<td>Provide care for babies and toddlers </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>CHCECE007* </td>
														<td>Develop positive and respectful relationships with children </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>CHCECE009* </td>
														<td>Use an approved learning framework to guide practice </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>CHCECE016*</td>
														<td> Establish and maintain a safe and healthy environment for
															children</td>
														<td>
															Core</td>
													</tr>
													<tr>
														<td>CHCECE017*</td>
														<td> Foster the holistic development and wellbeing of the child in
															early childhood</td>
														<td>
															Core</td>
													</tr>
													<tr>
														<td>CHCECE018*</td>
														<td> Nurture creativity in children</td>
														<td> Core</td>
													</tr>
													<tr>
														<td>CHCECE019* </td>
														<td>Facilitate compliance in an education and care service </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>CHCECE020* </td>
														<td>Establish and implement plans for developing cooperative
															behaviour</td>
														<td>
															Core</td>
													</tr>
													<tr>
														<td>CHCECE021*</td>
														<td> Implement strategies for the inclusion of all children</td>
														<td> Core</td>
													</tr>
													<tr>
														<td>CHCECE022* </td>
														<td>Promote children???s agency</td>
														<td> Core</td>
													</tr>
													<tr>
														<td>CHCECE023*</td>
														<td> Analyse information to inform learning </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>CHCECE024* </td>
														<td>Design and implement the curriculum to foster children???s
															learning and development</td>
														<td>
															Core</td>
													</tr>
													<tr>
														<td>CHCECE025* </td>
														<td>Embed sustainable practices in service operations</td>
														<td> Core</td>
													</tr>
													<tr>
														<td>CHCECE026*</td>
														<td> Work in partnership with families to provide appropriate
															education and care for children</td>
														<td>
															Core</td>
													</tr>
													<tr>
														<td>CHCLEG001 </td>
														<td>Work legally and ethically </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>CHCPRT001* </td>
														<td>Identify and respond to children and young people at risk </td>
														<td>Core</td>
													</tr>
													<tr>
														<td>HLTAID004 </td>
														<td>Provide an emergency first aid response in an education and
															care setting</td>
														<td>
															Core</td>
													</tr>
													<tr>
														<td>HLTWHS003* </td>
														<td>Maintain work health and safety</td>
														<td> Core</td>
													</tr>
													<tr>
														<td>CHCDIV001 </td>
														<td>Work with diverse people</td>
														<td> Elective</td>
													</tr>
													<tr>
														<td>CHCMGT003 </td>
														<td>Lead the work team </td>
														<td>Elective</td>
													</tr>
													<tr>
														<td>CHCPOL002</td>
														<td> Develop and implement policy</td>
														<td> Elective</td>
													</tr>
													<tr>
														<td>CHCSAC005 </td>
														<td>Foster the holistic development and wellbeing of the child in
															school age care</td>
														<td>
															Elective</td>
													</tr>
													<tr>
														<td>CHCPRP003</td>
														<td> Reflect on and improve own professional practice </td>
														<td>Elective</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading11">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
											Career outcomes
										</button>
									</h2>
									<div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">Students who complete this course
											may be able to seek employment
											as an educator in a range of early
											childhood education and care
											settings.
											below.

										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingEight">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
											Course progress
										</button>
									</h2>
									<div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">Note that for international students, satisfactory course progress and attendance is required in order to meet
											visa requirements. More information can be found in the International Student Handbook that also includes
											information on the specific support that is available to international students. Students who are identified as
											being at risk of not meeting course progress and attendance requirements will be provided with additional
											support as recorded in an intervention strategy. The student handbook can be found online at http://www.
											ane.edu.au
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingNine">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
											Enrolment and orientation
										</button>
									</h2>
									<div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">Upon acceptance of a student???s application for enrolment, a Letter of Offer (including the Student
											Agreement) will be sent to you. You should carefully review the document because it will provide you with all
											necessary information about the course of study, including terms and conditions.
											Once we received your signed Letter of Offer, we will issue you an invoice of your first instalment requested
											showing, and once this has been paid, a Confirmation of Enrolment (CoE) letter will be issued to you.
											On the first day of each course, the Orientation and Induction session will be organised. The Orientation
											and Induction activity will include information about the campus, living in Australia, accessing our support
											services and methods for achieving success throughout the course, including course progress and
											attendance requirements.
											This course brochure should be read in conjunction with ANE International Student
											Handbook. This can be found online at http://www.ane.edu.au.
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingTen">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseNine">
											Additional support
										</button>
									</h2>
									<div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">All students will be provided with a range of
											learning support options and resources to
											help them achieve competency. This includes:
											<ul>
												<li>
													<i class="fas fa-angle-double-right"></i>Academic and personal support.
												</li>
												<li>
													<i class="fas fa-angle-double-right"></i>Referral to external support services.
												</li>
											</ul>
										</div>
									</div>
								</div>


								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading12">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
											Training arrangements
										</button>
									</h2>
									<div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">You are required to attend classes for 20 hours and to
											complete approximately 5 hours of homework per week.
											Homework will include reading and general research for
											assessments. Timetable information will be provided in the
											student???s Letter of Offer.
											Students may commence this course at the start of any term.
											As part of training programs, you are required to complete
											120 hours of work placement at relevant Disability Services
											sectors/organisations.
											Work Placement is to be completed during weeks 9 and 10 of
											each term. ANE college will assist students in finding a Work
											Placement. However, students are also encouraged find for
											their own work placements.
											Work Placement induction will be held before students
											commence their Work Placement tasks.
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading13">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
											Assessment arrangements
										</button>
									</h2>
									<div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">Assessment methods used for this qualification
											will provide a range of ways for individuals to
											demonstrate that they have met the required
											outcomes including:
											<ul>
												<li>
													<i class="fas fa-angle-double-right"></i>Projects
												</li>
												<li>
													<i class="fas fa-angle-double-right"></i>Observations
												</li>
												<li>
													<i class="fas fa-angle-double-right"></i>Portfolios
												</li>
												<li>
													<i class="fas fa-angle-double-right"></i>Supervisor reports
												</li>
												<li>
													<i class="fas fa-angle-double-right"></i>Logbook
												</li>
												<li>
													<i class="fas fa-angle-double-right"></i>Presentations
												</li>
												<li>
													<i class="fas fa-angle-double-right"></i>Report writing
												</li>
												<li>
													<i class="fas fa-angle-double-right"></i>Questioning
													(oral or written)
												</li>
											</ul>
											At the beginning of each unit, trainers will outline
											the assessment tasks that must be completed.
										</div>
									</div>

								</div>


								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading14">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
											Course costs
										</button>
									</h2>
									<div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">The costs for this course are as follows:
											Course fees: Please contact the College for more
											information
											Non-Tuition fees: May apply and can be found in the
											International Student Handbook.
											A detailed payment plan and payment arrangements
											are provided in the Letter of offer. Non-payment of
											course fees may result in cancellation of enrolment.
											Course fees do not include laptops or computer
											software.
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
														<td>$450 (approximate only) </td>
														<td>Various</td>
													</tr>
													</tbody>
												</table>
											</div>
											Laptops and software may be purchased by students through the suppliers as listed above or any other
											suppliers that offer the resources noting that costs may vary at the time of purchase.

										</div>
									</div>

								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading16">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse16" aria-expanded="false" aria-controls="flush-collapse16">
											Selection and enrolment procedures
										</button>
									</h2>
									<div id="flush-collapse16" class="accordion-collapse collapse" aria-labelledby="flush-heading16" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">To enrol for this course, you are required to complete an Enrolment form. The Enrolment form can be
											emailed or posted to students or being downloaded from our website.
											The enrolment form should be completed and sent to us along with all of required documentations.
											For more information about our selection and enrolment processes, please contact us.
										</div>
									</div>

								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading15">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
											Course credit
										</button>
									</h2>
									<div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											Students may apply for recognition of existing qualifications or skills, knowledge and experience (credit
											transfer or recognition of prior learning) as per the information included in our International Student
											Handbook, which is available at http://www.ane.edu.au
											For international students, the granting of course credit may affect course fees as well as the duration of
											the course.
											The result of an application for credit and any changes to fees or course duration will be advised to
											students in writing.
											If course credit is granted following issuance of the Confirmation of Enrolment, students will receive a new
											Confirmation of Enrolment showing a reduced duration.
											For any questions about course credit, contact us at the details shown below
										</div>
									</div>

								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-heading17">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse17" aria-expanded="false" aria-controls="flush-collapse17">
											Laptop specifications
										</button>
									</h2>
									<div id="flush-collapse17" class="accordion-collapse collapse" aria-labelledby="flush-heading17" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">Students should also note the following minimum specifications for a laptop which students must bring
											to each class.
											<div class="table-responsive">
												<table class="table table-striped">
													<thead>
														<tr>
															<td>
																PC</td>
															<td> Minimum requirements
															</td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																Processor </td>
															<td>Intel?? or AMD processor with 64-bit support*; 2 GHz or faster processor
																Microsoft Windows 7 with Service pack 1 (64-bit), Windows 10 (Version
																1709 or later)
															</td>
														</tr>
														<tr>
															<td>

																Operating system </td>
															<td>Microsoft Windows 7 with Service pack 1 (64-bit), Windows 10 (Version
																1709 or later)</td>
														</tr>
														<tr>
															<td>
																RAM </td>
															<td>2 GB or more of RAM (8 GB recommended)</td>
														</tr>
														<tr>
															<td>
																Hard disk space </td>
															<td>3.1 GB or more of available hard-disk space for 64-bit installation;
																additional free space required during installation.</td>
														</tr>
														<tr>
															<td>
																Monitor resolution </td>
															<td>1024 x 768 display (1280x800 recommended) with 16-bit color and 512
																MB or more of dedicated VRAM; 2 GB is recommended.</td>
														</tr>
														<tr>
															<td>
																Graphics processor
																acceleration requirements</td>
															<td>
																OpenGL 2.0-capable system</td>
														</tr>
														<tr>
															<td>
																Internet </td>
															<td>Internet connection and registration are necessary for required software
																activation, validation of subscriptions, and access to online services.</td>
														</tr>
													</tbody>
												</table>
												<table class="table table-striped">
													<thead>
														<tr>
															<td>
																MacOS:</td>
															<td> Minimum requirements
															</td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																Processor </td>
															<td>Multicore Intel processor with 64-bit support
															</td>
														</tr>
														<tr>
															<td>

																Operating system </td>
															<td>MacOS version 10.12 (Sierra), macOS version 10.13 (High Sierra), or macOS version 10.14 (Mojave).</td>
														</tr>
														<tr>
															<td>
																RAM </td>
															<td>2 GB or more of RAM (8 GB recommended)</td>
														</tr>
														<tr>
															<td>
																Hard disk space </td>
															<td>4 GB or more of available hard-disk space for 64-bit installation;
																additional free space required during installation.</td>
														</tr>
														<tr>
															<td>
																Monitor resolution </td>
															<td>1024 x 768 display (1280x800 recommended) with 16-bit colour and 512
																MB or more of dedicated VRAM; 2 GB is recommended</td>
														</tr>
														<tr>
															<td>
																Graphics processor
																acceleration requirements</td>
															<td>
																OpenGL 2.0-capable system</td>
														</tr>
														<tr>
															<td>
																Internet </td>
															<td>Internet connection and registration are necessary for required software
																activation, validation of subscriptions, and access to online services</td>
														</tr>
													</tbody>
												</table>

												</table>
											</div>

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
								<h2 class="accordion-header" id="flush-heading18">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse18" aria-expanded="false" aria-controls="flush-collapse18">
										Contact details
									</button>
								</h2>
								<div id="flush-collapse18" class="accordion-collapse collapse" aria-labelledby="flush-heading18" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">Call our office on +61 2 92815929 or email us at sydney.campus@ane.edu.au
									</div>
								</div>
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
				<div class="card">
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
				<div class="card">
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
				<div class="card">
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