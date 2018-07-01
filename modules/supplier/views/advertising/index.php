<?php

//use yii\helpers\Html;
//use yii\grid\GridView;
//
///* @var $this yii\web\View */
///* @var $searchModel app\models\AdvertisingSearch */
///* @var $dataProvider yii\data\ActiveDataProvider */
//
//$this->title = 'Advertisings';
//$this->params['breadcrumbs'][] = $this->title;
//?>
<!--<div class="advertising-index">-->
<!---->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!--    --><?php //// echo $this->render('_search', ['model' => $searchModel]); ?>
<!---->
<!--    <p>-->
<!--        --><?//= Html::a('Create Advertising', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
<!---->
<!--    --><?//= GridView::widget([
//        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
//            'title',
//            'vessel_type',
//            'option_vessel',
//            'length_from',
//            //'length_to',
//            //'draft_from',
//            //'draft_to',
//            //'deadweight_from',
//            //'deadweight_to',
//            //'year_from',
//            //'year_to',
//            //'price_from',
//            //'price_to',
//            //'currency',
//            //'faculty',
//            //'flag',
//            //'position',
//            //'lvl_eng',
//            //'salary',
//            //'port',
//            //'country',
//            //'description:ntext',
//            //'content:ntext',
//            //'date',
//            //'image',
//            //'viewed',
//            //'user_id',
//            //'status',
//            //'category_id',
//
//            ['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]); ?>
<!--</div>-->
<!--<section class="profile5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="cards-wrapper horizontal-between margin-bottom-light">-->
<!--                    <div class="sell-card sell-card--mini">-->
<!--                        <div class="sell-card__cost">-->
<!--                            <img src="../../img/silver.png" alt="cost" class="sell-card__image">-->
<!--                        </div>-->
<!--                        <div class="sell-card__information">-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Placement of advertisng  banner on two pages of the we iste (On your choice from Ad-->
<!--                                space available at the time of the placement).-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Banner placement for 1 month-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Possibility to place a banner in GIF or JPEG format-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="sell-card__button">-->
<!--                            <button class="button button--transparent">-->
<!--                                your pocket-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="sell-card sell-card--mini">-->
<!--                        <div class="sell-card__cost">-->
<!--                            <img src="../../img/gold.png" alt="cost" class="sell-card__image">-->
<!--                        </div>-->
<!--                        <div class="sell-card__information">-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Placement of advertisng  banner on three pages of the we iste (On your choice from Ad-->
<!--                                space available at the time of the placement).-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Banner placement for 1 month-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Possibility to place a banner in GIF or JPEG format-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Possibility to change the desing of the banner-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left margin-bottom-light">-->
<!--                                - Transition from the banner to the company's webpage upon clicking-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="sell-card__button">-->
<!--                            <button class="button">-->
<!--                                Select package-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="sell-card sell-card--mini">-->
<!--                        <div class="sell-card__cost">-->
<!--                            <img src="../../img/platinum.png" alt="cost" class="sell-card__image">-->
<!--                        </div>-->
<!--                        <div class="sell-card__information">-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Placement of advertisng  banner on all pages of the we iste (On your choice from Ad-->
<!--                                space available at the time of the placement).-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Banner placement for 1 month-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Possibility to place a banner in GIF or JPEG format-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">-->
<!--                                - Possibility to change the desing of the banner-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left margin-bottom-light">-->
<!--                                - Transition from the banner to the company's webpage upon clicking-->
<!--                            </p>-->
<!--                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left margin-bottom-light">-->
<!--                                - Desing process of the advertising banner by our specialists-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="sell-card__button">-->
<!--                            <button class="button">-->
<!--                                Select package-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="sub-title margin-bottom-light">-->
<!--                    <h3 class="sub-title__title">-->
<!--                        select the page to place your advertising:-->
<!--                    </h3>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="slider-advertising">-->
<!--                    <div class="slider-advertising__slide" data-number='1'>-->
<!--                        <div class="slider-advertising__display">-->
<!--                            <img src="../../img/mini_find_a_supplier.jpg" alt="screen-image" class="slider-advertising__image">-->
<!--                            <h5 class="slider-advertising__headline">-->
<!--                                find a supplier-->
<!--                            </h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="slider-advertising__slide" data-number='2'>-->
<!--                        <div class="slider-advertising__display">-->
<!--                            <img src="../../img/mini_find_a_crew.jpg" alt="screen-image" class="slider-advertising__image">-->
<!--                            <h5 class="slider-advertising__headline">-->
<!--                                find a crew-->
<!--                            </h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="slider-advertising__slide" data-number='3'>-->
<!--                        <div class="slider-advertising__display">-->
<!--                            <img src="../../img/mini_find_a_student.jpg" alt="screen-image" class="slider-advertising__image">-->
<!--                            <h5 class="slider-advertising__headline">-->
<!--                                find a student-->
<!--                            </h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="slider-advertising__slide" data-number='4'>-->
<!--                        <div class="slider-advertising__display">-->
<!--                            <img src="../../img/mini_find_vessels.jpg" alt="screen-image" class="slider-advertising__image">-->
<!--                            <h5 class="slider-advertising__headline" >-->
<!--                                find a vessels-->
<!--                            </h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="slider-advertising__slide" data-number='5'>-->
<!--                        <div class="slider-advertising__display">-->
<!--                            <img src="../../img/mini_find_chartering.jpg" alt="screen-image" class="slider-advertising__image">-->
<!--                            <h5 class="slider-advertising__headline">-->
<!--                                find a chartering-->
<!--                            </h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row horizontal-between">-->
<!--            <div class="col-lg-2 col-md-3 col-sm-4 col-4">-->
<!--                <button class="button">-->
<!--                    back-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="col-lg-2 col-md-3 col-sm-4 col-4">-->
<!--                <button class="button">-->
<!--                    pay-->
<!--                </button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section class="profile5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cards-wrapper horizontal-between margin-bottom-light">
                    <div class="sell-card sell-card--mini">
                        <div class="sell-card__cost">
                            <img src="../../../../img/silver.png" alt="cost" class="sell-card__image">
                        </div>
                        <div class="sell-card__information">
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Placement of advertisng  banner on two pages of the we iste (On your choice from Ad
                                space available at the time of the placement).
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Banner placement for 1 month
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Possibility to place a banner in GIF or JPEG format
                            </p>
                        </div>
                        <div class="sell-card__button">
                            <button class="button button--transparent">
                                your pocket
                            </button>
                        </div>
                    </div>
                    <div class="sell-card sell-card--mini">
                        <div class="sell-card__cost">
                            <img src="../../../../img/gold.png" alt="cost" class="sell-card__image">
                        </div>
                        <div class="sell-card__information">
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Placement of advertisng  banner on three pages of the we iste (On your choice from Ad
                                space available at the time of the placement).
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Banner placement for 1 month
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Possibility to place a banner in GIF or JPEG format
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Possibility to change the desing of the banner
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left margin-bottom-light">
                                - Transition from the banner to the company's webpage upon clicking
                            </p>
                        </div>
                        <div class="sell-card__button">
                            <button class="button">
                                Select package
                            </button>
                        </div>
                    </div>
                    <div class="sell-card sell-card--mini">
                        <div class="sell-card__cost">
                            <img src="../../../../img/platinum.png" alt="cost" class="sell-card__image">
                        </div>
                        <div class="sell-card__information">
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Placement of advertisng  banner on all pages of the we iste (On your choice from Ad
                                space available at the time of the placement).
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Banner placement for 1 month
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Possibility to place a banner in GIF or JPEG format
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                - Possibility to change the desing of the banner
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left margin-bottom-light">
                                - Transition from the banner to the company's webpage upon clicking
                            </p>
                            <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left margin-bottom-light">
                                - Desing process of the advertising banner by our specialists
                            </p>
                        </div>
                        <div class="sell-card__button">
                            <button class="button">
                                Select package
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="sub-title margin-bottom-light">
                    <h3 class="sub-title__title">
                        select the page to place your advertising:
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-advertising">
                    <div class="slider-advertising__slide" data-number='1'>
                        <div class="slider-advertising__display">
                            <img src="../../../../img/mini_find_a_supplier.jpg" alt="screen-image" class="slider-advertising__image">
                            <h5 class="slider-advertising__headline">
                                find a supplier
                            </h5>
                        </div>
                    </div>
                    <div class="slider-advertising__slide" data-number='2'>
                        <div class="slider-advertising__display">
                            <img src="../../../../img/mini_find_a_crew.jpg" alt="screen-image" class="slider-advertising__image">
                            <h5 class="slider-advertising__headline">
                                find a crew
                            </h5>
                        </div>
                    </div>
                    <div class="slider-advertising__slide" data-number='3'>
                        <div class="slider-advertising__display">
                            <img src="../../../../img/mini_find_a_student.jpg" alt="screen-image" class="slider-advertising__image">
                            <h5 class="slider-advertising__headline">
                                find a student
                            </h5>
                        </div>
                    </div>
                    <div class="slider-advertising__slide" data-number='4'>
                        <div class="slider-advertising__display">
                            <img src="../../../../img/mini_find_vessels.jpg" alt="screen-image" class="slider-advertising__image">
                            <h5 class="slider-advertising__headline" >
                                find a vessels
                            </h5>
                        </div>
                    </div>
                    <div class="slider-advertising__slide" data-number='5'>
                        <div class="slider-advertising__display">
                            <img src="../../../../img/mini_find_chartering.jpg" alt="screen-image" class="slider-advertising__image">
                            <h5 class="slider-advertising__headline">
                                find a chartering
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row horizontal-between">
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <button class="button">
                    back
                </button>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <button class="button">
                    pay
                </button>
            </div>
        </div>
    </div>
</section>
</main>
<footer class="footer">
    <div class="container">
        <div class="row margin-bottom-light">
            <div class="col-lg-6">
                <div class="logotype-box">
                    <img src="../../../../img/logotype-big.png" alt="logotype" class="logotype-box__footer">
                </div>
            </div>
            <div class="col-lg-6">
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
                        <img src="../../../../img/icons/soc-mail.png" alt="mail">
                    </a>
                    <a href="#" class="social-networks__link">
                        <img src="../../../../img/icons/soc-mobile.png" alt="mobile">
                    </a>
                    <a href="#" class="social-networks__link">
                        <img src="../../../../img/icons/soc-skype.png" alt="skype">
                    </a>
                    <a href="#" class="social-networks__link">
                        <img src="../../../../img/icons/soc-mobile-2.png" alt="mobile">
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
<div class="slider-advertising__modal vertical-center" data-number='1'>
    <div class="slider-advertising__wrapper">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            Find a supplier
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../../../img/modal/modal_find_a_supplier_500x289.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile slider-advertising__back" data-number='1'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--motd-end-->
<div class="slider-advertising__modal vertical-center" data-number='2'>
    <div class="slider-advertising__wrapper">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            Find a crew
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../../../img/modal/modal_find_a_crew_500x400.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile slider-advertising__back" data-number='2'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--motd-end-->
<div class="slider-advertising__modal vertical-center" data-number='3'>
    <div class="slider-advertising__wrapper">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            Find a student
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../../../img/modal/modal_find_a_student_500x435.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile slider-advertising__back" data-number='3'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--motd-end-->
<div class="slider-advertising__modal vertical-center" data-number='4'>
    <div class="slider-advertising__wrapper">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            find a vessels
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../../../img/modal/modal_find_vessels_500x480.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile slider-advertising__back" data-number='4'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--motd-end-->
<div class="slider-advertising__modal vertical-center" data-number='5'>
    <div class="slider-advertising__wrapper">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            find a chartering
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../../../img/modal/modal_find_chartering_500x480.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                            <div class="slider-advertising__available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile slider-advertising__back" data-number='5'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--motd-end-->
</body>
<script src="../../../../libs/jQuery/jquery-3.3.1.min.js"></script>
<script src="../../../../js/common.js"></script>
<script src="../../../../libs/slick/slick.min.js"></script>
<script>
    $('.slider-advertising').slick({
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1238,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 1026,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 800,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<style>
    .slick-prev:before,
    .slick-next:before {
        display: none;
    }

    .slick-prev,
    .slick-next {
        width: 50px;
        height: 100px;
        z-index:5;
    }

    .slick-prev,.slick-prev:hover,.slick-prev:focus {
        left: 24px;
        background: url(../../../../img/icons/arrow-left.png);
        background-repeat: no-repeat;
        background-position: center;
        transform: translate(-60%,-50%);
    }

    .slick-next,.slick-next:hover,.slick-next:focus {
        right: 24px;
        background: url(../../../../img/icons/arrow-right.png);
        background-repeat: no-repeat;
        background-position: center;
        transform: translate(60%,-50%);
    }
</style>


