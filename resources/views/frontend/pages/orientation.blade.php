@extends('frontend.master')
@section('content')
    
<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Orientation</h1>
					<p>Orientation Procedure</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Orientation</li>
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
					<img src="{{ asset('image/orientation.jpg') }}" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-7 col-lg-7">
				<div class="small-title title">
						<h3>Orientation</h3>
						<h1>Procedure</h1>
					</div>
					<p class="bold-text">
					For four terms, we conduct four orientations. The Orientation Day depends on the start of each term:</p>

					<ul>
						<li><i class="fas fa-angle-double-right"></i>10/01/2022 For Term 1</li>
						<li><i class="fas fa-angle-double-right"></i>04/04/2022 For Term 2</li>
						<li><i class="fas fa-angle-double-right"></i>27/06/2022 For Term 3</li>
						<li><i class="fas fa-angle-double-right"></i>19/09/2022 For Term 4</li>
					</ul>

					
					 <p class="bold-text">1.00pm – 1.15pm</p>    
					<ul>
						<li><i class="fas fa-angle-double-right"></i>Welcome to the ANE college by Chief Executive Officer or their representative.</li>
						<li><i class="fas fa-angle-double-right"></i>Tour of ANE college and Emergency and Evacuation Procedures, Assembly point and Work Health and Safety.</li>
						<li><i class="fas fa-angle-double-right"></i>Powerpoint slideshow</li>
					</ul>

						<p class="bold-text">1.15 pm – 2.30 pm ANE Information and Documentation</p>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>The students review of the student handbook. The handbook is discussed, and the students are invited to ask questions and clarify all points. The students sign back page (acknowledgment of understanding) of the handbook.</li>
						<li><i class="fas fa-angle-double-right"></i>Student ID cards.</li>
						<li><i class="fas fa-angle-double-right"></i>The students contact noted into Change of Details forms</li>
						<li><i class="fas fa-angle-double-right"></i>AVETMISS information confirmed.</li>
						<li><i class="fas fa-angle-double-right"></i>Rules and responsibilities of students at ANE college</li>
						<li><i class="fas fa-angle-double-right"></i>Login into computers and ID issued to students.
						The students are directed specifically to the following information to adjust to life in Australia.</li>
						<li><i class="fas fa-angle-double-right"></i>Information with Living in Australia</li>
					</ul>
						<p class="bold-text">1.15 pm – 2.30 pm (continued)</p>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>Student Safety</li>
						<li><i class="fas fa-angle-double-right"></i>Sydney Transport, Trains, Buses, ferries, taxis.</li>
						<li><i class="fas fa-angle-double-right"></i>City Library information</li>
						<li><i class="fas fa-angle-double-right"></i>Accommodation options</li>
						<li><i class="fas fa-angle-double-right"></i>Legal Services</li>
						<li><i class="fas fa-angle-double-right"></i>Emergency Health Services</li>
						<li><i class="fas fa-angle-double-right"></i>Complaints and Appeals processes</li>
						<li><i class="fas fa-angle-double-right"></i>Attendance and Academic requirements as per Visa Condition.</li>
						<li><i class="fas fa-angle-double-right"></i>Facilities and resources.</li>
					</ul>
                    <p class="bold-text">2.30 pm – 2.45 pm Break</p>
                    <p class="bold-text">2.45 pm – 4.30 pm Visa requirements</p>
                    
                    <ul>
						<li><i class="fas fa-angle-double-right"></i> Some important information regarding immigration requirements; Working
                        regulations under student visa.</li>
                        <li><i class="fas fa-angle-double-right"></i>Information about Overseas Student Health Cover (OSHC);</li>
                        <li><i class="fas fa-angle-double-right"></i>Introduction to Australian Health system.</li>
                        <li><i class="fas fa-angle-double-right"></i>Students registered into classes. The students meet the Training Manager.
                        Students provided with the following information.</li>
                        <li><i class="fas fa-angle-double-right"></i>Academic Calendar</li>
                        <li><i class="fas fa-angle-double-right"></i>Textbooks and course information</li>
                        <li><i class="fas fa-angle-double-right"></i>Timetables and subject information</li>
                        <li><i class="fas fa-angle-double-right"></i>Trainer and Assessor introductions</li>
                        <li><i class="fas fa-angle-double-right"></i>Student Support Information</li>
                        <li><i class="fas fa-angle-double-right"></i> Subject Induction signed</li>
                        <li><i class="fas fa-angle-double-right"></i>Complete the Student induction Declaration</li>
                    </ul>
					
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