<?php
namespace Elementor_LovePosts;

/**
 * Class plugin
 * 
 * Main Plugin class
 * @since 1.0.0
 */
class Plugin {

/**
 * Instance
 * 
 * @since 1.0.0
 * @access private
 * @static
 * 
 * @var Plugin The single instance of the class.
 */
private static $_instance = null;

/**
 * Instance
 * 
 * Ensures only one instance of the class is loaded or can be loaded.
 * 
 * @since 1.2.0
 * @access public
 * 
 * @return Plugin An instance of the class.
 */
public static function instance() {
    if ( is_null( self::$_instance ) ) {
        self::$_instance = new self();
    }

    return self::$_instance;
} 

/**
 * Create Widget Category
 *
 * @return lovetura
 */
function add_elementor_widget_categories( $elements_manager ) {

    $elements_manager->add_category(
        'lovetura',
        [
            'title' => __( 'Lovetura', 'lovetura' ),
            'icon' => 'fa fa-plug',
        ]
    );

}

/**
 * Widget_scripts
 * 
 * Load required plugin core files.
 * 
 * @since 1.2.0
 * @access public
 */
public function widget_scripts() {
    // LovePosts JS
    //wp_enqueue_script('lovetura-posts', plugin_dir_url(__FILE__) . 'assets/js/bootstrap.min.js', array(), '4.3.1', true);
}

public function widget_styles() {
    // Bootstrap CSS
    wp_enqueue_style('lovetura-posts', plugin_dir_url(__FILE__) . 'assets/css/bootstrap.min.css', array(), '4.3.1' );
    // Lovetura Posts Custom Styles
    wp_enqueue_style('lovetura-posts-custom', plugin_dir_url(__FILE__) . 'assets/css/posts.css', array(), \Elementor_LovePosts::VERSION );
}

/**
 * Include Widgets files
 * 
 * Load widgets files
 * 
 * @since 1.2.0
 * @access private
 */
private function include_widgets_files() {
    require_once( __DIR__ . '/widgets/lovetura-posts.php' );
}

/**
 * Register Widgets
 * 
 * Register new Elementor widgets.
 * 
 * @since 1.2.0
 * @access public
 */
public function register_widgets() {
    // Its is now safe to include Widgets files
    $this->include_widgets_files();

    // Register Widgets
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\LovePosts() );
}

/**
 * Plugin class constructor
 * 
 * Register plugin action hooks and filters
 * 
 * @since 1.2.0
 * @access public
 */
public function __construct() {

    // Create Widget Category
    add_action( 'elementor/elements/categories_registered', [ $this, 'add_elementor_widget_categories' ] );

    // Register widget scripts
    add_action( 'elementor/frontend/before_enqueue_scripts', [ $this, 'widget_scripts' ] );
    add_action( 'elementor/editor/before_enqueue_scripts', [ $this, 'widget_scripts' ] );

    // Register Widget Styles
    add_action( 'elementor/frontend/before_enqueue_styles', [ $this, 'widget_styles' ] );
	add_action( 'elementor/editor/before_enqueue_styles', [ $this, 'widget_styles' ] );

    // Register widgets
    add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
}

}

//Instantiate Plugin Class
Plugin::instance();

?>