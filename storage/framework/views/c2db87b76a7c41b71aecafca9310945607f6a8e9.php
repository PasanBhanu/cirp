<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <?php echo $__env->make('site::partials.seo_og', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title><?php echo e(settingHelper('seo_title')); ?></title>

    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(static_asset('theme/img/logos/logo.png')); ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo e(static_asset('theme/img/logos/logo.png')); ?>">


    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/animate/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/simple-line-icons/css/simple-line-icons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/owl.carousel/assets/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/magnific-popup/magnific-popup.min.css')); ?>">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/css/theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/css/theme-elements.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/css/theme-blog.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/css/theme-shop.css')); ?>">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/rs-plugin/css/settings.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/rs-plugin/css/layers.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/rs-plugin/css/navigation.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/vendor/circle-flip-slideshow/css/component.css')); ?>">

    <!-- Demo CSS -->

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/css/skins/default.css')); ?>">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(static_asset('theme/css/custom.css')); ?>">

    <!-- Head Libs -->
    <script src="<?php echo e(static_asset('theme/vendor/modernizr/modernizr.min.js')); ?>"></script>
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 25px;
            right: 90px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }
        
        .my-float {
            margin-top: 16px;
        }
    </style>
    <style>
        @media  only screen and (max-width: 600px) 
            {
            .header-logo-desktop{
                display: none!important;
                    }
            }

        @media  only screen and (min-width: 600px) 
            {
            .header-logo-mobi{
                display: none!important;
                    }
            }

        @media  only screen and (max-width: 600px) 
        {
        .top-new{
            display: none!important;
                }
        }
    </style>
    <?php echo $__env->yieldContent('style'); ?>

    <style>
        @media  only screen and (max-width: 600px) {
            hide-box {
                visibility: hidden;
            }
        }
    </style>

    
    <link rel="icon" href="<?php echo e(static_asset(''.settingHelper('favicon'))); ?>">

    <?php if(settingHelper('predefined_header')!=null): ?>
        <?php echo settingHelper('predefined_header'); ?>

    <?php endif; ?>
    <?php if(settingHelper('custom_header_style')!=null): ?>
        <style>
            <?php echo settingHelper('custom_header_style'); ?>

        </style>
    <?php endif; ?>

    <?php echo $__env->make('feed::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <?php echo $__env->yieldPushContent('style'); ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(settingHelper('google_analytics_id')); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo e(settingHelper('google_analytics_id')); ?>');
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 000}">

<!-- include('site::layouts.widgets') -->
<div class="body">
<?php echo $__env->make('site::layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>
    
<?php echo $__env->make('site::layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>



    <script src="<?php echo e(static_asset('theme/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/jquery.appear/jquery.appear.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/jquery.cookie/jquery.cookie.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/popper/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/common/common.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/jquery.validation/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/jquery.gmap/jquery.gmap.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/jquery.lazyload/jquery.lazyload.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/isotope/jquery.isotope.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/vide/jquery.vide.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/vivus/vivus.min.js')); ?>"></script>
<?php echo $__env->yieldPushContent('script'); ?>
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo e(static_asset('theme/js/theme.js')); ?>"></script>

    <!-- Current Page Vendor and Views -->
    <script src="<?php echo e(static_asset('theme/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')); ?>"></script>
    <script src="<?php echo e(static_asset('theme/js/views/view.home.js')); ?>"></script>

    <!-- Theme Custom -->
    <script src="<?php echo e(static_asset('theme/js/custom.js')); ?>"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo e(static_asset('theme/js/theme.init.js')); ?>"></script>

    <script>
        $(document).ready(function() {

            // Fakes the loading setting a timeout
            setTimeout(function() {
                $('body').addClass('loaded');
            }, 3500);

        });
    </script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>





    <?php /**PATH /shared/httpd/cirp/htdocs/Modules/Site/Providers/../Resources/views/layouts/master.blade.php ENDPATH**/ ?>