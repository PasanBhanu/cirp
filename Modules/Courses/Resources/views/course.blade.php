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
    .display-on-mobile {
        display: none;
    }
    
    .display-on-desk {
        font-size: 30px;
    }
    
    @media only screen and (max-width: 600px) {
        .display-on-mobile {
            display: block;
            padding: 20px;
            font-size: 20px;
        }
        .display-on-desk {
            display: none;
        }
    }
</style>
<link rel="stylesheet" href="{{static_asset('theme/css/inner-pages.css')}}">

@endsection
@section('content')

			<div role="main" class="main">
                <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
                    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
                        <ul>
                            <li data-transition="fade">
                                <img src="{{static_asset('theme/video/c/Diploma of Higher Education in Psychology.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                                <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2" data-frames='[{"delay":100,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']" style=" text-shadow: 3px 3px 3px  #000000;"><span class="display-on-desk">{{$course->name}}</span>

                                    <span class="display-on-mobile" style="text-align: center;">{{$course->name}}</span></div>

                            </li>
                        </ul>
                    </div>
                </div>


                <!-----------------------Bread cumbs-------------------->
                    <div class="container" style="padding-top: 20px">
                        <ul style="padding: 0px 15px">
                            <p>
                                <a href="{{url('/')}}" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
                                <a href="{{url('courses')}}" style="text-decoration: none;">&nbsp;&nbsp;Courses &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>

                                
                                <a href="javascript::void" style="text-decoration: none;">&nbsp;&nbsp;{{$course->name}}</a>
                            </p>
                            </p>

                        </ul>
                    </div>

                    <div style="background-image: url(/public/theme/img/fingerprint.png); background-size: cover; background-position: center;">
                        <!---------------------------------------------------------------------------------------------------->

                        <div class="inner-pages-container">
                            <div class="inner-pages-first">
                                <div class="inner-first-img">
                                    <ul class="nav nav-list flex-column mb-4 show-bg-active">
                                        <a href="#"><img src="{{static_asset($course->image)}}" height="250px" width="250px" /></a>
                                    </ul>
                                </div>
                                <div class="inner-first-content">
                                    <p style="text-align: justify;">
                                    	{!!$course->description!!}
                                    </p>
                                </div>
                            </div>


                            <div class="inner-pages-second">

                                <div class="inner-second-list">
                                    <ul class="nav nav-list flex-column show-bg-active">
                                        <a href="{{url('inquire')}}"><img src="{{static_asset('theme/img/btn-crs1.png')}}" width="250px" /></a>
                                    </ul>
                                    <ul class="nav nav-list flex-column show-bg-active">
                                        <a href="{{url('application')}}"><img src="{{static_asset('theme/img/btn-crs.png')}}" width="250px" /></a>
                                    </ul>
                                    <ul class="nav nav-list flex-column show-bg-active">
                                        <a href="{{url('study-abroad')}}"><img src="{{static_asset('theme/img/btn-crs3.png')}}" width="250px" /></a>
                                    </ul>
                                    <ul class="nav nav-list flex-column show-bg-active">
                                        <a href="{{static_asset('theme/img/pdf/CIRP - Undergraduate Prospectus 2020.pdf')}}" target="_bln_{{$course->name}}"><img src="{{static_asset('theme/img/btn-crs2.png')}}" width="250px" /></a>
                                    </ul>

                                </div>
                                <div class="inner-second-two-wrap">

                                    <div class="inner-second-schedule">
                                        <ul class="list list-icons list-primary">
                                        	@if(!empty($course->duration))
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Duration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span style="font-weight: 300;"> {{$course->duration}}</span></span>
                                            </li>
                                            @endif
                                            @if(!empty($course->semesters))
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Semesters&nbsp;&nbsp;&nbsp;&nbsp; : 
                                                <span style="font-weight: 300;">
													{{$course->semesters}}</span></span>
                                            </li>
                                            @endif
                                            @if(!empty($course->rqfcredits))
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                RQF Credits &nbsp;&nbsp;: 
                                                <span style="font-weight: 300;">
													{{$course->rqfcredits}}
												</span>
											</span>
                                            </li>
                                            @endif
                                            @if(!empty($course->delivery))
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Schedule&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span style="font-weight: 300;">{{$course->delivery}} </span></span>
                                            </li>
                                            @endif
                                            <!-- <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Delivery &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span style="font-weight: 300;">On site</span></span>
                                            </li> -->
                                            @if(!empty($course->intakes))
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Intakes: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                                                <span style="font-weight: 300;">
													February & September
												</span>
											</span>
                                            </li>
                                            @endif
                                        </ul>

                                    </div>
                                    @if($course->c_image == 'yes')
                                    <div class="inner-second-logos">
                                        <div>
                                            <img src="{{static_asset('theme/img/crs-logo3.png')}}" width="100%" style="margin-top: 10%">
                                        </div>
                                    </div>
                                    @endif
                                </div>

                            </div>

                            <div class="acc-container">
                                <div class="acc-wrapper-emp"></div>
                                <div class="acc-wrapper">

                                    <div class="accordion" id="accordion">
                                    	@if(!empty($modules['0']))
                                        <div class="card card-default">
                                            <div class="card-header">
                                            	<h4 class="card-title m-0">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
														Modules <i class="icon-plus icons" style="float: right;"></i>
													</a>
												</h4>
                                            </div>
                                            <div id="collapse1One" class="collapse">
                                                <div class="card-body">
                                                    <table width="75%">
                                                        <tr>
                                                            <th>Modules</th>
                                                            <th style="text-align: center;">Credits</th>
                                                        </tr>
                                                        @foreach($modules as $module)
                                                        <tr>
                                                            <td>{{$module->name}}</td>
                                                            <td align="center">{{$module->credits}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @if(!empty($electives['0']))
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <h4 class="card-title m-0">
											     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
												    Electives (Select One) <i class="icon-plus icons" style="float: right;"></i>
											     </a>
										        </h4>
                                            </div>
                                            <div id="collapse1Two" class="collapse">
                                                <div class="card-body">
                                                    <table width="75%">
                                                        <tr>
                                                            <th>Modules</th>
                                                            <th style="text-align: center;">Credits</th>
                                                        </tr>
                                                        @foreach($electives as $elective)
                                                        <tr>
                                                            <td>{{$elective->name}}</td>
                                                            <td align="center">{{$elective->credits}}</td>
                                                        </tr>
                                                        @endforeach

                                                        <tr>
                                                            <td><small>*Select one of the electives given above</small>
                                                            </td>
                                                            
                                                        </tr>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @if(!empty($course->entry_requirements))
                                        <div class="card card-default">
											<div class="card-header">
												<h4 class="card-title m-0">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse12">
														Entry Requirements
													<i class="icon-plus icons" style="float: right;"></i>
													</a>
												</h4>
											</div>
											<div id="collapse12" class="collapse">
												<div class="card-body">
													{!!$course->entry_requirements!!}
													
												</div>
											</div>
		                                </div>
		                                @endif

		                                @if(!empty($course->learning_support))
		                                <div class="card card-default">
											<div class="card-header">
												<h4 class="card-title m-0">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse13">
		                                            Learning Support
													<i class="icon-plus icons" style="float: right;"></i>
													</a>
												</h4>
											</div>
											<div id="collapse13" class="collapse">
												<div class="card-body">
													{!!$course->learning_support!!}
												</div>
											</div>
		                                </div>
		                                @endif

		                                @if(!empty($course->further_study))
		                                <div class="card card-default">
											<div class="card-header">
												<h4 class="card-title m-0">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse14">
		                                            Further Study & Transfer  Options
													<i class="icon-plus icons" style="float: right;"></i>
													</a>
												</h4>
											</div>
											<div id="collapse14" class="collapse">
												<div class="card-body">
													{!!$course->further_study!!}
												</div>
											</div>
		                                </div>
		                                @endif

		                                @if(!empty($course->employability))
		                                <div class="card card-default">
											<div class="card-header">
												<h4 class="card-title m-0">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse15">
		                                            Employability
													<i class="icon-plus icons" style="float: right;"></i>
													</a>
												</h4>
											</div>
											<div id="collapse15" class="collapse">
												<div class="card-body">
													{!!$course->employability!!}
												</div>
											</div>
		                                </div>
		                                @endif

		                                @if(!empty($course->fees_funding))
		                                <div class="card card-default">
											<div class="card-header">
												<h4 class="card-title m-0">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse16">
		                                            Fees & Funding
													<i class="icon-plus icons" style="float: right;"></i>
													</a>
												</h4>
											</div>
											<div id="collapse16" class="collapse">
												<div class="card-body">
		                                        	{!!$course->fees_funding!!}
												</div>
											</div>
		                                </div>
		                                @endif
                                    </div>
                        </div>

                        </div>

                    </div>

            </div>

                    </div>
@endsection