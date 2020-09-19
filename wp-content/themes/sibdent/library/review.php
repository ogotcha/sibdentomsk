<?php 

// Reviews

add_action( 'init', 'register_cpt_review' );

function register_cpt_review() {

    $labels = array( 
        'name' => _x( 'Отзывы', 'review' ),
        'singular_name' => _x( 'Отзыв', 'review' ),
        'add_new' => _x( 'Добавить отзыв', 'review' ),
        'add_new_item' => _x( 'Добавить отзыв', 'review' ),
        'edit_item' => _x( 'Редактировать отзыв', 'review' ),
        'new_item' => _x( 'Новый отзыв', 'review' ),
        'view_item' => _x( 'Просмотр', 'review' ),
        'search_items' => _x( 'Поиск отзыва', 'review' ),
        'not_found' => _x( 'Не найдено', 'review' ),
        'not_found_in_trash' => _x( 'Корзина пуста', 'review' ),
        'parent_item_colon' => _x( 'Родительская методика:', 'review' ),
        'menu_name' => _x( 'Отзывы', 'review' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'supports' => array( 'title', 'thumbnail', 'excerpt' ),
        'taxonomies' => array( 'review' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        //'menu_position' => 7,
        'menu_icon' => ''.get_template_directory_uri().'/img/review.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'review', $args );
    flush_rewrite_rules();
}
?>