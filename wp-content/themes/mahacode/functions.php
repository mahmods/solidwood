<?php
/**
 * MahaCode functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MahaCode
 */

if ( ! function_exists( 'mahacode_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mahacode_setup() {
		define('ACF_EARLY_ACCESS', '5');
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on MahaCode, use a find and replace
		 * to change 'mahacode' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mahacode', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mahacode' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mahacode_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mahacode_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mahacode_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mahacode_content_width', 640 );
}
add_action( 'after_setup_theme', 'mahacode_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mahacode_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mahacode' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mahacode' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mahacode_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mahacode_scripts() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.css' );
	wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/css/jquery.fullpage.css' );
	wp_enqueue_style( 'animations', get_template_directory_uri() . '/css/animations.css' );
	if (pll_current_language() == "ar") {
		wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme-rtl.css' );
	} else {
		wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css' );
	}
	

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), null, true );
	wp_enqueue_script( 'fullpage-js', get_template_directory_uri() . '/js/jquery.fullpage.js', array(), null, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), null, true );

	wp_enqueue_script( 'mahacode-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mahacode-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mahacode_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


if( function_exists('acf_add_options_page') ) {
    $args = array(
        'page_title' => 'Contact Information',
        'menu_title' => 'Contact Info',
        'menu_slug' => 'contact_info',
        'position' => 2,
        'icon_url' => "dashicons-location-alt",
    );
    acf_add_options_page($args);
}

add_filter('acf/fields/google_map/api', function ( $api ){
	$api['key'] = 'AIzaSyDnEX6zLgaPJTW1Eb7rJJoADHvtNzee8hs';
	return $api;
});

// Register Custom Post Type
function custom_post_type_project() {
	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'mahacode' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'mahacode' ),
		'menu_name'             => __( 'Projects', 'mahacode' ),
		'name_admin_bar'        => __( 'Projects', 'mahacode' ),
		'archives'              => __( 'Project Archives', 'mahacode' ),
		'attributes'            => __( 'Project Attributes', 'mahacode' ),
		'parent_item_colon'     => __( 'Parent Project:', 'mahacode' ),
		'all_items'             => __( 'All Projects', 'mahacode' ),
		'add_new_item'          => __( 'Add New Project', 'mahacode' ),
		'add_new'               => __( 'Add New', 'mahacode' ),
		'new_item'              => __( 'New Project', 'mahacode' ),
		'edit_item'             => __( 'Edit Project', 'mahacode' ),
		'update_item'           => __( 'Update Project', 'mahacode' ),
		'view_item'             => __( 'View Project', 'mahacode' ),
		'view_items'            => __( 'View Projects', 'mahacode' ),
		'search_items'          => __( 'Search Project', 'mahacode' ),
		'not_found'             => __( 'Not found', 'mahacode' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mahacode' ),
		'featured_image'        => __( 'Featured Image', 'mahacode' ),
		'set_featured_image'    => __( 'Set featured image', 'mahacode' ),
		'remove_featured_image' => __( 'Remove featured image', 'mahacode' ),
		'use_featured_image'    => __( 'Use as featured image', 'mahacode' ),
		'insert_into_item'      => __( 'Insert into Project', 'mahacode' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'mahacode' ),
		'items_list'            => __( 'Projects list', 'mahacode' ),
		'items_list_navigation' => __( 'Projects list navigation', 'mahacode' ),
		'filter_items_list'     => __( 'Filter Projects list', 'mahacode' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'mahacode' ),
		'description'           => __( 'Solid Wood Projects', 'mahacode' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'custom_post_type_project', 0 );

add_filter("hf_form_element_class_attr", function() {
	return "row form-Style";
});