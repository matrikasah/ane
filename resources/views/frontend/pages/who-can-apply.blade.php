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
						<h1>Entry requirements </h1>
					</div>
					

					<div class="bold-text">FOR OFFSHORE STUDENTS</div>
					<p class="para">The eligibility admission criteria differ from one course to another. However, some of the common entry requirements are:</p>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>Be at least 18 years of age</li>
						<li><i class="fas fa-angle-double-right"></i>Have completed Year 12 or equivalent.</li>
						<li><i class="fas fa-angle-double-right"></i>Attend course entry interview</li>
						<li><i class="fas fa-angle-double-right"></i>IELTS score not less than 5.5 in each band. The test results should not be expired, i.e., the result results must be no more than two years.
						The English language competence can also be demonstrated through:</li>
						<li><i class="fas fa-angle-double-right"></i>Being educated for five years in an English-speaking country,</li>
						<li><i class="fas fa-angle-double-right"></i>Successful completion of English Placement Test</li>
					</ul>

					<p class="para">
					<div class="bold-text">*Note</div>that other English language tests such as PTE and TOEFL can be accepted. Students are required to provide their results so that it can be confirmed they are equivalent to IELTS 5.5.</p>

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