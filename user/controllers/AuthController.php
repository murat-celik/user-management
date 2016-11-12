<?php

namespace app\modules\user\controllers;

use Yii;

//models
use app\modules\user\models\User;
use app\modules\user\models\formmodel\LoginForm;
use app\modules\user\models\formmodel\ChangePasswordForm;

use app\modules\user\components\RootController;

class AuthController extends RootController {

    public $defaultRoute = 'login';

    public function actionLogin() {
        
        $this->layout = "@app/modules/user/views/layouts/login_layout";
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();
        }

        return $this->render('login', ['model' => $model]);
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goLogin();
    }

    public function goHome() {
        return $this->redirect(['/user/admin/index']);
    }

    public function actionProfile() {
        $model = Yii::$app->user->identity;
        return $this->render('profile', ['model' => $model]);
    }

    public function actionChangepassword() {
        $model = new ChangePasswordForm();
        if ($model->load(Yii::$app->request->post()) && $model->changePassword()) {
            return $this->goHome();
        }
        return $this->render('change_password', ['model' => $model]);
    }

}
