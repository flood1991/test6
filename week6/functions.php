<?php 
function week6_scripts() {
	wp_enqueue_style( 'colors', get_template_directory_uri(). '/css/colors/g-red.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/css/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'et-line-font', get_template_directory_uri(). '/css/et-line-font/et-line-font.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '/css/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri(). '/css/owl-carousel/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri(). '/css/owl-carousel/owl.theme.default.min.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri(). '/css/responsive.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	


	wp_enqueue_script( 'jquery-3.3.1.min', get_template_directory_uri() . '/js/jquery-3.3.1.min.js');
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'jquery.countTo', get_template_directory_uri() . '/js/jquery.countTo.js');
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js');
	wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js');
	wp_enqueue_script( 'masonry.pkgd.min', get_template_directory_uri() . '/js/masonry.pkgd.min.js');
	wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
	wp_enqueue_script( 'parsley', get_template_directory_uri() . '/js/parsley.js');
	wp_enqueue_script( 'scrollIt.min', get_template_directory_uri() . '/js/scrollIt.min.js');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
	
}

add_action( 'wp_enqueue_scripts', 'week6_scripts' );

function week6_setup() {
	$defaults = array(
    'default-image'          => '',
    'height'                 => 1200,
    'width'                  => 1903,
    'max-width'              => 1903,
    'flex-height'            => true,
    'flex-width'             => true,
    'random-default'         => true,
  );
	add_theme_support( 'custom-header', $defaults );
	load_theme_textdomain('week6');
	add_theme_support ('title-tag');
	add_theme_support ('custom-logo');
	add_theme_support ('post-thumbnails');
	add_image_size( 'portfolio', 800, 650, true );
	register_nav_menu ('head', 'head_menu');

}
	add_action('after_setup_theme','week6_setup');

add_action( 'init', 'portfolio' );
function portfolio(){
	register_post_type('portfolio', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'portfolio', // основное название для типа записи
			'singular_name'      => 'portfolio', // название для одной записи этого типа
			'add_new'            => 'Добавить работу', // для добавления новой записи
			'add_new_item'       => 'Добавление работы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование работы', // для редактирования типа записи
			'new_item'           => 'Новая запись', // текст новой записи
			'view_item'          => 'Смотреть работу', // для просмотра записи этого типа.
			'search_items'       => 'Искать работу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Portfolio', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, 
		'exclude_from_search' => true, 
		'show_ui'             => true, 
		'show_in_menu'        => null, 
		'show_in_admin_bar'   => null, 
		'show_in_nav_menus'   => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt', 
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_taxonomy('portfolio_category', array('portfolio'), array(
		'label'                 => '', 
		'labels'                => array(
			'name'              => 'Portfolio_Category',
			'menu_name'         => 'portfolio category',
			'show_admin_column' => true,
		),
		'hierarchical'          => true,	
	) );
}


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки страницы',
		'menu_title'	=> 'Настройки сайта',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
function week6_background() {

}
?>