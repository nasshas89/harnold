import cartPopup from '../components/cartPopup';
import header from '../components/header';
import productCard from '../components/productCard';
import circularNumber from '../components/circularNumber';
import modalMenuBurger from '../components/modalMenuBurger';
export default {
  init() {
    cartPopup.init();
    header.init();
    productCard.init();
    circularNumber.init();
    modalMenuBurger.init();
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
