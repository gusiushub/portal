<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Статья о кроликах" />
    <meta name="keywords" content="кролики, разведение, питание" />
    <link rel="shortcut icon" type="image/png" href="../../img/favicon.png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php if($_SERVER['REDIRECT_URL']=='/' or $_SERVER['REDIRECT_URL']=='')  {?>
    <header class="header header--blue">
        <div class="container">
            <div class="top-navbar">
                <div class="row">
                    <div class="col-lg-6 vertical-center">
                        <div class="logotype-box">
                            <a href="#"><img src="../../img/white-logo.png" alt="logotype" class="logotype-box__logo logotype-box__logo--white"></a>
                        </div>
                        <div class="adaptive-menu">
                            <div class="adaptive-menu__button adaptive-menu__button--white">
                                <img src="../../img/icons/burger-white.png" alt="burger">
                            </div>
                            <nav class="adaptive-menu__navigation adaptive-menu__navigation--main-page">
                                <ul class="adaptive-menu__list">
                                    <li class="adaptive-menu__item">
                                        <a href="/guest/login" class="adaptive-menu__link">
                                            Sign In
                                        </a>
                                    </li>
                                    <li class="adaptive-menu__item">
                                        <a href="/guest/signup" class="adaptive-menu__link">
                                            Sign Up
                                        </a>
                                    </li>
                                    <li class="adaptive-menu__item">
                                        <a href="#" class="adaptive-menu__link">
                                            Contacts
                                        </a>
                                    </li>
                                    <li class="adaptive-menu__item">
                                        <a href="#" class="adaptive-menu__link">
                                            Faq
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="authorization">
                            <a href="/guest/login" class="authorization__link authorization__link--white">
                                Sign In
                            </a>
                            <a href="/guest/signup" class="authorization__link authorization__link--white">
                                Sign Up
                            </a>
                            <a href="#" class="authorization__link authorization__link--white">
                                Faq
                            </a>
                            <a href="#" class="authorization__link authorization__link--white">
                                Contacts
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php }else{ ?>

<header class="header">
    <div class="container">
        <div class="top-navbar">
            <div class="row">
                <div class="col-lg-12 vertical-center horizontal-between">
                    <div class="logotype-box">
                        <a href="#"><img src="../../img/logotype.png" alt="logotype" class="logotype-box__logo"></a>
                    </div>
                    <div class="authorization">
                        <a href="/guest/login" class="authorization__link">
                            Sign In
                        </a>
                        <a href="/guest/signup" class="authorization__link">
                            Sign Up
                        </a>
                    </div>
                    <div class="adaptive-menu">
                        <div class="adaptive-menu__button">
                            <img src="../../img/icons/burger.png" alt="burger">
                        </div>
                        <nav class="adaptive-menu__navigation">
                            <ul class="adaptive-menu__list">
                                <li class="adaptive-menu__item">
                                    <a href="/guest/login" class="adaptive-menu__link">
                                        Sign In
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/guest/signup" class="adaptive-menu__link">
                                        Sign Up
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/find/supplier" class="adaptive-menu__link">
                                        Find a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/guest/supplier" class="adaptive-menu__link">
                                        Become a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/find/crew" class="adaptive-menu__link adaptive-menu__link--active">
                                        Crew
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/find/vessels" class="adaptive-menu__link">
                                        Vessels sell/chartering
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Chartering market
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Contacts
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Faq
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secondary-navbar ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="secondary-navigation">
                        <ul class="secondary-navigation__list">
                            <li class="secondary-navigation__item">
                                <a href="/find/supplier" class="secondary-navigation__link secondary-navigation__link--active">
                                    Find a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="/guest/supplier" class="secondary-navigation__link">
                                    Become a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="/find/crew" class="secondary-navigation__link">
                                    Crew
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="/find/vessels" class="secondary-navigation__link">
                                    Vessels sell/chartering
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Chartering market
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Contacts
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Faq
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php } ?>
<main>
    <?= $content ?>
</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
