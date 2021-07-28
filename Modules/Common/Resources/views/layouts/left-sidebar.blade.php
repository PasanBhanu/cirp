<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">{{__('dashboard')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item ">
                        <a class="nav-link" href="https://www.ewisnet.com" target="_bln_ewisnet">
                            <i class="fa fa-power-off fa-th-large"></i>Powered by Ewisnet
                        </a>
                    </li>

                    @if(Sentinel::getUser()->roles[0]->id != 4 && Sentinel::getUser()->roles[0]->id != 5)
                    <li class="nav-item ">
                        <a class="nav-link @yield('home')" href="{{ route('dashboard') }}">
                            <i class="fas fa-home fa-th-large"></i>{{__('dashboard')}}
                        </a>
                    </li>
                    @else
                    <li class="nav-item ">
                        <a class="nav-link @yield('home')" href="{{ route('user-account') }}">
                            <i class="fas fa-home fa-th-large"></i>{{__('profile')}}
                        </a>
                    </li>
                    @endif
                    

                    @if(Sentinel::getUser()->hasAccess(['theme_section_read']) || Sentinel::getUser()->hasAccess(['theme_section_write'])
                                        || Sentinel::getUser()->hasAccess(['theme_section_delete']))
                        <li class="nav-item">
                            <a class="nav-link @yield('sections')" href="{{ route('sections') }}">
                                <i class="fas fa-cogs fa-th-large"></i>{{ __('home_content') }}
                            </a>
                        </li>
                    @endif
                    
                    

                   

                   
                    <li class="nav-item">
                        <a class="nav-link @yield('course')" href="#" data-toggle="collapse" @yield('course-aria-expanded', 'aria-expanded=false') data-target="#submenu-113" aria-controls="submenu-113">
                            <i class="fas fa-fw fa-th-list"></i>Courses
                        </a>
                        <div id="submenu-113" class="collapse submenu @yield('course-show')">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link @yield('course-all')" href="{{ url('programs') }}">
                                        All Courses
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link @yield('course-active')" href="{{ url('programs/add') }}">
                                        Add New Course
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link @yield('course-edit')" href="javascript:void">
                                        Edit Course
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link @yield('course-module')" href="javascript:void">
                                        Modules
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link @yield('course-elective')" href="javascript:void">
                                        Electives
                                    </a>
                                </li>
                               <!--  <li class="nav-item ">
                                    <a class="nav-link @yield('course-active2')" href="{{ route('notification-setting') }}">
                                        {{ __('settings') }}
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>

                    @if(Sentinel::getUser()->hasAccess(['newsletter_read']) || Sentinel::getUser()->hasAccess(['newsletter_write']) || Sentinel::getUser()->hasAccess(['newsletter_delete']))
                        <li class="nav-item">
                            <a class="nav-link @yield('newsletter_active')" href="#" data-toggle="collapse" @yield('newsletter-aria-expanded', 'aria-expanded=false') data-target="#submenu-114" aria-controls="submenu-114">
                                <i class="fa fa-paper-plane"></i>{{__('newsletter')}}
                            </a>
                            <div id="submenu-114" class="collapse submenu @yield('newsletter-show')">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link @yield('subscriber')" href="{{ route('subscriber-list') }}">
                                            {{ __('subscribers') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif

                    
                    

                    <li class="nav-item">
                        <a class="nav-link @yield('form')" href="#" data-toggle="collapse" @yield('form-aria-expanded', 'aria-expanded=false') data-target="#submenu-1130" aria-controls="submenu-1130">
                            <i class="fas fa-fw fa-space-shuttle"></i>Forms
                        </a>
                        <div id="submenu-1130" class="collapse submenu @yield('form-show')">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link @yield('form-contact')" href="{{ url('contact') }}">
                                        Contact Messages
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link @yield('form-inquiries')" href="{{ url('contact/inquiries') }}">
                                        Inquiries
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link @yield('form-appplication')" href="{{ url('contact/application') }}">
                                        Online Applications
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    

                    

                    @if(Sentinel::getUser()->hasAccess(['users_read']) || Sentinel::getUser()->hasAccess(['users_write']) || Sentinel::getUser()->hasAccess(['users_delete']))
                        <li class="nav-item">
                            <a class="nav-link @yield('user-list')" href="{{route('users-list')}}">
                                <i class="fas fa-fw fa-users"></i>{{__('users')}}
                            </a>
                        </li>
                    @endif

                    
                    <li class="nav-item">
                        <a class="nav-link @yield('settings_active')" href="#" data-toggle="collapse" @yield('settings', 'aria-expanded=false') data-target="#submenu-111" aria-controls="submenu-111">
                            <i class="fas fa-fw fa-cog"></i>{{__('settings')}}
                        </a>
                        <div id="submenu-111" class="collapse submenu @yield('s-show')">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link @yield('setting-general')" href="{{ route('setting-general') }}">
                                        {{__('general_settings')}}
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link @yield('setting-company')" href="{{ route('setting-company') }}">
                                        {{__('company_informations')}}
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link @yield('setting-email')" href="{{ route('setting-email') }}">
                                        {{__('email_settings')}}
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link @yield('setting-storage')" href="{{ route('setting-storage') }}">
                                        {{__('storage_settings')}}
                                    </a>
                                </li>
                                
                                <li class="nav-item ">
                                    <a class="nav-link @yield('setting-recaptcha')" href="{{ route('setting-recaptcha') }}">
                                        {{__('recaptcha_settings')}}
                                    </a>
                                </li>

                                

                                <li class="nav-item ">
                                    <a class="nav-link @yield('setting-ffmpeg')" href="{{ route('settings-ffmpeg') }}">
                                        {{__('ffmpeg_settings')}}
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    

                    @if(Sentinel::getUser()->hasAccess(['language_settings_read']) || Sentinel::getUser()->hasAccess(['language_settings_write']) || Sentinel::getUser()->hasAccess(['language_settings_delete']))
                        <li class="nav-item">
                            <a class="nav-link @yield('language-setting')" href="{{route('language-settings')}}">
                                <i class="fas fa-fw fa-globe"></i>{{__('language_settings')}}
                            </a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="#"> </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"> </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
