<?php


?>

    <div class="secondary-navbar margin-bottom-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="secondary-navigation">
                        <ul class="secondary-navigation__list">
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link secondary-navigation__link--active">
                                    Find a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Become a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Crew
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
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
                    <a href='#' class="primary-menu__item">
                        <img src="img/img.png" alt="icon" class="primary-menu__icon">
                        <h3 class="primary-menu__title">
                            find a crew
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item primary-menu__item--active">
                        <img src="img/img.png" alt="icon" class="primary-menu__icon">
                        <h3 class="primary-menu__title">
                            find a students (Practice on Board)
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <img src="img/img.png" alt="icon" class="primary-menu__icon">
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
<main>
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
</main>

