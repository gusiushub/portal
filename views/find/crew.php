<?php



$arr1 = $model->getAll('faculty');
$arr2 = $model->getAll('lvl_eng');
$arr3 = $model->getAll('port');
$arr4 = $model->getAll('country');
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
                <a href='/find/crew' class="primary-menu__item primary-menu__item--active">
                    <img src="../../img/img.png" alt="icon" class="primary-menu__icon">
                    <h3 class="primary-menu__title">
                        find a crew
                    </h3>
                </a>
                <a href='/find/student' class="primary-menu__item">
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
    <section class="find-a-crew">
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
                                Position
                            </h4>
                            <div class="select-style">
                                <select name="refine" id="" class="select-style__select">
                                    <?php foreach ($arr1 as $item): ?>
                                    <option class="select-style__placeholder"><?php echo $item->faculty; ?></option>
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
                                <select name="users-visited" id="" class="select-style__select">
                                    <option class="select-style__placeholder">users visited</option>
                                    <option value="">text</option>
                                    <option value="">text</option>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="filter__doubleitem-wrapper margin-bottom-medium">
                            <div class="filter__item filter__item--double-1">
                                <h4 class="filter__title">
                                    Salary
                                </h4>
                                <div class="select-style">
                                    <select name="refine" id="" class="select-style__select">
                                        <option class="select-style__placeholder">maximum</option>
                                        <option value="">text</option>
                                        <option value="">text</option>
                                    </select>
                                    <div class="select-style__arrow">&nbsp;</div>
                                </div>
                            </div>
                            <div class="filter__item filter__item--double-2">
                                <h4 class="filter__title">
                                    Curency
                                </h4>
                                <div class="select-style">
                                    <select name="refine" id="" class="select-style__select">
                                        <option class="select-style__placeholder">eur</option>
                                        <option value="">text</option>
                                        <option value="">text</option>
                                    </select>
                                    <div class="select-style__arrow">&nbsp;</div>
                                </div>
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
                    <div class="advertising-wrapper">
                        <a href='#' class="advertising">
                            <p class="advertising__content">advertising</p>
                        </a>
                        <a href='#' class="advertising">
                            <p class="advertising__content">advertising</p>
                        </a>
                        <a href='#' class="advertising">
                            <p class="advertising__content">advertising</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising">
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
