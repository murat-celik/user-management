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
        'css/metismenu.css',
        'css/sb-admin-2.css',
        'css/font-awesome/css/font-awesome.min.css',
        'css/site.css',
        
    ];
    public $js = [
        'js/bootstrap.js',
        'js/metisMenu.js',
        'js/sb-admin-2.js',
        'js/site.js',
    ];
    

}
