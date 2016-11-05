<?php

namespace app\modules\user\assets;

use yii\web\AssetBundle;

class AppUserAsset extends AssetBundle {

    public $basePath = '/modules/user/assets';
    public $baseUrl = '../modules/user/assets/';
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $css = [
        'css/metro.min.css',
        'css/metro-icons.min.css',
        'css/metro-responsive.css',
        'css/metro-schemes.css',
        'style.css',
    ];
    public $js = [
        'js/metro.js',
    ];

}
