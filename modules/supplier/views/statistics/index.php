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
