@extends('site::layouts.master')
@section('style')
 <style>
	@media only screen and (max-width: 600px) 
	{
	.slider-container{
		padding-top: 80px!important;
		padding-bottom: 0px;
			}
	}
</style>
@endsection
@section('content')
		<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">

			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
						<ul>
							<li data-transition="fade">
								<img src="{{static_asset('theme/video/22.png')}}"  
								alt=""
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat"
								class="rev-slidebg">
				
								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":100,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']" style=" text-shadow: 3px 3px 3px  #000000;">CONTACT US</div>
				
								
								
							</li>
						</ul>
					</div>
				</div>


				<div class="container" style="padding-top: 20px">
				<ul style="padding: 0px 15px">
					<p>
						<a href="{{url('/')}}" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
						<a href="javascript:void" style="text-decoration: none;">&nbsp;&nbsp;Contact us</a>
					</p>
					
				</ul>
			</div>



			<div class="container" style="padding: 100px 0px">

					<div class="row pt-4 mb-4">
						<div class="col-lg-7">

							<h2 class="mb-0">Send Us a Message</h2>

							<p class="lead mb-4 mt-1">Contact us or give us a call to discover how we can help.</p>

							<form id="contactForm" action="{{url('contactus/submit')}}" class="contact-form" method="POST">
								@csrf
								<?php if(Session::has('success') && Session::get('success')=='true'){?>
									<div class="alert alert-success" role="alert">
									Your Messsage sent successfully
									</div>
								<?php }?>
								<?php if(Session::has('success') && Session::get('success')=='false'){?>
									<div class="alert alert-danger" role="alert">
										Oopps something went wrong
										</div>
								<?php }?>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Your Name" value="{{old('name')}}" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="email" placeholder="Your E-mail" value="{{old('email')}}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Subject" value="{{old('subject')}}" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required>{{old('message')}}</textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<img src="{{url('verification/v.1/re-captcha')}}" alt="CAPTCHA" class="captcha-image" style="width:150px;padding-left: 15px;padding-right: 5px;"> &nbsp; <i style="font-size:19px;" class="fa fa-repeat refresh-captcha"></i>
										<input type="text" name="recaptcha" class="form-control"  placeholder="Enter 6 Digit Verification Code" required="" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
								         @error('recaptcha') &nbsp; 
								            <div style="float:left; padding:0 10px;"class="alert-danger alert-heading">Wrong captcha! Please try again! *</div> @enderror
									</div>
								</div>



								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-lg btn-primary mb-4" data-loading-text="Loading...">
									</div>
								</div>


							</form>

						</div>
						<div class="col-lg-4 col-lg-offset-1">

							<h4 class="text-color-dark mb-1 pb-3">CIIHE (Seaside) campus</h4>

							<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
							<div>
								<img src="{{static_asset('theme/img/projects/DSC_2570.jpg')}}" height="411px" width="500px">
							</div>

							<ul class="list list-icons mt-4 mb-4">
								<li><i class="icon-pin icons"></i> <strong> &nbsp; &nbsp; &nbsp; Address:</strong> 230, Galle Road, Colombo 04,

        Sri Lanka</li>
								<li><i class="icon-call-end icons"></i> <strong> &nbsp; &nbsp; &nbsp; Phone:</strong> +94 112 50 70 71 / 72</li>
								<li><i class="icon-envelope icons"></i> <strong> &nbsp; &nbsp; &nbsp; Email:</strong> <a href="mailto:info@researchandpsychology.com"> info@researchandpsychology.com</a></li>
							</ul>

							<h4 class="text-color-dark mb-1 pb-3" style="padding-top: 50px">Landside campus</h4>

							<div>
								<img src="{{static_asset('theme/img/projects/DSC_2571.jpg')}}" height="266px" width="500px">
							</div>

							<ul class="list list-icons mt-4 mb-4">
								<li><i class="icon-pin icons"></i> <strong> &nbsp; &nbsp; &nbsp; Address:</strong>  273, Galle Road, Colombo 04,

        Sri Lanka</li>
								<li><i class="icon-call-end icons"></i> <strong> &nbsp; &nbsp; &nbsp; Phone:</strong> +94 112 50 70 71 / 72</li>
								<li><i class="icon-envelope icons"></i> <strong> &nbsp; &nbsp; &nbsp; Email:</strong> <a href="mailto:info@researchandpsychology.com"> info@researchandpsychology.com</a></li>
							</ul>

						</div>
					</div>

				</div>
			<!--</div>-->
			


					<div class="row">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.034765269476!2d79.85540581415115!3d6.886439320749608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bc453647fa7%3A0x8c20bf99d5bd67c3!2sCIIHE%20-%20Colombo%20International%20Institute%20of%20Higher%20Education!5e0!3m2!1sen!2slk!4v1576262666339!5m2!1sen!2slk" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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