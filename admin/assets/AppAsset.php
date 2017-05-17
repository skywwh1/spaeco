<?php

namespace admin\assets;

use yii\web\AssetBundle;

/**
 * Main admin application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/ionicons.min.css',
        'css/AdminLTE.css',
        'css/_all-skins.css',
        'plugins/iCheck/flat/blue.css',
        'css/site.css',
    ];
    public $js = [
//        'js/bootstrap.min.js',
        'js/jquery-ui.min.js',
        'js/raphael-min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
//        'plugins/slimScroll/jquery.slimscroll.min.js',
//        'plugins/daterangepicker/daterangepicker.js',
        'plugins/datepicker/bootstrap-datepicker.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'plugins/fastclick/fastclick.min.js',
        'js/jquery.cookie.js',
//        'js/dropdown.js',
        'js/app.min.js',
//        'js/dashboard.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
    public $publishOptions = [
        'forceCopy'=>true,
    ];
}
