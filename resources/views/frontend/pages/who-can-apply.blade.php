@extends('frontend.master')
@section('content')
    
<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Who can apply</h1>
					<p>Entry requirements </p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Who can apply</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="innerpage-content">
	<div class="container">
		<div class="row content-text">
			<div class="col-sm-5 col-lg-4">
				<div class="ceo-img">
						<img src="{{ asset('image/who-can.jpg') }}" class="img-responsive">
					</div>
			</div>
			<div class="col-sm-7 col-lg-7">
				<div class="small-title title">
					<h3>Who can apply</h3>
					<h1>Entry requirements for offshore students</h1>
				</div>
				<div class="accordion accordion-flush content-text" id="accordionFlushExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingOne">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
							<div class="bold-text ml-0"> SIT40516 Certificate IV in Commercial Cookery</div>
							</button>
						</h2>
						<div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">
								<p class="para">Australian National Education has the following entry requirements:</p>
								<p class="para">You must:</p>
								<ul>
									<li><i class="fas fa-angle-double-right"></i>be at least 18 years of age and have completed the equivalent of Year 12.</li>
									<li><i class="fas fa-angle-double-right"></i>participate in a course entry interview to determine suitability for the course and student needs.</li>
									<li class="sub-list"><i class="fas fa-angle-double-right"></i>have an IELTS* score of 5.5 (test results must be no more than 2 years old). English language competence can also be demonstrated through documented evidence of any of the following:
									<ul>
										<li> <i class="fas fa-angle-right"></i>
										successfully completed an ANE administered LLN assessment and achieved ACSF Level 3 in learning, reading, writing, speaking and numeracy.
										</li>
										<li> <i class="fas fa-angle-right"></i>
										educated for 5 years in an English-speaking country; or
										</li>
										<li> <i class="fas fa-angle-right"></i>
										successful completion of an English Placement Test.
										</li>
									</ul>
									</li>
								</ul>

								<p class="para">
								<div class="bold-text">*Note</div>that other English language tests such as PTE and TOEFL can be accepted. You are required to provide your results so that we can confirm they are equivalent to IELTS 5.5.</p>

							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
							<div class="bold-text ml-0"> SIT50416 Diploma of Hospitality Management</div>
							</button>
						</h2>
						<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">
								<p class="para">Australian National Education has the following entry requirements:</p>
								<p class="para">You must:</p>
								<ul>
									<li><i class="fas fa-angle-double-right"></i>be at least 18 years of age and have completed the equivalent of Year 12.</li>
									<li><i class="fas fa-angle-double-right"></i>Have successfully completed the SIT40516 Certificate IV in Commercial Cookery with ANE.</li>
									<li><i class="fas fa-angle-double-right"></i>participate in a course entry interview to determine suitability for the course and student needs</li>
									<li class="sub-list"><i class="fas fa-angle-double-right"></i>have an IELTS* score of 5.5 (test results must be no more than 2 years old). English language competence can also be demonstrated through documented evidence of any of the following:
									<ul>
										<li> <i class="fas fa-angle-right"></i>
										successfully completed an ANE administered LLN assessment and achieved ACSF Level 3 in learning, reading, writing, speaking and numeracy.
										</li>
										<li> <i class="fas fa-angle-right"></i>
										educated for 5 years in an English-speaking country; or
										</li>
										<li> <i class="fas fa-angle-right"></i>
										successful completion of an English Placement Test.
										</li>
									</ul>
									</li>
								</ul>

								<p class="para">
								<div class="bold-text">*Note</div>that other English language tests such as PTE and TOEFL can be accepted. You are required to provide your results so that we can confirm they are equivalent to IELTS 5.5.</p>

							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
							<div class="bold-text ml-0"> CHC43115 Certificate IV in Disability</div>
							</button>
						</h2>
						<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">
								<p class="para">Australian National Education has the following entry requirements:</p>
								<p class="para">You must:</p>
								<ul>
									<li><i class="fas fa-angle-double-right"></i>be at least 18 years of age and have completed the equivalent of Year 12.</li>
									<li><i class="fas fa-angle-double-right"></i>participate in a course entry interview to determine suitability for the course and student needs</li>
									<li class="sub-list"><i class="fas fa-angle-double-right"></i>have an IELTS* score of 5.5 (test results must be no more than 2 years old). English language competence can also be demonstrated through documented evidence of any of the following:
									<ul>
										<li> <i class="fas fa-angle-right"></i>
										successfully completed an ANE administered LLN assessment and achieved ACSF Level 3 in learning, reading, writing, speaking and numeracy.
										</li>
										<li> <i class="fas fa-angle-right"></i>
										educated for 5 years in an English-speaking country; or
										</li>
										<li> <i class="fas fa-angle-right"></i>
										successful completion of an English Placement Test.
										</li>
									</ul>
									</li>
								</ul>

								<p class="para">
								<div class="bold-text">*Note</div>that other English language tests such as PTE and TOEFL can be accepted. You are required to provide your results so that we can confirm they are equivalent to IELTS 5.5.</p>

							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingFour">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
							<div class="bold-text ml-0"> CHC52015 Diploma of Community Services</div>
							</button>
						</h2>
						<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">
								<p class="para">Australian National Education has the following entry requirements:</p>
								<p class="para">You must:</p>
								<ul>
									<li><i class="fas fa-angle-double-right"></i>be at least 18 years of age and have completed the equivalent of Year 12.</li>
									<li><i class="fas fa-angle-double-right"></i>Have successfully completed an AQF Level 4 qualification in the past three years</li>
									<li><i class="fas fa-angle-double-right"></i>participate in a course entry interview to determine suitability for the course and student needs.</li>
									<li class="sub-list"><i class="fas fa-angle-double-right"></i>have an IELTS* score of 5.5 (test results must be no more than 2 years old).  English language competence can also be demonstrated through documented evidence of any of the following:

									<ul>
										<li> <i class="fas fa-angle-right"></i>
										successfully completed an ANE administered LLN assessment and achieved ACSF Level 3 in learning, reading, writing, speaking and numeracy.
										</li>
										<li> <i class="fas fa-angle-right"></i>
										educated for 5 years in an English-speaking country; or
										</li>
										<li> <i class="fas fa-angle-right"></i>
										successful completion of an English Placement Test.
										</li>
									</ul>
									</li>
								</ul>

								<p class="para">
								<div class="bold-text">*Note</div>that other English language tests such as PTE and TOEFL can be accepted. You are required to provide your results so that we can confirm they are equivalent to IELTS 5.5.</p>

							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingFive">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
							<div class="bold-text ml-0"> CHC50113 Diploma of Early Childhood Education and Care</div>
							</button>
						</h2>
						<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">
								<p class="para">Australian National Education has the following entry requirements:</p>
								<p class="para">You must:</p>
								<ul>
									<li><i class="fas fa-angle-double-right"></i>be at least 18 years of age and have completed the equivalent of Year 12.</li>
									<li><i class="fas fa-angle-double-right"></i>⦁	Have successfully completed an AQF Level 3 qualification in the past three years</li>
									<li><i class="fas fa-angle-double-right"></i>participate in a course entry interview to determine suitability for the course and student needs.</li>
									<li class="sub-list"><i class="fas fa-angle-double-right"></i>have an IELTS* score of 5.5 (test results must be no more than 2 years old).  English language competence can also be demonstrated through documented evidence of any of the following:

									<ul>
										<li> <i class="fas fa-angle-right"></i>
										successfully completed an ANE administered LLN assessment and achieved ACSF Level 3 in learning, reading, writing, speaking and numeracy.
										</li>
										<li> <i class="fas fa-angle-right"></i>
										educated for 5 years in an English-speaking country; or
										</li>
										<li> <i class="fas fa-angle-right"></i>
										successful completion of an English Placement Test.
										</li>
									</ul>
									</li>
								</ul>

								<p class="para">
								<div class="bold-text">*Note</div>that other English language tests such as PTE and TOEFL can be accepted. You are required to provide your results so that we can confirm they are equivalent to IELTS 5.5.</p>

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
				<div class="card" >
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
				<div class="card" >
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
				<div class="card" >
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