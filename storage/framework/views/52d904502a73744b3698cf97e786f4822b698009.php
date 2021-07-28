<?php $__env->startSection('style'); ?>
 <style>
	@media  only screen and (max-width: 600px) 
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
@media  only screen and (max-width: 600px) {
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
						<ul>
							<li data-transition="fade">
								<img src="<?php echo e(static_asset('theme/video/Undergraduate Programs.png')); ?>"  
								alt=""
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat"
								class="rev-slidebg">
				
<div class="text-wrap-slider">

<h1><?php echo e($data['h1']); ?></h1>
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
                        <?php echo $__env->make('site::partials.search-home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
			<h2 class="mb-2" style="text-align: center; padding-top: 50px">COURSES</h2>
<!---------------------------------------->
			<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="row align-items-center">
									<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
										<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="<?php echo e(url('course/'.$course->slug)); ?>"><?php echo e($course->name); ?></a></h2>
										<p style="text-align: justify;">
											<?php echo e($course->short_des); ?>

										</p>
										<div class="trans-wrapper">
											<div class="trans-item">
												<span style="font-weight: bold;">Progression :</span> 
												<span> <?php echo e($course->progression); ?> </span>
											</div>
											<div class="trans-item">
												<span style="font-weight: bold;">Transfer Options :</span> 
												<span> <?php echo e($course->transferoptions); ?></span>
											</div>
											<div class="trans-item">
												<span style="font-weight: bold;">Duration :</span> 
												<span> <?php echo e($course->duration); ?></span>
											</div>
											<div class="trans-item">	
												<span style="font-weight: bold;">Delivery :</span> 
												<span> <?php echo e($course->delivery); ?> </span>
											</div>
										</div>
									</div>
									<div class="col-md-4 px-5 px-md-5">
										<img class="img-fluid scale-2 my-2" src="<?php echo e(static_asset($course->image)); ?>" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<?php if(empty(count($courses))): ?>
				<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
					<div class="container">
						<div class="row">
							<div class="col">
							<h2>We're Sorry! &nbsp; We can't find any program under your search! &nbsp; Please try again!</h2>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/cirp/htdocs/Modules/Courses/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>