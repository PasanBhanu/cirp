@extends('site::layouts.master')
@section('style')
<style>
	@media only screen and (max-width: 600px) {
		.slider-container {
			padding-top: 80px !important;
			padding-bottom: 0px;
		}
	}

	.img-fluid {
		max-width: 68%;
		height: auto;
	}
</style>
@endsection
@section('content')
<div role="main" class="main">
	<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500],}">
			<ul>
				<li data-transition="fade">
					<img src="{{static_asset('theme/video/undergraduate-programs.png')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

					<div class="text-wrap-slider">

						<h1>Undergraduate Programs</h1>
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
	<!----------------------------->

	<?php //include 'search.php';
	?>

	<!---------------Bread cumbs------------------>
	<div class="container" style="padding-top: 20px">
		<ul style="padding: 0px 15px">
			<p>
				<a href="index.php" style="text-decoration: none;">Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
				<a href="#" style="text-decoration: none;">&nbsp;&nbsp;Courses &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
				<a href="#" style="text-decoration: none;">&nbsp;&nbsp;School of Psychology &nbsp;&nbsp;<i class="fas fa-angle-right"></i></a>
				<a href="#" style="text-decoration: none;">&nbsp;&nbsp;Diplomas & Undergraduate Courses</a>
			</p>

		</ul>
	</div>
	<!----------------------------------------------->

	<!------------------------------------------------>
	<h2 class="mb-2" style="text-align: center; padding-top: 50px">COURSES</h2>
	<!---------------------------------------->

	<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
		<div class="container">

			<div class="row">
				<div class="col">



					<div class="row align-items-center">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="Diploma-of-Higher-Education-in-Psychology.php">Diploma of Higher Education in Psychology</a></h2>
							<p style="text-align: justify;">If you are fascinated by the human mind and would like to explore the different areas of
								functioning of the brain and the mind, this is the ideal program for you. Upon completion
								you are able to branch in to any area in psychology. So if you are not certain about what
								kind of a profession in psychology you would like to get in to, this will be your opportunity
								to cover all core areas. Check out the modules to get a better idea.
							</p>



							<div class="trans-wrapper">
								<div class="trans-item"><span style="font-weight: bold;">Progression :</span> <span> BSc / BA (Hons) Psychology </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Transfer Options :</span> <span> UK, Australia</span></div>
								<div class="trans-item"><span style="font-weight: bold;">Duration :</span> <span> 02 Years</span></div>
								<div class="trans-item"> <span style="font-weight: bold;">Delivery :</span> <span> Full Time / Part Time </span></div>
							</div>

						</div>
						<div class="col-md-4 px-5 px-md-5">
							<img class="img-fluid scale-2 my-2" src="{{static_asset('theme/img/courses/psychology.png')}}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--------------------------------------------------->
	<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
		<div class="container">

			<div class="row">
				<div class="col">


					<div class="row align-items-center">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="Diploma-of-Higher-Education-in-Psychology-&-Business.php">Diploma of Higher Education in Psychology & Business</a></h2>
							<p style="text-align: justify;">Millions of Business graduates are passing out of universities every year making the
								competition to find a good job intense by the day. Most jobs in the organizations are
								replaced by software and apps . Become a master in influencing the human mind that the
								machines will not be able to do. Start your path to become a business leader, corporate
								trainer or consultant. Check out the modules to get a better idea.
							</p>

							<div class="trans-wrapper">
								<div class="trans-item"><span style="font-weight: bold;">Progression :</span> <span> BSc /BA Psychology / Business </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Transfer Options :</span> <span> UK, Australia</span></div>
								<div class="trans-item"><span style="font-weight: bold;">Duration :</span> <span> 02 Years</span></div>
								<div class="trans-item"> <span style="font-weight: bold;">Delivery :</span> <span> Full Time / Part Time </span></div>
							</div>
						</div>
						<div class="col-md-4 px-5 px-md-5">
							<img class="img-fluid scale-2 my-2" src="{{static_asset('theme/img/courses/psychology & business.png')}}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!------------------------------------------------------------------------>
	<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
		<div class="container">

			<div class="row">
				<div class="col">


					<div class="row align-items-center">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="Diploma-of-Higher-Education-in-Psychology-&-HRM.php">Diploma of Higher Education in Psychology & HRM</a></h2>
							<p style="text-align: justify;">Future of Managing Human Resources is all about positively influencing the mind of
								employees. All new trends in HRM such as work-life balance, quality of life, stress
								management and coaching are all based on psychological applications. Become a top
								HR Professional with a combined degree in Psychology & HRM. Stand our from the rest
								Of the HR graduates for better prospects. Check out the modules to get a better idea.
							</p>

							<div class="trans-wrapper">
								<div class="trans-item"><span style="font-weight: bold;">Progression :</span> <span> BSc /BA Psychology / HRM </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Transfer Options :</span> <span> UK, Australia , NZ </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Duration :</span> <span> 02 Years</span></div>
								<div class="trans-item"> <span style="font-weight: bold;">Delivery :</span> <span> Full Time / Part Time </span></div>
							</div>
						</div>
						<div class="col-md-4 px-5 px-md-5">
							<img class="img-fluid scale-2 my-2" src="{{static_asset('theme/img/courses/psuchology & hr.png')}}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!------------------------------------------------------------------------>
	<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
		<div class="container">

			<div class="row">
				<div class="col">


					<div class="row align-items-center">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="Diploma-of-Higher-Education-in-Psychology-&-Marketing.php">Diploma of Higher Education in Psychology & Marketing</a></h2>
							<p style="text-align: justify;">Planning to become a leading professional in Marketing, Advertising or Branding?
								Emerging fields of social media marketing and other futuristic advertising and branding strategies
								are based on consumer research, profiling, data analysis and predicting human behavior. Combining
								marketing with psychology will set you apart from the traditional marketer and pave to your way to
								become a leader in the field. Check out the modules to get a better idea.
							</p>

							<div class="trans-wrapper">
								<div class="trans-item"><span style="font-weight: bold;">Progression :</span> <span> BSc /BA Psychology / Marketing </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Transfer Options :</span> <span> UK, Australia , NZ </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Duration :</span> <span> 02 Years</span></div>
								<div class="trans-item"> <span style="font-weight: bold;">Delivery :</span> <span> Full Time / Part Time </span></div>
							</div>
						</div>
						<div class="col-md-4 px-5 px-md-5">
							<img class="img-fluid scale-2 my-2" src="{{static_asset('theme/img/courses/psychology & marketing.png')}}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!------------------------------------------------------------------------>
	<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
		<div class="container">

			<div class="row">
				<div class="col">


					<div class="row align-items-center">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="Diploma-of-Higher-Education-in-Psychology-&-Sports-Science.php">Diploma of Higher Education in Psychology & Sports Science</a></h2>
							<p style="text-align: justify;">Did you spend more time in the school grounds or the gym than the class room?
								Why give up your passion for sports for higher education? Combine the two instead, to take up
								rewarding and exciting careers in the sports field as a sports psychologist, Coach, Trainer
								and many other related professions. Study the scientific aspect of sports and how our mind
								could be trained create champions. Check out the modules to get a better idea.
							</p>

							<div class="trans-wrapper">
								<div class="trans-item"><span style="font-weight: bold;">Progression :</span> <span> BSc /BA Psychology / Sports Science </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Transfer Options :</span> <span> UK, Australia , NZ </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Duration :</span> <span> 02 Years</span></div>
								<div class="trans-item"> <span style="font-weight: bold;">Delivery :</span> <span> Full Time / Part Time </span></div>
							</div>
						</div>
						<div class="col-md-4 px-5 px-md-5">
							<img class="img-fluid scale-2 my-2" src="{{static_asset('theme/img/courses/sports & science.png')}}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!------------------------------------------------------------------------>
	<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
		<div class="container">

			<div class="row">
				<div class="col">


					<div class="row align-items-center">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="Diploma-of-Higher-Education-in-Psychology-&-Childcare.php">Diploma of Higher Education in Psychology & Childcare</a></h2>
							<p style="text-align: justify;">Love working with children? A nurturer by nature?
								Sign up for the Child care specialization of the DHEP program range. If you aspire to become
								a child psychologist, educational psychologist, Special needs teacher or would like to have
								your own pre-school or day care one day this is your ideal program. It’s time to convert your
								love for children in to a rewarding career. Check out the modules to get a better idea.
							</p>

							<div class="trans-wrapper">
								<div class="trans-item"><span style="font-weight: bold;">Progression :</span> <span> BSc /BA Psychology / Child Care </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Transfer Options :</span> <span> UK, Australia , NZ </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Duration :</span> <span> 02 Years</span></div>
								<div class="trans-item"> <span style="font-weight: bold;">Delivery :</span> <span> Full Time / Part Time </span></div>
							</div>
						</div>
						<div class="col-md-4 px-5 px-md-5">
							<img class="img-fluid scale-2 my-2" src="{{static_asset('theme/img/courses/psychology & childcare.png')}}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!------------------------------------------------------------------------>
	<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
		<div class="container">

			<div class="row">
				<div class="col">


					<div class="row align-items-center">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="Diploma-of-Higher-Education-in-Psychology-&-Counselling.php">Diploma of Higher Education in Psychology & Counselling</a></h2>
							<p style="text-align: justify;">Are you a good listener with a kind heart to and a passion to support people in difficult
								Situations. Then this course could bring out your true calling to become a healer of the mind.
								Start your path to become a counselor or a counseling psychologist with this qualification.
								You will cover core modules in psychology along with modules designed to groom you to
								Become an excellent therapist in the future. Check out the modules to get a better idea.
							</p>

							<div class="trans-wrapper">
								<div class="trans-item"><span style="font-weight: bold;">Progression :</span> <span> BSc /BA Psychology / Counseling </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Transfer Options :</span> <span> UK, Australia , NZ </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Duration :</span> <span> 02 Years</span></div>
								<div class="trans-item"> <span style="font-weight: bold;">Delivery :</span> <span> Full Time / Part Time </span></div>
							</div>
						</div>
						<div class="col-md-4 px-5 px-md-5">
							<img class="img-fluid scale-2 my-2" src="{{static_asset('theme/img/courses/psycology & counselling.png')}}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!------------------------------------------------------------------------>
	<section class="section bg-color-grey section-height-2 border-0 mt-5 mb-0">
		<div class="container">

			<div class="row">
				<div class="col">


					<div class="row align-items-center">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="Diploma-of-Higher-Education-in-Psychology-&-Criminology.php">Diploma of Higher Education in Psychology & Criminology</a></h2>
							<p style="text-align: justify;">This program is for those who are curious about the minds of criminals as well as those who Are
								passionate about fighting crimes using science. If you imagine yourself interviewing, profiling,
								treating and rehabilitating offenders one day, a degree that combines psychology and criminology
								is the best choice. You could continue your studies to become a forensic or a criminal psychologist,
								a consultant law enforcement ect. Check out the modules to get a better idea.
							</p>

							<div class="trans-wrapper">
								<div class="trans-item"><span style="font-weight: bold;">Progression :</span> <span> BSc /BA Psychology / Criminology </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Transfer Options :</span> <span> UK, Australia , NZ </span></div>
								<div class="trans-item"><span style="font-weight: bold;">Duration :</span> <span> 02 Years</span></div>
								<div class="trans-item"> <span style="font-weight: bold;">Delivery :</span> <span> Full Time / Part Time </span></div>
							</div>
						</div>
						<div class="col-md-4 px-5 px-md-5">
							<img class="img-fluid scale-2 my-2" src="{{static_asset('theme/img/courses/psychology criminology.png')}}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!------------------------------------------------------------------------>

	<!------------------------------------------------------------------------>

</div>

</div>
</div>

</div>



<!----------------------------------------------->
@endsection