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
							    <li class="breadcrumb-item active" aria-current="page">Certificate IV in Commercial Cookery</li>
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
							<h2>SIT40516 Certificate IV in Commercial Cookery</h2>
							<div class="button-lists bd-example">
								<div class="cat-name">Category : Commercial Cookery</div>
								<div class="btn-group">
								<button type="button" class="btn btn-outline-primary hvr-bounce-to-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
								  Apply now <i class="fas fa-angle-double-right"></i>
								</button>
								<a  href="{{ asset('image/brochure_updating_20211107.pdf') }}" class="btn btn-outline-secondary hvr-bounce-to-right">Download <i class="fas fa-angle-double-down"></i></a>
								</div>
							</div>
							<img src="{{ asset('image/cookery.jpg') }}" class="img-responsive course-detail-img">

							

							<div class="accordion accordion-flush content-text" id="accordionFlushExample">
							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingOne">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
								        Course Overview
								      </button>
								    </h2>
									    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
									      <div class="accordion-body">This qualification reflects the role of commercial chefs who have a supervisory or team leading role in the
											kitchen. They operate independently or with limited guidance from others and use discretion to solve nonroutine problems.
											This qualification provides a pathway to work in organisations such as restaurants, hotels, clubs, pubs,
											cafes and coffee shops, or to run a small business in these sectors.
											The latest release of the qualification and packaging rules can be found at the following link:
											https://training.gov.au/Training/Details/SIT40516
									    </div>
								  </div>
								</div>
							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingTwo">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
								        Delivery site
								      </button>
								    </h2>
								    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">Suite 67 & 68 Level 6, 8 - 24 Kippax Street Surry Hills NSW 201 0 (classroom based learning)
									</div>
							    </div>
							  </div>
							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingThree">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
								        Delivery mode
								      </button>
								    </h2>
								    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">ANE college’s training programs
										are conducted by highly qualified
										Trainer/Assessors in the mode
										delivery of ‘face-to-face’ in
										the classrooms and through
										structured self-study system.
										Students also have opportunities
										to participate in a practical
										learning environment through
										work placement programs.

									</div>
							    </div>
							  </div>
							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingFour">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
								        Duration
								      </button>
								    </h2>
								    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">78 weeks of study, including 360
										hours of professional placement
										</div>
								    </div>
							  </div>
							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingFive">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
								        What can I expect?
								      </button>
								    </h2>
								    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">The following units are included in this course and all are required for the award of the qualification.
										Students who only complete some units will be awarded with a Statement of Attainment for units
										successfully completed.

										<div class="table-responsive">
											<table class="table table-striped">
												<tbody>
													<tr>
														<td>BSBDIV501 </td><td>Manage diversity in the workplace </td><td>Core</td>
													</tr>
													<tr>
														<td>
													BSBSUS401</td><td> Implement and monitor environmentally sustainable work
													practices</td><td>
													Core</td>
													</tr>
													<tr>
														<td>
													SITHCCC001 </td><td>Use food preparation equipment*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHCCC005</td><td> Prepare dishes using basic methods of cookery*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHCCC006</td><td> Prepare appetisers and salads* </td><td>Core</td>
													</tr>
													<tr>
														<td>
													SITHCCC007</td><td> Prepare stocks, sauces and soups*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHCCC008</td><td> Prepare vegetable, fruit, egg and farinaceous dishes* </td><td>Core</td>
													</tr>
													<tr>
														<td>
													SITHCCC012</td><td> Prepare poultry dishes*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHCCC013</td><td> Prepare seafood dishes*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHCCC014</td><td> Prepare meat dishes* </td><td>Core</td>
													</tr></td>
													<tr>
														<td>
													SITHCCC018</td><td> Prepare food to meet special dietary requirements*</td><td> Core									
													</tr>
													<tr>
														<td>
													SITHCCC019</td><td> Produce cakes, pastries and breads*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHCCC020</td><td> Work effectively as a cook*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHKOP002</td><td> Plan and cost basic menus</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHKOP004</td><td> Develop menus for special dietary requirements</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHKOP005</td><td> Coordinate cooking operations*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITHPAT006</td><td> Produce desserts*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXCOM005</td><td> Manage conflict</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXFIN003</td><td> Manage finances within a budget</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXFSA001</td><td> Use hygienic practices for food safety</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXFSA002</td><td> Participate in safe food handling practices</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXHRM001</td><td> Coach others in job skills</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXHRM003</td><td> Lead and manage people</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXINV002</td><td> Maintain the quality of perishable items*</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXMGT001</td><td> Monitor work operations</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXWHS003</td><td> Implement and monitor work health and safety practices</td><td> Core</td>
													</tr>
													<tr>
														<td>
													SITXWHS002 </td><td>Identify hazards, assess and control safety risks</td><td> Elective</td>
													</tr>
													<tr>
														<td>
													SITXCCS007</td><td> Enhance customer service experiences</td><td> Elective</td>
													</tr>
													<tr>
														<td>
													BSBITU202</td><td> Create and use spreadsheets</td><td> Elective</td>
													</tr>
													<tr>
														<td>
													SITXCCS006</td><td> Provide service to customers </td><td>Elective</td>
													</tr>
													<tr>
														<td>
													SITXINV001 </td><td>Receive and store stock</td><td> Elective</td>
													</tr>
													<tr>
														<td>
													SITXHRM002</td><td> Roster staff </td><td>Elective</td>
													</tr>
													<tr>
														<td>
													SITHIND002 </td><td>Source and use information on the hospitality industry</td><td> Elective</td>
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
								        Who should apply for this course and why?
								      </button>
								    </h2>
								    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">Who should apply for this course and why?
										This course is targeted at international students who are:
										<ul>
											<li><i class="fas fa-angle-double-right"></i>Seeking to pursue a career in commercial cookery</li>
										<li><i class="fas fa-angle-double-right"></i>Seeking to enter a new industry sector</li>
										<li><i class="fas fa-angle-double-right"></i>Seeking a pathway to higher-level qualifications</li>
										Completing this course may provide you with employment or learning opportunities. Potential employment
										options are in the commercial cookery sector in the roles such as chef or chef de partie. Further education
										pathways may include the SIT50416 Diploma of Hospitality Management.


										
										</div>
								    </div>
							  </div>

							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingSeven">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
								        Training and assessment information
								      </button>
								    </h2>
								    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">This course is delivered face-to-face in a classroom-based setting, as well as through structured self-study
										and workplace based training.
										The timetable for this course will be advised in your Offer Letter and Student Agreement.
										You are required to attend classes for 20 hours per week for 60 study weeks (6 terms of 10 weeks each).
										Holidays are three weeks per term.
										Class sessions include a mix of theory and practical activities with a focus on creating a real life workplace.
										For the self-study, you will be provided with a self-study guide which includes activities which you must
										complete and hand into your trainer and assessor each week.
										In addition to classroom based learning and structured self-study, you will also need to complete
										approximately 5 hours of additional, unsupervised study per week including general reading and research
										for assessments.
										As part of this course you will also need to complete 60 service periods. Twelve of these service periods
										will be completed in the training kitchen. The other 48 service periods are to be completed as part of a
										professional placement. The professional placement will be completed in a commercial cookery setting (e.g.
										restaurant, café, function centre, etc) and we will assist you to find a work placement or you can find your
										own. Your professional placement will be discussed in detail with you once you start your course. You will
										also need to complete assessments for this course which may include:
										<ul>
											<li><i class="fas fa-angle-double-right"></i> Written questions</li>
											<li><i class="fas fa-angle-double-right"></i>Projects</li>
											<li><i class="fas fa-angle-double-right"></i>Presentations</li>
											<li><i class="fas fa-angle-double-right"></i>Reports</li>
											<li><i class="fas fa-angle-double-right"></i>Role plays/observations</li>
											<li><i class="fas fa-angle-double-right"></i>Portfolios/journal</li>
											<li><i class="fas fa-angle-double-right"></i>Workplace hours log</li>

										</ul>
										At the beginning of each unit, your trainer and assessor will outline the assessment tasks that must be
										completed.
										Your classes will be conducted in modern classrooms and the training kitchen and you will be able to
										access Wi-Fi. There are also areas for you to relax, as well as conduct additional study.
										You will be provided with a Student Guide relevant to each unit in your course. Textbooks are also available
										onsite for you to use and borrow if you wish.
										</div>
								    </div>
							  </div>

							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingEight">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
								        Student support
								      </button>
								    </h2>
								    <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">ANE college realises that international students may face difficulties while studying with us. Therefore, we
										willingly support students through following services:
										<ul>
											<li><i class="fas fa-angle-double-right"></i> To assist students with their personal issues, such as, accommodation, communication, transportation,
											 preparation for part-time employment opportunities, referring to professional counselling services.</li>
											<li><i class="fas fa-angle-double-right"></i>To access to additional learning resources.</li>
											<li><i class="fas fa-angle-double-right"></i>To assist student with assessments’ resubmission through Student Support Plan.</li>
											<li><i class="fas fa-angle-double-right"></i>To participate in social and welfare events</li>
											<li><i class="fas fa-angle-double-right"></i>To identify information about external sources of support.</li>
										</ul>


										
										</div>
								    </div>
							  </div>

							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingNine">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
								        Course progress and attendance
								      </button>
								    </h2>
								    <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">In order to meet visa requirements, as international students, you are required to satisfactorily complete
										course progress and class attendance.
										For further information, please read the International Student Handbook carefully and attend Orientation
										session on your first day at ANE college.
										</div>
								    </div>
							  </div>

							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingTen">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseNine">
								        Course credit
								      </button>
								    </h2>
								    <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">You can apply for recognition of existing qualifications or skills, knowledge and experience (credit transfer
										or recognition of prior learning) as per the information included in our International Student Handbook,
										which is available at www.ane.edu.au
										If you are granted course credit, this will affect your course fees as well as the duration of your course. We
										will advise you in writing of changes to fees or course duration as a result of the credit. You will also be
										issued with a new Confirmation of Enrolment.
										For any questions about course credit, contact us at the details shown below.
										</div>
								    </div>
							  </div>

							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-heading11">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
								        Resource requirements
								      </button>
								    </h2>
								    <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">You are required to bring your own laptop with Office 365 (or similar program) to all classes. These
										costs are not included in your course fees. Specifications for laptops and associated costs are included
										below.
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<td>
														PC</td>
													<td>  Minimum requirements
													</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
													Processor </td>
													<td>Intel® or AMD processor with 64-bit support*; 2 GHz or faster processor Microsoft Windows 10
													</td>
												</tr>
												<tr>
													<td>
										
													Operating system </td>
													<td>Microsoft Windows 10</td>
												</tr>
												<tr>
													<td>
													RAM </td>
													<td>10 GB or more of RAM (8 GB recommended)</td>
												</tr>
												<tr>
													<td>
													Hard disk space </td>
													<td>3.1 GB or more of available hard-disk space</td>
												</tr>
												<tr>
													<td>
													Monitor resolution </td>
													<td>1024 x 768 display (1280x800 recommended) with 16-bit colour and 512
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
													activation, validation of subscriptions, and access to online services</td>
												</tr>
											</tbody>
										</table>
										<table class="table table-striped">
													<thead>
														<tr>
															<td>
																MacOS:</td>
															<td>  Minimum requirements
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
								    </div>
							  </div>

							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-heading12">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
								        Contact details
								      </button>
								    </h2>
								    <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">Call our office on +61 2 92815929 or email us at sydney.campus@ane.edu.au
										</div>
								    </div>
							  </div>

							  <div class="accordion-item">
								    <h2 class="accordion-header" id="flush-heading13">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
								        How much does it cost?
								      </button>
								    </h2>
								    <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">The costs for this course are as follows:
										Course fees: Please contact the College for more
										information
										Non-tuition fees: May apply and can be found in
										our International Student Handbook on our website
										at www.ane.edu.au
										Course fees do not include laptops or software –
										see information above.
										A detailed payment plan and payment
										arrangements are provided in the Offer Letter
										and Student Agreement. You must pay all of your
										course fees and on time. Non-payment of fees may
										result in cancellation of enrolment.
										You are also required to take out Overseas Health
										Insurance Cover before arriving in Australia.
										RTO provides details of OSHC providers in the
										International Student Handbook. You can approach
										any of these providers to find out costs and
										organise your cover.
										Additional costs associated with living in Australia
										are outlined in the International Student Handbook.
										You should carefully review these costs in relation
										to budgeting. Further information can be found at
										https://www.studyinaustralia.gov.au/english/live-inaustralia/living-costs.

								    </div>
							  </div>

							</div>


							<div class="accordion-item">
								    <h2 class="accordion-header" id="flush-heading14">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
								        How can I apply?
								      </button>
								    </h2>
								    <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">To apply for this course, you are required to
										complete an enrolment form and to submit all
										required supporting evidence, including copies of:
										<ul>
										<li><i class="fas fa-angle-double-right"></i>High School Certificate</li>
										<li><i class="fas fa-angle-double-right"></i>Proof of English language proficiency as specified
										 in the entry requirements</li>
										</ul>

								    </div>
							  </div>

							</div>


							<div class="accordion-item">
								    <h2 class="accordion-header" id="flush-heading15">
								      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
								        Where to from here?
								      </button>
								    </h2>
								    <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample">
								      <div class="accordion-body">
								      	If your application is successful, we’ll send you an Offer Letter and Student Agreement You should
										make sure you read through this document carefully to make sure you are happy with all of the terms
										and conditions. If you are, then simply sign the document and send it back to us.
										Once we receive this, we will issue you with a Confirmation of Enrolment (CoE) letter and an invoice
										for the first payment.
										The first day of each course will include orientation and induction. Orientation will include information
										about the campus, living in Australia, accessing our support services and methods for achieving
										success throughout the course, including course progress requirements.
										This course outline should be read in conjunction with RTO International Student Handbook. This
										can be found online at www.ane.edu.au
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