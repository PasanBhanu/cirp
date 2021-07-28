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
                                    <label for="type">Intake : <?php echo e(date('M Y', strtotime($hm_sc->intake1))); ?></label>
                                    <input type="date" name="intake1" class="form-control" value="<?php echo e($hm_sc->intake1); ?>" required>
                                </div>
                            </div>

                            <div class="col-sm-12" id="category-area">
                                <div class="form-group">
                                    <label for="category_id">Sri Lankan Students</label>
                                    <input type="date" name="intake1_sl" class="form-control" value="<?php echo e($hm_sc->intake1_sl); ?>" required>
                                </div>
                            </div>

                            <div class="col-sm-12" id="category-area">
                                <div class="form-group">
                                    <label for="category_id">International Students</label>
                                    <input type="date" name="intake1_in" class="form-control" value="<?php echo e($hm_sc->intake1_in); ?>" required>
                                </div>
                            </div>
                            <hr />
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="type">Intake : <?php echo e(date('M Y', strtotime($hm_sc->intake2))); ?></label>
                                    <input type="date" name="intake2" class="form-control" value="<?php echo e($hm_sc->intake2); ?>" required>
                                </div>
                            </div>

                            <div class="col-sm-12" id="category-area">
                                <div class="form-group">
                                    <label for="category_id">Sri Lankan Students</label>
                                    <input type="date" name="intake2_sl" class="form-control" value="<?php echo e($hm_sc->intake2_sl); ?>" required>
                                </div>
                            </div>

                            <div class="col-sm-12" id="category-area">
                                <div class="form-group">
                                    <label for="category_id">International Students</label>
                                    <input type="date" name="intake2_in" class="form-control" value="<?php echo e($hm_sc->intake2_in); ?>" required>
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
                                        <input type="text" name="title" class="form-control" value="" required>
                                    </div>
                                    <div class="form-group" style="margin-left: -25px;">
                                        <label for="category_id">Description*</label>
                                        <input type="text" name="description" class="form-control" value="" required>
                                    </div>
                                    <div class="form-group" style="margin-left: -25px;">
                                        <label for="category_id">Checkout text*</label>
                                        <input type="text" name="checkout" class="form-control" value="" required>
                                    </div>
                                    <div class="form-group" style="margin-left: -25px;">
                                        <label for="category_id">Button 1 Title*</label>
                                        <input type="text" name="button1_title" class="form-control" value="" required>
                                    </div>
                                    <div class="form-group" style="margin-left: -25px;">
                                        <label for="category_id">Button 1 Link</label>
                                        <input type="text" name="button1_link" class="form-control" value="">
                                    </div>
                                    <div class="form-group" style="margin-left: -25px;">
                                        <label for="category_id">Button 2 Title*</label>
                                        <input type="text" name="button2_title" class="form-control" value="" required>
                                    </div>
                                    <div class="form-group" style="margin-left: -25px;">
                                        <label for="category_id">Button 2 Link</label>
                                        <input type="text" name="button2_link" class="form-control" value="">
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

                        <!-- START OF MEDIA TILE EDIT -->
                        <div class="add-new-page  bg-white p-20 m-b-20">
                            <div class="block-header m-b-20">
                                <h2>Customize Media Tile</h2>
                            </div>
                            <hr />
                            <?php echo Form::open(['route'=>'change-media','method' => 'post', 'enctype' => 'multipart/form-data']); ?>

                            <input type="text" name="type" value="media" hidden>
                            <div class="row p-l-25">
                                <img src="<?php echo e(static_asset($media[0]->image)); ?>" style="width: 100%;">
                                <h4 style="font: bolder; margin-top: 5px">Current title: <b style="font-weight: 700;"> <?php echo e($media[0]->title); ?> </b> </h4>
                                <div class="col-sm-12" id="category-area">
                                    <div class="form-group" style="margin-left: -25px;">
                                        <label for="category_id">Title*</label>
                                        <input type="text" name="title" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label style="margin-left: -25px;">Change image*</label>
                                    <div class="primary_section_style">
                                        <label class="custom-control custom-radio custom-control-inline" style="margin-left: -48px;">
                                            <input type="file" name="media_image" required="">

                                        </label>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 m-t-20">
                                    <div class="form-group form-float form-group-sm text-right">
                                        <button type="submit" name="btnsubmit" class="btn btn-primary pull-left"><i class="m-r-10 mdi mdi-plus-circle-outline"></i>Update Tile</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo Form::close(); ?>


                        </div>
                        <!-- End of Media Title Edit -->

                        <!-- START OF NEWS TILE EDIT -->
                        <div class="add-new-page  bg-white p-20 m-b-20">
                            <div class="block-header m-b-20">
                                <h2>Customize News Tile</h2>
                            </div>
                            <hr />
                            <?php echo Form::open(['route'=>'change-media','method' => 'post', 'enctype' => 'multipart/form-data']); ?>

                            <input type="text" name="type" value="news" hidden>
                            <div class="row p-l-25">
                                <img src="<?php echo e(static_asset($media[1]->image)); ?>" style="width: 100%;">
                                <h4 style="font: bolder; margin-top: 5px">Current title: <b style="font-weight: 700;"> <?php echo e($media[1]->title); ?> </b> </h4>
                                <div class="col-sm-12" id="category-area">
                                    <div class="form-group" style="margin-left: -25px;">
                                        <label for="category_id">Title*</label>
                                        <input type="text" name="title" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <label style="margin-left: -25px;">Change image*</label>
                                    <div class="primary_section_style">
                                        <label class="custom-control custom-radio custom-control-inline" style="margin-left: -48px;">
                                            <input type="file" name="media_image" required="">

                                        </label>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 m-t-20">
                                    <div class="form-group form-float form-group-sm text-right">
                                        <button type="submit" name="btnsubmit" class="btn btn-primary pull-left"><i class="m-r-10 mdi mdi-plus-circle-outline"></i>Update Tile</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo Form::close(); ?>


                        </div>
                        <!-- End of News Title Edit -->

                        <!-- Start of logos edit -->
                        <div class="add-new-page bg-white p-20 m-b-20">
                            <div class="block-header m-b-20">
                                <h2>Customize Logos</h2>
                            </div>
                            <hr />

                            <div class="block-header m-b-20">
                                <h2>Add New Logo</h2>
                            </div>
                            <?php echo Form::open(['route'=>'add-logo','method' => 'post', 'enctype' => 'multipart/form-data']); ?>

                            <div class="row p-l-25">

                                <div class="col-sm-12" id="category-area">
                                    <div class="form-group" style="margin-left: -25px;">
                                        <label for="category_id">Link*</label>
                                        <input type="text" name="link" class="form-control" value="" required>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12">
                                    <label style="margin-left: -25px;">Logo</label>
                                    <div class="primary_section_style">
                                        <label class="custom-control custom-radio custom-control-inline" style="margin-left: -48px;">
                                            <input type="file" name="logo" required="">

                                        </label>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 m-t-20">
                                    <div class="form-group form-float form-group-sm text-right">
                                        <button type="submit" name="btnsubmit" class="btn btn-primary pull-left"><i class="m-r-10 mdi mdi-plus-circle-outline"></i>Add Logo</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo Form::close(); ?>

                            <hr />
                            <div class="block-header m-b-20">
                                <h2>Added Logos</h2>
                            </div>

                            <?php $__currentLoopData = $logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="add-new-page  bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 10px; margin-bottom: 10px; position: relative">
                                <?php echo Form::open(['route'=>'delete-logo','method' => 'post']); ?>

                                <input type="text" name="id" value="<?php echo e($logo->id); ?>" hidden>
                                <button style="position: absolute; top: 5%; right: 5%" type="submit" name="btnsubmit" class="btn btn-danger pull-left"><i class="m-r-10 mdi mdi-delete"></i><?php echo e(__('delete')); ?></button>
                                <?php echo Form::close(); ?>

                                <img src="<?php echo e(static_asset($logo->image)); ?>" style="width: 100%;">
                                <table style="width:100%; margin-top: 5px">
                                    <tr>
                                        <th style="width: 30%">Link</th>
                                        <td><?php echo e($logo->link); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- End of logos edit -->
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

                            <!-- Start of tile section edit-->
                            <div class="col-12 col-lg-12">
                                <div class="add-new-page  bg-white p-20 m-b-20">
                                    <div class="block-header m-b-20">
                                        <h2>Customize "Why Study At" Tiles</h2>
                                    </div>

                                    <hr />
                                    <?php $__currentLoopData = $tiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="row" style="display: flex; justify-content: space-between;">
                                        <div class="add-new-page col-5" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 10px; margin-bottom: 10px; position: relative; margin-left: 30px;">
                                            <img src="<?php echo e(static_asset($tile->image)); ?>" style="width: 100%" />
                                            <table style="width: 100%;">
                                                <tr>
                                                    <th style="width: 30%">Title</th>
                                                    <td><?php echo e($tile->title); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Description</th>
                                                    <td><?php echo e($tile->text); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Button Link</th>
                                                    <td><?php echo e($tile->button_link); ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="add-new-page col-5" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 10px; margin-bottom: 10px; position: relative; margin-right: 30px">
                                            <div class="row p-l-25">
                                                <?php echo Form::open(['route'=>'update-tile','method' => 'post', 'enctype' => 'multipart/form-data']); ?>

                                                <div class="col-sm-12" id="category-area">
                                                    <input type="text" name="id" value="<?php echo e($tile->id); ?>" hidden>
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Title*</label>
                                                        <input type="text" name="title" class="form-control" value="" required>
                                                    </div>
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Description*</label>
                                                        <input type="text" name="description" class="form-control" value="" required>
                                                    </div>
                                                    <div class="form-group" style="margin-left: -25px;">
                                                        <label for="category_id">Button Link</label>
                                                        <input type="text" name="button_link" class="form-control" value="">
                                                    </div>

                                                </div>


                                                <div class="col-12 col-md-12">
                                                    <label style="margin-left: -25px;">Change image*</label>
                                                    <div class="primary_section_style">
                                                        <label class="custom-control custom-radio custom-control-inline" style="margin-left: -48px;">
                                                            <input type="file" name="tile_image" required="">

                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 m-t-20">
                                                        <div class="form-group form-float form-group-sm text-center">
                                                            <button type="submit" name="btnsubmit" class="btn btn-primary"><i class="m-r-10 mdi mdi-content-save-all"></i>Update Tile</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php echo Form::close(); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <!-- Start of tile section edit-->


                            <!-- START OF VIDEO EDIT -->
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header m-b-20">
                                    <h2>Customize Video Banner</h2>
                                </div>
                                <hr />
                                <input type="text" name="type" value="news" hidden>
                                <?php echo Form::open(['route'=>'change-video','method' => 'post', 'enctype' => 'multipart/form-data']); ?>

                                <div class="row p-l-25">
                                    <div>
                                        <a href="#" onclick="lightbox_open();">
                                            <img src="<?php echo e(static_asset($video[0]->video_thumbnail)); ?>" style="width: 100%;">
                                        </a>
                                    </div>

                                    <div id="light">
                                        <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                                        <video id="VisaChipCardVideo" width="800" controls height="600">
                                            <source src="<?php echo e(static_asset($video[0]->video_name)); ?>" type="video/mp4">
                                            <!--Browser does not support <video> tag -->
                                        </video>
                                    </div>
                                    <div id="fade" onClick="lightbox_close();"></div>

                                    <div class="col-12 col-md-12">
                                        <label style="margin-left: -25px;">Change Thumbnail*</label>
                                        <div class="primary_section_style">
                                            <label class="custom-control custom-radio custom-control-inline" style="margin-left: -48px;">
                                                <input type="file" name="thumbnail" required="">
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <label style="margin-left: -25px;">Mobile Thumbnail*</label>
                                        <div class="primary_section_style">
                                            <label class="custom-control custom-radio custom-control-inline" style="margin-left: -48px;">
                                                <input type="file" name="mobile_thumbnail" required="">
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <label style="margin-left: -25px;">Change Video*</label>
                                        <div class="primary_section_style">
                                            <label class="custom-control custom-radio custom-control-inline" style="margin-left: -48px;">
                                                <input type="file" name="video" required="">
                                            </label>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 m-t-20">
                                        <div class="form-group form-float form-group-sm text-right">
                                            <button type="submit" name="btnsubmit" class="btn btn-primary pull-left"><i class="m-r-10 mdi mdi-plus-circle-outline"></i>Update Tile</button>
                                        </div>
                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                            <!-- End of Video Edit -->

                        </div>

                        <style>
                            #fade {
                                display: none;
                                position: fixed;
                                top: 0%;
                                left: 0%;
                                width: 100%;
                                height: 100%;
                                background-color: black;
                                z-index: 1001;
                                -moz-opacity: 0.8;
                                opacity: .80;
                                filter: alpha(opacity=80);
                            }

                            #light {
                                display: none;
                                position: absolute;
                                top: 5%;
                                max-width: 800px;
                                max-height: 6000px;
                                margin-left: -300px;
                                margin-top: -180px;
                                border: 2px solid #FFF;
                                background: #FFF;
                                z-index: 1002;
                                overflow: visible;
                            }

                            #boxclose {
                                float: right;
                                cursor: pointer;
                                color: #fff;
                                border: 1px solid #AEAEAE;
                                border-radius: 3px;
                                background: #222222;
                                font-size: 31px;
                                font-weight: bold;
                                display: inline-block;
                                line-height: 0px;
                                padding: 11px 3px;
                                position: absolute;
                                right: 2px;
                                top: 2px;
                                z-index: 1002;
                                opacity: 0.9;
                            }

                            .boxclose:before {
                                content: "×";
                            }

                            #fade:hover~#boxclose {
                                display: none;
                            }

                            .test:hover~.test2 {
                                display: none;
                            }
                        </style>

                        <script>
                            window.document.onkeydown = function(e) {
                                if (!e) {
                                    e = event;
                                }
                                if (e.keyCode == 27) {
                                    lightbox_close();
                                }
                            }

                            function lightbox_open() {
                                var lightBoxVideo = document.getElementById("VisaChipCardVideo");
                                window.scrollTo(0, 0);
                                document.getElementById('light').style.display = 'block';
                                document.getElementById('fade').style.display = 'block';
                                lightBoxVideo.play();
                            }

                            function lightbox_close() {
                                var lightBoxVideo = document.getElementById("VisaChipCardVideo");
                                document.getElementById('light').style.display = 'none';
                                document.getElementById('fade').style.display = 'none';
                                lightBoxVideo.pause();
                            }
                        </script>
                        </script>

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
<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/cirp/htdocs/Modules/Appearance/Providers/../Resources/views/theme_section.blade.php ENDPATH**/ ?>