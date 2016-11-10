<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\user\components;

use Yii;
use yii\web\Controller;

class RootController extends Controller
{
    public function beforeAction($action) {

        
        if (!parent::beforeAction($action)) {
            return false;
        }
        
        if (Yii::$app->user->isGuest == TRUE) {
            if ($this->route != "user/auth/login") {
                $this->goLogin();
                return false;
            }
        }
        return true;
    }

    public function actionLogout() {
        Yii::$app->user->logout();
        return $this->goLogin();
    }

    public function goHome() {
        return $this->redirect(['user/admin/index']);
    }

    public function goLogin() {
        return $this->redirect(['auth/login']);
    }
}