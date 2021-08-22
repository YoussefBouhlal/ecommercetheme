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
import 'popper.js';
import 'bootstrap';
import 'slick-carousel';

/*
 *Import classes
 */
import SlickCarousel from './components/SlickCarousel';
import Subcategories from './components/Subcategories';
import ProductSize from './components/product/ProductSize';
import CartSlider from './components/cart/CartSlider';

new Subcategories();
new ProductSize();
// new CartSlider();