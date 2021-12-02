@extends('frontend.master')
@section('content')
<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">First Day</h1>
					<p>On First Day of college</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">first day</li>
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
					<img src="{{ asset('image/first.jpg') }}" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-7 col-lg-7">
				<div class="small-title title">
						<h3>First Day</h3>
						<h1>On the first day of class</h1>
					</div>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>Call out the attendance roll and check the students’ names, ID numbers, and registration.</li>
						<li><i class="fas fa-angle-double-right"></i>Ask the students to sign the Student Subject Outline Acknowledgement Sheet.</li>
						<li><i class="fas fa-angle-double-right"></i>Direct the students who are not on the roll to the Registrar</li>
						<li><i class="fas fa-angle-double-right"></i>Ascertain, through discussion, the learning and assessment needs of the students.</li>
						<li><i class="fas fa-angle-double-right"></i>Explain the attendance and results recording procedure to be used</li>
						<li><i class="fas fa-angle-double-right"></i>Identify possible English problems and refer to Registrar or CEO/Training Manager</li>
						<li><i class="fas fa-angle-double-right"></i>Provide each student with a Subject Outline (includes subject aim, learning outcomes, delivery and assessment strategies, resources) and explain the outline to the students.</li>
						<li><i class="fas fa-angle-double-right"></i>Start training </li>
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