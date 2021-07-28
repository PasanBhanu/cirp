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
			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
						<ul>
							<li data-transition="fade">
								<img src="{{static_asset('theme/video/24.png')}}"  
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
									data-lineheight="['55','55','55','95']"  style=" text-shadow: 3px 3px 3px  #000000;">CIRP News & Events</div>
				
								
								
							</li>
						</ul>
					</div>
				</div>
<!-------------------------------------------------------->
<!--------------------------------Bread cumbs------------------------------->
			<div class="container" style="padding-top: 20px">
				<ul style="padding: 0px 15px">
					<p>
						<a href="{{url('/')}}" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
						<a href="#" style="text-decoration: none;">&nbsp;&nbsp;CIRP News & Events</a>
					</p>
					
				</ul>
			</div>
<!------------------------------------------------------------->
<!---------------------------------------------------------------->
geo fix 79.8472148624909 7.2394796677631
<div class="container py-4">

					<div class="row"  style="padding-top: 10px">
						<div class="col">
							<div class="blog-posts">

								<div class="row">

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5" style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/cvr-news.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt=""/>
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>May 2020 Intake is now open</a></h2></div>
												<div style="height: 160px"><p>May 2020 Intake is now. Call us on +94 112 50 70 71 / 72 or whatsapp us on +94 703 41 8001 for more information.</p></div>

												<div class="post-meta">
													<p><span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span></p>
												</div>

											</div>
										</article>
									</div>

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5" style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/cvr-news2.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>7th Annual TISSL International Conference</a></h2></div>
												<div style="height: 160px"><p>CIIHE was the platinum sponsor / conference partner for the 7th Annual TISSL International Conference on Education which was held from 22nd to 24th November at Mariott Resort & Spa, Weligama, Sri Lanka.</p></div>

												<div class="post-meta">
												
													<span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5"  style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/events/Mental Health 2019/cvr.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt=""/>
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>Mental Health Day 2019</a></h2></div>
												<div style="height: 160px"><p>World Mental Health Day is observed on 10 October every year, with the overall objective of raising awareness of mental health issues around the world and mobilizing efforts in support of mental health.</p></div>

												<div class="post-meta">
													<span class="d-block mt-2"><a href="#mental-health-day.php" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5"  style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/events/2019 Iftar/1.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>Iftar 2019</a></h2></div>
												<div style="height: 160px"><p>The iftar ceremony of CIIHE is observed every year, during the month of Ramadhan</p></div>

												<div class="post-meta">
												
													<span class="d-block mt-2"><a href="#Iftar-2019.php" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5"  style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/events/Graduation 2017-2018/1.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>Graduation 2017 / 2018</a></h2></div>
												<div style="height: 160px"><p>The graduation ceremony of CIIHE School of Psychology was held on 6th June 2018 at Mount Lavinia Hotel.</p></div>

												<div class="post-meta">
													
													<span class="d-block mt-2"><a href="#Graduation2018.php" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5"  style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/events/Talent Show/1.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>Talent Show</a></h2></div>
												<div style="height: 160px"><p>CIIHE students are known to be excellent at their academic activities. High academic standards of the institute are distantly different from all the other private campuses in the country and it shapes our students to become leaders in their respective fields.</p></div>

												<div class="post-meta">
													
													<span class="d-block mt-2"><a href="#Talent-show.php" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5"  style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/events/winter wonderland 2017/1.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>Winter Wonderland 2017</a></h2></div>
												<div style="height: 160px"><p>Themed “Winter Wonderland” the annual Christmas Party of CIRP School of Psychology was held on 16th December 2017 at College premises.</p></div>

												<div class="post-meta">
													
													<span class="d-block mt-2"><a href="#winter-wonderland-2017.php" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5"  style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/cvr-news3.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>CIIHE Graduation 2019</a></h2></div>
												<div style="height: 160px"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum </p></div>

												<div class="post-meta">
													
													<span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
												</div>

											</div>
										</article>
									</div>

									

								</div>
							</div>
						</div>

					</div>

				
			
			</div>
@endsection