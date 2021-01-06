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
                dots : true
            } );
        }
    
    }
    new SlickCarousel;

})(jQuery);