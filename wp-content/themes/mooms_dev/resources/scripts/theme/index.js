import Swup from 'swup';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import "./pages/*.js";
import "@styles/theme";
import "@images/favicon.ico";
import AOS from "aos/dist/aos";
// import Swiper from 'swiper/swiper-bundle.min';

jQuery(document).ready(function () {
  const swup = new Swup();
  initAnimations();
  setupBackToTopButton();
  setupMenuFixedBehavior();
  setupMobileMenuHandling();
});

/**
 * Khởi tạo hoạt ảnh GSAP và AOS
 */
function initAnimations() {
  // GSAP
  gsap.registerPlugin(ScrollTrigger);
  gsap.from(".welcome-aiot", {
    x: '50%',
    duration: 2,
    opacity: 0.3,
    scrollTrigger: {
      trigger: ".welcome-aiot",
      start: "top 80%",
      end: "bottom 20%",
      scrub: true,
    }
  });

  // AOS
  AOS.init({
    duration: 400,
  });
}

/**
 * Back to top button
 */
function setupBackToTopButton() {
  const btn = $('#button');

  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 600) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 300);
  });
}

/**
 * Menu fixed behavior
 */
function setupMenuFixedBehavior() {
  const navbar = document.querySelector('#header');

  $(window).on('scroll', () => {
    const isMobile = window.innerWidth <= 768;
    const scrollThreshold = isMobile ? 90 : 130.8;

    if (window.scrollY > scrollThreshold) {
      navbar.classList.add('fixed');
    } else {
      navbar.classList.remove('fixed');
    }
  });
}

/**
 * Menu mobile handling
 */
function setupMobileMenuHandling() {
  let menuType = 'desktop';

  $(window).on('load resize', function () {
    const currMenuType = matchMedia('only screen and (max-width: 991px)').matches ? 'mobile' : 'desktop';

    if (currMenuType !== menuType) {
      menuType = currMenuType;
      if (currMenuType === 'mobile') {
        enableMobileMenu();
      } else {
        enableDesktopMenu();
      }
    }
  });

  // Toggle mobile menu
  $('.btn-menu').on('click', function () {
    $('#mainnav-mobi').slideToggle(300);
    $(this).toggleClass('active');
  });

  // Handle submenu in mobile menu
  $(document).on('click', '#mainnav-mobi li .btn-submenu', function (e) {
    $(this).toggleClass('active').next('ul').slideToggle(300);
    e.stopImmediatePropagation();
  });
}

/**
 * Enable mobile menu
 */
function enableMobileMenu() {
  const $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
  const hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

  $('#header .container').after($mobileMenu);
  hasChildMenu.children('ul').hide();
  hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
  $('.btn-menu').removeClass('active');
}

/**
 * Enable desktop menu
 */
function enableDesktopMenu() {
  const $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');

  $desktopMenu.find('.submenu').removeAttr('style');
  $('#header').find('.nav-wrap').append($desktopMenu);
  $('.btn-submenu').remove();
}
