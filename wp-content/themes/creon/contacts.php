<?php
/*
Template name:  Контакты
*/
get_header();
?>
    <main class="contacts">
        <section class="contacts-page container-fluid">
            <div class="map open-map" id="cont1-map"></div>
            <div class="map" id="cont2-map"></div>
            <div class="map" id="cont3-map"></div>
            <div class="map" id="cont4-map"></div>
            <div class="map" id="cont5-map"></div>
            <div class="map" id="cont6-map"></div>
            <div class="row">
                <h2 class="title col-12 mobile-hidden"><?= get_post_meta($post->ID, 'site_name', true) ?></h2>
                <?php $cont_slider = get_post_meta($post->ID, 'contacts_slider', true) ?>
                <ul class="contacts-list">
                    <?php
                    $i = 1;
                    $j = 1;
                    foreach ($cont_slider as $slide) {
                        $name = $slide['contacts_slider_name'];
                        $desc = $slide['contacts_slider_desc'];
                        $address = $slide['contacts_slider_address'];
                        $tel = $slide['contacts_slider_tel'];
                        $mail = $slide['contacts_slider_mail'];
                        ?>
                    <li class="contacts-item <?php if($j == 1) { ?> <?php echo 'open-item_cont'; $j++ ?> <?php } ?> order-100 address1" data-address="<?= $i; $i++ ?>">
                        <p class="name"><?= $name ?></p>
                        <div class="inner">
                            <?php if($desc) { ?>
                            <p class="inner-name"><?= $desc ?></p>
                            <?php } ?>
                            <p class="address"><?= $address ?></p>
                            <div class="inner-wrap">
                                <div>
                                    <p class="label"><?= get_post_meta($post->ID, 'desc1', true) ?></p>
                                    <a href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", $tel) ?>"><?= $tel ?></a>
                                </div>
                                <div>
                                    <p class="label"><?= get_post_meta($post->ID, 'desc2', true ) ?></p>
                                    <a href="mailto:<?php echo str_replace(array(" ", "(", ")", "-"), "", $mail) ?>"><?= $mail ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </main>

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
            $i = 1;
            foreach ($cont_slider as $map) {
                $lat = $map['contacts_slider_lat'];
                $lng = $map['contacts_slider_lng'];
                ?>
            var map_con<?= $i ?> = new google.maps.Map(document.getElementById('cont<?= $i ?>-map'), {
                zoom: 14,
                center: {lat: <?= $lat ?>, lng: <?= $lng ?> -0.025},
                styles: style,
                disableDefaultUI: true,
                zoomControl: !0,
                scrollwheel: !1,
                zoomControl: false,
            });


            var marker<?= $i ?> = new google.maps.Marker({
                position: {lat: <?= $lat ?>, lng: <?= $lng ?>},
                icon: '/wp-content/themes/creon/img/icons/mapmarker.png',
                size: new google.maps.Size(71,83),
                map: map_con<?= $i; $i++ ?>,
            });
            <?php } ?>



        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1N23gwlOlvNHnHlTlh-yFxk1wWjzxe4c&callback=initMap"
            async defer></script>
<?php

get_footer();
