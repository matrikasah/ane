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
					<img src="{{ asset('image/article-3.jpg') }}" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-7 col-lg-7">
				<div class="small-title title">
						<h3>Resource Hub</h3>
						<h1>Cauliflower puree</h1>
					</div>
                    <p class="para"> You can make this in a flash with just two steps Its smooth, creamy, rich and velvety flavour
                    makes it a great side dish. It's gluten free and can also be made dairy free.</p>
                    <div class="bold-text">Serves 2</div>
                    <h3 class="bold-text">INGREDIENTS</h3>
                    
                    <ul>
						<li><i class="fas fa-angle-double-right"></i>¼ cauliflower, roughly chopped</li>
                        <li><i class="fas fa-angle-double-right"></i>1 cup milk</li>
                        <li><i class="fas fa-angle-double-right"></i>40g butter</li>
                        <li><i class="fas fa-angle-double-right"></i>Salt and pepper</li>
                        <li><i class="fas fa-angle-double-right"></i>Baby rocket leaves, to serve</li>
                        <li><i class="fas fa-angle-double-right"></i>1 radish, finely sliced, to serve</li>
                        <li><i class="fas fa-angle-double-right"></i>Extra virgin olive oil, to serve</li>
                    </ul>

                    <h3 class="bold-text">METHOD</h3>
                    <ul>
						<li><i class="fas fa-angle-double-right"></i>Place cauliflower in a saucepan, covered with the milk,
                        Simmer on low-medium heat until cauliflower is soft.</li>
                        <li><i class="fas fa-angle-double-right"></i>Add the butter and season with salt and pepper to taste
                         >Blend with a handheld mixer until smooth and creamy.</li>
                         <li><i class="fas fa-angle-double-right"></i>Serve in a bowl topped with baby rocket leaves, radish
                    slices and a drizzle of olive oil.</li>
                </ul>
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