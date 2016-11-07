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
        <?= Html::a('Assing Child Role', ['assingchildrole',  'id' => $model->name],  ['class' => 'btn btn-success']) ?>
        <?= Html::a('Assing Permission', ['assingpermission', 'id' => $model->name], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
