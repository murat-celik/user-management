<?php

namespace app\modules\user\components;

use yii\web\IdentityInterface;
use app\modules\user\models\User;
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

    /**
     * @return int|string current user ID
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * @return User by $id
     */
    public static function findIdentity($id) {
        return self::findOne($id);
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey() {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return boolean if auth key is valid for current user
     */
    public function validateAuthKey($authKey) {
        return $this->getAuthKey() === $authKey;
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException;
    }

}
