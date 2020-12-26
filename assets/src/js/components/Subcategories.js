class Subcategories
{
    constructor()
    {
        this.subcategories = document.querySelector( '.subcategories' );

        if ( this.subcategories ){
            this.leftArrow = document.querySelector( '.subcategories__left-arrow' );
            this.rightArrow = document.querySelector( '.subcategories__right-arrow' );
            this.content = document.querySelector( '.subcategories__content' );
            this.contentScroll = document.querySelector( '.subcategories__content__scroll' );

            this.events();
        }
    }

    events()
    {
        window.onresize = () => this.onResize();
        this.handleButtons( 0 );

        this.leftArrow.addEventListener( 'click', () => this.moveScroll(+40) );
        this.rightArrow.addEventListener( 'click', () => this.moveScroll(-40) );
    }

    /*
    *when the size of the screen changed
    */
    onResize()
    {
        let current = this.contentScroll.offsetLeft;
        this.handleButtons( current );
    }

    /*
    *show or hide button depend of th position of the contentScroll
    *@param left    position of the left side of th contentScroll
    */
    handleButtons( left )
    {
        if ( left >= 0 ){
            this.leftArrow.style.display = 'none';
        }else {
            this.leftArrow.style.display = 'block';
        }

        let width = this.contentScroll.getBoundingClientRect().right;
        let parentWidth = this.content.getBoundingClientRect().right;
        
        if ( width <= parentWidth ){
            this.rightArrow.style.display = 'none';
        }else {
            this.rightArrow.style.display = 'block';
        }
    }

    /*
    *move the contentScroll left or right depend of the button clicked
    */
    moveScroll( val )
    {
        let current = this.contentScroll.offsetLeft;
        let newPos = current + val;

        this.contentScroll.style.left = newPos+'px';

        this.handleButtons( newPos );
    }

}
export default Subcategories;