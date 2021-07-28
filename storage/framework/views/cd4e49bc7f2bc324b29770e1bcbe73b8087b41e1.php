<?php

$php_version_success = false;
$mysql_success = false;
$curl_success = false;
$gd_success = false;
$allow_url_fopen_success = false;
$timezone_success=false;

$php_version_required = "7.2";
$current_php_version = PHP_VERSION;

//check required php version
if (version_compare($current_php_version, $php_version_required) >= 0) {
    $php_version_success = true;
}

//check mySql
if (function_exists("mysqli_connect")) {
    $mysql_success = true;
}

//check curl
if (function_exists("curl_version")) {
    $curl_success = true;
}

//check gd
if (extension_loaded('gd') && function_exists('gd_info')) {
    $gd_success = true;
}

//check allow_url_fopen
if (ini_get('allow_url_fopen')) {
    $allow_url_fopen_success = true;
}

//check allow_url_fopen
$timezone_settings = ini_get('date.timezone');
if ($timezone_settings) {
    $timezone_success = true;
}

//check if all requirement is success
if ($php_version_success && $mysql_success && $curl_success && $gd_success && $allow_url_fopen_success && $timezone_success) {
    $all_requirement_success = true;
} else {
    $all_requirement_success = false;
}


if (strpos(php_sapi_name(), 'cli') !== false || defined('LARAVEL_START_FROM_PUBLIC')) {

    $writeable_directories = array(
        
        "../resources/lang",
        "../public",
        "../storage",
    );

}else{

    $writeable_directories = array(
        
        "./resources/lang",
        "./public",
        "./storage",
    );

}

foreach ($writeable_directories as $value) {

        if (!is_writeable($value)) {
            $all_requirement_success = false;
        }

}

$dashboard_url = $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
$dashboard_url = preg_replace('/install.*/', '', $dashboard_url); //remove everything after index.php
if (!empty($_SERVER['HTTPS'])) {
    $dashboard_url = 'https://' . $dashboard_url;
} else {
    $dashboard_url = 'http://' . $dashboard_url;
}

//include "view/index.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="SpaGreen">
        <link rel="icon" href="<?php echo e(static_asset('installer/assets/images/favicon.ico')); ?>" />
        <title>Ewisnet PHP Script Installation</title>
        <link rel='stylesheet' type='text/css' href="<?php echo e(static_asset('installer/assets/bootstrap/css/bootstrap.min.css')); ?>" />
        <link rel='stylesheet' type='text/css' href="<?php echo e(static_asset('installer/assets/js/font-awesome/css/font-awesome.min.css')); ?>" />

        <link rel='stylesheet' type='text/css' href="<?php echo e(static_asset('installer/assets/css/install.css')); ?>" />

        <script type='text/javascript'  src="<?php echo e(static_asset('installer/assets/js/jquery-1.11.3.min.js')); ?>"></script>
        <script type='text/javascript'  src="<?php echo e(static_asset('installer/assets/js/jquery-validation/jquery.validate.min.js')); ?>"></script>
        <script type='text/javascript'  src="<?php echo e(static_asset('installer/assets/js/jquery-validation/jquery.form.js')); ?>"></script>

         

    </head>
    <body>
        <div class="install-box">

            <div class="panel panel-install">
                <div class="panel-heading text-center">
                    <h2>Ewisnet PHP Script configuration Check</h2>
                </div>
                <div class="panel-body no-padding">
                    <div class="tab-container clearfix">
                        <div id="pre-installation" class="tab-title col-sm-12 active"><i class="fa fa-circle-o"></i><strong> Pre-Installation</strong></span></div>
                        

                        
                    </div>
                    <div id="alert-container">

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
                        <?php if(isset($errors)): ?>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger" id="error_m">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php endif; ?>

                    </div>


                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="pre-installation-tab">
                            <div class="section">
                                <p>1. Please configure your PHP settings to match following requirements:</p>
                                <hr />
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="25%">PHP Settings</th>
                                                <th width="27%">Current Version</th>
                                                <th>Required Version</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PHP Version</td>
                                                <td><?php echo $current_php_version; ?></td>
                                                <td><?php echo $php_version_required; ?>+</td>
                                                <td class="text-center">
                                                    <?php if ($php_version_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="section">
                                <p>2. Please make sure the extensions/settings listed below are installed/enabled:</p>
                                <hr />
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="25%">Extension/settings</th>
                                                <th width="27%">Current Settings</th>
                                                <th>Required Settings</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>MySQLi</td>
                                                <td> <?php if ($mysql_success) { ?>
                                                        On
                                                    <?php } else { ?>
                                                        Off
                                                    <?php } ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if ($mysql_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>GD</td>
                                                <td> <?php if ($gd_success) { ?>
                                                        On
                                                    <?php } else { ?>
                                                        Off
                                                    <?php } ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if ($gd_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>cURL</td>
                                                <td> <?php if ($curl_success) { ?>
                                                        On
                                                    <?php } else { ?>
                                                        Off
                                                    <?php } ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if ($curl_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>allow_url_fopen</td>
                                                <td> <?php if ($allow_url_fopen_success) { ?>
                                                        On
                                                    <?php } else { ?>
                                                        Off
                                                    <?php } ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if ($allow_url_fopen_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>OpenSSL PHP Extension</td>
                                                <td><?php if( OPENSSL_VERSION_NUMBER < 0x009080bf): ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php else: ?>
                                                        On
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if( OPENSSL_VERSION_NUMBER < 0x009080bf): ?>
                                                        <i class="status fa fa-times-circle-o"></i> 
                                                    <?php else: ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PDO PHP Extension</td>
                                                <td><?php if(PDO::getAvailableDrivers()): ?>
                                                        On
                                                    <?php else: ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if(PDO::getAvailableDrivers()): ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php else: ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BCMath PHP Extension</td>
                                                <td><?php if(extension_loaded('bcmath')): ?>
                                                        On
                                                    <?php else: ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if(extension_loaded('bcmath')): ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php else: ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ctype PHP Extension</td>
                                                <td><?php if(extension_loaded('ctype')): ?>
                                                        On
                                                    <?php else: ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if(extension_loaded('ctype')): ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php else: ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fileinfo PHP Extension</td>
                                                <td><?php if(extension_loaded('fileinfo')): ?>
                                                        On
                                                    <?php else: ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if(extension_loaded('fileinfo')): ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php else: ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mbstring PHP Extension</td>
                                                <td><?php if(extension_loaded('mbstring')): ?>
                                                        On
                                                    <?php else: ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if(extension_loaded('mbstring')): ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php else: ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tokenizer PHP Extension</td>
                                                <td><?php if(extension_loaded('tokenizer')): ?>
                                                        On
                                                    <?php else: ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if(extension_loaded('tokenizer')): ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php else: ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>XML PHP Extension</td>
                                                <td><?php if(extension_loaded('xml')): ?>
                                                        On
                                                    <?php else: ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if(extension_loaded('xml')): ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php else: ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>JSON PHP Extension</td>
                                                <td><?php if(extension_loaded('json')): ?>
                                                        On
                                                    <?php else: ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if(extension_loaded('json')): ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php else: ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>IonCube Loader PHP Extension</td>
                                                <td><?php if(extension_loaded('ionCube Loader')): ?>
                                                        On
                                                    <?php else: ?>
                                                    <?php $all_requirement_success = false; ?>
                                                        Off
                                                    <?php endif; ?>
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    <?php if(extension_loaded('ionCube Loader')): ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php else: ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            
                                              <tr>
                                                <td>date.timezone</td>
                                                <td> <?php if ($timezone_success) {
                                                        echo $timezone_settings;
                                                        } else {
                                                            echo "Null";
                                                        } ?>
                                                </td>
                                                <td>Timezone</td>
                                                <td class="text-center">
                                                    <?php if ($timezone_success) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php } else { ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="section">
                                <p>3. Please make sure you have set the <strong>writable</strong> permission on the following folders/files:</p>
                                <hr />
                                <div>
                                    <table>
                                        <tbody>
                                            <?php
                                            foreach ($writeable_directories as $value) {
                                                ?>
                                                <tr>
                                                    <td id="first-td"><?php echo $value; ?></td>
                                                    <td class="text-center">
                                                        <?php if (is_writeable($value)) { ?>
                                                            <i class="status fa fa-check-circle-o"></i>
                                                            <?php
                                                        } else {
                                                            $all_requirement_success = false;
                                                            ?>
                                                            <i class="status fa fa-times-circle-o"></i>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <button <?php
                                if (!$all_requirement_success) {
                                    echo "disabled=disabled";
                                } else{
                                    echo "disabled=disabled";
                                }
                                ?> class="btn btn-info form-next"><i class='fa fa-chevron-right'></i> <?php
                                if (!$all_requirement_success) {
                                    echo "Configurations Not ready!";
                                }else{
                                    echo "Configurations are ready!";
                                }
                                ?></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script type="text/javascript" src="<?php echo e(static_asset('js/custom.js')); ?>"></script>


<?php /**PATH /shared/httpd/cirp/htdocs/Modules/Installer/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>