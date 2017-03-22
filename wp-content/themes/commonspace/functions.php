<?php
/**
 * commonspace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package commonspace
 */

if ( ! function_exists( 'commonspace_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function commonspace_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on commonspace, use a find and replace
	 * to change 'commonspace' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'commonspace', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'commonspace' ),
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
	add_theme_support( 'custom-background', apply_filters( 'commonspace_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'commonspace_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function commonspace_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'commonspace_content_width', 640 );
}
add_action( 'after_setup_theme', 'commonspace_content_width', 0 );

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '<Пред.'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = 'След>'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">' . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function commonspace_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'commonspace' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'commonspace' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'commonspace_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function commonspace_scripts() {
	// wp_enqueue_style( 'commonspace-style', get_stylesheet_uri() );//

	wp_enqueue_style( 'styles-bootstrap-grid', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap-grid.min.css' );

	wp_enqueue_style( 'styles-animate', get_template_directory_uri() . '/libs/animate/animate.css' );

	wp_enqueue_style( 'styles-main', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_style( 'styles-fonts', get_template_directory_uri() . '/css/fonts.css' );

	wp_enqueue_style( 'styles-svg', get_template_directory_uri() . '/css/svg.css' );

	wp_enqueue_style( 'styles-media', get_template_directory_uri() . '/css/media.css' );

	wp_enqueue_style( 'styles-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

	wp_enqueue_script( 'commonspace-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'commonspace-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'commonspace-modernizr', get_template_directory_uri() . '/libs/modernizr/modernizr.js', array(), '20151215', true );

	wp_enqueue_script( 'commonspace-jquery', get_template_directory_uri() . '/libs/jquery/jquery-1.11.2.min.js', array(), '20151215', true );

	wp_enqueue_script( 'commonspace-waypoints', get_template_directory_uri() . '/libs/waypoints/waypoints.min.js', array(), '20151215', true );

	wp_enqueue_script( 'commonspace-animate', get_template_directory_uri() . '/libs/animate/animate-css.js', array(), '20151215', true );

	wp_enqueue_script( 'commonspace-plugins-scroll', get_template_directory_uri() . '/libs/plugins-scroll/plugins-scroll.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'commonspace_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
