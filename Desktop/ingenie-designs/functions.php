<?php

wp_enqueue_script("jquery");

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}

set_post_thumbnail_size( 250, 250, true ); // 50 pixels wide by 50 pixels tall, crop mode

add_theme_support( 'title-tag' ); 

function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// Add "Read More" link to hand-crafted excerpts
add_filter('get_the_excerpt', 'wpm_manual_excerpt_read_more_link');
function wpm_manual_excerpt_read_more_link($excerpt) {
    $excerpt_more = '';
    if (has_excerpt() && ! is_attachment() && get_post_type() == 'post') {
        $excerpt_more = '&nbsp;<a href="' . get_permalink() . '">[Continue&nbsp;reading] <span class="screen-reader-text">' . get_the_title() . '</span></a>';
    }
    return $excerpt . $excerpt_more;
}

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Slider',
    'before_widget' => '<div class = "SliderArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Brands footer',
    'before_widget' => '<div class = "brandfooter">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Social Media',
    'before_widget' => '<div class = "socialmedia">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

// Enable custom menues in text widgets
function register_my_menus() {
  register_nav_menus(
    array(
      'topbar' => __( 'Top Bar Social Media' ),
      'navbar' => __( 'Navigation' ),
      'social' => __( 'social' ),
      'slidercall' => __( 'above slider' ),
      'sitemap' => __( 'sitemap' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


add_filter( 'widget_text', 'do_shortcode' );


$defaults = array(
	'default-image'          => '',
	'width'                  => 1000,
	'height'                 => 1000,
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
    
?>
<?php 
  function theme_customize_register( $wp_customize ) {
    // Text color
    $wp_customize->add_setting( 'text_color', array(
      'default'   => '',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Text color', 'theme' ),
    ) ) );

    // Link color
    $wp_customize->add_setting( 'link_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Link color', 'theme' ),
    ) ) );

    // Accent color
    $wp_customize->add_setting( 'accent_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Accent color', 'theme' ),
    ) ) );

    // Border color
    $wp_customize->add_setting( 'border_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Border color', 'theme' ),
    ) ) );

    // Sidebar background
    $wp_customize->add_setting( 'sidebar_background', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_background', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Sidebar Background', 'theme' ),
    ) ) );
    
    // Darkmint
    $wp_customize->add_setting( 'header_colour', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_colour', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Header Colour', 'theme' ),
    ) ) );
    
     // Navbar
    $wp_customize->add_setting( 'navbar_colour', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navbar_colour', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Navbar Colour', 'theme' ),
    ) ) );
    
      // secondary colour
    $wp_customize->add_setting( 'secondary_colour', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_colour', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Secondary Colour', 'theme' ),
    ) ) );
    

     // Body

   $wp_customize->add_setting( 'body_colour', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_colour', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Body Colour', 'theme' ),
    ) ) );

// Footer
    $wp_customize->add_setting( 'footer_colour', array(
      'default'   => '#020202',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

     
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_colour', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Footer Colour', 'theme' ),
    ) ) );


    
  }
  
add_filter( 'the_title', 'shorten_woo_product_title', 10, 2 );
function shorten_woo_product_title( $title, $id ) {
    if ( ! is_singular( array( 'product' ) ) && get_post_type( $id ) === 'product' ) {
		return substr( $title, 0, 37); // change last number to the number of characters you want
    } else {
        return $title;
    }
}
 


  add_action( 'customize_register', 'theme_customize_register' );
?>
<?php function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );
?>
<?php 
/**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save' );
?>
<?php
 
// load css into the website's front-end
function mytheme_enqueue_style() {
    wp_enqueue_style( 'ingenie', get_template_directory_uri() . '/css/ingenie.css' );
  	wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap-grid.min.css' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );
 
// load css into the admin pages
function mytheme_enqueue_options_style() {
    wp_enqueue_style( 'ingenie', get_template_directory_uri() . '/css/admin.css' ); 
}
add_action( 'admin_enqueue_scripts', 'mytheme_enqueue_options_style' );
 
// load css into the login page
function mytheme_enqueue_login_style() {
    wp_enqueue_style( 'mytheme-options-style', get_template_directory_uri() . '/css/login.css' ); 
}
add_action( 'login_enqueue_scripts', 'mytheme_enqueue_login_style' );
 
?>
<?php
  function theme_get_customizer_css() {
    ob_start();

    $text_color = get_theme_mod( 'text_color', '' );
    if ( ! empty( $text_color ) ) {
      ?>
      body {
        color: <?php echo $text_color; ?>;
      }
      <?php
    }


    $link_color = get_theme_mod( 'link_color', '' );
    if ( ! empty( $link_color ) ) {
      ?>
      a {
        color: <?php echo $link_color; ?>;
        border-bottom-color: <?php echo $link_color; ?>;
      }
      <?php
    }

    
    $border_color = get_theme_mod( 'border_color', '' );
    if ( ! empty( $border_color ) ) {
      ?>
      input,
      textarea {
        border-color: <?php echo $border_color; ?>;
      }
      <?php
    }

    
    $accent_color = get_theme_mod( 'accent_color', '' );
    if ( ! empty( $accent_color ) ) {
      ?>
      a:hover {
        color: <?php echo $accent_color; ?>;
        border-bottom-color: <?php echo $accent_color; ?>;
      }

      button,
      input[type="submit"] {
        background-color: <?php echo $accent_color; ?>;
      }
      <?php
    }

    
    $sidebar_background = get_theme_mod( 'sidebar_background', '' );
    if ( ! empty( $sidebar_background ) ) {
      ?>
      .sidebar {
        background-color: <?php echo $sidebar_background; ?>;
      }
      <?php
    }
    
    $header_colour = get_theme_mod( 'header_colour', '' );
    if ( ! empty( $header_colour ) ) {
      ?>
      .darkmint {
        background-color: <?php echo $header_colour; ?>;
      }
      <?php
    }
    
     $navbar_colour = get_theme_mod( 'navbar_colour', '' );
    if ( ! empty( $navbar_colour ) ) {
      ?>
      .nav {
        background-color: <?php echo $navbar_colour; ?>;
      }
      <?php
    }
    
    $secondary_colour = get_theme_mod( 'secondary_colour', '' );
    if ( ! empty( $secondary_colour ) ) {
      ?>
      .blog-footer, .mint {
        background-color: <?php echo $secondary_colour; ?>;
      }
      <?php
    }
    
    $body_colour = get_theme_mod( 'body_colour', '' );
    if ( ! empty( $body_colour ) ) {
      ?>
      body {
        background-color: <?php echo $body_colour; ?>;
      }
      <?php
    }
    
     $footer_colour = get_theme_mod( 'footer_colour', '' );
    if ( ! empty( $footer_colour ) ) {
      ?>
      .footer {
        background-color: <?php echo $footer_colour; ?>;
      }
      <?php
    }

    $css = ob_get_clean();
    return $css;
  }

// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}


// smart jquery inclusion
if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '1.3.2');
	wp_enqueue_script('jquery');
}


// enable threaded comments
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// add google analytics to footer
function add_google_analytics() {
	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
	echo '<script type="text/javascript">';
	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
	echo 'pageTracker._trackPageview();';
	echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');


// custom excerpt length
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/* custom excerpt ellipses for 2.8-
function custom_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'custom_excerpt_more'); 
*/


// no more jumping for read more link
function no_more_jumping($post) {
	return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
}
add_filter('excerpt_more', 'no_more_jumping');


// add a favicon to your 
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


// add a favicon for your admin
function admin_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.png" />';
}
add_action('admin_head', 'admin_favicon');


// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// disable all widget areas
function disable_all_widgets($sidebars_widgets) {
	//if (is_home())
		$sidebars_widgets = array(false);
	return $sidebars_widgets;
}
add_filter('sidebars_widgets', 'disable_all_widgets');


// kill the admin nag
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}


// category id in body and post class
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');


// get the first category id
function get_first_category_ID() {
	$category = get_the_category();
	return $category[0]->cat_ID;
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Modify our styles registration like so:

function theme_enqueue_styles() {
  wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
  $custom_css = theme_get_customizer_css();
  wp_add_inline_style( 'theme-styles', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );?>
<?php $pagination = get_the_posts_pagination(); ?>
