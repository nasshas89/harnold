export default {
  init() {
    // JavaScript to be fired on the home page

    $(document).ready(function () {
      $('.tablinks').click(function () {
       let cityName = $(this).data('cityname');
       
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName('sub-menu-picto');
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = 'none';
        }
        tablinks = document.getElementsByClassName('tablinks');
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(' active', '');
        }
        document.getElementById(cityName).style.display = 'block';
        $(this).addClass('active');
      
      });
    });


    /////////////////// product +/-
    $(document).ready(function () {
      $('.num-in span').click(function () {
        var $input = $(this).parents('.num-block').find('input.in-num');
        if ($(this).hasClass('minus')) {
          var count = parseFloat($input.val()) - 1;
          count = count < 1 ? 1 : count;
          if (count < 2) {
            $(this).addClass('dis');
          } else {
            $(this).removeClass('dis');
          }
          $input.val(count);
        } else {
          var counto = parseFloat($input.val()) + 1
          $input.val(counto);
          if (counto > 1) {
            $(this).parents('.num-block').find(('.minus')).removeClass('dis');
          }
        }

        $input.change();
        return false;
      });

    });
    // product +/-




    //   Function know more sur les carte product
    let showMoreButton = $('.texte-more');
    showMoreButton.on('click', this.showMore);

    let clikos = $('.tablinks');
    clikos.on('click', this.clickosFunction);

  },

  clickosFunction: function () {
   
    
    
  },

  showMore: function () {
    if ($(this).parent().parent().find('.content-product-car__info').hasClass('js-show-more')) {

      $(this).parent().parent().find('.content-product-car__info').removeClass('js-show-more');
    } else {
      $('.content-product-car__info').removeClass('js-show-more');
      $(this).parent().parent().find('.content-product-car__info').addClass('js-show-more');
    }

    if ($(this).hasClass('js-hidden-more')) {

      $(this).removeClass('js-hidden-more');
    } else {
      $('.texte-more').removeClass('js-hidden-more');
      $(this).addClass('js-hidden-more');
    }

  },



  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
