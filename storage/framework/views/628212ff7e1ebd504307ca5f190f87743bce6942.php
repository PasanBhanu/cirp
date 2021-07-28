<?php $__env->startSection('style'); ?>
<style>
    @media  only screen and (max-width: 600px) {
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
    
    @media  only screen and (max-width: 600px) {
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
<link rel="stylesheet" href="<?php echo e(static_asset('theme/css/inner-pages.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

			<div role="main" class="main">
                <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
                    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
                        <ul>
                            <li data-transition="fade">
                                <img src="<?php echo e(static_asset('theme/video/c/Diploma of Higher Education in Psychology.jpg')); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                                <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2" data-frames='[{"delay":100,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']" style=" text-shadow: 3px 3px 3px  #000000;"><span class="display-on-desk"><?php echo e($course->name); ?></span>

                                    <span class="display-on-mobile" style="text-align: center;"><?php echo e($course->name); ?></span></div>

                            </li>
                        </ul>
                    </div>
                </div>


                <!-----------------------Bread cumbs-------------------->
                    <div class="container" style="padding-top: 20px">
                        <ul style="padding: 0px 15px">
                            <p>
                                <a href="<?php echo e(url('/')); ?>" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
                                <a href="<?php echo e(url('courses')); ?>" style="text-decoration: none;">&nbsp;&nbsp;Courses &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>

                                
                                <a href="javascript::void" style="text-decoration: none;">&nbsp;&nbsp;<?php echo e($course->name); ?></a>
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
                                        <a href="#"><img src="<?php echo e(static_asset($course->image)); ?>" height="250px" width="250px" /></a>
                                    </ul>
                                </div>
                                <div class="inner-first-content">
                                    <p style="text-align: justify;">
                                    	<?php echo $course->description; ?>

                                    </p>
                                </div>
                            </div>


                            <div class="inner-pages-second">

                                <div class="inner-second-list">
                                    <ul class="nav nav-list flex-column show-bg-active">
                                        <a href="<?php echo e(url('inquire')); ?>"><img src="<?php echo e(static_asset('theme/img/btn-crs1.png')); ?>" width="250px" /></a>
                                    </ul>
                                    <ul class="nav nav-list flex-column show-bg-active">
                                        <a href="<?php echo e(url('application')); ?>"><img src="<?php echo e(static_asset('theme/img/btn-crs.png')); ?>" width="250px" /></a>
                                    </ul>
                                    <ul class="nav nav-list flex-column show-bg-active">
                                        <a href="<?php echo e(url('study-abroad')); ?>"><img src="<?php echo e(static_asset('theme/img/btn-crs3.png')); ?>" width="250px" /></a>
                                    </ul>
                                    <ul class="nav nav-list flex-column show-bg-active">
                                        <a href="<?php echo e(static_asset('theme/img/pdf/CIRP - Undergraduate Prospectus 2020.pdf')); ?>" target="_bln_<?php echo e($course->name); ?>"><img src="<?php echo e(static_asset('theme/img/btn-crs2.png')); ?>" width="250px" /></a>
                                    </ul>

                                </div>
                                <div class="inner-second-two-wrap">

                                    <div class="inner-second-schedule">
                                        <ul class="list list-icons list-primary">
                                        	<?php if(!empty($course->duration)): ?>
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Duration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span style="font-weight: 300;"> <?php echo e($course->duration); ?></span></span>
                                            </li>
                                            <?php endif; ?>
                                            <?php if(!empty($course->semesters)): ?>
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Semesters&nbsp;&nbsp;&nbsp;&nbsp; : 
                                                <span style="font-weight: 300;">
													<?php echo e($course->semesters); ?></span></span>
                                            </li>
                                            <?php endif; ?>
                                            <?php if(!empty($course->rqfcredits)): ?>
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                RQF Credits &nbsp;&nbsp;: 
                                                <span style="font-weight: 300;">
													<?php echo e($course->rqfcredits); ?>

												</span>
											</span>
                                            </li>
                                            <?php endif; ?>
                                            <?php if(!empty($course->delivery)): ?>
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Schedule&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span style="font-weight: 300;"><?php echo e($course->delivery); ?> </span></span>
                                            </li>
                                            <?php endif; ?>
                                            <!-- <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Delivery &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span style="font-weight: 300;">On site</span></span>
                                            </li> -->
                                            <?php if(!empty($course->intakes)): ?>
                                            <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="font-weight: bold;">

                                                Intakes: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                                                <span style="font-weight: 300;">
													February & September
												</span>
											</span>
                                            </li>
                                            <?php endif; ?>
                                        </ul>

                                    </div>
                                    <?php if($course->c_image == 'yes'): ?>
                                    <div class="inner-second-logos">
                                        <div>
                                            <img src="<?php echo e(static_asset('theme/img/crs-logo3.png')); ?>" width="100%" style="margin-top: 10%">
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="acc-container">
                                <div class="acc-wrapper-emp"></div>
                                <div class="acc-wrapper">

                                    <div class="accordion" id="accordion">
                                    	<?php if(!empty($modules['0'])): ?>
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
                                                        <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($module->name); ?></td>
                                                            <td align="center"><?php echo e($module->credits); ?></td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if(!empty($electives['0'])): ?>
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
                                                        <?php $__currentLoopData = $electives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elective): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($elective->name); ?></td>
                                                            <td align="center"><?php echo e($elective->credits); ?></td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        <tr>
                                                            <td><small>*Select one of the electives given above</small>
                                                            </td>
                                                            
                                                        </tr>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if(!empty($course->entry_requirements)): ?>
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
													<?php echo $course->entry_requirements; ?>

													
												</div>
											</div>
		                                </div>
		                                <?php endif; ?>

		                                <?php if(!empty($course->learning_support)): ?>
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
													<?php echo $course->learning_support; ?>

												</div>
											</div>
		                                </div>
		                                <?php endif; ?>

		                                <?php if(!empty($course->further_study)): ?>
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
													<?php echo $course->further_study; ?>

												</div>
											</div>
		                                </div>
		                                <?php endif; ?>

		                                <?php if(!empty($course->employability)): ?>
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
													<?php echo $course->employability; ?>

												</div>
											</div>
		                                </div>
		                                <?php endif; ?>

		                                <?php if(!empty($course->fees_funding)): ?>
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
		                                        	<?php echo $course->fees_funding; ?>

												</div>
											</div>
		                                </div>
		                                <?php endif; ?>
                                    </div>
                        </div>

                        </div>

                    </div>

            </div>

                    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/cirp/htdocs/Modules/Courses/Providers/../Resources/views/course.blade.php ENDPATH**/ ?>