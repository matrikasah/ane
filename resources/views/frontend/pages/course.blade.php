@extends('frontend.master')
@section('content')


<section class="featured-img">
<<<<<<< HEAD
    <img src="image/course-featured.jpg">
=======
    <img src="{{ asset('image/course-featured.jpg') }}">
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
    <div class="overlap-featured-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-7">
                    <h1 class="innerpage-title">Courses</h1>
                    <p>We offer you best the courses in town</p>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
<<<<<<< HEAD
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
=======
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                        <li class="breadcrumb-item active" aria-current="page">Course</li>
                      </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="innerpage-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            @include('frontend.partical.sidebar')				
            </div>
            <div class="col-sm-8">
                
                    <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="row courses">
                              <div class="col-sm-6">
                                <div class="card">
                                    <div class="overlap-img">							
<<<<<<< HEAD
                                          <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                          <a href="commercial-cookery.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                          <img src="{{ asset('image/cookery.jpg') }}" class="card-img-top" alt="...">
                                          <a href="{{route('commercial-cookery')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                      </div>	
                                          
                                      
                                  <div class="card-body">	
                                      
                                          <h5 class="category">Cookery</h5>
                                          <h5 class="card-title">Certificate IV in Commercial Cookery <span class="code">SIT40516 </span> </h5>
                                  </div>
                                  <div class="card-footer">
                                        <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                        <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                            
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="overlap-img">							
<<<<<<< HEAD
                                          <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                          <a href="commercial-cookery.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                          <img src="{{ asset('image/cookery.jpg') }}" class="card-img-top" alt="...">
                                          <a href="{{route('commercial-cookery')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                      </div>	
                                          
                                      
                                  <div class="card-body">	
                                      
                                          <h5 class="category">Cookery</h5>
                                          <h5 class="card-title">Certificate IV in Commercial Cookery  <span class="code">SIT40516 </span> </h5>
                                  </div>
                                  <div class="card-footer">
                                        <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                        <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                            
                                  </div>
                                </div>	  
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="overlap-img">							
<<<<<<< HEAD
                                          <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                          <a href="commercial-cookery.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                          <img src="{{ asset('image/cookery.jpg') }}" class="card-img-top" alt="...">
                                          <a href="{{route('commercial-cookery')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                      </div>	
                                          
                                      
                                  <div class="card-body">	
                                      
                                          <h5 class="category">Cookery</h5>
                                          <h5 class="card-title">Certificate IV in Commercial Cookery  <span class="code">SIT40516 </span> </h5>
                                  </div>
                                  <div class="card-footer">
                                        <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                        <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                            
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="overlap-img">							
<<<<<<< HEAD
                                          <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                          <a href="commercial-cookery.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                          <img src="{{ asset('image/cookery.jpg') }}" class="card-img-top" alt="...">
                                          <a href="{{route('commercial-cookery')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                      </div>	
                                          
                                      
                                  <div class="card-body">	
                                      
                                          <h5 class="category">Cookery</h5>
                                          <h5 class="card-title">Certificate IV in Commercial Cookery  <span class="code">SIT40516 </span> </h5>
                                  </div>
                                  <div class="card-footer">
                                        <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                        <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                            
                                  </div>
                                </div>	  
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="overlap-img">							
<<<<<<< HEAD
                                          <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                          <a href="commercial-cookery.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                          <img src="{{ asset('image/cookery.jpg') }}" class="card-img-top" alt="...">
                                          <a href="{{route('commercial-cookery')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                      </div>	
                                          
                                      
                                  <div class="card-body">	
                                      
                                          <h5 class="category">Cookery</h5>
                                          <h5 class="card-title">Certificate IV in Commercial Cookery  <span class="code">SIT40516 </span> </h5>
                                  </div>
                                  <div class="card-footer">
                                        <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                        <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                            
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="overlap-img">							
<<<<<<< HEAD
                                          <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                          <a href="commercial-cookery.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                          <img src="{{ asset('image/cookery.jpg') }}" class="card-img-top" alt="...">
                                          <a href="{{route('commercial-cookery')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                      </div>	
                                          
                                      
                                  <div class="card-body">	
                                      
                                          <h5 class="category">Cookery</h5>
                                          <h5 class="card-title">Certificate IV in Commercial Cookery  <span class="code">SIT40516 </span> </h5>
                                  </div>
                                  <div class="card-footer">
                                        <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                        <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                            
                                  </div>
                                </div>	  
                            </div>
                          </div>
                        </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="row courses">
                                  <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="hospitality-manangement.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/hospitality-management.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('hospitality-management')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Management</h5>
                                              <h5 class="card-title">Diploma of Hospitality Management  <span class="code">SIT50416</span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="hospitality-manangement.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/hospitality-management.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('hospitality-management')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Management</h5>
                                              <h5 class="card-title">Diploma of Hospitality Management  <span class="code">SIT50416</span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>	  
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="hospitality-manangement.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/hospitality-management.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('hospitality-management')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Management</h5>
                                              <h5 class="card-title">Diploma of Hospitality Management  <span class="code">SIT50416</span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="hospitality-manangement.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/hospitality-management.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('hospitality-management')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Management</h5>
                                              <h5 class="card-title">Diploma of Hospitality Management  <span class="code">SIT50416</span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>	  
                                </div>
                            </div>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="row courses">
                                  <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="childhood-education.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/childhood-education.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('child-education')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Childhood Education</h5>
                                              <h5 class="card-title">Diploma of Early Childhood Education and Care  <span class="code">CHC50113</span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="childhood-education.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/childhood-education.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('child-education')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Childhood Education</h5>
                                              <h5 class="card-title">Diploma of Early Childhood Education and Care  <span class="code">CHC50113</span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>	  
                                </div>
                            </div>
                      </div>
                      <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab1">
                              <div class="row courses">
                                  <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="community-services.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/community-services.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('community-service')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Services</h5>
                                              <h5 class="card-title">Diploma of Community Services  <span class="code">CHC52015</span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="community-services.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/community-services.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('community-service')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Services</h5>
                                              <h5 class="card-title">Diploma of Community Services  <span class="code">CHC52015</span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>	  
                                </div>
                            </div>
                      </div>
                      <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                              <div class="row courses">
                                  <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="disability.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/disability.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('disability')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Disability</h5>
                                              <h5 class="card-title">Certificate IV in Disability  <span class="code">CHC43115 </span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="overlap-img">							
<<<<<<< HEAD
                                              <img src="image/ANE1.jpg" class="card-img-top" alt="...">
                                              <a href="disability.php" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
=======
                                              <img src="{{ asset('image/disability.jpg') }}" class="card-img-top" alt="...">
                                              <a href="{{route('disability')}}" class="card-link"><i class="far fa-eye"></i> View Details</a>							  	
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
                                          </div>	
                                              
                                          
                                      <div class="card-body">	
                                          
                                              <h5 class="category">Disability</h5>
                                              <h5 class="card-title">Certificate IV in Disability  <span class="code">CHC43115 </span> </h5>
                                      </div>
                                      <div class="card-footer">
                                            <p class="card-text"> <span> CRICOS Course Code:</span> 103683M</p>
                                            <p class="card-text"> <span>Course Duration:</span>  23 Weeks</p>
                                                                                
                                      </div>
                                    </div>	  
                                </div>
                            </div>
                      </div>
                    </div>
                    
                    <!-- <div class="col-sm-12">
                        <button type="button" class="btn btn-primary">view all <i class="fas fa-angle-double-right"></i></button>
                    </div> -->
                
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
<<<<<<< HEAD
                          <img src="image/contact.svg">
=======
                          <img src="{{ asset('image/contact.svg') }}">
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
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
<<<<<<< HEAD
                          <img src="image/consult.svg">
=======
                          <img src="{{ asset('image/consult.svg') }}">
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
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
<<<<<<< HEAD
                          <img src="image/admission.svg">
=======
                          <img src="{{ asset('image/admission.svg') }}">
>>>>>>> dd4aea1fc2022d1a4943096827efb1bcbfbfdc88
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