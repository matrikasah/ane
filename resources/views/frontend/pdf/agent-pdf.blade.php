<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section class="innerpage-content onshoreForm">
        <div class="container">
            <div class="row calender content-text">
                <div class="col-12">
                    <section class="onshoreForm">

                        <div class="aneContent">

                            <form action="" method="">




                                <div class="personalDetails p-1 mt-4 gap">
                                    <div class="personalDetailsHead mainFormHeadings">
                                        <h3> Details</h3>

                                    </div>
                                    <div class="row">


                                                <p><b>Agent Name: </b> {{$agent->name}}</p>


                                                <p for="userSurname" class="input-group-text"> <b>Surname: </b>{{$agent->surname}} </p>


                                                <p for="userGivenName" class="input-group-text"> <b> Given Name: </b>{{$agent->givenname}}</p>


                                                <p for="userHomeAddress" class="input-group-text"> <b>Address in Australia: </b> {{$agent->address_in_aus}}</p>


                                                <p for="userHomeAddress" class="input-group-text"> <b>Suburb: </b> {{$agent->suburb}}</p>



                                                <p for="userHomeAddress" class="input-group-text"> <b>Country: </b> {{$agent->country}}</p>

                                        <!-- <hr> -->

                                                <!-- <label for="telNum" class="input-group-text">Telephone Number </label> -->
                                                <p for="userHomeAddress" class="input-group-text"> <b>Address (Outside Australia): </b> {{$agent->address_outside_aus}}</p>




                                                <p for="userHomeAddress" class="input-group-text"> <b>Suburb: </b> {{$agent->suburb_outside_aus}}</p>



                                                <p for="userHomeAddress" class="input-group-text"> <b>Postcode: </b> {{$agent->post_code}}</p>



                                                <p for="userHomeAddress" class="input-group-text"> <b>Mobile: </b>{{$agent->mobile_num}}</p>



                                                <p for="userHomeAddress" class="input-group-text"> <b>Telephone: </b>{{$agent->telephone_num}}</p>


                                                <p for="userHomeAddress" class="input-group-text"> <b>ABN: </b> {{$agent->abn}}</p>



                                                <p for="userHomeAddress" class="input-group-text"> <b>ACN: </b> {{$agent->acn}}</p>
                                            <!-- <hr> -->
                                                <p for="userHomeAddress" class="input-group-text"> <b>Emergency Contact: </b> {{$agent->emergency_contact}}</p>
                                                <p for="userHomeAddress" class="input-group-text"> <b>Address: </b> {{$agent->emgy_address}}</p>
                                                <p for="userHomeAddress" class="input-group-text"> <b>Telephone: </b> {{$agent->emgy_telephone}}</p>



                                    </div>
                                </div>
                                <div class="p-1 mt-4 emergencyContactDetails gap">
                                    <div class="mainFormHeadings emergencyHeading">
                                        <h3>BUSINESS HISTORY</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mt-4">
                                            <div class="input-group">

                                                <p for="userHomeAddress" class="input-group-text"> <b>How long have you been in operation as an education agent? (Please provide a business plan if your company is new): </b>{{$agent->businessHistory->how_long_operation}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <div class="input-group">

                                                <p for="userHomeAddress" class="input-group-text"> <b>Does your company deal in areas other than international education?: </b>{{$agent->businessHistory->deal_area}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <div class="input-group">

                                                <p for="userHomeAddress" class="input-group-text"> <b>What is the total number of students that your office recruits each year?: </b>{{$agent->businessHistory->totalnumber_student}} </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <div class="input-group">

                                                <p for="userHomeAddress" class="input-group-text"> <b>Where (which countries) do you send most of your students?: </b> {{$agent->businessHistory->country_student_send}}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-4" style="align-items: center;">
                                            <p for="userHomeAddress" class="input-group-text"> <b>Where (which countries) do you send most of your students?: </b> {{$agent->businessHistory->country_student_send}}</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="eduAgent gap">

                                    <div class="row">
                                        <div class="col-md-6 mt-4 ml-0">
                                            <div class="input-group">

                                                <p for="userHomeAddress" class="input-group-text"> <b>How many students does your agency brought to Australia to study in the last 12 months?: </b> {{$agent->businessHistory->student_in_austrila}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4">

                                            <p for="userHomeAddress" class="input-group-text"> <b>Do you work with any other education agents as a partnership or an affiliation?: </b> {{$agent->businessHistory->partners}}</p>

                                        </div>
                                        <div class="col-md-6 mt-4 ml-0">

                                            <p for="userHomeAddress" class="input-group-text"> <b>Do you represent any other Australian institutions? (If Yes, please describe the institutions’ names): </b> {{$agent->businessHistory->institutions}}</p>
                                        </div>


                                    </div>
                                </div>
                                <div class="eduQualifications mt-4 gap">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mainFormHeadings">
                                                <h3>AGENCY INFORMATION (CONTACT PERSON)</h3>
                                            </div>


                                                    <p for="userHomeAddress" class="input-group-text"> <b>Key staff contact (1) Position: </b></p>



                                            <p style="font-size: 14px">Please include the details of two (2) referee we can contact, including one educational institution in Australia.</p>
                                        </div>
                                        <div class="col-md-4">
                                            @foreach ($agent->contactPerson as $key => $item )


                                            <div class="mainFormHeadings">
                                                <h3>Referee {{$key}}:</h3>
                                            </div>

                                            <p for="userHomeAddress" class="input-group-text"> <b>Name: </b> {{$item->useragentname}}</p>
                                            <p for="userHomeAddress" class="input-group-text"> <b>Institution Name: </b> {{$item->userinstname}}</p>
                                            <p for="userHomeAddress" class="input-group-text"> <b>Title: </b>  {{$item->userinsttitle}}</p>
                                            <p for="userHomeAddress" class="input-group-text"> <b>Phone: </b>  {{$item->userinstphone}}</p>
                                            <p for="userHomeAddress" class="input-group-text"> <b>Fax: </b> {{$item->userinstfax}}</p>
                                            <p for="userHomeAddress" class="input-group-text"> <b>Email: </b> {{$item->userinstemail}}</p>

                                            @endforeach
                                        </div>


                                        <div class="col-md-4">
                                            <div class="mainFormHeadings">
                                                <h3>Declaration</h3>
                                            </div>

                                            <p for="userHomeAddress" class="input-group-text"> <b>Full Name: </b> {{$agent->declaration->agentprintname}}</p>
                                            <p for="userHomeAddress" class="input-group-text"> <b>Applicant Signature: </b>  {{$agent->declaration->agent_sign}}</p>
                                            <p for="userHomeAddress" class="input-group-text"> <b>Position: </b> {{$agent->declaration->agent_position}}</p>
                                            <p for="userHomeAddress" class="input-group-text"> <b>Sign Date: </b>  {{$agent->declaration->date}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- language and cultural diversity -->



                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
