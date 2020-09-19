<?php 
// sales
add_action( 'init', 'register_cpt_sale' );
function register_cpt_sale() {
    $labels = array( 
        'name' => _x( 'Акции', 'sale' ),
        'singular_name' => _x( 'Акция', 'sale' ),
        'add_new' => _x( 'Добавить акцию', 'sale' ),
        'add_new_item' => _x( 'Добавить акцию', 'sale' ),
        'edit_item' => _x( 'Редактировать акцию', 'sale' ),
        'new_item' => _x( 'Акция', 'sale' ),
        'view_item' => _x( 'Просмотр', 'sale' ),
        'search_items' => _x( 'Поиск акции', 'sale' ),
        'not_found' => _x( 'Не найдено', 'sale' ),
        'not_found_in_trash' => _x( 'Корзина пуста', 'sale' ),
        'parent_item_colon' => _x( 'Акция', 'sale' ),
        'menu_name' => _x( 'Акции', 'sale' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
				'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'taxonomies' => array( 'sale' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => ''.get_template_directory_uri().'/img/sale.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'sale', $args );
    flush_rewrite_rules();
}

//Дополнительные поля
function sale_meta_box() {
	add_meta_box(
		'sale_meta_box',		// Идентификатор(id)
		'Дополнительыне параметры',		// Заголовок области с мета-полями(title)
		'show_sale_metabox',	// Вызов(callback)
		'sale',			// Где будет отображаться наше поле, в нашем случае в Записях
		'normal',
		'high');
}

add_action('add_meta_boxes', 'sale_meta_box'); // Запускаем функцию
 
$meta_fields = array(
	array(
		'label'	=> 'Акция',
		'desc'	=> 'Установить галочку ели новость является акцией',
		'id'	=> 'salecheckbox',		// даем идентификатор.
		'type'	=> 'checkbox'			// Указываем тип поля.
	),
);

// Вызов метаполей  
function show_sale_metabox() {
	global $meta_fields;	// Обозначим наш массив с полями глобальным
	global $post;			// Глобальный $post для получения id создаваемого/редактируемого поста
	// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($meta_fields as $field) {
		// Получаем значение если оно есть для этого поля 
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr> 
				<th><label for="'.$field['id'].'">'.$field['label'].'</label></th> 
				<td>';
				switch($field['type']) {
					case 'checkbox':
						echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/>
						<label for="'.$field['id'].'">'.$field['desc'].'</label>';
					break;
				}
			echo '</td></tr>';
		}
	echo '</table>';
}
// Пишем функцию для сохранения
function save_sale_meta_fields($post_id) {
	global $meta_fields;	// Массив с нашими полями
	// проверяем наш проверочный код 
	if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
		return $post_id;
	// Проверяем авто-сохранение 
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $post_id;
	// Проверяем права доступа  
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
		return $post_id;
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	// Если все отлично, прогоняем массив через foreach
	foreach ($meta_fields as $field) {
		$old = get_post_meta($post_id, $field['id'], true);	// Получаем старые данные (если они есть), для сверки
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {							// Если данные новые
			update_post_meta($post_id, $field['id'], $new);	// Обновляем данные
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
		}
	}	// end foreach  
}
add_action('save_post', 'save_sale_meta_fields'); // Запускаем функцию сохранения
//Колонки в админке
function true_id_sale($args){
	$args['salecheckbox'] = 'Акция';
	return $args;
}
function true_custom_sale($column, $id){
	if($column === 'salecheckbox'){
		if (get_post_meta($id, 'salecheckbox', true)) {echo get_post_meta($id, 'salecheckbox', true);}
	}
}
add_filter('manage_sale_posts_columns', 'true_id_sale', 5); //заголовки
add_action('manage_pages_custom_column', 'true_custom_sale', 5, 2); //содержание
?>