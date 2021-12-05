@extends('frontend.master')
@section('content')
    
<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Notice</h1>
					<p>ANE college Notice Board</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Notice</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="innerpage-content">
	<div class="container">
		<div class="row justify-content-center content-text">
				<div class="col-md-10 col-sm-12">
					
					<div class="small-title title">
						<h3>Notice</h3>
						<h1>Applications are now open to study in one of Australia’s fastest-rising training organizations in 2022!</h1>
					</div>
					<p class="para">
					Become Goal-Oriented Individual
					ANE College announces admission open for onshore and offshore students who want to live in our vibrant campus community.
					With exceptional results, more than 80% of our students have been successfully involved in leading professionals. So, to guarantee an equally successful future for yourself, make sure to register right now.
					</p>	
					<div class="bold-text">Key Dates:</div>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>10/01/2022- Start of Term</li>
						<li><i class="fas fa-angle-double-right"></i>10/01/2022- Orientation Day</li>
					</ul>
					<p class="para">
					If you are confused about the admission procedure, <a href="{{route('intake-date')}}">click here!</a> 
					</p>				
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