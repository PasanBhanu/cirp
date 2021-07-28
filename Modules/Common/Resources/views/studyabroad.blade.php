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

		<div class="body">

			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
						<ul>
							<li data-transition="fade">
								<img src="{{static_asset('theme/video/International Transfer Programs.png')}}"  
								alt=""
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat"
								class="rev-slidebg">
				
<div class="text-wrap-slider">

<h1>International Transfer Programs</h1>
<h3 class="sub-head-slider">
See the World! Become a Global Citizen!
</h3>

<p class="slider-des">studying your Final year or two in an international university is</br>
made affordable now through transfer programs.</p>
</div>
							</li>
						</ul>
					</div>
				</div>



<!--------------------------Bread cumbs---------------------------->
			<div class="container" style="padding-top: 20px">
				<ul style="padding: 0px 15px">
					<p>
						<a href="{{url('/')}}" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
						<a href="#" style="text-decoration: none;">&nbsp;&nbsp;Study Abroad</a>
					</p>
					
				</ul>
			</div>
<!------------------------------------------------------>
		@foreach($countries as $country)
		@php $uni=DB::table('study_abroad')->where('country_id',$country->id)->get(); @endphp
		@if(!empty(count($uni)))
		
		<div class="container" style="padding-top: 10px">
			<div class="col-lg-12">
				<div class="row pt-2 mb-4"> 
				</div>
				<h2 class="mb-2">{{$country->name}}</h2>
				@foreach($uni as $uni)
				<section class="section bg-color-grey section-height-3 border-0 mt-5 mb-0">
					<div class="container">

						<div class="row">
							<div class="col">


								<div class="row align-items-center">
									<div class="col-md-8 px-5 px-md-5">
										<p style="text-align: center;"> <img class="img-fluid scale-2 my-2" src="{{static_asset($uni->image1)}}" width="550px" /></p>
									</div>
									<!--<div class="col-md-6 pr-md-5 mb-5 mb-md-0">
										<p style="text-align: justify;">Students who have completed the Diploma of Higher Education in Psychology are eligible to apply for the ﬁnal year of the BSc (Hons) Psychology Programmes at the University of Hertfordshire.</br></br>

										Hertfordshire is ranked among the top 50 best UK universities chosen by major employer’s for producing ready-to-work graduates in THE’s 2015 ranking. The university has also received recognition for its research and is among only a few UK HEIs to have been awarded a ‘European Commission HR Excellence in Research’ badge. UH is located in Hatﬁeld, you can reach London in 25 minutes by getting the train from Hatﬁeld Station to Kings Cross Station. </p>
									</div>-->
									<div class="col-md-4 px-5 px-md-5">
										<p><a href="{{$uni->url}}" target="_blank"><img class="img-fluid scale-2 my-2" src="{{static_asset($uni->image2)}}" /></a></p>
										<p style="text-align: center;"><a href="{{$uni->url}}" target="_blank"><button class="btn-hover1">Visit University</button></a></p> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>	
				@endforeach
			</div>
		</div>
		
		@endif
		@endforeach


					</div>

				</div>
			</div>

@endsection