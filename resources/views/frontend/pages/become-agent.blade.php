@extends('frontend.master')
@section('content')

<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Become an Agent</h1>
					<p>Defined by service & expertise</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Become an Agent</li>
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
						<h3>Become an Agent</h3>
						<h1>Defined by service & expertise</h1>
					</div>
					<p class="para">
					If you wish to be an agent, ANE College employs a rigorous process in agent selection. We ensure quality principles and objectives while dealing with education agents.</p>

					<h3>ANE College requires its agents to</h3>
					<p class="para">
						Have appropriate knowledge and clear understanding of the international education system in Australia, including the Australian International Education and Training Agent Code of Ethics,
					</p>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>Act honestly</li>
						<li><i class="fas fa-angle-double-right"></i>Observe confidentiality and transparency</li>
						<li><i class="fas fa-angle-double-right"></i>Written documentation</li>
						<li><i class="fas fa-angle-double-right"></i>Should take responsible steps to avoid conflicts of interests with duties as an education agent.</li>
					</ul>
  					<div class="bold-text">ANE College has mentioned all of our approved agents on the List of Approved Agents.</div>

  					<h3>Agent Application Process</h3>
					The processes of becoming an agent of ANE College include:
					<ul>
						<li><i class="fas fa-angle-double-right"></i>Application filled clearly with two current referees and required supporting documents</li>
						<li><i class="fas fa-angle-double-right"></i>Referee Check</li>
						<li><i class="fas fa-angle-double-right"></i>Initial Assessment by ANE College</li>
						<li><i class="fas fa-angle-double-right"></i>Initial meeting held to ensure clear agreement on ethnical and quality principles</li>
						<li><i class="fas fa-angle-double-right"></i>Check Regulatory Requirements</li>
						<li><i class="fas fa-angle-double-right"></i>Signing of Agency Agreement</li>
						<li><i class="fas fa-angle-double-right"></i>Hand over of Agency Information Package  to familiarise the new agent with ANE College’s key policies, procedures, and quality assurance requirements</li>
						<li><i class="fas fa-angle-double-right"></i>Conduct Agent Training Session and Seminars</li>
					</ul>
					<h3>Agent Monitoring</h3>
					<p class="para">ANE College strictly monitors the performances and conducts of all appointed agents. The agent agreements are offered yearly, and we conduct an annual quality review before renewing an agreement.</p>
					<p class="para">ANE College has full authority to immediately suspend the agency agreement if an agent becomes negligent, careless, incompetent, engaged in false, misleading, and unethical advertising and recruitment practices that harm Australian education and training integrity.</p>
					<h3>Application</h3>
					<p class="para">Apply using our Agency Application Form, or for more information, please contact us to arrange a phone call or face-to-face meeting.</p>

					
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