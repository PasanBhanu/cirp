<!DOCTYPE html>
<html>
<head>
    <title>CIRP : Log in to the site</title>
    <link rel="shortcut icon" href="{{static_asset('theme/img/logos/logo.png')}}"/>

   

<link rel="stylesheet" type="text/css" href="{{static_asset('theme/css/login.css')}}" />



    <link rel="stylesheet" href="{{static_asset('theme/vendor/fontawesome-free/css/all.min.css')}}">


<meta name="robots" content="noindex" />    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    #site-footer { padding: 0px !important; }
    </style>
</head>

<body  id="page-login-index" class="format-site  path-login safari dir-ltr lang-en yui-skin-sam yui3-skin-sam www-cirpstudents-com pagelayout-login course-1 context-1 content-only layout-option-langmenu">





<header id="header">


    <div class="header-main">
        <div class="container-fluid">
            <div class="header-logo">
              <a href="{{url('/')}}">
              <img src="{{static_asset('theme/img/cirp-new-logo1.png')}}" width="600" alt="Eguru">
              </a>
            </div>
            
            <div class="custom-menu hidden-desktop">
                <ul>
                    <li><a href="{{url('/')}}">Back to Home</a></li>
           
                </ul>
     
            </div>
            <div class="custom-menu visible-desktop">
                <ul>
                    <li><a href="{{url('/')}}">Back to Home</a></li>
                  
                </ul>
                
            </div>
      
            <div class="clearfix"></div>
                  <br>
             <div class="clearfix"></div>
            
         
        </div>
    </div>
    
</header>

<div class="custom-login-page">
    <div class="container-fluid">

        <div class="loginbox" style="padding-top: 30px;padding-bottom: 60px;">
            <h3>CIRP : Log in to the site</h3>
            <div class="formwrap">
                @include('site.partials.error')


                <form name="ragister-form" method="post" action="{{url('sitelogin')}}" style="padding-top: 30px;">
                    @csrf
                    <div class="alert alert-error" id="lemsg" style="display:none;">
                      &nbsp;
                    </div>
                    <div class="form-fields">
                        <label>Username</label>
                        <div class="textbox-wrap">
                            <input name="email" type="email" class="form-control" required="required" placeholder="{{ __('input_email') }}" />
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="form-fields">
                        <label>Password</label>
                        <div class="textbox-wrap">
                            <input name="password" type="password" class="form-control" required="required" placeholder="***********" />
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    

                    <div class="form-action" >
                        <label class="hidden-phone">&nbsp;</label>
                        <input type="submit" id="loginbtn1" value="Log in">
                    </div>


                    <div class="clearfix"></div>

                    @if( settingHelper('captcha_visibility') == 1 )
                        <div class="col-lg-12 text-center mb-4">
                            <div class="row">
                              {!! NoCaptcha::renderJs() !!}
                              {!! NoCaptcha::display() !!}
                          </div>
                        </div>
                    @endif
                    
                </form>
                <!-- Guest Access Start -->
                                <!-- Guest Access E.O -->
            </div>
        </div>

    </div>
</div>