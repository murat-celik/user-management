<?php

use yii\helpers\Html;
use app\modules\user\models\AuthItem;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\AuthItem */

$this->title = 'Assing Permission';
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="assing-rermission-view row">
    <div class="col-lg-4 col-md-4">
        <div class="panel panel-primary"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">Existing permissions</h3> 
            </div> 
            <div class="panel-body">Existing permissions </div> 
        </div>
    </div>
    <div class="col-lg-8 col-md-8">
        <div class="panel panel-primary"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">New Permissions</h3> 
            </div> 
            <div class="panel-body">
                <?php foreach ($routes as $module => $values) : ?>

                    <?php if ($module == 'app'): ?>
                        <h4><?php echo ucfirst($module) ?> Permissions</h4>
                        <?php foreach ($values as $controller => $actions) : ?>
                            <?php foreach ($actions as $action) : ?>
                                <h5>
                                    <input name="asd" type="checkbox" value="<?= $controller . "/" . $action ?>" />
                                    <span><?= $controller . "/" . $action ?></span>
                                </h5>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h4><?php echo ucfirst($module) ?> Module Permissions</h4>
                        <?php foreach ($values as $controller => $actions) : ?>
                            <?php foreach ($actions as $action) : ?>
                                <h5> 
                                    <input name="asd" type="checkbox" value="<?= $module . '/' . $controller . "/" . $action ?>" />
                                    <span><?= $module . '/' . $controller . "/" . $action ?></span>
                                </h5>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div> 
        </div>
    </div>
</div>