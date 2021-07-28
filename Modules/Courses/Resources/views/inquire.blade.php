@extends('site::layouts.master')
@section('style')
    <style>

.container1 {
  max-width: 600px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  /* padding: 10px; */
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #1f2bcd;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

</style>


     
 <style>
  @media only screen and (max-width: 600px) 
  {
  .slider-container{
    padding-top: 80px!important;
    padding-bottom: 0px;
      }
  }

  .iti { width: 100%; }
</style>

<link rel="stylesheet" href="{{static_asset('theme/build/css/intlTelInput.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
@endsection
@section('content')

<div role="main" class="main">
                    <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
                        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
                            <ul>
                                <li data-transition="fade">
                                    <img src="{{static_asset('theme/video/26.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2" data-frames='[{"delay":100,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']"  style=" text-shadow: 3px 3px 3px  #000000;">Inquire now</div>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div style="background-image: url(/public/theme/img/fingerprint.png); background-size: cover; background-position: center;">
       

                        <!---------------------------------------------->

<div class="container1">  
  <form id="contact" action="{{url('/verfication/inquire-submit')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <?php if(isset($success) && $success==true){?>
      <div class="alert alert-success" role="alert">
      Your Messsage sent successfully
      </div>
    <?php }?>
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
          {{Session::get('message')}}
        </div>
    @endif
    <?php if(isset($success) && $success==false){?>
      <div class="alert alert-danger" role="alert">
        Oopps something went wrong
        </div>
    <?php }?>


            @if($errors->any())
                <div class="col-md-12 alert-danger text-center" style="margin: 0 0 25px 0;">
                    <h4 class="alert-heading" style="padding:15px 0;">We found some errors !</h4>
                </div>
            @endif
    <h3 style="text-align: center;">Inquire now</h3></br>
    <fieldset>
        Mr
        <input type="radio" name="title" value="Mr" required/>  / Mrs
        <input type="radio" name="title" value="Mrs" required/>   /Miss
        <input type="radio" name="title" value="Miss" required/>  /Dr
        <input type="radio" name="title" value="Dr" required/>  /Rev
        <input type="radio" name="title" value="Rev" required/> 
        @error('title') &nbsp; 
            <div style="float:left; padding:0 10px;"class="alert-danger alert-heading">Title field required *</div> @enderror

    </fieldset>
    <fieldset>
      <input placeholder="Your name" name="name" type="text" maxlength="30" tabindex="1" class="form-control" required autofocus value="{{old('name')}}">
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" type="email" class="form-control" tabindex="2" required value="{{old('email')}}">
    </fieldset>
    <fieldset>
      <input id="phone" placeholder="Your Phone Number" name="phone" class="form-control" type="text" tabindex="3" required  onkeyup="this.value=this.value.replace(/[^\d]/,'')" value="{{old('phone')}}">
    </fieldset>
    <!-- <fieldset>
        Male
        <input type="radio" name="Gender" value="Male" /> Female
        <input type="radio" name="Gender" value="Female" />
    </fieldset> -->
    <fieldset>
      <textarea placeholder="Message" name="message" class="form-control" tabindex="5" style="padding:10px" required> {!!old('message')!!}</textarea>
    </fieldset>

    <fieldset>
         <img src="{{url('verification/v.1/re-captcha')}}" alt="CAPTCHA" class="captcha-image" style="width:150px;padding-left: 15px;padding-right: 5px;"> &nbsp; <i style="font-size:19px;" class="fa fa-repeat refresh-captcha"></i>
         <input type="text" name="recaptcha" class="form-control"  placeholder="Enter 6 Digit Verification Code" required="" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
         @error('recaptcha') &nbsp; 
            <div style="float:left; padding:0 10px;"class="alert-danger alert-heading">Wrong captcha! Please try again! *</div> @enderror
    </fieldset>

    <input type="hidden" name="redirect" value="inquire">
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>

</div>


@endsection

@section('script')
    <script type="text/javascript">
        var refreshButton = document.querySelector(".refresh-captcha");
    refreshButton.onclick = function() {
      document.querySelector(".captcha-image").src = '{{url("")}}/verification/v.1/re-captcha';
    }
    </script>
    <script src="{{static_asset('theme/build/js/intlTelInput.js')}}"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            initialCountry: "lk",
            hiddenInput: "full_phone",
            utilsScript: "/public/theme/build/js/utils.js",
        });

        
    </script>
@endsection