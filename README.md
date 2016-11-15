# user-managment

Installation
<pre>
  Download Manuel and create folder modules in your web app. and copy the user folder in your modules folder.
</pre>

Configuration
<br>
1) In your config/web.php change your home url after login redirect anywhere.
<pre>
  'homeUrl'=>'site/index',
</pre>

2) In your config/web.php
<pre>
'modules' => [
        'user' => [
            'class' => 'app\modules\user\UserModule',
        ],
    ],
</pre>  
 
<pre> 
 'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'user' => [
            'identityClass' => 'app\modules\user\components\UserIdentity',
            'enableAutoLogin' => true,
        ],
    ]
 </pre>
 
 3) Execute sql script file in modules/user/migrations/USER_RBAC.sql

 4) Extend your CustomController based RootController 
 <pre>
  use app\modules\user\components\RootController;
 </pre>
 <pre>
 class  CustomController extends RootController {
 }
 </pre>
    
