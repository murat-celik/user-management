<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<style type="text/css">
    body { 
        background: url(http://www.suncaresauna.com/Belgelerim/SiteMedya/Kiz-kulesi-manzaralari0572LCGBRIDHXO83027.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .panel-default   { opacity: 0.9;margin-top:30px;}
    .form-group.last { margin-bottom:0px; }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Giriş</div>
                <div class="panel-body">
                    <?php
                    $form = ActiveForm::begin([
                                'id' => 'login-form',
                                'options' => ['class' => 'form-horizontal', 'style' => 'padding:15px;'],
                                'fieldConfig' => [
                                // 'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                // 'labelOptions' => ['class' => 'col-lg-1 control-label'],
                                ],
                    ]);
                    ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?=
                $form->field($model, 'rememberMe')->checkbox([
                        //'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ])
                ?>
                <div class="form-group last">
                    <div class="col-sm-offset-3 col-sm-9">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary  btn-sm', 'name' => 'login-button']) ?>
                        <button type="reset" class="btn btn-default btn-sm">Reset</button>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="panel-footer">You may login with <strong>admin/admin</strong></div>
        </div>
    </div>
</div>
</div>
