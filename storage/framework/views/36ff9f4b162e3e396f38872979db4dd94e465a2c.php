<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#"><?php echo e(__('dashboard')); ?></a>
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

                    <?php if(Sentinel::getUser()->roles[0]->id != 4 && Sentinel::getUser()->roles[0]->id != 5): ?>
                    <li class="nav-item ">
                        <a class="nav-link <?php echo $__env->yieldContent('home'); ?>" href="<?php echo e(route('dashboard')); ?>">
                            <i class="fas fa-home fa-th-large"></i><?php echo e(__('dashboard')); ?>

                        </a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item ">
                        <a class="nav-link <?php echo $__env->yieldContent('home'); ?>" href="<?php echo e(route('user-account')); ?>">
                            <i class="fas fa-home fa-th-large"></i><?php echo e(__('profile')); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    

                    <?php if(Sentinel::getUser()->hasAccess(['theme_section_read']) || Sentinel::getUser()->hasAccess(['theme_section_write'])
                                        || Sentinel::getUser()->hasAccess(['theme_section_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('sections'); ?>" href="<?php echo e(route('sections')); ?>">
                                <i class="fas fa-cogs fa-th-large"></i><?php echo e(__('home_content')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    
                    

                   

                   
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('course'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('course-aria-expanded', 'aria-expanded=false'); ?> data-target="#submenu-113" aria-controls="submenu-113">
                            <i class="fas fa-fw fa-th-list"></i>Courses
                        </a>
                        <div id="submenu-113" class="collapse submenu <?php echo $__env->yieldContent('course-show'); ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('course-all'); ?>" href="<?php echo e(url('programs')); ?>">
                                        All Courses
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('course-active'); ?>" href="<?php echo e(url('programs/add')); ?>">
                                        Add New Course
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('course-edit'); ?>" href="javascript:void">
                                        Edit Course
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('course-module'); ?>" href="javascript:void">
                                        Modules
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('course-elective'); ?>" href="javascript:void">
                                        Electives
                                    </a>
                                </li>
                               <!--  <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('course-active2'); ?>" href="<?php echo e(route('notification-setting')); ?>">
                                        <?php echo e(__('settings')); ?>

                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>

                    <?php if(Sentinel::getUser()->hasAccess(['newsletter_read']) || Sentinel::getUser()->hasAccess(['newsletter_write']) || Sentinel::getUser()->hasAccess(['newsletter_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('newsletter_active'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('newsletter-aria-expanded', 'aria-expanded=false'); ?> data-target="#submenu-114" aria-controls="submenu-114">
                                <i class="fa fa-paper-plane"></i><?php echo e(__('newsletter')); ?>

                            </a>
                            <div id="submenu-114" class="collapse submenu <?php echo $__env->yieldContent('newsletter-show'); ?>">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('subscriber'); ?>" href="<?php echo e(route('subscriber-list')); ?>">
                                            <?php echo e(__('subscribers')); ?>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>

                    
                    

                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('form'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('form-aria-expanded', 'aria-expanded=false'); ?> data-target="#submenu-1130" aria-controls="submenu-1130">
                            <i class="fas fa-fw fa-space-shuttle"></i>Forms
                        </a>
                        <div id="submenu-1130" class="collapse submenu <?php echo $__env->yieldContent('form-show'); ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('form-contact'); ?>" href="<?php echo e(url('contact')); ?>">
                                        Contact Messages
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('form-inquiries'); ?>" href="<?php echo e(url('contact/inquiries')); ?>">
                                        Inquiries
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('form-appplication'); ?>" href="<?php echo e(url('contact/application')); ?>">
                                        Online Applications
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    

                    

                    <?php if(Sentinel::getUser()->hasAccess(['users_read']) || Sentinel::getUser()->hasAccess(['users_write']) || Sentinel::getUser()->hasAccess(['users_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('user-list'); ?>" href="<?php echo e(route('users-list')); ?>">
                                <i class="fas fa-fw fa-users"></i><?php echo e(__('users')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo $__env->yieldContent('settings_active'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('settings', 'aria-expanded=false'); ?> data-target="#submenu-111" aria-controls="submenu-111">
                            <i class="fas fa-fw fa-cog"></i><?php echo e(__('settings')); ?>

                        </a>
                        <div id="submenu-111" class="collapse submenu <?php echo $__env->yieldContent('s-show'); ?>">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('setting-general'); ?>" href="<?php echo e(route('setting-general')); ?>">
                                        <?php echo e(__('general_settings')); ?>

                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('setting-company'); ?>" href="<?php echo e(route('setting-company')); ?>">
                                        <?php echo e(__('company_informations')); ?>

                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('setting-email'); ?>" href="<?php echo e(route('setting-email')); ?>">
                                        <?php echo e(__('email_settings')); ?>

                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('setting-storage'); ?>" href="<?php echo e(route('setting-storage')); ?>">
                                        <?php echo e(__('storage_settings')); ?>

                                    </a>
                                </li>
                                
                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('setting-recaptcha'); ?>" href="<?php echo e(route('setting-recaptcha')); ?>">
                                        <?php echo e(__('recaptcha_settings')); ?>

                                    </a>
                                </li>

                                

                                <li class="nav-item ">
                                    <a class="nav-link <?php echo $__env->yieldContent('setting-ffmpeg'); ?>" href="<?php echo e(route('settings-ffmpeg')); ?>">
                                        <?php echo e(__('ffmpeg_settings')); ?>

                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    

                    <?php if(Sentinel::getUser()->hasAccess(['language_settings_read']) || Sentinel::getUser()->hasAccess(['language_settings_write']) || Sentinel::getUser()->hasAccess(['language_settings_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('language-setting'); ?>" href="<?php echo e(route('language-settings')); ?>">
                                <i class="fas fa-fw fa-globe"></i><?php echo e(__('language_settings')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

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
<?php /**PATH /shared/httpd/cirb/htdocs/Modules/Common/Providers/../Resources/views/layouts/left-sidebar.blade.php ENDPATH**/ ?>