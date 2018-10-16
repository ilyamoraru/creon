<?php
/*
Template name:  Зелёная экономика
*/
get_header();
?>

    <main class="green">
        <section class="green-page">
            <div class="green-block1 container-fluid" style="background-image: url('<?= ot_get_option('green_bg') ?>')">
                <div class="row">
                    <div class="block1-top col-12">
                        <img src="<?= ot_get_option('green_bear') ?>" alt="">
                        <h2 class="title"><?= get_post_meta($post->ID,'site_title', true) ?></h2>
                    </div>
                    <div class="col-12">
                        <h3 class="subtitle"><?= get_post_meta($post->ID, 'sub1', true); ?></h3>
                        <p class="desc"><?= get_post_meta($post->ID, 'sub2', true); ?>
                        </p>
                    </div>
                </div>
                <div class="col-4 link" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.0)),url('<?= ot_get_option('main_bg') ?>')">
                    <a href="/">
                        <h3 class="title-link"><?= get_post_meta($post->ID, 'link1', true) ?></h3>
                        <p class="desc-link"><?= get_post_meta($post->ID, 'link1_name', true) ?></p>
                    </a>
                </div>
            </div>
            <div class="green-block2 container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title"><?= get_post_meta($post->ID, 'title1', true) ?></h2>
                    </div>
                    <div class="col-lg-7">
                        <p class="desc"><?= get_post_meta($post->ID, 'desc1', true) ?>
                        </p>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <h3 class="big"><?= get_post_meta($post->ID, 'title2', true) ?></h3>
                        <p class="small"><?= get_post_meta($post->ID, 'desc2', true) ?></p>
                    </div>
                </div>
            </div>
            <div class="green-block3 corporate-page container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        <?php $green_slider1 = get_post_meta($post->ID, 'green_slider_1', true) ?>
                        <ul class="corp-list">
                            <?php foreach ($green_slider1 as $slide1) {
                                $title1 = $slide1['green_slider1_name'];
                                $desc1 = $slide1['green_slider1_desc'];
                            ?>
                            <li class="corp-item">
                                <div class="corp-top">
                                    <h4 class="corp-title"><?= $title1 ?></h4>
                                </div>
                                <div class="corp-bottom ">
                                    <p><?= $desc1 ?>
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
            <div class="green-block4 container-fluid" style="background-image: url('<?= ot_get_option('green_list') ?>')">
                <div class="row">
                    <div class="col-sm-8 col-12">
                        <h3 class="title"><?= get_post_meta($post->ID, 'desc3', true) ?></h3>
                        <?php $green_slider2 = get_post_meta($post->ID, 'green_slider_2', true) ?>
                        <ul>
                            <?php foreach ($green_slider2 as $slide2) {
                                $desc2 = $slide2['green_slider2_desc'];
                                ?>
                            <li><?= $desc2 ?>
                            </li>
    <?php } ?>
                        </ul>
                        <a href="<?= ot_get_option('green_method') ?>" target="_blank" class="download-btn"><?= get_post_meta($post->ID, 'desc4', true ?></a>
                    </div>
                </div>
            </div>
            <div class="green-block5-wrap container-fluid">
                <h2 class="block5-title"><?= get_post_meta($post->ID, 'title4', true) ?></h2>
                <div class="green-block5 ">
                    <?php
                    $args1 = array(
                      'posts_per_page' => 5,
                      'cat' => 20,
                    );

                        $query = new WP_Query($args1);?>

                        <?php
                        while($query->have_posts()) {

                        $query->the_post()
                        ?>
                    <div class="block5-slide">
                        <a href="<?= the_permalink() ?>">
                            <p class="date"><?= get_the_date('j F Y') ?></p>
                            <p class="desc"><?= the_title('') ?></p>
                            <p class="mobile-hidden" ><?= get_post_data($post->ID, 'desc5', true) ?></p>
                        </a>
                    </div>
                    <?php }
                    wp_reset_postdata() ?>
                </div>
            </div>
            <div class="green-block6 container-fluid">
                <div class="row">
                    <div class="col-lg-12 custom-padding">
                        <h3 class="title text-center"><?= get_post_meta($post->ID, 'title3', true) ?></h3>
                        <?php $green_slider3 = get_post_meta($post->ID, 'green_slider_3', true) ?>
                        <div class=" patent-slider">
                            <?php foreach ($green_slider3 as $slide3) {
                                $img3 = $slide3['green_slider3_img'];
                            ?>
                            <img src="<?= $img3 ?>" alt="">
    <?php } ?>
                        </div>
                    </div>
                    <div class=" col-lg-12 custom-padding mobile-hidden">
                        <div class="inner-wrap">
                            <img src="<?= ot_get_option('green_lider') ?>" alt="">
                            <div>
                                <h4 class="role"><?= get_post_meta($post->ID, 'desc6', true) ?></h4>
                                <p class="name">
                                    <?= ot_get_option('green_name') ?>
                                </p>
                                <a href="mailto: <?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('green_mail')) ?>" class="cont"><?= ot_get_option('green_mail') ?></a>
                                <a href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('green_tel')) ?>" class="cont"><?= ot_get_option('green_tel') ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 desctop-hidden">
                        <p class="right-title"><?= get_post_meta($post->ID, 'desc6', true) ?></p>
                        <div class="right-wrap">
                            <img src="<?= ot_get_option('green_lider') ?>" alt="">
                            <div class="right">
                                <p class="right-desc"><?= ot_get_option('green_name') ?></p>
                                <div class="cont">
                                    <a  class="mdi mdi-phone" href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('green_tel')) ?>"></a>
                                    <a class="mdi mdi-email" href="<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('green_mail')) ?>"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

<?php

get_footer();
