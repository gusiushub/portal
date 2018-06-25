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
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php if($_SERVER['REDIRECT_URL']=='') {?>
    <header class="header header--blue">
        <div class="container">
            <div class="top-navbar">
                <div class="row">
                    <div class="col-lg-6 vertical-center">
                        <div class="logotype-box">
                            <a href="#"><img src="img/white-logo.png" alt="logotype" class="logotype-box__logo logotype-box__logo--white"></a>
                        </div>
                        <div class="adaptive-menu">
                            <div class="adaptive-menu__button adaptive-menu__button--white">
                                <img src="img/icons/burger-white.png" alt="burger">
                            </div>
                            <nav class="adaptive-menu__navigation adaptive-menu__navigation--main-page">
                                <ul class="adaptive-menu__list">
                                    <li class="adaptive-menu__item">
                                        <a href="#" class="adaptive-menu__link">
                                            Sign In
                                        </a>
                                    </li>
                                    <li class="adaptive-menu__item">
                                        <a href="#" class="adaptive-menu__link">
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
                            <a href="#" class="authorization__link authorization__link--white">
                                Sign In
                            </a>
                            <a href="#" class="authorization__link authorization__link--white">
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
    <main>
        <section class="page-start">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 horizontal-center">
                        <div class="company-description">
                            <img src="img/logotype-big.png" alt="logotype" class="company-description__logo margin-bottom-light">
                            <div class="company-description__spetifications">
                                <p class="company-description__paragraph">
                                    The main aim of the portal is to minimise the searching time of needed
                                </p>
                                <p class="company-description__paragraph margin-bottom-medium">
                                    <span class="company-description__paragraph--blue">services, goods, crew, vessels and cargo</span> in any part of the world.
                                </p>
                                <p class="company-description__paragraph">
                                    Thanks to the capacious data-base and unique searching system
                                </p>
                                <p class="company-description__paragraph">
                                    you can easily find or offer everything you need in any port of the world!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="five-buttons horizontal-between">
                            <a href='#' class="five-buttons__item">
                                <div class="icon-wrapper">
                                    <img src="img/icons/zoom-5btn.png" alt="zoom" class="five-buttons__icon">
                                </div>
                                <h4 class="five-buttons__title">
                                    Find a supplier
                                </h4>
                            </a>
                            <a href='#' class="five-buttons__item">
                                <div class="icon-wrapper">
                                    <img src="img/icons/hands-5btn.png" alt="hands" class="five-buttons__icon">
                                </div>
                                <h4 class="five-buttons__title">
                                    Become a supplier
                                </h4>
                            </a>
                            <a href='#' class="five-buttons__item">
                                <div class="icon-wrapper">
                                    <img src="img/icons/case-5btn.png" alt="case" class="five-buttons__icon">
                                </div>
                                <h4 class="five-buttons__title">
                                    Crew
                                </h4>
                            </a>
                            <a href='#' class="five-buttons__item">
                                <div class="icon-wrapper">
                                    <img src="img/icons/ship-5btn.png" alt="ship" class="five-buttons__icon">
                                </div>
                                <h4 class="five-buttons__title">
                                    Vessels sell/chartering
                                </h4>
                            </a>
                            <a href='#' class="five-buttons__item">
                                <div class="icon-wrapper">
                                    <img src="img/icons/changing-5btn.png" alt="changing" class="five-buttons__icon">
                                </div>
                                <h4 class="five-buttons__title">
                                    Chartering market
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row margin-bottom-light">
                <div class="col-lg-4">
                    <div class="logotype-box">
                        <img src="img/logotype-big.png" alt="logotype" class="logotype-box__footer">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-2">
                    <div class="footer-nav-wrapper">
                        <div class="footer-nav">
                            <h4 class="footer-nav__title">
                                For partners
                            </h4>
                            <ul class="footer-nav__list">
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Find a supplier
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Become a supplier
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Crew
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Vessels sell/chartering
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Chartering market
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-nav">
                            <h4 class="footer-nav__title">
                                Learn more
                            </h4>
                            <ul class="footer-nav__list">
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Contacts
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Faq
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Terms and Conditions
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Sign In
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom-light">
                <div class="col-lg-12">
                    <div class="social-networks">
                        <a href="#" class="social-networks__link">
                            <img src="img/icons/soc-mail.png" alt="mail">
                        </a>
                        <a href="#" class="social-networks__link">
                            <img src="img/icons/soc-mobile.png" alt="mobile">
                        </a>
                        <a href="#" class="social-networks__link">
                            <img src="img/icons/soc-skype.png" alt="skype">
                        </a>
                        <a href="#" class="social-networks__link">
                            <img src="img/icons/soc-mobile-2.png" alt="mobile">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 horizontal-between">
                    <div class="copyright">
                        <p class="copyright__content">
                            © MarineNotes, 2018
                        </p>
                    </div>
                    <div class="copyright">
                        <p class="copyright__design-by">
                            Design by HoteyCompany
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php }else{ ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<?php } ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
