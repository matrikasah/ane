@extends('frontend.master')
@section('content')
<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">OSHC</h1>
					<p>Overseas Student Health Cover</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">OSHC</li>
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
						<img src="{{ asset('image/insurance.jpg') }}" class="img-responsive">
					</div>
					<br>
					<br>
			</div>
			<div class="col-sm-7 col-lg-7">
				<div class="small-title title">
						<h3>OSHC</h3>
						<h1>Overseas Student Health Cover</h1>
					</div>
					<p class="para">You are free to select an approved OSHC provider and pay for the policy on your own. However, ANE College can refer you to a list below for the providers only, as you need to complete this task as an individual.
					In the case of international students, if your educational consultancy arranges your OSHC coverage, you need to remember the name of your health insurance provider, the date that your policy starts and finishes, and the terms and conditions.
					If you arrange OSHC coverage yourself, you need to remember the policy number to include in the visa application.
					You do not need OSHC if you are:
					</p>
					<ul>
						<li><i class="fas fa-angle-double-right"></i>a Norwegian student covered by the Norwegian National Insurance Scheme</li>
						<li><i class="fas fa-angle-double-right"></i>Swedish student covered by Kammarkollegiet</li>
						<li><i class="fas fa-angle-double-right"></i>a Belgian student covered under the Reciprocal Health Care Agreement with Australia.</li>
					</ul>
					<div class="table-responsive">
						<table class="table table-striped">
							<tbody>
								<tr>
									<td>
										AHM
									</td>
									<td>
										http://ahmoshc.com/english.aspx
									</td>
								</tr>
								<tr>
									<td>
										NIB
										</td>
									<td>
										http://www.nib.com.au/overseas-students
										</td>
								</tr>
								<tr>
									<td>
										Bupa
										</td>
									<td>
										http://www.bupa.com.au/health-insurance/cover/oshc
										</td>
								</tr>
								<tr>
									<td>
										Medibank
										</td>
									<td>
										http://www.medibank.com.au/oshc/
										</td>
								</tr>
								<tr>
									<td>
										Allianz (Worldcare)
										</td>
									<td>
										https://www.oshcallianzassistance.com.au/
										</td>
								</tr>
								<tr>
									<td>
										Compare All
										</td>
									<td>
										http://www.bupa.com.au/health-insurance/cover/oshc
									</td>								
								</tr>
							</tbody>
						</table>
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