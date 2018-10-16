<?php
/*
Template name: Главная страница
*/
get_header();
?>
    <main class="main-slider">
        <section class="main-block1 main-slide container-fluid" style="background-image: url('<?= ot_get_option('main_bg') ?>')">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="title"><?= get_post_meta($post->ID, 'site_name', true) ?></h1>
                    <p class="title-small"><?= get_post_meta($post->ID, 'site_title', true) ?></p>
                </div>
                <div class="col-6 col-xl-2">
                    <h3 class="subtitle"><?= get_post_meta($post->ID, 'number_first', true) ?> <span>+</span></h3>
                    <p class="title-small"><?= get_post_meta($post->ID, 'sub_first', true) ?></p>
                </div>
                <div class="col-6 col-xl-3">
                    <h3 class="subtitle"><?= get_post_meta($post->ID, 'number_second', true) ?> <span>+</span></h3>
                    <p class="title-small"><?= get_post_meta($post->ID, 'sub_second', true) ?></p>
                </div>
                <div class="col-lg-4 green-link" style="background-image: url('<?= ot_get_option('green_bg') ?>')">
                    <a href="/?page_id=118">
                        <h3 class="subtitle-link">
                            <?= get_post_meta($post->ID, 'link_name', true) ?>
                        </h3>
                        <p class="desc-link">
                            <?= get_post_meta($post->ID, 'link_desc', true) ?>
                        </p>
                    </a>
                </div>
            </div>
        </section>
        <?php
        $slider_main = get_post_meta($post->ID, 'main_slider_list', true);
        ?>
            <?php
            $i = 2;
            $j = 1;
            foreach ($slider_main as $slide) {
            $img = $slide['main_slider_upload'];
            $sub1 = $slide['main_slider_subtitle_left'];
            $title = $slide['main_slider_title'];
            $sub2 = $slide['main_slider_subtitle'];
            $desc1 = $slide['main_slider_desc1'];
            $desc2 = $slide['main_slider_desc2'];
            $link = $slide['main_slider_link'];

            ?>
        <section class="main-block<?php echo $i; $i++ ?> main-slide container-fluid" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.0)), url('<?= $img ?>')">
            <div class="row">
                <a href="<?= $link ?>" class="col-xl-3 col-4 row left-anim">
                    <p class="counter">
                        <span class="first-count"><?= $j; $j++ ?></span><span class="second-count">/3</span>
                    </p>
                    <p class="count-name"><?= $sub1 ?></p>
                </a>
                <a href="<?= $link ?>" class="col-xl-4 col-8 center-anim">
                    <p class="quotes">”</p>
                    <h2 class="title-other"><?= $title ?></h2>
                </a>
                <div class="col-xl-4 col-12 flex-custom main-preview">
                    <p class="promo-desc">
                        <?= $sub2 ?>
                    </p>
                    <button type="button" class="open-btn"></button>
                </div>
                <div class="promo-open col-lg-8">
                    <p>
                        <?= $desc1 ?>
                    </p>
                    <p>
                        <?= $desc2 ?>
                    </p>
                    <div class="btns-cont">
                        <button type="button" class="back-btn"></button>
                        <a href="<?= $link ?>" class="btn-link"></a>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
    </main>
    <script>
        $(document).ready(function() {
            if (window.matchMedia("(min-width: 1000px)").matches) {
            $.scrollify({
                section: '.main-slide',
                interstitialSection: '.footer, .mob_footer',
                scrollSpeed: 600,
                scrollbars: false,
                easing: "linear",
            })
            }
        });
    </script>
<?php

get_footer();
