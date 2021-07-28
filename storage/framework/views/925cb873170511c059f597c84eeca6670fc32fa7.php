<?php $__env->startSection('style'); ?>
   <!-- Demo CSS -->
    <style>
        .gallery {
            /* https://tobiasahlin.com/blog/masonry-with-css/ */
            display: flex;
            flex-flow: column wrap;
            align-content: space-between;
            min-height: 80vh;
            /* Re-order items into rows */
            /* Force new columns */
        }
        
        .gallery .gallery-image[data-flipping] {
            opacity: 1;
            z-index: 3;
        }
        
        .gallery .gallery-image:nth-child(3n+1) {
            order: 1;
        }
        
        .gallery .gallery-image:nth-child(3n+2) {
            order: 2;
        }
        
        .gallery .gallery-image:nth-child(3n) {
            order: 3;
        }
        
        .gallery::before,
        .gallery::after {
            content: "";
            flex-basis: 100%;
            width: 0;
            order: 2;
        }
        
        .gallery-image {
            margin: 0;
            display: block;
            position: relative;
        }
        
        .gallery-image figcaption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            color: #FFF;
            text-shadow: 0 0 1px #000;
            opacity: 0.8;
            padding: 1em;
            text-align: left;
            transition: opacity .4s linear;
            font-family: monospace;
        }
        
        .gallery-image:hover figcaption {
            opacity: 1;
        }
        
        figure.gallery-image {
            padding: 0px;
        }
        
        .detail {
            z-index: 2;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(25, 25, 25, 0);
            box-shadow: 0 0 30px #000;
            display: flex;
            pointer-events: none;
            transition: background .3s linear;
        }
        
        .detail .gallery-image {
            padding: 5vmin;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .detail .gallery-image img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
        }
        
        .cta img {
            width: 100%;
        }
        
        .hero img {
            width: 100%;
        }
        
        .detail .gallery-image figcaption {
            display: none;
        }
        
        [data-state="detail"] .detail {
            background: rgba(25, 25, 25, 0.85);
            pointer-events: auto;
        }
        
        [data-state="detail"] .detail .gallery-image {
            opacity: 1;
        }
        
        [data-state="gallery"] .detail .gallery-image {
            opacity: 0;
            transition: none;
        }
        /* ---------------------------------- */
        
        body {
            background: black;
        }
        
        #app {
            pointer-events: none;
        }
        
        #app .gallery .gallery-image {
            pointer-events: auto;
        }
        
        .gallery-image {
            transition: opacity .5s linear;
        }
        
        #app:hover .gallery .gallery-image {}
        
        #app:hover .gallery .gallery-image[data-flipping],
        #app:hover .gallery .gallery-image:hover {
            transition-duration: .3s;
        }
        
        .custom-height {
            height: 420px;
            object-fit: contain;
        }
        
        .custom-height5 {
            height: 150px;
            object-fit: contain;
        }
        
        @media  only screen and (max-width: 1186px) {
            .custom-height {
                height: 100%!important;
                object-fit: contain;
            }
            .custom-height5 {
                height: 100%!important;
                object-fit: contain;
            }
        }
    </style>
    <style>
        .thumb-info-caption {
            padding: 10px 0;
            min-height: 450px!important;
        }
        
        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin: auto!important;
        }
        
        @media (min-width: 768px) {
            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active + .carousel-item,
            .carousel-inner .active + .carousel-item + .carousel-item {
                display: block;
            }
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                transition: none;
            }
            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }
            /* left or forward direction */
            .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }
            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }
            /* right or prev direction */
            .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }
    </style>

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
                        .top {
                            display: grid;
                            /* max-width:1140px; */
                            grid-gap: 10px;
                            grid-template-areas: "cta1 hero cta3" "cta2 hero cta4";
                        }
                        
                        .hero {
                            grid-area: hero;
                            min-height: 400px;
                            background: white url(images/taco.jpg);
                            background-size: cover;
                            background-position: bottom right;
                            padding: 10px;
                        }
                        
                        .cta {
                            display: grid;
                            align-items: center;
                            justify-items: center;
                            align-content: center;
                        }
                        
                        .cta1 {
                            grid-area: cta1;
                        }
                        
                        .cta2 {
                            grid-area: cta2;
                        }
                        
                        .cta4 {
                            grid-area: cta3;
                        }
                        
                        .cta4 {
                            grid-area: cta4;
                        }
                        
                        @media (max-width: 1024px) {
                            .top {
                                grid-template-areas: "hero hero" "cta1 cta3" "cta2 cta4";
                            }
                            /* About */
                            .about {
                                grid-template-columns: 1fr;
                            }
                        }
                        
                        @media (max-width: 700px) {
                            .top {
                                grid-template-areas: "hero" "cta1" "cta2" "cta3" "cta4";
                            }
                            /* About */
                            .about {
                                grid-template-columns: 1fr;
                            }
                        }
                        
                        .carousel-control-next {
                            position: absolute;
                            top: 0;
                            bottom: 0;
                            z-index: 1;
                            display: -ms-flexbox;
                            display: flex;
                            -ms-flex-align: center;
                            align-items: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                            width: 15%;
                            color: #000;
                            text-align: center;
                            opacity: .5;
                            transition: opacity .15s ease;
                            left: 95%;
                        }
                        
                        .carousel-control-prev {
                            position: absolute;
                            top: 0;
                            bottom: 0;
                            z-index: 1;
                            display: -ms-flexbox;
                            display: flex;
                            -ms-flex-align: center;
                            align-items: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                            width: 15%;
                            color: #000;
                            text-align: center;
                            opacity: .5;
                            transition: opacity .15s ease;
                            left: -12% !important;
                        }
                        
                        .carousel-control-prev-icon {
                            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
                        }
                        
                        .carousel-control-next-icon {
                            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
                        }
                    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
    <div class="body">

    	<div role="main" class="main">
                <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
                    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
                        <ul>
                            <li data-transition="fade">
                                <img src="<?php echo e(static_asset('theme/video/21.png')); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                                <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2" data-frames='[{"delay":100,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-fontsize="['50','50','50','90']" data-lineheight="['55','55','55','95']"   style=" text-shadow: 3px 3px 3px  #000000;">ALUMNI</div>

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container" style="padding-top: 20px">
                <ul style="padding: 0px 15px">
                    <p>
                        <a href="<?php echo e(url('/')); ?>" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
                        <a href="javascript:void" style="text-decoration: none;">&nbsp;&nbsp;Alumni</a>
                    </p>
                    
                </ul>
            </div>

            <div style="background-image: url(public/theme/img/fingerprint.png); background-size: cover; background-position: center;">


            	 <div class="container" style="padding-top: 100px">

                            <div class="row pt-2 mb-4">
                                <div class="col-lg-3">
                                    <aside class="sidebar">

                                        <ul class="nav nav-list flex-column mb-4 show-bg-active">
                                            <a href="#"><img src="<?php echo e(static_asset('theme/img/alumni.png')); ?>" height="250px" width="250px" /></a>
                                        </ul>
                                    </aside>

                                </div>
                                <div class="col-lg-9">
                                    <p style="text-align: justify;">The need for Psychological insight or in other words, the need to understand human behavior in the corporate world is immense, owing to the necessity of skills in effective communication, leading and managing people, selecting correct people for work and motivating employees to achieve organizational goals. This program equally concentrates on both areas, Business and Psychology with the aim of producing graduates who could apply skills and knowledge in Psychology to achieve success in business.</br>

                                        This program equally concentrates on both areas, Business and Psychology with the aim of producing graduates who could apply skills and knowledge in Psychology to achieve success in business.</p>

                                    <div class="row" style="padding: 0px 0px">

                                        <div class="col">

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- ////////////////////////////////////////// -->

                        <!---------------------------------------------------------------------------------------------------->

                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 text-center" style="padding-left: 0%">
                                    <p class="mt-4 mb-2" style="text-align: center; font-size: 45px;line-height: 47px; color: #000000"><strong>ALUMNI </strong></br>SUCCES STORIES</p>
                                </div>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner row w-100 mx-auto">
                                        <div class="carousel-item col-md-4 active">
                                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                                <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                                                    <div class="thumb-info-side-image-wrapper p-0">
                                                        <img src="<?php echo e(static_asset('theme/img/testimonial/01.png')); ?>" class="img-fluid" alt="">

                                                    </div>
                                                    <div class="thumb-info-caption" style="background-color: #dedddd">
                                                        <div class="thumb-info-caption-text px-4">
                                                            <p class="mb-3 mt-1"><span style="color: #2753a6; font-size: 20px">Amanda Piyaratne</span></br>BSc (Hons) Psychology </br>Final year Student </p>
                                                            <p class="text-3" style="text-align: justify;">“I joined CIIHE soon after my A/L’s for the BSc Psychology program. I can’t believe it has been three years and I will be graduating soon. I have had a wonderful time at CIIHE both with my studies as well as other activities such as being an oﬃcer in the Student Council and volunteering to organize ICAP”</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                                <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                                                    <div class="thumb-info-side-image-wrapper p-0">
                                                        <img src="<?php echo e(static_asset('theme/img/testimonial/02.png')); ?>" class="img-fluid" alt="">

                                                    </div>
                                                    <div class="thumb-info-caption" style="background-color: #dedddd">
                                                        <div class="thumb-info-caption-text px-4">
                                                            <p class="mb-3 mt-1"><span style="color: #2753a6; font-size: 20px">Taksila Jayathilake</span></br>Vice Principal</br>St. Mary’s Montessori</p>
                                                            <p class="text-3" style="text-align: justify;">As an administrator in the education sector it is essential for me to have a good knowledge about how children think, feel and understand the world. Furthermore as a supervisor for preschool teachers, the knowledge and skills I gathered from Diploma in Child & Adolescent Psychology program is really helpful.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                                <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                                                    <div class="thumb-info-side-image-wrapper p-0">
                                                        <img src="<?php echo e(static_asset('theme/img/testimonial/03.png')); ?>" class="img-fluid" alt="">

                                                    </div>
                                                    <div class="thumb-info-caption" style="background-color: #dedddd">
                                                        <div class="thumb-info-caption-text px-4">
                                                            <p class="mb-3 mt-1"><span style="color: #2753a6; font-size: 20px">Dinel Dias</span></br>Public Relations Coordinator</p>
                                                            <p class="text-3" style="text-align: justify;">Although it was tough working full time while reading for my Diploma in Business and Organizational Psychology at CIIHE, it was definitely worth the effort; thanks to the excellent teaching and guidance made enjoyable by our lecturers. The course offered me so much more in terms of developing skills and knowledge which groomed and empowered me to become who I am toda</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                                <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                                                    <div class="thumb-info-side-image-wrapper p-0">
                                                        <img src="<?php echo e(static_asset('theme/img/testimonial/04.png')); ?>" class="img-fluid" alt="">

                                                    </div>
                                                    <div class="thumb-info-caption" style="background-color: #dedddd">
                                                        <div class="thumb-info-caption-text px-4">
                                                            <p class="mb-3 mt-1"><span style="color: #2753a6; font-size: 20px">Ronali Wickramatunge</span></br>DGP – 2016 February Intake</p>
                                                            <p class="text-3" style="text-align: justify;">I am from a Business background and my career plan is to progress in the corporate sector. I decided to take up a program in Psychology as I believed that understanding people and the way they think is vital for my future career. Upon completion of the program, the things I learned have made me more competent in what I do.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                                <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                                                    <div class="thumb-info-side-image-wrapper p-0">
                                                        <img src="<?php echo e(static_asset('theme/img/testimonial/05.png')); ?>" class="img-fluid" alt="">

                                                    </div>
                                                    <div class="thumb-info-caption" style="background-color: #dedddd">
                                                        <div class="thumb-info-caption-text px-4">
                                                            <p class="mb-3 mt-1"><span style="color: #2753a6; font-size: 20px">Deshan Wijesinghe</span></br>MSc Business Psychology</br>September 2015 Intake</p>
                                                            <p class="text-3" style="text-align: justify;">"I pursued MSc in Business & Organizational Psychology program awarded by Coventry University, at CIIHE. I first joined CIIHE as a student of the Diploma in Business & Organizational Psychology . When I found out that the knowledge I gained really helped me with my role as a HR partner at a leading IT firm, I decided to enroll in the masters program at CIIHE</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                                <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                                                    <div class="thumb-info-side-image-wrapper p-0">
                                                        <img src="<?php echo e(static_asset('theme/img/testimonial/06.png')); ?>" class="img-fluid" alt="">

                                                    </div>
                                                    <div class="thumb-info-caption" style="background-color: #dedddd">
                                                        <div class="thumb-info-caption-text px-4">
                                                            <p class="mb-3 mt-1"><span style="color: #2753a6; font-size: 20px">Mr.CIifford Regis</span></br>Operations Executive</br>LycaFIy (pvt) Ltd </br>MSc Business Psychology 2016 Batch </p>
                                                            <p class="text-3" style="text-align: justify;">Coming from a marketing background, I believe that this Masters program will help me strike the balance between both disciplines effectively. The opportunities I would receive in the future due to a psychology based Masters qualification are indeed aplenty. As such the MSc in Business Psychology program is definitely promising in terms of ensuring career growth and development".</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">

                                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                                <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
                                                    <div class="thumb-info-side-image-wrapper p-0">
                                                        <img src="<?php echo e(static_asset('theme/img/testimonial/07.png')); ?>" class="img-fluid" alt="">

                                                    </div>
                                                    <div class="thumb-info-caption" style="background-color: #dedddd">
                                                        <div class="thumb-info-caption-text px-4">
                                                            <p class="mb-3 mt-1"><span style="color: #2753a6; font-size: 20px">Mr. Lal Keerthi Gunawardana</span></br>Chairman & Group Managing Director</br> Lucky Lanka Milk Processing PLC</br>MSc Business Psychology 2016 Batch</p>
                                                            <p class="text-3" style="text-align: justify;">"I was fortunate enough to come across the MSc in Business Psychology program offered by CIIHE. The content covered in this program has made me more interested in learning what I had always wanted to study. As a trainer, the knowledge I have acquired has been immensely beneficial for me and will certainly contribute towards my career development as well".</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 50px; height: 50px"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true" style="width: 50px; height: 50px"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-12 text-center" style="padding-left: 0%">
                            <p class="mt-4 mb-2" style="text-align: center; font-size: 45px;line-height: 47px; color: #000000"><strong>ALUMNI </strong></br>ENGAGEMENT</p>
                        </div>
                    </div>

                    <div class="container">
                        <div id="app" data-state="gallery">
                            <div class="gallery">
                                <div class="top">
                                    <div class="cta cta1">
                                        <figure class="gallery-image">
                                            <img src="<?php echo e(static_asset('theme/img/projects/alumni/alumni1.jpg')); ?>" />
                                        </figure>
                                    </div>
                                    <div class="cta cta2">
                                        <figure class="gallery-image">
                                            <img src="<?php echo e(static_asset('theme/img/projects/alumni/alumni2.png')); ?>" />
                                        </figure>
                                    </div>
                                    <header class="hero">
                                        <figure class="gallery-image">
                                            <img src="<?php echo e(static_asset('theme/img/projects/alumni/alumni3.png')); ?>" />
                                        </figure>
                                    </header>

                                    <div class="cta cta3">
                                        <figure class="gallery-image">
                                            <img src="<?php echo e(static_asset('theme/img/projects/alumni/alumni4.jpg')); ?>" />
                                        </figure>
                                    </div>
                                    <div class="cta cta4">
                                        <figure class="gallery-image">
                                            <img src="<?php echo e(static_asset('theme/img/projects/alumni/alumni5.png')); ?>" />
                                        </figure>
                                    </div>

                                </div>
                            </div>
                            <div class="detail">
                                <!--   cloned figure/image goes here!   -->
                            </div>
                        </div>

                    </div>

            </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

            <script src="https://codepen.io/shshaw/pen/QmZYMG.js"></script>
            <script>
                console.clear();

                const elApp = document.querySelector("#app");

                const elImages = Array.from(document.querySelectorAll(".gallery-image"));

                const elDetail = document.querySelector(".detail");

                function flipImages(firstEl, lastEl, change) {
                    const firstRect = firstEl.getBoundingClientRect();

                    const lastRect = lastEl.getBoundingClientRect();

                    // INVERT
                    const deltaX = firstRect.left - lastRect.left;
                    const deltaY = firstRect.top - lastRect.top;
                    const deltaW = firstRect.width / lastRect.width;
                    const deltaH = firstRect.height / lastRect.height;

                    change();
                    lastEl.parentElement.dataset.flipping = true;

                    const animation = lastEl.animate([{
                        transform: `translateX(${deltaX}px) translateY(${deltaY}px) scaleX(${deltaW}) scaleY(${deltaH})`
                    }, {
                        transform: 'none'
                    }], {
                        duration: 600, // milliseconds
                        easing: 'cubic-bezier(.2, 0, .3, 1)'
                    });

                    animation.onfinish = () => {
                        delete lastEl.parentElement.dataset.flipping;
                    }

                }

                elImages.forEach(figure => {

                    figure.addEventListener("click", () => {
                        const elImage = figure.querySelector('img');

                        elDetail.innerHTML = "";

                        const elClone = figure.cloneNode(true);
                        elDetail.appendChild(elClone);

                        const elCloneImage = elClone.querySelector('img');

                        flipImages(elImage, elCloneImage, () => {
                            elApp.dataset.state = "detail";
                        });

                        function revert() {

                            flipImages(elCloneImage, elImage, () => {
                                elApp.dataset.state = "gallery";
                                elDetail.removeEventListener('click', revert);
                            });

                        }

                        elDetail.addEventListener('click', revert);

                    });
                });
            </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/cirp/htdocs/Modules/Site/Providers/../Resources/views/alumni.blade.php ENDPATH**/ ?>