<?php
/**
 * WooThemes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WooThemes
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */





function woothemes_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on WooThemes, use a find and replace
		* to change 'woothemes' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'woothemes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );
	
	add_theme_support('woocommerce');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Header Menu', 'woothemes' ),
			'footer_menu' => esc_html__( 'Footer Menu', 'woothemes' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'woothemes_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'woothemes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function woothemes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'woothemes_content_width', 640 );
}
add_action( 'after_setup_theme', 'woothemes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function woothemes_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'woothemes' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'woothemes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'woothemes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
	


function woothemes_scripts() {

// Including css files

	wp_enqueue_style('line-awesome', get_template_directory_uri() . '/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/plugins/owl-carousel/owl.carousel.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/plugins/magnific-popup/magnific-popup.css');
	wp_enqueue_style('countdown', get_template_directory_uri() . '/assets/css/plugins/jquery.countdown.css');
	wp_enqueue_style('skins', get_template_directory_uri() . '/assets/css/skins/skin-demo-4.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('demos', get_template_directory_uri() . '/assets/css/demos/demo-4.css');
	

// Including js files

	wp_enqueue_script('jquery-min-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap-bundle-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('hoverIntent-min-js', get_template_directory_uri() . '/assets/js/jquery.hoverIntent.min.js', array('jquery'), null, true);
	wp_enqueue_script('waypoints-min-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), null, true);
	wp_enqueue_script('superfish-min-js', get_template_directory_uri() . '/assets/js/superfish.min.js', array('jquery'), null, true);
	wp_enqueue_script('owl-carousel-min-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap-input-spinner-js', get_template_directory_uri() . '/assets/js/bootstrap-input-spinner.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-plugin-min-js', get_template_directory_uri() . '/assets/js/jquery.plugin.min.js', array('jquery'), null, true);
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
	wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), null, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
	wp_enqueue_script('demos', get_template_directory_uri() . '/assets/js/demos/demo-4.js', array('jquery'), null, true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'woothemes_scripts' );

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



// ACF Theme Options Page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'  => 'Theme General Settings', // Title shown on the page
        'menu_title'  => 'Theme Options',          // Title shown in admin sidebar
        'menu_slug'   => 'theme-general-settings', // URL slug
        'capability'  => 'edit_posts',             // Permission
        'redirect'    => false                     // Directly open this page
    ));

    
}



add_shortcode('child_category_tabs_all', 'dynamic_child_category_tabs_with_all_shortcode');

function dynamic_child_category_tabs_with_all_shortcode($atts){
    $atts = shortcode_atts(array(
        'parent'=> '',
        'limit'=> '12',
    ), $atts, 'child_category_tabs_all');

    // Validate parent category
    if ( is_numeric($atts['parent']) ) {
        $parent_category = get_term_by('id', $atts['parent'], 'product_cat');
    } else {
        $parent_category = get_term_by('slug', $atts['parent'], 'product_cat');
    }

    if( ! $parent_category ) {
        return '<p>' . __('Invalid parent category', 'woocommerce'). '</p>';
    }

    // Get child categories
    $child_categories = get_terms(array(
        'taxonomy' => 'product_cat',
        'child_of' => $parent_category->term_id,
        'hide_empty' => false,
    ));

    ob_start();

    // Tabs navigation
    echo '<ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">';
    
    // "All" tab
    echo '<li class="nav-item">';
    echo '<a class="nav-link active" id="tab-all-link" data-toggle="tab" href="#tab-all" role="tab" aria-controls="tab-all" aria-selected="true">' . __('All', 'woocommerce') . '</a>';
    echo '</li>';

    // Child category tabs
    if( $child_categories ) {
        foreach ($child_categories as $child_category){
            echo '<li class="nav-item">';
            echo '<a class="nav-link" id="tab-' . esc_attr($child_category->slug) . '-link" data-toggle="tab" href="#tab-' . esc_attr($child_category->slug) . '" role="tab" aria-controls="tab-' . esc_attr($child_category->slug) . '" aria-selected="false">' . esc_html($child_category->name) . '</a>';
            echo '</li>';
        }
    }
    echo '</ul>';

    // Tab content wrapper
    echo '<div class="tab-content">';

    // "All" tab content
    $all_query = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page' => intval($atts['limit']),
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $parent_category->term_id,
                'include_children' => true,
            ),
        ),
    ));

    echo '<div class="tab-pane fade show active" id="tab-all" role="tabpanel" aria-labelledby="tab-all-link">';
    echo '<ul class="products">';
    while($all_query->have_posts()): $all_query->the_post();
        wc_get_template_part('content', 'product');
    endwhile;
    echo '</ul></div>';
    wp_reset_postdata();

    // Child category contents
    if( $child_categories ){
        foreach ($child_categories as $child_category){
            $cat_query = new WP_Query(array(
                'post_type' => 'product',
                'posts_per_page' => intval($atts['limit']),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'term_id',
                        'terms'    => $child_category->term_id,
                    ),
                ),
            ));

            echo '<div class="tab-pane fade" id="tab-' . esc_attr($child_category->slug) . '" role="tabpanel" aria-labelledby="tab-' . esc_attr($child_category->slug) . '-link">';
            echo '<ul class="products">';
            while($cat_query->have_posts()): $cat_query->the_post();
                wc_get_template_part('content', 'product');
            endwhile;
            echo '</ul></div>';
            wp_reset_postdata();
        }
    }

    echo '</div>'; // end tab-content

    return ob_get_clean();
}

// Ensure WooCommerce default styles are loaded
add_filter( 'woocommerce_enqueue_styles', function($enqueue_styles) {
    // Remove unused WooCommerce styles if you want, or keep all
    unset($enqueue_styles['woocommerce-general']); // Optional
    return $enqueue_styles;
});

// Load WooCommerce and theme styles properly
function woothemes_enqueue_shop_styles() {
    // WooCommerce default
    if ( class_exists( 'WooCommerce' ) ) {
        wp_enqueue_style( 'woocommerce-general' );
        wp_enqueue_style( 'woocommerce-layout' );
        wp_enqueue_style( 'woocommerce-smallscreen' );
    }

    // Theme CSS (already enqueued, just making sure)
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('demos', get_template_directory_uri() . '/assets/css/demos/demo-4.css');
}
add_action( 'wp_enqueue_scripts', 'woothemes_enqueue_shop_styles', 20 ); // 20 ensures after default enqueue
