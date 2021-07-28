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
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], }">
						<ul>
							<li data-transition="fade">
								<img src="{{static_asset('theme/video/37.png')}}"  
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
									data-lineheight="['55','55','55','95']"  style=" text-shadow: 3px 3px 3px  #000000;">CIRP in Media</div>
				
								
								
							</li>
						</ul>
					</div>
				</div>
<!---------------------------------------------------------------------------------------------------->
<!------------------------------------------------Bread cumbs---------------------------------------------------->
			<div class="container" style="padding-top: 20px">
				<ul style="padding: 0px 15px">
					<p>
						<a href="{{url('/')}}" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
						<a href="#" style="text-decoration: none;">&nbsp;&nbsp;CIRP in Media</a>
					</p>
					
				</ul>
			</div>
<!-------------------------------------------->

<!-------------------------------------->


<div class="container py-4">

					<div class="row"  style="padding-top: 10px">
						<div class="col">
							<div class="blog-posts">

								<div class="row">
								    
								    
								    
								    <div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5" style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/media/05.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt=""/>
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>Dr David Winter - Article on Sunday Times</a></h2></div>
												<div style="height: 160px"><p>Interview with Dr. David Winter in Sunday Times on 1st March 2020</p></div>

												<div class="post-meta">
													<p><span class="d-block mt-2"><a href="{{static_asset('theme/img/media/Sunday Times - Page 05.jpg')}}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span></p>
												</div>

											</div>
										</article>
									</div>

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5" style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/media/9.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>Dr Thuliatha Perera - Article on Sunday Times</a></h2></div>
												<div style="height: 160px"><p>Interview with Dr. Thulitha Perera in Sunday Times on 1st March 2020</p></div>

												<div class="post-meta">
												
													<span class="d-block mt-2"><a href="{{static_asset('theme/img/media/Sunday Times - Page 09.jpg')}}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
												</div>

											</div>
										</article>
									</div>

									<div class="col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5"  style="background-color: #c1c1c11f;padding: 5px 5px;">
											<div class="post-image">
												<a>
													<img src="{{static_asset('theme/img/media/11.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt=""/>
												</a>
											</div>

											<div class="post-content">

												<div style="height: 80px"><h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a>CIRP Graduation Ceremony 2018/19 on Sunday Times</a></h2></div>
												<div style="height: 160px"><p>Article of CIRP Graduation Ceremony 2018/19 in Sunday Times on 2nd February 2020</p></div>

												<div class="post-meta">
													<span class="d-block mt-2"><a href="{{static_asset('theme/img/media/Sunday Times - Page 11.jpg')}}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
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