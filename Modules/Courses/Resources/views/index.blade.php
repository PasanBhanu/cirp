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

.img-fluid {
    max-width: 68%;
    height: auto;}
</style>


<style>
	
.display-on-mobile{

	display:none;
}

.display-on-desk{

	font-size:30px;
}
@media only screen and (max-width: 600px) {
	.display-on-mobile{

display:block;
padding:20px;
font-size:20px;
}

.display-on-desk{

	display:none;
}
}
</style>
@endsection
@section('content')

<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
						<ul>
							<li data-transition="fade">
								<img src="{{static_asset('theme/video/Undergraduate Programs.png')}}"  
								alt=""
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat"
								class="rev-slidebg">
				
<div class="text-wrap-slider">

<h1>{{$data['h1']}}</h1>
<h3 class="sub-head-slider">
Match Your Passion to What You Study
</h3>

<p class="slider-des">CIRP offers the widest range of options in Psychology</br>
And related fields. Choose Yours Today!</p>
</div>
							</li>
						</ul>
					</div>
				</div>


<!----------------------------------------------->

<!------------------------------------------------>

			<div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center" style="padding-left: 5px; padding-right: 5px">
                        @include('site::partials.search-home')
                    </div>
                </div>
            </div>
			<h2 class="mb-2" style="text-align: center; padding-top: 50px">COURSES</h2>
<!---------------------------------------->
			@foreach($courses as $course)
				<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="row align-items-center">
									<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
										<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="{{url('course/'.$course->slug)}}">{{$course->name}}</a></h2>
										<p style="text-align: justify;">
											{{$course->short_des}}
										</p>
										<div class="trans-wrapper">
											<div class="trans-item">
												<span style="font-weight: bold;">Progression :</span> 
												<span> {{$course->progression}} </span>
											</div>
											<div class="trans-item">
												<span style="font-weight: bold;">Transfer Options :</span> 
												<span> {{$course->transferoptions}}</span>
											</div>
											<div class="trans-item">
												<span style="font-weight: bold;">Duration :</span> 
												<span> {{$course->duration}}</span>
											</div>
											<div class="trans-item">	
												<span style="font-weight: bold;">Delivery :</span> 
												<span> {{$course->delivery}} </span>
											</div>
										</div>
									</div>
									<div class="col-md-4 px-5 px-md-5">
										<img class="img-fluid scale-2 my-2" src="{{static_asset($course->image)}}" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>	
			@endforeach

			@if(empty(count($courses)))
				<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
							<h2>We're Sorry! &nbsp; We can't find any program under your search! &nbsp; Please try again!</h2>
							</div>
						</div>
					</div>
				</section>
			@endif
@endsection