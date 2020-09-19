<?php 
// teams
add_action( 'init', 'register_cpt_doctor' );
function register_cpt_doctor() {
    $labels = array( 
        'name' => _x( 'Специалисты', 'doctor' ),
        'singular_name' => _x( 'Специалист', 'doctor' ),
        'add_new' => _x( 'Добавить', 'doctor' ),
        'add_new_item' => _x( 'Добавить', 'doctor' ),
        'edit_item' => _x( 'Редактировать', 'doctor' ),
        'new_item' => _x( 'Специалист', 'doctor' ),
        'view_item' => _x( 'Просмотр', 'doctor' ),
        'search_items' => _x( 'Поиск', 'doctor' ),
        'not_found' => _x( 'Не найдено', 'doctor' ),
        'not_found_in_trash' => _x( 'Корзина пуста', 'doctor' ),
        'parent_item_colon' => _x( 'Специалист', 'doctor' ),
        'menu_name' => _x( 'Специалисты', 'doctor' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'supports' => array( 'title', 'thumbnail', 'editor'),
        'taxonomies' => array( 'doctor' ),
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
    register_post_type( 'doctor', $args );
    flush_rewrite_rules();
}


//Колонки в админке
function true_id_doctor($args){
	$args['Familiya'] = 'Фамилия';	
	$args['dolzhnost'] = 'Должность';		
	$args['opyt_raboty'] = 'Опыт работы';
	return $args;
}
function true_custom_doctor($column, $id){
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
add_filter('manage_doctor_posts_columns', 'true_id_doctor', 5); //заголовки
add_action('manage_pages_custom_column', 'true_custom_doctor', 5, 2); //содержание


?>