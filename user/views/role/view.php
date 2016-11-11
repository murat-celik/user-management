<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\AuthItem */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-view">

    <p class="pull-right">

        <?= Html::a('Assing Child Role', ['assingchildrole',  'id' => $model->name],  ['class' => 'btn btn-success']) ?>
        <?= Html::a('Assing Permission', ['assingpermission', 'id' => $model->name],  ['class' => 'btn btn-success']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>

        <?=
        Html::a('Delete', ['delete', 'id' => $model->name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'type',
            'description:ntext',
            'rule_name',
            'data:ntext',
            'created_at',
            'updated_at',
        ],
    ])
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="control-label">Roles</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col-lg-2 col-xs-3">Role</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <?php foreach ($childRoles as $key=>$item): ?>
                    <?php if($item->name !=$model->name):?>
                        <tr>
                            <td><?= $item->name ?></td>
                            <td><?= $item->description ?></td>
                        </tr>
                    <?php endif;?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
