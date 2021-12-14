@extends('frontend.master')
@section('content')

<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Our Agents</h1>
					<p>Our Agents all over the world</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Our Agents</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
@if(session()->has('message'))
<div classs="container p-5">
	<div class="row no-gutters">
		<div class="col-lg-6 col-md-12 m-auto">
			<div class="alert alert-success fade show" role="alert">
				
			 	<h4 class="alert-heading">Well done!</h4>
			  	<p> {{ session()->get('message') }}</p>
			</div>
		</div>
	</div>
</div>
@endif

<section class="innerpage-content">
	<div class="container">
		<div class="row content-text">
			<div class="col-sm-5 col-lg-4">
				<div class="ceo-img">
					<img src="{{ asset('image/agent.jpg') }}" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-7 col-lg-7">
				<div class="small-title title">
                    <h3>Our agents</h3>
                    <h1>our agents all over the world</h1>
                </div>
                <div class="agent-list">
				<ul>
                    <li><i class="fas fa-angle-double-right"></i>MP Education and Migration Services</li>

                    <li><i class="fas fa-angle-double-right"></i>MYAUSVISA</li>

                    <li><i class="fas fa-angle-double-right"></i>K&O Migration & Education Services Centre</li>

                    <li><i class="fas fa-angle-double-right"></i>3Bees Group Pty Ltd</li>

                    <li><i class="fas fa-angle-double-right"></i>Aussie Professional Group</li>

                    <li><i class="fas fa-angle-double-right"></i>Baba Education Consultancy</li>

                    <li><i class="fas fa-angle-double-right"></i>Eplanet Global</li>

                    <li><i class="fas fa-angle-double-right"></i>Global Consulting & Business Services</li>

                    <li><i class="fas fa-angle-double-right"></i>Guidance Education and Visa Services</li>

                    <li><i class="fas fa-angle-double-right"></i>KIEC Global</li>

                    <li><i class="fas fa-angle-double-right"></i>Oscars Education & Migration Services</li>

                    <li><i class="fas fa-angle-double-right"></i>Oxford Education & Visa Service</li>

                    <li><i class="fas fa-angle-double-right"></i>Smart Abroad Studies</li>

                    <li><i class="fas fa-angle-double-right"></i>Student Vibes Education & Visa Services</li>

                    <li><i class="fas fa-angle-double-right"></i>The Next Education & Migration Services</li>

                    <li><i class="fas fa-angle-double-right"></i>Yes People Education & Visa Services</li>

                    <li><i class="fas fa-angle-double-right"></i>Brimta Education & Recruitement Service</li>

                    <li><i class="fas fa-angle-double-right"></i>Yes Study World</li>

                    <li><i class="fas fa-angle-double-right"></i>Education and Migration Corner</li>

                    <li><i class="fas fa-angle-double-right"></i>Versatile International Education & Migration</li>

                    <li><i class="fas fa-angle-double-right"></i>Pixar Educational Consultancy</li>

                    <li><i class="fas fa-angle-double-right"></i>Idol student services Pty Ltd</li>

                    <li><i class="fas fa-angle-double-right"></i>Victory Consultants</li>

                    <li><i class="fas fa-angle-double-right"></i>AGS Education and Migration</li>

                    <li><i class="fas fa-angle-double-right"></i>International Migration & Education Services (IMES) Pty Ltd</li>

                    <li><i class="fas fa-angle-double-right"></i>Oasis Education & Migration Group</li>

                    <li><i class="fas fa-angle-double-right"></i>Naosams Migration Services</li>

                    <li><i class="fas fa-angle-double-right"></i>Lotus International Education Foundation</li>

                    <li><i class="fas fa-angle-double-right"></i>Embark Education and Migration Services</li>

                    <li><i class="fas fa-angle-double-right"></i>EDU hub global</li>

                    <li><i class="fas fa-angle-double-right"></i>The immigration Company</li>

                    <li><i class="fas fa-angle-double-right"></i>Edelight education services</li>

                    <li><i class="fas fa-angle-double-right"></i>hub education pty ltd</li>
                    <li><i class="fas fa-angle-double-right"></i>Oasis migration and education</li>
                    <li><i class="fas fa-angle-double-right"></i>Brainstorm Education and Immigration Consultants</li>
                </ul>
                
				<ul>
                    <li><i class="fas fa-angle-double-right"></i>Merit Education and visa services</li>

                    <li><i class="fas fa-angle-double-right"></i>Journey to Australia</li>

                    <li><i class="fas fa-angle-double-right"></i>Smart Direction Education and Visa Services</li>

                    <li><i class="fas fa-angle-double-right"></i>Mantra Education and Migration</li>

                    <li><i class="fas fa-angle-double-right"></i>Grace International Education & Migration Services</li>

                    <li><i class="fas fa-angle-double-right"></i>abc education consultancy</li>

                    <li><i class="fas fa-angle-double-right"></i>Digital Education Network Pty Ltd</li>

                    <li><i class="fas fa-angle-double-right"></i>The Iconic Education and Migration</li>

                    <li><i class="fas fa-angle-double-right"></i>Nibs education</li>

                    <li><i class="fas fa-angle-double-right"></i>E visa Plus</li>

                    <li><i class="fas fa-angle-double-right"></i>Embark Group Australia</li>

                    <li><i class="fas fa-angle-double-right"></i>STEP UP PROFESSION - SYDNEY</li>

                    <li><i class="fas fa-angle-double-right"></i>Y-axis Immigration and education Service Pty Ltd</li>

                    <li><i class="fas fa-angle-double-right"></i>Vantage Consultants Pty Ltd.</li>

                    <li><i class="fas fa-angle-double-right"></i>Maan International Pty Ltd. ,MI Education</li>

                    <li><i class="fas fa-angle-double-right"></i>Hima Aus Education Consultancy Pty Ltd</li>

                    <li><i class="fas fa-angle-double-right"></i>Apollo International</li>

                    <li><i class="fas fa-angle-double-right"></i>Edelight Education Services</li>

                    <li><i class="fas fa-angle-double-right"></i>Infinity Visa & Education Consultants</li>

                    <li><i class="fas fa-angle-double-right"></i>Global Study Partners</li>

                    <li><i class="fas fa-angle-double-right"></i>Aspire Education & Migration Pty Ltd</li>

                    <li><i class="fas fa-angle-double-right"></i>Aspire Education Career Consultancy</li>

                    <li><i class="fas fa-angle-double-right"></i>ESI Global</li>

                    <li><i class="fas fa-angle-double-right"></i>Visa Alliance</li>

                    <li><i class="fas fa-angle-double-right"></i>Edunetwork Australia</li>

                    <li><i class="fas fa-angle-double-right"></i>Nepoz Education & Visa Services</li>

                    <li><i class="fas fa-angle-double-right"></i>Further Education & Migration Services</li>

                    <li><i class="fas fa-angle-double-right"></i>UR Style Education</li>

                    <li><i class="fas fa-angle-double-right"></i>Our Dream Associates</li>

                    <li><i class="fas fa-angle-double-right"></i>Christie Migration Agents</li>

                    <li><i class="fas fa-angle-double-right"></i>Aussie Concultant & Visa Services</li>
                </ul>
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