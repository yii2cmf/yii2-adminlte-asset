<?php
namespace yii2cmf\templates\adminlte;

use yii\web\AssetBundle;

class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte';

    public $css = [
        // Font Awesome Icons
        'plugins/fontawesome-free/css/all.min.css',
        // Theme style
        'dist/css/adminlte.min.css'
    ];

    public $js = [
        // jQuery
        'plugins/jquery/jquery.min.js',
        // Bootstrap 4
        "plugins/bootstrap/js/bootstrap.bundle.min.js",
        // AdminLTE App
        "dist/js/adminlte.min.js"
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_END];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}