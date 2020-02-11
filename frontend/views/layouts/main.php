<?php

/* @var $this View */
/* @var $content string */

use frontend\widgets\DiscountModalWidget;
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\web\View;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,maximum-scale=1,initial-scale=1,user-scalable=0">
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?= $this->render('@frontend/views/layouts/_components/_open-graph-protocol') ?>
    <?php $this->head() ?>
    <?= $this->render('@frontend/views/layouts/_components/_jivo-site') ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('@frontend/views/layouts/_header') ?>
<div class="block-blur">
    <?= $content ?>
    <?= $this->render('@frontend/views/layouts/_footer') ?>
</div>

<?= $this->render('@frontend/views/layouts/_components/_analytics') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
