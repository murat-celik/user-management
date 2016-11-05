<!DOCTYPE html>
<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\modules\user\assets\AppUserAsset;
?>
<?php $this->beginPage() ?>
<html lang="tr">
    <head>
        <?php $this->head() ?>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>

    <title>User Managment</title>
    <?php echo Html::csrfMetaTags(); ?>
    <?php AppUserAsset::register($this); ?>
    <script type="text/javascript"> baseUrl = '<?= \yii\helpers\Url::home() ?>?r=';</script>
</head>

<body>
    <?php $this->beginBody(); ?>
<div id="wrapper">
    <div class="app-bar" data-role="appbar">
        <a class="app-bar-element branding">User Managment</a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu small-dropdown">
            <li>
                <a href="" class="dropdown-toggle">User</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">Users</a></li>
                    <li><a href="">Create User</a></li>
                </ul>
            </li>
            <li>
                <a href="" class="dropdown-toggle">Role</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">Roles</a></li>
                    <li><a href="">Create Role</a></li>
                </ul>
            </li>
            <li>
                <a href="" class="dropdown-toggle">Permission</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">Permission</a></li>
                    <li><a href="">Create Permission</a></li>
                </ul>
            </li>
            <li class="pull-right"><a href="">Help</a></li>
        </ul>
        <div class="app-bar-element place-right active-container">
            <span class="dropdown-toggle"><span class="mif-cog"></span> User Name</span>
            <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px; display: none;">
                <h5 class="text-light">Quick settings</h5>
                <ul class="unstyled-list fg-dark">
                    <li><a href="" class="fg-white1 fg-hover-yellow">Profile</a></li>
                    <li><a href="" class="fg-white2 fg-hover-yellow">Security</a></li>
                    <li><a href="" class="fg-white3 fg-hover-yellow">Exit</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>