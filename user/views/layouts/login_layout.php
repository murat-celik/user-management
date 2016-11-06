<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
?>
<?php $this->beginPage() ?>
<html lang="tr">

    <head>
        <?php $this->head() ?>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>

    <title>CMS</title>
    <?php echo Html::csrfMetaTags(); ?>
    <?php AppAsset::register($this); ?>
    <!-- Bootstrap Core CSS -->
    <link href="css/backend/bootstrap.css" rel="stylesheet"/>

    <link href="css/backend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script>
        baseUrl = '<?= \yii\helpers\Url::home() ?>?r=';
    </script>
</head>
<body>
    <?php $this->beginBody(); ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>