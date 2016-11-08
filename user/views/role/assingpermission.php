<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\modules\user\models\AuthItem;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\AuthItem */

$this->title = 'Assing Permission :' . $role;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $role;
?>

<div class="assing-rermission-view row">
    <div class="col-lg-4 col-md-4">
        <div class="panel panel-primary"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">Child Roles</h3> 
            </div> 
            <div class="panel-body">
                <table class="table">
                    <?php foreach ($childRoles as $value): ?>
                        <tr><td><a>   <?= $value ?> <a href="<?= Url::to(['role/assingpermission', 'id' => $value]) ?>"> <i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></td></tr>
                    <?php endforeach; ?>
                </table>
            </div> 
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
                                    <input name="asd" type="checkbox" value="<?= $controller . "." . $action ?>" onclick="setAssing(this)" <?php echo in_array($controller . "." . $action, $childPermission) ? 'checked' : "" ?> />
                                    <span><?= $controller . "." . $action ?></span>
                                </h5>
                            <?php endforeach; ?>
                            <hr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h4><?php echo ucfirst($module) ?> Module Permissions</h4>
                        <?php foreach ($values as $controller => $actions) : ?>
                            <?php foreach ($actions as $action) : ?>
                                <h5> 
                                    <input name="asd" type="checkbox" value="<?= $module . '.' . $controller . "." . $action ?>" onclick="setAssing(this)" <?php echo in_array($module . '.' . $controller . "." . $action, $childPermission) ? 'checked' : "" ?> />
                                    <span><?= $module . '.' . $controller . "." . $action ?></span>
                                </h5>
                            <?php endforeach; ?>
                            <hr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div> 
        </div>
    </div>
</div>


<script type="text/javascript">
    function setAssing(element) {
        if ($(element).is(":checked")) {
            ajax('<?= Url::to(['role/createpermission', 'id' => $role]) ?>', {name: $(element).val()}, function () {
            }, true, false);
        } else {
            ajax('<?= Url::to(['role/deletepermission', 'id' => $role]) ?>', {name: $(element).val()}, function () {
            }, true, false);
        }
    }
</script>