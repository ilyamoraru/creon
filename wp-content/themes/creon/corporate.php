<?php
/*
Template name: Корпоративная стратегия
*/
get_header();
?>
    <main class="corporate">
        <div class="corporate-page">
            <div class="corporate-block1 container-fluid" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.0)), url('<?= ot_get_option('corporate_bg') ?>')">
                <h3 class="page-subitle"><?= get_post_meta($post->ID, 'site_title', true); ?></h3>
                <p class="quotes">”</p>
                <h2 class="page-title"><?= get_post_meta($post->ID, 'sub_first', true);  ?></h2>
            </div>
            <div class="container-fluid corp-wrap">

                <div class="row">
                    <div class="col-xl-9 ">
                        <p class="page-content">
                            <?= get_post_meta($post->ID, 'desc1', true) ?>
                        </p>
                    </div>
                    <div class="corp-cont">
                        <div class="link link1" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.14)), url('<?= ot_get_option('strategy_bg') ?>')">
                            <a href="<?= get_post_meta($post->ID, 'link1', true) ?>">
                                <h3><?= get_post_meta($post->ID, 'link1_name', true) ?></h3>
                                <img src="/wp-content/themes/creon/img/icons/left_arrow.svg" class="d-none d-xl-block" alt="">
                                <img src="/wp-content/themes/creon/img/icons/right_arrow.svg" class="d-block d-xl-none" alt="">
                            </a>
                        </div>
                        <div class="link link2" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.36), rgba(0,0,0,0)), url('<?= ot_get_option('project_bg') ?>')">
                            <a href="<?= get_post_meta($post->ID, 'link2', true) ?>">
                                <h3><?= get_post_meta($post->ID, 'link2_name', true) ?></h3>
                                <img src="/wp-content/themes/creon/img/icons/left_arrow.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 grey-bg">
                        <p class="page-content_big">
                            <?= get_post_meta($post->ID, 'desc_grey1', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID, 'desc2', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9 img-cont">
                        <img src="<?= ot_get_option('corporate_img') ?>" alt="" class="inner-img">
                    </div>
                    <div class="col-xl-9 grey-bg">
                        <p class="page-content_big">
                            <?= get_post_meta($post->ID, 'desc_grey2', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9">
                        <h3 class="page-subtitle_big">
                            <?= get_post_meta($post->ID, 'title1', true) ?>
                        </h3>
                    </div>
                    <div class="col-xl-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID, 'desc3', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9 grey-bg">
                        <p class="page-content_big">
                            <?= get_post_meta($post->ID, 'desc_grey3', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9">
                        <p class="page-content margin-custom"><?= get_post_meta($post->ID, 'desc4', true) ?></p>
                    </div>
                    <div class="col-xl-9">
                        <h3 class="page-subtitle_big"><?= get_post_meta($post->ID, 'title2', true) ?></h3>
                    </div>
                    <div class="col-xl-9">
                        <?php $slider_corp = get_post_meta($post->ID, 'corporate_slider', true);
                        ?>
                        <ul class="corp-list">
                            <?php
                                $i = 1;
                                foreach ($slider_corp as $slide) {
                              $img = $slide['corporate_slider_img'];
                              $title = $slide['corporate_slider_title'];
                              $desc = $slide['corporate_slider_subtitle'];
                            ?>
                            <li class="corp-item">
                                <div class="corp-top">
                                    <img src="<?= $img ?>" class="corp<?= $i; $i++ ?>" alt="">
                                    <h4 class="corp-title"><?= $title ?></h4>
                                </div>
                                <div class="corp-bottom ">
                                    <p><?= $desc ?>
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
