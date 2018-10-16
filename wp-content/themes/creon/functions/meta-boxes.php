<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */

  $page_meta = array(
      'id'          => 'main_page_box',
      'title'       => 'Настройка страниц',
      'desc'        => '',
      'pages'       => array( 'page' ),
      'context'     => 'normal',
      'priority'    => 'high',
      'fields'      => array(
          array(
              'label'       => 'Слайдер главная',
              'id'          => 'main_slider_tab',
              'type'        => 'tab'
          ),
          array(
              'id'          => 'main_slider_list',
              'label'       => 'Слайдер',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'main_slider_upload',
                      'label'       => 'Загрузите фон',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
                  array(
                      'id'          => 'main_slider_title',
                      'label'       => 'Заголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'main_slider_subtitle',
                      'label'       => 'Подзаголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'main_slider_subtitle_left',
                      'label'       => 'Подзаголовок  под цифрами',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'main_slider_desc1',
                      'label'       => 'Описание 1',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'main_slider_desc2',
                      'label'       => 'Описание 2',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'main_slider_link',
                      'label'       => 'Ссылка на страницу',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'label'       => 'Преимущества корпоративная стратегия',
              'id'          => 'corporate_slider_tab',
              'type'        => 'tab'
          ),
          array(
              'id'          => 'corporate_slider',
              'label'       => 'Слайдер корпоративная стратегия',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'corporate_slider_img',
                      'label'       => 'Загрузите иконку',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
                  array(
                      'id'          => 'corporate_slider_title',
                      'label'       => 'Заголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'corporate_slider_subtitle',
                      'label'       => 'Подзаголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'label'       => 'Преимущества инвестиционная стратегия',
              'id'          => 'strategy_slider_tab',
              'type'        => 'tab'
          ),
          array(
              'id'          => 'strategy_slider1',
              'label'       => 'Блок с иконками',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'strategy_slider_img',
                      'label'       => 'Загрузите иконку',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
                  array(
                      'id'          => 'strategy_slider_title1',
                      'label'       => 'Заголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'id'          => 'strategy_slider2',
              'label'       => 'Блок с преимуществами',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'strategy_slider_title2',
                      'label'       => 'Заголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'strategy_slider_subtitle1',
                      'label'       => 'Подзаголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'label'       => 'Преимущества управление проектами',
              'id'          => 'project_slider_tab',
              'type'        => 'tab'
          ),
          array(
              'id'          => 'project_slider',
              'label'       => 'Блок с преимуществами',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'project_slider_img',
                      'label'       => 'Загрузите иконку',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
                  array(
                      'id'          => 'project_slider_title',
                      'label'       => 'Заголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'project_slider_subtitle',
                      'label'       => 'Подзаголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'label'       => 'Структура',
              'id'          => 'structure_slider_tab',
              'type'        => 'tab'
          ),
          array(
              'id'          => 'structure_slider_1',
              'label'       => 'Блок с партнерами',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'structure_slider_img1',
                      'label'       => 'Загрузите иконку',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
                  array(
                      'id'          => 'structure_slider_desc1',
                      'label'       => 'Описание',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'id'          => 'structure_slider_2',
              'label'       => 'Блок с компаниями',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'structure_slider_title2',
                      'label'       => 'Заголовок',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'structure_slider_desc2',
                      'label'       => 'Описание',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'id'          => 'structure_slider_3',
              'label'       => 'Блок с партнерами внизу',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'structure_slider_img3',
                      'label'       => 'Загрузите иконку',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
                  array(
                      'id'          => 'structure_slider_title3',
                      'label'       => 'Название',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'structure_slider_address3',
                      'label'       => 'Андрес',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'structure_slider_desc32',
                      'label'       => 'Описание',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'structure_slider_site3',
                      'label'       => 'Сайт',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'structure_slider_lat',
                      'label'       => 'Широта',
                      'desc'        => 'Получить на GoogleMaps',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'structure_slider_lng',
                      'label'       => 'Широта',
                      'desc'        => 'Получить на GoogleMaps',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'label'       => 'О группе',
              'id'          => 'about_slider_tab',
              'type'        => 'tab'
          ),
          array(
              'id'          => 'about_slider1',
              'label'       => 'История',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'about_slider1_year1',
                      'label'       => 'Год',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider1_desc1',
                      'label'       => 'Описание',
                      'desc'        => '',
                      'type'        => 'textarea',
                  ),
              )
          ),
          array(
              'id'          => 'about_slider2',
              'label'       => 'Правление',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'about_slider2_bg',
                      'label'       => 'Загрузите фото',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
                  array(
                      'id'          => 'about_slider2_name',
                      'label'       => 'Имя',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider2_role1',
                      'label'       => 'Должность 1',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider2_role2',
                      'label'       => 'Должность 2',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider2_role3',
                      'label'       => 'Должность 3',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider2_desc',
                      'label'       => 'Описание',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'id'          => 'about_slider_3',
              'label'       => 'Блок с партнерами внизу',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'about_slider_img3',
                      'label'       => 'Загрузите иконку',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
                  array(
                      'id'          => 'about_slider_title3',
                      'label'       => 'Название',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider_address3',
                      'label'       => 'Андрес',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider_desc32',
                      'label'       => 'Описание',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider_site3',
                      'label'       => 'Сайт',
                      'desc'        => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider_lat',
                      'label'       => 'Широта',
                      'desc'        => 'Получить на GoogleMaps',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'about_slider_lng',
                      'label'       => 'Широта',
                      'desc'        => 'Получить на GoogleMaps',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'id'          => 'about_slider_4',
              'label'       => 'Блок с клиентами',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'about_slider4_img',
                      'label'       => 'Загрузите иконку',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
              )
          ),
          array(
              'label'       => 'Контакты',
              'id'          => 'contacts_slider_tab',
              'type'        => 'tab'
          ),
          array(
              'id'          => 'contacts_slider',
              'label'       => 'Список адресов',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'contacts_slider_name',
                      'label'       => 'Название',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'contacts_slider_desc',
                      'label'       => 'Описание',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'contacts_slider_address',
                      'label'       => 'Адрес',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'contacts_slider_tel',
                      'label'       => 'Телефон',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'contacts_slider_mail',
                      'label'       => 'Почта',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'contacts_slider_lat',
                      'label'       => 'Широта',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'contacts_slider_lng',
                      'label'       => 'Долгота',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'label'       => 'Зеленая экономика',
              'id'          => 'green_slider_tab',
              'type'        => 'tab'
          ),
          array(
              'id'          => 'green_slider_1',
              'label'       => 'Преимущества',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'green_slider1_name',
                      'label'       => 'Заголовок',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
                  array(
                      'id'          => 'green_slider1_desc',
                      'label'       => 'Описание',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'id'          => 'green_slider_2',
              'label'       => 'Методология',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'green_slider2_desc',
                      'label'       => 'Описание',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
              )
          ),
          array(
              'id'          => 'green_slider_3',
              'label'       => 'Рейтинг итогов',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'green_slider3_img',
                      'label'       => 'Загрузите изображение',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'upload',
                  ),
              )
          ),
          array(
              'label'       => 'Медиацентр',
              'id'          => 'media_slider_tab',
              'type'        => 'tab'
          ),
          array(
              'id'          => 'media_slider',
              'label'       => 'Темы для запросов',
              'desc'        => '',
              'std'         => '',
              'type'        => 'list-item',
              'settings' => array(
                  array(
                      'id'          => 'media_slider_шеуь',
                      'label'       => 'Описание',
                      'desc'        =>'',
                      'std'         => '',
                      'type'        => 'text',
                  ),
              )
          ),
      )
  );

  $my_meta_box = array(
    'id'          => 'demo_meta_box',
    'title'       => __( 'Demo Meta Box', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

      array(
        'label'       => 'Нстройка постов',
        'id'          => 'demo_conditions',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Отоброзить в промо блоке',
        'id'          => 'demo_show_gallery',
        'type'        => 'on-off',
        'desc'        => '',
        'std'         => 'off'
      ),
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $my_meta_box );
    ot_register_meta_box($page_meta);
}