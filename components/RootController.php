<?php

namespace app\modules\user\components;

use Yii;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\filters\AccessControl;

class RootController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function beforeAction($action) {

        if (!parent::beforeAction($action)) {
            return false;
        }

        if (Yii::$app->user->isGuest == TRUE) {
            if ($this->route != "user/auth/login") {
                $this->goLogin();
                return false;
            } elseif ($this->route == "user/auth/login") {
                return true;
            }
        }

        if (Yii::$app->user->Identity->isSuperAdmin) {
            return true;
        }
        
        if (Yii::$app->user->can(str_replace('/', '.', $this->route))) {
            return true;
        } else {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are not allowed to perform this action.'));
        }
        return false;
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
