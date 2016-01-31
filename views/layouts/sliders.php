<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <link href="/css/style.css" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<a href="/site" class="btn btn-default login-btn"><span>Войти на сайт</span></a>
<img src="/images/sliders/001.jpg" alt="" class="slider_img">
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <header class="header1">
                    <div class="panel panel-default panel1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-1">
                                    <img src="/images/logo.png" alt="logo" class="logo img-responsive">
                                </div>
                                <div class="col-xs-3 header_bottom logo_text">
                                    <span>ПСК Гражданпроект</span>
                                </div>
                                <div class="col-xs-3 header_bottom">
                                    <span>+7 904 661 48 93</span>
                                </div>
                                <div class="col-xs-3 header_bottom">
                                    <span>zainullinrobert@gmail.com</span>
                                </div>
                                <div class="col-xs-2 header_icons text-center">
                                    <a href="#" class="header_icon_a"><img src="/images/vkontakte.png" alt="vk"></a>
                                    <a href="#" class="header_icon_a"><img src="/images/facebook.png" alt="fb"></a>
                                    <a href="#" class="header_icon_a"><img src="/images/lokacia.jpg" alt="loc"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
