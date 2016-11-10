<?php

namespace app\modules\user\models\formmodel;

use Yii;
use yii\base\Model;

/**
 * Description of ChangePasswordForm
 *
 * @author Murat Çelik
 */
class ChangePasswordForm extends Model {

    public $oldpassword;
    public $password;
    public $repeat_password;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            [['oldpassword', 'password', 'repeat_password'], 'required'],
        ];
    }

    public function attributeLabels() {
        return [
            'oldpassword' => 'Eski Şifre',
            'password' => 'Şifre',
            'repeat_password' => 'Şifre Tekrar',
        ];
    }

    public function validatePassword() {
        if ($this->password != $this->repeat_password) {
            $this->addError('repeat_password', 'Şifreler farklı !');
            return FALSE;
        }
        return TRUE;
    }

    public function validateOldPassword() {
        if ($this->oldpassword != Yii::$app->user->identity->password) {
            $this->addError('oldpassword', 'Eski şifre yanlış !');
            return FALSE;
        }
        return TRUE;
    }

    public function changePassword() {
        if ($this->validatePassword() && $this->validateOldPassword()) {
            $model = Yii::$app->user->identity;
            $model->password = $this->password;
            return $model->update();
        }
        return FALSE;
    }
}
