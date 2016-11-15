<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\modules\user\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<style type="text/css">
    body {  background-color: whitesmoke;}
    .panel-default   { margin-top:50px;}
    .form-group.last { margin-bottom:0px; }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([ 'id' => 'login-form', 'options' => ['class' => 'form-horizontal', 'style' => 'padding:15px;'],]); ?>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary  btn-sm', 'name' => 'login-button']) ?>
                            <button type="reset" class="btn btn-default btn-sm">Reset</button>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
</div>
