<?php
namespace Elementor_LovePosts\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.2.0
 */
class LovePosts extends Widget_Base {

    /**
     * Retrieve the widget name.
     * 
     * @since 1.2.0
     * @access public
     * @return string Widget name.
     */
    public function get_name() {
        return 'LovePosts';
    }

    /**
     * Retrieve the widget title.
     * 
     * @since 1.2.0
     * @access public
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Lovetura Posts', 'elementor-love-posts' );
    }

    /**
     * Retrieve the widget icon.
     * 
     * @since 1.1.0
     * @access public
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-post-list';
    }


    /**
     * Retrieve the list of categories the widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * Note that currently Elementor supports only one category.
     * When multiple categories passed, Elementor uses the first one.
     *
     * @since 1.1.0
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'lovetura' ];
    }

        /**
     * Register the widget controls.
     * 
     * Adds different input fields to allow the user to change and customize the widget settings.
     * 
     * @since 1.1.0
     * @access protected
     */
    protected function _register_controls() {
    
        $this->start_controls_section(
            'section_listings_layout',
            [
                'label' => __( 'Layout', 'elementor-love-posts' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'posts_per_widget',
            [
              'label' => __( 'Posts', 'elementor-love-posts' ),
              'type' => Controls_Manager::SELECT,
              'default' => '5',
              'options' => [
                2 => __( '2', 'elementor-love-posts' ),
                3 => __( '3', 'elementor-love-posts' ),
                4 => __( '4', 'elementor-love-posts' ),
                5 => __( '5', 'elementor-love-posts' ),
              ],
            ]
          );
  
        $this->add_control(
            'columns',
            [
                'label' => __( 'Columns', 'elementor-love-posts' ),
                'type' => Controls_Manager::SELECT,
                'default' => '2',
                'options' => [
                    2 => __( '2', 'elementor-love-posts' ),
                    3 => __( '3', 'elementor-love-posts' ),
                    4 => __( '4', 'elementor-love-posts' )
                ]
            ]
        );
  
        $this->end_controls_section();
        
    }

    /**
     * Render the widget output on the frontend.
     * 
     * Written in PHP and used to generate the final HTML.
     * 
     * @since 1.2.0
     * 
     * @access protected
     */
    protected function render() {

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3
        ); ?>
        
        <div class="container">
        <div class="row">

        <?php
        $items_listing = new \WP_Query($args);
        while ( $items_listing->have_posts() ) : 
            $items_listing->the_post();

            $thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium-large');
        ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="margin-bottom: 10px;">
                <article class="blog-cards__item">
                    <div class="blog-cards__img">
                    <div class="blog-post-thumbnail">
                        <a href="<?php the_permalink(); ?>" class="img-wrapper">
                            <img title="<?php the_title();?>" src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>">
                        </a>
                    </div>
                    </div> <!-- div.blog-cards__img -->
                    <div class="blog-cards__content">
                        <div class="blog-card__headline">
                            <h5 style="min-height: 40px;"><?php the_title(); ?></h5>
                        </div>
                        <div class="blog-cards__excerpt" style="min-height: 95px;">
                            <p><?php echo wp_trim_words(get_the_excerpt(), 12, ''); ?>...</p>
                        </div>
                            <a class="blog-cards__link" href="<?php esc_attr(the_permalink()); ?>" target="_self"><span>Aprender más</span></a>
                    </div>
                </article>
                </div> <!-- div.col-* -->

        <?php endwhile; wp_reset_postdata(); ?>
        </div><!--.row-->
        </div><!--container-->
    <?php }
}