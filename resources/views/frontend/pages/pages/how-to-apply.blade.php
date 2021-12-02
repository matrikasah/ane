@extends('frontend.master')
@section('content')

<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">How to Apply</h1>
					<p>We will guide you to reach us</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">How to apply</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="innerpage-content">
	<div class="container">
		<div class="row gap">
			<div class="col-sm-5 col-lg-4">
				<div class="ceo-img">
						<img src="{{ asset('image/onshore.jpg') }}" class="img-responsive">
					</div>
			</div>
			<div class="col-sm-7 col-lg-7 content-text">
				<div class="small-title title">
						<h3>For Onshore Students</h3>
						<h1>Start your journey to ANE College</h1>
					</div>










					<div class="step"><span>Step 1: Understand The Entry Requirements:</span></div>
					<p class="para">Use the filters to search the courses as per your area of interest. Check the admission dates on the ANE College website. Check the admission requirements and deadlines for the selected degree. Read the instructions carefully. You also need to check the college’s English language admission requirements.</p>
					

					<div class="step"><span>Step 2: Gather Supporting Documents</span></div>
					<p class="para">While applying for the course, you need to submit all the required transcripts and necessary supporting documents. It's good to prepare your records, just in case. Remember, the documents required vary based on the course you choose.</p>
					
					<div class="step"><span>Step 3: Submit An Application</span></div>
					<p class="para">Once you understand the entry requirements and gather supporting documents, start your application. (link to the student application form here).</p>

					<div class="step"><span>Step 4: Receive An Offer</span></div>
					<p class="para">After submitting the student application, you will receive an offer if you meet every criterion mentioned.</p>

					<div class="step"><span>Step 5: Accept Your Offer</span></div>
					<p class="para">After receiving an offer, it is very important that you accept it to reserve your place at ANE College.</p>

			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-5 col-lg-4">
				<div class="ceo-img">
						<img src="{{ asset('image/offshore.jpg') }}" class="img-responsive">
					</div>
			</div>
			<div class="col-sm-7 col-lg-7 content-text">
				<div class="small-title title">
						<h3>For Offshore Students</h3>
						<h1>Start your journey to ANE College</h1>
					</div>
					<div class="step"><span>Step 1: Find a course</span></div>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>
							Browse a wide range of courses available in our <a href="{{route('course')}}"> courses section.</a> 
						</li>
						<li><i class="fas fa-angle-double-right"></i>
						Use filters to search the courses.
						</li>
						<li><i class="fas fa-angle-double-right"></i>
						Browse the selected courses for detailed information like course requirements, eligibility criteria, and admission criteria.
						</li>
					</ul>

					<div class="step"><span>Step 2: Check your Eligibility</span></div>
					<p class="para">The eligibility of the courses varies from one to another. Check the eligibility criteria mentioned in every course. You need to demonstrate that you have completed the recognized qualification with the required grades. Also, you will need to prove that you meet English language requirements.
					Do not forget to check additional admission criteria, which include:</p>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>
							A prerequisite
						</li>
						<li><i class="fas fa-angle-double-right"></i>
						Use filters to search the courses.A portfolio
						</li>
						<li><i class="fas fa-angle-double-right"></i>
						Assumed Knowledge
						</li>
						<li><i class="fas fa-angle-double-right"></i>
						An interview, only in some cases
						</li>
						<li><i class="fas fa-angle-double-right"></i>
						Relevant professional experience.
						</li>

					</ul>

					<div class="step"><span>Step 3: Gather your documents</span></div>
					<p class="para">We only accept official documents that support your application. The documents may include:</p>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>
							English language results
						</li>
						<li><i class="fas fa-angle-double-right"></i>
						Academic transcripts
						</li>
						<li><i class="fas fa-angle-double-right"></i>						
						Educational certificates
						</li>
					</ul>
					<p class="para">If your chosen course requires a supplementary application form, this will be listed on the course page.</p>
					<p class="para"><div class="bold-text">Note:</div> Please make sure that every document that you submit is in English. If not, you can translate your documents with the help of an English translation made by an accredited translator with a government body.</p>


					<div class="step"><span>Step 4: Check your finances</span></div>
					<p class="para">Before your application process gets completed, you need to understand and check the fees you need to pay. The finances include:</p>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>
							Course fees
						</li>
						<li><i class="fas fa-angle-double-right"></i>
						Additional fees and costs
						</li>
					</ul>
					<p class="para">Besides this, you need to take care of the finances you need for accommodation and expenses to cover during your stay in Australia.</p>


					<div class="step"><span>Step 5: Submit your application</span></div>
 					<p class="para">International students can either apply directly or consult with education agents for help. You can also read the application process on our website.</p>

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