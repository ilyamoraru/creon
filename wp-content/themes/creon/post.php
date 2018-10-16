<?php
/*
Template name:  Страница записи
Template Post Type: post
*/
get_header();
?>
    <main class="post">
        <section class="post-page">
            <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
            <div class="post-block1 container-fluid" style="background-image: url('<?= $image_url[0] ?>')">
                <ul class="bread-post">
                    <li>
                        <a href="blog.html">Все новости</a>
                    </li>
                    <?php $cat = get_the_category(''); ?>

                    <li>
                        <a href="blog.html">
                        <?php if($cat[0]) {
                          echo $cat[0]->name;
                        }
                        ?>
                        </a>
                    </li>
                </ul>
                <p class="date"><?php while(have_posts()) : the_post(); ?>
                        <?php the_date('j F Y') ?>
                    <?php endwhile; ?></p>
                <h2 class="title"><?= the_title('') ?></h2>
            </div>
            <div class="container-fluid post-wrap">

                <div class="row ">
                    <div class="col-xl-9">
                        <?php while(have_posts()) : the_post(); ?>
                            <?php the_content() ?>
                        <?php endwhile; ?>
                    </div>

                    <div class="post-cont">
                    <?php $catgories = get_the_category($post->ID);
                    if($catgories) {
                        $category_ids = array();
                        foreach ($catgories as $ind_cat) $category_ids[] = $ind_cat->term_id;
                        $args = array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts' => 1,
                            'orderby' => 'rand',
                        );
                        $query = new wp_Query($args);
                        while($query->have_posts()) {
                            $query ->the_post(); ?>
                        <div class="link link1" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                            <a href="<?php the_permalink() ?>">
                                <p><?= $ind_cat->name ?></p>
                                <h3><?php the_title() ?></h3>
                                <img src="/wp-content/themes/creon/img/icons/left_arrow.svg" class="d-none d-xl-block" alt="">
                                <img src="/wp-content/themes/creon/img/icons/right_arrow.svg" class="d-block d-xl-none" alt="">
                            </a>
                        </div>
                            <?php }
                            wp_reset_query();?>
                        <?php } ?>
<?php $catgories1 = get_the_category($post->ID);
if($catgories1) {
    $category_ids1 = array();
    foreach ($catgories1 as $ind_cat1) $category_ids1[] = $ind_cat1->term_id;
    $args1 = array(
        'category__in' => $category_ids1,
        'post__not_in' => array($post->ID),
        'showposts' => 1,
        'orderby' => 'rand',
    );
    $query1 = new wp_Query($args1);
    while($query1->have_posts()) {
        $query1 ->the_post(); ?>
                        <div class="link link2" style="background-image: linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0.28)),url('<?php echo get_the_post_thumbnail_url(); ?>">
                            <a href="<?php the_permalink() ?>">
                                <p><?= $ind_cat1->name ?></p>
                                <h3><?php the_title() ?></h3>
                                <img src="/wp-content/themes/creon/img/icons/left_arrow.svg" alt="">
                            </a>
                        </div>
        <?php  }
        wp_reset_query() ?>
    <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php

get_footer();
