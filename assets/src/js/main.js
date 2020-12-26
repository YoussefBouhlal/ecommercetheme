import '../css/main.css';

if (module.hot) {
    module.hot.accept();
}

import Subcategories from './components/Subcategories';
import ProductSize from './components/product/ProductSize';

new Subcategories();
new ProductSize();