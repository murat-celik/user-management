<?php

namespace app\modules\user\controllers;

use app\modules\user\components\RootController;

/**
 * Default controller for the `user` module
 */
class DefaultController extends RootController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
