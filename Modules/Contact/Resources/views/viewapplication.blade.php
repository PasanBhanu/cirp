<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <title>{{ $applications->sectionB_surname_with_initials }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{static_asset('theme/img/logos/logo.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{static_asset('theme/img/logos/logo.png')}}">


    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{static_asset('theme/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{static_asset('theme/css/theme.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{static_asset('theme/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/vendor/rs-plugin/css/navigation.css')}}">
    <link rel="stylesheet" href="{{static_asset('theme/vendor/circle-flip-slideshow/css/component.css')}}">

    <!-- Demo CSS -->

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{static_asset('theme/css/skins/default.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{static_asset('theme/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{static_asset('theme/vendor/modernizr/modernizr.min.js')}}"></script>
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 25px;
            right: 90px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }
        
        .my-float {
            margin-top: 16px;
        }
    </style>
    <style>
        @media only screen and (max-width: 600px) 
            {
            .header-logo-desktop{
                display: none!important;
                    }
            }

        @media only screen and (min-width: 600px) 
            {
            .header-logo-mobi{
                display: none!important;
                    }
            }

        @media only screen and (max-width: 600px) 
        {
        .top-new{
            display: none!important;
                }
        }
    </style>
     <style>
        @media only screen and (max-width: 600px) {
            hide-box {
                visibility: hidden;
            }
        }
    </style>

    <link rel="icon" href="{{static_asset(''.settingHelper('favicon')) }}">

     <script async src="https://www.googletagmanager.com/gtag/js?id={{ settingHelper('google_analytics_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ settingHelper('google_analytics_id') }}');
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <style>
    @media only screen and (max-width: 600px) {
        .slider-container {
            padding-top: 80px!important;
            padding-bottom: 0px;
        }
    }
</style>
<style>
    @media only screen and (max-width: 600px) {
        th {
            height: 15px;
            padding: 2px!important;
        }
    }
</style>

<link rel="stylesheet" href="{{static_asset('theme/build/css/intlTelInput.css')}}">
        <link rel="stylesheet" href="{{static_asset('theme/build/css/demo.css')}}">


<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>

<style>
	.container-wrapper-form {
	    max-width: 900px;
	    margin: 0 auto;
	    margin-top: 20px;
	    margin-bottom: 10rem;
	    padding: 20px;
	    box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048), 0 12.5px 10px rgba(0, 0, 0, 0.06), 0 22.3px 17.9px rgba(0, 0, 0, 0.072), 0 41.8px 33.4px rgba(0, 0, 0, 0.086), 0 100px 80px rgba(0, 0, 0, 0.12);
	}

	.form-title {
	    text-align: center;
	    margin-top: 50px;
	}

	.sectionA,
	.sectionB,
	.sectionC,
	.sectionD,
	.sectionE,
	.sectionF,
	.sectionG,
	.sectionH,
	.sectionI,
	.sectionJ,
	.sectionK,
	.sectionL {
	    background: #2c3e50;
	    /* fallback for old browsers */
	    background: -webkit-linear-gradient(to right, #4ba3da, #243e7f);
	    /* Chrome 10-25, Safari 5.1-6 */
	    background: linear-gradient(to right, #4ba3da, #243e7f);
	    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	    padding: 0px;
	    color: white;
	    margin-bottom: 20px;
	}

	.sectionA p,
	.sectionB p,
	.sectionC p,
	.sectionD p,
	.sectionE p,
	.sectionF p,
	.sectionG p,
	.sectionH p,
	.sectionI p,
	.sectionJ p,
	.sectionK p,
	.sectionL p {
	    color: white;
	}
	p{
	    margin-left: 18px;
	}

	input[type=checkbox], input[type=radio] {
	height:13px!important;
	}
</style>

<style>
.reveal-if-active {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
.reveal-if-active label {

  margin: 0 0 3px 0;
}
.reveal-if-active input[type=text] {
  /* width: 100%; */
}
input[type="radio"]:checked ~ .reveal-if-active, input[type="checkbox"]:checked ~ .reveal-if-active {
  opacity: 1;
  max-height: 200px;
  padding: 10px 20px;
  -webkit-transform: scale(1);
          transform: scale(1);
  overflow: visible;
}

input[type="text"] {
	width:100% !important;
}
</style>
</head>
<body>


<div class="body">
	<div role="main" class="main">
		<div style="background-image: url(/public/theme/img/fingerprint.png); background-size: cover; background-position: center;">

			<div class="container-wrapper-form" style="background-color: #FFF">

                           
 <div class="sectionA">
                                    <p>Section A : Your Application (PLEASE FILL IN BLOCK LETTERS)</p>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Nationality</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$applications->nationality}}" class="form-control input-md" disabled >

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Country of Residence</label>
                                    <div class="col-md-12">
                                        <input id="country_of_residence" name="country_of_residence" type="text" class="form-control input-md" value="{{$applications->country_of_residence}}" disabled>

                                    </div>
                                </div>
                             <div class="form-group">
                            @if($applications->choiceanimals == 'on')
                            <label class="col-md-4 control-label" for="number">Passport Number</label>
                            	<div class="col-md-12">
                            		<input type="text" id="which-dog" name="whichdog" class="require-if-active" value="{{ $applications->whichcat }}" disabled>
                        		</div>

                        		<label class="col-md-4 control-label" for="number">Date Of Expiry</label>
                            	<div class="col-md-12">
                            		<input type="text" id="which-dog" name="whichdog" class="require-if-active" value="{{ $applications->sectionA_date_expiry }}" disabled>
                        		</div>

                        		<label class="col-md-12 control-label" for="number">Current Visa Status</label>
                                    <div class="col-md-12">
                                        <input id="current_visa_status" name="current_visa_status" type="text" value="{{ $applications->current_visa_status }}" disabled>

                                    </div>
                            @else
                            <label class="col-md-4 control-label" for="number">NIC Number</label>
                            	<div class="col-md-12">
                                <input type="text" id="which-dog" name="whichdog" class="require-if-active" value="{{ $applications->whichdog }} " disabled>
                            </div>

                            @endif
                            </div>
                            
                            





                            <div class="sectionB">
                                    <p>Section B : Your contact details</p>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Title</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $applications->sectionB_title }}" disabled>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Surname with initials</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $applications->sectionB_surname_with_initials }}" disabled>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">First Name</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $applications->sectionB_first_name }}" disabled>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Name to be used for Correspondence</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $applications->sectionB_name_to_be_used }}" disabled> (One first name and surname)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Date of Birth</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $applications->sectionB_date_of_birth }}" disabled>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Gender</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$applications->sectionB_gender}}" disabled>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Residential Address</label>
                                    <div class="col-md-12">
                                    	<textarea disabled class="form-control">{!!$applications->sectionB_address!!}</textarea>
                                        

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Land Phone Number</label>
                                    <div class="col-md-12">
                                        <input id="phone" type="text" value="{{$applications->full_sesctionB_land_phone}}" disabled>

                                    </div>

                                </div>


                                <!--------------------------------------------->

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Mobile Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$applications->full_sesctionB_mobile_phone}}" disabled>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Email</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$applications->sectionB_email}}" disabled>

                                    </div>
                                     <label class="col-md-6 control-label"> ( You must give a current and valid email address )</label>
                                </div>











                                 <div class="sectionC">
                                    <p>Section C : Medical and Personal History</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="number">Do you have a disability, impairment or long-term medical condition that may affect your studies?</label>
                                    <div class="col-md-12">
                                    	<input type="text" value="{{$applications->sectionC_disability}}" disabled>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">If yes, please specify</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control input-md"disabled>{{$applications->sectionC_disability_reason}}</textarea>

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="number">Do you need support due to a special needs requirement, physical or medical ?</label>
                                        <div class="col-md-12">
                                        	<input type="text" value="{{$applications->sectionC_medical}}" disabled>
                                            

                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="number">If yes, please specify</label>
                                            <div class="col-md-12">
                                            	<textarea class="form-control input-md"disabled>{{$applications->sectionC_medical_reason}}</textarea>


                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 control-label"> Please mention any significant illness, ongoing medical treatment or allergy that could be of importance in a medical or surgical emergency</label>
                                        <div class="col-md-12">
                                        	<textarea class="form-control input-md"disabled cols="80" rows="10">{{$applications->sectionC_medical_information}}</textarea>
                                            

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Blood Group</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$applications->sectionC_blood_group}}" disabled class="form-control">

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Do you have any criminal convictions?</label>
                                        <div class="col-md-12">
                                        	<input type="text" value="{{$applications->sectionC_criminal}}" disabled class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="number">If yes, please specify</label>
                                            <div class="col-md-12">
                                            	<textarea class="form-control input-md"disabled>{{$applications->sectionC_criminal_description}}</textarea>

                                            </div>

                                        </div>
                                    </div>










                                    <div class="sectionD">
                                        <p>Section D : In Case of an Emergency</p>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Contact Person</label>
                                        <div class="col-md-12">
                                            <input type="text"class="form-control input-md" value="{{$applications->sectionD_contact_person}}" disabled>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Land Phone no</label>
                                        <div class="col-md-12">
                                            <input value="{{$applications->full_sesctionD_land_phone}}" disabled>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Mobile Phone no</label>
                                        <div class="col-md-12">
                                            <input value="{{$applications->full_sesctionD_mobile_phone}}" disabled>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Relationship</label>
                                        <div class="col-md-12">
                                            <input  type="text" value="{{$applications->sectionD_relationship}}" disabled>

                                        </div>
                                    </div>











                                    <div class="sectionE">
                                        <p>Section E : Secondary School Education</p>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Secondary School Education</label>
                                        <div class="col-md-12">
                                        	<input  type="text" value="{{$applications->sectionE_education}}" disabled>
                                            

                                        </div>
                                    </div>
                                    <div class="table-repsonsive">
                                        <span id="error"></span>
                                        <table class="table table-bordered" id="item_table">
                                            <tr>
                                                <th>Year</th>
                                                <th>Examination Body</th>
                                                <th>School</th>
                                                <th>Subjects</th>
                                                <th>Result</th>
                                                
                                            </tr>
                                            @foreach($schools as $school)
                                            <tr>
                                                <td><input type="text" class="form-control" value="{{$school->year}}" disabled/></td>

                                                <td><input type="text" class="form-control"  value="{{$school->examination_body}}" disabled/></td>

                                                <td><input type="text" class="form-control" value="{{$school->school}}" disabled /></td>

                                                <td><input type="text" class="form-control" value="{{$school->subject}}" disabled /></td>

                                                <td><input type="text" class="form-control" value="{{$school->result}}" disabled /></td>
                                                
                                            </tr>
                                            @endforeach
                                        </table>

                                    </div>




                                     <div class="sectionF">
                                        <p>Section F : Academic Qualifications</p>
                                    </div>

                                    <h6>Please list your most recent qualification first :</h6>


                                    <div class="table-repsonsive">
                                        <span id="error"></span>
                                        <table class="table table-bordered" id="item_table1">
                                            <tr>
                                                <th>Year</th>
                                                <th>Qualification</th>
                                                <th>Institution</th>
                                                <th>Awarding Body</th>
                                                <th>Country</th>
                                                
                                            </tr>
                                            @foreach($academics as $academic)
                                            <tr>
                                                <td><input type="text" class="form-control" value="{{$academic->a_year}}" disabled/></td>

                                                <td><input type="text" class="form-control" value="{{$academic->a_qulification}}" disabled /></td>

                                                <td><input type="text" class="form-control" value="{{$academic->a_qulification}}" disabled /></td>

                                                <td><input type="text" class="form-control" value="{{$academic->a_awarding_body}}" disabled /></td>

                                                <td><input type="text" class="form-control" value="{{$academic->a_country}}" disabled /></td>
                                                
                                            </tr>
                                            @endforeach

                                        </table>

                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-4 control-label" for="number"><b>Other Qualification</b></label>
                                        </br>
                                        <label class="col-md-4 control-label" for="number">If yes, please specify</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control" value="{{$applications->sectionF_other_qualification}}" disabled>

                                        </div>
                                    </div>



                                    <div class="sectionG">
                                        <p>Section G : English Language Proficiency</p>
                                    </div>
                                    <p>Please tick the appropriate box, if you have sat for any of the following exams which have been conducted in the English medium.</p>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="number">English Language Proficiency</label>

                                        <div class="col-md-12">
                                            	<input type="text" value="{{$applications->sectionG_language}}" disabled>

                                        </div>
                                    </div>
                                    <p>You must provide proof of your English Proficiency to the required standard of your chosen course by providing the necessary certified document. If you do not meet the course English requirements, you may be required to complete an English Language Proficiency Test.</p>



                                    <div class="sectionH">
                                        <p>Section H : Work Experience and Employment Details</p>
                                    </div>

                                    <p>Please give details of any work experience, training and for employment. </p>

                                    @foreach($works as $work)
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Name Of Organization</label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control" value="{{$work->sectionH_name_of_organization1}}" disabled>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Job Title and Nature of Work / Training</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" value="{{$work->sectionH_title_nature1}}" disabled >

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Time</label>
                                        <div class="col-md-12">
                                        	<input type="text" class="form-control" value="{{$work->sectionH_time}}" disabled >

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">From</label>
                                        <div class="col-md-12">
                                        	<input type="text" class="form-control" value="{{$work->sectionH_from}}" disabled >


                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">To</label>
                                        <div class="col-md-12">
                                        	<input type="text" class="form-control" value="{{$work->sectionH_to}}" disabled >


                                        </div>
                                    </div>
                                    <hr><hr>
                                    @endforeach


                                    <div class="sectionI">
                                        <p>Section I : Course Preferences</p>
                                    </div>
                                    <p>Refer to the CIRP Prospectus for details of the course titles. You may check the entry requirements and prerequisites for each course to see if you qualify</p>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Course Title</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" value="{{$applications->sectionI_cource_title}}" disabled>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Time</label>
                                        <div class="col-md-12">
                                        	<input type="text" class="form-control" value="{{$applications->sectionI_time}}" disabled>


                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Days</label>
                                        <div class="col-md-12">
                                        	<input type="text" class="form-control" value="{{$applications->sectionI_days}}" disabled>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Intake</label>
                                        <div class="col-md-12">
                                        	<input type="text" class="form-control" value="{{$applications->sectionI_intake}}" disabled>


                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Commencement Year</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" value="{{$applications->sectionI_year}}" disabled>

                                        </div>
                                    </div>


                                    <div class="sectionI">
                                        <p>Section J : Application Fee Payment</p>
                                    </div>

                                    <h5>REGISTRATION FEE - 5000 LKR for Sri Lankan Students / 50USD for International Students</h5>

                                   

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Preferred Payment Plan</label>
                                        <div class="col-md-12">
                                        	 <input type="text" class="form-control" value="{{$applications->sectionJ_payment_plan}}" disabled>
                                        </div>
                                    </div>


                                     <div class="sectionK">
                                        <p>Section K : Further Information</p>
                                    </div>

                                    <div class="form-group">
                                        <label>How did you hear about this program?</label>
                                        <p>Information you provide here helps us to improve our marketing strategies. Please provide accurate information.</p>
                                        
                                        <div class="col-md-12">
                                        	 <input type="text" class="form-control" value="{{$applications->sectionK_furthur}}" disabled>
                                            

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="number">If other or through a friend please specify</label>
                                        <div class="col-md-12">
                                        	<input type="text" class="form-control" value="{{$applications->sectionK_other}}" disabled>
                                            

                                        </div>
                                    </div>


                                    <div class="sectionL">
                                        <p>Section L : Privacy and Student Declaration</p>
                                    </div>
                                    <h6>IMPORTANT NOTE</h6>

                                    <p>Colombo Institute of Research & Psychology (CIRP) aims to ensure that quality of educational services is upheld, as stated in the Academic Policy, to the maximum possible degree. If external, unforeseen circumstances interfere with the educational process, CIRP will take all reasonable steps to minimize any disruption to academics. In addition, CIRP will not take responsibility for any actions or circumstances which may be directly or indirectly outside the control of CIRP.</h6>
                                    
                                    <h6>GENERAL PRIVACY STATEMENT</h6>
                                    <p>The information collected on this form is solely used for academic purposes. It is used to assess your application for entry to the courses at CIRP. It will also be used to create an enrolment record on the student database, for statistical analysis and to inform you about your course and other related events. Personal information may be collected from, or disclosed to, relevant bodies for the verification of previous qualifications, and it may be disclosed to the relevant government agencies, as required by law.</p>

                                    <h6>STUDENT DECLARATION</h6>

                                    <p>I warrant that the information on this form is current and complete. I acknowledge that the provision of incorrect information or the withholding of relevant information relating to my application, including academic transcript/s, might invalidate my application and that CIRP may withdraw an offer of a place or cancel my enrolment in consequence. I have read and understood CIRP’s refund policy and the above conditions and accept them fully.</p>

                                    <h5>BELOW MENTIONED REGISTRATION FEES WOULD BE APPLICABLE UPON SUBMISSION OF APPLICATION.</h5></br>
                                    

                                    <p><b>Payment for Sri Lankan Students - 5000 LKR</b></br>
                                        

                                    <b>LKR Account - Union Bank</b></br>
                                        Account Name : Colombo Institute of Research and Psychology (Pvt) Ltd.</br>
                                        Branch : Wellawatte Branch</br>
                                        Account Number : 0050101000015097</br>
                                        Reference : Student/Applicant Name</br>
                                        </br>
                                        
                                    </p>

                                    <p>
                                        <b>Payment for International Students - 50 USD</b></br>
                                       
                                        <b>USD Account – Union Bank</b></br>
                                        Account Name : Colombo Institute of Research and Psychology (Pvt) Ltd.</br>
                                        Branch : Wellawatte Branch</br>
                                        Account Number : 0050202000001224</br>
                                        Reference : Student/Applicant Name</br>
                                        </br>
                                        

                                        Kindly revert back to us should you require any further information.</br>

                                        Upon payment please attach a scanned copy of your deposit slip (Upon payment, please upload a scanned copy of your deposit in order to complete the enrolment process) in order to complete the enrollment process.</br>

                                    </p>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Date</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$applications->sectionA_date_expiry}}" disabled class="form-control" >

                                        </div>
                                    </div>
                                    

                                    <div class="sectionA">
                                    <p >Please upload the following checklist before submitting</p></div>
                                        <div class="col-md-8">
                                        <ul>
                                             <li><p>Bank payment slip of the Application fee (non-refundable)</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        @if(empty($applications->bank_slip))
                                        	<p style="color:blue;">No Any downloadble documents</p>
                                        @else
                                        	@php 
                                        		$varb = $applications->bank_slip;
                                        		$banks = explode(',', trim($varb, ','));
                                        		$b1 = 0;
                                        	@endphp
                                        	<?php
                                        	foreach($banks as $bank){
                                        		$b1++;
                                        	echo"<a href='".url('public/images/application/bankslip').'/'.$bank."' target='_bl_".$b1."'>"."Download Bank Slip - ".$b1."</a> <br>";
                                        	}
                                        	?>
                                        @endif
                                        </div>


                                         <br>
                                            <li><p>Certified copies of academic transcripts / records</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        @if(empty($applications->certified_copies))
                                        <p style="color:blue;">No Any downloadble documents</p>
                                        @else
                                        	@php 
                                        		$varc = $applications->certified_copies;
                                        		$cers = explode(',', trim($varc, ','));
                                        		$b2 = 0;
                                        	@endphp
                                        	<?php
                                        	foreach($cers as $cer){
                                        		$b2++;
                                        	echo"<a href='".url('public/images/application/certifiedcopies').'/'.$cer."' target='_cr_".$b2."'>"."Download Certified copy -".$b2."</a> <br>";
                                        	}
                                        	?>
                                        @endif
                                        </div>


                                        <br>

                                            <li><p>Proof of English proficiency</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        @if(empty($applications->english_proof))
                                        <p style="color:blue;">No Any downloadble documents</p>
                                        @else
                                        	@php 
                                        		$vare = $applications->english_proof;
                                        		$engl = explode(',', trim($vare, ','));
                                        		$b3 = 0;
                                        	@endphp
                                        	<?php
                                        	foreach($engl as $eng){
                                        		$b3++;
                                        	echo"<a href='".url('public/images/application/englishproof').'/'.$eng."' target='_en_".$b3."'>"."Download Proof of English -".$b3."</a> <br>";
                                        	}
                                        	?>

                                        @endif
                                           
                                        </div>

                                        <br>

                                            <li><p>Signed declaration</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        @if(empty($applications->signed))
                                        <p style="color:blue;">No Any downloadble documents</p>
                                        @else
                                        	@php 
                                        		$varsi = $applications->signed;
                                        		$signs = explode(',', trim($varsi, ','));
                                        		$b4 = 0;
                                        	@endphp
                                        	<?php
                                        	foreach($signs as $sign){
                                        		$b4++;
                                        	echo"<a href='".url('public/images/application/signed').'/'.$sign."' target='_si_".$b4."'>"."Download Signed declaration -".$b4."</a> <br>";
                                        	}
                                        	?>

                                        @endif
                                            
                                        </div>
                                                <br>

                                          <li><p>Copy of passport/ NIC/ birth certificate</p></li>
                                        <div class="col-md-12" style="padding-top: 0px">
                                        @if(empty($applications->passport_nic))
                                        <p style="color:blue;">No Any downloadble documents</p>
                                        @else
                                        	@php 
                                        		$varpa = $applications->passport_nic;
                                        		$passports = explode(',', trim($varpa, ','));
                                        		$b5 = 0;
                                        	@endphp
                                        	<?php
                                        	foreach($passports as $passport){
                                        		$b5++;
                                        	echo"<a href='".url('public/images/application/passportnic').'/'.$passport."' target='_ps_".$b5."'>"."Download Copy of passport/ NIC/ birth certificate -".$b5."</a> <br>";
                                        	}
                                        	?>

                                        @endif
                                            
                                        </div>
                                                <br>

                                            <li><p>Passport sized photograph</p></li>
                                        <div class="col-md-12" style="padding-top: 0px">
                                        @if(empty($applications->photograph))
                                        <p style="color:blue;">No Any downloadble documents</p>
                                        @else
                                        	@php 
                                        		$varph = $applications->photograph;
                                        		$photographs = explode(',', trim($varph, ','));
                                        		$b6 = 0;
                                        	@endphp
                                        	<?php
                                        	foreach($photographs as $photograph){
                                        		$b6++;
                                        	echo"<a href='".url('public/images/application/photograph').'/'.$photograph."' target='_ph_".$b6."'>"."Download photograph -".$b6."</a> <br>";
                                        	}
                                        	?>

                                        @endif
                                            
                                        </div>
                                                <br>


                                            </div>
                                        </ul>

                                        </div>







































	</div>

</div>


    <!-- <script src="{{static_asset('theme/vendor/jquery/jquery.min.js')}}"></script> -->

    <script src="{{static_asset('theme/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>


    <script src="{{static_asset('theme/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/common/common.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/jquery.validation/jquery.validate.min.js')}}"></script>


    <script src="{{static_asset('theme/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/vivus/vivus.min.js')}}"></script>
        <!-- Theme Base, Components and Settings -->
    <script src="{{static_asset('theme/js/theme.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{static_asset('theme/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{static_asset('theme/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script src="{{static_asset('theme/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}"></script>

    <script src="{{static_asset('theme/js/views/view.home.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{static_asset('theme/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{static_asset('theme/js/theme.init.js')}}"></script>

    

</body>
</html>