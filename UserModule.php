<?php

namespace app\modules\user;

use Yii;
use yii\web\ForbiddenHttpException;

/**
 * user module definition class
 */
class UserModule extends \yii\base\Module
{
    
    public $controllerNamespace = 'app\modules\user\controllers';

    public $defaultRoute ='admin';
    
    public function init()
    {
        parent::init();
        $this->layout = "@app/modules/user/views/layouts/main";
    }
    
    public function beforeAction($action) {

        if (!parent::beforeAction($action)) {
            return false;
        }
        if ((Yii::$app->user->isGuest != TRUE && Yii::$app->user->Identity->isSuperAdmin) || $action->id == "login") {
            return true;
        }  else {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are not Super Admin'));
        }
    }
}
