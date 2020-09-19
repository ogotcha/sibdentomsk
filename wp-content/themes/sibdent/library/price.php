<?php 
// Создание произвольного посттайпа
add_action('init', 'register_cpt_price');
function register_cpt_price() {
	$labels = array(
		'name' 						=> _x('Прайс', 'price'),
		'singular_name'			=> _x('Прайс', 'price'),
		'add_new'					=> _x('Добавить', 'price'),
		'add_new_item'				=> _x('Добавить', 'price' ),
		'edit_item'				=> _x('Редактировать', 'price'),
		'new_item'					=> _x('Прайс', 'price'),
		'view_item'				=> _x('Просмотр', 'price'),
		'search_items'				=> _x('Поиск', 'price'),
		'not_found'				=> _x('Не найдено', 'price'),
		'not_found_in_trash'		=> _x('Корзина пуста', 'price'),
		'parent_item_colon'		=> _x('Прайс', 'price'),
		'menu_name'				=> _x('Прайс', 'price'),
	);
	$args = array( 
		'labels'				=> $labels,
		'hierarchical'			=> true,
		'supports'				=> array('title','editor'),
		'taxonomies'			=> array('price'),
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		//'menu_icon'			=> ''.get_template_directory_uri().'/images/price.png',
		'show_in_nav_menus'	=> true,
		'publicly_queryable'	=> true,
		'exclude_from_search'	=> false,
		'has_archive'			=> true,
		'query_var'			=> true,
		'can_export'			=> true,
		'capability_type'		=> 'post',		
		'rewrite'				=> true,
		//'rewrite' => array('slug' => 'oborudovanie')
	);
	register_post_type('price', $args);
	flush_rewrite_rules();
}

//Добавление таксономии
if ( ! function_exists( 'slug_veggies_tax' ) ) {
	function slug_veggies_tax() {
		$labels = array(
			'name'								=> _x('Вид', 'Taxonomy General Name', 'text_domain'),
			'singular_name'					=> _x('type', 'Taxonomy Singular Name', 'text_domain'),
			'menu_name'						=> __('Вид', 'text_domain'),
			'all_Veggies'						=> __('All Veggies', 'text_domain'),
			'parent_Veggie'					=> __('Parent Veggie', 'text_domain'),
			'parent_Veggie_colon'				=> __('Parent Veggie:', 'text_domain'),
			'new_Veggie_name'					=> __('New Veggie name', 'text_domain'),
			'add_new_Veggie'					=> __('Add new Veggie', 'text_domain'),
			'edit_Veggie'						=> __('Edit Veggie', 'text_domain'),
			'update_Veggie'					=> __('Update Veggie', 'text_domain'),
			'separate_Veggies_with_commas'	=> __('Separate Veggies with commas', 'text_domain'),
			'search_Veggies'					=> __('Search Veggies', 'text_domain'),
			'add_or_remove_Veggies'			=> __('Add or remove Veggies', 'text_domain'),
			'choose_from_most_used'			=> __('Choose from the most used Veggies', 'text_domain'),
			'not_found'						=> __('Not Found', 'text_domain'),
		);
		$args = array(
			'labels'				=> $labels,
			'hierarchical'			=> true,
			'public'				=> true,
			'show_ui'				=> true,
			'show_admin_column'	=> true,
			'show_in_nav_menus'	=> true,
			'show_tagcloud'		=> false,
		);
		register_taxonomy('type', array('price' ), $args);
	}
	add_action('init', 'slug_veggies_tax', 0);
}
?>