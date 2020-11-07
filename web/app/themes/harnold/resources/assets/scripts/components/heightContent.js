export default {
  init() {

    $(window).ready(cardBlogHomeHeight);
    $(window).resize(cardBlogHomeHeight);

  },

};


function cardBlogHomeHeight() {
  let titleElts = document.getElementsByClassName('js-height');

  for (let i = 0; i < titleElts.length; i++) {
    titleElts[i].style.height = 'inherit';
  }

    var maxHeight = 0;

    for (let i = 0; i < titleElts.length; i++) {
      let titleHeigth = parseInt(window.getComputedStyle(titleElts[i]).height);
      maxHeight = titleHeigth > maxHeight ? titleHeigth : maxHeight;
    }
    for (let i = 0; i < titleElts.length; i++) {
      titleElts[i].style.height = maxHeight + 'px';
    }
  
}
