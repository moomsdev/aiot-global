// import "bootstrap/dist/js/bootstrap.bundle";
import "./pages/*.js";
import "@styles/theme";
import "@images/favicon.ico";
import AOS from "aos/dist/aos";
// import Swiper from 'swiper/swiper-bundle.min';

jQuery(document).ready(function () {

  AOS.init({
    duration: 400,
  });

  /**
   * back to top
   */
  var btn = $('#button');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 600) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
  });

  /**
   * Menu fixed
   */
  let navbar = document.querySelector('#header')

  /**
   * Scroll menu
   */
  window.addEventListener('scroll', () => {
    const isMobile = window.innerWidth <= 768;

    if (isMobile) {
      if (window.scrollY > 90) {
        navbar.classList.add('fixed');
      } else {
        navbar.classList.remove('fixed');
      }
    } else {
      if (window.scrollY > 130.8) {
        navbar.classList.add('fixed');
      } else {
        navbar.classList.remove('fixed');
      }
    }
  });

  // menu mobile
  var menuType = 'desktop';

  $(window).on('load resize', function () {
    var currMenuType = 'desktop';

    if (matchMedia('only screen and (max-width: 991px)').matches) {
      currMenuType = 'mobile';
    }

    if (currMenuType !== menuType) {
      menuType = currMenuType;

      if (currMenuType === 'mobile') {
        var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
        var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

        $('#header .container').after($mobileMenu);
        hasChildMenu.children('ul').hide();
        hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
        $('.btn-menu').removeClass('active');
      } else {
        var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');

        $desktopMenu.find('.submenu').removeAttr('style');
        $('#header').find('.nav-wrap').append($desktopMenu);
        $('.btn-submenu').remove();
      }
    }
  });

  $('.btn-menu').on('click', function () {
    $('#mainnav-mobi').slideToggle(300);
    $(this).toggleClass('active');
  });

  $(document).on('click', '#mainnav-mobi li .btn-submenu', function (e) {
    $(this).toggleClass('active').next('ul').slideToggle(300);
    e.stopImmediatePropagation()
  });

});
