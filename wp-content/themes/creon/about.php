<?php
/*
Template name: О группе
*/
get_header();
?>
    <main class="about">
        <section class="about-page">
            <div class="about-block1 container-fluid" style="background-image: url('<?= ot_get_option('about_bg') ?>')">
                <h3 class="page-subitle"><?= get_post_meta($post->ID, 'sub_first', true) ?></h3>
                <p class="quotes">”</p>
                <h2 class="page-title"><?= get_post_meta($post->ID,'site_title', true) ?>
                </h2>
            </div>
            <div class="container-fluid about-wrap">

                <div class="row">
                    <div class="col-12 col-md-9 col-lg-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID,'desc1', true) ?>
                        </p>
                    </div>
                    <div class="about-cont col-12 col-md-4">
                        <img src="<?= ot_get_option('about_boss_bg') ?>" class="m-order-1" alt="">
                        <div class="m-order-0">
                            <h3 class="boss-name"><?= ot_get_option('about_boss_name') ?></h3>
                            <p class="boss-desc"><?= ot_get_option('about_boss_role') ?></p>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID,'desc2', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9 grey-bg">
                        <p class="page-content_big">
                            <?= get_post_meta($post->ID,'desc_grey1', true) ?>
                        </p>
                    </div>
                    <div class="col-xl-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID,'desc3', true) ?>

                        </p>
                    </div>
                    <div class="col-xl-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID,'desc4', true) ?>

                        </p>
                    </div>
                </div>
            </div>
            <div class="date-slider_wrap" style="background-image: url('<?= ot_get_option('about_year_bg') ?>')">
                <h2 class="title"><?= get_post_meta($post->ID,'title1', true) ?></h2>
                <?php $about_slider1 = get_post_meta($post->ID, 'about_slider1', true) ?>
                <div class="dots-wrap">
                    <div class="dots-cont">
                        <div class="dots-left">
                            <?php
                            $j = 0;
                            $i = 1;
                            foreach ($about_slider1 as $date1) {
                               $year1 = $date1['about_slider1_year1'];
                            ?>
                                <?php if($year1) { ?>
                            <button type="button" class="date<?= $j?> <?php  if($i == 1) {?> <?php echo 'active-btn'; $i++?>  <?php } ?>" data-slide="<?= $j; $j++ ?>"><?= $year1 ?></button>
                                    <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="about-slider_date">
                    <?php foreach ($about_slider1 as $slide1) {
                        $desc1 = $slide1['about_slider1_desc1'];
                    ?>
                    <div class="date-slide container-fluid" >
                        <div class="row">
                            <div class="col-lg-8">
                                <?= $desc1 ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9">
                        <h3 class="page-subtitle_big">
                            <?= get_post_meta($post->ID,'title2', true) ?>
                        </h3>
                    </div>
                    <?php $about_slider2 = get_post_meta($post->ID, 'about_slider2', true) ?>
                    <div class="col-lg-12 bosses-slider">
                        <?php
                        $m =1;
                        foreach ($about_slider2 as $slide2) {
                        $img2 = $slide2['about_slider2_bg'];
                        $name2 = $slide2['about_slider2_name'];
                        $role1 = $slide2['about_slider2_role1'];

                        ?>
                        <div class="boss-slide" data-boss="<?= $m; $m++ ?>">
                            <img src="<?= $img2 ?>" alt="">
                            <div class="inner-slide">
                                <p class="name"><?= $name2 ?></p>
                                <p class="position"><?= $role1 ?></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-9">
                        <h3 class="page-subtitle_big custom-title">
                            <?= get_post_meta($post->ID,'title3', true) ?>
                        </h3>
                    </div>
                    <div class="col-xl-9">
                        <p class="page-content">
                            <?= get_post_meta($post->ID,'desc5', true) ?>                        </p>
                        <p class="page-content">
                            <?= get_post_meta($post->ID,'desc6', true) ?>
                        </p>
                        <p class="page-content">
                            <?= get_post_meta($post->ID,'desc7', true) ?>
                        </p>
                    </div>
                    <?php $about_slider3 = get_post_meta($post->ID, 'about_slider_3', true) ?>
                    <div class="col-xl-12 partners-slider">
                        <?php
                        $n = 1;
                        foreach ($about_slider3 as $slide3) {
                            $img3 = $slide3['about_slider_img3'];
                            $name3 = $slide3['about_slider_title3'];
                            $city1 = $slide3['about_slider_address3'];
                            ?>
                        <div class="partner-slide" data-partner="<?=$n; $n++ ?>">
                            <img src="<?= $img3 ?>" alt="">
                            <div class="inner-slide">
                                <p class="name"><?= $name3 ?></p>
                                <p class="position">(<?= $city1 ?>)</p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="page-subtitle_big custom-title">
                            <?= get_post_meta($post->ID,'title4', true) ?>
                        </h3>
                    </div>
                    <?php $about_slider4 = get_post_meta($post->ID, 'about_slider_4', true) ?>
                    <ul class="col-lg-12 client-list">
                        <?php
                        foreach ($about_slider4 as $slide4) {
                            $img5 =$slide4['about_slider4_img'];
                            ?>
                        <li class="client">
                            <img src="<?= $img5 ?>" class="" alt="">
                        </li>
                        <?php } ?>
                    </ul>
                    <button type="button" class="showmore-client"><?= get_post_meta($post->ID, 'desc8', true) ?></button>
                </div>
            </div>
        </section>
    </main>
    <!--//modals-->
<?php
$count1 = 1;
foreach ($about_slider2 as $modal1) {
    $img_boss = $modal1['about_slider2_bg'];
    $name_boss = $modal1['about_slider2_name'];
    $role1 = $modal1['about_slider2_role1'];
    $role2 = $modal1['about_slider2_role2'];
    $role3 = $modal1['about_slider2_role3'];
    $desc_boss = $modal1['about_slider2_desc'];
    ?>
<div class="boss-modal boss<?= $count1; $count1++ ?>-modal">
    <div class="wrap">
        <div class="left">
            <img src="<?= $img_boss ?>" alt="">
        </div>
        <div class="right">
            <h2 class="name"><?= $name_boss ?></h2>
            <h3 class="role" style="margin-bottom: 20px"><?= $role1 ?></h3>
            <?php if($role3) {?>
            <h3 class="role" style="margin-bottom: 20px"><?= $role3 ?></h3>
            <?php } ?>
            <h3 class="role"><?= $role2 ?></h3>
            </h3>
            <div class="bottom">
                <p class="desc d-none d-xl-block"><?= $desc_boss ?>
                </p>
            </div>
        </div>
    </div>
    <p class="desc mob-desc d-lg-none"><?= $desc_boss ?>
    </p>
    <button type="button" class="close-modal"></button>
</div>
<?php } ?>


<?php
$j=1;
$k=1;
foreach ($about_slider3 as $modal2) {
    $img4 = $modal2['about_slider_img3'];
    $name4 = $modal2['about_slider_title3'];
    $addres4 = $modal2['about_slider_address3'];
    $desc4 = $modal2['about_slider_desc32'];
    $site4 = $modal2['about_slider_site3'];
    ?>
    <div class="part-modal part<?= $j; $j++ ?>">
        <div class="left">
            <div id="map<?= $k; $k++ ?>"></div>
            <img src="<?= $img4 ?>" alt="" class="logo">
        </div>
        <div class="right">
            <h2 class="name"><?= $name4 ?></h2>
            <h3 class="role"><?= $addres4 ?></h3>
            <p class="desc"><?= $desc4 ?></p>
            <a href="<?= $site4 ?>" class="site"><?= $site4 ?></a>
        </div>
        <button type="button" class="close-modal"></button>
    </div>
<?php } ?>


    <!--//menu color-->
    <script>
        $(document).ready(function() {
            $('.header a').css('color', '#171717');
            $('.header .this-nav a').css('color', 'white');
            $('.header').css('background', 'white');
            $('.header-nav_list .current_page_item').addClass('this-nav');

            $('.client-list .client:nth-of-type(n+3)').addClass('hidden_mob');
            $('.client-list .client:nth-of-type(n+6)').addClass('hidden-client');
        });
    </script>

    <!--//maps-->
    <script>
        var style = [
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e9e9e9"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dedede"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#333333"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            }
        ];

        function initMap() {
            <?php
            $l = 1;
            $m = 1;
            foreach ($about_slider3 as $map) {
            $lat = $map['about_slider_lat'];
            $lng = $map['about_slider_lng'];
            ?>
            map<?= $l; $l++ ?> = new google.maps.Map(document.getElementById('map<?= $m; $m++ ?>'), {
                center: {lat: <?= $lat ?>, lng: <?= $lng ?>},
                zoom: 8,
                styles: style,
                zoomControl: !0,
                scrollwheel: !1,
                zoomControl: false,
            });
            <?php } ?>

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1N23gwlOlvNHnHlTlh-yFxk1wWjzxe4c&callback=initMap"
            async defer></script>
<?php

get_footer();
