class CartSlider
{
    constructor()
    {
        this.cartSlider = document.querySelector('#cart-slider');
        this.openBtn = document.querySelector('#open-cart-slider');
        this.closeBtn = document.querySelector('#close-cart-slider');

        this.events();
    }

    events()
    {
        this.openBtn.addEventListener( 'click', () => this.openSlider() );
        this.closeBtn.addEventListener( 'click', () => this.closeSlider() );

        document.addEventListener( 'click', (e) => this.userClick(e) );
    }

    openSlider()
    {
        this.cartSlider.classList.remove( 'cart--hide' );
    }

    closeSlider()
    {
        this.cartSlider.classList.add( 'cart--hide' );
    }

    userClick(e)
    {
        let target = e.target;
        if ( target.classList.contains( 'cart' ) ) {
            this.closeSlider();
        }

    }

}
export default CartSlider;