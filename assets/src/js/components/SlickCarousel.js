( function( $ ) {

    class SlickCarousel
    {
        constructor()
        {
    
            this.events();
        }
    
        events()
        {
            $(".slick-carousel").slick( {
                arrows : false
            } );
        }
    
    }
    new SlickCarousel;

})(jQuery);