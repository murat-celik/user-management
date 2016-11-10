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

            <div class="row">
                <div class="col-lg-6">
                    <?= $form->field($model, 'status')->dropDownList(array( 1 => 'Active',0 => 'Passive')); ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'super_admin')->dropDownList(array(0 => 'No', 1 => 'Yes')); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
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
                <?php foreach ($roles as $item): ?>
                    <tr>
                       <?php  if($model->isNewRecord):?>
                        <td><input type="checkbox" name="roles[<?=$item->name?>]"/></td>
                        <?php else:?>
                            <td><input type="checkbox" name="roles[<?=$item->name?>]" <?= in_array($item->name, $userRoles) ? 'checked' : "" ?> /></td>
                        <?php endif;?>
                        <td><?= $item->name ?></td>
                        <td><?= $item->description ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
