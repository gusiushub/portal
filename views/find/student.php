<?php

?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-headline">
                    <h1 class="main-headline__title">
                        Find a crew
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/find/crew' class="primary-menu__item">
                        <img src="../../img/img.png" alt="icon" class="primary-menu__icon">
                        <h3 class="primary-menu__title">
                            find a crew
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item primary-menu__item--active">
                        <img src="../../img/img.png" alt="icon" class="primary-menu__icon">
                        <h3 class="primary-menu__title">
                            find a students (Practice on Board)
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <img src="../../img/img.png" alt="icon" class="primary-menu__icon">
                        <h3 class="primary-menu__title">
                            place a CV Crew/Students
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 vertical-bottom ">
                <a href='#' class="advertising advertising--oneitem">
                    <p class="advertising__content">advertising</p>
                </a>
            </div>
        </div>
    </div>
</header>
    <section class="find-a-student">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter">
                        <div class="secondary-headline margin-bottom-light">
                            <h2 class="secondary-headline__title">
                                find a crew
                            </h2>
                        </div>
                        <div class="filter__item margin-bottom-light">
                            <h4 class="filter__title">
                                Faculty
                            </h4>
                            <?php
                                $arr1 = $model->getAll('faculty');
                                $arr2 = $model->getAll('lvl_eng');
                                $arr3 = $model->getAll('port');
                                $arr4 = $model->getAll('country');
                             ?>
                            <div class="select-style">
                                <select name="refine"  class="select-style__select">
                                    <?php foreach ($arr1 as $item): ?>
                                    <option ><?php echo $item->faculty; ?></option>
                                    <?php endforeach ?>
                                </select>

                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="filter__item margin-bottom-light">
                            <h4 class="filter__title">
                                Level of English
                            </h4>
                            <div class="select-style">
                                <select name="refine"  class="select-style__select">
                                    <?php foreach ($arr2 as $item): ?>
                                        <option ><?php echo $item->lvl_eng; ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="filter__item margin-bottom-light">
                            <h4 class="filter__title">
                                Country
                            </h4>
                            <div class="select-style">
                                <select name="refine"  class="select-style__select">
                                    <?php foreach ($arr3 as $item): ?>
                                        <option ><?php echo $item->port; ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="filter__item margin-bottom-medium">
                            <h4 class="filter__title">
                                Port
                            </h4>
                            <div class="select-style">
                                <select name="refine"  class="select-style__select">
                                    <?php foreach ($arr4 as $item): ?>
                                        <option ><?php echo $item->country; ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="filter__item">
                            <button class="button button--show-results">
                                Show result
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising advertising--find-student">
                        <p class="advertising__content">advertising</p>
                    </a>
                    <a href='#' class="advertising advertising--find-student">
                        <p class="advertising__content">advertising</p>
                    </a>
                    <a href='#' class="advertising advertising--find-student">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href='#' class="advertising advertising--find-student">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising advertising--find-student">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising advertising--find-student">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
<footer class="footer">
    <div class="container">
        <div class="row margin-bottom-light">
            <div class="col-lg-6">
                <div class="logotype-box">
                    <img src="../../img/logotype-big.png" alt="logotype" class="logotype-box__footer">
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
                                <a href="/find/vessels" class="footer-nav__link">
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
                        <img src="../../img/icons/soc-mail.png" alt="mail">
                    </a>
                    <a href="#" class="social-networks__link">
                        <img src="../../img/icons/soc-mobile.png" alt="mobile">
                    </a>
                    <a href="#" class="social-networks__link">
                        <img src="../../img/icons/soc-skype.png" alt="skype">
                    </a>
                    <a href="#" class="social-networks__link">
                        <img src="../../img/icons/soc-mobile-2.png" alt="mobile">
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

