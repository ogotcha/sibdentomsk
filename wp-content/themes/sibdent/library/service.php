<?php 
// services
add_action( 'init', 'register_cpt_service' );
function register_cpt_service() {
    $labels = array( 
        'name' => _x( 'Услуги', 'service' ),
        'singular_name' => _x( 'Услуга', 'service' ),
        'add_new' => _x( 'Добавить услугу', 'service' ),
        'add_new_item' => _x( 'Добавить услугу', 'service' ),
        'edit_item' => _x( 'Редактировать услугу', 'service' ),
        'new_item' => _x( 'Услуга', 'service' ),
        'view_item' => _x( 'Просмотр', 'service' ),
        'search_items' => _x( 'Поиск услуги', 'service' ),
        'not_found' => _x( 'Не найдено', 'service' ),
        'not_found_in_trash' => _x( 'Корзина пуста', 'service' ),
        'parent_item_colon' => _x( 'Услуга', 'service' ),
        'menu_name' => _x( 'Услуги', 'service' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'supports' => array( 'title', 'thumbnail', 'editor'),
        'taxonomies' => array( 'service' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        //'menu_icon' => ''.get_template_directory_uri().'/img/service.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'service', $args );
    flush_rewrite_rules();
}

?>