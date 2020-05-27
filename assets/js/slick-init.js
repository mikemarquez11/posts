( function( $ ) {
    /**
     * @param $scope The Widget wrapper element as a jQuery element
     * @param $ The jQuery alias
     */
    var WidgetLoveSlides = function( $scope, $ ) {
        var $slides = $scope.find('.content-img-slider__slides');

        $slides.slick({
            autoplay: true,
            centerPadding: '0px',
            nextArrow: ".content-img-slider__next",
            prevArrow: "",
            fade: true,
            dots: true,
            dotsClass: 'slick-dots',
            appendDots: ".content-img-slider__controller .content-img-slider__dots"                                     
        });
    };
     
    // Make sure you run this code under Elementor.
    $( window ).on( 'elementor/frontend/init', function() {
      elementorFrontend.hooks.addAction( 'frontend/element_ready/LoveSlides.default', WidgetLoveSlides );
    } );

  } )( jQuery );