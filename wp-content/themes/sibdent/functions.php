<?php
// Подключаем посттайпы и опции
require_once (TEMPLATEPATH . '/library/sale.php');
require_once (TEMPLATEPATH . '/library/review.php');
require_once (TEMPLATEPATH . '/library/price.php');
require_once (TEMPLATEPATH . '/library/doctor.php');
require_once (TEMPLATEPATH . '/library/doctor2.php');
require_once (TEMPLATEPATH . '/library/service.php');
require_once (TEMPLATEPATH . '/library/options.php');


// Подключение css и js
function site_scripts() {
	//css
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, '040620-3' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/library/slick/slick.css', false, '1' );
	wp_enqueue_style( 'search', get_template_directory_uri() . '/css/search.css', false, '170420' );
	//js
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, '1' );	
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/library/slick/slick.min.js', false, '140219' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', false, '290421' );

}		
add_action('wp_enqueue_scripts', 'site_scripts');

//Добавление меню
function register_my_menus() {
	register_nav_menus(	array(
		'main-menu' => 'Главное меню',
		'price-menu' => 'Прайс',		
	));
}

// поддержка меню
add_action( 'init', 'register_my_menus' );
//Логотип
function pottery_setup() { 
add_theme_support('custom-logo', array( 
	'flex-height' => true 
)); 
} 
add_action('after_setup_theme', 'pottery_setup');


//вывод миниатюры в админке
if ( !function_exists('fb_AddThumbColumn') && function_exists('add_theme_support') ) {
		add_theme_support('post-thumbnails', array( 'post', 'page' ) );
		function fb_AddThumbColumn($cols) {
			if($_GET['post_type'] != product) {
				$cols['thumbnail'] = __('Thumbnail');
					return $cols;	
			}
		}
		function fb_AddThumbValue($column_name, $post_id) {
						$width = (int) 100;
						$height = (int) 100;
						if ( 'thumbnail' == $column_name ) {
								$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
								$attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
								if ($thumbnail_id)
										$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
								elseif ($attachments) {
										foreach ( $attachments as $attachment_id => $attachment ) {
												$thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
										}
								}
										if ( isset($thumb) && $thumb ) {
												echo $thumb;
										} else {
												echo __('None');
										}
						}
		}
			add_filter( 'manage_posts_columns', 'fb_AddThumbColumn' );
			add_action( 'manage_posts_custom_column', 'fb_AddThumbValue', 10, 2 );
			add_filter( 'manage_pages_columns', 'fb_AddThumbColumn' );
			add_action( 'manage_pages_custom_column', 'fb_AddThumbValue', 10, 2 );	    
}
// поддержка миниатюр
add_theme_support('post-thumbnails');

//удаление лищних пунктов в админке
function remove_admin_menu_items() {
	remove_menu_page('edit-comments.php');
	remove_menu_page('edit.php');
	remove_menu_page('responsive-lightbox-settings');
	//remove_menu_page('wpcf7');
	//remove_menu_page('upload.php');
	//remove_menu_page('profile.php');
}
add_action( 'admin_menu', 'remove_admin_menu_items' );

// Поддержка SVG
add_filter('upload_mimes', 'add_svg_type', 1);
function add_svg_type($mime_types) {
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}

// Режем фотки
add_image_size('stock-thumb', 1150, 1050, true);
add_image_size('mob-thumb', 480, 600, true);
 
add_filter('image_size_names_choose', 'true_new_image_sizes');

function true_new_image_sizes($sizes) {
	$addsizes = array(
	 "stock-thumb" => 'stock-thumb',
	 "mob-thumb" => 'mob-thumb'
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
   }

?>