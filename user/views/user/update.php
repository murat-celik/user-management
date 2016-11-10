<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */

$this->title = 'Update User : ' . $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">

    <?= $this->render('_form', [
        'model' => $model,
        'roles'=>$roles,
        'userRoles'=>$userRoles,
    ]) ?>

</div>
