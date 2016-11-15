<!DOCTYPE html>
<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
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

    <title>USER MANAGEMENT</title>
    <?php echo Html::csrfMetaTags(); ?>
    <?php AppUserAsset::register($this); ?>
    <script type="text/javascript"> baseUrl = '<?= \yii\helpers\Url::home() ?>?r=';</script>
</head>

<body>
    <?php $this->beginBody(); ?>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?r=user">USER MANAGEMENT</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i> (<?= Yii::$app->user->identity->fullname ?>)
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?= \yii\helpers\Url::to(['auth/logout']) ?>"><i class="fa fa-sign-out fa-fw"></i>Çıkış</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li><a href="<?= Url::to(['admin/index']) ?>"><i class="fa fa-users fa-fw" ></i>&nbsp;USERS</a></li>
                    <li><a href="<?= Url::to(['role/index']) ?>"><i class="fa fa-cubes fa-fw" ></i>&nbsp;ROLES</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h4><?= $this->title; ?></h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], 'homeLink' => [ 'label' => Yii::t('yii', 'Home'), 'url' => 'index.php?r=user']]); ?>
                    </div>
                </div>
            </div>
            <div class="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <?php foreach (Yii::$app->session->getAllFlashes() as $key => $message): ?>
                            <?php if ($message != ""): ?>
                                <?= '<div class="alert alert-' . $key . ' fade in" ><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>' . $message . '</div> <script> setTimeout(function(){ $(".alert").hide("blind"); }, 1000);</script>' ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
<div id="loading-layout">
    <div style="margin:0 auto; margin-top: 150px;  width: 30%; min-width: 300px; z-index: 99999; opacity: none; text-align: center;">
        <div class="panel panel-default">
            <div  class="panel-heading">Yükleniyor...<i onclick="stopLoading()" style="cursor:pointer;" class="glyphicon glyphicon-remove pull-right"></i> </div>
            <div class="panel-body">
                <div id="loading-message"></div>
                <center><img src ="http://cursos.cenofisco.com.br/Imagens/carregando.gif"/></center>
                <br>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php $this->endPage() ?>