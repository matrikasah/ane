@extends('frontend.master')
@section('content')

<section class="featured-img">
    <img src="{{ asset('image/course-featured.jpg') }}">
    <div class="overlap-featured-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-7">
                    <h1 class="innerpage-title">Contact us</h1>
                    <p>Get in touch with us</p>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                      </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="innerpage-content contact-tab">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item mr-0" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#international1" type="button" role="tab" aria-controls="international1" aria-selected="true">Sydney Campus <i class="fas fa-angle-double-down"></i></button>
                  </li>
                  <li class="nav-item ml-0" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#international2" type="button" role="tab" aria-controls="international2" aria-selected="false">Canberra Campus <i class="fas fa-angle-double-down"></i></button>
                  </li>
                </ul>
                <div class="tab-content content-text contact-tab" id="myTabContent">
                  <div class="tab-pane fade show active" id="international1" role="tabpanel" aria-labelledby="home-tab">
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="small-title title">
                                    <h3>Sydney Campus</h3>
                                    <h1>Need an Answer from Sydney Campus?</h1>
                                </div>
                                <ul class="contact-info">
                                    <li>
                                            <span class="label">
                                                <span><img src="{{ asset('image/phone.svg') }}" class="img-full"></span>
                                                <span class="bold-text">Phone</span> <a href="tel:+61 2 9281 5929">+61 2 9281 5929</a> </span>
                                        </li>
                                    <li>
                                        <span class="label">
                                            <span><img src="{{ asset('image/message.svg') }}" class="img-full"></span>
                                            <span class="bold-text">Email</span> <a href="mailto:sydney.campus@ane.edu.au">sydney.campus@ane.edu.au</a></span>
                                    </li>
                                    <li>
                                        <span class="label">
                                            <span><img src="{{ asset('image/location.svg') }}" class="img-full"></span>
                                            <span class="bold-text">Location</span> Suite 67 & 68 Level 6, 8-24 Kippax Street Surry Hills NSW 2010 </span>
                                    </li>
                                </ul>
                              </div>
                          </div>					  		
                          
                        <div class="row">
                            <div class="col-sm-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.2104103045654!2d151.20676691436464!3d-33.88423448065198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12afea99b3105d%3A0x8bdb74118bf06436!2sANE%20College!5e0!3m2!1sen!2snp!4v1636645205932!5m2!1sen!2snp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="col-sm-7">
                                <div class="course-features-info contact-info">
                                    <div class="quote d-flex">
                                        <i class="fas fa-quote-right"></i>
                                        <p>We are here to turn your aspirations into reality. If you want to know more, the ANE College team is here to answer all your questions.</p>
                                    </div>							            
                                </div>

                                <div class="contact-form">
                                    <h5>SAY HI!!!</h5>

                                    <form>
                                      
                                          <input type="text" class="form-control" placeholder="Full Name">    
                                          <input type="text" class="form-control" placeholder="Email">					    
                                          <input type="text" class="form-control" placeholder="Phone">
                                    
                                     
                                          <textarea class="form-control p-3" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                       
                                     
                                                               
                                          <button type="submit" class="btn btn-black mb-2 hvr-sweep-to-right">Submit</button>
                                          
                                      
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row contact-info">
                            <div class="col-sm-3 contact-block  mt-4">
                                <h5>Enrollment</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-3 contact-block mt-4">
                                <h5>Finance team</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-3 contact-block mt-4">
                                <h5>Student Service</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-3 contact-block mt-4">
                                <h5>Marketing Team</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                        
                        
                    </div>
                  <div class="tab-pane fade" id="international2" role="tabpanel" aria-labelledby="profile-tab">
                         <!-- <div class="row">
                              <div class="col-sm-12">
                                  <div class="small-title title">
                                    <h3>Canberra Campus</h3>
                                    <h1>Need an Answer from Sydney Campus?</h1>
                                </div>
                                <ul class="contact-info">
                                    <li>
                                            <span class="label">
                                                <span><img src="{{ asset('image/phone.svg') }}" class="img-full"></span>
                                                <span class="bold-text">Phone</span> +61 2 9281 5929</span>
                                        </li>
                                    <li>
                                        <span class="label">
                                            <span><img src="{{ asset('image/message.svg') }}" class="img-full"></span>
                                            <span class="bold-text">Email</span> sydney.campus@ane.edu.au</span>
                                    </li>
                                    <li>
                                        <span class="label">
                                            <span><img src="{{ asset('image/location.svg') }}" class="img-full"></span>
                                            <span class="bold-text">Location</span> Suite 67 & 68 Level 6, 8-24 Kippax Street Surry Hills NSW 2010 </span>
                                    </li>
                                </ul>
                              </div>
                          </div>					  		
                          
                        <div class="row">
                            <div class="col-sm-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.2104103045654!2d151.20676691436464!3d-33.88423448065198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12afea99b3105d%3A0x8bdb74118bf06436!2sANE%20College!5e0!3m2!1sen!2snp!4v1636645205932!5m2!1sen!2snp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="col-sm-7">
                                <div class="course-features-info contact-info">
                                    <div class="quote d-flex">
                                        <i class="fas fa-quote-right"></i>
                                        <p>We are here to turn your aspirations into reality. If you want to know more, the ANE College team is here to answer all your questions.</p>
                                    </div>							            
                                </div>

                                <div class="contact-form">
                                    <h5>SAY HI!!!</h5>

                                    <form>
                                      
                                          <input type="text" class="form-control" placeholder="Full Name">    
                                          <input type="text" class="form-control" placeholder="Email">					    
                                          <input type="text" class="form-control" placeholder="Phone">
                                    
                                     
                                          <textarea class="form-control p-3" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                       
                                     
                                                               
                                          <button type="submit" class="btn btn-black mb-2 hvr-sweep-to-right">Submit</button>
                                          
                                      
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row contact-info">
                            <div class="col-sm-4 contact-block  mt-4">
                                <h5>Management team</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 contact-block mt-4">
                                <h5>Finance team</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 contact-block mt-4">
                                <h5>IT team</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 contact-block mt-4">
                                <h5>Support team</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 contact-block mt-4">
                                <h5>Faculty team</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 contact-block mt-4">
                                <h5>24/7 Student assistance</h5>
                                <ul>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                    <li>
                                        <div class="name">charles lecrec</div>
                                        <div class="designation">designation</div>
                                        <a href="tel:+61 2 9281 5929"><i class="fas fa-mobile-alt"></i>+61 2 9281 5929</a>
                                        <a href="mailto:sydney.campus@ane.edu.au"><i class="far fa-envelope"></i>sydney.campus@ane.edu.au</a>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                        <div class="coming-soon">
                            <div class="speaker"><i class="fas fa-bullhorn"></i></div>
                            <h1>coming soon !!</h1>
                        </div>
                  </div>
                                

                  </div>
                </div>							
            </div>
        </div>
    </div>
</section>






<section class="gap enrollment">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card">
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
				<div class="card">
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
				<div class="card">
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