<?php $__env->startSection('style'); ?>
 <style>
	@media  only screen and (max-width: 600px) 
	{
	.slider-container{
		padding-top: 80px!important;
		padding-bottom: 0px;
			}
	}
</style>

<style>
.student-content-wrapper{
	max-width:1200px;
		margin:auto:
}
	.student-item-wrapper{
		display:grid;

		grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));

	}

	.student-item{
		text-align:center;
		text-decoration:bold;
		font-size:20px;
		color:#111;
		margin-bottom:20px;
		margin-left:5px;
		margin-right:5px;
		background-color:#8a8a8a;
		padding-top:10px;
		padding-bottom:10px;
		padding-left:5px;
		padding-right:5px;
		border-radius:10px;
	}

	.student-item:hover{
		text-align:center;
		text-decoration:bold;
		font-size:20px;
		color:#111;
		margin-bottom:20px;
		margin-left:5px;
		margin-right:5px;
		background-color:#ff9100;
		padding-top:10px;
		padding-bottom:10px;
		padding-left:5px;
		padding-right:5px;
	}
	.student-item a{
		text-decoration:none;
		color:#fff;
		font-family: 'Roboto Condensed';
	}

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">

			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], }">
						<ul>
							<li data-transition="fade">
								<img src="<?php echo e(static_asset('theme/video/Student Life.png')); ?>"  
								alt=""
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat"
								class="rev-slidebg">
								<div class="text-wrap-slider">
									<h1>Student Life</h1>
									<h3 class="sub-head-slider" style="line-height:30px;">
										Embrace Diversity! </br>Respect Differences! Enjoy Life!
									</h3>
								</div>							
							</li>
						</ul>
					</div>
				</div>

			<div class="container" style="padding-top: 20px">
				<ul style="padding: 0px 15px">
					<p>
						<a href="<?php echo e(url('/')); ?>" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
						<a href="javascript:void" style="text-decoration: none;">&nbsp;&nbsp;Student life</a>
					</p>
					
				</ul>
			</div>

			<div style="background-image: url(/public/theme/img/fingerprint.png); background-size: cover; background-position: center;">	

				<div class="container" style="padding-top: 50px">


					<div class="row pt-2 mb-4">
						<div class="col-lg-3">
							<aside class="sidebar">

								<ul class="nav nav-list flex-column mb-4 show-bg-active" >
								<a href="#"><img src="<?php echo e(static_asset('theme/img/life.png')); ?>" height="250px" width="250px"/></a>
								</ul>
							</aside>

					</div>
						<div class="col-lg-9">
							<h2 style="font-weight: bolder;">Student Life At CIIHE</h2></br>
							<p style="text-align: justify;">University Life should be a fun and exciting one. Whatever you are hoping your university experience CIRP provides the perfect environment to make your uni life a memorable one.</br></br>

							From making friends, following your passions in arts, music, dance or sports, joining clubs and societies, exploring the world, festival celebrations or to just grab a coffee and hang out with friends, we have created opportunities, social spaces and facilities to make your life on campus not less exciting that anywhere else.  </br></br>

							It will be your hang-out whether you have classes or not!</p>

						<div class="row" style="padding: 0px 0px">
						
						<div class="col">
							
						</div>
					</div>

						</div>
					</div>



<div class="student-content-wrapper">
	<div class="student-item-wrapper">
		<div style="color:#111" class="student-item"><a href="#">Diversity</a></div>
		<div class="student-item"><a href="#">Music, Dance & Arts</a></div>
		<div class="student-item"><a href="#">Clubs & Societies</a></div>
		<div class="student-item"><a href="events.php">Campus Events</a></div>
		
	</div>
	<div class="student-item-wrapper">
		<div class="student-item"><a href="#">Internships</a></div>
		<div class="student-item"><a href="#">Student Council</a></div>
		<div class="student-item"><a href="#">Student Spaces</a></div>
		<div class="student-item"><a href="#">Sports</a></div>
		
	</div>
</div>
				</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/cirp/htdocs/Modules/Site/Providers/../Resources/views/studentslife.blade.php ENDPATH**/ ?>