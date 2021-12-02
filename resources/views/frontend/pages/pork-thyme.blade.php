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
					<img src="{{ asset('image/article-2.jpg') }}" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-7 col-lg-7">
				<div class="small-title title">
						<h3>Resource Hub</h3>
						<h1>Pork & thyme meatballs</h1>
					</div>
                    <p class="para"> A refreshing and warming autumn
                        dish that's as hearty as it is zesty
                        The use of thyme and lemon lifts
                        this gluten- and dairy-free meal
                        so it's not heavy, Baked meatballs
                        mean you spend less time cooking
                        and end up with a better result.</p>
                    <div class="bold-text">Serves 2</div>
                    <h3 class="bold-text">INGREDIENTS</h3>
                    
                    <ul>
						<li><i class="fas fa-angle-double-right"></i>200g pork minc
                            </li>
                        <li><i class="fas fa-angle-double-right"></i>¼ bunch thyme
                            </li>
                        <li><i class="fas fa-angle-double-right"></i>½ lemon, zest
                            </li>
                        <li><i class="fas fa-angle-double-right"></i>6 tbsp tomato paste
                            </li>
                        <li><i class="fas fa-angle-double-right"></i>Salt and pepper
                            </li>
                        <li><i class="fas fa-angle-double-right"></i>Baby rocket leaves, to serve
                            </li>
                        <li><i class="fas fa-angle-double-right"></i>1 radish, finely sliced,
                            to serve (optional)
                           </li>
                    </ul>

                    <h3 class="bold-text">METHOD</h3>
                    <ul>
                        <li><i class="fas fa-angle-double-right"></i>Preheat oven to 160°C. Line a baking
                            tray with baking paper.
                        </li>
                        <li><i class="fas fa-angle-double-right"></i>In a bowl, combine the pork mince,
                            thyme, lemon zest and half the
                            tomato paste, Season to taste,
                        </li>
                        <li><i class="fas fa-angle-double-right"></i>Roll into bite-size balls and place
                            on the baking tray, topped with the
                            remaining tomato paste, Place in the
                            oven and bake for 25 minutes.
                            </li>
                        <li><i class="fas fa-angle-double-right"></i>Serve on a plate garnished with
                            Daby rocket leaves and radish.</li>
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