(function( $ ){

    class Slick
    {
        constructor()
        {
            this.events();
            this.initiateCarousel();
        }

        events()
        {
            
        }

        initiateCarousel()
        {
            $('.single-product__images__main--carousel').slick({
                arrows: true,
                asNavFor: '.single-product__images__thumbs--carousel'
            });
            $('.single-product__images__thumbs--carousel').slick({
                slidesToShow: 3,
                focusOnSelect: true,
                asNavFor: '.single-product__images__main--carousel',
                vertical: true
            });
        }

    }
    new Slick;

})( jQuery );