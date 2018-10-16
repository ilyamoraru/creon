<?php
/*
Template name: Инвестиционная стратегия
*/
get_header();
?>
    <main class="corporate">
        <div class="corporate-page strategy-page">
            <div class="corporate-block1 container-fluid" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.14)), url('<?= ot_get_option('strategy_bg') ?>')">
                <h3 class="page-subitle"><?= get_post_meta($post->ID, 'sub_first', true) ?></h3>
                <p class="quotes">”</p>
                <h2 class="page-title"><?= get_post_meta($post->ID, 'site_title', true) ?>
                </h2>
            </div>
            <div class="container-fluid corp-wrap">

                <div class="row">
                    <div class="col-xl-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID, 'desc1', true) ?>
                        </p>
                    </div>
                    <div class="corp-cont">
                        <div class="link link1" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.0)), url('<?= ot_get_option('corporate_bg') ?>')">
                            <a href="<?= get_post_meta($post->ID, 'link1', true) ?>">
                                <h3><?= get_post_meta($post->ID, 'link1_name', true) ?></h3>
                                <img src="/wp-content/themes/creon/img/icons/left_arrow.svg" class="d-none d-xl-block" alt="">
                                <img src="/wp-content/themes/creon/img/icons/right_arrow.svg" class="d-block d-xl-none" alt="">
                            </a>
                        </div>
                        <div class="link link2" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.36), rgba(0,0,0,0)), url('<?= ot_get_option('project_bg') ?>'); background-position: 50% 50%">
                            <a href="<?= get_post_meta($post->ID, 'link2', true) ?>">
                                <h3><?= get_post_meta($post->ID, 'link2_name', true) ?></h3>
                                <img src="/wp-content/themes/creon/img/icons/left_arrow.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <h3 class="page-subtitle_big">
                            <?= get_post_meta($post->ID,'title1', true) ?></h3>
                    </div>
                    <div class="col-xl-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID, 'desc2', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9 grey-bg">
                        <p class="page-content_big">
                            <?= get_post_meta($post->ID, 'desc_grey1', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID,'desc3', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9 corp-list-cont">
                        <?php $str_slider = get_post_meta($post->ID, 'strategy_slider1', true) ?>
                        <ul class="corp2-list">
                            <?php
                                $i=1;
                                foreach ($str_slider as $slide1) {
                                $img = $slide1['strategy_slider_img'];
                                $title1 = $slide1['strategy_slider_title1'];
                                ?>
                            <li class="corp2-item">
                                <img src="<?= $img ?>" alt="" class="corp2<?= $i; $i++ ?>">
                                <p><?= $title1 ?></p>
                            </li>
                                    <?php } ?>
                        </ul>
                    </div>
                    <div class="col-xl-9">
                        <h3 class="page-subtitle_big" style="margin-top: 0">
                            <?= get_post_meta($post->ID,'title2', true) ?>
                        </h3>
                    </div>
                    <div class="col-xl-9">
                        <?php $str_slider2 = get_post_meta($post->ID, 'strategy_slider2', true) ?>
                        <ul class="corp-list">
                            <?php
                            foreach ($str_slider2 as $slide2) {
                                $title2 = $slide2['strategy_slider_title2'];
                                $desc2 = $slide2['strategy_slider_subtitle1'];
                                ?>
                            <li class="corp-item">
                                <div class="corp-top">
                                    <h4 class="corp-title"><?= $title2 ?></h4>
                                </div>
                                <div class="corp-bottom ">
                                    <p><?= $desc2 ?>
                                    </p>
                                </div>
                                <div class="show-btn">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                </div>
                            </li>
                                <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php

get_footer();
