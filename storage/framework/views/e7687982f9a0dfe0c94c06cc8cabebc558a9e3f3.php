<?php $__env->startSection('course-aria-expanded'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('course-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('course'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('course-all'); ?>
    active
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <div class="admin-section">
                <div class="row clearfix m-t-30">
                    <div class="col-12">
                        <div class="col-12">
                           
                            <?php if(session('success')): ?>
                                <div id="success_m" class="alert alert-success">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?>
                            
                        </div>
                        <div class="navigation-list bg-white p-20">
                            <div class="add-new-header clearfix m-b-20">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="block-header">
                                            <h2>All Courses</h2>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="<?php echo e(url('programs/add')); ?>"
                                           class="btn btn-primary btn-sm btn-add-new"><i class="mdi mdi-plus"></i>
                                            Create new Course
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" all-pages">
                                <!-- Table Filter -->
                                <div class="row table-filter-container m-b-20">
                                    <div class="col-sm-12">
                                        <?php echo Form::open(['url' => 'programs/filter','method' => 'GET']); ?>

                                        <input type="hidden" name="filter" value="yes">
                                        <div class="item-table-filter">
                                            <p class="text-muted"><small>Study Level</small></p>
                                            <select class="form-control" name="studylevel">
                                            	<option value="All">All</option>
                                                <option value="Undergraduate" <?php if($request->studylevel == 'Undergraduate'): ?> selected <?php endif; ?>>Undergraduate</option>
                                                <option value="Postgraduate" <?php if($request->studylevel == 'Postgraduate'): ?> selected <?php endif; ?>>Postgraduate</option>
                                                <option value="Professional" <?php if($request->studylevel == 'Professional'): ?> selected <?php endif; ?>> Professional</option>
                                                <option value="Foundation" <?php if($request->studylevel == 'Foundation'): ?> selected <?php endif; ?>>Foundation</option>
                                            </select>
                                        </div>

                                        <div class="item-table-filter">
                                            <p class="text-muted"><small>Field Of study</small></p>
                                            <select name="field" class="form-control">
                                                <option value="All">All</option>
                                                <option value="Psychology" <?php if($request->field == 'Psychology'): ?> selected <?php endif; ?>>Psychology</option>
                                            </select>
                                        </div>

                                        <div class="item-table-filter md-top-10 item-table-style">
                                            <p>&nbsp;</p>
                                            <button type="submit" class="btn bg-primary"><?php echo e(__('filter')); ?></button>
                                        </div>
                                        <?php echo Form::close(); ?>

                                    </div>
                                </div>

                                <!-- Table Filter -->
                                <table class="table table-bordered table-striped" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th width="20">#</th>
                                        <th>Course Name</th>
                                        <th>Study Level</th>
                                        <th><?php echo e(__('options')); ?></th>
                                    </tr>
                                	</thead>
                                	<tbody>
                                        <?php $i = 0; ?>
                                		<?php $__currentLoopData = $pr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $i++;  ?>
                                		<tr id="row_<?php echo e($pg->id); ?>">
                                            <td><?php echo e($i); ?></td>
                                            <td><?php echo e($pg->name); ?></td>
                                            <td><?php echo e($pg->studylevel); ?></td>
                                            
                                            <td>
                                            	<div class="dropdown">
                                                        <button class="btn bg-primary dropdown-toggle btn-select-option"
                                                                type="button" data-toggle="dropdown">.....<span
                                                                class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu options-dropdown">
                                                        	<li>
                                                                <a href="<?php echo e(url('programs/edit/'.$pg->id)); ?>"><i
                                                                            class="fa fa-edit option-icon"></i>Edit Course
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo e(url('programs/modules/'.$pg->id)); ?>"><i
                                                                            class="fa fa-edit option-icon"></i>Edit Modules
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo e(url('programs/electives/'.$pg->id)); ?>"><i
                                                                            class="fa fa-edit option-icon"></i>Edit Electives
                                                                </a>
                                                            </li>
                                                            <li> 
                                                                <a href="<?php echo e(url('course/'.$pg->slug)); ?>" target="_bn" 
                                                                           
                                                                           name="option" class="btn-list-button">
                                                                            <i class="fa fa-eye option-icon"></i> View
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            </td>
                                        </tr>
                                		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                	</tbody>
                            	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /shared/httpd/cirp/htdocs/Modules/Courses/Providers/../Resources/views/backend/programs.blade.php ENDPATH**/ ?>