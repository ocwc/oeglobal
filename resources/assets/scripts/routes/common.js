import hoverintent from 'hoverintent/dist/hoverintent.min';

export default {
  init() {
    window.WebFontConfig = {
      google: { families: ['Montserrat:400,600,700&amp;subset=latin-ext'] },
    };

    (function(d) {
      let wf = d.createElement('script'),
        s = d.scripts[0];
      wf.src =
        'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
    })(document);

    $('.menu-item.has-children').each(function() {
      hoverintent(
        this,
        () => {
          $(this).addClass('is-open');
        },
        () => {
          $(this).removeClass('is-open');
        }
      ).options({
        timeout: 500,
        handleFocus: true,
      });

      $(this).on('click', function(event) {
        $(this).toggleClass('is-open');
        event.stopPropagation();
      });
    });

    $('.js-toggle-menu').on('click', () => {
      $('body').toggleClass('menu-open');
      $('.nav-primary').toggleClass('hidden');
    });

    $('.js-show-more').on('click', function() {
      console.log($(this).next('ul').toggleClass('hidden'));
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
