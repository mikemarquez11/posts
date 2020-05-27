<?php
namespace Elementor_LovePosts\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.2.0
 */
class LoveSlides extends Widget_Base {

    /**
     * Retrieve the widget name.
     * 
     * @since 1.2.0
     * @access public
     * @return string Widget name.
     */
    public function get_name() {
        return 'LoveSlides';
    }

    /**
     * Retrieve the widget title.
     * 
     * @since 1.2.0
     * @access public
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Lovetura Slides', 'elementor-love-slides' );
    }

    /**
     * Retrieve the widget icon.
     * 
     * @since 1.1.0
     * @access public
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-slides';
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

    public function get_script_depends() {
        $scripts = array( 'lt-slick', 'lt-slick-init' );
     
        return $scripts;
    }

    public function get_style_depends() {
        $styles = array( 'lt-slick', 'lt-slick-theme', 'lt-slides' );
     
        return $styles;
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
    protected function render() { ?>
    <article class="content-img-slider">
   
        <div class="content-img-slider__slides">

        <div class="col-row content-img-slider__row">
            <div class="col col--halfs content-img-slider__col">
                <div class="content-img-slider__images">
                    <ul class="ul-reset">
                        <li class="content-img-slider__images-item" style="background-image: url('https://lovetura.com/wp-content/uploads/2020/05/lovetura-seduccion-600x600-1.jpg');"></li>
                    </ul>
                </div>
            </div>

            <div class="col col--halfs content-img-slider__col">
                <div class="content-img-slider__content">
                    <h3 class="content-img-slider__headline">Procesos de Seducción</h3>
                    <h4 class="content-img-slider__subline">Acompañamiento en Procesos de Seducción</h4>
                    <p class="content-img-slider__text"><strong>Guiados por el fuego de la pasión…</strong></p>
                    <p class="content-img-slider__text">Este servicio ha sido creado pensando en aquellas personas que consideran importante 
                    aprender a gestionar y/o potenciar sus recursos psicológicos y emocionales, con el fin 
                    de seducir y conquistar a su ser querido.</p>
                    <p class="content-img-slider__text">
                        <a href="https://lovetura.com/que-ofrecemos/seduccion/" class="btn btn--pill btn--fill btn--primary">Ver Más</a>
                    </p>
                </div>
            </div>

        </div>

        <div class="col-row content-img-slider__row">
            <div class="col col--halfs content-img-slider__col">
                <div class="content-img-slider__images">
                    <ul class="ul-reset">
                        <li class="content-img-slider__images-item" style="background-image: url('https://lovetura.com/wp-content/uploads/2020/05/lovetura-desc-600x600-1.jpg');"></li>
                    </ul>
                </div>
            </div>

            <div class="col col--halfs content-img-slider__col">
                <div class="content-img-slider__content">
                    <h3 class="content-img-slider__headline">Descolonización</h3>
                    <h4 class="content-img-slider__subline">Descolonización Emocional</h4>
                    <p class="content-img-slider__text"><strong>El amor propio: tu primer lazo…</strong></p>
                    <p class="content-img-slider__text">Vamos a identificar patrones de conducta y procesos internos que visibilicen la 
                        situación de abuso y/o maltrato que esté experimentando nuestro/a cliente. Y finalizará, con la construcción de 
                        un universo interior sano; descolonizado.</p>
                    <p class="content-img-slider__text">
                        <a href="https://lovetura.com/que-ofrecemos/descolonizacion_emocional/" class="btn btn--pill btn--fill btn--primary">Ver Más</a>
                    </p>
                </div>
            </div>

        </div>

        <div class="col-row content-img-slider__row">
            <div class="col col--halfs content-img-slider__col">
                <div class="content-img-slider__images">
                    <ul class="ul-reset">
                        <li class="content-img-slider__images-item" style="background-image: url('https://lovetura.com/wp-content/uploads/2020/05/lovetura-liberado-600x600-1.jpg');"></li>
                    </ul>
                </div>
            </div>

            <div class="col col--halfs content-img-slider__col">
                <div class="content-img-slider__content">
                    <h3 class="content-img-slider__headline">Colonizador Liberado</h3>
                    <h4 class="content-img-slider__subline">Colonizador Liberado</h4>
                    <p class="content-img-slider__text"><strong>Libertar es amar…</strong></p>
                    <p class="content-img-slider__text">Este espacio ha sido ideado para aquellas personas valientes que desean transcurrir 
                    de las relaciones de tipo dominación-sumisión a relaciones amorosas plenas, repletas de magia, llenas de 
                    expectativas y sobre todo, con mucho porvenir.</p>
                    <p class="content-img-slider__text">
                        <a href="https://lovetura.com/que-ofrecemos/colonizador-liberado/" class="btn btn--pill btn--fill btn--primary">Ver Más</a>
                    </p>
                </div>
            </div>

        </div>

        <div class="col-row content-img-slider__row">
            <div class="col col--halfs content-img-slider__col">
                <div class="content-img-slider__images">
                    <ul class="ul-reset">
                        <li class="content-img-slider__images-item" style="background-image: url('https://lovetura.com/wp-content/uploads/2020/05/lovetura-ansiedad-600x600-1.jpg');"></li>
                    </ul>
                </div>
            </div>

            <div class="col col--halfs content-img-slider__col">
                <div class="content-img-slider__content">
                    <h3 class="content-img-slider__headline">Manejo de la Ansiedad</h3>
                    <h4 class="content-img-slider__subline">Manejo de la Ansiedad</h4>
                    <p class="content-img-slider__text"><strong>¡Vive plenamente!</strong></p>
                    <p class="content-img-slider__text">Un servicio indicado para aquellas personas que deseen vivir una vida plena, 
                    ya que su finalidad es reducir la ansiedad y ayudarles a un manejo adecuado de ella en situaciones que lo 
                    ameriten.</p>
                    <p class="content-img-slider__text">
                        <a href="https://lovetura.com/que-ofrecemos/colonizador-liberado/" class="btn btn--pill btn--fill btn--primary">Ver Más</a>
                    </p>
                </div>
            </div>

        </div>

        </div>

        <div class="content-img-slider__controller">
            <div class="content-img-slider__next slick-arrow">
                <img src="https://lovetura.com/wp-content/uploads/2020/05/gradient-arrow-next-00.svg" alt="">
            </div>
            <ul class="content-img-slider__dots">

            </ul>
        </div>
    
    </article>
    <?php }
}