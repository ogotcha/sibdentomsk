<?php 
// teams
add_action( 'init', 'register_cpt_doctor2' );
function register_cpt_doctor2() {
    $labels = array( 
        'name' => _x( 'Специалисты2', 'doctor2' ),
        'singular_name' => _x( 'Специалист', 'doctor2' ),
        'add_new' => _x( 'Добавить', 'doctor2' ),
        'add_new_item' => _x( 'Добавить', 'doctor2' ),
        'edit_item' => _x( 'Редактировать', 'doctor2' ),
        'new_item' => _x( 'Специалист', 'doctor2' ),
        'view_item' => _x( 'Просмотр', 'doctor2' ),
        'search_items' => _x( 'Поиск', 'doctor2' ),
        'not_found' => _x( 'Не найдено', 'doctor2' ),
        'not_found_in_trash' => _x( 'Корзина пуста', 'doctor2' ),
        'parent_item_colon' => _x( 'Специалист', 'doctor2' ),
        'menu_name' => _x( 'Специалисты2', 'doctor2' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'supports' => array( 'title', 'thumbnail', 'editor'),
        'taxonomies' => array( 'doctor2' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        //'menu_icon' => ''.get_template_directory_uri().'/images/doctor.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'doctor2', $args );
    flush_rewrite_rules();
}


//Колонки в админке
function true_id_doctor2($args){
	$args['Familiya'] = 'Фамилия';	
	$args['dolzhnost'] = 'Должность';		
	$args['opyt_raboty'] = 'Опыт работы';
	return $args;
}
function true_custom_doctor2($column, $id){
	if($column === 'Familiya'){
		if (get_post_meta($id, 'Familiya', true)) {echo get_post_meta($id, 'Familiya', true);}
	}
	if($column === 'dolzhnost'){
		if (get_post_meta($id, 'dolzhnost', true)) {echo get_post_meta($id, 'dolzhnost', true);}
	}	
	if($column === 'opyt_raboty'){
		if (get_post_meta($id, 'opyt_raboty', true)) {echo get_post_meta($id, 'opyt_raboty', true);}
	}
}
add_filter('manage_doctor_posts_columns', 'true_id_doctor2', 5); //заголовки
add_action('manage_pages_custom_column', 'true_custom_doctor2', 5, 2); //содержание


?>