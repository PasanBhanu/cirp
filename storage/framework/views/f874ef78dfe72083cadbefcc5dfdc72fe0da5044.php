<?php $__env->startSection('style'); ?>
<style>
    @media  only screen and (max-width: 600px) {
        .slider-container {
            padding-top: 80px !important;
            padding-bottom: 0px;
        }
    }
</style>
<!----------------slider desktop------------------->
<style>
    @media  only screen and (max-width: 600px) {
        .slider-desktop {
            display: none !important;
        }
    }

    @media  only screen and (min-width: 600px) {
        .slider-mobile {
            display: none !important;
        }
    }


    .card-back {
        background-color: #1474b3 !important;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div role="main" class="main">

    <div class="slider-desktop">
        <div class="slider-container rev_slider_wrapper desktop-slider">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': '500px', 'delay': 2000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
                <ul>
                    <?php $__currentLoopData = $slideshows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-transition="fade">
                        <img src="<?php echo e(static_asset($slide->image)); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                        <div class="col-lg-6 pt-4 pt-lg-0 mt-5 mt-lg-0 mb-5 mb-lg-0 hide-feather">
                            <div class="appear-animation with-text-container" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="padding: 210px 0px 0px 0px" class="hide-box">

                                <img src="<?php echo e(static_asset('theme/img/001.png')); ?>" alt="" width="470px" height="420px" style="margin: 0px 0px 35px 0px">
                                <div class="centered" style="padding: 60px">
                                    <p class=" main-head-t" style="color: #FFFFFF; text-align: left;"><?php echo e($slide->title); ?></p>
                                    <p class="study-test" style="font-size: 13px; text-align: left;"><?php echo e($slide->description); ?></p>
                                    <p class="checkout-text" style="text-align: left; font-size: 14px"><?php echo e($slide->checkout); ?></p>
                                    <p style="text-align: left; display: flex;">
                                        <?php if(empty($slide->button1_link)): ?>
                                        <button class="btn-majors" style="margin-right: 10px"><?php echo e($slide->button1_title); ?></button>
                                        <?php else: ?>
                                        <a href="<?php echo e($slide->button1_link); ?>">
                                            <button class="btn-majors" style="margin-right: 10px"><?php echo e($slide->button1_title); ?></button>
                                        </a>
                                        <?php endif; ?>
                                        <?php if(empty($slide->button2_link)): ?>
                                        <button class="btn-majors"><?php echo e($slide->button2_title); ?></button>
                                        <?php else: ?>
                                        <a href="<?php echo e($slide->button2_link); ?>">
                                            <button class="btn-majors"><?php echo e($slide->button2_title); ?></button>
                                        </a>
                                        <?php endif; ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>

    <!----------------slider desktop end--------------------->

    <!-------------------slider mobile----------------->
    <div class="slider-mobile">
        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
                <ul>
                    <?php $__currentLoopData = $slideshows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-transition="fade">
                        <img src="<?php echo e(static_asset($slide->image_m)); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                        <div class="col-lg-6 pt-4 pt-lg-0 mt-5 mt-lg-0 mb-5 mb-lg-0">
                            <div class="appear-animation with-text-container" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="padding: 150px 0px 0px 0px">

                                <img src="<?php echo e(static_asset('theme/img/001.png')); ?>" alt="" width="470px" height="420px" style="margin: 0px 0px 35px 90px">
                                <div class="centered">
                                    <p class=" main-head-t" style="color: #FFFFFF"><?php echo e($slide->title); ?></p>
                                    <p class="study-test" style="font-size: 15px"><?php echo e($slide->description); ?></p>
                                    <p class="checkout-text"><?php echo e($slide->checkout); ?></p>
                                    <p>
                                        <?php if(empty($slide->button1_link)): ?>
                                        <button class="btn-majors"><?php echo e($slide->button1_title); ?></button>
                                        <?php else: ?>
                                        <a href="<?php echo e($slide->button1_link); ?>">
                                            <button class="btn-majors"><?php echo e($slide->button1_title); ?></button>
                                        </a>
                                        <?php endif; ?>
                                        <?php if(empty($slide->button2_link)): ?>
                                        <button class="btn-majors"><?php echo e($slide->button2_title); ?></button>
                                        <?php else: ?>
                                        <a href="<?php echo e($slide->button2_link); ?>">
                                            <button class="btn-majors"><?php echo e($slide->button2_title); ?></button>
                                        </a>
                                        <?php endif; ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
    <div style="background-image: url(public/theme/img/fingerprint.png); background-size: cover; background-position: right;">
        <!----------------->

        <!------------------------slider mobile end----------------->

        <!-------------------------slider mobile end------------->

        <div style="background-image: url(public/theme/img/fingerprint.png); background-size: cover; background-position: right;">
            <!------------------------>

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-12 text-center" style="padding-left: 5px; padding-right: 5px">
                        <?php echo $__env->make('site::partials.search-home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12 text-center" style="padding-left: 5px; padding-right: 5px">
                        <img src="<?php echo e(static_asset($hm->join_image)); ?>" width="100%" height="100%">
                    </div>
                </div>
            </div>


            <!---------------------------->

            <div class="container">
                <div class="non-tablet-box01">
                    <div class="row">
                        <div class="col-md-3" style="padding: 5px 5px">
                            <div class="card-flip" style="height: 350px">
                                <div class='frontCard invCard001' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container">
                                        <div class="container-blue1-1">
                                            <p style="font-weight: 600;  color: #FFF; font-size: 23px; text-align: center; line-height: 33px">Explore Our Facilities</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='backCard invCardback1' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 280px">
                                            <a href="explore-our-facilities.php">
                                                <button class="btn-hover1">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="padding: 5px 5px">
                            <div class="card-flip" style="height: 350px">
                                <div class='frontCard invCard002' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container">
                                        <div class="container-blue1-2">
                                            <p style="font-weight: 600; color: #FFF; font-size: 23px; text-align: center;line-height: 33px">International Students</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='backCard invCardback2' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 280px">
                                            <a href="International-students.php">
                                                <button class="btn-hover1">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="padding: 5px 5px">
                            <div class="card-flip" style="height: 350px">
                                <div class='frontCard invCard003' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container">
                                        <div class="container-blue1-3">
                                            <p style="font-weight: 600; color: #FFF; font-size: 23px; text-align: center;line-height: 33px">Teaching Excellence </p>
                                        </div>
                                    </div>
                                </div>
                                <div class='backCard invCardback3' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 280px">
                                            <a href="Teaching-Excellence.php">
                                                <button class="btn-hover1">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="padding: 5px 5px">
                            <div class="card-flip" style="height: 350px">
                                <div class='frontCard invCard004' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container">
                                        <div class="container-blue1-4">
                                            <p style="font-weight: 600; color: #FFF; font-size: 23px; text-align: center;line-height: 33px">Internship & Placements</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard invCardback4' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 280px">
                                            <a href="Internship-&-Placements.php">
                                                <button class="btn-hover1">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tablet-box01">
                    <div class="row">
                        <div class="col-md-6" style="padding: 5px 5px">
                            <div class="card-flip" style="height: 350px">
                                <div class='frontCard invCard001' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container">
                                        <div class="container-blue1-1">
                                            <p style="font-weight: 600;  color: #FFF; font-size: 23px; text-align: center; line-height: 33px">Explore Our Facilities</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard invCardback1' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 280px"><a href="explore-our-facilities.php"><button class="btn-hover1">Read More</button></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" style="padding: 5px 5px">
                            <div class="card-flip" style="height: 350px">
                                <div class='frontCard invCard002' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container">
                                        <div class="container-blue1-2">
                                            <p style="font-weight: 600; color: #FFF; font-size: 23px; text-align: center;line-height: 33px">International Students</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard invCardback2' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 280px"><a href="International-students.php"><button class="btn-hover1">Read More</button></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding: 5px 5px">
                            <div class="card-flip" style="height: 350px">
                                <div class='frontCard invCard003' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container">
                                        <div class="container-blue1-3">
                                            <p style="font-weight: 600; color: #FFF; font-size: 23px; text-align: center;line-height: 33px">Teaching Excellence </p>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard invCardback3' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 280px"><a href="Teaching-Excellence.php"><button class="btn-hover1">Read More</button></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding: 5px 5px">
                            <div class="card-flip" style="height: 350px">
                                <div class='frontCard invCard004' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container">
                                        <div class="container-blue1-4">
                                            <p style="font-weight: 600; color: #FFF; font-size: 23px; text-align: center;line-height: 33px">Internship & Placements</p>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard invCardback4' style="border-radius: 0px 0px 0px 0px;">
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 280px"><a href="Internship-&-Placements.php"><button class="btn-hover1">Read More</button></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!---------------------------------------------------------------------------------------------------->
            <div class="non-tablet-view">
                <div class="container py-2" style="padding-top: 20px">

                    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                        <li class="nav-item" data-option-value="">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                        <li class="nav-item" data-option-value=".websites">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                        <li class="nav-item" data-option-value=".logos">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                        <li class="nav-item" data-option-value=".brands">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                        <li class="nav-item" data-option-value=".medias">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                    </ul>

                    <div class="sort-destination-loader sort-destination-loader-showing">
                        <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                            <div class="col-md-6 isotope-item brands" style="padding: 5px 5px 0px 0px">
                                <div class="card-flip card-flip-change-height1">
                                    <div class='frontCard' style="height: 510px; background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-01.png')); ?>'); background-size: cover;}">
                                        <div class="card-container">
                                            <div>
                                                <h1 style="font-weight: 900; text-align: left; font-size: 46px; line-height: 43px; padding-top: 300px"> <?php echo e($tiles[0]->title); ?> </h1>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='backCard invCard2' style="background-color: #247cb7">
                                        <div class="card-container2">
                                            <h1 style="color: #FFFFFF; font-weight: bolder;"><?php echo e($tiles[0]->text); ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 isotope-item websites" style="padding: 5px 5px">
                                <div class="portfolio-item">
                                    <div class="card-flip" style="margin-bottom: 5px">
                                        <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-02.png')); ?>'); background-size: cover;}">
                                            <div class="card-container">
                                                <div class="container-blue2">
                                                    <p style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[1]->title); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='backCard card-back'>
                                            <div class="card-container2">
                                                <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                                    <?php echo e($tiles[1]->text); ?>

                                                    <a href="<?php echo e($tiles[1]->button_link); ?>">
                                                        <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-item">
                                    <div class="card-flip" style="margin-top: 5px">
                                        <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-03.png')); ?>'); background-size: cover;}">
                                            <div class="card-container">
                                                <div class="container-blue3">
                                                    <p style="font-weight: 600;  color: #FFF;font-size: 21px"> <?php echo e($tiles[2]->title); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='backCard card-back'>
                                            <div class="card-container2">
                                                <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 12px">
                                                    <?php echo e($tiles[2]->text); ?>

                                                    <a href="<?php echo e($tiles[2]->button_link); ?>">
                                                        <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 isotope-item websites" style="padding: 5px 5px">
                                <div class="portfolio-item">
                                    <div class="card-flip" style="margin-bottom: 5px">
                                        <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-04.png')); ?>'); background-size: cover;}">
                                            <div class="card-container">
                                                <div class="container-blue2">
                                                    <p style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[3]->title); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='backCard card-back'>
                                            <div class="card-container2">
                                                <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 12px">
                                                    <?php echo e($tiles[3]->text); ?>

                                                    <a href="<?php echo e($tiles[3]->button_link); ?>">
                                                        <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-item">
                                    <div class="card-flip" style="margin-top: 5px">
                                        <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-05.png')); ?>'); background-size: cover;}">
                                            <div class="card-container">
                                                <div class="container-blue3">
                                                    <p style="font-weight: 600;  color: #FFF;font-size: 21px"> <?php echo e($tiles[4]->title); ?> </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='backCard card-back'>
                                            <div class="card-container2">
                                                <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 15px">
                                                    <?php echo e($tiles[4]->text); ?>

                                                    <a href="<?php echo e($tiles[4]->button_link); ?>">
                                                        <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="container" style="padding-bottom: 30px">

                    <div class="row" style="padding-bottom: 0px">
                        <div class="col-md-4" style="padding: 5px 5px">
                            <div class="card-flip">
                                <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-06.png')); ?>'); background-size: cover;}">
                                    <div class="card-container">
                                        <div class="container-blue4">
                                            <h1 style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[5]->title); ?></h1>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard card-back'>
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                            <?php echo e($tiles[5]->text); ?>

                                            <a href="<?php echo e($tiles[5]->button_link); ?>">
                                                <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="padding: 5px 5px">
                            <div class="card-flip">
                                <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-07.png')); ?>'); background-size: cover;}">
                                    <div class="card-container">
                                        <div class="container-blue5">
                                            <h1 style="font-weight: 600; color: #FFF;font-size: 21px"> <?php echo e($tiles[6]->title); ?></h1>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard card-back'>
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                            <?php echo e($tiles[6]->text); ?>

                                            <a href="<?php echo e($tiles[6]->button_link); ?>">
                                                <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding: 5px 5px">
                            <div class="card-flip">
                                <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-08.png')); ?>'); background-size: cover;}">
                                    <div class="card-container">
                                        <div class="container-blue6">
                                            <h1 style="font-weight: 600; color: #FFF;font-size: 21px"> <?php echo e($tiles[7]->title); ?> </h1>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard card-back'>
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                            <?php echo e($tiles[7]->text); ?>

                                            <a href="<?php echo e($tiles[7]->button_link); ?>">
                                                <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tablet-view">
                <div class="container" style="padding-top: 20px">

                    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                        <li class="nav-item" data-option-value="">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                        <li class="nav-item" data-option-value=".websites">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                        <li class="nav-item" data-option-value=".logos">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                        <li class="nav-item" data-option-value=".brands">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                        <li class="nav-item" data-option-value=".medias">
                            <a class="nav-link text-1 text-uppercase"></a>
                        </li>
                    </ul>

                    <div class="sort-destination-loader sort-destination-loader-showing">
                        <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                            <div class="col-md-12 isotope-item brands" style="padding: 5px 5px 10px 5px">
                                <div class="card-flip card-flip-change-height1">
                                    <div class='frontCard' style="height: 510px; background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-01.png')); ?>'); background-size: cover;}">
                                        <div class="card-container">
                                            <div>
                                                <h1 style="font-weight: 900; text-align: left; font-size: 46px; line-height: 43px; padding-top: 300px"> <?php echo e($tiles[0]->title); ?> </h1>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='backCard invCard2' style="background-color: #247cb7">
                                        <div class="card-container2">
                                            <h1 style="color: #FFFFFF; font-weight: bolder;"><?php echo e($tiles[0]->text); ?></h1>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-6 isotope-item websites" style="padding: 5px 5px">
                                <div class="portfolio-item">
                                    <div class="card-flip" style="margin-bottom: 5px">
                                        <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-02.png')); ?>'); background-size: cover;}">
                                            <div class="card-container">
                                                <div class="container-blue2">
                                                    <p style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[1]->title); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='backCard card-back'>
                                            <div class="card-container2">
                                                <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                                    <?php echo e($tiles[1]->text); ?>

                                                    <a href="<?php echo e($tiles[1]->button_link); ?>">
                                                        <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-item">
                                    <div class="card-flip" style="margin-top: 5px">
                                        <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-03.png')); ?>'); background-size: cover;}">
                                            <div class="card-container">
                                                <div class="container-blue2">
                                                    <p style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[2]->title); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='backCard card-back'>
                                            <div class="card-container2">
                                                <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                                    <?php echo e($tiles[2]->text); ?>

                                                    <a href="<?php echo e($tiles[2]->button_link); ?>">
                                                        <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 isotope-item websites" style="padding: 5px 5px">
                                <div class="portfolio-item">
                                    <div class="card-flip" style="margin-bottom: 5px">
                                        <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-04.png')); ?>'); background-size: cover;}">
                                            <div class="card-container">
                                                <div class="container-blue2">
                                                    <p style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[3]->title); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='backCard card-back'>
                                            <div class="card-container2">
                                                <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                                    <?php echo e($tiles[3]->text); ?>

                                                    <a href="<?php echo e($tiles[3]->button_link); ?>">
                                                        <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-item">
                                    <div class="card-flip" style="margin-top: 5px">
                                        <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-05.png')); ?>'); background-size: cover;}">
                                            <div class="card-container">
                                                <div class="container-blue2">
                                                    <p style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[4]->title); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='backCard card-back'>
                                            <div class="card-container2">
                                                <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                                    <?php echo e($tiles[4]->text); ?>

                                                    <a href="<?php echo e($tiles[4]->button_link); ?>">
                                                        <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="container" style="padding-bottom: 30px">

                    <div class="row" style="padding-bottom: 0px">
                        <div class="col-md-6" style="padding: 5px 5px">
                            <div class="card-flip">
                                <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-06.png')); ?>'); background-size: cover;}">
                                    <div class="card-container">
                                        <div class="container-blue2">
                                            <p style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[5]->title); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard card-back'>
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                            <?php echo e($tiles[5]->text); ?>

                                            <a href="<?php echo e($tiles[5]->button_link); ?>">
                                                <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" style="padding: 5px 5px">
                            <div class="card-flip">
                                <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-07.png')); ?>'); background-size: cover;}">
                                    <div class="card-container">
                                        <div class="container-blue2">
                                            <p style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[6]->title); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard card-back'>
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                            <?php echo e($tiles[6]->text); ?>

                                            <a href="<?php echo e($tiles[6]->button_link); ?>">
                                                <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding: 5px 5px">
                            <div class="card-flip">
                                <div class='frontCard' style="background-image: url('<?php echo e(static_asset('theme/img/tiles/tile-08.png')); ?>'); background-size: cover;}">
                                    <div class="card-container">
                                        <div class="container-blue2">
                                            <p style="font-weight: 600;  color: #FFF;font-size: 21px"><?php echo e($tiles[7]->title); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class='backCard card-back'>
                                    <div class="card-container2">
                                        <p style="text-align: center; padding-top: 40px; color: white; line-height: 25px; font-size: 13px">
                                            <?php echo e($tiles[7]->text); ?>

                                            <a href="<?php echo e($tiles[7]->button_link); ?>">
                                                <button class="btn-hover1" style="margin-top: 4px;">Read More</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!----------------------->



            <!----------------------->

            <div class="container reg-desktop" style="background-color: #393636; border-radius: 60px 0px" style="padding-top: 0px">

                <table style="margin: 10px 0px;">
                    <tbody>
                        <tr>
                            <td colspan="4" height="20px"></td>
                        </tr>
                        <tr>
                            <th rowspan="5"><img src="<?php echo e(static_asset('theme/img/txt.png')); ?>" width="260px" height="75px" style="padding: 0px 25px 0px 0px"></th>
                            <td>> <?php echo e(date('M Y', strtotime($hm->intake1_sl))); ?> Intake</td>
                            <td>> Sri Lankan Students</td>
                            <td>> <?php echo e(date('M d, Y', strtotime($hm->intake1_sl))); ?></td>
                            <td id="demo" style="color: #ffb301">
                                <span id="days"></span> D &nbsp;
                                <span id="hours"></span> H &nbsp;
                                <span id="minutes"></span> M &nbsp;
                                <span id="seconds"></span> S
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>> International Students</td>
                            <td>> <?php echo e(date('M d, Y', strtotime($hm->intake1_in))); ?></td>
                            <td id="demo" style="color: #ffb301">
                                <span id="dayss"></span> D &nbsp;
                                <span id="hourss"></span> H &nbsp;
                                <span id="minutess"></span> M &nbsp;
                                <span id="secondss"></span> S
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><img src="<?php echo e(static_asset('theme/img/hr.png')); ?>" width="800px"></td>
                        </tr>
                        <tr>
                            <td>> September 2021 Intake</td>
                            <td>> Sri Lankan Students</td>
                            <td>> <?php echo e(date('M d, Y', strtotime($hm->intake2_sl))); ?></td>
                            <td id="demo" style="color: #ffb301">
                                <span id="days4"></span> D &nbsp;
                                <span id="hours4"></span> H &nbsp;
                                <span id="minutes4"></span> M &nbsp;
                                <span id="seconds4"></span> S
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>> International Students</td>
                            <td>> <?php echo e(date('M d, Y', strtotime($hm->intake2_in))); ?></td>
                            <td id="demo" style="color: #ffb301">
                                <span id="days5"></span> D &nbsp;
                                <span id="hours5"></span> H &nbsp;
                                <span id="minutes5"></span> M &nbsp;
                                <span id="seconds5"></span> S
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" height="20px"></td>
                        </tr>
                    <tbody>
                </table>

            </div>

            <script>
                const second = 1000,
                    minute = second * 60,
                    hour = minute * 60,
                    day = hour * 24;

                let countDown = new Date('{date('
                        M d, Y H: i: s ', strtotime($hm->intake1_sl))}').getTime(),
                    x = setInterval(function() {

                        let now = new Date().getTime(),
                            distance = countDown - now;

                        document.getElementById('days').innerText = Math.floor(distance / (day)),
                            document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                            document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                            document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

                        //do something later when date is reached
                        //if (distance < 0) {
                        //  clearInterval(x);
                        //  'IT'S MY BIRTHDAY!;
                        //}

                    }, second)
            </script>

            <script>
                const seconds = 1000,
                    minutes = seconds * 60,
                    hours = minutes * 60,
                    days = hours * 24;

                let countDowns = new Date('{date('
                        M d, Y H: i: s ', strtotime($hm->intake1_in))}').getTime(),
                    y = setInterval(function() {

                        let nows = new Date().getTime(),
                            distances = countDowns - nows;

                        document.getElementById('dayss').innerText = Math.floor(distances / (days)),
                            document.getElementById('hourss').innerText = Math.floor((distances % (days)) / (hours)),
                            document.getElementById('minutess').innerText = Math.floor((distances % (hours)) / (minutes)),
                            document.getElementById('secondss').innerText = Math.floor((distances % (minutes)) / seconds);

                        //do something later when date is reached
                        //if (distance < 0) {
                        //  clearInterval(x);
                        //  'IT'S MY BIRTHDAY!;
                        //}

                    }, seconds)
            </script>



            <script>
                const seconds4 = 1000,
                    minutes4 = seconds4 * 60,
                    hours4 = minutes4 * 60,
                    days4 = hours4 * 24;

                let countDowns124 = new Date('<?php echo e(date('
                    M d, Y H: i: s ', strtotime($hm->intake2_sl))); ?>').getTime();

                z = setInterval(function() {

                    let nows4 = new Date().getTime(),
                        distances4 = countDowns124 - nows4;

                    document.getElementById('days4').innerText = Math.floor(distances4 / (days4)),
                        document.getElementById('hours4').innerText = Math.floor((distances4 % (days4)) / (hours4)),
                        document.getElementById('minutes4').innerText = Math.floor((distances4 % (hours4)) / (minutes4)),
                        document.getElementById('seconds4').innerText = Math.floor((distances4 % (minutes4)) / seconds4);

                    //do something later when date is reached
                    //if (distance < 0) {
                    //  clearInterval(x);
                    //  'IT'S MY BIRTHDAY!;
                    //}

                }, seconds4)
            </script>


            <script>
                const seconds5 = 1000,
                    minutes5 = seconds5 * 60,
                    hours5 = minutes5 * 60,
                    days5 = hours5 * 24;

                let countDowns125 = new Date('<?php echo e(date('
                    M d, Y H: i: s ', strtotime($hm->intake2_in))); ?>').getTime();

                z = setInterval(function() {

                    let nows5 = new Date().getTime(),
                        distances5 = countDowns125 - nows5;

                    document.getElementById('days5').innerText = Math.floor(distances5 / (days5)),
                        document.getElementById('hours5').innerText = Math.floor((distances5 % (days5)) / (hours5)),
                        document.getElementById('minutes5').innerText = Math.floor((distances5 % (hours5)) / (minutes5)),
                        document.getElementById('seconds5').innerText = Math.floor((distances5 % (minutes5)) / seconds5);

                    //do something later when date is reached
                    //if (distance < 0) {
                    //  clearInterval(x);
                    //  'IT'S MY BIRTHDAY!;
                    //}

                }, seconds5)
            </script>
            <!------------------------------->


            <div class="hide-mob-found">
                <div class="container">
                    <div class="row" style="margin-top: 105px">
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">

                            <div class=" bg-transparent text-center rounded-0">
                                <div class="flip-back d-flex align-items-center p-5" style="background-image: url(public/theme/img/banner1.png); background-size: cover; background-position: center;">
                                    <div class="flip-content my-4">
                                        <h4 class="font-weight-bold text-color-light" style="padding: 10px 0px 10px 0px">FUNDING SUPPORT?</h4>
                                        <p class="font-weight-light" style="color: #FFF">Find out about Student loans, Installment facilities, Scholarships to support your funding. Feel free to talk to a funding advisor.</p>
                                        <a href="<?php echo e(url('inquire')); ?>">
                                            <button class="btn-hover color-2">Email Your Query</button>
                                        </a>
                                        <a href="<?php echo e(url('inquire')); ?>">
                                            <button class="btn-hover color-2">Get an Appoinment</button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">

                            <div class=" bg-transparent text-center rounded-0">
                                <div class="flip-back d-flex align-items-center p-5" style="background-image: url(public/theme/img/banner2.png); background-size: cover; background-position: center;">
                                    <div class="flip-content my-4">
                                        <h4 class="font-weight-bold text-color-light" style="padding: 10px 0px 10px 0px">READY TO APPLY</h4>
                                        <p class="font-weight-light" style="color: #FFF">Course Selected </br>
                                            Entry Requirements</br>
                                            </br>
                                            Required Documents</br>
                                        </p>
                                        <a href="<?php echo e(url('application')); ?>">
                                            <button class="btn-hover color-3">Apply Online</button>
                                        </a>
                                        <a href="<?php echo e(static_asset('theme/img/pdf/CIIHE - Application Form.pdf')); ?>">
                                            <button class="btn-hover color-3">Download the Application</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">

                            <div class=" bg-transparent text-center rounded-0">
                                <div class="flip-back d-flex align-items-center p-5" style="background-image: url(public/theme/img/banner3.png); background-size: cover; background-position: center;">
                                    <div class="flip-content my-4">
                                        <h4 class="font-weight-bold text-color-light" style="padding: 10px 0px 10px 0px">NEED GUIDANCE</h4>
                                        <p class="font-weight-light" style="color: #FFF">If you need clarifications, more details about the programs, guidance in selecting course or any other matter, feel free to talk to a student counselor</p>
                                        <a href="https://www.facebook.com/PsychologySriLanka/" target="_bl">
                                            <button class="btn-hover color-5">Chat with a Counselor</button>
                                        </a>
                                        <a href="<?php echo e(url('inquire')); ?>">
                                            <button class="btn-hover color-5">Get an Appointment</button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="non-tablet-3box">
                <div class="container">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-6  mb-5 mb-lg-0">

                            <div class=" bg-transparent text-center rounded-0">
                                <div class="flip-back d-flex align-items-center p-5" style="background-image: url(public/theme/img/banner1.png); background-size: cover; background-position: center;border-radius: 165px 0px;">
                                    <div class="flip-content my-4">
                                        <h4 class="font-weight-bold text-color-light" style="padding: 10px 0px 10px 0px">FUNDING SUPPORT?</h4>
                                        <p class="font-weight-light" style="color: #FFF">Find out about Student loans, Installment facilities, Scholarships to support your funding. Feel free to talk to a funding advisor.</p>
                                        <a href="<?php echo e(url('inquire')); ?>">
                                            <button class="btn-hover color-2">Email your Query</button>
                                        </a>
                                        <a href="<?php echo e(url('inquire')); ?>">
                                            <button class="btn-hover color-2">Get an Appoinment</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5 mb-lg-0">

                            <div class=" bg-transparent text-center rounded-0">
                                <div class="flip-back d-flex align-items-center p-5" style="background-image: url(public/theme/img/banner2.png); background-size: cover; background-position: center;border-radius: 165px 0px;">
                                    <div class="flip-content my-4">
                                        <h4 class="font-weight-bold text-color-light" style="padding: 10px 0px 10px 0px">READY TO APPLY</h4>
                                        <p class="font-weight-light" style="color: #FFF">Course Selected </br>
                                            Entry Requirements</br>

                                            Required Documents</br>
                                            <span style="visibility: hidden;">Required Documents</span></br>
                                        </p>
                                        <a href="<?php echo e(url('application')); ?>">
                                            <button class="btn-hover color-3">Apply Online</button>
                                        </a>
                                        <a href="<?php echo e(static_asset('theme/img/pdf/CIIHE - Application Form.pdf')); ?>">
                                            <button class="btn-hover color-3">Download the Application</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5 mb-lg-0">

                            <div class=" bg-transparent text-center rounded-0">
                                <div class="flip-back d-flex align-items-center p-5" style="background-image: url(public/theme/img/banner3.png); background-size: cover; background-position: center;border-radius: 165px 0px;">
                                    <div class="flip-content my-4">
                                        <h4 class="font-weight-bold text-color-light" style="padding: 10px 0px 10px 0px">NEED GUIDANCE</h4>
                                        <p class="font-weight-light" style="color: #FFF">If you need clarification, more details about the programs, guidance in selecting course or any other matter, feel free to talk to a Student counselor</p>
                                        <a href="https://www.facebook.com/PsychologySriLanka/">
                                            <button class="btn-hover color-5">Chat with a Counselor</button>
                                        </a>
                                        <a href="<?php echo e(url('inquire')); ?>">
                                            <button class="btn-hover color-5">Get an Appointment</button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------------->

    </div>

    <!-- start main 2 -->
    <div role="main" class="main">

        <!---------------------------------------------------------------------------------------------------->

        <div class="container" style="padding-top: 0px; display: grid;">

            <style>
                .mobi-cvr {
                    width: 100% !important;
                }

                @media  only screen and (max-width: 1100px) {
                    .non-tablet-box01 {
                        display: none !important;
                    }
                }

                @media  only screen and (min-width: 1100px) {
                    .tablet-box01 {
                        display: none !important;
                    }
                }
            </style>

            <!--------------------------------------------------------------------------------------------------->

            <!---------------------------------------------------------------------------------------------------->

            <!--------------------------------------------------------------------------------------------------->
            <style>
                @media  only screen and (max-width: 1200px) {
                    .non-tablet-view {
                        display: none !important;
                    }
                }

                @media  only screen and (min-width: 1200px) {
                    .tablet-view {
                        display: none !important;
                    }
                }
            </style>

            <!--------------------------mobile box start------------------------------------------------------------------------->

            <!-------------------------------------------------mobile box end------------------------------------------------------------->

            <style>
                table {
                    width: 100%;
                    border-top: 0px solid #ccc;
                    border-left: 0px solid #ccc;
                    border-collapse: collapse;
                    margin-bottom: 1em;
                    color: #FFF;

                    th,
                    td {
                        padding: 0.5em 1em;
                        border-bottom: 0px;
                        border-right: 0px;
                        white-space: pre;
                    }

                    thead th,
                    tbody td {
                        text-align: center;
                    }

                    // Custom Styles
                    thead {
                        color: white;
                        background: #0cf;

                        th {
                            padding: 1em;
                        }
                    }
            </style>

            <!---------------------------------------------------------------------------------------------------->

            <style>
                @media  only screen and (max-width: 1200px) {
                    .reg-desktop {
                        display: none;
                    }
                }

                @media  only screen and (min-width: 1200px) {
                    .reg-mobi {
                        display: none;
                    }
                }
            </style>

            <script>
                const second = 1000,
                    minute = second * 60,
                    hour = minute * 60,
                    day = hour * 24;

                let countDown = new Date('<?php echo e(date('
                        M d, Y ', strtotime($hm->intake1_sl))); ?>').getTime(),
                    x = setInterval(function() {

                        let now = new Date().getTime(),
                            distance = countDown - now;

                        document.getElementById('days').innerText = Math.floor(distance / (day)),
                            document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                            document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                            document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

                        //do something later when date is reached
                        //if (distance < 0) {
                        //  clearInterval(x);
                        //  'IT'S MY BIRTHDAY!;
                        //}

                    }, second)
            </script>

            <script>
                const seconds = 1000,
                    minutes = seconds * 60,
                    hours = minutes * 60,
                    days = hours * 24;

                let countDowns = new Date('<?php echo e(date('
                        M d, Y ', strtotime($hm->intake1_in))); ?>').getTime(),
                    y = setInterval(function() {

                        let nows = new Date().getTime(),
                            distances = countDowns - nows;

                        document.getElementById('dayss').innerText = Math.floor(distances / (days)),
                            document.getElementById('hourss').innerText = Math.floor((distances % (days)) / (hours)),
                            document.getElementById('minutess').innerText = Math.floor((distances % (hours)) / (minutes)),
                            document.getElementById('secondss').innerText = Math.floor((distances % (minutes)) / seconds);

                        //do something later when date is reached
                        //if (distance < 0) {
                        //  clearInterval(x);
                        //  'IT'S MY BIRTHDAY!;
                        //}

                    }, seconds)
            </script>

            <!--------------------------------------------registration mobile-------------------------------------------------------->

            <style>
                .mobi-reg-text {
                    text-align: center;
                    font-size: 20px;
                    color: #FFF;
                    font-weight: bolder;
                }

                .mobi-reg-text-2 {
                    text-align: center;
                    font-size: 15px;
                    color: #FFF;
                    font-weight: 600;
                }
            </style>

            <div class="container reg-mobi" style="background-color: #393636; border-radius: 0px 0px; padding: 80px 0px">
                <div class="col-lg-offset-1">

                    <div style="padding-bottom: 80px">
                        <p style="text-align: center;"><img src="<?php echo e(static_asset('theme/img/txt.png')); ?>"></p>
                    </div>

                    <ul class="list list-icons mt-4 mb-4">
                        <li>
                            <p class="mobi-reg-text"><?php echo e(date('M Y', strtotime($hm->intake1))); ?> Intake</p>
                        </li>

                        <li class="mobi-reg-text-2">Sri Lankan Students &nbsp;&nbsp;>&nbsp;&nbsp; <?php echo e(date('M d, Y', strtotime($hm->intake1_sl))); ?></li>
                        <li style="text-align: center;">
                            <p id="demo" style="color: #ffb301">
                                <span id="days2"></span> D &nbsp;
                                <span id="hours2"></span> H &nbsp;
                                <span id="minutes2"></span> M &nbsp;
                                <span id="seconds2"></span> S
                            </p>
                        </li>

                    </ul>

                    <ul class="list list-icons mt-4 mb-4">

                        <li class="mobi-reg-text-2">International Students &nbsp;&nbsp;>&nbsp;&nbsp; <?php echo e(date('M d, Y', strtotime($hm->intake1_in))); ?></li>
                        <li style="text-align: center;">
                            <p id="demo" style="color: #ffb301">
                                <span id="days3"></span> D &nbsp;
                                <span id="hours3"></span> H &nbsp;
                                <span id="minutes3"></span> M &nbsp;
                                <span id="seconds3"></span> S
                            </p>
                        </li>

                        <li style="text-align: center"><img src="<?php echo e(static_asset('theme/img/hr2.png')); ?>"></li>

                    </ul>

                    <ul class="list list-icons mt-4 mb-4">
                        <li>
                            <p class="mobi-reg-text"><?php echo e(date('M Y', strtotime($hm->intake2))); ?> Intake</p>
                        </li>

                        <li class="mobi-reg-text-2">Sri Lankan Students &nbsp;&nbsp;>&nbsp;&nbsp; <?php echo e(date('M d, Y', strtotime($hm->intake2_sl))); ?></li>
                        <li style="text-align: center;">
                            <p id="demo" style="color: #ffb301">
                                <span id="days7"></span> D &nbsp;
                                <span id="hours7"></span> H &nbsp;
                                <span id="minutes7"></span> M &nbsp;
                                <span id="seconds7"></span> S
                            </p>
                        </li>

                    </ul>

                    <ul class="list list-icons mt-4 mb-4">

                        <li class="mobi-reg-text-2">International Students &nbsp;&nbsp;>&nbsp;&nbsp; <?php echo e(date('M d, Y', strtotime($hm->intake2_in))); ?></li>
                        <li style="text-align: center;">
                            <p id="demo" style="color: #ffb301">
                                <span id="days8"></span> D &nbsp;
                                <span id="hours8"></span> H &nbsp;
                                <span id="minutes8"></span> M &nbsp;
                                <span id="seconds8"></span> S
                            </p>
                        </li>

                    </ul>

                </div>
            </div>

            <script>
                const seconds2 = 1000,
                    minutes2 = seconds2 * 60,
                    hours2 = minutes2 * 60,
                    days2 = hours2 * 24;

                let countDowns12 = new Date('<?php echo e(date('
                    M d, Y H: i: s ', strtotime($hm->intake1_sl))); ?>').getTime();

                z = setInterval(function() {

                    let nows2 = new Date().getTime(),
                        distances2 = countDowns12 - nows2;
                    console.log(distances2);
                    document.getElementById('days2').innerText = Math.floor(distances2 / (days2)),
                        document.getElementById('hours2').innerText = Math.floor((distances2 % (days2)) / (hours2)),
                        document.getElementById('minutes2').innerText = Math.floor((distances2 % (hours2)) / (minutes2)),
                        document.getElementById('seconds2').innerText = Math.floor((distances2 % (minutes2)) / seconds2);

                    //do something later when date is reached
                    //if (distance < 0) {
                    //  clearInterval(x);
                    //  'IT'S MY BIRTHDAY!;
                    //}

                }, seconds2)
            </script>
            <script>
                const seconds3 = 1000,
                    minutes3 = seconds3 * 60,
                    hours3 = minutes3 * 60,
                    days3 = hours3 * 24;

                let countDowns123 = new Date('<?php echo e(date('
                    M d, Y H: i: s ', strtotime($hm->intake1_in))); ?>').getTime();

                z = setInterval(function() {

                    let nows3 = new Date().getTime(),
                        distances3 = countDowns123 - nows3;
                    document.getElementById('days3').innerText = Math.floor(distances3 / (days3)),
                        document.getElementById('hours3').innerText = Math.floor((distances3 % (days3)) / (hours3)),
                        document.getElementById('minutes3').innerText = Math.floor((distances3 % (hours3)) / (minutes3)),
                        document.getElementById('seconds3').innerText = Math.floor((distances3 % (minutes3)) / seconds3);

                    //do something later when date is reached
                    //if (distance < 0) {
                    //  clearInterval(x);
                    //  'IT'S MY BIRTHDAY!;
                    //}

                }, seconds3)
            </script>

            <script>
                const seconds7 = 1000,
                    minutes7 = seconds7 * 60,
                    hours7 = minutes7 * 60,
                    days7 = hours7 * 24;

                let countDowns127 = new Date('<?php echo e(date('
                    M d, Y H: i: s ', strtotime($hm->intake2_sl))); ?>').getTime();

                z = setInterval(function() {

                    let nows7 = new Date().getTime(),
                        distances7 = countDowns127 - nows7;
                    document.getElementById('days7').innerText = Math.floor(distances7 / (days7)),
                        document.getElementById('hours7').innerText = Math.floor((distances7 % (days7)) / (hours7)),
                        document.getElementById('minutes7').innerText = Math.floor((distances7 % (hours7)) / (minutes7)),
                        document.getElementById('seconds7').innerText = Math.floor((distances7 % (minutes7)) / seconds7);

                    //do something later when date is reached
                    //if (distance < 0) {
                    //  clearInterval(x);
                    //  'IT'S MY BIRTHDAY!;
                    //}

                }, seconds7)
            </script>


            <script>
                const seconds8 = 1000,
                    minutes8 = seconds8 * 60,
                    hours8 = minutes8 * 60,
                    days8 = hours8 * 24;

                let countDowns128 = new Date('<?php echo e(date('
                    M d, Y H: i: s ', strtotime($hm->intake2_in))); ?>').getTime();

                z = setInterval(function() {

                    let nows8 = new Date().getTime(),
                        distances8 = countDowns128 - nows8;
                    document.getElementById('days8').innerText = Math.floor(distances8 / (days8)),
                        document.getElementById('hours8').innerText = Math.floor((distances8 % (days8)) / (hours8)),
                        document.getElementById('minutes8').innerText = Math.floor((distances8 % (hours8)) / (minutes8)),
                        document.getElementById('seconds8').innerText = Math.floor((distances8 % (minutes8)) / seconds8);

                    //do something later when date is reached
                    //if (distance < 0) {
                    //  clearInterval(x);
                    //  'IT'S MY BIRTHDAY!;
                    //}

                }, seconds8)
            </script>



            <!-------------------------------------desktop--------------------------------------------------------------->

            <style>
                @media  only screen and (max-width: 1200px) {

                    .tablet-3box {
                        display: block !important;
                    }

                    .list.list-icons li {
                        position: relative;
                        padding: 0px 10px;
                    }

                    .hide-mob-found {
                        display: none;
                    }
                }

                @media  only screen and (min-width: 1200px) {
                    .tablet-3box {
                        display: none !important;
                    }

                    .non-tablet-3box {
                        display: none !important;
                    }
                }
            </style>


            <!------------------desktop--------------------------------->
            <!------------------------------------------->

        </div>
        <!---------------------------tablet---------------------------->
        <!----------------------------------------------------->

        <div id="about" style="padding-top: 20px">
            <div class="row align-items-center">
                <div class="col-lg-6 pl-lg-5" style="background-image: url(public/theme/img/02.png); background-size: cover; background-position: center;">
                    <div class="col-md-12 col-lg-12">
                        <article class="post post-medium border-0 pb-0 mb-5">
                            <div class="post-image" style="padding-bottom: 20px">
                                <h2 class="line-height-6 mt-3 mb-2" style="color: #FFF; font-size: 50px; font-weight: bold;"><a> CIRP in Media </a></h2>

                            </div>

                            <div class="post-content">
                                <p style="text-align: center;">
                                    <a href="<?php echo e(url('news')); ?>">
                                        <img src="<?php echo e(static_asset($media[0]->image)); ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders" alt="" style="border-radius: 50px" />
                                    </a>
                                </p>

                                <h1 style="padding-top: 20px; color: #FFF; text-align: center; font-weight: bolder;"> <?php echo e($media[0]->title); ?> </h1>

                                <p style="text-align: center;">
                                    <a href="<?php echo e(url('news')); ?>">
                                        <button class="btn-hover color-2">READ MORE</button>
                                    </a>
                                </p>

                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5" style="background-image: url(public/theme/img/01.png); background-size: cover; background-position: center;">
                    <div class="col-md-12 col-lg-12">
                        <article class="post post-medium border-0 pb-0 mb-5">
                            <div class="post-image" style="padding-bottom: 20px">
                                <h2 class="line-height-6 mt-3 mb-2" style="color: #FFF; font-size: 50px; font-weight: bold;"><a>CIRP News & Events</a></h2>

                            </div>

                            <div class="post-content">
                                <p style="text-align: center;">
                                    <a href="<?php echo e(url('events')); ?>" style="border-radius: 50px;">
                                        <img src="<?php echo e(static_asset($media[1]->image)); ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders" alt="" style="border-radius: 50px" />
                                    </a>
                                </p>

                                <h1 style="padding-top: 20px; color: #FFF; text-align: center; font-weight: bolder;"><?php echo e($media[1]->title); ?> </h1>

                                <p style="text-align: center;">
                                    <a href="<?php echo e(url('events')); ?>">
                                        <button class="btn-hover color-3">READ MORE</button>
                                    </a>
                                </p>

                            </div>
                        </article>
                    </div>
                </div>
                <div class="mobi-cvr">
                    <a href="#" onclick="lightbox_open();">
                        <img src="<?php echo e(static_asset($video[0]->video_thumbnail)); ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders" alt="" width="100%" /></a>
                </div>

                <div class="desktop-cvr">
                    <a href="#" onclick="lightbox_open();">
                        <img src="<?php echo e(static_asset($video[0]->mobile_thumbnail)); ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders" alt="" width="100%" /></a>
                </div>

            </div>
        </div>
    </div>

    <style>
        @media  only screen and (max-width: 600px) {
            .mobi-cvr {
                display: none !important;
            }
        }

        @media  only screen and (min-width: 600px) {
            .desktop-cvr {
                display: none !important;
            }
        }
    </style>
    <!---------------------------------------------------------------------------------------------------->

    <div id="light">
        <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
        <video id="VisaChipCardVideo" width="800" controls height="600">
            <source src="<?php echo e(static_asset($video[0]->video_name)); ?>" type="video/mp4">
            <!--Browser does not support <video> tag -->
        </video>
    </div>

    <div id="fade" onClick="lightbox_close();"></div>
    <style>
        #fade {
            display: none;
            position: fixed;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index: 1001;
            -moz-opacity: 0.8;
            opacity: .80;
            filter: alpha(opacity=80);
        }

        #light {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            max-width: 800px;
            max-height: 6000px;
            margin-left: -300px;
            margin-top: -180px;
            border: 2px solid #FFF;
            background: #FFF;
            z-index: 1002;
            overflow: visible;
        }

        #boxclose {
            float: right;
            cursor: pointer;
            color: #fff;
            border: 1px solid #AEAEAE;
            border-radius: 3px;
            background: #222222;
            font-size: 31px;
            font-weight: bold;
            display: inline-block;
            line-height: 0px;
            padding: 11px 3px;
            position: absolute;
            right: 2px;
            top: 2px;
            z-index: 1002;
            opacity: 0.9;
        }

        .boxclose:before {
            content: "×";
        }

        #fade:hover~#boxclose {
            display: none;
        }

        .test:hover~.test2 {
            display: none;
        }
    </style>
    <script>
        window.document.onkeydown = function(e) {
            if (!e) {
                e = event;
            }
            if (e.keyCode == 27) {
                lightbox_close();
            }
        }

        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            window.scrollTo(0, 0);
            document.getElementById('light').style.display = 'block';
            document.getElementById('fade').style.display = 'block';
            lightBoxVideo.play();
        }

        function lightbox_close() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById('light').style.display = 'none';
            document.getElementById('fade').style.display = 'none';
            lightBoxVideo.pause();
        }
    </script>

    <section class="section section-height-3 bg-light border border-bottom-0 m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 5}, '1200': {'items': 5}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                        <?php $__currentLoopData = $logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div style="margin: 0px 20px">
                            <a href="<?php echo e($logo->link); ?>" target="_blank"><img class="img-fluid" src="<?php echo e(static_asset($logo->image)); ?>" alt=""></a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/cirp/htdocs/Modules/Site/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>