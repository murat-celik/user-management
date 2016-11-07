<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'firstname')->textInput(['maxlength' => true, 'class' => 'form-control ']) ?>

            <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
            
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            
            <?= $form->field($model, 'status')->dropDownList(array(0 => 'Passive', 1 => 'Active')); ?>

            <?= $form->field($model, 'super_admin')->dropDownList(array(0 => 'Yes', 1 => 'No')); ?>
        </div>
        <div class="col-lg-12">
            <h4 class="control-label">Roles</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col-lg-2 col-xs-3">#</th>
                        <th>Role</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"/></td>
                <td>Admin</td>
                <td>Lorem Ipsum</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Admin</td>
                    <td>Lorem Ipsum</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                    <td>Admin</td>
                    <td>Lorem Ipsum</td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
