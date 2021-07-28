<?php $__env->startSection('settings'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('s-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('settings_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('setting-storage'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php if(session('error')): ?>
                <div id="error_m" class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
            <?php if(session('success')): ?>
                <div id="success_m" class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <input type="hidden" name="url" id="url" value="<?php echo e(url('/')); ?>">

            <div class="row clearfix">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="add-new-page  bg-white p-0 m-b-20">

                                <nav>
                                    <div class="nav m-b-20 setting-tab" id="nav-tab" role="tablist">

                                        <a class="nav-item nav-link" id="general-settings"
                                           href="<?php echo e(route('setting-general')); ?>"
                                           role="tab"><?php echo e(__('general_settings')); ?></a>
                                        <a class="nav-item nav-link" id="contact-settings"
                                           href="<?php echo e(route('setting-company')); ?>"
                                           role="tab"><?php echo e(__('company_informations')); ?></a>
                                        <a class="nav-item nav-link" id="mail-settings"
                                           href="<?php echo e(route('setting-email')); ?>" role="tab"><?php echo e(__('email_settings')); ?></a>
                                        <a class="nav-item nav-link active" id="storage-settings"
                                           href="<?php echo e(route('setting-storage')); ?>"
                                           role="tab"><?php echo e(__('storage_settings')); ?></a>
                                        
                                        <a class="nav-item nav-link" id="recaptcha-settings"
                                           href="<?php echo e(route('setting-recaptcha')); ?>"
                                           role="tab"><?php echo e(__('recaptcha_settings')); ?></a>
                                        

                                        <a class="nav-item nav-link" id="setting-ffmpeg"
                                           href="<?php echo e(route('settings-ffmpeg')); ?>" role="tab"><?php echo e(__('ffmpeg_settings')); ?></a> 
                                              
                                        

                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="tab-content" id="nav-tabContent">

                                    <!-- single tab content start -->
                                    <div class="tab-pane fade show active" id="storage_settings" role="tabpanel">
                                        <?php echo Form::open(['route' => 'update-settings', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'update-settings']); ?>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="default_storage"
                                                       class="col-form-label"><?php echo e(__('default_storage')); ?></label>
                                                <select name="default_storage" id="default_storage"
                                                        class="form-control">
                                                    <option <?php if( settingHelper('default_storage') =='local'): ?> selected
                                                            <?php endif; ?> value="local">local
                                                    </option>
                                                    <option <?php if( settingHelper('default_storage') =='s3'): ?> selected
                                                            <?php endif; ?> value="s3">AWS s3
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div <?php if( settingHelper('default_storage') =='local'): ?>
                                             <?php endif; ?> class="inputFilds display-nothing" id="s3Div">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="aws_access_key_id"
                                                           class="col-form-label"><?php echo e(__('aws_access_key_id')); ?></label>
                                                    <input name="aws_access_key_id"
                                                           value=""
                                                           id="aws_access_key_id" class="form-control" type="text"
                                                           placeholder="<?php echo e(__('aws_access_key_id')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="aws_secret_access_key"
                                                           class="col-form-label"><?php echo e(__('aws_secret_access_key')); ?></label>
                                                    <input name="aws_secret_access_key"
                                                           value=""
                                                           id="aws_secret_access_key" class="form-control" type="text"
                                                           placeholder="<?php echo e(__('aws_secret_access_key')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="aws_default_region"
                                                           class="col-form-label"><?php echo e(__('aws_default_region')); ?></label>
                                                    <input name="aws_default_region"
                                                           value=""
                                                           id="aws_default_region" class="form-control" type="text"
                                                           placeholder="<?php echo e(__('aws_default_region')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="aws_bucket"
                                                           class="col-form-label"><?php echo e(__('aws_bucket')); ?></label>
                                                    <input name="aws_bucket" value=""
                                                           id="aws_bucket" class="form-control" type="text"
                                                           placeholder="<?php echo e(__('aws_bucket')); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 m-t-20">
                                                <div class="form-group form-float form-group-sm text-right">
                                                    <button type="submit" name="status"
                                                            class="btn btn-primary pull-right"><i
                                                            class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save_changes')); ?>

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php echo e(Form::close()); ?>

                                    </div>
                                    <!-- single tab content end -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--  tab end -->
                </div>
            </div>
            <!-- right sidebar end -->
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/cirp/htdocs/Modules/Setting/Providers/../Resources/views/storage_setting.blade.php ENDPATH**/ ?>