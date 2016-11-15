# user-managment

Installation

Either run
```php
  composer require murat-celik/user-management
```
Or
<br>

Download Manuel and create folder modules in your web app. and copy the user folder in your modules folder.

Configuration
<br>
1) In your config/web.php change your home url after login redirect anywhere.
```php
  'homeUrl'=>'site/index',
```

2) In your config/web.php
```php
'modules' => [
        'user' => [
            'class' => 'app\modules\user\UserModule',
        ],
    ],
```
```php
 'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'user' => [
            'identityClass' => 'app\modules\user\components\UserIdentity',
            'enableAutoLogin' => true,
        ],
    ]
```
 
 3) Execute sql script file in modules/user/migrations/USER_RBAC.sql

 4) Extend your CustomController based RootController 
```php
  use app\modules\user\components\RootController;
```
```php
class  CustomController extends RootController {
}
```
    
