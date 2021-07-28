<footer id="footer" class="mt-0">

    <div class="container my-4">
        <div class="row py-5">
            <div class="col-6 col-lg-4 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold mb-4" style="color: #000000">Contact Details</h5>
                <ul class="list list-icons list-icons-sm">
                    <li class=" mb-0 icon-location-pin" style="display: inline;"></li>
                    <li style="display: inline; color: #222;"><a  style="color: #222;"><?php echo e(settingHelper('address')); ?></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sri Lanka.</a></li>
                    </br>
                    <li class=" mb-0 icon-call-out icons" style="display: inline;"></li>
                    <li style="display: inline;"><a  style="color: #222;"><?php echo e(settingHelper('phone')); ?></a></li>
                    </br>
                    <li class=" mb-0 far fa-envelope" style="display: inline;"></li>
                    <li style="display: inline;"><a  style="color: #222;"> <?php echo e(settingHelper('email')); ?></a></li>
                    </br>
                    <li class=" mb-0 far fa-dot-circle" style="display: inline;"></li>
                    <li style="display: inline;"><a  style="color: #222;">Working : Mon–Sun 08.00am–5.00pm</a></li>
                    </br>
                </ul>
                <nav id="sub-menu" style="padding-left: 10px">
                        <ul class="social-icons mt-4">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li> &nbsp;
                            <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Twitter"><i class="fab fa-instagram"></i></a></li>&nbsp;
                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </nav>
            </div>
            <!--	<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

							<h5 class="text-5 text-transform-none font-weight-semibold mb-4 " style="color: #000000;">Contact Details</h5></br>
							<p class=" mb-0 icon-location-pin">&nbsp&nbsp230, Galle Road, Colombo 04,</p>
							<p class=" mb-0">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSri Lanka</p></br>
							<p class=" mb-0 icon-call-out icons">&nbsp&nbspPhone: +94 112 50 70 71 / 72</p></br>
							<p class=" mb-0 far fa-envelope">&nbsp&nbsp&nbsp&nbspEmail: <a href="mailto:mail@example.com" class="text-color-primary">info@ciihe.com</a></p></br></br>
							<p class=" mb-0 far fa-dot-circle">&nbsp&nbsp&nbsp&nbspWoking: <a>Mon–Sun 08.00am–5.00pm</a></p>
						</div>-->
            <div class="col-6 col-lg-2 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold mb-4" style="color: #000000">Links</h5>
                <ul class="list list-icons list-icons-sm">
                     <!-- <li><i class="fas fa-angle-right"></i><a href="<?php echo e(url('courses')); ?>" class="link-hover-style-1 ml-1"  style="color: #222;"> Courses</a></li> -->
                    <li><i class="fas fa-angle-right"></i><a href="" class="link-hover-style-1 ml-1"  style="color: #222;"> Privacy Policy</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="" class="link-hover-style-1 ml-1"  style="color: #222;"> FAQ</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold mb-4" style="color: #000000">Pages</h5>
                <ul class="list list-icons list-icons-sm">
                    <li><i class="fas fa-angle-right"></i><a href="<?php echo e(url('about-CIIHE')); ?>" class="link-hover-style-1 ml-1"  style="color: #222;"> About us</a></li>
                   <li><i class="fas fa-angle-right"></i><a href="<?php echo e(url('courses')); ?>" class="link-hover-style-1 ml-1"  style="color: #222;"> Courses</a></li>
                   
                    <li><i class="fas fa-angle-right"></i><a href="" class="link-hover-style-1 ml-1"  style="color: #222;"> Partner with us</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="" class="link-hover-style-1 ml-1"  style="color: #222;"> Careers</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="<?php echo e(url('contactus')); ?>" class="link-hover-style-1 ml-1"  style="color: #222;"> Contact us</a></li>
                </ul>
            </div>
            
            <div class="col-6 col-lg-4 mb-5 mb-lg-0">
                <h5 class="text-5 text-transform-none font-weight-semibold mb-4" style="color: #000000" >Newsletter</h5>
                <p class=" mb-1"  style="color: #222;">Stay updated on the latest information,</p>
                <p  style="color: #222;">Sign up for our Newsletter</p>
                <div class="alert alert-success d-none" id="newsletterSuccess"  style="color: #222;">
                    <strong>Success!</strong> You've been added to our email list.
                </div>
                <div class="alert alert-danger d-none" id="newsletterError"></div>
                <form action="<?php echo e(route('subscribe.newsletter')); ?>" method="POST" class="mw-100">
                    <?php echo csrf_field(); ?>
                    <div class="input-group input-group-rounded">
                        
                        
                        <input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..." name="email" type="email" required>
                        <span class="input-group-append">
										<button class="btn btn-primary text-color-light text-2 py-3 px-4" type="submit"><strong>SUBSCRIBE!</strong></button>
									</span>
                       
                    </div>
                </form>

            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <?php $v=base64_decode('PHA+Q29weXJpZ2h0ICZjb3B5OyBDSVJQIDIwMjEuIEFMTCBSSUdIVFMgUkVTRVJWRUQgfCBQb3dlcmVkIGJ5IDxhIGhyZWY9Imh0dHBzOi8vd3d3LmV3aXNuZXQuY29tIiB0YXJnZXQ9Il9ibG5fZXdpIj5Fd2lzbmV0IEludGVybmV0IFNvbHV0aW9uczwvYT48L3A+'); echo $v;?>
                </div>
                
            </div>
        </div>
    </div>
</footer>
<style>
    .fas.fa-chevron-up {
        display: none!important;
    }
</style><?php /**PATH /shared/httpd/cirp/htdocs/Modules/Site/Providers/../Resources/views/layouts/footer.blade.php ENDPATH**/ ?>