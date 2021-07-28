@extends('site::layouts.master')
@section('style')
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
        
        @media only screen and (max-width: 1186px) {
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
    @media only screen and (max-width: 600px) 
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
                            background: white url(/public/theme/images/taco.jpg);
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
                        
                    </style>
@endsection
@section('content')
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">

		<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
						<ul>
							<li data-transition="fade">
								<img src="{{static_asset('theme/video/25.png')}}"  
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
									data-lineheight="['55','55','55','95']"  style=" text-shadow: 3px 3px 3px  #000000;">INTERNATIONAL</div>
				
								
								
							</li>
						</ul>
					</div>
				</div>

				<div class="container" style="padding-top: 20px">
                <ul style="padding: 0px 15px">
                    <p>
                        <a href="{{url('/')}}" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
                        <a href="javascript:void" style="text-decoration: none;">&nbsp;&nbsp;International</a>
                    </p>
                    
                </ul>
            </div>

            <div style="background-image: url(/public/theme/img/fingerprint.png); background-size: cover; background-position: center;">	


            	<div class="container" style="padding-top: 100px">

					<div class="row pt-2 mb-4">
						<div class="col-lg-3">
							<aside class="sidebar">

								<ul class="nav nav-list flex-column mb-4 show-bg-active" >
								<a href="#"><img src="{{static_asset('theme/img/international.png')}}" height="250px" width="250px"/></a>
								</ul>
							</aside>

					</div>
						<div class="col-lg-9">

							<p style="text-align: justify;">The need for Psychological insight or in other words, the need to understand human behavior in the corporate world is immense, owing to the necessity of skills in effective communication, leading and managing people, selecting correct people for work and motivating employees to achieve organizational goals. This program equally concentrates on both areas, Business and Psychology with the aim of producing graduates who could apply skills and knowledge in Psychology to achieve success in business.</br>

							This program equally concentrates on both areas, Business and Psychology with the aim of producing graduates who could apply skills and knowledge in Psychology to achieve success in business.</p>

						<div class="row" style="padding: 60px 0px">
						
						<div class="col">
							

							<div class="accordion" id="accordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
												Visa
											
											<i class="icon-plus icons" style="float: right;"></i>
											</a>
										</h4>
									</div>
									<div id="collapse1One" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
												Living in Sri lanka
											<i class="icon-plus icons" style="float: right;"></i>
											</a>
										</h4>
									</div>
									<div id="collapse1Two" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Three">
												Health and Sefety
											<i class="icon-plus icons" style="float: right;"></i>
											</a>
										</h4>
									</div>
									<div id="collapse1Three" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa.</p>
										</div>
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1four">
												International Student services 
											<i class="icon-plus icons" style="float: right;"></i>
											</a>
										</h4>
									</div>
									<div id="collapse1four" class="collapse">
										<div class="card-body">
											<p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

						</div>
					</div>

				</div>



			<div class="row">
							<div class="col-lg-12 text-center" style="padding-left: 0%">
								<p class="mt-4 mb-2" style="text-align: center; font-size: 45px;line-height: 47px; color: #000000">THINGS TO DO</br><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SRI LANKA</strong></p>
							</div>
			</div>
			<div class="container">
                        <div id="app" data-state="gallery">
                            <div class="gallery">
                                <div class="top">
                                    <div class="cta cta1">
                                        <figure class="gallery-image">
                                            <img src="{{static_asset('theme/img/projects/inter/alumni1.png')}}" />
                                        </figure>
                                    </div>
                                    <div class="cta cta2">
                                        <figure class="gallery-image">
                                            <img src="{{static_asset('theme/img/projects/inter/alumni2.png')}}" />
                                        </figure>
                                    </div>
                                    <header class="hero">
                                        <figure class="gallery-image">
                                            <img src="{{static_asset('theme/img/projects/inter/alumni3.png')}}" />
                                        </figure>
                                    </header>

                                    <div class="cta cta3">
                                        <figure class="gallery-image">
                                            <img src="{{static_asset('theme/img/projects/inter/alumni4.png')}}" />
                                        </figure>
                                    </div>
                                    <div class="cta cta4">
                                        <figure class="gallery-image">
                                            <img src="{{static_asset('theme/img/projects/inter/alumni5.png')}}" />
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

@endsection
@section('script')
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

  const animation = lastEl.animate([
    {
      transform: `translateX(${deltaX}px) translateY(${deltaY}px) scaleX(${deltaW}) scaleY(${deltaH})`
    },
    {
      transform: 'none'
    }
  ], {
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

    flipImages(elImage, elCloneImage, ()=>{
      elApp.dataset.state="detail";
    });

    function revert(){

      flipImages(elCloneImage, elImage, ()=>{
        elApp.dataset.state="gallery";
        elDetail.removeEventListener('click',revert);
      });

    }

    elDetail.addEventListener('click',revert);

  });
});
</script>
@endsection