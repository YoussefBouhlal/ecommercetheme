class ProductSize
{
    constructor()
    {
        this.customSelect = document.querySelectorAll( '.single-product__sizes__select' );

        if( this.customSelect ){
            this.events();
        }
    }

    events()
    {
        this.creatElement();
        
        document.addEventListener("click", (e) => this.closeAllSelect(e.target) );

        for (let i = 0; i < this.customSelect.length; i++) {
            const element = this.customSelect[i];
            element.addEventListener( "click", (e) => this.handleBoxes(e) );
        }
    }

    /*
    *Creat nedded element
    */
    creatElement()
    {
        let x, l, i, selElmnt, ll, a, b, j, c;

        /* Number of element with the class "custom-select" */
        x = this.customSelect;
        l = x.length;

        for ( i=0; i<l; i++ ){
            /* Number of options in this select*/
            selElmnt = x[i].querySelector( "select" );
            ll = selElmnt.length;

            /* Create inside "custom-select" a div that will act as the selected item */
            a = document.createElement("DIV");
            a.setAttribute( "class", "single-product__sizes__select__selected text-gray bg-with pt-8 pb-8 pr-16 pl-16" );
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);

            /* Create a div that will contain the option list*/
            b = document.createElement("DIV");
            b.setAttribute( "class", "single-product__sizes__select__items select-hide bg-white" );

            for ( j=0; j<ll; j++ ){

                /* Create div that will act as an option*/
                c = document.createElement("DIV");
                c.setAttribute( "class", "option text-black pt-8 pb-8 pl-16 pr-16")
                c.innerHTML = selElmnt.options[j].innerHTML;

                b.appendChild(c);
            }

            x[i].appendChild(b);
        }
    }

    /*
    *Handle the value of the custom-select
    */
    handleBoxes(e)
    {
        let target = e.target;

        if( target.classList.contains('single-product__sizes__select__selected') ){
            /* Selected box is clicked, close other boxes and oprn/close the current box*/
            this.closeAllSelect( target );
            target.nextSibling.classList.toggle( "select-hide" );
            target.classList.toggle( "select-arrow-active" );

        }else if( target.classList.contains( 'option' ) ){
            /* One item is clicked, update original select box and the selected item*/
            let y, i, k, s, h, sl, yl;
            s = target.parentNode.parentNode.querySelectorAll('select')[0];
            sl = s.length;
            h = target.parentNode.previousSibling;

            for ( i=0; i<sl; i++ ){
                if ( s.options[i].innerHTML == target.innerHTML ){
                    s.selectedIndex = i;
                    h.innerHTML = target.innerHTML;
                    y = target.parentNode.querySelectorAll( ".same-as-selected" );
                    yl = y.length;

                    for ( k=0; k<yl; k++ ){
                        y[k].classList.remove( "same-as-selected" );
                    }

                    target.classList.add( "same-as-selected" );
                    break;
                }
            }
            h.click();
        }
    }

    /*
    *Close all boxes if the user click outside the select except the current select box
    */
    closeAllSelect( elmnt )
    {
        let x, y, i, xl, yl, arrNo = [];
        x = document.querySelectorAll( ".single-product__sizes__select__items" );
        y = document.querySelectorAll( ".single-product__sizes__select__selected" );
        xl = x.length;
        yl = y.length;

        for ( i=0; i<yl; i++ ){
            if ( elmnt == y[i] ){
                arrNo.push(i)
            } else {
                y[i].classList.remove( "select-arrow-active" );
            }
        }
        for ( i=0; i<xl; i++ ){
            if ( arrNo.indexOf(i) ){
                x[i].classList.add( "select-hide" );
            }
        }
    }

}
export default ProductSize;