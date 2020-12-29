/*
*Import CSS Files
*/
import '../css/main.css';

if (module.hot) {
    module.hot.accept();
}

/*
*Import 3rd Party Files
*/
import 'slick-carousel';

/*
*Import classes
*/
import Subcategories from './components/Subcategories';
import ProductSize from './components/product/ProductSize';
import CartSlider from './components/cart/CartSlider';
import Slick from './components/Slick';

new Subcategories();
new ProductSize();
new CartSlider();