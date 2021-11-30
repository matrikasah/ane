@extends('frontend.master')
@section('content')
	

<section class="overlap-vid">
	<video loop autoplay muted playsinline id="vid">
	  <source src="{{ asset('image/ane3.mp4') }}" >
	</video>
	<div class="overlap-vid-text">
	<div class="container">
		<!--<div class="row">
			<div class="col-lg-7 col-md-8 col-sm-12" id="menu-topbar-left">
				<h1>Advancing Knowledge, Transforming Lives!</h1>
				<p>A learning community aspiring to grow in knowledge and envisioning comprehensive development into practical professionalism. </p>
				
				<button type="button" class="btn btn-primary hvr-bounce-to-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Apply now
			</button>
			</div>
		</div>-->
		<div class="row top-space">
			<div class="col-lg-7 col-md-12 col-sm-12">
				<div class="course-search d-flex" data-aos="fade-up">
					<div class="input-group">
						<span class="input-group-text" id="addon-wrapping">Find a course</span>
					  <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
					    <option selected>Choose your course</option>
					    <option value="1">Diploma of Early Childhood Education and Care</option>
					    <option value="2">Diploma of Hospitality Management</option>
					    <option value="3">Certificate IV in Commercial Cookery</option>
					    <option value="4">Certificate IV in Disability</option>
					    <option value="5">Diploma of Community Services</option>
					  </select>
					  <button class="btn btn-black hvr-sweep-to-right" type="button">GO</button>
					</div>
				</div>	
			</div>
		</div>
	</div>
	</div>
</section>

<section class="overlap-cards">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card card-c1" data-aos="fade-up">
				  <div class="card-body">
				  	<img src="{{ asset('image/Job Ready Programs.svg') }}">
				    <h5 class="card-title">Job Ready Programs</h5>
				    <p class="card-text">With the employment centre of everything we do, we offer pioneering Job Ready Programs on job-ready skills.</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card card-c2" data-aos="fade-up">
				  <div class="card-body">
				  	<img src="{{ asset('image/Suitable Partnerships.svg') }}">
				    <h5 class="card-title">Suitable Partnerships</h5>
				    <p class="card-text">Upon completion of the study, we help you with placements on completion or during the study.</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card card-c3" data-aos="fade-up">
				  <div class="card-body">
				  	<img src="{{ asset('image/Support Services.svg') }}">
				    <h5 class="card-title">Support Services</h5>
				    <p class="card-text">We offer support services like airport pickup, accommodation, pre-arrival guidance, and insurance cover.</p>
				  </div>
				</div>
			</div>
			<!--<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="card card-c4" data-aos="fade-up">
				  <div class="card-body">
				  	<img src="{{ asset('image/Articulation Pathways.svg') }}">
				    <h5 class="card-title">Articulation Pathways</h5>
				    <p class="card-text">We have partnered with Australian universities that offer articulation, gaining credit and recognition.</p>
				  </div>
				</div>
			</div>-->
		</div>
	</div>
</section>

<section class="gap about" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
					<div class="title">
						<h3>about ANE</h3>
						<h1>Get to know more about ANE College</h1>
					</div>
					<p>ANE College is a Registered Training Organization (RTO) approved by the Australian Skills Quality Authority (ASQA), www.asqa.gov.au, and complaint to the Standards of Registered Training Organization (RTO) established to provide nationally accredited and recognized qualifications. Dynamic and vibrant, the ANE College is a place where opportunity is explored. The educational-training organization is for the professions dedicated to providing experiences focused on employability outcomes.</p>
					<p>With employability at the centre of everything we do, we offer relevant courses taught by leading experts. We have flexible study options and a personalized approach, which will help you bring your dream job into a reality. We offer courses like Diploma of Hospitality Management, Diploma of Early Childhood Education and Care, Certificate IV in Commercial Cookery, Certificate IV in Disability, Diploma of Community Services, and many others.</p>
					<a href="{{route('about')}}" class="btn btn-primary hvr-icon-wobble-horizontal">view more <i class="fas fa-arrow-right hvr-icon"></i></a>
				
			</div>
		</div>
	</div>
</section>


<section class="gap" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-7 col-xl-6">
				<div class="make-history">
					<img src="{{ asset('image/make-history.jpg') }}" class="img-responsive img-full">
					<div class="make-history-overlap">
						<h2>Make history</h2>
						<p>We are here to turn your aspirations into reality! Students in ANE College enjoy an exceptional education under the guidance of highly professionals and experts.</p>
					</div>
				</div>
				
			</div>
			<div class="col-md-12 col-lg-5 col-xl-5">
				<div class="support">
					<h3>Support Service at your finger tips</h3>
				<ul>
					<li  data-aos="fade-up">
						<div class="icon-img">
							<img src="{{ asset('image/SUCCESS COACHES.svg') }}" class="img-responsive img-full">
						</div>
						<div class="icon-text">
							<h5>Success Coaches</h5>
							<p class="para">
								Our team of Success Coaches is ready to help you throughout your studies, from choosing the right classes to applying for graduate jobs. 
							</p>
						</div>
					</li>
					<li  data-aos="fade-up">
						<div class="icon-img">
							<img src="{{ asset('image/COURSE AND CAREERS ADVISORS.svg') }}" class="img-responsive img-full">
						</div>
						<div class="icon-text">
							<h5>Course and Careers Advisors</h5>
							<p class="para">
								We ensure that you achieve your career goals by providing future-focused courses to industry exposure and workplace preparation.
							</p>
						</div>
					</li>
					<li  data-aos="fade-up">
						<div class="icon-img">
							<img src="{{ asset('image/OFFSHORE STUDENT SUPORT.svg') }}" class="img-responsive img-full">
						</div>
						<div class="icon-text">
							<h5>Offshore Student suport</h5>
							<p class="para">
								Our international student support service team provides guidance at every step, including understanding your student visa, accommodation care, legal advice, managing your studies, and more.
							</p>
						</div>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="gap courses" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="title">
					<h3>our courses</h3>
					<h1>courses we offer for you</h1>
				</div>
				<div class="swiper-container mySwiper">
			      <div class="swiper-wrapper" data-swiper-autoplay="2000">
			          <div class="swiper-slide">
									<div class="card">
										<div class="overlap-img">							
									  		<img src="{{ asset('image/childhood-education.jpg') }}" class="card-img-top" alt="...">
									  		<a href="{{route('child-education')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
									  	</div>	
									  		
									  	
									  <div class="card-body">	
								  		
								  			<h5 class="category">Childhood Education</h5>
									  		<h5 class="card-title">Diploma of Early Childhood Education and Care  <span class="code">CHC50113</span> </h5>
									  </div>
									  <div class="card-footer">
										    <p class="card-text"> <span> CRICOS Course Code:</span> 102538F</p>
										    <p class="card-text"> <span>Course Duration:</span>  104 Weeks</p>
										    								    
									  </div>
									</div>
								</div>
							<div class="swiper-slide">
								<div class="card">
									<div class="overlap-img">							
								  		<img src="{{ asset('image/cookery.jpg') }}" class="card-img-top" alt="...">
								  		<a href="{{route('commercial-cookery')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
								  	</div>	
								  		
								  	
								  <div class="card-body">	
							  		
							  			<h5 class="category">Cookery</h5>
								  		<h5 class="card-title">Certificate IV in Commercial Cookery  <span class="code">SIT40516</span> </h5>
								  </div>
								  <div class="card-footer">
									    <p class="card-text"> <span> CRICOS Course Code:</span>  102540A</p>
									    <p class="card-text"> <span>Course Duration:</span>  78 Weeks</p>
									    								    
								  </div>
								</div>	  
							</div>
							<div class="swiper-slide">
								<div class="card">
									<div class="overlap-img">							
								  		<img src="{{ asset('image/hospitality-management.jpg') }}" class="card-img-top" alt="...">
								  		<a href="{{route('hospitality-management')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
								  	</div>	
								  		
								  	
								  <div class="card-body">	
							  		
							  			<h5 class="category">Management</h5>
								  		<h5 class="card-title">Diploma of Hospitality Management  <span class="code">SIT50416</span> </h5>
								  </div>
								  <div class="card-footer">
									    <p class="card-text"> <span> CRICOS Course Code:</span> 102541M</p>
									    <p class="card-text"> <span>Course Duration:</span>  78 Weeks</p>
									    								    
								  </div>
								</div>
							</div>
							<div class="swiper-slide">
									<div class="card">
										<div class="overlap-img">							
									  		<img src="{{ asset('image/community-services.jpg') }}" class="card-img-top" alt="...">
									  		<a href="{{route('community-service')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
									  	</div>	
									  		
									  	
									  <div class="card-body">	
								  		
								  			<h5 class="category">Services</h5>
									  		<h5 class="card-title">Diploma of Community Services  <span class="code">CHC52015</span> </h5>
									  </div>
									  <div class="card-footer">
										    <p class="card-text"> <span> CRICOS Course Code:</span> 102539E</p>
										    <p class="card-text"> <span>Course Duration:</span>  78 Weeks</p>
										    								    
									  </div>
									</div>
								</div>
							<div class="swiper-slide">
								<div class="card">
									<div class="overlap-img">							
								  		<img src="{{ asset('image/disability.jpg') }}" class="card-img-top" alt="...">
								  		<a href="{{route('disability')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
								  	</div>	
								  		
								  	
								  <div class="card-body">	
							  		
							  			<h5 class="category">Disability</h5>
								  		<h5 class="card-title">Certificate IV in Disability  <span class="code">CHC43115</span> </h5>
								  </div>
								  <div class="card-footer">
									    <p class="card-text"> <span> CRICOS Course Code:</span> 102537G</p>
									    <p class="card-text"> <span>Course Duration:</span>  52 Weeks</p>
									    								    
								  </div>
								</div>	  
							</div>
						</div>
						<div class="swiper-pagination"></div>
				</div>
				<a  href="{{route('course')}}" class="btn btn-primary hvr-bounce-to-right mt-4">view all <i class="fas fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="gap enquiry"  data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-5">
				<div class="next-wrap">
					<div class="next title">
						<h1>Next Orientation</h1>
								<p><i class="fas fa-angle-double-right hvr-icon hvr-icon"></i>Sydney Campus</p>
								<p><i class="fas fa-angle-double-right hvr-icon hvr-icon"></i>11th December 2021 | 9:00 am</p>
					</div>
					<p class="next-orientation">If you have any queries do not hesitate to ask us just by filling out the form.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="button-block">
					<a href="{{route('contact')}}" class="btn btn-primary btn-black hvr-sweep-to-right" >Enquiry</a>
					<button type="button" class="btn btn-primary btn-black hvr-sweep-to-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  Apply now
			</button>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="gap news">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="title">
					<h3>Resource Hub</h3>
					<h1>Get some resources</h1>
				</div>
			</div>
		</div>
				<div class="row">
		      <div class="col-sm-4"  data-aos="fade-up">
						<div class="card">
							<a href="/Cauliflower">
							<!-- <div class="news-category">
								<h5>News</h5>
							</div> -->
							<div class="article-img">
						  <img src="{{ asset('image/article-3.jpg') }}" class="card-img-top" alt="...">
						  </div>
						  <div class="card-body">
						  	<h5 class="card-title">Cauliflower puree</h5>
							  <p class="para">You can make this in a flash with just two steps Its smooth, creamy, rich and velvety flavour
								makes it a great side dish.</p>
							  <div class="note">
							  <p><i class="fas fa-user-alt"></i>Ryka Johnson</p>
								<p><i class="far fa-calendar-check"></i>Aug, 2020</p>
							</div>
						  </div>
						  </a>
						</div>
					</div>
					<div class="col-sm-4"  data-aos="fade-up">
						<div class="card">
							<a href="/glazed">
							<!-- <div class="news-category">
								<h5>Events</h5>
							</div> -->
							<div class="article-img">
						  <img src="{{ asset('image/article-1.jpg') }}" class="card-img-top" alt="...">
							</div>
						  <div class="card-body">
						  	<h5 class="card-title">Glazed beef & honeyed carrots</h5>
							  <p class="para">A classic reinvente/in just a few steps and all done in the one pan, so it's easy for aryone to
								pull off, This glute415nd dairy-free dish is packed with so much flavour, it can be reserved
								for a special nigtit.</p>
							<div class="note">
								<p><i class="fas fa-user-alt"></i>Ryka Johnson</p>
								<p><i class="far fa-calendar-check"></i>Aug, 2020</p>
							</div>
						  </div>
						  </a>
						</div>
					</div>
					<div class="col-sm-4"  data-aos="fade-up">
						<div class="card">
							<a href="/pork">
							<!-- <div class="news-category">
								<h5>Events</h5>
							</div> -->
							<div class="article-img">
						  <img src="{{ asset('image/article-2.jpg') }}" class="card-img-top" alt="...">
							</div>
						  <div class="card-body">
						  	<h5 class="card-title">Pork & thyme meatballs</h5>
							  <p class="para">A refreshing and warming autumn
								dish that's as hearty as it is zesty
								The use of thyme and lemon lifts
								this gluten- and dairy-free meal
								so it's not heavy, Baked meatballs
								mean you spend less time cooking
								and end up with a better result.</p>
							  <div class="note">
							  <p><i class="fas fa-user-alt"></i>Ryka Johnson</p>
								<p><i class="far fa-calendar-check"></i>Aug, 2020</p>
							</div>
						  </div>
						  </a>
						</div>
					</div>
				</div>
				
			</div>
</section>


<section class="gap Testimonials">
	<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('image/uni.png') }}"></div>
	<div class="Testimonials-content">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12">
	      	<div class="title">
						<h1>Let's hear from our students</h1>
					</div>
	        <div class="swiper-container mySwiper1">
	        <div class="swiper-wrapper" data-swiper-autoplay="2000">
	          <div class="swiper-slide">

	            <p class="bottom">
	              <i class="fas fa-quote-left"></i>
	              I am very happy and satisfied with ANE College’s course, trainers, and staff. I did Certificate IV in the Commercial Cookery course. The course details were constructive, and exercises were based on practical. The staffs were so flexible. I found the course very informative and filled many gaps in my past knowledge of cookery. Thank you for providing so much support and assistance during the course. I feel that the college delivers a high standard of materials and delivery of the course.
	            </p>
	            <div class="author">
	              <!-- <div class="author-img">
	                <img src="image/testimonials1.jpeg" alt="images not found">
	              </div> -->
	              <div class="author-name">
	                <h5>Samikshya Kharel</h5>
	                <p>Commercial Cookery</p>
	              </div>
	            </div>
	          </div>
	          <div class="swiper-slide">
	            <p class="bottom">
	              <i class="fas fa-quote-left"></i>
	              I studied Diploma of Early Childhood Education and Care at ANE College and trust me, the course and material are the best. The tuition fee is also reasonable. I was pretty impressed with the quality and found the classes to be more than adequate. I totally enjoyed my studies. I must say that the trainers are highly qualified and experts on what they do. The trainers’ feedback was of a high standard.
	            </p>
	            <div class="author">
	              <!-- <div class="author-img">
	                <img src="image/testimonials1.jpeg" alt="images not found">
	              </div> -->
	              <div class="author-name">
	                <h5>Victoria Brown</h5>
	                <p>Early Childhood Education and Care</p>
	              </div>
	            </div>
	          </div>
	          <div class="swiper-slide">
	            <p class="bottom">
	              <i class="fas fa-quote-left"></i>
	              The first thing that ANE College impressed me was its course syllabus and college fee. I was really happy with the way that the material was presented. My trainers gave me a thorough understanding of every module. The tutors made the course much easier. I would highly recommend the college to everyone keen to study for Diploma of Hospitality Management. Thank you, ANE College, for such an outstanding service!!!
	            </p>
	            <div class="author">
	              <!-- <div class="author-img">
	                <img src="image/testimonials1.jpeg" alt="images not found">
	              </div> -->
	              <div class="author-name">
	                <h5>Yang Xi</h5>
	                <p>Hospitality Management</p>
	              </div>
	            </div>
	          </div>
	          <div class="swiper-slide">
	            <p class="bottom">
	              <i class="fas fa-quote-left"></i>
	              For me, Communication with ANE College was excellent. I love how the emails and queries were answered quickly. I am amazed at how ready they were to answer every concern and question. When I called, the staff were so polite, and they looked happy to assist me. The trainers are also highly experienced and were more than happy to assist. The assignments contained highly relevant practical components that are based on real-life situations. Overall I’m pleased to choose ANE College to complete my studies.
	            </p>
	            <div class="author">
	              <!-- <div class="author-img">
	                <img src="image/testimonials1.jpeg" alt="images not found">
	              </div> -->
	              <div class="author-name">
	                <h5>Abara Smith</h5>
	                <p>Hospitality Management</p>
	              </div>
	            </div>
	          </div>
	          <div class="swiper-slide">
	            <p class="bottom">
	              <i class="fas fa-quote-left"></i>
	              I really enjoyed the course, and I must say how supportive ANE College was during my entire journey. I had a great experience and never had any issues with anything. If I had a question or did not understand a concept, the trainers were fast to reply and repeat the schedule again. I love how they quickly respond to emails. I did a Diploma of Community Services while I was also working a full-time job because the trainers and notes were well laid out and understandable. Thank you ANE College, I loved being a part of the college.

	            </p>
	            <div class="author">
	              <!-- <div class="author-img">
	                <img src="image/testimonials1.jpeg" alt="images not found">
	              </div> -->
	              <div class="author-name">
	                <h5>Delima Osman</h5>
	                <p>Community Services</p>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="swiper-pagination"></div>
	      </div>
	        
	      </div>
	    </div>
	  </div>
	  </div>
</section>

<section class="gap enrollment">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="title">
					<h3>Enrolment</h3>
					<h1>you can reach us for enrolment</h1>
				</div>
			</div>
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

