(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".photolancer-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".photolancer-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".photolancer-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".photolancer-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".photolancer-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".photolancer-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".photolancer-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".photolancer-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".photolancer-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".photolancer-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".photolancer-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".photolancer-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".photolancer-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".photolancer-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".photolancer-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".photolancer-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".photolancer-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".photolancer-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".photolancer-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".photolancer-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".photolancer-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".photolancer-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".photolancer-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".photolancer-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".photolancer-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".photolancer-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".photolancer-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".photolancer-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".photolancer-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".photolancer-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".photolancer-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".photolancer-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".photolancer-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".photolancer-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".photolancer-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".photolancer-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".photolancer-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".photolancer-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".photolancer-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".photolancer-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".photolancer-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".photolancer-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".photolancer-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".photolancer-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".photolancer-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var photolancerStickyMenu = $(".photolancer-sticky-menu");
    var photolancerStickyNavigation = $(".photolancer-sticky-navigation");

    if (photolancerStickyMenu.length && scrollTop > 0) {
      photolancerStickyMenu.addClass("sticky-menu-enabled photolancer-zoom-in-up");
    } else {
      photolancerStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".photolancer-scrollto-top a").fadeIn();
    } else {
      jQuery(".photolancer-scrollto-top a").fadeOut();
    }
  });
  jQuery(".photolancer-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
})(jQuery);
