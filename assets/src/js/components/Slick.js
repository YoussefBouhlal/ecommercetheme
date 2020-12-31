(function( $ ){

    class Slick
    {
        constructor()
        {
            this.slidesCount = 0;
            this.slides = document.querySelector('.single-product__images__thumbs--carousel');

            if ( this.slides ) {
                this.slidesCount = this.slides.childElementCount;
            }

            this.events();
            this.initiateCarousel();
        }

        events()
        {
            
        }

        initiateCarousel()
        {
            $('.single-product__images__main--carousel').slick({
                arrows: false,
                draggable: false,
                rows: 0,
                asNavFor:'.single-product__images__thumbs--carousel',
                responsive: [
                    {
                        breakpoint: 576,
                        settings: {
                            dots: true,
                            draggable: true,
                            centerMode: true
                        }
                    }
                ]
            });
            $('.single-product__images__thumbs--carousel').slick({
                slidesToShow: this.slidesCount,
                focusOnSelect: true,
                asNavFor: '.single-product__images__main--carousel',
                vertical: true,
                rows: 0
            });
        }

    }
    new Slick;

})( jQuery );