<?php $__env->startSection('sections'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
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
                            </div>
                            <!-- Main Content section start -->
                            <div class="col-12 col-lg-5">
                                <?php echo Form::open(['route'=>'intakes-update','method' => 'post', 'id' => 'save-new-section']); ?>

                                    <div class="add-new-page  bg-white p-20 m-b-20">
                                        <div class="block-header">
                                            <h2>Registration Deadline</h2>
                                        </div>


                                        

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="type">Intake  : <?php echo e(date('M Y', strtotime($hm_sc->intake1))); ?></label>
                                                <input type="date" name="intake1"  class="form-control" value="<?php echo e($hm_sc->intake1); ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12" id="category-area">
                                            <div class="form-group">
                                                <label for="category_id">Sri Lankan Students</label>
                                                <input type="date" name="intake1_sl"  class="form-control" value="<?php echo e($hm_sc->intake1_sl); ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12" id="category-area">
                                            <div class="form-group">
                                                <label for="category_id">International Students</label>
                                                <input type="date" name="intake1_in"  class="form-control" value="<?php echo e($hm_sc->intake1_in); ?>" required>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="type">Intake : <?php echo e(date('M Y', strtotime($hm_sc->intake2))); ?></label>
                                                <input type="date" name="intake2"  class="form-control" value="<?php echo e($hm_sc->intake2); ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12" id="category-area">
                                            <div class="form-group">
                                                <label for="category_id">Sri Lankan Students</label>
                                                <input type="date" name="intake2_sl"  class="form-control" value="<?php echo e($hm_sc->intake2_sl); ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12" id="category-area">
                                            <div class="form-group">
                                                <label for="category_id">International Students</label>
                                                <input type="date" name="intake2_in"  class="form-control" value="<?php echo e($hm_sc->intake2_in); ?>" required>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-12 m-t-20">
                                                <div class="form-group form-float form-group-sm text-right">
                                                    <button type="submit" name="btnsubmit" class="btn btn-primary pull-right">Update Intakes</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php echo Form::close(); ?>

                                <!-- START OF SLIDESHOW EDIT -->
                                    <div class="add-new-page  bg-white p-20 m-b-20">
                                        <div class="block-header m-b-20">
                                            <h2>Customize Slideshow</h2>
                                        </div>
                                        <hr />

                                        <div class="block-header m-b-20">
                                            <h2>Add New Slide</h2>
                                        </div>
                                        <?php echo Form::open(['route'=>'add-slide','method' => 'post', 'enctype' => 'multipart/form-data']); ?>

                                                <div class="row p-l-25">

                                                <div class="col-sm-12" id="category-area">
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Title*</label>
                                                        <input type="text" name="title"  class="form-control" value="" required>
                                                    </div>
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Description*</label>
                                                        <input type="text" name="description"  class="form-control" value="" required>
                                                    </div>
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Checkout text*</label>
                                                        <input type="text" name="checkout"  class="form-control" value="" required>
                                                    </div>
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Button 1 Title*</label>
                                                        <input type="text" name="button1_title"  class="form-control" value="" required>
                                                    </div>
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Button 1 Link</label>
                                                        <input type="text" name="button1_link"  class="form-control" value="">
                                                    </div>
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Button 2 Title*</label>
                                                        <input type="text" name="button2_title"  class="form-control" value="" required>
                                                    </div>
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Button 2 Link</label>
                                                        <input type="text" name="button2_link"  class="form-control" value="">
                                                    </div>
                                                </div>


                                                    <div class="col-12 col-md-12">
                                                        <label style="margin-left: -25px;">Slide image*</label>
                                                        <div class="primary_section_style">
                                                            <label class="custom-control custom-radio custom-control-inline" style="margin-left: -48px;">
                                                                <input type="file" name="primary_image" required="">
                                                               
                                                            </label>
                                                           
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-12">
                                                        <label style="margin-left: -25px;">Slide image (Mobile)*</label>
                                                        <div class="primary_section_style">
                                                            <label class="custom-control custom-radio custom-control-inline" style="margin-left: -48px;">
                                                                <input type="file" name="mobile_image" required="">
                                                               
                                                            </label>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 m-t-20">
                                                        <div class="form-group form-float form-group-sm text-right">
                                                            <button type="submit" name="btnsubmit" class="btn btn-primary pull-left"><i class="m-r-10 mdi mdi-plus-circle-outline"></i>Add Slide</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php echo Form::close(); ?>


                                        <hr />
                                        <div class="block-header m-b-20">
                                            <h2>Added Slides</h2>
                                        </div>

                                        <?php $__currentLoopData = $slideshows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="add-new-page  bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 10px; margin-bottom: 10px; position: relative">
                                            <?php echo Form::open(['route'=>'delete-slide','method' => 'post']); ?>

                                            <input type="text" name="id" value="<?php echo e($slide->id); ?>" hidden>
                                            <button style="position: absolute; top: 5%; right: 5%" type="submit" name="btnsubmit" class="btn btn-danger pull-left"><i class="m-r-10 mdi mdi-delete"></i><?php echo e(__('delete')); ?></button>
                                            <?php echo Form::close(); ?>

                                            <img src="<?php echo e(static_asset($slide->image)); ?>" style="width: 100%;">
                                            <table style="width:100%; margin-top: 5px">
                                                <tr>
                                                    <th style="width: 30%">Title</th>
                                                    <td><?php echo e($slide->title); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Description</th>
                                                    <td><?php echo e($slide->description); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Checkout text</th>
                                                    <td><?php echo e($slide->checkout); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Button 1 Title</th>
                                                    <td><?php echo e($slide->button1_title); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Button 2 Title</th>
                                                    <td><?php echo e($slide->button2_title); ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </div>
                                    <!-- END OF SLIDESHOW EDIT -->
                                </div>
                            <!-- Main Content section end -->

                            <!-- right sidebar start -->
                            <div class="col-12 col-lg-7">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="add-new-page  bg-white p-20 m-b-20">
                                            <div class="block-header m-b-20">
                                                <h2>Join Before Image (2267px X 484px)</h2>
                                            </div>


                                            <img src="<?php echo e(static_asset($hm_sc->join_image)); ?>" style="width: 100%;">
                                            <?php echo Form::open(['route'=>'join-before-update','method' => 'post', 'enctype' => 'multipart/form-data']); ?>

                                                <div class="row p-l-25">

                                                    <div class="col-12 col-md-12">
                                                        <div class="primary_section_style">
                                                            <label class="custom-control custom-radio custom-control-inline">
                                                                <input type="file" name="primary_image" required="">
                                                               
                                                            </label>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 m-t-20">
                                                        <div class="form-group form-float form-group-sm text-right">
                                                            <button type="submit" name="btnsubmit" class="btn btn-primary pull-right"><i class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('update_section')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php echo Form::close(); ?>

                                        </div>
                                    </div>



                                    <!-- {--<div class="col-md-12">
                                        <div class="add-new-page  bg-white p-20 m-b-20">
                                            <div class="block-header m-b-20">
                                            <h2><?php echo e(__('sections')); ?></h2>
                                            </div>
                                            <div class="table-responsive all-pages">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr role="row">
                                                            <th><?php echo e(__('section_label')); ?></th>
                                                            <th><?php echo e(__('status')); ?></th>
                                                            <th><?php echo e(__('show_ad_in_bottom')); ?></th>
                                                            <th><?php echo e(__('order')); ?></th>
                                                            <th><?php echo e(__('section_style')); ?></th>
                                                            <?php if(Sentinel::getUser()->hasAccess(['theme_section_write']) || Sentinel::getUser()->hasAccess(['theme_section_delete'])): ?>
                                                            <th><?php echo e(__('options')); ?></th>
                                                            <?php endif; ?>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                        <form action="<?php echo e(route('update-section-order')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <input type="hidden" name="sections[]" value="<?php echo e($section->id); ?>">
                                                            <tr role="row" class="odd" id="row_<?php echo e($section->id); ?>">
                                                                <td><?php echo e($section->type == 1? $section->label: __($section->label)); ?></td>
                                                                <td>
                                                                    <?php if($section->status == 1): ?>
                                                                        <label class="label label-success label-table"><?php echo e(__('active')); ?></label>
                                                                    <?php else: ?>
                                                                        <label class="label label-default label-table"><?php echo e(__('inactive')); ?></i></label>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td><?php echo e($section->ad->ad_name ?? __('none')); ?></td>
                                                                <td><input type="number" name="orders[<?php echo e($section->id); ?>]" class="form-control" value="<?php echo e($section->order); ?>"></td>
                                                                <td><?php echo e($section->section_style); ?></td>
                                                                <?php if(Sentinel::getUser()->hasAccess(['theme_section_write']) || Sentinel::getUser()->hasAccess(['theme_section_delete'])): ?>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <button class="btn bg-primary dropdown-toggle btn-select-option" type="button" data-toggle="dropdown">...
                                                                                <span class="caret"></span>
                                                                            </button>
                                                                            <ul class="dropdown-menu options-dropdown">
                                                                                <?php if(Sentinel::getUser()->hasAccess(['theme_section_write'])): ?>
                                                                                    <li>
                                                                                        <a href="<?php echo e(route('edit-theme-section',['id'=>$section->id])); ?>"><i class="fa fa-edit option-icon"></i><?php echo e(__('edit')); ?></a>
                                                                                    </li>
                                                                                <?php endif; ?>
                                                                                <?php if(Sentinel::getUser()->hasAccess(['theme_section_delete'])): ?>
                                                                                    <li>
                                                                                        <a href="javascript:void(0)" onclick="delete_item('theme_sections','<?php echo e($section->id); ?>')"><i class="fa fa-trash option-icon"></i><?php echo e(__('delete')); ?></a>
                                                                                    </li>
                                                                                <?php endif; ?>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                <?php endif; ?>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </tbody>

                                                </table>
                                                <div class="row mb-3">
                                                    <div class="col-12 m-t-20">
                                                        <div class="form-group form-float form-group-sm text-right">
                                                            <button type="submit" name="btnsubmit" class="btn btn-primary pull-right"><i class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('update')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="block-header">
                                                        <h2><?php echo e(__('showing')); ?> <?php echo e($sections->firstItem()); ?> <?php echo e(__('to')); ?> <?php echo e($sections->lastItem()); ?>

                                                            of <?php echo e($sections->total()); ?> <?php echo e(__('entries')); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 text-right">
                                                    <div class="table-info-pagination float-right">
                                                        <nav aria-label="Page navigation example">
                                                            <?php echo $sections->render(); ?>

                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}-->

                                </div>
                            </div>
                            <!-- right sidebar end -->
                        </div>
                    </div>
                </div>
            <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/cirb/htdocs/Modules/Appearance/Providers/../Resources/views/theme_section.blade.php ENDPATH**/ ?>