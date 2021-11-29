@extends('frontend.master')
@section('content')
    
<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Resource Hub</h1>
					<p>Get some resources</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Resource Hub</li>
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
            <div class="col-sm-5 col-lg-4">
				<div class="ceo-img">
					<img src="{{ asset('image/article-1.jpg') }}" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-7 col-lg-7">
				<div class="small-title title">
						<h3>Resource Hub</h3>
						<h1>Glazed beef & honeyed carrots</h1>
					</div>
                    <p class="para"> A classic reinvente/in just a few steps and all done in the one pan, so it's easy for aryone to
                        pull off, This glute415nd dairy-free dish is packed with so much flavour, it can be reserved
                        for a special nigtit.</p>
                    <div class="bold-text">Serves 2</div>
                    <h3 class="bold-text">INGREDIENTS</h3>
                    
                    <ul>
						<li><i class="fas fa-angle-double-right"></i>1 tbsp oil</li>
                        <li><i class="fas fa-angle-double-right"></i>200g beef fillet</li>
                        <li><i class="fas fa-angle-double-right"></i>Salt and pepper</li>
                        <li><i class="fas fa-angle-double-right"></i>2 carrots, chopped into small pieces</li>
                        <li><i class="fas fa-angle-double-right"></i>1 tbsp honey</li>
                        <li><i class="fas fa-angle-double-right"></i>1 tbsp butter</li>
                        <li><i class="fas fa-angle-double-right"></i>2 sprigs rosemary</li>
                        <li><i class="fas fa-angle-double-right"></i>Baby rocket leaves, to serve</li>
                    </ul>

                    <h3 class="bold-text">METHOD</h3>
                    <ul>
                        <li><i class="fas fa-angle-double-right"></i>Add the oil to a skillet pan and preheat on medium-high.
                        </li>
                        <li><i class="fas fa-angle-double-right"></i>Season beef with salt and pepper to taste. Place in the
                        pan and cook for 3-5 minutes, until brown. Turn over and
                        cock until the juice starts to seep through (for medium).
                        Remove beef from the pan and allow it to rest
                        </li>
                        <li><i class="fas fa-angle-double-right"></i>Add the carrots to the pan and haf cover with water.
                        Aud the honey and butter and boil until water evaporates.
                        stirring occasianally. Pick the rosemary leaves off the stalk
                        and add to the pan. Remove pan from heat.</li>
                        <li><i class="fas fa-angle-double-right"></i>Transfer the carrots to a plate, Add baby rocket and serve
                        with beet on top.</li>
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