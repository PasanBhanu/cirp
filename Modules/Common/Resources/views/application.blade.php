@extends('site::layouts.master')
@section('style')
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


</style>
@endsection
@section('content')

 <body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}" style="margin: 0px!important">
        

        <div class="body">
				<div role="main" class="main">
                    <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
                        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
                            <ul>
                                <li data-transition="fade">
                                    <img src="{{static_asset('theme/video/26.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2" data-frames='[{"delay":100,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']" style=" text-shadow: 3px 3px 3px  #000000;">Application Form</div>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div style="background-image: url(/public/theme/img/fingerprint.png); background-size: cover; background-position: center;">

                  <!-----------------------------Bread cumbs------------------------------->
            <div class="container" style="padding-top: 20px">
                <ul style="padding: 0px 15px">
                    <p>
                        <a href="{{url('/')}}" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
                        <a href="#" style="text-decoration: none;">&nbsp;&nbsp;Application Form</a>
                    </p>
                    
                </ul>
            </div>
<!----------------------------------------------------->
<!----------------------------------------------------->
                        <!------------------->
                        <div class="container-wrapper-form" style="background-color: #FFF">

                            <form id="contact" action="{{url('application/submit')}}" method="post" enctype="multipart/form-data">
                            	@csrf

                            	@if(Session::has('message'))
        <div class="alert alert-success" role="alert">
          {{Session::get('message')}}
        </div>
    @endif
                                <?php if(isset($success) && $success==true){?>
                                <div class="alert alert-success" role="alert">
                                Your application has been submitted successfully.
                                </div>
                                <?php }?>
                                <?php if(isset($success) && $success==false){?>
                                <div class="alert alert-danger" role="alert">
                                    Oopps something went wrong
                                    </div>
                                <?php }?>
                                                            <div class="sectionA">
                                    <p>Section A : Your Application (PLEASE FILL IN BLOCK LETTERS)</p>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Nationality</label>
                                    <div class="col-md-4">
                                        <input id="nationality" name="nationality" type="text" placeholder="" class="form-control input-md" required="" autofocus="">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Country of Residence</label>
                                    <div class="col-md-4">
                                        <input id="country_of_residence" name="country_of_residence" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>
                                <div class="form-group">
                            <div>
                                <input type="radio" name="choiceanimals" id="choiceanimalsdogs" style="width: 40px">
                                <label for="choiceanimalsdogs">NIC Number</label>
                               <div class="reveal-if-active">
                                
                                <div>
                                <input type="text" id="whichdog" name="whichdog" class="require-if-active" data-require-pair="#choice-animals-dogs">
                               </div>
                               </div>
                            </div>


                            <div>
                                <input type="radio" name="choiceanimals" id="choiceanimals-cats" style="width: 40px">
                                <label for="choiceanimalscats">Passport Number</label>

                                <div class="reveal-if-active" >
                                
                                <div>
                                <input type="text" id="whichcat" name="whichcat" class="require-if-active" class="form-control input-md" data-require-pair="#choiceanimalscats">
                                </div>
                                <div>
                                <label for="number">Date Of Expiry</label>
                                <div>  
                                <input id="sectionA_date_expiry" name="sectionA_date_expiry" type="date" placeholder="" >  
                                </div>
                                </div>
                                </div>
                            </div>
                            </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Current Visa Status</label>
                                    <div class="col-md-4">
                                        <input id="current_visa_status" name="current_visa_status" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <div class="sectionB">
                                    <p>Section B : Your contact details</p>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Title</label>
                                    <div class="col-md-4">
                                        <select class="form-control" id="sectionB_title" name="sectionB_title">
                                            <option>Mr</option>
                                            <option>Miss</option>
                                            <option>Mrs.</option>
                                            <option>Dr</option>
                                            <option>Rev</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Surname with initials</label>
                                    <div class="col-md-4">
                                        <input id="sectionB_surname_with_initials" name="sectionB_surname_with_initials" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">First Name</label>
                                    <div class="col-md-4">
                                        <input id="sectionB_first_name" name="sectionB_first_name" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Name to be used for Correspondence</label>
                                    <div class="col-md-4">
                                        <input id="sectionB_name_to_be_used" name="sectionB_name_to_be_used" type="text" placeholder="" class="form-control input-md" required=""> (One first name and surname)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Date of Birth</label>
                                    <div class="col-md-4">
                                        <input id="sectionB_date_of_birth" name="sectionB_date_of_birth" type="date" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Gender</label>
                                    <div class="col-md-4">
                                        <select class="form-control" id="sectionB_gender" name="sectionB_gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Residential Address</label>
                                    <div class="col-md-4">
                                        <input id="sectionB_address" name="sectionB_address" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="number">Land Phone Number</label>
                                    <div class="col-md-4">
                                        <input id="phone" type="tel" name="sectionB_land_phone" onkeyup="this.value=this.value.replace(/[^\d]/,'')" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>

                                </div>

                                <!--------------------------------------------->

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Mobile Phone No</label>
                                    <div class="col-md-4">
                                        <input id="phone1" name="sectionB_mobile_phone" onkeyup="this.value=this.value.replace(/[^\d]/,'')" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="number">Email</label>
                                    <div class="col-md-4">
                                        <input id="sectionB_email" name="sectionB_email" type="email" placeholder="" class="form-control input-md" required="">

                                    </div>
                                     <label class="col-md-6 control-label"> ( You must give a current and valid email address )</label>
                                </div>



                                <div class="sectionC">
                                    <p>Section C : Medical and Personal History</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="number">Do you have a disability, impairment or long-term medical condition that may affect your studies?</label>
                                    <div class="col-md-4">
                                        <select class="form-control" id="sectionC_disability" name="sectionC_disability">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">If yes, please specify</label>
                                        <div class="col-md-4">
                                            <input id="sectionC_disability_reason" name="sectionC_disability_reason" type="text" placeholder="" class="form-control input-md" value="">

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="number">Do you need support due to a special needs requirement, physical or medical ?</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="sectionC_medical" name="sectionC_medical">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="number">If yes, please specify</label>
                                            <div class="col-md-4">
                                                <input id="sectionC_medical_reason" name="sectionC_medical_reason" type="text" placeholder="" class="form-control input-md" value="">

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 control-label"> Please mention any significant illness, ongoing medical treatment or allergy that could be of importance in a medical or surgical emergency</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="sectionC_medical_information" id="sectionC_medical_information" cols="80" rows="10"></textarea>

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Blood Group</label>
                                        <div class="col-md-4">
                                            <input type="text" name="sectionC_blood_group" id="" class="form-control">

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Do you have any criminal convictions?</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="sectionC_criminal" name="sectionC_criminal">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="number">If yes, please specify</label>
                                            <div class="col-md-4">
                                                <input type="text" name="sectionC_criminal_description" id="" class="form-control" value="">

                                            </div>

                                        </div>
                                    </div>





                                    <div class="sectionD">
                                        <p>Section D : In Case of an Emergency</p>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Contact Person</label>
                                        <div class="col-md-4">
                                            <input id="sectionD_contact_person" name="sectionD_contact_person" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Land Phone no</label>
                                        <div class="col-md-4">
                                            <input id="phone2" name="sectionD_land_phone" onkeyup="this.value=this.value.replace(/[^\d]/,'')" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Mobile Phone no</label>
                                        <div class="col-md-4">
                                            <input id="phone3" name="sectionD_mobile_phone" onkeyup="this.value=this.value.replace(/[^\d]/,'')" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Relationship</label>
                                        <div class="col-md-4">
                                            <input id="sectionD_relationship" name="sectionD_relationship" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <div class="sectionE">
                                        <p>Section E : Secondary School Education</p>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Secondary School Education</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="sectionE_education" name="sectionE_education">
                                                <option>GCE (SL)</option>
                                                <option>CIE</option>
                                                <option>EDEXCEL</option>
                                                <option>OTHER</option>
                                            </select>

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
                                                <th>
                                                    <button type="button" id="ad" name="add" class="btn btn-success btn-sm add"><span>Add</span></button>
                                                </th>
                                            </tr>
                                            <!-- <tr>
                                                <td><input type="text" name="year[]" class="form-control number_only item_quantity"  /></td>
                                                <td><input type="text" name="examination_body[]" class="form-control number_only item_quantity"  /></td>
                                                <td><input type="text" name="school[]" class="form-control number_only item_quantity"  /></td>
                                                <td><input type="text" name="subject[]" class="form-control number_only item_quantity"  /></td>
                                                <td><input type="text" name="result[]" class="form-control number_only item_quantity"  /></td>
                                                <td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span>Remove</span></button></td>
                                            </tr> -->
                                        </table>

                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-md-12 control-label" for="number">Please specify Year , Examination body,School,Subjects and Result</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="sectionE_education_table" name="sectionE_education_table" cols="80" rows="10">
                                                Year: Examination body: School: Subjects: Result:

                                            </textarea>

                                        </div>
                                    </div> -->
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
                                                <th>
                                                    <button type="button" name="add1" id="ad" class="btn btn-success btn-sm add1" onclick="plus()"><span>Add</span></button>
                                                </th>
                                            </tr>
                                            <!-- <tr>
                                                <td><input type="text" name="a_year[]" class="form-control number_only item_quantity"  /></td>
                                                <td><input type="text" name="a_qulification[]" class="form-control number_only item_quantity"  /></td>
                                                <td><input type="text" name="a_insitute[]" class="form-control number_only item_quantity"  /></td>
                                                <td><input type="text" name="a_awarding_body[]" class="form-control number_only item_quantity"  /></td>
                                                <td><input type="text" name="a_country[]" class="form-control number_only item_quantity"  /></td>
                                                <td><button type="button" name="remove1" class="btn btn-danger btn-sm remove"><span>Remove</span></button></td>
                                            </tr> -->
                                        </table>

                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Name of Qualification</label>
                                        <div class="col-md-4">
                                            <input id="sectionF_qualification_name" name="sectionF_qualification_name" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Institution</label>
                                        <div class="col-md-4">
                                            <input id="sectionF_institution" name="sectionF_institution" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Awarding Body</label>
                                        <div class="col-md-4">
                                            <input id="sectionF_awarding_body" name="sectionF_awarding_body" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Country</label>
                                        <div class="col-md-4">
                                            <input id="sectionF_country" name="sectionF_country" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Date Commenced</label>
                                        <div class="col-md-4">
                                            <input id="sectionF_date_commenced" name="sectionF_date_commenced" type="date" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Date Completed</label>
                                        <div class="col-md-4">
                                            <input id="sectionF_date_completed" name="sectionF_date_completed" type="date" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number"><b>Other Qualification</b></label>
                                        </br>
                                        <label class="col-md-4 control-label" for="number">If yes, please specify</label>

                                        <div class="col-md-4">
                                            <input id="sectionF_other_qualification" name="sectionF_other_qualification" type="text" placeholder="" class="form-control input-md" value="">

                                        </div>
                                    </div>

                                    <div class="sectionG">
                                        <p>Section G : English Language Proficiency</p>
                                    </div>
                                    <p>Please tick the appropriate box, if you have sat for any of the following exams which have been conducted in the English medium.</p>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">English Language Proficiency</label>

                                        <div class="col-md-4">

                                            <div class="form-check">
                                                <input type="checkbox" name="sectionG_language[]" class="form-check-input" style="margin-left: 75px" value="GCSE / GCE Edexcel">
                                                <label class="form-check-label">GCSE / GCE Edexcel</label>
                                                <br></br>
                                                <input type="checkbox" name="sectionG_language[]" class="form-check-input" style="margin-left: 75px" value="CIE (Cambridge)">
                                                <label class="form-check-label">CIE (Cambridge)</label>
                                                <br></br>
                                                <input type="checkbox" name="sectionG_language[]" class="form-check-input" style="margin-left: 75px" value="IELTS">
                                                <label class="form-check-label">IELTS</label>
                                                <br></br>
                                                <input type="checkbox" name="sectionG_language[]" class="form-check-input" style="margin-left: 75px" value="TOEFL">
                                                <label class="form-check-label">TOEFL</label>
                                                <br></br>
                                                <input type="checkbox" name="sectionG_language[]" class="form-check-input" style="margin-left: 75px" value="Other">
                                                <label class="form-check-label">Other</label>
                                                <br></br>

                                            </div>

                                        </div>
                                    </div>
                                    <p>You must provide proof of your English Proficiency to the required standard of your chosen course by providing the necessary certified document. If you do not meet the course English requirements, you may be required to complete an English Language Proficiency Test.</p>



                                    <div class="sectionH">
                                        <p>Section H : Work Experience and Employment Details</p>
                                    </div>

                                    <p>Please give details of any work experience, training and for employment. </p>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Name Of Organization</label>
                                        <div class="col-md-4">
                                            <input id="sectionH_name_of_organization1" name="sectionH_name_of_organization1[]" type="text" placeholder="" class="form-control input-md" >

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Job Title and Nature of Work / Training</label>
                                        <div class="col-md-4">
                                            <input id="sectionH_title_nature1" name="sectionH_title_nature1[]" type="text" placeholder="" class="form-control input-md" >

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Time</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="sectionH_time" name="sectionH_time[]">
                                                <option value="Full Time">Full time</option>
                                                <option value="Part Time">Part time</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">From</label>
                                        <div class="col-md-4">
                                            <input id="sectionH_from" name="sectionH_from[]" type="date" placeholder="" class="form-control input-md" >

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">To</label>
                                        <div class="col-md-4">
                                            <input id="sectionH_to" name="sectionH_to[]" type="date" placeholder="" class="form-control input-md" >

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!---------------------------------------->
                                        <div class="input_fields_wrap">
                                            <button class="add_field_button" style="margin-left: 16px;">Add More</button>
                                            <div></div>
                                        </div>
                                    </div>



                                    <div class="sectionI">
                                        <p>Section I : Course Preferences</p>
                                    </div>
                                    <p>Refer to the CIRP Prospectus for details of the course titles. You may check the entry requirements and prerequisites for each course to see if you qualify</p>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Course Title</label>
                                        <div class="col-md-4">
                                            <input id="sectionI_cource_title" name="sectionI_cource_title" type="text" placeholder="" class="form-control input-md" >

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Time</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="sectionI_time" name="sectionI_time">
                                                <option>Full time</option>
                                                <option>Part time</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Days</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="sectionI_days" name="sectionI_days">
                                                <option>Weekdays</option>
                                                <option>Weekends</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Intake</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="sectionI_intake" name="sectionI_intake">
                                                <option>February</option>
                                                <!-- <option>May</option> -->
                                                <option>September</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Commencement Year</label>
                                        <div class="col-md-4">
                                            <input id="sectionI_year" name="sectionI_year" type="text" placeholder="" class="form-control input-md" >

                                        </div>
                                    </div>




                                    <div class="sectionI">
                                        <p>Section J : Application Fee Payment</p>
                                    </div>

                                    <h5>REGISTRATION FEE - 5000 LKR for Sri Lankan Students / 50USD for International Students</h5>

                                    <!--   <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Registration Fee</label>
                                        <div class="col-md-4">
                                            <input id="sectionJ_registration_fee" name="sectionJ_registration_fee" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Invoice No</label>
                                        <div class="col-md-4">
                                            <input id="sectionJ_invoice" name="sectionJ_invoice" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">Preferred Payment Plan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="sectionJ_payment_plan" name="sectionJ_payment_plan">
                                                <option value="Full Payment">Full Payment</option>
                                                <option value="Installment Scheme">Installment Scheme</option>
                                                <option value="Bank Loan">Bank Loan</option>
                                                <option value="Other Payments">Other Payments</option>
                                                <option value="Other">Other</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="sectionK">
                                        <p>Section K : Further Information</p>
                                    </div>

                                    <div class="form-group">
                                        <label>How did you hear about this program?</label>
                                        <p>Information you provide here helps us to improve our marketing strategies. Please provide accurate information.</p>
                                        <h6>News Paper Advertisement :</h6>
                                        <div class="col-md-4">

                                            <div class="form-check">
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="Sunday Times">
                                                <label class="form-check-label">Sunday Times</label>
                                                <br>
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="Hit Ad">
                                                <label class="form-check-label">Hit Ad</label>
                                                <br>
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="Sunday Observer">
                                                <label class="form-check-label">Sunday Observer</label>
                                                <br>
                                                
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="Television">
                                                <label class="form-check-label">Television</label>
                                                <br>
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="Internet Search">
                                                <label class="form-check-label">Internet Search</label>
                                                <br>
                                                
                                                
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="E- Mail">
                                                <label class="form-check-label">E- Mail</label>
                                                <br>
                                                
                                                
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="Facebook">
                                                <label class="form-check-label">Facebook</label>
                                                <br>
                                                
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="Instagram">
                                                <label class="form-check-label">Instagram</label>
                                                <br>
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="Through a Friend">
                                                <label class="form-check-label">Through a Friend</label>
                                                <br>
                                                <input type="checkbox" name="sectionK_furthur[]" class="form-check-input" style="margin-left: 75px" value="Other">
                                                <label class="form-check-label">Other</label>
                                                <br>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="number">If other or through a friend please specify</label>
                                        <div class="col-md-4">
                                            <input id="sectionK_other" name="sectionK_other" type="text" placeholder="" class="form-control input-md" >

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
                                        <div class="col-md-4">
                                            <input id="sectionA_date_expiry" max="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>" value="<?php echo date('Y-m-d');?>" name="sectionA_date_expiry" type="date" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>
<!---------------------------newly added--------------->
                                    <div class="sectionA">
                                    <p >Please upload the following checklist before submitting</p></div>
                                        <div class="col-md-8">
                                        <ul>
                                             <li><p>Bank payment slip of the Application fee (non-refundable)</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        
                                            <input id="uploaded_file" name="uploaded_file[]"  type="file" placeholder="" class="form-control input-md" required="" onchange="validateImage(this,'file_err1')" multiple>
                                            
                                            <small>Max Size 2MB</small>
                                            <small class="text-danger file-err" id="file_err1"></small>
                                        </div>
                                                <br>
                                            <li><p>Certified copies of academic transcripts / records</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        
                                            <input id="uploaded_file1" name="uploaded_file1[]" type="file" placeholder="" class="form-control input-md" required="" onchange="validateImage(this,'file_err2')" multiple>
                                            <small>Max Size 2MB</small>
                                            <small class="text-danger file-err" id="file_err2"></small>
                                        </div>
                                                <br>

                                            <li><p>Proof of English proficiency</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        
                                            <input id="uploaded_file2" name="uploaded_file2[]"  type="file" placeholder="" class="form-control input-md" required="" onchange="validateImage(this,'file_err3')" multiple>
                                            <small>Max Size 2MB</small>
                                            <small class="text-danger file-err" id="file_err3"></small>
                                        </div>
                                                <br>

                                            <li><p>Signed declaration</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        
                                            <input id="uploaded_file3" name="uploaded_file3[]"  type="file" placeholder="" class="form-control input-md" required="" onchange="validateImage(this,'file_err4')" multiple>
                                            <small>Max Size 2MB</small>
                                            <small class="text-danger file-err" id="file_err4"></small>
                                        </div>
                                                <br>

                                            <li><p>Copy of passport/ NIC/ birth certificate</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        
                                            <input id="uploaded_file4" name="uploaded_file4[]"  type="file" placeholder="" class="form-control input-md" required="" onchange="validateImage(this,'file_err5')" multiple>
                                            <small>Max Size 2MB</small>
                                            <small class="text-danger file-err" id="file_err5"></small>
                                        </div>
                                                <br>

                                            <li><p>Passport sized photograph</p></li>
                                        <div class="col-md-6" style="padding-top: 0px">
                                        
                                            <input id="uploaded_file5" name="uploaded_file5[]"  type="file" placeholder="" class="form-control input-md" required="" onchange="validateImage(this,'file_err6')" multiple>
                                            <small>Max Size 2MB</small>
                                            <small class="text-danger file-err" id="file_err6"></small>
                                        </div>
                                                <br>


                                            </div>
                                        </ul>

                                        </div>

<!------------------------------------------------------newly added------------------->




                                  <!--  <div class="form-group" style="padding-top: 40px">
                                        <label class="col-md-4 control-label" for="number">Upload the scanned documents</label>
                                        <div class="col-md-4">
                                            <input id="uploaded_file" name="uploaded_file" type="file" placeholder="" class="form-control input-md" required="">

                                        </div>
                                    </div>-->

                                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary" style="margin-top: 50px">Submit</button>
                                    </fieldset>
                            </form>
                            </div>
                        </div>
                    </div>

@section('script')
<script>
var FormStuff = {
  
  init: function() {
    this.applyConditionalRequired();
    this.bindUIActions();
  },
  
  bindUIActions: function() {
    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);
  },
  
  applyConditionalRequired: function() {
      
    $(".require-if-active").each(function() {
      var el = $(this);
      if ($(el.data("require-pair")).is(":checked")) {
        el.prop("required", true);
      } else {
        el.prop("required", false);
      }
    });
    
  }
  
};

FormStuff.init();
</script>

<script>
    $(document).ready(function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div><label class="col-md-4 control-label" for="number">Name Of Organization</label><div class="col-md-4"> <input id="sectionH_name_of_organization1" name="sectionH_name_of_organization1[]" type="text" placeholder="" class="form-control input-md"></div> <label class="col-md-4 control-label" for="number">Job Title and Nature of Work / Training</label><div class="col-md-4"><input id="sectionH_title_nature1" name="sectionH_title_nature1[]" type="text" placeholder="" class="form-control input-md" ></div><label class="col-md-4 control-label" for="number">Time</label><div class="col-md-4"><select class="form-control" id="sectionH_time[]" name="sectionH_time"><option value="Full Time">Full time</option><option value="Part Time">Part time</option></select></div><label class="col-md-4 control-label" for="number">From</label><div class="col-md-4"><input id="sectionH_from" name="sectionH_from[]" type="date" placeholder="" class="form-control input-md" ></div><label class="col-md-4 control-label" for="number">To</label><div class="col-md-4"><input id="sectionH_to" name="sectionH_to[]" type="date" placeholder="" class="form-control input-md"></div><a href="#" class="remove_field btn btn-primary" style="margin-top:15px;margin-left:16px;">Remove</a></div>'); //add input box
            }
        });

        $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>

<script src="{{static_asset('theme/build/js/intlTelInput.js')}}"></script>
                <script>
                    var input = document.querySelector("#phone");
                    window.intlTelInput(input, {
                        // allowDropdown: false,
                        // autoHideDialCode: false,
                        // autoPlaceholder: "off",
                        // dropdownContainer: document.body,
                        // excludeCountries: ["us"],
                        // formatOnDisplay: false,
                        // geoIpLookup: function(callback) {
                        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                        //     var countryCode = (resp && resp.country) ? resp.country : "";
                        //     callback(countryCode);
                        //   });
                        // },
                        hiddenInput: "full_sesctionB_land_phone",
                        initialCountry: "lk",
                        // localizedCountries: { 'de': 'Deutschland' },
                        // nationalMode: false,
                        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                        // placeholderNumberType: "MOBILE",
                        // preferredCountries: ['cn', 'jp'],
                        // separateDialCode: true,
                        utilsScript: "/public/theme/build/js/utils.js",
                    });

                    var input = document.querySelector("#phone1");
                    window.intlTelInput(input, {
                        // allowDropdown: false,
                        // autoHideDialCode: false,
                        // autoPlaceholder: "off",
                        // dropdownContainer: document.body,
                        // excludeCountries: ["us"],
                        // formatOnDisplay: false,
                        // geoIpLookup: function(callback) {
                        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                        //     var countryCode = (resp && resp.country) ? resp.country : "";
                        //     callback(countryCode);
                        //   });
                        // },
                        hiddenInput: "full_sesctionB_mobile_phone",
                        initialCountry: "lk",
                        // localizedCountries: { 'de': 'Deutschland' },
                        // nationalMode: false,
                        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                        // placeholderNumberType: "MOBILE",
                        // preferredCountries: ['cn', 'jp'],
                        // separateDialCode: true,
                        utilsScript: "/public/theme/build/js/utils.js",
                    });

                    var input = document.querySelector("#phone2");
                    window.intlTelInput(input, {
                        // allowDropdown: false,
                        // autoHideDialCode: false,
                        // autoPlaceholder: "off",
                        // dropdownContainer: document.body,
                        // excludeCountries: ["us"],
                        // formatOnDisplay: false,
                        // geoIpLookup: function(callback) {
                        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                        //     var countryCode = (resp && resp.country) ? resp.country : "";
                        //     callback(countryCode);
                        //   });
                        // },
                        hiddenInput: "full_sesctionD_land_phone",
                        initialCountry: "lk",
                        // localizedCountries: { 'de': 'Deutschland' },
                        // nationalMode: false,
                        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                        // placeholderNumberType: "MOBILE",
                        // preferredCountries: ['cn', 'jp'],
                        // separateDialCode: true,
                        utilsScript: "/public/theme/build/js/utils.js",
                    });

                    var input = document.querySelector("#phone3");
                    window.intlTelInput(input, {
                        // allowDropdown: false,
                        // autoHideDialCode: false,
                        // autoPlaceholder: "off",
                        // dropdownContainer: document.body,
                        // excludeCountries: ["us"],
                        // formatOnDisplay: false,
                        // geoIpLookup: function(callback) {
                        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                        //     var countryCode = (resp && resp.country) ? resp.country : "";
                        //     callback(countryCode);
                        //   });
                        // },
                        hiddenInput: "full_sesctionD_mobile_phone",
                        initialCountry: "lk",
                        // localizedCountries: { 'de': 'Deutschland' },
                        // nationalMode: false,
                        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                        // placeholderNumberType: "MOBILE",
                        // preferredCountries: ['cn', 'jp'],
                        // separateDialCode: true,
                        utilsScript: "/public/theme/build/js/utils.js",
                    });
                </script>

                

                <script>
                    $(document).ready(function() {

                        $(document).on('click', '.add', function() {
                            var html = '';
                            html += '<tr>';
                            html += '<td><input type="text" name="year[]" class="form-control number_only item_quantity" required /></td>';
                            html += '<td><input type="text" name="examination_body[]" class="form-control number_only item_quantity" required /></td>';
                            html += '<td><input type="text" name="school[]" class="form-control number_only item_quantity" required /></td>';
                            html += '<td><input type="text" name="subject[]" class="form-control number_only item_quantity" required /></td>';
                            html += '<td><input type="text" name="result[]" class="form-control number_only item_quantity" required /></td>';

                            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span>Remove</span></button></td></tr>';
                            $('#item_table').append(html);
                        });

                        $(document).on('click', '.remove', function() {
                            $(this).closest('tr').remove();
                        });

                    });
                </script> 

<script>
                    $(document).ready(function() {

                        $(document).on('click', '.add1', function() {
                            var html = '';
                            html += '<tr>';
                            html += '<td><input type="text" name="a_year[]" class="form-control number_only item_quantity" required /></td>';
                            html += '<td><input type="text" name="a_qulification[]" class="form-control number_only item_quantity" required /></td>';
                            html += '<td><input type="text" name="a_insitute[]" class="form-control number_only item_quantity" required /></td>';
                            html += '<td><input type="text" name="a_awarding_body[]" class="form-control number_only item_quantity" required /></td>';
                            html += '<td><input type="text" name="a_country[]" class="form-control number_only item_quantity" required /></td>';

                            html += '<td><button type="button" name="remove1" class="btn btn-danger btn-sm remove"><span>Remove</span></button></td></tr>';
                            $('#item_table1').append(html);
                        });

                        $(document).on('click', '.remove1', function() {
                            $(this).closest('tr').remove();
                        });

                    });
                </script>


                <script>
                   function plus() {

                       
                            // var html = '';
                            // html += '<tr>';
                            // html += '<td><input type="text" name="year[]" class="form-control number_only item_quantity" required /></td>';
                            // html += '<td><input type="text" name="examination_body[]" class="form-control number_only item_quantity" required /></td>';
                            // html += '<td><input type="text" name="school[]" class="form-control number_only item_quantity" required /></td>';
                            // html += '<td><input type="text" name="subject[]" class="form-control number_only item_quantity" required /></td>';
                            // html += '<td><input type="text" name="result[]" class="form-control number_only item_quantity" required /></td>';

                            // html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span>Remove</span></button></td></tr>';
                            // $('#item_table').append(html);   

                            // alert('feuh');
                    

                    

                    };
                    function validateImage(input,error) {
                        $('#'+error).html('')
                        if (input.files && input.files[0]) {
                            for (let i = 0; i < input.files.length; i++) {
                                console.log()
                                if(input.files[i].size  > 2000000){
                                    $('#'+error).html('Please upload files below 2MB')
                                }
                            }
                        } 
                    }

                    $('#contact').submit(function(e){
                        // 
                        $( ".file-err" ).each(function() {
                            
                            if($( this ).html() != null && $( this ).html() != ""){
                                e.preventDefault();
                            }
                        });
                    })
                </script> 
@endsection
@endsection
