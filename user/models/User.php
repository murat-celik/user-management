<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string  $firstname
 * @property string  $lastname
 * @property string  $username
 * @property string  $password
 * 
 * @property boolean $status
 * @property boolean $super_admin
 * @property string  $email
 * 
 * @property string  $datetime_create
 * @property string  $datetime_update
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'username', 'password'], 'required'],
            [['status', 'super_admin'], 'boolean'],
            [['datetime_create', 'datetime_update'], 'safe'],
            [['firstname', 'lastname', 'username', 'email'], 'string', 'max' => 128],
            [['password'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'username' => 'Username',
            'password' => 'Password',
            'status' => 'Status',
            'super_admin' => 'Super Admin',
            'email' => 'Email',
            'datetime_create' => 'Datetime Create',
            'datetime_update' => 'Datetime Update',
        ];
    }
}
