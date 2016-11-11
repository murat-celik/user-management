<?php

namespace app\modules\user\components;

use app\modules\user\models\User;
use yii\web\IdentityInterface;

/**
 * Description of UserIdentity
 *
 * @author Murat Çelik
 */
class UserIdentity extends User implements IdentityInterface {

    public function getIsSuperAdmin() {
        return $this->super_admin ? TRUE : FALSE;
    }

    public static function findByUsername($username) {
        return self::findOne(['username' => $username]);
    }

    public function validatePassword($password) {
        return $this->password === $password;
    }

    /* -------------------- IdentityInterface Functions -------------------- */

    public function getId() {
        return $this->id;
    }

    public static function findIdentity($id) {
        return self::findOne($id);
    }

    public function getAuthKey() {
        return "11651241";
        throw new \yii\base\NotSupportedException;
    }

    public function validateAuthKey($authKey) {
          return "11651241";
        throw new \yii\base\NotSupportedException;
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException;
    }

}
