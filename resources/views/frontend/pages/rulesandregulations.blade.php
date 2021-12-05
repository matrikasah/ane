@extends('frontend.master')
@section('content')
<section class="featured-img">
	<img src="{{ asset('image/course-featured.jpg') }}">
	<div class="overlap-featured-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7">
					<h1 class="innerpage-title">Rules & Regulations</h1>
					<p>ANE Rules & Regulations</p>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Rules & Regulations</li>
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
						<img src="{{ asset('image/rules.jpg') }}" class="img-responsive">
					</div>
			</div>
			<div class="col-sm-7 col-lg-7">
				<div class="small-title title">
						<h3>Rules & Regulations</h3>
						<h1>While studying at ANE College</h1>
					</div>
					  <div class="bold-text">Alcohol</div>
					<p class="para">Alcohol is NOT permitted on ANE College’s premises. It, being an educational Institution, the influence of liquor spoils the learning environment of the Institution.</p>
					<div class="bold-text">      Smoking</div>
					<p class="para">ANE College is a NON-SMOKING workplace, and we ask for your assistance not to smoke on ANE College’s premises or within the building.</p>
					<div class="bold-text">       Chewing Gum</div>
					<p class="para">The chewing of gum is not entertained on the premises, as all classrooms and hallways have carpets.</p>
					<div class="bold-text">      Drugs</div>
					<p class="para">You must NOT bring drugs to ANE College. Anybody found doing any sort of dealing with the drugs will be expelled from the college and reported to the police.</p>
					<div class="bold-text">     Spitting</div>
					<p class="para">Spitting is NOT allowed in public places in Australia. It is against the law, and you can be fined if you are caught spitting.</p>
					<div class="bold-text">       Firearms and Knives</div>
					<p class="para">It is against the law in New South Wales to carry firearms or knives in public places, and you must NOT bring any firearms, knives, or any kind of weapons to ANE College. Anybody found with any sort of weapons will be expelled from the college and reported to the police.</p>
					<div class="bold-text">       Dress</div> 
					<p class="para">Dress should be tidy, giving a professional look to the students. Thongs or any clothing considered by management to be offensive will not be allowed.</p>
					<div class="bold-text">      Mobile Phones</div>
					 <p class="para">Mobile phones need to be strictly switched off during class or any seminar. You can use the mobile phones out of class sessions, breaks, and common room.</p>
					<div class="bold-text">      Food and Drink</div>
					<p class="para">Eating and drinking beverages are not allowed in the classrooms, computer labs, hallways, stairways, and lifts. You can use the common room for eating and drinking.</p>
					<div class="bold-text"> Litter</div>
					<p class="para">Keep your surroundings clean. Would you please use rubbish bins for the litter?</p>


					<div class="bold-text">Important Tips:</div>
 					<p>Never leave your belongings. In case of lost, check at Reception and in the classroom. Keep ANE College’s premises clean and do not write anything on the walls or the desks. The students are required to leave the college’s premises in neat condition.</p>



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