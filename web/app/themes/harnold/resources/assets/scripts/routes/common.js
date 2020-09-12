import cartPopup from '../components/cartPopup';
import header from '../components/header';
export default {
  init() {
    cartPopup.init();
    header.init();
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
