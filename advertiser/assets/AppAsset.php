<?php

namespace advertiser\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //  'css/site.css',
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/metisMenu/metisMenu.min.css',
        'dist/css/sb-admin-2.css',
        'vendor/morrisjs/morris.css',
        'vendor/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'vendor/bootstrap/js/bootstrap.min.js', // 这个必须要放第一个。
        'vendor/metisMenu/metisMenu.min.js',
        'vendor/raphael/raphael.min.js',
//        'vendor/morrisjs/morris.min.js',
//        'data/morris-data.js',
//        'dist/js/dropdown.js',
        'dist/js/sb-admin-2.js',
        'dist/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
