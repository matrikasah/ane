<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>ANE</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet"></link>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <!--<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"></link>-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('image/StudentEnrolmentForm(Offshore).pdf') }}" type="text/css" media="print">

    </head>
    <body>
    <header>
        <section class="notice">
            <div class="notice-text">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="notice-text-wrap">	
                                <span>Notice:</span>
                                 <p>Applications are now open to study in one of Australia’s fastest-rising training organizations in 2022!</p>
                                 <a href="/notice" class="btn btn-black mb-2 hvr-sweep-to-right">View Updates</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="headmenu">
            <div class="container">
                <div class="d-flex align-items-center">
                <ul id="menu-topbar-left" class="nav mx-n3 line-height-one py-1 font-montserrat">
                    <li id="menu-item-4456" class="nav-item px-3 menu-item-4456"><a title="+61292815929" href="tel:+61292815929" class="text-white p-0 font-size-xs nav-link"> <i class="fas fa-phone-volume"></i> +61 2 9281 5929</a></li>
                    <li id="menu-item-4457" class="nav-item px-3 menu-item-4457"><a title="hello@skola.com" href="mailto:sydney.campus@ane.edu.au" class="text-white p-0 font-size-xs nav-link"><i class="far fa-envelope"></i> sydney.campus@ane.edu.au</a></li>
                </ul>
                <ul id="menu-topbar-right" class="nav ml-auto mr-n3 font-size-sm py-1 d-none d-sm-flex d-md-flex">
                    <li id="menu-item-4458" class="nav-item menu-item-4458"><a title="Facebook" href="http://www.facebook.com" class="text-white p-0 nav-link"><i class="fab fa-facebook-f mr-3" aria-hidden="true"></i> <span class="sr-only">Facebook</span></a></li>
                    <li id="menu-item-4459" class="nav-item menu-item-4459"><a title="Twitter" href="https://twitter.com/" class="text-white p-0 nav-link"><i class="fab fa-twitter mr-3" aria-hidden="true"></i> <span class="sr-only">Twitter</span></a></li>
                    <li id="menu-item-4460" class="nav-item menu-item-4460"><a title="Instagram" href="https://www.instagram.com/" class="text-white p-0 nav-link"><i class="fab fa-instagram mr-3" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a></li>
                    <li id="menu-item-4461" class="nav-item menu-item-4461"><a title="Linkedin" href="https://www.linkedin.com/" class="text-white p-0 nav-link"><i class="fab fa-linkedin-in mr-3" aria-hidden="true"></i> <span class="sr-only">Linkedin</span></a></li>
                    
                </ul>					
                </div>
                </div>
        </section>
        <section class="mainmenu">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                
            <nav>
                    <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('image/logo.png') }}" height="80px"> </a>
                    
                    <a id="resp-menu" class="responsive-menu" href="#"><i class="fas fa-bars"></i></a> 
                    <div class="menu-wrap d-none d-lg-block">
                        <ul class="menu" id="short-menu">
                          <li><a class="link-box" href="#"> ANE portal</a>
                            <ul class="sub-menu">
                            <li><a href="#">student</a></li>
                            <li><a href="#">admin</a></li>  
                            </ul>
                          </li>
                          <li><a class="link-box"  href="#"> Apply now</a>
                              <ul class="sub-menu">
                              <li><a href="{{route('apply-offshore')}}">offshore</a></li>
                              <li><a href="{{route('apply-onshore')}}">onshore</a>
                                <li><a href="#">agent</a>
                                <ul>
                                <li><a href="{{route('become-agent')}}">Become agent</a></li>
                                <li><a href="{{route('agent-list')}}">Our Agents</a>
                                <li><a href="{{route('apply-agent')}}">Apply now</a>
                                </ul>
                              </li>
                              </ul>
                          </li>
                          <li><a class="link-box" href="#">Download</a>
                            <ul class="sub-menu">
                            <li><a href="{{ asset('image/ane-pd-handbook.pdf') }}" target="_blanck">Pre-Departure handbook</a></li>
                            <li><a href="{{ asset('image/international_student_handbook.pdf') }}" target="_blanck">International students handbook</a></li>  
                            </ul>
                          </li>
                        </ul> 

                        <ul class="menu" id="menu-active-link">
                            <li class=" menu-link  homer"><a class="@if(Route::is('home') ) active @endif"  href="{{ route('home') }}"> Home</a></li>
                            <li class="menu-link"><a class="@if(Route::is('about') || Route::is('international-student') || Route::is('message-ceo')) active @endif" href="#"> study with us</a>
                            <ul class="sub-menu">
                              <li><a href="{{route('about')}}">why study with us</a></li>
                              <li><a href="{{route('international-student')}}">international students</a></li>
                              <li><a href="{{route('message-ceo')}}">message from ceo</a></li>
                            </ul>
                            </li>
                            <li class="menu-link"><a class="@if(Route::is('course') || Route::is('child-education') || Route::is('hospitality-management')) || Route::is('commercial-cookery')) || Route::is('community-service')) || Route::is('disability')) active @endif" href="{{route('course')}}">find a courses</a>
                            <ul class="sub-menu">
                              <li><a href="{{route('child-education')}}">CHC50113 - Diploma of Early Childhood Education and Care</a></li>
                              <li><a href="{{route('hospitality-management')}}">SIT50416 - Diploma of Hospitality Management</a></li>
                              <li><a href="{{route('commercial-cookery')}}">SIT40516 - Certificate IV in Commercial Cookery</a></li>
                              <li><a href="{{route('disability')}}">CHC43115 - Certificate IV in Disability</a></li>
                              <li><a href="{{route('community-service')}}">CHC52015 - Diploma of Community Services</a></li>
                            </ul>
                            </li>
                            <li class="menu-link"><a class="@if(Route::is('how-to-apply') || Route::is('intake-date') || Route::is('who-can-apply')) active @endif" href="#"> admission</a>
                            <ul class="sub-menu">
                              <li><a href="{{route('how-to-apply')}}">How to Apply</a></li>
                              <li><a href="{{route('intake-date')}}">Intake Dates</a></li>
                              <li><a href="{{route('who-can-apply')}}">Who can apply</a></li>
                            </ul>
                            </li>
                            <li class="menu-link"><a class="@if(Route::is('first-day') || Route::is('orientation') || Route::is('student-support')) || Route::is('rules-regulations')) || Route::is('airport-pick-up')  || Route::is('oshc') || Route::is('faqs')) active @endif" href="#"> student information</a>
                            <ul class="sub-menu">
                              <li><a href="{{route('first-day')}}">First Day at college</a></li>
                              <li><a href="{{route('orientation')}}">Orientation</a></li>
                              <!-- <li><a href="{{route('campus-location')}}">Campus Map</a></li> -->
                              <li><a href="{{route('student-support')}}">Student Support</a></li>
                              <li><a href="{{route('rules-regulations')}}">College rules & regulations</a></li>
                              <li><a href="{{route('airport-pick-up')}}">Airport pick-up</a></li>
                              <li><a href="{{route('oshc')}}">OSHC</a></li>
                              <li><a href="{{route('faqs')}}">FAQs</a></li>
                            </ul>
                            </li>
                            <li class="menu-link" ><a class="@if(Route::is('contact') ) active @endif" href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="menu-wrap d-lg-none">
                    <ul class="menu">
                          <li><a href="#"> ANE portal</a>
                            <ul class="sub-menu">
                            <li><a href="#">student </a></li>
                            <li><a href="#">admin </a></li>  
                            </ul>
                          </li>
                          <li><a class="link-box"  href="#"> Apply now</a>
                              <ul class="sub-menu">
                              <li><a href="{{route('apply-offshore')}}">offshore</a></li>
                              <li><a href="{{route('apply-onshore')}}">onshore</a>
                                <li><a href="#">agent</a>
                                <ul>
                                <li><a href="{{route('become-agent')}}">Become agent</a></li>
                                <li><a href="{{route('agent-list')}}">Our Agents</a>
                              <li><a href="{{route('apply-agent')}}">Apply now</a>
                                </ul>
                              </li>
                              </ul>
                            </li>
                            <li><a class="link-box" href="#">Download</a>
                            <ul class="sub-menu">
                            <li><a href="{{ asset('image/ane-pd-handbook.pdf') }}" target="_blanck">Pre-Departure handbook</a></li>
                            <li><a href="{{ asset('image/international_student_handbook.pdf') }}" target="_blanck">International students handbook</a></li>  
                            </ul>
                          </li>
                        
                            <li><a class="homer" href="{{ route('home') }}"> Home</a></li>
                            <li><a  href="#"> study with us</a>
                            <ul class="sub-menu">
                              <li><a href="{{route('about')}}">why study with us</a></li>
                              <li><a href="{{route('international-student')}}">international students</a></li>
                              <li><a href="{{route('message-ceo')}}">message from ceo</a></li>
                            </ul>
                            </li>
                            <li><a href="{{route('course')}}">find a courses</a>
                            <ul class="sub-menu">
                              <li><a href="{{route('child-education')}}">CHC50113 - Diploma of Early Childhood Education and Care</a></li>
                              <li><a href="{{route('hospitality-management')}}">SIT50416 - Diploma of Hospitality Management</a></li>
                              <li><a href="{{route('commercial-cookery')}}">SIT40516 - Certificate IV in Commercial Cookery</a></li>
                              <li><a href="{{route('disability')}}">CHC43115 - Certificate IV in Disability</a></li>
                              <li><a href="{{route('community-service')}}">CHC52015 - Diploma of Community Services</a></li>
                            </ul>
                            </li>
                            <li><a  href="#"> admission</a>
                            <ul class="sub-menu">
                              <li><a href="{{route('how-to-apply')}}">How to Apply</a></li>
                              <li><a href="{{route('intake-date')}}">Intake Dates</a></li>
                              <li><a href="{{route('who-can-apply')}}">Who can apply</a></li>
                            </ul>
                            </li>
                            <li><a  href="#"> student information</a>
                            <ul class="sub-menu">
                              <li><a href="{{route('first-day')}}">First Day at college</a></li>
                              <li><a href="{{route('orientation')}}">Orientation</a></li>
                              <!-- <li><a href="{{route('campus-location')}}">Campus Map</a></li> -->
                              <li><a href="{{route('student-support')}}">Student Support</a></li>
                              <li><a href="{{route('rules-regulations')}}">College rules & regulations</a></li>
                              <li><a href="{{route('airport-pick-up')}}">Airport pick-up</a></li>
                              <li><a href="{{route('oshc')}}">OSHC</a></li>
                              <li><a href="{{route('faqs')}}">FAQs</a></li>
                            </ul>
                            </li>
                            <li><a  href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            </div>
            </div>
        </section>
    </header>

