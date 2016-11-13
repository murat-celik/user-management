<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\AuthItem */

$this->title = 'Role : ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auth-item-update">
    <p class="pull-right">
        <?= Html::a('Child Roles', ['childroles',  'id' => $model->name],  ['class' => 'btn btn-success btn-xs']) ?>
        <?= Html::a('Permissions', ['permissions', 'id' => $model->name], ['class' => 'btn btn-success btn-xs']) ?>
    </p>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
