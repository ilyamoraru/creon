<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Creon">
    <meta property="og:url" content="http://undsgn.ru">
    <meta property="og:site_name" content="Creon">
    <meta property="og:image" content="img/256.png">
    <meta property="og:description" content="Creon">
    <title>Creon <?php if(!is_front_page()) { ?> - <?php } ?> <?php wp_title(''); ?></title>
    <link href="<?php bloginfo('template_directory'); ?>/img/16.ico" type="image/x-icon" rel="shortcut icon">
    <link href="<?php bloginfo('template_directory'); ?>/img/256.ico" type="image/x-icon" rel="shortcut icon">
    <link href="<?php bloginfo('template_directory'); ?>/img/16.ico" rel="apple-touch-icon" sizes="16x16">
    <link href="<?php bloginfo('template_directory'); ?>/img/256.ico" rel="apple-touch-icon" sizes="256x256">

	<?php wp_head(); ?>
</head>

<body>
<div class="mobile-menu desctop-hidden">
    <div class="top">
        <button type="button" class="close-menu">
            <span class="line1"></span>
            <span class="line2"></span>
        </button>
        <img src="<?= ot_get_option('head_logo_menu') ?>" alt="">
        <ul class="language-header">
            <li>
                <?php if(is_active_sidebar('true_side')) : ?>
                    <?php dynamic_sidebar('true_side'); ?>
                <?php endif; ?>
            </li>
        </ul>
    </div>
    <?php
    $args = array(
        'theme_location'  => '',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'header-nav_list',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s"  class="%2$s">%3$s</ul>',
        'walker'          => '',
    );
    wp_nav_menu($args);
    ?>
    <div class="bottom">
        <a href="<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('head_tel')) ?>" class="tel"><?= ot_get_option('head_tel') ?></a>
        <ul class="social-links">
            <li class="social-item">
                <a href="<?= ot_get_option('head_fb') ?>" class="mdi mdi-facebook-box">
                </a>
            </li>
            <li class="social-item">
                <a href="<?= ot_get_option('head_vk') ?>" class="mdi mdi-vk-box"></a>
            </li>
            <li class="social-item">
                <a href="<?= ot_get_option('head_in') ?>" class="mdi mdi-linkedin-box"></a>
            </li>
            <li class="social-item">
                <a href="<?= ot_get_option('head_yt') ?>" class="mdi mdi-youtube"></a>
            </li>
        </ul>
    </div>
</div>
<header class="header container-fluid">
    <div class="row just-mob">
        <div class=" col-2">
            <button type="button" class="burger desctop-hidden">
                <span class="line1 line"></span>
                <span class="line2 line"></span>
                <span class="line3 line"></span>
            </button>
            <a href="/">
                <img src="<?= ot_get_option('head_logo_desc') ?>" class="mobile-hidden d-md-block " alt="Creon">
                <img src="<?= ot_get_option('head_logo_mob') ?>" class="desctop-hidden d-md-none " alt="Creon">
            </a>
        </div>
        <nav class="header-nav offset-xl-4 offset-md-1 mobile-hidden col-md-8 col-9 col-xl-5">

            <?php
            $args = array(
                'theme_location'  => '',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'header-nav_list',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s"  class="%2$s">%3$s</ul>',
                'walker'          => '',
            );
            wp_nav_menu($args);
            ?>
        </nav>
        <div class="col-1">
            <?php get_sidebar(); ?>
        </div>
    </div>
</header>
