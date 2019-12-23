<?php
namespace yii2cmf\templates\adminlte;

use yii\web\AssetBundle;

class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte';

    public $css = [
        'dist/css/adminlte.min.css'
    ];

    public $js = [
        'plugins/jquery/jquery.min.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'dist/js/adminlte.min.js'
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_END];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}