<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\user\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    //'tableOptions' => ['class' => 'table striped hovered cell-hovered border bordered'],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'firstname',
        'lastname',
        'username',
        'status:boolean',
        'super_admin:boolean',
        'email:email',
        'datetime_create',
        'datetime_update',
        [
            'attribute' => 'renderRoles',
            'content' => function ($model) {
                return $model->getRenderRoles(" ");
            },
            'contentOptions' => ['style' => 'width:200px;'],
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view}  {update}',
            'contentOptions' => ['style' => 'width:60px;'],
        ],
    ],
]);
?>
</div>
