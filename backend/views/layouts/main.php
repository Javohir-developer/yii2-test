<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link href="--><?//=\yii\helpers\Url::to(["../admin/assets/img/re2.png"], true)?><!--"  rel="icon">-->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body  class="alt-menu sidebar-noneoverflow" style="background: #E5E5E5;">
<?php $this->beginBody() ?>
<?php if(!Yii::$app->user->isGuest){echo $this->render('header');}?>
    <div class="container">
        <?= Alert::widget() ?>
        <div class="container">
            <?= $content ?>
        </div>
    </div>
<?= $this->render('footer');?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
