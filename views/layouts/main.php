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
    <?= Html::csrfMetaTags() ?>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

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

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="main_menu">
                    <li><a href="#" class="portfolio_a">Портфолио</a></li>
                    <li><a href="#" class="news_a">Новости</a></li>
                    <li><a href="#" class="partners_a">Партнеры</a></li>
                    <li><a href="#" class="videos_a">Видео</a></li>
                    <li><a href="#" class="pressa_a">Пресса</a></li>
                    <li><a href="#" class="gp_a">Гражданпроект</a></li>
                </ul>
            </div>
        </div>

        <div class="row childs child-portfolio">
            <div class="col-xs-12">
                <ul class="main_menu_childs">
                    <div class="col-xs-1"><li ><a href="#">Общественные<br> здания</a></li></div>
                    <div class="col-xs-1"><li><a href="#">Частные дома</a></li></div>
                    <div class="col-xs-1"><li><a href="#">Благоустройство</a></li></div>
                    <div class="col-xs-1"><li><a href="#">Многоквартиные <br>жилые дома</a></li></div>
                    <div class="col-xs-1"><li><a href="#">Производственные<br> здания</a></li></div>
                    <div class="col-xs-1"><li><a href="#">Автосалоные, СТО,<br> мойки</a></li></div>
                    <div class="col-xs-1"><li><a href="#">Кафе</a></li></div>
                    <div class="col-xs-1"><li><a href="#">Концепции</a></li></div>
                </ul>
            </div>
        </div>

        <div class="row childs child-news">
            <div class="col-xs-12">
                <ul class="main_menu_childs">
                    <li ><a href="#">Портфолио</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Партнеры</a></li>
                    <li><a href="#">Видео</a></li>
                    <li><a href="#">Пресса</a></li>
                    <li><a href="#">Гражданпроект</a></li>
                </ul>
            </div>
        </div>

        <div class="row childs child-partners">
            <div class="col-xs-12">
                <ul class="main_menu_childs">
                    <li ><a href="#">Портфолио</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Партнеры</a></li>
                    <li><a href="#">Видео</a></li>
                    <li><a href="#">Пресса</a></li>
                    <li><a href="#">Гражданпроект</a></li>
                </ul>
            </div>
        </div>

        <div class="row childs child-videos">
            <div class="col-xs-12">
                <ul class="main_menu_childs">
                    <li class="active"><a href="#">Портфолио</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Партнеры</a></li>
                    <li><a href="#">Видео</a></li>
                    <li><a href="#">Пресса</a></li>
                    <li><a href="#">Гражданпроект</a></li>
                </ul>
            </div>
        </div>

        <div class="row childs child-pressa">
            <div class="col-xs-12">
                <ul class="main_menu_childs">
                    <li ><a href="#">Портфолио</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Партнеры</a></li>
                    <li><a href="#">Видео</a></li>
                    <li><a href="#">Пресса</a></li>
                    <li><a href="#">Гражданпроект</a></li>
                </ul>
            </div>
        </div>
        <div class="row childs child-gp">
            <div class="col-xs-12">
                <ul class="main_menu_childs">
                    <li ><a href="#">О КОМПАНИИ</a></li>
                    <li><a href="#">НАШ ПРОФИЛЬ</a></li>
                    <li><a href="#">СОТРУДНИЧЕСТВО</a></li>
                    <li><a href="#">КАРТА ПАРТНЕРА</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<?=$content?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
