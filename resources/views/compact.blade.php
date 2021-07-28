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




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="SpaGreen">
        <link rel="icon" href="{{static_asset('installer/assets/images/favicon.ico') }}" />
        <title>Ewisnet PHP Script Installation</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <link rel='stylesheet' type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />

        

<style type="text/css">
body{
    background-color: #BCBDBD;
    color: #4e5e6a;
}
.install-box {
    max-width: 900px;
    margin: 30px auto;
}
table{
    width: 100%;
}
th, td{
    padding:5px 0;
}
.section{
    padding: 15px;
    background-color: #fff;
    margin-bottom: 15px;
}
.tab-content{
    margin-top: 20px;
}
hr{
    margin: 10px 0 0;
}
.status{
    font-size: 20px;
}
.status{
    font-size: 20px;
}
.status.fa-check-circle-o{
    color: #00b393;
}
.status.fa-times-circle-o{
    color: #d73b3b;
}
.tab-title{
    background: #f2f3f4;
    padding:15px;
    border-bottom: none;
}
.tab-title.active{
    background: #f60002;
    color: #fff;
}
.form-group{
    margin-top: 15px;
}
.form-control{
    border-radius: 0;
}
.btn{
    border-radius: 0;
}
.panel{
    border-radius: 0;
    border: 0;
}
.panel-heading h2{
    margin: 20px 0;                
}
.panel-install>.panel-heading{
    background-color: #01091A;
    color: #93a4c3;
    border-bottom: none;
}
.no-padding{
    padding: 0;
}
.btn-info{
    background-color: #f60002;
    border: none;
    width: 100%;
    padding: 15px;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active
{
    background-color: #00b3a2 !important;
    border: none !important;
}
.btn-info[disabled]{
    background-color: #24BFA4 !important;
    border: none !important;
}
label{
    font-weight: normal;
}
.alert{
    border-radius: 0;
}
.loader{
    background: url('../assets/images/loader2.gif') no-repeat;
    height: 16px;
    display: inline-block;
    padding-left: 20px;
}
.panel-footer{
    border-top: none;
}

.go-to-login-page,

.go-to-login-page:active,
.go-to-login-page:focus{
    color: #00b3a2; 
    text-decoration: none;
}

.go-to-login-page:hover{
    color: #13B195; 
    text-decoration: none;
}

#first-td{
    width: 87%;
}

.section .status{
    font-size: 20px;
}
.section .pull-left{
    line-height: 50px;
}

.go-to-login-page .font{
    font-size: 100px;
}
</style> 

         

    </head>
    <body>
        <div class="install-box">

            <div class="panel panel-install">
                <div class="panel-heading text-center">
                    <h2>Ewisnet PHP Script configuration Check</h2>
                </div>
                <div class="panel-body no-padding">
                    <div class="tab-container clearfix">
                        <div id="pre-installation" class="tab-title col-sm-12 active"><i class="fa fa-circle-o"></i><strong> Pre-Installation Test</strong></span></div>
                        

                        
                    </div>
                    <div id="alert-container">

                        @if(session('error'))
                            <div id="error_m" class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                        @if(session('success'))
                            <div id="success_m" class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        @isset($errors)
                        @if ($errors->any())
                            <div class="alert alert-danger" id="error_m">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @endif

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
                                                <td>@if( OPENSSL_VERSION_NUMBER < 0x009080bf)
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @else
                                                        On
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if( OPENSSL_VERSION_NUMBER < 0x009080bf)
                                                        <i class="status fa fa-times-circle-o"></i> 
                                                    @else
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PDO PHP Extension</td>
                                                <td>@if(PDO::getAvailableDrivers())
                                                        On
                                                    @else
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if(PDO::getAvailableDrivers())
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @else
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BCMath PHP Extension</td>
                                                <td>@if(extension_loaded('bcmath'))
                                                        On
                                                    @else
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if(extension_loaded('bcmath'))
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @else
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ctype PHP Extension</td>
                                                <td>@if(extension_loaded('ctype'))
                                                        On
                                                    @else
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if(extension_loaded('ctype'))
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @else
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fileinfo PHP Extension</td>
                                                <td>@if(extension_loaded('fileinfo'))
                                                        On
                                                    @else
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if(extension_loaded('fileinfo'))
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @else
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mbstring PHP Extension</td>
                                                <td>@if(extension_loaded('mbstring'))
                                                        On
                                                    @else
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if(extension_loaded('mbstring'))
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @else
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tokenizer PHP Extension</td>
                                                <td>@if(extension_loaded('tokenizer'))
                                                        On
                                                    @else
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if(extension_loaded('tokenizer'))
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @else
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>XML PHP Extension</td>
                                                <td>@if(extension_loaded('xml'))
                                                        On
                                                    @else
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if(extension_loaded('xml'))
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @else
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>JSON PHP Extension</td>
                                                <td>@if(extension_loaded('json'))
                                                        On
                                                    @else
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if(extension_loaded('json'))
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @else
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    @endif
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>IonCube Loader PHP Extension</td>
                                                <td>@if(extension_loaded('ionCube Loader'))
                                                        On
                                                    @else
                                                    @php $all_requirement_success = false; @endphp
                                                        Off
                                                    @endif
                                                </td>
                                                <td>On</td>
                                                <td class="text-center">
                                                    @if(extension_loaded('ionCube Loader'))
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    @else
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    @endif
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

<script type="text/javascript">
    //installer step change

var onFormSubmit = function ($form) {
    $form.find('[type="submit"]').attr('disabled', 'disabled').find(".loader").removeClass("hide");
    $form.find('[type="submit"]').find(".button-text").addClass("hide");
    $("#alert-container").html("");
};
var onSubmitSussess = function ($form) {
    $form.find('[type="submit"]').removeAttr('disabled').find(".loader").addClass("hide");
    $form.find('[type="submit"]').find(".button-text").removeClass("hide");
};



</script>


