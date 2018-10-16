<?php
/*
Template name: Структура
*/
get_header();
?>
    <main class="structure">
        <section class="structure-page corporate-page container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="title"><?= wp_title('') ?></h2>
                </div>
                <div class="col-xl-9">
                    <p class="page-content">
                        <?= get_post_meta($post->ID, 'desc1', true) ?>
                    </p>
                </div>
                <div class="col-xl-9 grey-bg">
                    <p class="page-content_big">
                        <?= get_post_meta($post->ID, 'desc_grey1', true) ?>
                    </p>
                </div>
                <div class="col-xl-9">
                    <h3 class="page-subtitle_big">
                        <?= get_post_meta($post->ID, 'title1', true) ?>
                    </h3>
                </div>
                <?php $struc_sider1 = get_post_meta($post->ID, 'structure_slider_1', true) ?>
                <div class="col-xl-9 structure-slider">
                    <?php foreach ($struc_sider1 as $slide1) {
                    $img1 = $slide1['structure_slider_img1'];
                    $desc1 = $slide1['structure_slider_desc1'];
                    ?>
                    <div class="structure-slide">
                        <img src="<?= $img1 ?>" alt="">
                        <p class="desc"><?= $desc1 ?></p>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-xl-9">
                    <p class="page-content">
                        <?= get_post_meta($post->ID, 'desc2', true) ?>
                    </p>
                </div>
                <div class="col-xl-9">
                    <h3 class="page-subtitle_big">
                        <?= get_post_meta($post->ID, 'title2', true) ?>
                    </h3>
                </div>
                <div class="col-xl-9">
                    <?php $struc_slider2 = get_post_meta($post->ID, 'structure_slider_2', true) ?>
                    <ul class="corp-list">
                        <?php foreach ($struc_slider2 as $slide2) {
                            $title2 = $slide2['structure_slider_title2'];
                            $desc2 = $slide2['structure_slider_desc2'];
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
                <div class="col-xl-9">
                    <p class="page-content">
                        <?= get_post_meta($post->ID, 'desc3', true) ?>
                    </p>
                </div>
                <div class="col-xl-9">
                    <h3 class="page-subtitle_big">
                        <?= get_post_meta($post->ID, 'title3', true) ?>
                    </h3>
                </div>
                <?php $struc_slider3 = get_post_meta($post->ID,'structure_slider_3', true) ?>
                <div class="col-lg-12 partners-slider">
                    <?php
                    $i = 1;
                    foreach ($struc_slider3 as $slide3) {
                        $img3 = $slide3['structure_slider_img3'];
                        $name3 = $slide3['structure_slider_title3'];
                        $address3 = $slide3['structure_slider_address3']
                        ?>
                    <div class="partner-slide" data-partner="<?=$i; $i++ ?>">
                        <img src="<?= $img3 ?>" alt="">
                        <div class="inner-slide">
                            <p class="name"><?= $name3 ?></p>
                            <p class="position">(<?= $address3 ?>)</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
<!--//modals-->
<?php
$j=1;
$k=1;
foreach ($struc_slider3 as $modal) {
    $img4 = $modal['structure_slider_img3'];
    $name4 = $modal['structure_slider_title3'];
    $addres4 = $modal['structure_slider_address3'];
    $desc4 = $modal['structure_slider_desc32'];
    $site4 = $modal['structure_slider_site3'];
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
            foreach ($struc_slider3 as $map) {
                $lat = $map['structure_slider_lat'];
                $lng = $map['structure_slider_lng'];
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
