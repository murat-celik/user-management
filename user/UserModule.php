<?php

namespace app\modules\user;

/**
 * user module definition class
 */
class UserModule extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\user\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->layout = "@app/modules/user/views/layouts/main";
        // custom initialization code goes here
    }
}
