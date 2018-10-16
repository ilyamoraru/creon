<?php
/*
Template name:  Медиацентр
*/
get_header();
?>

    <main class="blog mobile-hidden">
        <section class="blog-page1 container-fluid">
            <div class="row ">
                <div class="col-12 mobile-hidden">
                    <h2 class="title">Новости</h2>
                </div>
                <div class="col-12 mobile-hidden">
                    <ul class="news-nav">
                        <li class="nav-item this-item" data-news="1">
                            <p>Все</p>
                        </li>
                        <li class="nav-item" data-news="2">
                            <p>Аналитика</p>
                        </li>
                        <li class="nav-item" data-news="3">
                            <p>Пресс-релизы</p>
                        </li>
                        <li class="nav-item" data-news="4">
                            <p>Мероприятия</p>
                        </li>
                        <li class="nav-item" data-news="5">
                            <p>СМИ о нас</p>
                        </li>
                    </ul>
                </div>
            </div>
<!--            здесь верхние 5 постов-->
            <div class="row block-news block-news_show block-news1">
<!--                ПЕРВЫЕ ДВА-->
                <div class="col-12 custom-flex">
                    <div class="col-lg-6 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/1.png" alt="">
                            <p class="post-type">Аналитика</p>
                            <p class="post-name">Китайские инвесторы должны обратить внимение на&nbsp;сектор переработки сырья в РФ</p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/2.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name"> Публикации по итогам конференции «Российский рынок газа. Биржевая торговля 2018»</p>
                        </a>
                    </div>
                </div>
<!--                SECOND 3-->
                <div class="col-12 custom-flex">
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/3.png" alt="">
                            <p class="post-type">СМИ о нас</p>
                            <p class="post-name">Компания «Еврохим-1 Функциональные добавки» - новый участник конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/4.png" alt="">
                            <p class="post-type">Мероприятия</p>
                            <p class="post-name">Представитель ICL Industrial Products Europe в числе участников конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/5.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name">Компания «Коррус-Техникс» в числе участников конференции «Битумы и ПБВ 2018»</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row block-news  block-news2">
                <?php
                $args_2_1 = array(
                    'posts_per_page' => 2,
                    'cat' => 3,
                );

                $query_2_1 = new WP_Query($args_2_1); ?>
                <div class="col-12 custom-flex">
                    <?php while($query_2_1->have_posts()) {
                    $query_2_1->the_post();
                        $cat2_1 = get_the_category();
                    ?>
                    <div class="col-lg-6 col-md-6">
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail() ?>
                            <p class="post-type"><?php echo $cat2_1[0]->name ?></p>
                            <p class="post-name"><?php the_title('') ?></p>
                        </a>
                    </div>
                    <?php }
                    wp_reset_postdata() ?>
                </div>
                <div class="col-12 custom-flex">
                    <?php
                    $args_2_2 = array(
                        'posts_per_page' => 3,
                        'cat' => 3,
                        'offset' => 2,
                    );

                    $query_2_2 = new WP_Query($args_2_2); ?>
                    <?php while($query_2_2->have_posts()) {
                        $query_2_2->the_post();
                        $cat2_2 = get_the_category();
                        ?>
                    <div class="col-lg-4 col-md-4">

                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail() ?>
                            <p class="post-type"><?php echo $cat2_2[0]->name ?></p>
                            <p class="post-name"><?php the_title() ?></p>
                        </a>
                    </div>
                    <?php }
                    wp_reset_postdata() ?>
                </div>
            </div>
            <div class="row block-news  block-news3">
                <div class="col-12 custom-flex">
                    <div class="col-lg-6 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/1.png" alt="">
                            <p class="post-type">Аналитика</p>
                            <p class="post-name">Китайские инвесторы должны обратить внимение на&nbsp;сектор переработки сырья в РФ</p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/2.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name"> Публикации по итогам конференции «Российский рынок газа. Биржевая торговля 2018»</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 custom-flex">
                    <div class="col-lg-4 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/3.png" alt="">
                            <p class="post-type">СМИ о нас</p>
                            <p class="post-name">Компания «Еврохим-1 Функциональные добавки» - новый участник конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/4.png" alt="">
                            <p class="post-type">Мероприятия</p>
                            <p class="post-name">Представитель ICL Industrial Products Europe в числе участников конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/5.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name">Компания «Коррус-Техникс» в числе участников конференции «Битумы и ПБВ 2018»</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row block-news  block-news4">
                <div class="col-12 custom-flex">
                    <div class="col-lg-6 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/1.png" alt="">
                            <p class="post-type">Аналитика</p>
                            <p class="post-name">Китайские инвесторы должны обратить внимение на&nbsp;сектор переработки сырья в РФ</p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/2.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name"> Публикации по итогам конференции «Российский рынок газа. Биржевая торговля 2018»</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 custom-flex">
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/3.png" alt="">
                            <p class="post-type">СМИ о нас</p>
                            <p class="post-name">Компания «Еврохим-1 Функциональные добавки» - новый участник конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/4.png" alt="">
                            <p class="post-type">Мероприятия</p>
                            <p class="post-name">Представитель ICL Industrial Products Europe в числе участников конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/5.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name">Компания «Коррус-Техникс» в числе участников конференции «Битумы и ПБВ 2018»</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row block-news  block-news5">
                <div class="col-12 custom-flex">
                    <div class="col-lg-6 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/1.png" alt="">
                            <p class="post-type">Аналитика</p>
                            <p class="post-name">Китайские инвесторы должны обратить внимение на&nbsp;сектор переработки сырья в РФ</p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="post.html">
                            <img src="img/blog/2.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name"> Публикации по итогам конференции «Российский рынок газа. Биржевая торговля 2018»</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 custom-flex">
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/3.png" alt="">
                            <p class="post-type">СМИ о нас</p>
                            <p class="post-name">Компания «Еврохим-1 Функциональные добавки» - новый участник конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/4.png" alt="">
                            <p class="post-type">Мероприятия</p>
                            <p class="post-name">Представитель ICL Industrial Products Europe в числе участников конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/5.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name">Компания «Коррус-Техникс» в числе участников конференции «Битумы и ПБВ 2018»</p>
                        </a>
                    </div>
                </div>
            </div>
<!--            конец-->
        </section>
<!--        а тут искоме дерьмо!-->
        <section class="blog-page2 grey-bg container-fluid">
            <div class="row">
                <?php
                $args_promo = array(
                  'posts_per_page' => 5,
                    'cat' =>42,
                );
                
                $query_promo = new WP_Query($args_promo); ?>
                <?php
                $i = 1;
                $j = 1;
                $k = 1;
                while($query_promo->have_posts()) {
                $query_promo->the_post()?>
                <div class="<?php if($i == 1) {?> <?php echo'col-lg-7 col-md-12'; $i++ ?> <?php } ?><?php if($i == 2) {?><?php echo 'col-lg-4 col-md-6 offset-lg-1'; $i++ ?><?php } ?><?php if($i > 2) { ?><?php echo 'col-lg-4 col-md-6'; ?><?php } ?>">
                    <a href="<?php the_permalink() ?>">
                        <p class="<?php if($j == 1) {?><?php echo'post-type_big'; $j++ ?><?php }  else {?><?php echo'post-type' ?><?php } ?>">Пресс-релизы</p>
                        <p class="<?php if($k == 1) {?><?php echo'post-name_big'; $k++ ?><?php }  else {?><?php echo'post-name' ?><?php } ?>"><?= the_title('') ?></p>
                    </a>
                </div>
                    <?php }
                wp_reset_postdata() ?>
            </div>
        </section>
<!--        конец дерьма-->
        <section class="blog-page3 container-fluid">
<!--            здесь идет нижнее дерьмо-->
            <div class="row block-news1 block-news block-news_show">
                <div class="col-lg-12 custom-flex">
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/6.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name">Компания «Еврохим-1 Функциональные добавки» - новый участник конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/7.png" alt="">
                            <p class="post-type">Аналитика</p>
                            <p class="post-name">Представитель ICL Industrial Products Europe в числе участников конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/8.png" alt="">
                            <p class="post-type">Мероприятия</p>
                            <p class="post-name">Компания «Коррус-Техникс» в числе участников конференции «Битумы и ПБВ 2018»</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row block-news2 block-news ">
                <div class="col-lg-12 custom-flex">
                    <?php
                    $args_2_3 = array(
                        'posts_per_page' => 3,
                        'cat' => 3,
                        'offset' => 5,
                    );

                    $query_2_3 = new WP_Query($args_2_3); ?>
                    <?php while($query_2_3->have_posts()) {
                    $query_2_3->the_post();
                    $cat2_3 = get_the_category();
                    ?>
                    <div class="col-lg-4 col-md-4">
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail() ?>
                            <p class="post-type"><?= $cat2_3[0]->name ?></p>
                            <p class="post-name"><?php the_title() ?></p>
                        </a>
                    </div>
                    <?php  }
                    wp_reset_postdata() ?>

                </div>
            </div>
            <div class="row block-news3 block-news ">
                <div class="col-lg-12 custom-flex">
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/6.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name">Компания «Еврохим-1 Функциональные добавки» - новый участник конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/7.png" alt="">
                            <p class="post-type">Аналитика</p>
                            <p class="post-name">Представитель ICL Industrial Products Europe в числе участников конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/8.png" alt="">
                            <p class="post-type">Мероприятия</p>
                            <p class="post-name">Компания «Коррус-Техникс» в числе участников конференции «Битумы и ПБВ 2018»</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row block-news4 block-news ">
                <div class="col-lg-12 custom-flex">
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/6.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name">Компания «Еврохим-1 Функциональные добавки» - новый участник конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/7.png" alt="">
                            <p class="post-type">Аналитика</p>
                            <p class="post-name">Представитель ICL Industrial Products Europe в числе участников конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/8.png" alt="">
                            <p class="post-type">Мероприятия</p>
                            <p class="post-name">Компания «Коррус-Техникс» в числе участников конференции «Битумы и ПБВ 2018»</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row block-news5 block-news ">
                <div class="col-lg-12 custom-flex">
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/6.png" alt="">
                            <p class="post-type">Пресс-релизы</p>
                            <p class="post-name">Компания «Еврохим-1 Функциональные добавки» - новый участник конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/7.png" alt="">
                            <p class="post-type">Аналитика</p>
                            <p class="post-name">Представитель ICL Industrial Products Europe в числе участников конференции «Полиэфирные и эпоксидные смолы 2018»</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="post.html">
                            <img src="img/blog/8.png" alt="">
                            <p class="post-type">Мероприятия</p>
                            <p class="post-name">Компания «Коррус-Техникс» в числе участников конференции «Битумы и ПБВ 2018»</p>
                        </a>
                    </div>
                </div>


            </div>
<!--            конец-->
            <div class="row">
                <div class="col-md-7">
                    <p class="desc_bottom"><?= get_post_meta($post->ID, 'desc2', true) ?></p>
                    <p class="tittle_bottom"><?= get_post_meta($post->ID, 'desc3' , true) ?></p>
                    <?php $news_slider = get_post_meta($post->ID, 'media_slider', true)?>
                    <ul class="bottom-list">
                        <?php foreach ($news_slider as $slide) {
                            $desc = $slide['media_slider_шеуь'];
                        ?>
                        <li class="bottom-item"><?= $desc ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 right-dir offset-lg-1">
                    <div>
                        <img src="<?= ot_get_option('media_img') ?>" alt="">
                        <p class="right-title"><?= get_post_meta($post->ID, 'desc1', true) ?></p>
                        <p class="right-desc"><?= get_post_meta($post->ID, 'name', true) ?></p>
                        <a class="right-desc" href="mailto:<?php echo str_replace(array(" ", "(", ")", "-"), "", get_post_meta($post->ID, 'media_mail', true)) ?>"><?= get_post_meta($post->ID, 'media_mail', true) ?></a>
                        <a  class="right-desc" href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", get_post_meta($post->ID, 'media_tel', true)) ?>"><?= get_post_meta($post->ID, 'media_tel', true) ?></a>
                    </div>
                </div>
                <div class="col-12 grey-bg">
                    <p class="form-desc"><?= get_post_meta($post->ID, 'desc4', true) ?></p>
                    <form class="blog-form" method="post">
                        <div>
                            <input type="email" name="email" required placeholder="<?= get_post_meta($post->ID, 'desc5', true) ?>">
                            <button type="submit" class="submit" disabled><?= get_post_meta($post->ID,'desc6', true) ?></button>
                        </div>
                        <input type="checkbox" id="check">
                        <label class="valid" for="check"><p><?= get_post_meta($post->ID, 'desc7', true) ?></p><a target="_blank" href="<?= ot_get_option('media_politic') ?>"><?= get_post_meta($post->ID, 'desc8', true) ?></a></label>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <ul class="breadcrumbs">
                    <li class="bread-item this-bread">
                        <p>1</p>
                    </li>
                    <li class="bread-item">
                        <p>2</p>
                    </li>
                    <li class="bread-item">
                        <p>3</p>
                    </li>
                    <li class="bread-item last-bread">
                        <p>
                            <img src="/wp-content/themes/creon/img/icons/left_arrow_black.svg" alt="">
                        </p>
                    </li>
                </ul>
            </div>

        </section>
    </main>
    <main class="blog-mob blog desctop-hidden">
        <form class="mob-toogle-blog mdi mdi-chevron-down">
            <select name="blog">
                <option value="1">Все</option>
                <option value="2">Аналитика</option>
                <option value="3">Пресс-релизы</option>
                <option value="4">Мероприяия</option>
                <option value="5">СМИ о нас</option>
            </select>
        </form>

        <section class="mob1 mob-sec mob-sec_show">
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/1.png')">
                <a href="post.html">
                    <h2 class="title">Пресс-релиз</h2>
                    <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
                </a>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/2.png')">
                <a href="post.html">
                    <h2 class="title">Пресс-релиз</h2>
                    <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
                </a>
            </div>
            <div class="mob-item" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)),url('img/blog/3.png')">
                <a href="post.html">
                    <h2 class="title">Пресс-релиз</h2>
                    <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
                </a>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/4.png')">
                <a href="post.html">
                    <h2 class="title">Пресс-релиз</h2>
                    <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
                </a>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/5.png')">
                <a href="post.html">
                    <h2 class="title">Пресс-релиз</h2>
                    <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
                </a>
            </div>
        </section>
        <section class="mob2  mob-sec">
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/2.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/2.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)),url('img/blog/3.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/4.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/5.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
        </section>
        <section class="mob3  mob-sec">
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/3.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/2.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)),url('img/blog/3.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/4.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/5.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
        </section>
        <section class="mob4  mob-sec">
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/4.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/2.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)),url('img/blog/3.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/4.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/5.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
        </section>
        <section class="mob5  mob-sec">
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/5.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/2.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)),url('img/blog/3.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/4.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
            <div class="mob-item" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0), rgba(0, 0, 0, 0.6)), url('img/blog/5.png')">
                <h2 class="title">Пресс-релиз</h2>
                <h3 class="name">Китайские инвесторы должны обратить внимание на сектор переработки сырья в РФ</h3>
            </div>
        </section>
        <ul class="breadcrumbs">
            <li class="bread-item this-bread">
                <p>1</p>
            </li>
            <li class="bread-item">
                <p>2</p>
            </li>
            <li class="bread-item">
                <p>3</p>
            </li>
            <li class="bread-item last-bread">
                <p>
                    <img src="wp/content/themes/img/icons/left_arrow_black.svg" alt="">
                </p>
            </li>
        </ul>
        <div class="col-md-7">
            <p class="desc_bottom"><?= get_post_meta($post->ID, 'desc2', true) ?></p>
            <div>
                <p class="right-title"><?= get_post_meta($post->ID, 'desc1', true) ?></p>
                <div class="right-wrap">
                    <img src="<?= ot_get_option('media_img') ?>" alt="">
                    <div class="right">
                        <p class="right-desc"><?= get_post_meta($post->ID, 'name', true) ?></p>
                        <div class="cont">
                            <a  class="mdi mdi-phone" href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", get_post_meta($post->ID, 'media_tel', true)) ?>"></a>
                            <a class="mdi mdi-email" href="mailto:<?php echo str_replace(array(" ", "(", ")", "-"), "", get_post_meta($post->ID, 'media_mail', true)) ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="bottom-list">
                <?php foreach ($news_slider as $slide1) {
                    $desc1 = $slide1['media_slider_шеуь'];
                    ?>
                    <li class="bottom-item"><?= $desc1 ?></li>
                <?php } ?>
            </ul>

        </div>
        <div class="col-12 grey-bg">
            <p class="form-desc"><?= get_post_meta($post->ID, 'desc4', true) ?></p>
            <form class="blog-form" method="post">
                <input type="email" name="email" required placeholder="<?= get_post_meta($post->ID, 'desc5', true) ?>">
                <button type="submit" class="submit" disabled><?= get_post_meta($post->ID, 'desc6', true) ?></button>
                <input type="checkbox" id="check2">
                <label class="valid" for="check2"><p><?= get_post_meta($post->ID, 'desc7', true) ?><a href="<?= ot_get_option('media_politic') ?>" target="_blank"><?= get_post_meta($post->ID, 'desc8', true) ?></a></p></label>

            </form>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            $('.header a').css('color', '#171717');
            $('.header .this-nav a').css('color', 'white');
            $('.header').css('background', 'white');
            $('.header-nav_list .current_page_item').addClass('this-nav');
        });
    </script>

<?php

get_footer();
