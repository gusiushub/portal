<?php

?>

<section class="profile3">
    <div class="container">
        <div class="row no-gutters margin-bottom-medium">
            <div class="col-lg-6 vertical-center">
                <div class="sub-title">
                    <h3 class="sub-title__title">
                        select the option to show statistics:
                    </h3>
                </div>
            </div>
            <div class="col-lg-3 vertical-center">
                <div class="select-style">
                    <select name="refine" id="" class="select-style__select">
                        <option class="select-style__placeholder">excellent</option>
                        <option value="">text</option>
                        <option value="">text</option>
                    </select>
                    <div class="select-style__arrow">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="statistics">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="statistics__title margin-bottom-light">
                                users visited
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="chart">
                                <canvas id="chart-statistics"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                    <h5 class="statistics__sub-title margin-bottom-light">
                                        visits per:
                                    </h5>
                                    <div class="select-style">
                                        <select name="day" id="" class="select-style__select">
                                            <option class="select-style__placeholder">day</option>
                                            <option value="">text</option>
                                            <option value="">text</option>
                                        </select>
                                        <div class="select-style__arrow">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6 vertical-bottom">
                                                <span class="statistics__count">
                                                    145632
                                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
</main>
<?php $this->endBody() ?>
</body>

<script src="libs/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("chart-statistics").getContext('2d');
    var myBarChart = new Chart(ctx, {
        options: {
            elements: {
                line: {
                    tension: 0
                }
            },
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false
                    }
                }]
            },
            tooltips: {
                mode: false,
                callbacks: {
                    title: function() {},
                    label: function() {}
                }
            }
        },
        // The type of chart we want to create
        type: "line",
        // The data for our dataset
        data: {
            labels: [
                "2015-10-01",
                "2015-10-01",
                "2015-10-01",
                "2015-10-01",
                "2015-10-01",
                "2015-10-01",
                "2015-10-01"
            ],
            datasets: [{
                backgroundColor: "rgb(206, 225, 240)",
                borderColor: "rgb(72, 137, 191)",
                data: [0, 25, 50, 150, 70, 250, 230, 400]
            }]
        }
    });
</script>
<script src="js/common.js"></script>