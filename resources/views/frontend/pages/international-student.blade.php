@extends('frontend.master')
@section('content')
    

	<section class="featured-img">
		<img src="{{ asset('image/course-featured.jpg') }}">
		<div class="overlap-featured-breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-7">
						<h1 class="innerpage-title">International Students</h1>
						<p>Pre-departure guidelines for international students</p>
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">international students</li>
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
					<div class="sidebar">
						<div class="title">
							<h3>Guidelines</h3>
							<h1>PRE-DEPARTURE Guidelines</h1>
						</div>
						
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item" role="presentation">
						    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#international1" type="button" role="tab" aria-controls="international1" aria-selected="true">About Sydney Campus <i class="fas fa-angle-double-right"></i></button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#international2" type="button" role="tab" aria-controls="international2" aria-selected="false">Student Protection Through Legislation <i class="fas fa-angle-double-right"></i></button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#international3" type="button" role="tab" aria-controls="international3" aria-selected="false">Pre-Departure Check List <i class="fas fa-angle-double-right"></i></button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#international4" type="button" role="tab" aria-controls="international4" aria-selected="false">Travelling Arrangements <i class="fas fa-angle-double-right"></i></button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#international5" type="button" role="tab" aria-controls="international5" aria-selected="false">‘Do’s’ & Don’ts’ <i class="fas fa-angle-double-right"></i></button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#international6" type="button" role="tab" aria-controls="international6" aria-selected="false">When you arrive in Australia <i class="fas fa-angle-double-right"></i></button>
						  </li>
						  <li class="nav-item" role="presentation">
						    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#international7" type="button" role="tab" aria-controls="international7" aria-selected="false">Working in Australia <i class="fas fa-angle-double-right"></i></button>
						  </li>
						</ul>
					</div>				
				</div>
				<div class="col-sm-8">
					
						<div class="tab-content content-text" id="myTabContent">
						  <div class="tab-pane fade show active" id="international1" role="tabpanel" aria-labelledby="home-tab">					  		
							  	<img src="{{ asset('image/ane-campus-1.jpg') }}" class="img-responsive course-detail-img">
							  	<h2>About Sydney Campus </h2>
							  	<p class="para">
							  		Sydney campus’ premises feature a unique integration of modern architecture and teaching facilities which is located 
									at level 6 of KMS building in Kippax Street, Surry Hills, part of the Redfern inner-city area. The building has disabled 
									access, lifts and wheelchair accessibility throughout the campus premises. 
									It takes about 3 minutes-walking in the South direction from Central station and Sydney CBD central building. Students 
									can take few steps to access to taxi, tram, bus and train routes towards the Inner West & Eastern suburbs, and 
									surrounding Sydney CBD. 
									In the surroundings, student can walk to various restaurants, local cafes, clothing shops, music school, banks and 
									vibrant bar scene that continues to increase with the CBD’s expansion.

							  	</p>
							</div>
						  <div class="tab-pane fade" id="international2" role="tabpanel" aria-labelledby="profile-tab">
						  	<img src="{{ asset('image/ANE1.jpg') }}" class="img-responsive course-detail-img">
							  	<h2>STUDENT PROTECTION THROUGH LEGISLATION </h2>
							  	<p class="para">
							  		ANE college follows all relevant Commonwealth 
									and State laws and regulations. All these 
									documents and more can be sourced at (http://
									www.austlii.edu.au/databases.html). 
									These acts form complex laws and legislations 
									that all businesses must follow. ANE college 
									ensures its policy and procedures are in 
									line with these regulations and provide the 
									following summary of each for the students’ 
									information. Students are encouraged to seek 
									further information on each piece of legislation 
									by accessing the Acts online or by speaking to 
									the ANE officer in-charge.

							  	</p>
						  </div>
						  <div class="tab-pane fade" id="international3" role="tabpanel" aria-labelledby="contact-tab">
						  		<h2>PRE-DEPARTURE CHECK LIST</h2>
						  		<ul>
										<li><i class="fas fa-angle-double-right"></i>Passport and Visa – Check that your passport is valid for at least 6 months prior to your 
										 arrival in Australia, and that you have all your visa documentation. It is also a good idea to 
										 make copies of your passport in case you lose your passport</li>
										<li><i class="fas fa-angle-double-right"></i>The students’ enrolment and orientation documents – You will need your electronic 
										 Confirmation of Enrolment (C.O.E) and the students’ information pack, which you will 
										 have received from your college</li>
										<li><i class="fas fa-angle-double-right"></i>Overseas Student Health Cover (OSHC) – This is a requirement for entry to Australia, so 
	 												make sure you have your health cover policy arranged before you leave home.</li>
										<li><i class="fas fa-angle-double-right"></i>Travel Insurance – You should also consider travel insurance, which covers things your 
	 									OSHC may not – such as cancelled flights, lost documents, dental or optical care, etc</li>
										<li><i class="fas fa-angle-double-right"></i>Airfares – Make sure you are aware of the date and time of your flight. Keep your flight 
										 details in a safe and secure place, with your passport and visa.</li>
										<li><i class="fas fa-angle-double-right"></i>Contact details – You may want to have a list of emergency contact details for family, as
										 			well as your embassy, accommodation, and institution details. If you have used an
										 education agent, keep their contact details on you, in case you need to contact them
										 once you arrive in Australia.</li>
										<li><i class="fas fa-angle-double-right"></i>Australian currency – There are money exchange places available at Australian airports 
										 and in cities, but it is recommended to have some Australian currency on you prior to
										 leaving your home country</li>
	 									<li><i class="fas fa-angle-double-right"></i>
										Transport from the airport – Whether you are taking public transport, a taxi, or you are being 
										 picked up from the airport by your education provider, it is important that you have all the 
										 details including the time, the route and, if your travel has been arranged by your institution, 
										 their contact details. If you need a map to assist you in getting to your accommodation from 
										 the airport, they will be available at the airport, or you can print one prior to leaving
	 									</li>
	 									<li><i class="fas fa-angle-double-right"></i>
	 										Accommodation details – Make sure you have the address of where you will be staying 
										 as well as their phone number and payment confirmation (if you have already paid for
										your accommodation)
	 									</li>
	 									
									</ul>

									
						  </div>
						  <div class="tab-pane fade" id="international4" role="tabpanel" aria-labelledby="contact-tab">
						  		

									<h2>TRAVELLING ARRANGEMENT</h2>
	 									<ul>
	 									 	<li><i class="fas fa-angle-double-right"></i>Made all your travel arrangements?</li>
											<li><i class="fas fa-angle-double-right"></i>Packed your most important documents in your hand luggage?</li>
											<li><i class="fas fa-angle-double-right"></i>Booked your Airport Pick-up and Accommodation?</li>
											<li><i class="fas fa-angle-double-right"></i>Checked Customs and Quarantine regulations?
										 (http://www.australia.gov.au/topics/tourism-and-travel/customs-and-quarantine)</li>
											<li><i class="fas fa-angle-double-right"></i>Organise to have at least Aud$1,500 available to you on arrival in Sydney?
										 (Approximately Aud$500 in cash or possess funds available through credit/debit card)</li>
											<li><i class="fas fa-angle-double-right"></i>Had medical/optical/dental check-ups?</li>
											<li><i class="fas fa-angle-double-right"></i>Written down the contact details of your country’s consulate in Sydney? and
											Got locks in your luggage?</li>
										</ul>


										
						  </div>
						  <div class="tab-pane fade" id="international5" role="tabpanel" aria-labelledby="contact-tab">


										<h2>DO BRING</h2>
	 									<ul>
	 									 	<li><i class="fas fa-angle-double-right"></i> Clothing</li>
											<li><i class="fas fa-angle-double-right"></i> Electrical goods - computers, hair dryers, stereos and rice-cookers are items some international students choose to 
											 bring with them. However, bear in mind that these items may attract customs duty Goods and services tax (GST).
											 If in doubt, refer to the section on Customs Regulations above.</li>
											<li><i class="fas fa-angle-double-right"></i>You are expected to supply your own computing device such as a laptop, notebook or pad that is capable of Wi-Fi 
	 										connectivity and loaded with the Microsoft suite of programs – Minimum - Word, Excel, and PowerPoint.</li>
											<li><i class="fas fa-angle-double-right"></i>Electricity adaptor plugs - Australia has 240-volt, AC 50 Hz cycle electricity.</li>
											<li><i class="fas fa-angle-double-right"></i>Optical Spares – if you wear glasses or contact lenses you should bring spares.</li>
											<li><i class="fas fa-angle-double-right"></i>Other personal items - you may find it useful to bring things like a small sewing kit, battery operated alarm clock, 
	 										umbrella, dictionary, and prescriptions for medicines, sports gear, toiletries, and other favourite personal items.</li>
											<li class="sub-list"><i class="fas fa-angle-double-right"></i> Document folder including:
												<ul>
													<li>
														<i class="fas fa-angle-right"></i>Valid passport and student visa (including photocopies);</li>
														<li> <i class="fas fa-angle-right"></i>Copy of your confirmation of enrolment form, your letter of offer and other material sent to you by ANE college.</li>
														<li> <i class="fas fa-angle-right"></i>Receipts of payment for all fees.</li>
														<li> <i class="fas fa-angle-right"></i>Certified copies of personal papers, including academic transcripts, educational or work qualifications you may already have completed.</li>
														<li><i class="fas fa-angle-right"></i>Identification papers such as birth certificate, proof of citizenship, international driver’s license.</li>
														<li> <i class="fas fa-angle-right"></i>Credit cards.</li>
														<li> <i class="fas fa-angle-right"></i>Your medical records, immunization records and school records of all accompanying family members.</li>
														<li><i class="fas fa-angle-right"></i> Marriage certificate if your spouse is coming with you.</li>
														<li> <i class="fas fa-angle-right"></i>Receipts of goods you may bring with you to Australia to assist with assessing customs duty and/or GST; and</li>
														<li> <i class="fas fa-angle-right"></i>If you intend to drive in New South Wales, you must bring your current driver’s license with you. If possible, have the license
														updated to cover the duration of your studies.</li>
												</ul>

											</li>
										</ul>

										<h2>DON’T BRING</h2>
	 									<ul>
	 									 	<li><i class="fas fa-angle-double-right"></i> Food - Australia has strict quarantine regulations that limit what you can bring into the country, and you really do not
	 									need to, because Sydney is a multicultural, cosmopolitan city where you can get foods from most countries; and</li>
											<li><i class="fas fa-angle-double-right"></i> Winter clothes - it is advisable to buy your winter clothing in Australia, as it will be more suitable to the local climate.</li>
										</ul>
						  </div>
						  <div class="tab-pane fade" id="international6" role="tabpanel" aria-labelledby="contact-tab">
						  				<h2>WHEN YOU ARRIVE IN AUSTRALIA</h2>
	 									<ul>
	 									 	<li><i class="fas fa-angle-double-right"></i> 
	 									 		Contact your parents/relatives to let them know you have arrived safely
	 									 	</li>
											<li><i class="fas fa-angle-double-right"></i> 
												Find long-term accommodation
											</li>
											<li><i class="fas fa-angle-double-right"></i> 
												Collect your OSHC or Health Cover membership card.
	 									 	</li>
											<li><i class="fas fa-angle-double-right"></i> 
												Attend orientation.
											</li>
											<li><i class="fas fa-angle-double-right"></i>
											Collect your student card; and 
	 									 	</li>
	 									 	<li><i class="fas fa-angle-double-right"></i>
	 									 		Open a bank account.
	 									 	</li>
										</ul>

										<h3>COVID 19 PANDEMIC INFORMATION AND ANE COLLEGE PROTECTIVE PLAN</h3>
										<p class="para">
											International students are strongly encouraged to visit the website of Australian government or state government/
											Department of Education, Skills and Employment (below links) to obtain an updated information about Covid 19 
											Pandemic, vaccine information in your language and wellbeing supports. 
											For instance, if you arrive in Sydney/NSW State, you are advised to visit NSW State government websites, such as, 
											services NSW. gov. au (below link), or to contact ANE college in Sydney campus for further detailed information of 
											Covid 19 pandemic before arriving in Australia. 
											ANE College has quickly responded to Covid 19 Pandemic by implementing a Protective Plan, which presented a 
											detailed and effective measures of protecting students and staff members from Covid 19 pandemic. This plan includes:
											<ul>
		 									 	<li><i class="fas fa-angle-double-right"></i> 
		 									 		social-distancing rules (1.5m) 
		 									 	</li>
												<li><i class="fas fa-angle-double-right"></i> 
													zoom set-up for online students.
												</li>
												<li><i class="fas fa-angle-double-right"></i> 
													restriction of face-to-face students in the college (10 students per class),
		 									 	</li>
												<li><i class="fas fa-angle-double-right"></i> 
													facemasks, hand wash’ guidelines and soap were emplaced.
												</li>
												<li><i class="fas fa-angle-double-right"></i>
												Update and provide students with useful information regarding Covid 19 pandemic daily.
		 									 	</li>
											</ul> 
											<p class="bold-text">Useful website information about Covid 19 Pandemic and government supports:</p>

											<ul>
		 									 	<li><i class="fas fa-angle-double-right"></i> 
		 									 		Home | Service NSW
		 									 	</li>
												<li><i class="fas fa-angle-double-right"></i> 
													Coronavirus (COVID-19) information for international students - Department of Education, Skills and Employment, 
											 		Australian Government (dese.gov.au)
												</li>
												<li><i class="fas fa-angle-double-right"></i> 
													COVID-19 vaccine information in your language | Australian Government Department of Health
		 									 	</li>
												<li><i class="fas fa-angle-double-right"></i> 
													Health and wellbeing support for international students affected by COVID-19 - Department of Education, Skills
											 and Employment, Australian Government (dese.gov.au)
												</li>
											</ul>

										</p>
										<h3>TRANSPORT</h3>
										<p class="para">
											<div class="bold-text">OPAL CARD</div>
											Opal cards are smartcard tickets that you keep, reload and reuse to pay for travel on public transport. Simply add 
											value to your Opal card then tap on and tap off to pay your fares on trains, buses, ferries, and light rail – anywhere 
											within the Opal network.
											As well as the lowest single fares, Opal cards have lots of benefits for regular travellers. https://www.opal.com.au/ </p>
											<ul>
												 <li><i class="fas fa-angle-double-right"></i> <a href="http://www.sydneytrains.info/">Trains</a>  </li>
											 	<li><i class="fas fa-angle-double-right"></i> <a href="https://transportnsw.info/travel-info/ways-to-get-around/bus">Buses</a>   </li>
											 	<li><i class="fas fa-angle-double-right"></i> <a href="https://transportnsw.info/travel-info/ways-to-get-around/ferry">Ferries</a>  </li>
											</ul>
											
										<h3>Taxis</h3>
										<p class="para">
											It is typically easy to find a taxi in Sydney. Prices vary depending on the distance travelled. If you take a taxi on 
											a tollway you will have to pay the toll for the taxi’s return journey. You can take a taxi from a taxi rank, book one by 
											telephone or you can ‘hail’ a taxi from the street. 
											https://www.131008.com/cgi-bin/cart/newbook.cgi?view_all=1&region=Sydney&st=New%20South%20Wales
											</p>
											<h3>WEATHER</h3>
										<p class="para">
											Sydney has a mild climate, especially in winter, but be aware that the weather is subject to quick changes. Each day 
											may be a combination of seasons, so be prepared for rain, heat, or cold, wind and sunshine all in the one day. Perhaps 
											you should carry an umbrella and something warm.
											Listen to the weather forecasts carefully. http://www.holiday-weather.com/sydney/averages/

											</p>
											<h3>FESTIVALS</h3>
										<p class="para">
											Sydney has many festivals. Chinese New Year is celebrated every year. Sydney also celebrates New Year’s Eve 
											(December 31) with spectacular fireworks over the Harbour. The Sydney Festival is in January every year and lasts for 
											the whole month. The Gay and Lesbian Mardi Gras is held in late February or early March. 
											https://www.sydneyfestival.org.au/2018/?gclid=EAIaIQobChMIuaTMgMri1wIVjwsrCh0BjgN0EAAYASAAEgI5qPD_BwE 


											</p>
											<h3>MEDICAL PROBLEMS</h3>
											<p class="para">
											If you get sick, you may have to go and see a doctor. In Australia you do not go to a hospital unless you are seriously 
											ill. You go to your local doctor who will have a surgery near your house. If you cannot leave the house, you can ring 
											the doctor’s receptionist and make an appointment for the doctor to visit you. The cost will be applied.
											If you cannot come to ANE college, the doctors will give you a medical certificate that describes your illness, stating 
											how many days you may stay at home. Do not forget to give your medical certificate to the receptionist when you 
											return to the college or the time you are away will affect your attendance. Your OSHC may reduce the cost of medical 
											services 


											</p>
											<h3>TELEPHONE</h3>
											<p class="para">
											Local calls on a public telephone require coins. 
											Coins to use: 10 cents, 20 cents, 50 cents and 
											$1 coins only. You can buy phone cards that 
											cost between $2 and $50 at any newsagent or 
											authorised outlet.
											</p>
											<h3>EMERGENCY</h3>
											<ul>
												 <li><i class="fas fa-angle-double-right"></i> Police, Fire, Ambulance 000 (landline service) </li>
											 	<li><i class="fas fa-angle-double-right"></i> Police, Fire, Ambulance 112 (mobile service)</li>
											 	<li><i class="fas fa-angle-double-right"></i> Telephone Interpreter Service (TIS) 13-1450</li>
											</ul>
											<p class="para">
											For 24 hours emergency and after working 
											hours, ANE college student,
											please contact Mr. P. Shiwakoti,
											Mobile phone number: 0431 243 784.
											</p>
											<h3>INTERNATIONAL CALLS (OUT)</h3>
											<p class="para">
											0011 + country code + area code + number 
												(country codes may be found in the telephone 
												directory). http://www.exportbureau.com/
												telephone_codes/international_dialcode.html

											</p>

											<h3>BANKING</h3>
											<p class="para">
											There are many different types of bank accounts. Ask about the different types of accounts before you decide which 
											one you would like to open. A Savings Account is probably the most suitable account for the students. When you 
											open an account, you will normally receive an Automated Teller Machine (ATM) Card allowing you to withdraw money 
											after hours. Many shops in Australia will not accept cheques but most will take credit or debit cards. An ATM Card 
											cannot be used for credit, but it can be used in some supermarkets to pay for the bill (as long as there is money in 
											your account) and it can be used to withdraw money from the machine (ATM) you find outside banks and in selected 
											locations
											</p>

											<h3>TELEPHONE</h3>
											<p class="para">
											Private rental accommodation in and around Sydney ranges in price depending on the individual students’ needs. 
											Some suggested locations are: 

											</p>
											<ul>
												  
											 	<li><i class="fas fa-angle-double-right"></i>https://furnishedproperty.com.au/</li>
												 <li><i class="fas fa-angle-double-right"></i>http://urbanest.com.au/ </li>
												 <li><i class="fas fa-angle-double-right"></i>http://www.studentaccommodationsydney.com/ </li>
												 <li><i class="fas fa-angle-double-right"></i>http://www.accommodationinsydney.com/</li>
												 <li><i class="fas fa-angle-double-right"></i>https://www.sublet.com/city_rentals/newsouthwales_rentals.asp </li>
												 <li><i class="fas fa-angle-double-right"></i>http://www.homestaynetwork.org/ </li>
												 <li><i class="fas fa-angle-double-right"></i>https://www.yha.com.au/ </li>
												 <li><i class="fas fa-angle-double-right"></i>https://flatmates.com.au/</li>
												 <li><i class="fas fa-angle-double-right"></i>https://www.realestate.com.au/rent</li>
											</ul>
											<p class="para">
											ANE college can help the students, who are arriving for the first-time including airport pick-up, to find appropriate 
											accommodation, if necessary, upon payment of nominated charge. But it is usually easier and cheaper for students to 
											organise their own arrangement where possible.
										</p>

						  </div>

						  <div class="tab-pane fade" id="international7" role="tabpanel" aria-labelledby="contact-tab">

						  	<h2>WORKING IN AUSTRALIA</h2>
											<p class="para">
											From 1 January 2010, this Fair Work Information Statement is to be provided to all new employees by their employer 
											as soon as possible after the commencement of employment. The Statement provides basic information on matters 
											that will affect your employment. If you require further information, you can contact the Fair Work Infoline on 13 13 94 
											or visit www.fairwork.gov.au .

											</p>
											<h3>THE NATIONAL EMPLOYMENT STANDARDS</h3>
											<p class="para">
											The Fair Work Act 2009 provides you with a safety net of minimum terms and conditions of employment through the 
											National Employment Standards (NES).
											There are 10 minimum workplace entitlements in the NES:
											</p>
											<ul>
												  
											 	<li><i class="fas fa-angle-double-right"></i> A maximum standard working week of 38 hours for full-time employees, plus ‘reasonable’ additional hours.</li>
												<li><i class="fas fa-angle-double-right"></i>  A right to request flexible working arrangements.</li>
												<li><i class="fas fa-angle-double-right"></i> Parental and adoption leave of 12 months (unpaid), with a right to request an additional 12 months.</li>
												<li><i class="fas fa-angle-double-right"></i>  Four weeks paid annual leave each year (pro rata).</li>
												<li><i class="fas fa-angle-double-right"></i>  Ten days paid personal/carer’s leave each year (pro rata), two days paid compassionate leave for each permissible 
												 occasion, and two days unpaid carer’s leave for each permissible occasion. </li>
												<li><i class="fas fa-angle-double-right"></i>  Community service leave for jury service or activities dealing with certain emergencies or natural disasters.
												 This leave is unpaid except for jury service.</li>
												<li><i class="fas fa-angle-double-right"></i>  Long service leave.</li>
												<li><i class="fas fa-angle-double-right"></i> Public holidays and the entitlement to be paid for ordinary hours on those days.</li>
												<li><i class="fas fa-angle-double-right"></i>  Notice of termination and redundancy pay.</li> 
												<li><i class="fas fa-angle-double-right"></i>  The right for new employees to receive the Fair Work Information Statement. </li>
											</ul>
											<p class="para">
											A complete copy of the NES can be accessed at www.fairwork.gov.au. Please note that some conditions or limitations 
											may apply to your entitlement to the NES. For instance, there are some exclusions for casual employees.
											If you work for an employer who sells or transfers their business to a new owner, some of your NES entitlements may 
											carry over to the new employer. Some NES entitlements which may carry over include personal/carer’s leave, parental 
											leave, and your right to request flexible working arrangements.
										</p>

										<h3>JOB CLUB</h3>
											<p class="para">
												As you are holding a student visa, you are eligible to work up to 20 
												hours per week (part-time) to improve your financial situation while 
												pursuing your study in Australia. In order to assist you to gain a 
												job (preferably related to your studies), ANE college created a ‘Job 
												Club’ where students can get helps in preparing for job application, 
												cover letter, resumes and interview skills. Students are also be 
												involved in job interview exercise and a short orientation about their 
												potential jobs. 
												ANE college can also refer students to the local business in which 
												ANE has a connection with, for suitable positions. 
												Job Club, will basically help you:
											</p>

											<ul>
												<li><i class="fas fa-angle-double-right"></i> Apply for a Tax File Number</li>
												 <li><i class="fas fa-angle-double-right"></i>  Work and Study in Australia</li>
												 <li><i class="fas fa-angle-double-right"></i>  How to look for a relevant job website accordingly</li>
												 <li><i class="fas fa-angle-double-right"></i> Find out your rights as a worker.</li>
												 <li><i class="fas fa-angle-double-right"></i>  Understand Australian tax system.</li>
												 <li><i class="fas fa-angle-double-right"></i>  Prepare CV, Cover Letter and Job application.</li>
												 <li><i class="fas fa-angle-double-right"></i>  Interview skills.</li>
												 <li><i class="fas fa-angle-double-right"></i>  Job related orientation</li>
											</ul>
											<p>For further details about employment, please refer to the item 
											“Working in Australia” in following pages. </p>

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