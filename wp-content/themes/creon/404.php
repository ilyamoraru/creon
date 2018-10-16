<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Creon
 */

get_header();
?>

    <main class="error">
        <section class="error-page">
            <h2 class="title">404</h2>
            <p class="desc">Станица не найдена</p>
        </section>
    </main>
    <script>
        $(document).ready(function() {
            $('.header a').css('color', '#171717');
            $('.header .this-nav a').css('color', 'white');
            $('.header').css('background', 'white');
        });
    </script>

<?php
get_footer();
