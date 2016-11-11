<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\modules\user\models\AuthItem */

$this->title = 'Assing Child Role';
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-form">
 <?php $form = ActiveForm::begin(); ?>
    <div class="row">
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
                	<?php if($item->name !=$model->name):?>
                    <tr>
                    <?php // echo $item->name; echo "<pre>";  var_dump($childRoles); exit; ?>
                    	<td><input type="checkbox" name="roles[<?=$item->name?>]" <?= in_array($item->name, $childRoles) ? 'checked' : "" ?> /></td>
                        <td><?= $item->name ?></td>
                        <td><?= $item->description ?></td>
                    </tr>
                <?php endif;?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>